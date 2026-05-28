<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Agent;
use App\Models\Item;
use App\Models\Storan;

class StoranController extends Controller
{
    public function index(){
        $storan = Storan::all();
        return view('storan.kelola-setoran', compact('storan'));
    }

    public function create(){
        $agent = Agent::all();
        $items = Item::all();
        return view('storan.tambah', compact('agent', 'items'));
    }

    public function store(Request $request){
    $request->validate([
        'agent_id'      => 'required|exists:agent,id',
        'item_id'       => 'required|exists:item,id',
        'tanggal_setoran' => 'required|date',
        'harga_per_pcs' => 'required|numeric|min:0',
        'jumlah_pcs'        => 'required|numeric|min:1',
        'total'         => 'required|numeric|min:0',
        'status'        => 'required|in:disetorkan,belum_disetorkan',
    ]);

    Storan::create([
        'agent_id'        => $request->agent_id,
        'item_id'         => $request->item_id,
        'tanggal_setoran' => $request->tanggal_setoran,
        'harga_per_pcs'   => $request->harga_per_pcs,
        'jumlah_pcs'      => $request->jumlah_pcs,
        'total'           => $request->total,
        'status'          => $request->status,
    ]);

    return redirect()->route('kelola-setoran')->with('success', 'Setoran berhasil disimpan!');
}

public function edit($id){
    $storan = Storan::findOrFail($id);
    $agents = Agent::all(); 
    $items = Item::all();
    return view('storan.edit', compact('storan', 'agents', 'items'));
}

}
