<?php

namespace App\Http\Controllers;

use App\Models\Store;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth')->except('welcome');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $items = \Cart::session(auth()->user()->id)->getContent();
        //dd($items);
        return view('home', ['items' => $items]);
    }
    public function allstores()
    { 
        $stores = Store::all();
        return view('allstores', ['stores' => $stores]);
    }
    public function allproducts()
    { 
        $products = Product::all();
        return view('allproducts', ['products' => $products]);
    }
    public function welcome()
    { 
        $stores = Store::offset(0)->limit(3)->get();
        return view('welcome', ['stores' => $stores]);
    }

    
}
