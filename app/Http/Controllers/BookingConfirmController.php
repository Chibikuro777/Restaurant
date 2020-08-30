<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookingConfirmController extends Controller
{
    public function show(Request $request)
    {
        $validatedData = $request->validate([
            'date' => 'required|date_format:d/m/Y',
            'time' => 'required:numeric',
            'people' => 'required:numeric',
            'first_name' => 'required|string:max255',
            'last_name' => 'required|string:max255',
            'tel' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
            'email' => 'required',
            'comments' => 'nullable|max:255',
        ]);

        if ($request->input('submit') === 'confirm' && empty($validatedData)) {
            return view('booking_confirm');
        }
    }
}
