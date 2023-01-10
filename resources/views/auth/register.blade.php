@extends('layouts.app')
@section('content')
<section class="relative container px-4 max-w-5xl mx-auto pt-16 md:pt-0">
    <div class="w-full max-w-md mx-auto p-6">
      <div class="mt-7 bg-white border border-gray-200 rounded-xl shadow-sm">
        <div class="p-4 sm:p-7">
          <div class="text-center">
            <h1 class="block text-2xl font-bold text-gray-800">تسجيل جديد</h1>
            <p class="mt-2 text-sm text-gray-600">
              لدي حساب سابق؟
              <a class="text-thir decoration-2 hover:underline font-medium" href="/login">
                تسجيل الدخول 
              </a>
            </p>
          </div>

          <div class="mt-5">
            <form method="POST" action="{{ route('register') }}">
            @csrf
              <div class="grid gap-y-4">
                <div>
                  <label for="name" class="block text-sm mb-2">الأسم</label>
                  <div class="relative">
                    <input type="text" id="name" name="name" class="py-3 px-4 block w-full border-gray-200 @error('name') border-red-200 px-8 @enderror rounded-md text-sm focus:border-thir focus:ring-thir" value="{{ old('name') }}" required autocomplete="name" placeholder="أسم المستخدم">
                    @error('name')
                    <div class="absolute inset-y-0 right-0 flex items-center pointer-events-none pr-3">
                      <svg class="h-5 w-5 text-red-500" width="16" height="16" fill="currentColor" viewBox="0 0 16 16" aria-hidden="true">
                        <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8 4a.905.905 0 0 0-.9.995l.35 3.507a.552.552 0 0 0 1.1 0l.35-3.507A.905.905 0 0 0 8 4zm.002 6a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"/>
                      </svg>
                    </div>
                    @enderror
                  </div>
                  @error('name')
                  <p class="text-xs text-red-600 mt-2" id="email-error">{{$message}}</p>
                  @enderror
                </div>

                <div>
                  <label for="email" class="block text-sm mb-2">البريد الإلكتروني</label>
                  <div class="relative">
                    <input type="email" id="email" name="email" class="py-3 px-4 block w-full border-gray-200 @error('emal') border-red-200 px-8 @enderror rounded-md text-sm focus:border-thir focus:ring-thir" value="{{ old('email') }}" required placeholder="البريد الإلكتروني">
                    @error('email')
                    <div class="absolute inset-y-0 right-0 flex items-center pointer-events-none pr-3">
                      <svg class="h-5 w-5 text-red-500" width="16" height="16" fill="currentColor" viewBox="0 0 16 16" aria-hidden="true">
                        <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8 4a.905.905 0 0 0-.9.995l.35 3.507a.552.552 0 0 0 1.1 0l.35-3.507A.905.905 0 0 0 8 4zm.002 6a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"/>
                      </svg>
                    </div>
                    @enderror
                  </div>
                  @error('name')
                    <p class="text-xs text-red-600 mt-2" id="email-error">{{$message}}</p>
                  @enderror
                </div>
                
                <div>
                  <label for="password" class="block text-sm mb-2">كلمة المرور</label>
                  <div class="relative">
                    <input type="password" id="password" name="password" class="py-3 px-4 block w-full border-gray-200 @error('password') border-red-200 px-8 @enderror rounded-md text-sm focus:border-thir focus:ring-thir" required autocomplete="new-password" placeholder="كلمة المرور">
                    @error('password')
                    <div class="absolute inset-y-0 right-0 flex items-center pointer-events-none pr-3">
                      <svg class="h-5 w-5 text-red-500" width="16" height="16" fill="currentColor" viewBox="0 0 16 16" aria-hidden="true">
                        <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8 4a.905.905 0 0 0-.9.995l.35 3.507a.552.552 0 0 0 1.1 0l.35-3.507A.905.905 0 0 0 8 4zm.002 6a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"/>
                      </svg>
                    </div>
                    @enderror
                  </div>
                  @error('password')
                  <p class="text-xs text-red-600 mt-2" id="email-error">{{$message}}</p>
                  @enderror
                </div>

                <div>
                  <label for="password_confirmation" class="block text-sm mb-2">تأكيد كلمة المرور</label>
                  <div class="relative">
                    <input type="password" id="password_confirmation" name="password_confirmation" class="py-3 px-4 block w-full border-gray-200 @error('password_confirmation') border-red-200 px-8 @enderror rounded-md text-sm focus:border-thir focus:ring-thir" name="password_confirmation" required autocomplete="new-password" placeholder="تأكيد كلمة المرور">
                    @error('password_confirmation')
                    <div class="absolute inset-y-0 right-0 flex items-center pointer-events-none pr-3">
                      <svg class="h-5 w-5 text-red-500" width="16" height="16" fill="currentColor" viewBox="0 0 16 16" aria-hidden="true">
                        <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8 4a.905.905 0 0 0-.9.995l.35 3.507a.552.552 0 0 0 1.1 0l.35-3.507A.905.905 0 0 0 8 4zm.002 6a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"/>
                      </svg>
                    </div>
                    @enderror
                  </div>
                  @error('password_confirmation')
                  <p class="text-xs text-red-600 mt-2" id="email-error">{{$message}}</p>
                  @enderror
                </div>
                
                <div class="flex items-center">
                  <div class="flex">
                    <input id="remember-me" name="remember-me" type="checkbox" class="shrink-0 mt-0.5 border-gray-200 rounded text-thir pointer-events-none focus:ring-thir">
                  </div>
                  <div class="mr-3">
                    <label for="remember-me" class="text-sm">أوافق على <a class="text-thir decoration-2 hover:underline font-medium" href="#">الشروط والأحكام</a></label>
                  </div>
                </div>

                <button type="submit" class="py-3 px-4 inline-flex justify-center items-center gap-2 rounded-md border border-transparent font-semibold bg-slate-900 text-white hover:bg-slate-700 text-sm">تسجيل</button>
              </div>
            </form>
          </div>
        </div>
      </div>
</div>
</section>
@endsection