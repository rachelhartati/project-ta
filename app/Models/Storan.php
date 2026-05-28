<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Storan extends Model
{
    use HasFactory;

    protected $table = 'storan';

    protected $fillable = [
        'agent_id',
        'item_id',
        'jumlah_pcs',
        'tanggal_setoran',
        'harga_per_pcs',
        'total',
        'status',
    ];

    public function agent()
    {
        return $this->belongsTo(Agent::class);
    }

    public function item()
    {
        return $this->belongsTo(Item::class);
    }
}