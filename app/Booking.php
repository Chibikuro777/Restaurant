<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $fillable = [
        'id',
        'created_at',
        'date',
        'time',
        'people',
        'first_name',
        'last_name',
        'tel',
        'email',
        'comment',
    ];
}
