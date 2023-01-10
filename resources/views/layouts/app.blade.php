<!doctype html>
<html lang="ar" dir="rtl" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="/images/logos/kkustore.svg" sizes="192x192" rel="icon">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'KKU STORE') }}</title>
    <meta name="title" content="Kku Store">
    <meta name="description" content="متاجر الجامعة - حلول متكاملة لإنشاء متاجر إلكترونية داخل الجامة">
    <link rel="shortcut icon" href="/images/logos/kkustore.ico" type="image/x-icon">

    <meta property="og:type" content="website">
    <meta property="og:url" content="http://kkustore.com/">
    <meta property="og:title" content="Kku Store">
    <meta property="og:description" content="متاجر الجامعة - حلول متكاملة لإنشاء متاجر إلكترونية داخل الجامة">
    <meta property="og:image" content="http://139.59.36.233/images/logos/social.png">

    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="http://kkustore.com/">
    <meta property="twitter:title" content="Kku Store">
    <meta property="twitter:description" content="متاجر الجامعة - حلول متكاملة لإنشاء متاجر إلكترونية داخل الجامة">
    <meta property="twitter:image" content="http://139.59.36.233/images/logos/social.png">

    @vite('resources/css/app.css')
    </head>
<body>
    @yield('adminnav')
    <div id="app">
    <nav class="relative py-4">
        <div class="relative container px-4 max-w-5xl mx-auto">
            <div class="flex items-center justify-between relative">
                <a class="inline-block" href="/">
                <img src="/images/logos/kkustore.svg" alt="" width="40">
                </a>
                @guest
                <div class="block mr-auto">
                <a href="/login" class="inline-block ml-4 font-medium hover:text-gray-900">
                    دخول
                </a>
                <a href="/register" class="inline-flex justify-center rounded-lg text-sm font-medium py-2.5 px-4 bg-slate-900 text-white hover:bg-slate-700 -my-2.5 mr-4">
                    <span>انشئ متجرك مجاناً</span>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 mr-2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.59 14.37a6 6 0 01-5.84 7.38v-4.8m5.84-2.58a14.98 14.98 0 006.16-12.12A14.98 14.98 0 009.631 8.41m5.96 5.96a14.926 14.926 0 01-5.841 2.58m-.119-8.54a6 6 0 00-7.381 5.84h4.8m2.581-5.84a14.927 14.927 0 00-2.58 5.84m2.699 2.7c-.103.021-.207.041-.311.06a15.09 15.09 0 01-2.448-2.448 14.9 14.9 0 01.06-.312m-2.24 2.39a4.493 4.493 0 00-1.757 4.306 4.493 4.493 0 004.306-1.758M16.5 9a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0z" />
                    </svg>
                </a>
                </div>
                @endguest
                @auth
                <div class="block mr-auto">
                  <a class="" style="color: red" href="{{ route('logout') }}"
                  onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                   خروج
               </a>
                    <a href="/home" class="inline-flex justify-center rounded-lg text-sm font-medium py-2.5 px-4 bg-slate-900 text-white hover:bg-slate-700 -my-2.5 mr-4">
                        <span>الصفحة الشخصية</span>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 mr-2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 12l8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
                        </svg>                          
                    </a>

                 <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                     @csrf
                 </form>
                </div>
                @endauth
            </div>
        </div>
    </nav>
        
        {{-- Message success --}}
        @if (Session::has('success'))
        <div id="alert-1" class="flex mx-10 p-4 mb-4 text-blue-700 bg-blue-100 rounded-lg dark:bg-gray-800 dark:text-blue-400" role="alert">
          <svg aria-hidden="true" class="flex-shrink-0 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg>
          <div class="ml-3 text-sm font-medium">
            {{ session('success') }}
          </div>
        </div>
        @endif
        {{-- Message warning --}}
        @if (Session::has('warning'))
        <div id="alert-2" class="flex mx-10 p-4 mb-4 text-red-700 bg-red-100 rounded-lg dark:bg-gray-800 dark:text-red-400" role="alert">
          <svg aria-hidden="true" class="flex-shrink-0 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg>
          <div class="ml-3 text-sm font-medium">
            {{ session('warning') }}
          </div>
        </div>
        @endif
        <main class="">
            @yield('content')
        </main>
    </div>
    <footer class="mt-auto w-full max-w-[85rem] py-10 px-4 sm:px-6 lg:px-8 mx-auto">
      <div class="text-center">
        <div>
          <a class="flex-none text-xl font-semibold text-blac" href="/" aria-label="Brand">
            KKU STORES
          </a>
        </div>

        <div class="mt-3">
          <p class="text-gray-500">نساعدك في بناء متجرك <span class="font-semibold text-thir">الإلكتروني</span> بخطوات بسيطة.</p>
          <p class="text-gray-500">
          2023 KKU STORES©.
            جميع الحقوق محفوظة
            </p>
        </div>

        <div class="mt-3 space-x-2">
        
          <a class="inline-flex justify-center items-center w-10 h-10 text-center text-gray-500 hover:bg-gray-100 rounded-full focus:outline-none focus:ring-2 focus:ring-blue-600 focus:ring-offset-2 focus:ring-offset-white transition" href="https://twitter.com/a7sa45">
            <svg class="w-3.5 h-3.5" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
              <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"/>
            </svg>
          </a>
          <a class="inline-flex justify-center items-center w-10 h-10 text-center text-gray-500 hover:bg-gray-100 rounded-full focus:outline-none focus:ring-2 focus:ring-blue-600 focus:ring-offset-2 focus:ring-offset-white transition" href="#">
            <svg class="w-3.5 h-3.5" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
              <path d="M3.362 10.11c0 .926-.756 1.681-1.681 1.681S0 11.036 0 10.111C0 9.186.756 8.43 1.68 8.43h1.682v1.68zm.846 0c0-.924.756-1.68 1.681-1.68s1.681.756 1.681 1.68v4.21c0 .924-.756 1.68-1.68 1.68a1.685 1.685 0 0 1-1.682-1.68v-4.21zM5.89 3.362c-.926 0-1.682-.756-1.682-1.681S4.964 0 5.89 0s1.68.756 1.68 1.68v1.682H5.89zm0 .846c.924 0 1.68.756 1.68 1.681S6.814 7.57 5.89 7.57H1.68C.757 7.57 0 6.814 0 5.89c0-.926.756-1.682 1.68-1.682h4.21zm6.749 1.682c0-.926.755-1.682 1.68-1.682.925 0 1.681.756 1.681 1.681s-.756 1.681-1.68 1.681h-1.681V5.89zm-.848 0c0 .924-.755 1.68-1.68 1.68A1.685 1.685 0 0 1 8.43 5.89V1.68C8.43.757 9.186 0 10.11 0c.926 0 1.681.756 1.681 1.68v4.21zm-1.681 6.748c.926 0 1.682.756 1.682 1.681S11.036 16 10.11 16s-1.681-.756-1.681-1.68v-1.682h1.68zm0-.847c-.924 0-1.68-.755-1.68-1.68 0-.925.756-1.681 1.68-1.681h4.21c.924 0 1.68.756 1.68 1.68 0 .926-.756 1.681-1.68 1.681h-4.21z"/>
            </svg>
          </a>
        </div>
      </div>
    </footer>
</body>
</html>