<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order_details extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'order_id',
        'product_id',
        'quantity',
        'address',
        'sdt',
        'description'
    ];
    public $timestamps = false;
    function order()
    {
        return $this->belongsTo(Orders::class, 'order_id');
    }
    function product()
    {
        return $this->belongsTo(Products::class, 'product_id');
    }
}
