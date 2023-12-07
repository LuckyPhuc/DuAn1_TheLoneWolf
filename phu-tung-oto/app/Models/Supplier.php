<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    use HasFactory;

    protected $table = 'supplier';

    protected $fillable = [
        'id',
        'name',
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
