<?php

namespace App\Http\Controllers;

use App\Restaurant;
use Illuminate\Http\Request;

class RestaurantController extends Controller
{
    public function index()
    {
        $restaurant = new restaurant;
        $list = $restaurant->get_restaurant();
        
        return view('top_page',
         ['restaurant_name' => 'restaurant',
        //  'list' => $list
         ]);
    }

    public function show()
    {
        return view('welcome', ['restaurant' => 'restaurant_name']);
    }
}
