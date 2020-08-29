<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookingInputController extends Controller
{
    public function index()
    {
        return view('booking_input');
    }

    public function store(Request $request)
    {

        $validatedData = $request->validate([
            'date' => 'required|date_format',
            'time' => 'required',
        ]);
    }
}
