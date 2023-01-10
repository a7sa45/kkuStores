@extends('layouts.app')
@section('title'){{ $store->title }}@endsection
@section('adminnav')
@auth
@if(auth()->user()->store && auth()->user()->store->id == $store->id)
<nav class="relative py-4  bg-black text-white">
    <div class="relative container px-4 max-w-5xl mx-auto">
        <div class="flex items-center justify-between relative">
            <a class="inline-block" href="/store/{{ auth()->user()->store->url }}">
              <img class="bg-white rounded-lg" src="/images/logos/{{ auth()->user()->store->logo }}" alt="store" width="40">
            </a>
            <div class="block mr-auto">
            <a href="/dashboard" class="inline-flex justify-center rounded-lg text-sm font-medium py-2.5 px-4 bg-white text-gray-800 hover:bg-gray-400 -my-2.5 mr-4">
                <span>الإدارة</span>
                
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 mr-2">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M11.42 15.17L17.25 21A2.652 2.652 0 0021 17.25l-5.877-5.877M11.42 15.17l2.496-3.03c.317-.384.74-.626 1.208-.766M11.42 15.17l-4.655 5.653a2.548 2.548 0 11-3.586-3.586l6.837-5.63m5.108-.233c.55-.164 1.163-.188 1.743-.14a4.5 4.5 0 004.486-6.336l-3.276 3.277a3.004 3.004 0 01-2.25-2.25l3.276-3.276a4.5 4.5 0 00-6.336 4.486c.091 1.076-.071 2.264-.904 2.95l-.102.085m-1.745 1.437L5.909 7.5H4.5L2.25 3.75l1.5-1.5L7.5 4.5v1.409l4.26 4.26m-1.745 1.437l1.745-1.437m6.615 8.206L15.75 15.75M4.867 19.125h.008v.008h-.008v-.008z" />
                </svg>
  
            </a>
            <a href="/store/{{ auth()->user()->store->url }}" class="inline-flex justify-center rounded-lg text-sm font-medium py-2.5 px-4 bg-white text-gray-800 hover:bg-gray-400 -my-2.5 mr-4">
                <span>متجرك</span>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 mr-2">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 6H5.25A2.25 2.25 0 003 8.25v10.5A2.25 2.25 0 005.25 21h10.5A2.25 2.25 0 0018 18.75V10.5m-10.5 6L21 3m0 0h-5.25M21 3v5.25" />
                </svg>
  
            </a>
            </div>
        </div>
    </div>
  </nav>
@endif
@endauth  
@endsection
@auth
@if(auth()->user()->store && auth()->user()->store->id == $store->id)
@else
@section('cart')
<form class="d-flex">
    <button class="btn btn-outline-dark" type="submit">
        السلة
        <span class="badge bg-dark text-white ms-1 rounded-pill">{{ $cartcount }}<i class="fa-solid fa-cart-shopping"></i></span>
    </button>
</form>
@endsection
@endif
@endauth
@section('content')
<section class="relative container px-4 max-w-5xl mx-auto py-16">
    <div class="py-20 bg-white rounded-md shadow-xl">
      <div class="flex flex-col items-center">
        <h1 class="font-bold text-blue-600 text-9xl">
            <img class="d-block mx-auto mb-4"
            @if($store->logo)
                src="/images/logos/{{ $store->logo }}"
            @else
                src="https://cdn-icons-png.flaticon.com/512/9326/9326748.png"
            @endif
            alt="" width="90" height="90">
        </h1>
  
        <h6 class="mb-4 text-2xl font-bold text-center text-gray-800 md:text-3xl">
            {{ $store->title }}
        </h6>
  
        <p class="mb-8 text-center text-gray-500 md:text-lg">
            @if($store->about)
                <p class="lead mb-4">{{ $store->about }}</p>
            @else
                <p class="lead mb-4">https://stores.kku.edu.sa/store/{{ $store->url }}</p>
            @endif
        </p>
      </div>
    </div>
  </section>
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
               تفاصيل المنتج
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

