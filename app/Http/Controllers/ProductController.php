<?php

namespace App\Http\Controllers;

use App\Models\Store;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth')->only(['create', 'edit',]);
        $this->middleware('hasstore')->except(['show']);
    }

    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $product = new Product();
        $data = request()->validate([
            'name'  => ['required', 'string'],
            'price'    => ['required', 'numeric'],
            'discription'  => ['required', 'string'],   
        ]);
        if($request->has('image'))
        {
            $image = $request->file('image');
            $image_name = $image->hashName();
            $image->move(public_path('images/products'), $image_name);
        }

        $product->name = $data['name'];
        $product->price = $data['price'];
        $product->discription = $data['discription'];
        $product->image = $image_name;
        $product->store_id = auth()->user()->store->id;
        $product->save();

        return redirect('/store/'.auth()->user()->store->url)->with('success', 'تم إضافة المنتج بنجاح !');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product, $url,  $product_id)
    {
        $cartcount = \Cart::session(auth()->user()->id)->getContent()->count();
        $cartitems = \Cart::session(auth()->user()->id)->getContent();
        $store = Store::where('url', $url)->first();
        $product = Product::where('id', $product_id)->first();
        $products = Product::where('store_id', $store->id)->limit(4)->get();
        return view('products.show', ['product' => $product, 'store' => $store, 'products' => $products, 'cartcount' => $cartcount, 'cartitems' => $cartitems]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product, $product_id)
    {
        $product = Product::where('id', $product_id)->first();
        return view('products.edit', ['product' => $product]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        $product_id = $request->product_id;
        $product = Product::where('id', $product_id)->first();
        $data = request()->validate([
            'name'  => ['required', 'string'],
            'price'    => ['required', 'numeric'],
            'discription'  => ['required', 'string'],   
        ]);
        if($request->has('image'))
        {
            $image = $request->file('image');
            $image_name = $image->hashName();
            $image->move(public_path('images/products'), $image_name);
        }

        $product->name = $data['name'];
        $product->price = $data['price'];
        $product->discription = $data['discription'];
        $product->image = $image_name;
        $product->save();

        return redirect('/store/'.auth()->user()->store->url)->with('success', 'تم إضافة المنتج بنجاح !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,Product $product)
    {
        if($product == null)
        {
            abort(404);
        }
        $product_id = $request->product_id;
        $product = Product::where('id', $product_id)->first();
        $product->delete();
        return redirect('/store/'.auth()->user()->store->url)->with('warning', 'تم حذف المنتج بنجاح !');
    }
}
