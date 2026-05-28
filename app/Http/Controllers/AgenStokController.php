<?php

namespace App\Http\Controllers;
use App\Models\AgentStok;
use App\Models\User;

use Illuminate\Http\Request;

class AgenStokController extends Controller
{
    public function index(){
    $agent_id = auth()->user()->agent_id;
    
    $agentstok = AgentStok::with('item')
        ->where('agent_id', $agent_id)
        ->get();
    
    $users = User::where('agent_id', $agent_id)->get();
    
    return view('agentstok.stok', compact('agentstok', 'users'));
}
}
