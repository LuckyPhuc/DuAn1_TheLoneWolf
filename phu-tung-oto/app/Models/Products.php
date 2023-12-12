<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'price',
        'quantity',
        'supplier_id',
        'category_id',
        'created_at',
        'updated_at'
    ];

    public function category()
    {
        return $this->belongsTo(Categories::class, 'category_id');
    }
    function supplier()
    {
        return $this->belongsTo(Suppliers::class, 'supplier_id');
    }

    function image_product()
    {
        return $this->hasMany(image_features::class);
    }
}
