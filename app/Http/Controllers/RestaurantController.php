<?php

namespace App\Http\Controllers;

use App\Restaurant;
use Illuminate\Http\Request;

class RestaurantController extends Controller
{
    public function show()
    {
        return view('about_us');
    }

    public function menu()
    {
        return view('menu');
    }

    public function booking()
    {
        return view('booking');
    }

    public function contact()
    {
        return view('contact');
    }
}
