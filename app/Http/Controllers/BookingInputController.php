<?php

namespace App\Http\Controllers;

use DB;
use Mail;
use Carbon\Carbon;
use App\Mail\Email;
use App\Mail\EmailToAdmin;
use Illuminate\Http\Request;

class BookingInputController extends Controller
{
    public function index(Request $request)
    {
        $date = $request->date ?? Carbon::now()->format('d/m/Y');
        return view('booking_input', compact('date'));
    }

    //入力画面でのバリデーションと確認、戻るボタン押下時
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
            'email'      => 'required|unique:bookings',
            'comment'    => 'nullable|max:255',
        ];

        $this->validate($request, $rules);


        if ($request->input('submit') === 'confirm') {
            // $request->flash(); //sessionに$requestデータをいれる

            return view('booking_confirm', compact('input'));
        }
    }

    //確認画面で送信か戻るボタン押下時
    public function send(Request $request)
    {
        $action = $request->input('action', 'back');
        $admin  = 'sanae.kawasaka@gmail.com';
        $input  = $request->all();

        //submitボタン押下でDBに保存
        if ($action === 'submit') {

            DB::table('bookings')->insert(
                [
                    'created_at'       => now(),
                    'date'             => $request->input('date'),
                    'time'             => $request->input('time'),
                    'people'           => $request->input('people'),
                    'first_name'       => $request->input('first_name'),
                    'last_name'        => $request->input('last_name'),
                    'tel'              => $request->input('tel'),
                    'email'            => $request->input('email'),
                    'comment'          => $request->input('comment'),
                ]
            );

            Mail::to($request->input('email'))->send(new Email($input));
            Mail::to($admin)->send(new EmailToAdmin($input));

            //多重送信を防止のためトークンを再発行
            $request->session()->regenerateToken();
            return view('booking_thanks');
        } else {
            return redirect()->action('BookingInputController@back')->withInput(); //データ保持したまま確認画面で戻るボタン押下でbooking_inputに遷移
        }
    }

    //確認画面で戻るボタン押下時
    public function back()
    {
        return view('booking_input');
    }

    //直だたきで完了画面遷移時
    public function thanks()
    {
        return view('booking_thanks');
    }
}
