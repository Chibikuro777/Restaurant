<?php

namespace App\Http\Controllers;

use App\Calendar;

class CalendarController extends Controller
{
    public function index()
    {
        return view('booking', [
            'weeks'         => Calendar::getWeeks(),
            'month'         => Calendar::getMonth(),
            'prev'          => Calendar::getPrev(),
            'next'          => Calendar::getNext(),
        ]);
    }
}
