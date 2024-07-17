<!-- Start Hero Section -->
@extends('layouts.frontend')
@section('usercontent')
    <div class="hero">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-5">
                    <div class="intro-excerpt">
                        <h1>Modern Interior <br><span clsas="d-block">Studio Desain</span></h1>
                        <p class="mb-4"> Belanja dengan percaya diri karena kami menawarkan jaminan kepuasan pelanggan yang
                            komprehensif. Anda dapat berbelanja dengan aman, mengetahui bahwa kepuasan Anda adalah prioritas
                            kami.</p>
                        <p><a href="" class="btn btn-secondary me-2">Belanja Sekarang</a><a href="#"
                                class="btn btn-white-outline">Menjelajahi</a></p>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="hero-img-wrap">
                        <img src="{{ asset('frontend/assets/images/couch.png') }}" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Hero Section -->

    <!-- Start Product Section -->
    <div class="product-section">
        <div class="container">
            <div class="row">

                <!-- Start Column 1 -->
                <div class="col-md-12 col-lg-3 mb-5 mb-lg-0">
                    <h2 class="mb-4 section-title">Dibuat dengan bahan yang sangat baik.</h2>
                    <p class="mb-4"> Belanja dengan percaya diri karena kami menawarkan jaminan kepuasan pelanggan yang
                        komprehensif. Anda dapat berbelanja dengan aman, mengetahui bahwa kepuasan Anda adalah prioritas
                        kami. </p>
                    <p><a href="shop.html" class="btn">Menjelajahi</a></p>
                </div>
                <!-- End Column 1 -->

                <!-- Start Column 2 -->
                <div class="col-12 col-md-4 col-lg-3 mb-5 mb-md-0">
                    <a class="product-item" href="cart.html">
                        <img src="{{ asset('frontend/assets/images/product-1.png') }}" class="img-fluid product-thumbnail">
                        <h3 class="product-title">Kursi Nordik</h3>
                        <strong class="product-price">$50.00</strong>

                        <span class="icon-cross">
                            <img src="{{ asset('frontend/assets/images/cross.svg') }}" class="img-fluid">
                        </span>
                    </a>
                </div>
                <!-- End Column 2 -->

                <!-- Start Column 3 -->
                <div class="col-12 col-md-4 col-lg-3 mb-5 mb-md-0">
                    <a class="product-item" href="cart.html">
                        <img src="{{ asset('frontend/assets/images/product-2.png') }}" class="img-fluid product-thumbnail">
                        <h3 class="product-title">Kursi Aero Kruzo</h3>
                        <strong class="product-price">$78.00</strong>

                        <span class="icon-cross">
                            <img src="{{ asset('frontend/assets/images/cross.svg') }}" class="img-fluid">
                        </span>
                    </a>
                </div>
                <!-- End Column 3 -->

                <!-- Start Column 4 -->
                <div class="col-12 col-md-4 col-lg-3 mb-5 mb-md-0">
                    <a class="product-item" href="cart.html">
                        <img src="{{ asset('frontend/assets/images/product-3.png') }}" class="img-fluid product-thumbnail">
                        <h3 class="product-title">Kursi ergonomis</h3>
                        <strong class="product-price">$43.00</strong>

                        <span class="icon-cross">
                            <img src="{{ asset('frontend/assets/images/cross.svg') }}" class="img-fluid">
                        </span>
                    </a>
                </div>
                <!-- End Column 4 -->

            </div>
        </div>
    </div>
    <!-- End Product Section -->

    <!-- Start Why Choose Us Section -->
    <div class="why-choose-section">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-6">
                    <h2 class="section-title">Mengapa Memilih Kami</h2>
                    <p> Belanja dengan percaya diri karena kami menawarkan jaminan kepuasan pelanggan yang komprehensif.
                        Anda dapat berbelanja dengan aman, mengetahui bahwa kepuasan Anda adalah prioritas kami.</p>

                    <div class="row my-5">
                        <div class="col-6 col-md-6">
                            <div class="feature">
                                <div class="icon">
                                    <img src="{{ asset('frontend/assets/images/truck.svg') }}" alt="Image"
                                        class="imf-fluid">
                                </div>
                                <h3>Fast &amp; Gratis Ongkos Kirim</h3>
                                <p> Belanja dengan percaya diri karena kami menawarkan jaminan kepuasan pelanggan yang
                                    komprehensif. Anda dapat berbelanja dengan aman, mengetahui bahwa kepuasan Anda adalah
                                    prioritas kami.</p>
                            </div>
                        </div>

                        <div class="col-6 col-md-6">
                            <div class="feature">
                                <div class="icon">
                                    <img src="{{ asset('frontend/assets/images/bag.svg') }}" alt="Image"
                                        class="imf-fluid">
                                </div>
                                <h3>Mudah Berbelanja</h3>
                                <p> Belanja dengan percaya diri karena kami menawarkan jaminan kepuasan pelanggan yang
                                    komprehensif. Anda dapat berbelanja dengan aman, mengetahui bahwa kepuasan Anda adalah
                                    prioritas kami.</p>
                            </div>
                        </div>

                        <div class="col-6 col-md-6">
                            <div class="feature">
                                <div class="icon">
                                    <img src="{{ asset('frontend/assets/images/support.svg') }}" alt="Image"
                                        class="imf-fluid">
                                </div>
                                <h3>24/7 Support</h3>
                                <p>Belanja dengan percaya diri karena kami menawarkan jaminan kepuasan pelanggan yang
                                    komprehensif. Anda dapat berbelanja dengan aman, mengetahui bahwa kepuasan Anda adalah
                                    prioritas kami.</p>
                            </div>
                        </div>

                        <div class="col-6 col-md-6">
                            <div class="feature">
                                <div class="icon">
                                    <img src="{{ asset('frontend/assets/images/return.svg') }}" alt="Image"
                                        class="imf-fluid">
                                </div>
                                <h3>Pengembalian Bebas Repot</h3>
                                <p>Belanja dengan percaya diri karena kami menawarkan jaminan kepuasan pelanggan yang
                                    komprehensif. Anda dapat berbelanja dengan aman, mengetahui bahwa kepuasan Anda adalah
                                    prioritas kami.</p>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="col-lg-5">
                    <div class="img-wrap">
                        <img src="{{ asset('frontend/assets/images/why-choose-us-img.jpg') }}" alt="Image"
                            class="img-fluid">
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- End Why Choose Us Section -->

    <!-- Start We Help Section -->
    <div class="we-help-section">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-7 mb-5 mb-lg-0">
                    <div class="imgs-grid">
                        <div class="grid grid-1"><img src="{{ asset('frontend/assets/images/img-grid-1.jpg') }}"
                                alt="Untree.co"></div>
                        <div class="grid grid-2"><img src="{{ asset('frontend/assets/images/img-grid-2.jpg') }}"
                                alt="Untree.co"></div>
                        <div class="grid grid-3"><img src="{{ asset('frontend/assets/images/img-grid-3.jpg') }}"
                                alt="Untree.co"></div>
                    </div>
                </div>
                <div class="col-lg-5 ps-lg-5">
                    <h2 class="section-title mb-4">Kami Membantu Anda Membuat Desain Interior Modern</h2>
                    <p> Belanja dengan percaya diri karena kami menawarkan jaminan kepuasan pelanggan yang komprehensif.
                        Anda dapat berbelanja dengan aman, mengetahui bahwa kepuasan Anda adalah prioritas kami.</p>

                    <ul class="list-unstyled custom-list my-4">
                        <li>Donec vitae odio quis nisl dapibus malesuada</li>
                        <li>Donec vitae odio quis nisl dapibus malesuada</li>
                        <li>Donec vitae odio quis nisl dapibus malesuada</li>
                        <li>Donec vitae odio quis nisl dapibus malesuada</li>
                    </ul>
                    <p><a herf="#" class="btn">Menjelajahi</a></p>
                </div>
            </div>
        </div>
    </div>
    <!-- End We Help Section -->

    <!-- Start Popular Product -->
    <div class="popular-product">
        <div class="container">
            <div class="row">

                <div class="col-12 col-md-6 col-lg-4 mb-4 mb-lg-0">
                    <div class="product-item-sm d-flex">
                        <div class="thumbnail">
                            <img src="{{ asset('frontend/assets/images/product-1.png') }}" alt="Image"
                                class="img-fluid">
                        </div>
                        <div class="pt-3">
                            <h3>Chai Nordikr</h3>
                            <p>Terjamin kualitasnya: Menghadirkan standar keunggulan yang tidak diragukan. </p>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-4 mb-4 mb-lg-0">
                    <div class="product-item-sm d-flex">
                        <div class="thumbnail">
                            <img src="{{ asset('frontend/assets/images/product-2.png') }}" alt="Image"
                                class="img-fluid">
                        </div>
                        <div class="pt-3">
                            <h3>Kursi Aero Kruzo</h3>
                            <p>Terjamin kualitasnya: Menghadirkan standar keunggulan yang tidak diragukan.</p>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-4 mb-4 mb-lg-0">
                    <div class="product-item-sm d-flex">
                        <div class="thumbnail">
                            <img src="{{ asset('frontend/assets/images/product-3.png') }}" alt="Image"
                                class="img-fluid">
                        </div>
                        <div class="pt-3">
                            <h3>Kursi ergonomis</h3>
                            <p>Terjamin kualitasnya: Menghadirkan standar keunggulan yang tidak diragukan. </p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- End Popular Product -->

    <!-- Start Blog Section -->
    {{-- <div class="blog-section">
        <div class="container">
            <div class="row mb-5">
                <div class="col-md-6">
                    <h2 class="section-title">Blog Terbaru</h2>
                </div>
                <div class="col-md-6 text-start text-md-end">
                    <a href="#" class="more">Lihat Semua Posting</a>
                </div>
            </div>

            <div class="row">

                <div class="col-12 col-sm-6 col-md-4 mb-4 mb-md-0">
                    <div class="post-entry">
                        <a href="#" class="post-thumbnail"><img
                                src="{{ asset('frontend/assets/images/post-1.jpg') }}" alt="Image"
                                class="img-fluid"></a>
                        <div class="post-content-entry">
                            <h3><a href="#">Ide Pemilik Rumah Pertama Kali</a></h3>
                            <div class="meta">
                                <span>by <a href="#">Kristin Watson</a></span> <span>on <a href="#">Dec
                                        19, 2021</a></span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-sm-6 col-md-4 mb-4 mb-md-0">
                    <div class="post-entry">
                        <a href="#" class="post-thumbnail"><img
                                src="{{ asset('frontend/assets/images/post-2.jpg') }}" alt="Image"
                                class="img-fluid"></a>
                        <div class="post-content-entry">
                            <h3><a href="#">Cara Menjaga Furnitur Anda Bersih</a></h3>
                            <div class="meta">
                                <span>by <a href="#">Robert Fox</a></span> <span>on <a href="#">Dec 15,
                                        2021</a></span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-sm-6 col-md-4 mb-4 mb-md-0">
                    <div class="post-entry">
                        <a href="#" class="post-thumbnail"><img
                                src="{{ asset('frontend/assets/images/post-3.jpg') }}" alt="Image"
                                class="img-fluid"></a>
                        <div class="post-content-entry">
                            <h3><a href="#">Ide Apartemen Furnitur Ruang Kecil</a></h3>
                            <div class="meta">
                                <span>by <a href="#">Kristin Watson</a></span> <span>on <a href="#">Dec
                                        12, 2021</a></span>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div> --}}
@endsection
