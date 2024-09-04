<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brosur extends Model
{
    use HasFactory;

    protected $table = 'brosur';

    protected $fillable = ['produk_id', 'file', 'type'];

    public function produk()
    {
        return $this->belongsTo(Produk::class);
    }
}
