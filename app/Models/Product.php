<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Product extends Model
{
protected $fillable = [
    'sku', 'barcode', 'name', 'description', 'image_path',
    'purchase_price', 'sale_price', 'profit_margin',
    'stock', 'min_stock', 'category_id', 'brand_id', 'is_active'
];

// Relación: Un producto pertenece a una categoría
public function category()
{
    return $this->belongsTo(Category::class);
}

// Relación: Un producto pertenece a una marca
public function brand()
{
    return $this->belongsTo(Brand::class);
}
}
