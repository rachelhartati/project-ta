<?php

namespace App\Http\Controllers;
use App\Models\AgentStok;

use Illuminate\Http\Request;

class AgenStokController extends Controller
{
    public function index(){
        $agentstok = AgentStok::all();
        return view('agentstok.stok', compact('agentstok'));
    }
}
