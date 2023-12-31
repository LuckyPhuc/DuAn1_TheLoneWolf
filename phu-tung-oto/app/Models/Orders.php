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
        'total',
        'status',
        'created_at',
        'updated_at'
    ];
    // public $timestamps = false;
    function users()
    {
        return $this->belongsTo(User::class, 'users_id');
    }
    // In the Orders model (app/Models/Orders.php)
    public function order_details()
    {
        return $this->hasMany(Order_details::class, 'order_id');
    }
}
