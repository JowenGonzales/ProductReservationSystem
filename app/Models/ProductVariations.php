<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductVariations extends Model
{
    use HasFactory;
    protected $table = 'product_variations';
    protected $fillable = [

        'product_id',
        'size',
        'color',
        'color_name',
        'stock',
        'reserved',
    ];

    public function product()
    {
        return $this->hasOne(Products::class, 'product_id', 'product_id');
    }
}
