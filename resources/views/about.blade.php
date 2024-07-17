@extends('layouts.frontend')
@section('usercontent')
      <div class="hero">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-5">
                    <div class="intro-excerpt">
                        <h1>About Us</h1>
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
@endsection
