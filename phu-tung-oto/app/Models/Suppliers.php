<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Suppliers extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'avatar',
        'address',
        'phone',
        'email',
        'created_at',
        'updated_at'
    ];

    function product()
    {
        return $this->hasMany(Products::class);
    }
    public $timestamps = false;
}
