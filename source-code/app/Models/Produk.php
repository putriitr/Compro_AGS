<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    use HasFactory;

    protected $table = 'produk';


    protected $fillable = ['nama', 'merk', 'via','kegunaan','user_manual','kategori_id'];

    public function images()
    {
        return $this->hasMany(ProdukImage::class, 'produk_id');
    }

    public function videos()
    {
        return $this->hasMany(ProdukVideo::class, 'produk_id');
    }

    public function kategori()
    {
        return $this->belongsTo(Kategori::class);
    }

    public function produks()
    {
        return $this->hasMany(Produk::class, 'user_id');
    }

    public function users()
    {
        return $this->belongsToMany(User::class, 'user_produk', 'produk_id', 'user_id');
    }
    public function controlGenerationsProduk()
    {
        return $this->hasMany(ControlGenerationsProduk::class, 'produk_id');
    }
    
    public function documentCertifications()
    {
        return $this->hasMany(DocumentCertificationsProduk::class, 'produk_id');
    }

    public function faqs()
{
    return $this->hasMany(ProdukFAQ::class, 'produk_id');
}


}
