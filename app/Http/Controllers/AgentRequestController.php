<?php namespace App\Http\Controllers;

use App\Models\AgentRequest;
use App\Models\Item;
use App\Models\Stok;
use Illuminate\Http\Request;

class AgentRequestController extends Controller {
    public function index() {
        $requests=AgentRequest::with('item', 'agent') ->where('agent_id', auth()->user()->agent_id) ->latest() ->get();
        return view('agent_request.index', compact('requests'));
    }

    public function create() {
        $items=Item::all();
        return view('agent_request.create', compact('items'));
    }

    public function store(Request $request) {
        $request->validate([ 'item_id'=> 'required|exists:item,id',
            'jumlah_barang'=> 'required|numeric|min:1',
            'note'=> 'nullable|string',
            ]);

        $stok=Stok::where('item_id', $request->item_id)->first();

        if ( !$stok || $stok->jumlah_barang < $request->jumlah_barang) {
            return back()->with('error', 'Stok tidak mencukupi!');
        }

        AgentRequest::create([ 'agent_id'=> auth()->user()->agent_id,
            'kode_request'=> 'REQ-'. time(),
            'tanggal_request'=> now(),
            'item_id'=> $request->item_id,
            'jumlah_barang'=> $request->jumlah_barang,
            'note'=> $request->note,
            'status'=> AgentRequest::STATUS_WAITING,
            ]);

        return redirect()->route('agent-request.index')->with('success', 'Request berhasil dikirim');
    }

    public function show($id) {
        $agentRequest=AgentRequest::with('item', 'agent')->findOrFail($id);
        return view('agent_request.show', compact('agentRequest'));
    }

    public function edit($id) {
        $agentRequest=AgentRequest::findOrFail($id);

        if ($agentRequest->status !==AgentRequest::STATUS_WAITING) {
            return back()->with('error', 'Hanya request dengan status waiting yang bisa diedit!');
        }

        $items=Item::all();
        return view('agent_request.edit', compact('agentRequest', 'items'));
    }

    public function update(Request $request, $id) {
        $agentRequest=AgentRequest::findOrFail($id);

        if ($agentRequest->status !==AgentRequest::STATUS_WAITING) {
            return back()->with('error', 'Hanya request dengan status waiting yang bisa diupdate!');
        }

        $request->validate([ 'item_id'=> 'required|exists:item,id',
            'jumlah_barang'=> 'required|numeric|min:1',
            'note'=> 'nullable|string',
            ]);

        $stok=Stok::where('item_id', $request->item_id)->first();

        if ( !$stok || $stok->jumlah_barang < $request->jumlah_barang) {
            return back()->with('error', 'Stok tidak mencukupi!');
        }

        $agentRequest->update([ 'item_id'=> $request->item_id,
            'jumlah_barang'=> $request->jumlah_barang,
            'note'=> $request->note,
            ]);

        return redirect()->route('agent-request.index')->with('success', 'Request berhasil diperbarui');
    }

    public function destroy($id) {
        $agentRequest=AgentRequest::findOrFail($id);

        if ($agentRequest->status !==AgentRequest::STATUS_WAITING) {
            return back()->with('error', 'Hanya request dengan status waiting yang bisa dihapus!');
        }

        $agentRequest->delete();
        return redirect()->route('agent-request.index')->with('success', 'Request berhasil dihapus');
    }

    public function approve(Request $request, $id)
{
    $agentRequest = AgentRequest::findOrFail($id);

    if ($agentRequest->status !== AgentRequest::STATUS_WAITING) {
        return back()->with('error', 'Hanya request dengan status waiting yang bisa diapprove!');
    }

    // Cek stok admin
    $stok = Stok::where('item_id', $agentRequest->item_id)->first();

    if (!$stok || $stok->jumlah_barang < $agentRequest->jumlah_barang) {
        return back()->with('error', 'Stok tidak mencukupi!');
    }

    // Kurangi stok admin
    $stok->decrement('jumlah_barang', $agentRequest->jumlah_barang);

    // Tambah atau update stok agent
    $agentStok = AgentStok::where('agent_id', $agentRequest->agent_id)
        ->where('item_id', $agentRequest->item_id)
        ->first();

    if ($agentStok) {
        $agentStok->increment('jumlah_barang', $agentRequest->jumlah_barang);
    } else {
        AgentStok::create([
            'agent_id' => $agentRequest->agent_id,
            'item_id' => $agentRequest->item_id,
            'jumlah_barang' => $agentRequest->jumlah_barang,
        ]);
    }

    // Update status request
    $agentRequest->update([
        'status' => AgentRequest::STATUS_APPROVED,
        'approved_at' => now(),
        'approved_by' => auth()->user()->id,
    ]);

    return redirect()->route('agent-request.index')->with('success', 'Request berhasil diapprove!');
}

public function reject(Request $request, $id)
{
    $request->validate([
        'rejected_reason' => 'required|string|max:255',
    ]);

    $agentRequest = AgentRequest::findOrFail($id);

    if ($agentRequest->status !== AgentRequest::STATUS_WAITING) {
        return back()->with('error', 'Hanya request dengan status waiting yang bisa direject!');
    }

    $agentRequest->update([
        'status' => AgentRequest::STATUS_REJECTED,
        'rejected_at' => now(),
        'rejected_by' => auth()->user()->id,
        'rejected_reason' => $request->rejected_reason,
    ]);

    return redirect()->route('agent-request.index')->with('success', 'Request berhasil direject!');
}

}

