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
        $input = $request->all(); //$requestデータ全てを$inputへ代入

        //入力画面の戻るボタン押下でbookingページに遷移
        if ($request->input('return') === 'back') {
            return redirect('booking');
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
        $request->flash(); //sessionに$requestデータをいれる

        if ($request->input('submit') === 'confirm') {
            return view('booking_confirm')->withInput($input);
        } //確認画面で戻るボタン押下でbooking_inputに遷移


    }

    public function send(Request $request)
    {
        $action = $request->get('action', 'back');
        $input = $request->except('action');

        $request->flash(); //sessionに$requestデータをいれる

        if ($action === 'submit') {
            return view('booking_thanks');
        } else {
            return redirect()->action('BookingInputController@back')->withInput($input); //データ保持したまま
        }
    }

    public function back()
    {
        return view('booking_input');
    }
}
