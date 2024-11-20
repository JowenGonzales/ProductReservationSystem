<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;
    protected $table = 'products';
    protected $fillable = [
        'product_id',
        'name',
        'description',
        'price',
        'color',
        'size',
        'quantity',
        'image_url',
    ];

    public function product_gallery()
    {
        return $this->hasMany(ProductGallery::class, 'product_id', 'product_id');
    }

    public function variations()
    {
        return $this->hasMany(ProductVariations::class, 'product_id', 'product_id');
    }

}
