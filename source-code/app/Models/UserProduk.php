<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\Pivot;

class UserProduk extends Pivot
{
    protected $table = 'user_produk';

    protected $fillable = ['user_id', 'produk_id', 'pembelian'];

    public function produk()
    {
        return $this->belongsTo(Produk::class, 'produk_id');
    }

    public function monitoring()
{
    return $this->hasOne(Monitoring::class, 'user_produk_id');
}

}
