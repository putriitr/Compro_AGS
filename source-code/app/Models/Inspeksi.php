<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inspeksi extends Model
{
    use HasFactory;

    protected $table = 'inspeksi';

    protected $fillable = ['user_produk_id', 'pic', 'waktu', 'gambar', 'judul'];

    public function userProduk()
    {
        return $this->belongsTo(UserProduk::class, 'user_produk_id');
    }
}
