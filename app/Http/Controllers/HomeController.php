<?php

namespace App\Http\Controllers;

use App\Models\Store;
use App\Models\Product;
use App\Models\Order;
use App\Models\Order_detail;
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
        $this->middleware('auth')->except('welcome', 'allstores', 'allproducts');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $items = \Cart::session(auth()->user()->id)->getContent();

        $order = Order::where('user_id', auth()->user()->id)->first();
        //dd($order);
        if($order){
            $order_details = Order_detail::with(['product','order'])->where('user_id', auth()->user()->id)->get();
        }else{
            $order_details = [];
        }

        return view('home', ['items' => $items, 'order' => $order, 'order_details' => $order_details]);
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
        $products = Product::offset(0)->limit(3)->get();
        return view('welcome', ['stores' => $stores, 'products' => $products]);
    }

    
}
