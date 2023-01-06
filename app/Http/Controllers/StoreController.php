<?php

namespace App\Http\Controllers;

use App\Models\Store;
use App\Models\Product;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth')->only(['create', 'edit',]);
        $this->middleware('hasstore')->only('dashboard');
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
        if(auth()->user()->store){
            return redirect('/store/'.auth()->user()->store->url);
        }else{
            return view('stores.create');
        }
    }

    public function dashboard()
    {
        return view('stores.dashboard');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $store = new Store();
        $data = request()->validate([
            'title'  => ['required', 'string'],
            'url'    => ['required', 'unique:stores', 'string'],   
        ]);

        $store->title = $data['title'];
        $store->url = $data['url'];
        $store->user_id = auth()->user()->id;
        $store->save();

        return redirect('/store/'.$data['url'])->with('success', 'تم انشاء المتجر بنجاح !');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Store  $store
     * @return \Illuminate\Http\Response
     */
    public function show($url)
    {
        $store = Store::where('url', $url)->first();
        $products = Product::where('store_id', $store->id)->get();
        if($store == null)
        {
            abort(404);
        }
        return view('stores.show', ['store' => $store, 'products' => $products]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Store  $store
     * @return \Illuminate\Http\Response
     */
    public function edit(Store $store)
    {
        if(auth()->user()->store){
            $store_id = auth()->user()->store->id;
            $store = Store::where('id', $store_id)->first();
            return view('stores.edit', ['store' => $store]);
        }else{
            return redirect('/home');
        }
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Store  $store
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Store $store)
    {
        $data = request()->validate([
            'title'  => ['string'],
            'about'    => ['string'],
            'twitter'    => ['string'],
            'instagram'    => ['string'],
            'snapchat'    => ['string'],
            'whatsapp'    => ['string'],    
        ]);
        $store = Store::where('id', $request->store_id)->first();

        if($request->has('logo'))
        {
            $image = $request->file('logo');
            $image_name = $image->hashName();
            $image->move(public_path('images/logos'), $image_name);
        }

        $store->title = $data['title'];
        $store->logo = $image_name;
        $store->about = $data['about'];
        $store->twitter = $data['twitter'];
        $store->instagram = $data['instagram'];
        $store->snapchat = $data['snapchat'];
        $store->whatsapp = $data['whatsapp'];
        $store->save();

        return redirect('store/'.$store->url);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Store  $store
     * @return \Illuminate\Http\Response
     */
    public function destroy(Store $store)
    {
        //
    }
}
