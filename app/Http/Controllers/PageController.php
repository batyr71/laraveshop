<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function welcome()
    {
        $products = \App\Product::inRandomOrder()->take(9)->get();
        return view('welcome')->with('products', $products);
    }
}
