<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Agent;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class UserController extends Controller
{
    public function index()
    {
        $user = User::with('agent', 'roles')->get();
        return view('user.index', compact('user'));
    }

    public function create()
    {
        $agent = Agent::all();
        $role = Role::all();
        return view('user.create', compact('agent', 'role'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_lengkap' => 'required|string|max:255',
            'alamat' => 'required|string|max:255',
            'no_tlp' => 'required|string|max:20|unique:user,no_tlp',
            'password' => 'required|string|min:6',
            'agent_id' => 'nullable|exists:agent,id',
            'status' => 'required|in:0,1',
            'role' => 'nullable|exists:roles,name',
        ]);

        $user = User::create([
            'nama_lengkap' => $request->nama_lengkap,
            'alamat' => $request->alamat,
            'no_tlp' => $request->no_tlp,
            'password' => bcrypt($request->password),
            'agent_id' => $request->agent_id,
            'status' => $request->status,
        ]);

        if ($request->has('role')) {
           $user->assignRole($request->role);
        }
        return redirect()->route('user.index')->with('success', 'User berhasil ditambahkan.');
    }

    public function edit($id){
        $user = User::findOrFail($id);
        $agent = Agent::all();
        $role = Role::all();
        return view('user.edit', compact('user', 'agent', 'role'));
    }

    public function update(Request $request, $id){
        $user = User::findOrFail($id);

        $request->validate([
            'nama_lengkap' => 'required|string|max:255',
            'alamat' => 'required|string|max:255',
            'no_tlp' => 'required|string|max:20|unique:user,no_tlp,' . $user->id,
            'password' => 'nullable|string|min:6',
            'agent_id' => 'nullable|exists:agent,id',
            'status' => 'required|in:0,1',
            'role' => 'nullable|exists:roles,name',
        ]);

        $user->update([
            'nama_lengkap' => $request->nama_lengkap,
            'alamat' => $request->alamat,
            'no_tlp' => $request->no_tlp,
            'agent_id' => $request->agent_id,
            'status' => $request->status,
        ]);

        if ($request->filled('password')) {
            $user->update(['password' => bcrypt($request->password)]);
        }

        if ($request->has('role')) {
           $user->syncRoles($request->role);
        }
        return redirect()->route('user.index')->with('success', 'User berhasil diperbarui.');
    }

    public function destroy($id){
        $user = User::findOrFail($id);
        $user->delete();
        return redirect()->route('user.index')->with('success', 'User berhasil dihapus.');
    }
}
