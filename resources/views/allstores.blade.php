@extends('layouts.app')
@section('content')
<section class="relative container px-4 max-w-5xl mx-auto py-16">
  <h2 class="text-xl text-gray-800 font-bold my-4">جميع متاجرنا</h2>
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
</section>
@endsection