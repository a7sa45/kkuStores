@extends('layouts.dashboard')
@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">المنتجات</h1>
  <div class="btn-toolbar mb-2 mb-md-0">
    <div class="btn-group me-2">
      <button type="button" class="btn btn-sm btn-outline-secondary">مشاركة</button>
      <button type="button" class="btn btn-sm btn-outline-secondary">تصدير</button>
    </div>
    <a href="{{ route('create-product') }}" type="button" class="btn btn-sm btn-outline-secondary">
      <i class="fa-solid fa-circle-plus"></i>
      إضـــافة منتج
    </a>
  </div>
</div>

<div class="row justify-content-center">
  <div class="container px-4 px-lg-5 mt-5">
      <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
          @forelse ($products as $product)
              <div class="col mb-5">
                  <div class="card h-100">
                      <!-- Sale badge-->
                      <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">{{ $product->title }}</div>
                      <!-- Product image-->
                      <img class="card-img-top" style="object-fit: cover; object-position: bottom;" src="/images/products/{{ $product->image }}" height="140" width="200" alt="product image">
                      <!-- Product details-->
                      <div class="card-body p-4">
                          <div class="text-center">
                              <!-- Product name-->
                              <h5 class="fw-bolder">{{ $product->name }}</h5>
                              <!-- Product price-->
                              SR {{ $product->price }}
                          </div>
                      </div>
                      <!-- Product actions-->
                      <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                          <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">عرض المنتج</a></div>
                      </div>
                      <div class="btn-group">
                        <button type="button" class="btn btn-sm btn-outline-secondary" onclick="window.location.href='/posts/';">المزيد</button>
                        @auth
                            
                                  <button type="button" class="btn btn-sm btn-outline-secondary" onclick="window.location.href='/posts//edit';">تعديل</button>
                        @endauth
                      </div>
                  </div>
              </div>
          @empty
              <div class=" card-body cardbody-color">
                  <div class="text-center">
                      <img src="https://cdn-icons-png.flaticon.com/512/2523/2523206.png" class="img-fluid profile-image-pic  my-3" width="200px" alt="create">
                  </div>
                  <div class="card-body text-center">
                      <h3>لاتوجد منتجات بعد</h3>
                  </div>
              </div> 
          @endforelse
          

          {{--<div class="col mb-5">
              <div class="card h-100">
                  <!-- Sale badge-->
                  <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Sale</div>
                  <!-- Product image-->
                  <img class="card-img-top" src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg" alt="...">
                  <!-- Product details-->
                  <div class="card-body p-4">
                      <div class="text-center">
                          <!-- Product name-->
                          <h5 class="fw-bolder">Special Item</h5>
                          <!-- Product reviews-->
                          <div class="d-flex justify-content-center small text-warning mb-2">
                              <div class="bi-star-fill">ss</div>
                              <div class="bi-star-fill">ss</div>
                              <div class="bi-star-fill">ss</div>
                              <div class="bi-star-fill"></div>
                              <div class="bi-star-fill">ss</div>
                          </div>
                          <!-- Product price-->
                          <span class="text-muted text-decoration-line-through">$20.00</span>
                          $18.00
                      </div>
                  </div>
                  <!-- Product actions-->
                  <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                      <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Add to cart</a></div>
                  </div>
              </div>
          </div>--}}
      </div>
  </div>
</div>
@endsection