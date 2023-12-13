<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'body',
        'user_id',
        'create_at',
        'update_at'
    ];

    function users()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    function posts()
    {
        // return $this->hasMany(image_::class);
    }
}