<footer class="bg-slate-200">
    <div class="mt-auto w-full max-w-[85rem] py-10 px-4 sm:px-6 lg:px-8 mx-auto">
      <div class="grid grid-cols-1 md:grid-cols-3 items-center gap-5 text-center">
        <div>
          <a class="flex-none text-xl font-semibold text-black" href="#" >
            {{ $store->title }}
            </a>
          <div class="mt-3 font-sm font-normal">
              <p class="text-gray-500">{{ $store->about }}</p>
          </div>
        </div>
  
          <div class="mt-3">
            <p class="text-gray-500">
            جميع الحقوق محفوظة
            <span class="text-thir">{{ $store->title }}</span>
             
             ©2023.
              </p>
          </div>
       
          <div class="flex items-center mx-auto">
            <div class="w-auto p-4">
              <a class="text-gray-800 hover:text-thir" href="https://www.snapchat.com/add/{{ $store->snapchat }}">
                <svg class="hover:text-thir" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 32 32"><path d="M15.688 4a7.922 7.922 0 0 0-3.032.656c-1.316.567-2.742 1.657-3.625 3.594-.695 1.527-.484 3.434-.375 5-.16-.031-.293-.016-.531-.125a1.643 1.643 0 0 0-.688-.156c-.406 0-.753.11-1.093.312-.34.203-.735.531-.844 1.094-.066.352.035.875.344 1.25.308.375.765.64 1.375.875.144.055.254.117.375.156.258.078.539.157.718.25.18.094.208.168.188.125a.846.846 0 0 1-.094.25l-.031.032c-.027.058-1.441 3.132-4.313 3.593A1.273 1.273 0 0 0 3 22.22c.012.176.066.332.125.468.223.512.664.84 1.25 1.094.473.203 1.23.348 2.063.5.015.055.015.051.03.125.04.176.087.399.157.625.09.297.332.621.625.782.293.16.547.156.688.156.3 0 .488-.055.687-.094a5.774 5.774 0 0 1 1.156-.125c.262 0 .563.016.844.063.39.062.828.359 1.438.78.882.61 2.062 1.407 3.78 1.407h.063c.051 0 .117.004.156 0h.094c1.719 0 2.895-.797 3.782-1.406.609-.418 1.078-.719 1.468-.782a4.9 4.9 0 0 1 .813-.062c.465 0 .797.059 1.156.125.25.047.45.094.688.094h.03c.231 0 .552-.063.813-.25.262-.188.403-.492.469-.719a9.85 9.85 0 0 0 .156-.594c.016-.078.016-.07.032-.125.832-.152 1.59-.297 2.062-.5.586-.254 1.027-.582 1.25-1.093a1.48 1.48 0 0 0 .125-.47c.035-.632-.422-1.21-1.031-1.312h-.032C26.5 20.676 25.45 19.84 24.72 19c-.73-.84-1.098-1.668-1.094-1.656-.008-.012-.031-.063-.031-.063a.846.846 0 0 1-.094-.25c-.02.043.008-.031.188-.125.18-.093.46-.172.718-.25.13-.039.262-.101.407-.156.535-.207.914-.41 1.218-.719.305-.308.508-.77.5-1.156-.015-.828-.625-1.285-1.218-1.5-.004 0 .003-.031 0-.031-.012-.004-.02.004-.032 0a1.98 1.98 0 0 0-.75-.125c-.18 0-.445.004-.781.156-.172.078-.273.059-.406.094.11-1.559.32-3.45-.375-4.969-.883-1.938-2.305-3.055-3.625-3.625A7.821 7.821 0 0 0 16.25 4h-.5c-.008 0 .027-.008-.063 0Zm.062 2h.5c.398 0 1.316.055 2.281.469.965.414 1.953 1.156 2.625 2.625.309.68.324 2.652.219 4.25l-.031.062c-.016.223-.02.446-.032.656a.993.993 0 0 0 .282.75c.117.118.574.329 1.062.438-.363.207-.773.477-1 1-.25.578-.136 1.18.094 1.719a.88.88 0 0 0 .031.093c.004.008-.004.024 0 .032v.031c.008.012.024.02.032.031.078.18.492 1.106 1.406 2.157.61.699 1.52 1.351 2.593 1.875-.34.085-.492.167-1.03.25-.485.074-.852.511-.97.78-.109.247-.136.458-.187.688-.39-.07-.828-.156-1.406-.156-.375 0-.778.031-1.157.094-.964.156-1.644.676-2.25 1.093-.89.61-1.53 1.063-2.656 1.063-.039 0-.078.004-.125 0a.668.668 0 0 0-.125 0h-.062c-1.125 0-1.774-.453-2.656-1.063-.61-.417-1.282-.937-2.25-1.093a7.249 7.249 0 0 0-1.157-.094c-.605 0-1.039.063-1.375.125a3.27 3.27 0 0 0-.187-.625c-.114-.266-.461-.73-1-.813-.524-.078-.664-.164-1-.25 2.633-1.273 3.851-3.734 3.968-4v-.03c0-.005.028-.024.032-.032.015-.027.035-.047.062-.156l-.062-.032c.222-.539.375-1.117.125-1.687-.235-.54-.66-.824-1.031-1.031.464-.098.93-.239 1.093-.406a.993.993 0 0 0 .281-.75c-.011-.235-.015-.47-.03-.72-.102-1.6-.122-3.57.187-4.25.672-1.468 1.664-2.21 2.625-2.624A5.998 5.998 0 0 1 15.75 6Z"/></svg>
              </a>
            </div>
            <div class="w-auto p-4">
              <a class="text-gray-800 hover:text-thir" href="https://www.instagram.com/{{ $store->instagram }}">
                <svg width="16" height="16" viewbox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M7.81641 0.324463C5.78109 0.324463 5.52516 0.333838 4.72547 0.369463C3.92578 0.406963 3.38109 0.532588 2.90391 0.718213C2.40337 0.906481 1.94999 1.2018 1.57547 1.58353C1.19398 1.95824 0.898694 2.41156 0.710156 2.91196C0.524531 3.38821 0.397969 3.93384 0.361406 4.73071C0.325781 5.53228 0.316406 5.78728 0.316406 7.8254C0.316406 9.86165 0.325781 10.1167 0.361406 10.9163C0.398906 11.7151 0.524531 12.2598 0.710156 12.737C0.902344 13.2301 1.15828 13.6482 1.57547 14.0654C1.99172 14.4826 2.40984 14.7395 2.90297 14.9307C3.38109 15.1163 3.92484 15.2429 4.72359 15.2795C5.52422 15.3151 5.77922 15.3245 7.81641 15.3245C9.85359 15.3245 10.1077 15.3151 10.9083 15.2795C11.7061 15.242 12.2527 15.1163 12.7298 14.9307C13.2301 14.7424 13.6831 14.447 14.0573 14.0654C14.4745 13.6482 14.7305 13.2301 14.9227 12.737C15.1073 12.2598 15.2339 11.7151 15.2714 10.9163C15.307 10.1167 15.3164 9.86165 15.3164 7.82446C15.3164 5.78728 15.307 5.53228 15.2714 4.73165C15.2339 3.93384 15.1073 3.38821 14.9227 2.91196C14.7341 2.41155 14.4389 1.95822 14.0573 1.58353C13.6829 1.20166 13.2295 0.906318 12.7289 0.718213C12.2508 0.532588 11.7052 0.406025 10.9073 0.369463C10.1067 0.333838 9.85266 0.324463 7.81453 0.324463H7.81734H7.81641ZM7.14422 1.67634H7.81734C9.81984 1.67634 10.057 1.6829 10.8473 1.71946C11.5786 1.75228 11.9761 1.87509 12.2405 1.97728C12.5902 2.11321 12.8405 2.27634 13.103 2.53884C13.3655 2.80134 13.5277 3.05071 13.6636 3.40134C13.7667 3.66478 13.8886 4.06228 13.9214 4.79353C13.958 5.58384 13.9655 5.82103 13.9655 7.82259C13.9655 9.82415 13.958 10.0623 13.9214 10.8526C13.8886 11.5838 13.7658 11.9804 13.6636 12.2448C13.5434 12.5704 13.3514 12.8649 13.102 13.1063C12.8395 13.3688 12.5902 13.531 12.2395 13.667C11.977 13.7701 11.5795 13.892 10.8473 13.9257C10.057 13.9613 9.81984 13.9698 7.81734 13.9698C5.81484 13.9698 5.57672 13.9613 4.78641 13.9257C4.05516 13.892 3.65859 13.7701 3.39422 13.667C3.06844 13.5469 2.77371 13.3553 2.53172 13.1063C2.28211 12.8645 2.0899 12.5698 1.96922 12.2438C1.86703 11.9804 1.74422 11.5829 1.71141 10.8517C1.67578 10.0613 1.66828 9.82415 1.66828 7.82071C1.66828 5.81821 1.67578 5.58196 1.71141 4.79165C1.74516 4.0604 1.86703 3.6629 1.97016 3.39853C2.10609 3.04884 2.26922 2.79853 2.53172 2.53603C2.79422 2.27353 3.04359 2.11134 3.39422 1.9754C3.65859 1.87228 4.05516 1.7504 4.78641 1.71665C5.47828 1.68478 5.74641 1.6754 7.14422 1.67446V1.67634ZM11.8205 2.92134C11.7023 2.92134 11.5852 2.94462 11.4761 2.98985C11.3669 3.03508 11.2676 3.10137 11.1841 3.18494C11.1005 3.26851 11.0342 3.36773 10.989 3.47692C10.9437 3.58612 10.9205 3.70315 10.9205 3.82134C10.9205 3.93953 10.9437 4.05656 10.989 4.16575C11.0342 4.27495 11.1005 4.37416 11.1841 4.45773C11.2676 4.54131 11.3669 4.6076 11.4761 4.65283C11.5852 4.69806 11.7023 4.72134 11.8205 4.72134C12.0592 4.72134 12.2881 4.62652 12.4569 4.45773C12.6256 4.28895 12.7205 4.06003 12.7205 3.82134C12.7205 3.58264 12.6256 3.35372 12.4569 3.18494C12.2881 3.01616 12.0592 2.92134 11.8205 2.92134ZM7.81734 3.97321C7.30647 3.96524 6.79912 4.05898 6.32482 4.24897C5.85053 4.43896 5.41876 4.7214 5.05467 5.07986C4.69058 5.43832 4.40143 5.86562 4.20407 6.33689C4.0067 6.80817 3.90506 7.314 3.90506 7.82493C3.90506 8.33587 4.0067 8.84169 4.20407 9.31297C4.40143 9.78424 4.69058 10.2115 5.05467 10.57C5.41876 10.9285 5.85053 11.2109 6.32482 11.4009C6.79912 11.5909 7.30647 11.6846 7.81734 11.6767C8.82848 11.6609 9.79286 11.2481 10.5023 10.5275C11.2118 9.80689 11.6094 8.83619 11.6094 7.82493C11.6094 6.81368 11.2118 5.84297 10.5023 5.12235C9.79286 4.40173 8.82848 3.98899 7.81734 3.97321ZM7.81734 5.32415C8.48047 5.32415 9.11643 5.58758 9.58533 6.05648C10.0542 6.52537 10.3177 7.16134 10.3177 7.82446C10.3177 8.48759 10.0542 9.12355 9.58533 9.59245C9.11643 10.0613 8.48047 10.3248 7.81734 10.3248C7.15422 10.3248 6.51826 10.0613 6.04936 9.59245C5.58046 9.12355 5.31703 8.48759 5.31703 7.82446C5.31703 7.16134 5.58046 6.52537 6.04936 6.05648C6.51826 5.58758 7.15422 5.32415 7.81734 5.32415Z" fill="currentColor"></path>
                </svg>
              </a>
            </div>
            <div class="w-auto p-4">
              <a class="text-gray-800 hover:text-thir" href="https://wa.me/{{ $store->whatsapp }}">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24"><path d="M12.012 2c-5.506 0-9.989 4.478-9.99 9.984a9.964 9.964 0 0 0 1.333 4.993L2 22l5.232-1.236a9.981 9.981 0 0 0 4.774 1.215h.004c5.505 0 9.985-4.48 9.988-9.985a9.922 9.922 0 0 0-2.922-7.066A9.923 9.923 0 0 0 12.012 2zm-.002 2a7.95 7.95 0 0 1 5.652 2.342 7.93 7.93 0 0 1 2.336 5.65c-.002 4.404-3.584 7.987-7.99 7.987a7.999 7.999 0 0 1-3.817-.971l-.673-.367-.745.175-1.968.465.48-1.785.217-.8-.414-.72a7.98 7.98 0 0 1-1.067-3.992C4.023 7.582 7.607 4 12.01 4zM8.477 7.375a.917.917 0 0 0-.666.313c-.23.248-.875.852-.875 2.08 0 1.228.894 2.415 1.02 2.582.123.166 1.726 2.765 4.263 3.765 2.108.831 2.536.667 2.994.625.458-.04 1.477-.602 1.685-1.185.208-.583.209-1.085.147-1.188-.062-.104-.229-.166-.479-.29-.249-.126-1.476-.728-1.705-.811-.229-.083-.396-.125-.562.125-.166.25-.643.81-.79.976-.145.167-.29.19-.54.065-.25-.126-1.054-.39-2.008-1.24-.742-.662-1.243-1.477-1.389-1.727-.145-.25-.013-.386.112-.51.112-.112.248-.291.373-.437.124-.146.167-.25.25-.416.083-.166.04-.313-.022-.438s-.547-1.357-.77-1.851c-.186-.415-.384-.425-.562-.432-.145-.006-.31-.006-.476-.006z"/></svg>            
              </a>
            </div>
            <div class="w-auto p-4">
              <a class="text-gray-800 hover:text-thir" href="https://twitter.com/{{ $store->twitter }}">
                <svg width="15" height="13" viewbox="0 0 15 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M15.0005 2.27494C14.4603 2.50797 13.8724 2.67569 13.2669 2.74101C13.8956 2.36751 14.3664 1.77744 14.591 1.08151C14.001 1.43246 13.3547 1.67855 12.6808 1.80887C12.3991 1.50773 12.0584 1.26784 11.68 1.10413C11.3015 0.940414 10.8934 0.856396 10.4811 0.857307C8.81277 0.857307 7.47106 2.20962 7.47106 3.86911C7.47106 4.10214 7.49931 4.33518 7.54521 4.55938C5.04715 4.42874 2.8192 3.23532 1.33802 1.40812C1.06813 1.86909 0.9267 2.39397 0.928441 2.92814C0.928441 3.97327 1.45983 4.89481 2.27015 5.4368C1.79262 5.41799 1.32626 5.28673 0.909022 5.0537V5.09077C0.909022 6.5543 1.94355 7.76714 3.32234 8.04608C3.06346 8.11332 2.79714 8.14773 2.52967 8.14847C2.33371 8.14847 2.14834 8.12905 1.96121 8.10257C2.34254 9.29599 3.45298 10.1628 4.77528 10.1911C3.74074 11.0014 2.44493 11.478 1.0379 11.478C0.785443 11.478 0.552408 11.4692 0.310547 11.441C1.6452 12.2972 3.22877 12.7915 4.93416 12.7915C10.4705 12.7915 13.4999 8.20497 13.4999 4.22395C13.4999 4.09331 13.4999 3.96267 13.4911 3.83203C14.0772 3.40304 14.591 2.87165 15.0005 2.27494Z" fill="currentColor"></path>
                </svg>
              </a>
            </div>
          </div>
      </div>
    </div>
  </footer>
