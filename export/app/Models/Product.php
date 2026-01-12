<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'product_name',
        'category',
        'packet_sizes',
        'description',
        'key_features',
        'image_path',
    ];

    public $timestamps = false; // because only created_at exists
}
