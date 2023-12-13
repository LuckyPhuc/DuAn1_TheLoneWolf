<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class image_features extends Model
{
    use HasFactory;
    protected $fillable = [
        'product_id',
        'post_id',
        'url_img',
        'alt_img',
        'number',
        'created_at',
        'updated_at'
    ];

    function products()
    {
        return $this->belongsTo(Products::class, 'product_id');
    }
    function posts()
    {
        return $this->belongTo(Posts::class, 'post_id');
    }
}
