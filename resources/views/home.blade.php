@extends('layouts.app')
@section('adminnav')
@auth
@if(auth()->user()->store)
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
@section('content')
<section class="py-1 container px-4 max-w-5xl mx-auto md:flex">
  <div class="mx-auto mt-6 w-full md:w-4/12">
    <div class="bg-salte-200 relative mb-6 flex w-full min-w-0 flex-col break-words rounded-lg border-0 shadow-lg">
      <div class="mb-0 rounded-t bg-white px-4 py-6">
        <div class="flex justify-between text-center">
          <h6 class="text-gray-700 text-md font-bold">معلومات العميل</h6>
          <button class="bg-black mr-1 rounded px-4 py-2 text-xs font-bold text-white shadow outline-none transition-all duration-150 ease-linear hover:shadow-md focus:outline-none" type="button">تعديل البيانات</button>
        </div>
      </div>
      <div class="flex-auto px-4 py-6 pt-0">
        <div class="flex flex-wrap gap-1">
          <div class="w-full">
            <div class="relative mb-3 w-full">
              <label class="text-gray-600 mb-2 block text-xs font-bold uppercase"> أسم المستخدم </label>
              <input type="text" 	disabled class="text-gray-600 w-full rounded border-0 bg-white px-3 py-3 text-sm shadow" value="{{ auth()->user()->name }}" />
            </div>
          </div>
          <div class="w-full">
            <div class="relative mb-3 w-full">
              <label class="text-gray-600 mb-2 block text-xs font-bold uppercase"> البريد الإلكتروني </label>
              <input type="email" 	disabled class="text-gray-600 w-full rounded border-0 bg-white px-3 py-3 text-sm shadow" value="{{ auth()->user()->email }}" />
            </div>
          </div>
          <div class="w-full">
            <div class="relative mb-3 w-full">
              <label class="text-gray-600 mb-2 block text-xs font-bold uppercase"> معلومات الدفع </label>
              <input type="text" 	disabled class="text-gray-600 w-full rounded border-0 bg-white px-3 py-3 text-sm shadow" value="الدفع عند الاستلام" />
            </div>
          </div>
          <div class="w-full">
            <div class="relative mb-3 w-full">
              <label class="text-gray-600 mb-2 block text-xs font-bold uppercase"> معلومات الشحن </label>
              <input type="text" 	disabled class="text-gray-600 w-full rounded border-0 bg-white px-3 py-3 text-sm shadow" value="حي الجامعة" />
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="mx-auto mt-6 w-full px-4 md:w-8/12">
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <div class="flex justify-between text-center px-6 py-6">
              <h6 class="text-gray-700 text-md font-bold">عربة التسوق</h6>
            </div>
        <table class="w-full text-sm text-right text-gray-500 ">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        المنتج
                    </th>
                    <th scope="col" class="px-6 py-3">
                        المتجر
                    </th>
                    <th scope="col" class="px-6 py-3">
                        العدد
                    </th>
                    <th scope="col" class="px-6 py-3">
                        السعر
                    </th>
                    <th scope="col" class="px-6 py-3">
                        تعديل
                    </th>
                </tr>
            </thead>
            <tbody>
            @forelse ($items as $item)
                <tr class="bg-white border-b">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                      {{ $item->name }}
                    </th>
                    <td class="px-6 py-4">
                        {{ $item->associatedModel->store->title }}
                    </td>
                    <td class="px-6 py-4">
                      قطعة واحدة
                    </td>
                    <td class="px-6 py-4">
                        {{ $item->price }} ر.س 
                    </td>
                    <td class="px-6 py-4">
                      <form action="{{ route('cart.remove') }}" method="post">
                                @csrf
                                <input type="hidden" name="id" value="{{ $item->id }}">
                                <button type="submit" class="">
                                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 hover:text-red-600">
                                  <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                                  </svg>
                                </button>
                        </form>
                    </td>
                </tr>
                @empty
                <div style="text-align: center">
                  <p>لاتوجد منتجات</p>
                </div>
            @endforelse
            
            </tbody>
            
        </table>
        @if(count($items) > 0)

        <div class="mt-5 px-4 py-6">
          <p>مجموع العربة:<strong>ر.س </strong></p>
          <div class="d-grid gap-2">
            <form action="{{ route('create.order') }}" method="post">
              @csrf
              <button class="bg-thir mt-2 rounded px-4 py-2 text-xs font-bold text-gray-800 shadow outline-none transition-all duration-150 ease-linear hover:shadow-md focus:outline-none" type="submit">إتمام الشراء</button>

            </form>
          </div>
        </div>
        @endif
    </div>
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <div class="flex justify-between text-center px-6 py-6">
              <h6 class="text-gray-700 text-md font-bold">الطلبات</h6>
            </div>
        <table class="w-full text-sm text-right text-gray-500 ">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                <tr>
                    <th scope="col" class="px-6 py-3">
                    #رقم الطلب
                    </th>
                    <th scope="col" class="px-6 py-3">
                        المتجر
                    </th>
                    <th scope="col" class="px-6 py-3">
                    المنتج
                    </th>
                    <th scope="col" class="px-6 py-3">
                    السعر
                    </th>
                    <th scope="col" class="px-6 py-3">
                    الحالة
                    </th>
                </tr>
            </thead>
            <tbody>
            @forelse ($order_details as $order_detail)
                <tr class="bg-white border-b">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                    {{ $order_detail->id }}
                    </th>
                    <td class="px-6 py-4">
                    {{ $order_detail->store->title }}
                    </td>
                    <td class="px-6 py-4">
                    <a href="/store/{{ $order_detail->store->url }}/{{ $order_detail->product_id }}">{{ $order_detail->product->name }}</a>
                    </td>
                    <td class="px-6 py-4">
                    {{ $order_detail->product->price }}ر.س
                    </td>
                    <td class="px-6 py-4">
                    {{ $order_detail->order->status }}
                    </td>
                </tr>
                @empty
                <div style="text-align: center">
                  <p>لاتوجد طلبات</p>
                </div>
            @endforelse
            </tbody>
        </table>
    </div>
  </div>
</section>
@endsection