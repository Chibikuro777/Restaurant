<?php

namespace App\Http\Controllers;

use App\Restaurant;
use Illuminate\Http\Request;

class RestaurantController extends Controller
{
    // public function index()
    // {
    //     $restaurant = new restaurant;
    //     $list = $restaurant->get_restaurant();
        
    //     return view('top_page',
    //      ]);
    // }

    public function show()
    {
        return view('welcome');
    }

    public function menu()
    {
        return view('menu');
    }

    public function booking()
    {
        return view('booking');
    }

    public function enquiry()
    {
        return view('enquiry');
    }
}
