<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'users_id',
        'order_date',
        'tolal',
        'status',
        'created_at',
        'updated_at'
    ];

    function users()
    {
        return $this->belongsTo(User::class, 'users_id');
    }
}
