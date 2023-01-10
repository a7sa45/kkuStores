@extends('layouts.app')
@section('content')

<section class="relative overflow-hidden">
  <div class="relative container px-4 max-w-5xl mx-auto pt-16">
    <div class="flex flex-wrap justify-between">
      <div class="w-full lg:w-6/12 flex items-center">
        <div class="mx-auto w-full">
          <h1 class="text-4xl lg:text-5xl mb-6 font-bold" style="line-height: revert;">
            متجرك جاهز <span class="text-thir">للإنطلاق</span> في دقائق
          </h1>
          <p class="mb-6 text-slate-700">
            متجر الجامعة نظام لبناء المتاجر الإلكترونية للإدارة والأندية داخل الجامعة.
          </p>
          <div class="mt-10 flex gap-4">
            <a href="/register" class="inline-flex justify-center rounded-lg text-sm font-bold py-3 px-4 bg-slate-900 text-white hover:bg-slate-700">
              <span>انشئ متجرك مجاناً</span>
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 mr-2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15.59 14.37a6 6 0 01-5.84 7.38v-4.8m5.84-2.58a14.98 14.98 0 006.16-12.12A14.98 14.98 0 009.631 8.41m5.96 5.96a14.926 14.926 0 01-5.841 2.58m-.119-8.54a6 6 0 00-7.381 5.84h4.8m2.581-5.84a14.927 14.927 0 00-2.58 5.84m2.699 2.7c-.103.021-.207.041-.311.06a15.09 15.09 0 01-2.448-2.448 14.9 14.9 0 01.06-.312m-2.24 2.39a4.493 4.493 0 00-1.757 4.306 4.493 4.493 0 004.306-1.758M16.5 9a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0z" />
              </svg>
            </a>
            <a href="#products" class="inline-flex justify-center rounded-lg text-sm font-bold py-3 px-4 bg-white/0 text-slate-900 ring-1 ring-slate-900/10 hover:bg-white/25 hover:ring-slate-900/15 ">
              <span>عرض المنتجات</span>
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 mr-2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 15.75L3 12m0 0l3.75-3.75M3 12h18" />
              </svg>
            </a>
          </div>
        </div>
      </div>
      <div class="w-full lg:w-5/12">
        <div class="flex flex-col items-center">
          <div class="mb-9 w-full">
            <img class="bg-cover" src="/images/logos/3dhero.png" alt="">
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="relative container px-4 max-w-5xl mx-auto py-16">
  <h2 class="text-xl text-gray-800 font-bold my-4">احدث منتجات متاجرنا</h2>
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
  <a href="/products" class="inline-flex justify-center rounded-lg text-sm font-bold py-3 px-4 bg-white/0 text-slate-900 ring-1 ring-slate-900/10 hover:bg-white/25 hover:text-thir hover:ring-slate-900/15 ">
    <span>عرض جميع المنتجات</span>
    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 mr-2">
      <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 15.75L3 12m0 0l3.75-3.75M3 12h18" />
    </svg>
  </a>
</section>
<section class="relative container px-4 max-w-5xl mx-auto py-16">
  <h2 class="text-xl text-gray-800 font-bold my-4">احدث المتاجر</h2>
  <div class="grid sm:grid-cols-2 md:grid-cols-3 xl:grid-cols-4 gap-3 sm:gap-4 md:gap-6 mb-6">
    @forelse ($stores as $store)
    <a class="group flex flex-col bg-white border shadow-sm rounded-xl hover:shadow-md transition" href="/store/{{ $store->url }}">
      <div class="p-4 md:p-5">
        <div class="flex justify-between items-center">
          <div class="flex items-center">
            <img class="h-[2.375rem] w-[2.375rem] rounded-full" src="/images/logos/{{ $store->logo }}" alt="Image Description">
            <div class="mr-3">
             <h3 class="group-hover:text-thir font-semibold text-gray-800">
              {{ $store->title }}
            </h3>
            <p class="text-sm text-gray-500">
              {{ $store->product()->count() }} منتج
            </p>
            </div>
          </div>
          <div class="pr-3">
            <svg class="w-4 h-4 text-gray-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 12h-15m0 0l6.75 6.75M4.5 12l6.75-6.75" />
            </svg>
          </div>
        </div>
      </div>
    </a>
    @empty
        
    @endforelse
  </div>
  <a href="/stores" class="inline-flex justify-center rounded-lg text-sm hover:text-thir font-bold py-3 px-4 bg-white/0 text-slate-900 ring-1 ring-slate-900/10 hover:bg-white/25 hover:ring-slate-900/15 ">
    <span>عرض جميع المتاجر</span>
    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 mr-2">
      <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 15.75L3 12m0 0l3.75-3.75M3 12h18" />
    </svg>
  </a>
</section>
@endsection