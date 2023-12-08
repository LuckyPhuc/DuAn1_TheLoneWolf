<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'title',
        'body',
        'image_product_id',
        'user_id',
        'create_at',
        'update_at'
    ];

    function users()
    {
        return $this->belongsTo(User::class);
    }
    function posts()
    {
        return $this->hasMany(image_product::class);
    }
}
