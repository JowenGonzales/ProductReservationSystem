<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReservationItems extends Model
{
    use HasFactory;
    protected $table = 'reservation_items';
    protected $fillable = [
        'reservation_code',
        'product_id',
        'product_variation_id',
        'size',
        'color',
        'quantity',
        'stock_at_reservation',
        'price',
    ];

    public function variation()
    {
        return $this->hasOne(ProductVariations::class, 'id', 'product_variations_id');
    }

    public function product()
    {
        return $this->hasOne(Products::class, 'product_id', 'product_id');
    }
}
