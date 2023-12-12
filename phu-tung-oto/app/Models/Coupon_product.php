<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coupon_orders extends Model
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
        return $this->belongsTo(Coupon::class);
    }
    function product()
    {
        return $this->belongsTo(Orders::class);
    }
}
