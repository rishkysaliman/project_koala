@extends('layouts.frontend')
@section('usercontent')
    <!-- Start Header/Navigation -->


    <!-- Start Hero Section -->
    <div class="hero">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-5">
                    <div class="intro-excerpt">
                        <h1>Shop</h1>
                    </div>
                </div>
                <div class="col-lg-7">

                </div>
            </div>
        </div>
    </div>
    <!-- End Hero Section -->



   <div class="untree_co-section product-section before-footer-section">
    <div class="container">
        <div class="row">
            @foreach($produk as $item)
            <!-- Start Column 1 -->
            <div class="col-12 col-md-4 col-lg-3 mb-5">
                <a class="product-item" href="#">
                    <img src="{{ asset('/images/produk/' . $item->gambar) }}" style="height: 250px;" alt="{{ $item->nama }}">
                    <h3 class="product-title">{{ $item->nama }}</h3>
                    <strong class="product-price">RP.{{ number_format($item->harga, 0, ',', '.') }}</strong>
                    <span class="icon-cross">
                        <img src="{{ asset('frontend/assets/images/cross.svg') }}" class="img-fluid">
                    </span>
                </a>
            </div>
            <!-- End Column 1 -->
            @endforeach
        </div>
    </div>
</div>


    <!-- Start Footer Section -->

    <!-- End Footer Section -->
@endsection
