<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;
    protected $table = 'reservation';
    protected $fillable = [

        'user_id',
        'reservation_code',
        'status',
        'reserved_at',
        'expiration_at',
        'completed_at',
        'notes',
    ];

    public function items()
    {
        return $this->hasMany(ReservationItems::class, 'reservation_code', 'reservation_code');
    }


}
