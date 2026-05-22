<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AgentJob extends Model
{
    use HasFactory;

    protected $table = 'agent_job';

    protected $fillable = [
        'agent_id',
        'user_id',
        'kode_pengerjaan',
        'tanggal_diberikan',
        'tanggal_selesai',
        'nama_barang',
        'jumlah_barang',
        'status',
    ];

    /*
    |--------------------------------
    | STATUS CONSTANT (opsional tapi bagus)
    |--------------------------------
    */
    const STATUS_IN_PROGRESS = 'in_progress';
    const STATUS_DONE = 'done';

    /*
    |--------------------------------
    | RELATIONSHIP
    |--------------------------------
    */

    // job milik agent
    public function agent()
    {
        return $this->belongsTo(Agent::class);
    }

    // job diberikan ke user (member)
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /*
    |--------------------------------
    | HELPER STATUS
    |--------------------------------
    */

    public function isInProgress()
    {
        return $this->status === self::STATUS_IN_PROGRESS;
    }

    public function isDone()
    {
        return $this->status === self::STATUS_DONE;
    }
}