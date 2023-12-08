<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Couple_product extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'couple_id',
        'product_id',
        'discount_price',
        'created_at',
        'updated_at',
    ];

    function couple()
    {
        return $this->belongsTo(Couple::class);
    }
    function product()
    {
        return $this->belongsTo(Products::class);
    }
}
