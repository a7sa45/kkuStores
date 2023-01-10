@extends('layouts.app')
@section('content')
<section class="relative container px-4 max-w-5xl mx-auto py-16">
  <h2 class="text-xl text-gray-800 font-bold my-4">جميع المنتجات</h2>
  <div id="products" class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6 md:gap-8 mb-6">
    @forelse ($products as $product)
      <div class="group flex flex-col h-full border border-gray-200 shadow-sm rounded-xl">
        <div class="aspect-w-16 aspect-h-8">
          <img class="w-full object-cover rounded-t-xl h-60" src="/images/products/{{ $product->image }}" alt="Image Description">
        </div>
        <div class="p-4 md:p-6">
          <span class="block mb-2 text-xs font-medium uppercase text-thir">
            {{ $product->store->title }}
          </span>
          <h3 class="text-lg font-medium text-gray-800 mb-2">
            {{ $product->name }} 
          </h3>
          <p class="text-sm text-gray-500">
            {{ $product->discription }}
          </p>
        </div>
        <div class="mt-auto flex border-t border-gray-200 divide-x divide-gray-200">
          <a class="w-full py-3 px-4 inline-flex justify-center items-center gap-2 rounded-bl-xl font-medium bg-white text-gray-700 shadow-sm align-middle hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-white focus:ring-blue-600 transition-all text-sm sm:p-4" href="/store/{{ $product->store->url }}/{{ $product->id }}">
            إضافة للسلة
            <span class="ml-auto text-primary">{{ $product->price }}ر.س</span>
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
              <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 00-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 00-16.536-1.84M7.5 14.25L5.106 5.272M6 20.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zm12.75 0a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" />
            </svg>

          </a>
        </div>
      </div>
    @empty
        
    @endforelse

  
  </div>
</section>
@endsection