@endsection
@section('footer')
<footer class="pt-4 my-md-5 pt-md-5 border-top">
    <div class="row">
      <div class="col-12 col-md">
        <img class="mb-2" src="/images/logos/{{ $store->logo }}" alt="" width="24" height="19">
        <small class="d-block mb-3 text-muted">&copy; {{ $store->title }}</small>
      </div>
      <div class="col-6 col-md">
        <h5>حسابات التواصل</h5>
        <ul class="list-unstyled text-small">
            <div class="mb-1">
                <a class="link-secondary text-decoration-none" href="https://twitter.com/{{ $store->twitter }}"><i class="fa-brands fa-square-twitter fa-xl"></i></a>
                <a class="link-secondary text-decoration-none" href="https://www.instagram.com/{{ $store->instagram }}"><i class="fa-brands fa-square-instagram fa-xl"></i></a>
                <a class="link-secondary text-decoration-none" href="https://www.snapchat.com/add/{{ $store->snapchat }}"><i class="fa-brands fa-square-snapchat fa-xl"></i></a>
                <a class="link-secondary text-decoration-none" href="https://wa.me/{{ $store->whatsapp }}"><i class="fa-brands fa-square-whatsapp fa-xl"></i></a>
            </div>
        </ul>
      </div>
      <div class="col-6 col-md">
        <h5>رقم الاتصال</h5>
        <ul class="list-unstyled text-small">
          <li class="mb-1"><a class="link-secondary text-decoration-none" href="https://wa.me/{{ $store->whatsapp }}">{{ $store->whatsapp }}</a></li>
        </ul>
      </div>
      <div class="col-6 col-md">
        <h5>عنا</h5>
        <ul class="list-unstyled text-small">
          <div class="mb-1">{{ $store->about }}</div>
        </ul>
      </div>
    </div>
  </footer>
@endsection
