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
        $request->flash(); //sessionに$requestデータをいれる
        $input = $request->all(); //$requestデータ全てを$inputへ代入

        //入力画面の戻るボタン押下でbookingページに遷移
        if ($request->input('return') === 'back') {
            return redirect('booking');
        } elseif ($request->input('submit') === 'return') { //確認画面の戻るボタン押下でbookingInputに遷移
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

        //入力画面で確認ボタン押下でbooking_confirmに遷移
        if ($request->input('submit') === 'confirm') {
            return view('booking_confirm', compact('input')); //データ保持したまま
        }
    }

    public function send(Request $request)
    {
        if ($request->input('submit') === 'submit') { //送信ボタン押下で、送信画面に遷移
            return view('booking_thanks');
        } elseif ($request->input('submit') === 'return') { //確認画面の戻るボタン押下でbookingInputに遷移
            return view('booking_input');
        }
    }
}
