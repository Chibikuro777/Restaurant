<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $fillable = [
        'booking_name',
        'booking_number',
        'booking_date'
    ];
}
