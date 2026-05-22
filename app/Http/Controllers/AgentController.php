<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Agent;
use App\Models\User;
use Spatie\Permission\Models\Role;

class AgentController extends Controller
{
  public function index(){
    $agent = Agent::all();
    $user = User::all();
    return view('agent.index', compact('agent', 'user'));
  }

  public function detail($id){
    $agent = Agent::findOrFail($id);
    $user = User::all();
    return view('agent.detail', compact('agent', 'user'));
  }

  public function create(){
    $user = User::all();
    return view('agent.create', compact('user'));
  }

  public function store(Request $request){
    $request->validate([
        'nama_agent' => 'required|string',
        'alamat_agent' => 'required|string',
        'no_tlp_agent' => 'required|string',
        'pic_id' => 'required|exists:user,id',
    ]);

    $agent = Agent::create([
        'nama_agent' => $request->nama_agent,
        'alamat_agent' => $request->alamat_agent,
        'no_tlp_agent' => $request->no_tlp_agent,
        'pic_id' => $request->pic_id,
    ]);
    return redirect()->route('agent.index')->with('success', 'Agent berhasil disimpan');
  }

  public function edit($id){
    $agent = Agent::findOrFail($id);
    $user = User::all();
    return view('agent.edit', compact('agent', 'user'));
  }

  public function update(Request $request, $id){
    $request->validate([
        'nama_agent' => 'required|string',
        'alamat_agent' => 'required|string',
        'no_tlp_agent' => 'required|string',
        'pic_id' => 'required|exists:user,id',
    ]);

    $agent = Agent::findOrFail($id);
    $agent->update([
        'nama_agent' => $request->nama_agent,
        'alamat_agent' => $request->alamat_agent,
        'no_tlp_agent' => $request->no_tlp_agent,
        'pic_id' => $request->pic_id,
    ]);
    return redirect()->route('agent.index')->with('success', 'Agent berhasil diperbarui');
  }

  public function destroy($id){
        $agent = Agent::findOrFail($id);
        $agent->delete();
        return redirect()->route('agent.index')->with('success', 'Agent berhasil dihapus');
    }

  public function createMember(){
    return view('agent.create_member');
  }

  public function storeMember(Request $request){
    $request->validate([
        'nama_lengkap' => 'required|string|max:255',
        'alamat' => 'required|string|max:255',
        'no_tlp' => 'required|string|max:20|unique:user,no_tlp',
        'password' => 'required|string|min:6',
    ]);

    $user = User::create([
        'nama_lengkap' => $request->nama_lengkap,
        'alamat' => $request->alamat,
        'no_tlp' => $request->no_tlp,
        'password' => bcrypt($request->password),
        'agent_id' => auth()->user()->agent_id, // ← ambil dari user yang login
        'status' => 1,
    ]);

    $user->assignRole('anggota');

    return redirect()->route('agent.index')->with('success', 'Member berhasil ditambahkan.');
}

}
