<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\Email;


class EmailSendController extends Controller
{
    public function send()
    {
        Mail::to('sanae.kawasaka@gmail.com')->send(new Mail());
    }
}
