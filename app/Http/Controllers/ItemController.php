<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;

class ItemController extends Controller
{
    public function __construct()
    {
        $this->middleware('role:admin');
    }
    public function index(){
        $item = Item::all();
        return view('item.index', compact('item'));
    }

    public function create(){
        return view('item.create');
    }

    public function store(Request $request){
        $request->validate([
            'nama_item' => 'required|string',
            'harga_barang' => 'required|numeric',
        ]);

        $item = Item::create([
            'nama_item' => $request->nama_item,
            'harga_barang' => $request->harga_barang,
        ]);

        return redirect()->route('item.index')->with('success', 'Item berhasil ditambahkan');
    }

    public function edit($id){
        $item = Item::findOrFail($id);
        return view('item.edit', compact('item'));
    }

    public function update(Request $request, $id){
        $request->validate([
            'nama_item' => 'required|string',
            'harga_barang' => 'required|numeric',
        ]);

        $item = Item::findOrFail($id);
        $item->update([
            'nama_item' => $request->nama_item,
            'harga_barang' => $request->harga_barang,
        ]);

        return redirect()->route('item.index')->with('success', 'Item berhasil diperbarui');
    }

    public function destroy($id){
        $item = Item::findOrFail($id);
        $item->delete();
        return redirect()->route('item.index')->with('success', 'Item berhasil dihapus');
    }
}
