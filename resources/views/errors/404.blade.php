@extends('layouts.app')
@section('content')
<section class="relative container px-4 max-w-5xl mx-auto py-16">
  <div class="py-20 bg-white rounded-md shadow-xl">
    <div class="flex flex-col items-center">
      <h1 class="font-bold text-blue-600 text-9xl">404</h1>

      <h6 class="mb-2 text-2xl font-bold text-center text-gray-800 md:text-3xl">
        <span class="text-red-500">خطا!</span> الصفحة غير موجودة
      </h6>

      <p class="mb-8 text-center text-gray-500 md:text-lg">
        هذة الصفحة غير موجودة لدينا .
      </p>

      <a
        href="/"
        class="px-6 py-2 text-sm font-semibold text-blue-800 bg-blue-100"
        >الصفحة الرئيسية</a
      >
    </div>
  </div>
</section>
@endsection