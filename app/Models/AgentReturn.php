<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AgentReturn extends Model
{
    use HasFactory;

    protected $table = 'agent_returns';

    protected $fillable = [
        'agent_id',
        'item_id',
        'jumlah_pcs',      // ← ganti jumlah_kg, hapus harga_per_kg & total_gaji
        'tanggal_return',
    ];

    public function agent()
    {
        return $this->belongsTo(Agent::class);
    }

    public function item()
    {
        return $this->belongsTo(Item::class);
    }

    // Total gaji dihitung otomatis dari item
    public function getTotalGajiAttribute()
    {
        return $this->jumlah_pcs * ($this->item->harga_item ?? 0);
    }
}