<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class HomeController extends Controller
{
  
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

  
    public function index()
    {
        return view('home');
    }

    public function homepage()
    {

        $products = Product::take(4)->get();
        return view('client.homepage',['products'=> $products]);
    }

    public function account()
    {
        return view('client.account');
    }

    public function detail()
    {
        return view('client.detail');
    }
}
