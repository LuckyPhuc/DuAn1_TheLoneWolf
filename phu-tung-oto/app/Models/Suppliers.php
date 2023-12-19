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
        return $this->hasMany(Products::class, 'supplier_id', 'id');
    }

    public function image_features()
    {
        return $this->hasMany(image_features::class, 'product_id');
    }

    public $timestamps = false;
}
