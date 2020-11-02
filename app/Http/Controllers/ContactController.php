<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact');
    }

    public function post(Request $request)
    {
        $rules = [
            'first_name' => 'required|max:50',
            'last_name'  => 'required|max:50',
            'tel'        => 'required|max:20',
            'email'      => 'required|max:200',
            'enquiry'    => 'required|max:255',
        ];

        $this->validate($request, $rules);

        if ($request->input('submit') === 'confirm') {
            $input = $request->all();

            return view('contact_confirm', compact('input'));
        }
    }

    public function send(Request $request)
    {
        if ($request->input('return') === 'back') {
            return redirect()->action('ContactController@index')->withInput();
        } else {
            return view('contact_thanks');
        }
    }
}
