<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
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
        return $this->belongsTo(Category::class, 'category_id');
    }
    function supplier()
    {
        return $this->belongsTo(Supplier::class, 'supplier_id');
    }

    function image_product()
    {
        return $this->hasMany(image_product::class);
    }
}
