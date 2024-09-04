<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Maintenance extends Model
{
    use HasFactory;

    protected $table = 'maintenance';


    protected $fillable = ['monitoring_id', 'tanggal_perbaiki', 'maintenance', 'bukti'];

    public function monitoring()
    {
        return $this->belongsTo(Monitoring::class);
    }
}
