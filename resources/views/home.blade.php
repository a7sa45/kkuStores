@extends('layouts.app')
@section('adminnav')
@auth
@if(auth()->user()->store)
<div class="px-3 py-2 text-bg-dark">
    <div class="container" style="align-items: center">
      <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
        <a href="/" class="d-flex align-items-center my-2 my-lg-0 me-lg-auto text-white text-decoration-none">
          <img src="/images/logos/{{ auth()->user()->store->logo }}" alt="" width="40" height="32">
        </a>
        <ul class="nav col-12 col-lg-auto my-2 justify-content-center my-md-0 text-small">
            <li>
                <a href="/home" class="nav-link text-secondary">
                <svg class="bi d-block mx-auto mb-1" width="24" height="24"><use xlink:href="#home"></use></svg>
                الرئيسية
                </a>
            </li>
            <li>
                <a href="/dashboard" class="nav-link text-white">
                <svg class="bi d-block mx-auto mb-1" width="24" height="24"><use xlink:href="#speedometer2"></use></svg>
                الادارة
                </a>
            </li>
            <li>
                <a href="/store/{{ auth()->user()->store->url }}" class="nav-link text-white">
                  <svg class="bi d-block mx-auto mb-1" width="24" height="24"><use xlink:href="#grid"></use></svg>
                  المتجر
                </a>
            </li>
        </ul>
      </div>
    </div>
</div>
@endif
@endauth  
@endsection
@section('content')
<div class="container">
        <section class="h-100 gradient-custom">
            <div class="container">
              <div class="row d-flex justify-content-center my-4">
                <div class="col-md-4">
                    <div class="card mb-4">
                      <div class="card-header py-3">
                        <h5 class="mb-0"><i class="fa-solid fa-user"></i> معلومات العميل</h5>
                      </div>
                      <div class="card-body">
                        <ul class="list-group list-group-flush">
                          <li
                            class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 pb-0">
                            الاسم:
                            <span>{{ auth()->user()->name }}</span>
                          </li>
                          <li class="list-group-item d-flex justify-content-between align-items-center px-0">
                            الايميل:
                            <span>{{ auth()->user()->email }}</span>
                          </li>
                          <li
                            class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 mb-3">
                            <div>
                              <strong>معلومات الدفع</strong>
                            </div>
                            <span><strong>الدفع عند الاستلام</strong></span>
                          </li>
                          <li
                            class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 mb-3">
                            <div>
                              <strong>معلومات الشحن</strong>
                              <strong>
                                
                              </strong>
                            </div>
                            <span><strong>حي الجامعة</strong></span>
                          </li>
                        </ul>
            
                        <button type="button" class="btn btn-info btn-lg btn-block">
                            <i class="fa-solid fa-gear"></i> تعديل البيانات
                        </button>
                      </div>
                    </div>
                  </div>
                <div class="col-md-8">
                  <div class="card mb-4">
                    <div class="card-header py-3">
                      <h5 class="mb-0"><i class="fa-solid fa-cart-shopping"></i> عربة التسوق</h5>
                    </div>
                    <div class="card-body">
                      @forelse ($items as $item)
                        <!-- Single item -->
                      <div class="rounded-3 mb-4">
                        <div class="card-body ">
                          <div class="row d-flex justify-content-between align-items-center">
                            <div class="col-md-2 col-lg-2 col-xl-2">
                              <img src="/images/products/{{ $item->associatedModel->image }}" class="img-fluid rounded-3" alt="Cotton T-shirt">
                            </div>
                            <div class="col-md-3 col-lg-3 col-xl-3">
                              <p class="lead fw-normal mb-2">{{ $item->name }}</p>
                              <p><span class="text-muted">المتجر: </span>{{ $item->associatedModel->store->title }}</p>
                            </div>
                            <div class="col-md-3 col-lg-3 col-xl-2 d-flex">
                              قطعة واحدة
                            </div>
                            <div class="col-md-3 col-lg-2 col-xl-2 offset-lg-1">
                              <h5 class="mb-0">SR <span id="price">{{ $item->price }}</span></h5>
                            </div>
                            <div class="col-md-1 col-lg-1 col-xl-1 text-end">
                              <form action="{{ route('cart.remove') }}" method="post">
                                @csrf
                                <input type="hidden" name="id" value="{{ $item->id }}">
                                <button type="submit" class="btn text-danger"><i class="fas fa-trash fa-lg" aria-hidden="true"></i></button>
                              </form>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- Single item -->
                      <hr class="my-4" />
                      @empty
                          <div style="text-align: center">
                            <p>لاتوجد منتجات</p>
                          </div>
                      @endforelse
                 
                      @if(count($items) > 0)

                      <div class="mt-5">
                        <p><strong>مجموع العربة: 500sr</strong></p>
                        <div class="d-grid gap-2">
                          <form action="{{ route('create.order') }}" method="post">
                            @csrf
                            <button type="submit" class="btn btn-info btn-lg btn-block">
                              <i class="fa-solid fa-credit-card"></i> اتمام الشراء
                            </button>
                          </form>
                        </div>
                      </div>
                      @endif
                    </div>
                  </div>
                  
                  <div class="card mb-4">
                    <div class="card-header py-3">
                      <h5 class="mb-0"><i class="fa-solid fa-comments-dollar"></i> الطلبات</h5>
                    </div>
                    <div class="card-body">
                      <table class="table table-striped table-sm">
                        <thead>
                          <tr>
                            <th scope="col">#رقم الطلب</th>
                            <th scope="col">المتجر</th>
                            <th scope="col">المنتج</th>
                            <th scope="col">السعر</th>
                            <th scope="col">الحالة</th>
                          </tr>
                        </thead>
                        <tbody>
                          @forelse ($order_details as $order_detail)
                            <tr>
                              <td>{{ $order_detail->id }}</td>
                              <td>{{ $order_detail->store->title }}</td>
                              <td><a href="/store/{{ $order_detail->store->url }}/{{ $order_detail->product_id }}">{{ $order_detail->product_id }}</a></td>
                              <td>{{ $order_detail->store->title }}</td>
                              <td>{{ $order_detail->order_id }}</td>
                            </tr>
                          @empty
                              
                          @endforelse
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
    </div>
</div>
@endsection