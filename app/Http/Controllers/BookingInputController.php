<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookingInputController extends Controller
{
    public function index()
    {
        return view('booking_input');
    }

    public function post(Request $request)
    {
        $input = $request->input('return');

        if ($input === 'back') {
            return redirect('booking');
        }

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
    }
}
