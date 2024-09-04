<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inspeksi extends Model
{
    use HasFactory;

    protected $fillable = ['monitoring_id', 'pic', 'waktu', 'gambar', 'judul'];

    public function monitoring()
    {
        return $this->belongsTo(Monitoring::class);
    }
}
