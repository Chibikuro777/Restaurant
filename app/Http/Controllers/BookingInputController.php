<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use App\BookingInput;

class BookingInputController extends Controller
{
    public function index()
    {
        // $BookingInput = new BookingInput();
        // $date = $BookingInput->getDateAttribute();
        return view('booking_input');
    }
}
