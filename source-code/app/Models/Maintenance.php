<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Maintenance extends Model
{
    use HasFactory;

    protected $table = 'maintenance';


    protected $fillable = ['user_produk_id', 'tanggal_perbaiki', 'maintenance', 'bukti'];

    public function userProduk()
    {
        return $this->belongsTo(UserProduk::class, 'user_produk_id');
    }
}
