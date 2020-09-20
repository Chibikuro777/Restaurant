<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\Email;
use App\Mail\EmailToAdmin;
use Mail;

class BookingInputController extends Controller
{
    public function index()
    {
        return view('booking_input');
    }

    public function post(Request $request)
    {
        $input = $request->all(); //$requestデータ全てを$inputへ代入

        //入力画面の戻るボタン押下でbookingページに遷移
        if ($request->input('return') === 'back') {
            return redirect('booking');
        }

        $rules = [
            'date'       => 'required|date_format:d/m/Y',
            'time'       => 'required:numeric',
            'people'     => 'required:numeric',
            'first_name' => 'required|string:max255',
            'last_name'  => 'required|string:max255',
            'tel'        => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
            'email'      => 'required',
            'comments'   => 'nullable|max:255',
        ];

        $this->validate($request, $rules);

        if ($request->input('submit') === 'confirm') {
            $request->flash(); //sessionに$requestデータをいれる

            return view('booking_confirm', compact('input'));
        }
    }

    public function send(Request $request)
    {
        $action = $request->input('action', 'back');
        $admin  = 'sanae.kawasaka@gmail.com';
        $input  = $request->all();

        if ($action === 'submit') {
            Mail::to($request->input('email'))->send(new Email($input));
            Mail::to($admin)->send(new EmailToAdmin($input));
            return view('booking_thanks');
        } else {
            return redirect()->action('BookingInputController@back')->withInput(); //データ保持したまま確認画面で戻るボタン押下でbooking_inputに遷移
        }
    }

    public function back()
    {
        return view('booking_input');
    }

    // public function store(Request $request)
    // {
    //     //モデルクラスのインスタンス化
    //     $booking = new \App\Booking;

    //     $booking->date = $request->date;

    //     $booking->save();
    // }
}
