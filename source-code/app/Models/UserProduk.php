<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\Pivot;

class UserProduk extends Pivot
{
    protected $table = 'user_produk';

    protected $fillable = ['user_id', 'produk_id', 'pembelian'];

}
