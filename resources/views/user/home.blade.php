@extends('layout_master')

@section('content-layout-master')
    <link rel="stylesheet" href="{{ asset('css/contents/home_content.css') }}">
    <div class="container-product">
        <form class="wrap-list-product row g-4" action="/product" method="GET">
            @foreach ($dataProduct as $item)
                <div class="product">
                    <div class="product-card bg-white rounded-4 shadow-sm h-100 position-relative">
                        <span class="badge bg-danger">New</span>
                        <div class="overflow-hidden">
                            <img id="img-product" src="{{ $item->image }}" class="product-image w-100" alt="Product">
                        </div>
                        <div class="p-4">
                            <h5 class="fw-bold mb-3">{{ $item->name_product }}</h5>
                            <div class="d-flex align-items-center mb-3">
                                <div class="me-2">
                                    số lượng sản phẩm
                                </div>
                                <small class=" fw-bold text-muted">({{ $item->quantity }})</small>
                            </div>

                            <div class="d-flex flex-column justify-content-between ">
                                <span class="price">{{ $item->price }} đ</span>
                                <button class="btn btn-custom text-white px-4 py-2 rounded-pill">
                                    Add to Cart
                                </button>
                            </div>
                        </div>
                    </div>
                    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/js/bootstrap.bundle.min.js"></script>
                    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/js/all.min.js"></script>
                </div>
            @endforeach
        </form>
    </div>
    </div>
@endsection
