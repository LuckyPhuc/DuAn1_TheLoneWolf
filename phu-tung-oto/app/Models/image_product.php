<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class image_product extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'product_id',
        'url_im',
        'description',
        'number',
        'created_at',
        'updated_at'
    ];

    function products()
    {
        return $this->belongsTo(Products::class);
    }
    function posts()
    {
        return $this->belongTo(Post::class);
    }
}
