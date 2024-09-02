<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    use HasFactory;

    protected $table = 'produk';


    protected $fillable = ['nama', 'merk', 'via','kategori_id'];

    public function images()
    {
        return $this->hasMany(ProdukImage::class, 'produk_id');
    }

    public function kategori()
    {
        return $this->belongsTo(Kategori::class);
    }
}
