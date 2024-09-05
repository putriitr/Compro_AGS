<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    use HasFactory;

    // Specify the table associated with the model
    protected $table = 'locations';

    // The attributes that are mass assignable.
    protected $fillable = [
        'name',
        'province',
        'latitude',
        'longitude',
        'description',
        'address',
        'image',
    ];

    // The attributes that should be cast to native types.
    protected $casts = [
        'latitude' => 'float',
        'longitude' => 'float',
    ];
}
