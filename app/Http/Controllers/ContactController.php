<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Mail;
use App\Mail\ContactEmail;
use App\Mail\ContactEmailToAdmin;
use App\Http\Requests\Contact;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact');
    }

    public function post(Contact $request)
    {
        if ($request->input('submit') === 'confirm') {

            $input = $request->validated();

            return view('contact_confirm', compact('input'));
        }
    }

    public function send(Request $request)
    {
        $input = $request->all();

        if ($request->input('return') === 'back') {
            return redirect()->action('ContactController@index')->withInput();
        } else {
            DB::table('contact')->insert([
                'created_at' => now(),
                'first_name' => $request->input('first_name'),
                'last_name'  => $request->input('last_name'),
                'tel'        => $request->input('tel'),
                'email'      => $request->input('email'),
                'enquiry'    => $request->input('enquiry'),
            ]);

            Mail::to($request->input('email'))->send(new ContactEmail($input));
            Mail::to('sanae.kawasaka@gmail.com')->send(new ContactEmailToAdmin($input));

            $request->session()->regenerateToken();

            return view('contact_thanks');
        }
    }
}
