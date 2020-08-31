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
        $request->flash();

        if ($request->input('return') === 'back') {
            return redirect('booking');
        } elseif ($request->input('return') === 'return') {
            return view('booking_input');
        }

        $rules = [
            'date' => 'required|date_format:d/m/Y',
            'time' => 'required:numeric',
            'people' => 'required:numeric',
            'first_name' => 'required|string:max255',
            'last_name' => 'required|string:max255',
            'tel' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
            'email' => 'required',
            'comments' => 'nullable|max:255',
        ];

        $this->validate($request, $rules);

        if ($request->input('submit') === 'confirm') {
            return view('booking_confirm');
        }
    }

    public function send(Request $request)
    {
        if ($request->input('submit') === 'submit') {
            return view('booking_thanks');
        }
    }
}
