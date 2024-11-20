<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Carts extends Model
{
    use HasFactory;
    protected $table = 'cart';
    protected $fillable = [
        'user_id',
        'product_variation_id',
        'quantity',
    ];

    public function variation()
    {
        return $this->hasOne(ProductVariations::class, 'id', 'product_variation_id');
    }
}
