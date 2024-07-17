<!-- /*
* Bootstrap 5
* Template Name: Furni
* Template Author: Untree.co
* Template URI: https://untree.co/
* License: https://creativecommons.org/licenses/by/3.0/
*/ -->
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="Untree.co">
    <link rel="shortcut icon" href="favicon.png')}}">

    <meta name="description" content="" />
    <meta name="keywords" content="bootstrap, bootstrap4" />

    <!-- Bootstrap CSS -->
    <link href="{{ asset('frontend/assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link href="{{ asset('frontend/assets/css/tiny-slider.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/assets/css/style.css') }}" rel="stylesheet">
    <title>Furni Free Bootstrap 5 Template for Furniture and Interior Design Websites by Untree.co </title>
</head>

<body>

    @include('include.frontend.header')

     @yield('usercontent')
    <!-- End Blog Section -->

    <!-- Start Footer Section -->
    @include('include.frontend.footer')
    <!-- End Footer Section -->


    <script src="{{ asset('fronend/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('fronend/js/tiny-slider.js') }}"></script>
    <script src="{{ asset('fronend/js/custom.js') }}"></script>
</body>

</html>













{{-- @extends('layouts.frontend')

@section('content')
<main>

   <!-- slider-area-start -->
   <section class="slider-area pb-25">
      <div class="container">
         <div class="row justify-content-xl-end">
            <div class="col-xl-9 col-xxl-7 col-lg-9">
               <div class="tp-slider-area p-relative">
                  <div class="swiper-container slider-active">
                     <div class="swiper-wrapper">
                        <div class="swiper-slide">
                           <div class="tp-slide-item">
                              <div class="tp-slide-item__content">
                                 <h4 class="tp-slide-item__sub-title">Accessories</h4>
                                 <h3 class="tp-slide-item__title mb-25">Up To
                                    <i>40% Off

                                    </i>
                                    latest Creations</h3>
                                 <a class="tp-slide-item__slide-btn tp-btn" href="shop.html">Shop Now <i class="fal fa-long-arrow-right"></i></a>
                              </div>
                              <div class="tp-slide-item__img">
                                 <img src="https://liberty-society.com/cdn/shop/articles/Kerajinan_Tangan_Yang_Bisa_Dijual_Online.png')}}?v=1708953210" width="828" height="426" alt="">
                              </div>
                           </div>
                        </div>
                        <div class="swiper-slide">
                           <div class="tp-slide-item">
                              <div class="tp-slide-item__content">
                                 <h4 class="tp-slide-item__sub-title">Accessories</h4>
                                 <h3 class="tp-slide-item__title mb-25">Up To <i>35% Off </i> latest Creations</h3>
                                 <a class="tp-slide-item__slide-btn tp-btn" href="shop.html">Shop Now <i class="fal fa-long-arrow-right"></i></a>
                              </div>
                              <div class="tp-slide-item__img">
                                 <img src="https://s0.bukalapak.com/bukalapak-kontenz-production/content_attachments/90280/original/kerajinan_tangan_yang_laku_di_pasaran.jpg')}}" width="828" height="426" alt="">
                              </div>
                           </div>
                        </div>
                        <div class="swiper-slide">
                           <div class="tp-slide-item">
                              <div class="tp-slide-item__content">
                                 <h4 class="tp-slide-item__sub-title">Accessories</h4>
                                 <h3 class="tp-slide-item__title mb-25">Up To <i>45% Off </i> latest Creations</h3>
                                 <a class="tp-slide-item__slide-btn tp-btn" href="shop.html">Shop Now <i class="fal fa-long-arrow-right"></i></a>
                              </div>
                              <div class="tp-slide-item__img">
                                 <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTvUJlQzUHnB-y2YZqS2_4k2-iLI9gfuxykUmExlTdVUic-x1dLs0cnvgyDCZYA1hnpEVk&usqp=CAU" width="828" height="426" alt="">
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="slider-pagination"></div>
               </div>
            </div>
            <div class="col-xl-3 col-xxl-3 col-lg-3">
               <div class="row">
                  <div class="col-lg-12 col-md-6">
                     <div class="tpslider-banner tp-slider-sm-banner mb-30">
                        <a href="shop-details.html">
                           <div class="tpslider-banner__img">
                              <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRSTX8deNofn0JWWeoNenddzo8SbF6v3h3LXy6j0o0tdgXkSvO95gOrRuRxBKg5_-Xk7rk&usqp=CAU" width="347" height="203" alt="">
                              <div class="tpslider-banner__content">
                                 <span class="tpslider-banner__sub-title">Hand made</span>
                                 <h4 class="tpslider-banner__title">New Modern & Stylist <br> Crafts</h4>
                              </div>
                           </div>
                        </a>
                     </div>
                  </div>
                  <div class="col-lg-12 col-md-6">
                     <div class="tpslider-banner">
                        <a href="shop-details.html">
                           <div class="tpslider-banner__img">
                              <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRe2r_NyiSl0wsgxUuYibUR0cZ1p1xXsaKQ_5e05g_RHMx44dsIDKu3h8U8zVyoNwJL_cQ&usqp=CAU" width="347" height="203" alt="">
                              <div class="tpslider-banner__content">
                                 <span class="tpslider-banner__sub-title">Popular</span>
                                 <h4 class="tpslider-banner__title">Energy with our <br> newest collection</h4>
                              </div>
                           </div>
                        </a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!-- slider-area-end -->

   <!-- category-area-start -->
   <section class="category-area pt-70">
      <div class="container">
         <div class="row">
            <div class="col-md-12">
               <div class="tpsection mb-40">
                  <h4 class="tpsection__title">Top <span> Categories</span></h4>
               </div>
            </div>
         </div>
         <div class="custom-row category-border pb-45 justify-content-xl-between">
            <div class="tpcategory mb-40">
               <div class="tpcategory__icon p-relative">
                  <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="33" height="50" viewBox="0 0 33 50">
                  <image id="cat-icon-01.svg')}}" width="33" height="50" xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAACEAAAAyCAYAAADSprJaAAAEt0lEQVRYhcWYa2jVZRzHP5tzF9c0dFZr62Kz5VZ2p1AqhWgh2M3oSkG+CHwjVBK96F12gcJ3RfUmiIggKsoiipakZaQk64YutQvq1DJrzplzWzvxjM9/PDs7O2eX89cf/DnnOef/e37f53f/PYyDFgPrgB3AMaAf6Bvj6ffpAjYDjwPzC4koyfPfbOApYBXQA3wM/Ab8O449ZwKXAa3AAWAt8PJ4ThzTXGAjkAGeBuonugFQDiwE3nOfdRNhLgPWA0eBWychPBetFcgj42V4QIZVRQKAJnpbs15Y6OUKYBuwVY0Uk5qAE8ALhfa8GvgHWFNkAAm1AVuA6vjH0qyXQjidbnilQRuARuDsfCCCvQYMxTQo5Jo5QEM+EAHlHuDvlEB0APsN35w0QzOsTwkAUSIbQbEmqjXHjhRBhNCvNZsOUwxirk9HiiACPQa8GaeAGESSRHanDCL4W4u1aRSIZl/4M2UQ2/WNC3KBuBTYCxxKGUSQ0e2hR4FoNny6UgbRCRzJBWIWcB7wKzCYMoj92ZpIPPR8v2/Pw3yWKf00oMpiN137lphpQ1d13A6sxzoUBP4X7RM6sF2WiJC0+mIQyHAVcAVwMXAYeAa40c6oWsYyn2nylShoMKv9C4B6gX1qeacF7A9lhJTQmYAIHVAN8IYbddvUfKeg3+2Qjhk93ZGATKTVSoHONimdabFqUP33afoyeQOQznCCa4APgYPAu8DP1o8DnmCgCH5Q5qnr9b1LgIfU3lI84d7IJCeLFqmNZxHAhDvhIlAw8xeh0SmNPPtkU6nmKElAZE4BCJQ7BCJ4fN0pAFCpsx4psxV/EnjQKOkvMJlNlTICWG29eq5ENK8DywzPQ4KoiEzVqw0rJmC6hKc82ue4DpmE6kvAo8mJQwK525xxu6n5fR12ur8ddR6dVkA4Cr/XxNYmgJAMb7NpanPM/EDNj6LNvpRQs4ls9QTN8BrQ7gExYYV9Xsx+MXvKmmOq3RD9dj1whvZ7RZ58Jil1cp9pOQh8X6rVPXZwpXG1zgbRoNp2Rhsu0aYrLWgDBRw3ox/Uul4iCDTF5daWv8baYJnOs9x1nRXvB38r96nM85RbxFaajbdGfcsTCr8ozyF42JO0uL7F9c35mPLQGtWeCF3henHMkj2BNZm89rm+0z6gfZIgNur9d7nend3kZoMI388FfjEcQ/d0k+qcbPP7kzNG0rcmvciIe6zYMWf4Z4cmuNZo+XwKtaXXy5Y+1z0ecoRPZI+BjdEY2GokxDljMjSoQ16pqQOIBTlcYYgWeuL7tdsm4JspAsDsGzTyquvnNXdNLk00CiJoYp7I3ykCiB6LZKvyOgQ2fEcRg2iyRT9s6xXM81kRQAT6yPaxxab5xFhjYIuh2WNofl/E4XibEbbCCaw7ds4YxAJBZFTdJzpSMSjUjG893EFDdhSIKtWzywuM0Dd8VSQAmLA2KaPWcWL4PjMBUW8tCE3NHWpkSxFBBPrUXmSpzl+XXCUmIOYZRl3m9fYUrgh+1B9u0DmrnG+HQcwXRI2hmsbl2YA97CKvBoLmz4lfCDf5oYR/7edkbvXHQ6G3CI4fhp7weU/MdJ12CgCGxrKUKJz+LbUSHLUR4H/WLynTfCxBKgAAAABJRU5ErkJggg=="/>
                  </svg>
                  <span>20</span>
               </div>
               <div class="tpcategory__content">
                  <h5 class="tpcategory__title"><a href="{{url('/produk')}}">Driftwood <br> Table Decor</a></h5>
               </div>
            </div>
            <div class="tpcategory mb-40">
               <div class="tpcategory__icon">
                  <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="50" height="50" viewBox="0 0 50 50">
                  <image id="cat-icon-02.svg')}}" width="50" height="50" xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAE5ElEQVRoge2ae4hVVRTGfzON0zRN0mg1Y8oUDZXRA0rTHkZGBSGURi+noD8Sw6IXmBVGET2hHItKoQkkMDIT0nDK6DG9obI0wqLsbZlpZaWmjeXcWPKd2J3Ouffs87jdP+aDw3DPfq1v77XX/vY6QwY0AG8B07J0EsJ04BX17YX6DIPuCRwLHJ0jkYOA8UCjb8MsREpAP/Bnhj7C+Et9eiMLkZrCIJFawyCRWsMgkVpDrRHp1/m03behtxTICR3AxIgT/CSgGbgS2Om8HwC+BvqKMMYG/AW4L0XbBZr5qGdnzPvfgNa4DrOsyHZHpviiCfgdmAD8AdQ57Uuh37YaM4Aryo2RhMjxcgN3P5XkFi3AqcANocHrNIMLgW0Rfb4HdAFbgS8S2DAGWA9sSVA3EkOAT8q4wQ5gV5nyuFncF9gAvAHsUcGGqRX6SgST6huBxcAhHs9orchtZQa5SAb2AkdFlLfKeHOtFaEV94a501fAC54N2yTJL61Qb7rIWN1VwHJgKfCSJtDK3szrmOiRn+/v0eZWGTE6pnw4cJWML8k9vwFWAu/KnbeozP7OV2jOhMPV4VMJZ+YYEV8eU38KsE592rV2JnBExJlyADBZoXqr6s8F9stC5mp1tAw4WeHThfnvSLmKucRn2k9h3Kt+3gEmeYx/IDBPbT8CxmYhM8OJRt8Da4HPnSc4Vz7WwC4sTD+p8rsUDdPAjoEvNSHeOBR4SLNshmwG3perPaw9tEKEdugO36fVCdxlrKLPNVlmUtgb2AsYmjRJYZXmyDAj8JhO4rhNb/U7gYuBNWpj5M9Q+cE5kHBh0e3VSvvWos1qGfOoDPSBKYaz5M/Wx505k8AJ3V1xFcYBPwM/OrOZFo1yvyDqpd0bcehTcGkJl3dK0X4bE3XSYqbI9ORMZIr6Pd192apN/J3iet64XoPOyrHfennOE+7LuRpoYgEkAjyt4HGY886i0D4pH2v7umTUbnSKxCMFkjCMAH4CntHvqXLlbTq9fZ6N8h6ze1OgKBdIDhwJ/FAwmeuA+xVUzKDzU4hCM/48yaE7gA+QtChJAlQDwyUEs443TxPxDyaLyAlVImJYIoXwn7DpgUW6Ne4O6fVaok3A21Uk0qsomeW0N+n0YfBZo0Gyw2bmAV1wmrLexmJQp0H7HaUwSnLGFzYBxwE3Be0apKHOAS5TCFwfkdnIAwNSxc1KOLwmJZsGF8i+F6PaXqu9MqqA1Qhwo/JWwzL00S4JtcR96Ya9Af0tZRgkCXbJhdOiR55zcxyRIGc0okAS7ToQvXO7goXcs6Xd1sZVOk2rcWEWSytgpZO/9VHCbdJTZt89lSrbcv2q22ARaJchc9S3ZVCeUyYzLklniYbZkjHW9vKkdj2o07KtACLTZMwY/Z4tNysp026kuoG7gcclO4I8QK/kSGKMU8NbcibRLKPD4dK84BLgeYXizdqrG0SkO6SUvbBYUSV1BxHo1gRNKFPHAk+zDmfv/3yIQocU8GplKrKiSyTm52GcLyZp8Jc9U6VRsPTps//j1zHO1SFp+aozPds2KqHXUZBt3jgF+FSrs1CJ5HIzO0zRaU0Vrs3/QhJhOFQfJ2/XIbZOEWWVrptNUrPjlbRoUdksJdAGEoxRVZhytSyihUr7BGD3bBOAppRNxNkq2GF6YoKvUPkC+Btn9Uhf8hiAbQAAAABJRU5ErkJggg=="/>
                  </svg>
                  <span>12</span>
               </div>
               <div class="tpcategory__content">
                  <h5 class="tpcategory__title"><a href="{{url('/produk')}}">Floor Driftwood <br> Sculpture</a></h5>
               </div>
            </div>
            <div class="tpcategory mb-40">
               <div class="tpcategory__icon">
                  <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="52" height="50" viewBox="0 0 52 50">
                  <image id="cat-icon-03.svg')}}" width="52" height="50" xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAADQAAAAyCAYAAAATIfj2AAAF7ElEQVRogdWaeWxUVRTGf20pSmsrVNqGNjaoNAYVt1SFilGJGqti+EMFxT1q1EQUTV1B/3CBgAGXGI0Y1wSMSGKicYm4YN3FigYBW3FBsVKqtpVqt+mYg98jL8N782bevJnCl0ya6b3v3nPuPct3zpsCsoPbgJOAdUB/lvbwxIgsrTsaKATys7S+L6K6oXJgMtAJ9AKlwBbgO2AQOAv4C/gnCzpkBUcAvwAXeCxuY21AXS4EyeSGSlz+0Q5M0C00A4fI5HqAet3cCiCm+XaDfRHIHyluBO4CyhIWNWF/AN4DihLG7PvFwD17mjKGq3TyS6SEg6eBj3U7bhO0ANQI/ATcOjwiB+Mo4E6gRjOvBrYBhwOzgFaZH7qdRgWPvQLHA13A5S5h3wSWRxhNc4b9gRbg8YQNLVB0AOfubQotBL4GDvAYM5NcC+w3DHKFQrEc/Qafh02Rn4HTcyFMFNRnkqLdVz7jO4A14nbvAEMecyYqDWzQTc8AuoGHlNtSRhQKjdGmAz7jFhB+B0YBeR7jtcCjksUi4JHA+6JTZcp13akKEwV53KLNi33GYwrr231u52jgOOBMhfp5wDRgqYLJmAhkTAtGcTYlSZYl4nlTfcbHA58Dz7r+VwlsBp7TzTrrXALMzoVSjQrbNR5jC+VD+yZ5fgrwq3LWTK21GjhQ4xfp0Ox/nwKvAdVZ0mUXngE+AE7WP8xU5ous1qbw/CQpHgcec6WA6xRY7pV/1YmB3A2MjEJwW+Q+VaOt+pjQf0uYuML4dtf3b3XqNnc9sMxn7Wr5khOsZqm+uiVh3iKx993ynlfUCYLZ9xvARmCl5ubrFHvF2fZRAOiRQiWuAGQU6VoPlp4ICwhPAg8DC1xjVg03ae8FSaJryrBT/EhENAzqFRmToUYlyPKEOUUyS7OAg72eDxO2HTMqDKlQiZ5PBisYVwEn6kYd9CmcW4A5wev5MIk1pj7BNTqlZNErT/Mt/H6Zxh69cvoyPXue/NDWegWYDpwi0+/MVKE8fdpFVUYHzI+rrEgX/wJzgBdkerO1X1zsfpuX/4RRKF90xmqd51MMLIMh9jH0KJk+otyzSmT3GOBKry5SJlwuloGg6aBHUdFMrEHfZyj87+aLYX0oJirT4lMDuTGkhklbBkqZab0tto4PJ9yJMAoNSaFpctpka+Sp1fVbhgq5906KMAoVii3M8yi5hx2ZlA+58J+0EdbkhkQSN6eQJOMKt+0RyVyjT4EaMBvcMoRRaFBOepkYclDzY0Dlxbsh9nLDCshLgbOBCvlnlxowT4gOZeRDi/QJSqxDKsEzgbGRB4HzlZNeFJuYLCZu/PBCYGuYPUpFEK8IKaA1S35M85nrZV7H+ow3qaFS6NxQpU46KOsPim2Xq1MzPoDLJc{{asset('fronend/Js/TDtdajGku05pMB1E/+XEs0+8+YCLwOLTaEq4Ck9HKTQgHzGbukM4CCPNwxBCpXpYJakML9f69s+nyWZt07zxo6QcA1y3KAemMOeu1XEFaeS7DyE3JFCgWeIidFPCNinUnIZLdq5cLO40p4IKxU+UT/BDxYo3nKsxW7pDuCbPVShtWL1XiTAGjH3K4pasMlzfGYc8Lqizx/6ns032HH1u+cEMI4HVAedpgaLg1PVBxyn8L1YpcWuPNSmZnuTbHW+/CObbwy2BrCM24Gb9RawNWGsS81JO/xXk6WBczRxaXRypw07yJdUWs+MYsEpqtVb9EYgl2jUaa9WgyQylMu+v9CPJ8zxxmZJsQo1Llv1Smau9g+FoEQ6Ua3dBmX4Dtms9eU+dP3uIB0U6PSnKjlXK8KuUVW6MawyqSjkoEpvs+v05rtWIbNHTfZW/e1S46JXlGiUaE6VEmSNfKRTpcd6MYDvI6poQ7WCK5SMV6p/vUK3V6qoWaR141KsT8ygQxm/Xm3eP13978gQpnxo16dDzY9l6oaOdLW4HIWc/kO/lJuum9oUpRJuZNLGytdtFavz45x04onnueZXZdBCTgmZKGSnbEWVmU/QDytMSVPMlLGAkh0A/wEksVuZ615eqwAAAABJRU5ErkJggg=="/>
                  </svg>
                  <span>03</span>
               </div>
               <div class="tpcategory__content">
                  <h5 class="tpcategory__title"><a href="{{url('/produk')}}">Driftwood <br> Christmas Tree </a></h5>
               </div>
            </div>
            <div class="tpcategory mb-40">
               <div class="tpcategory__icon">
                  <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="48" height="50" viewBox="0 0 48 50">
                  <image id="cat-icon-04.svg')}}" width="48" height="50" xlink:href="data:img/png;base64,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"/>
                   </svg>
                  <span>09</span>
               </div>
               <div class="tpcategory__content">
                  <h5 class="tpcategory__title"><a href="{{url('/produk')}}"> Wooden <br> Bluetooth Speaker </a></h5>
               </div>
            </div>
            <div class="tpcategory mb-40">
               <div class="tpcategory__icon">
                  <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="36" height="50" viewBox="0 0 36 50">
                  <image id="cat-icon--05.svg')}}" width="36" height="50" xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAACQAAAAyCAYAAAA0j3keAAAEuUlEQVRYhc2YaYiVZRTHf7M0Oo3TNDrWuIyV1thq0Wo72kJFtPghyoJoJRnEPkRFWPahsIUwBAk/tNhKRoVBUamljkm7NRZtthAVaS45rTpNxonflbeX+473zr3e6cBl3mf/z1n+5zwPFZDDgfuB5koctjOpBz4HtgMH/R8A3SeY34FJAw3mVMFcCXwM3DzQgL4Anvf7WeDlgQTTAfQAo22fD/wNjB8IMFXAN8CDqb61wMKBAHQW0A0cleo/R586rdKA5gKfZIw9AawDmioJ6NU+TBPkuAF4LGtx9S4AtDvwQ8bYZmA6MBU4slKAwk8GpfrqE98LNduFlQK0Edg30T4WWAC02O4FPgP2qxSg1cChwG629wFOB4Ym5uwJbKkUoOeAvYFLbAdBbpIYQw4EDtH5KyZPA+uBESbVtZqxBlgFfAjUVhJQk2w9C5hgXqu1HU5/2K46ODQwLsP0dcAwNRQ10RBNNS5jbnvwVKlquxWYBrwLPAp8pL+EuX404hqd22oZEjJKx27T4c818V5fKqAxwBr9Yq59m+WhbgGMBA4AXjDJtqiRRttvAIuAywJgqYAarXNutCB703zVJtjZwHJgPjAc2CYphuZukNGnuNcRYdZSAf0F7OH3CM3UmRjvkBQfzrP2PDWVk0g5veUIvRr/hsk+SPQ36eyDM9aNSnDTDikHoBwj35nqr9aX6vKsCbnHNFJWQIP62GMr8D3wc8b4K/k6SwW0LZ/albj6nAH8VsyGpQK6TVBZsr7YDYsBNN5QHeNBdwMriz1wZ1Jotj8eeFtW/Qk4EVgBHFduQIXIYFPCikTERGR1lfnyF/w1rxANTTIpXpPwlx55p92kWTYpBFC7N4XvUv1VlhI1Gev6JWlAwa5jU285Pf7ScycLNG8p2l/JRVn4xO3AdZqg2wx8L/CWfVGW/uL8epPpbNtHW0fHvG+BpcXyT05qVfnjwEXALcCXJsrwmXeAp9x8oqUo3q1qZOrFguuRDJutEIOjnukPqNyd+5RUf0RUh2H+p6lgjQDWuWajTy4n+9Ix1JeyBY4X80j1b5TFxxzgvT4mXuzmYYY7gJdsR2Y/oY91S51bVQygWtV7rSVlvkQYzvt+6tViiVpa1ccBMeeKAsHskIicRwTV5V2q2WIpHHR/4II8vvC6LJ1VWkzQH19UmwVLTp3hxE/KOVX6S4Rzq9EVRfxJ9tdZlk5US5360hYPP8ZUEyY9uwhaiH260vY92Lt4rw9OM/SvYR4aznqpNfMyXzFQEw3SxwZvpQ8UqZ1OrZRXRsvMizTfSAuq7SbZ3EPBFK89c7PPKQrQvHwDOW2kK7rLBXRXav5k+2/aVYDmSIQBLCkPefDqRB2dk5lqqrXcgFpk245Uf4MpJN6b/wDOTI0P0cGnlwoonTDHWSMvS/VPlYGvlpnnp7T0qxFYymNm3PGq0yXsVrWRfJKrNvEu9po80xewcPirNNU0A2G5+bFNesi6ACQlF4nD5cP/SIOHLTGyxurcm7zY5SRY+yvN+7WbzkpsvMa+7iJ+MX9GvjwTL1yvWbpGyMfBEd6fpuZFqok8t5fFfqwJCVNGoo7xMEOhEtpcmZX44r8MLQRBRoLsV21TtAD/ABSvH50+0dDoAAAAAElFTkSuQmCC"/>
                   </svg>
                  <span>10</span>
               </div>
               <div class="tpcategory__content">
                  <h5 class="tpcategory__title"><a href="{{url('/produk')}}">Receivers <br> & Amplifiers</a></h5>
               </div>
            </div>
            <div class="tpcategory mb-40">
               <div class="tpcategory__icon">
                  <svg xmlns="http://www.w3.org/2000/svg" width="49" height="50" viewBox="0 0 49 50">
                     <defs>
                       <style>
                         .cls-1 {
                           fill-rule: evenodd;
                         }
                       </style>
                     </defs>
                     <path id="cat-icon-06.svg')}}" class="cls-1" d="M1615.06,805.352a0.977,0.977,0,1,0,.96.976A0.96,0.96,0,0,0,1615.06,805.352Zm23.55,31.543h-4.25a14.5,14.5,0,0,0,5.04-4.634,0.977,0.977,0,0,0,.05-1,0.956,0.956,0,0,0-.84-0.516h-1.76A23.944,23.944,0,0,0,1639.56,820c0-13.482-11.28-25-24.5-25-13.2,0-24.5,11.494-24.5,25a23.944,23.944,0,0,0,2.71,10.742h-1.75a0.971,0.971,0,0,0-.85.516,1.023,1.023,0,0,0,.05,1,14.669,14.669,0,0,0,5.03,4.635h-4.23a0.972,0.972,0,0,0-.85.515,1.025,1.025,0,0,0,.05,1,15.036,15.036,0,0,0,12.1,6.587h24.48a15.128,15.128,0,0,0,12.1-6.587,0.977,0.977,0,0,0,.05-1A0.956,0.956,0,0,0,1638.61,836.9ZM1592.48,820c0-12.493,10.34-23.047,22.58-23.047s22.59,10.554,22.59,23.047a22.55,22.55,0,0,1-2.96,10.742h-4.79A18.509,18.509,0,0,0,1633.53,820c0-10.217-8.46-18.848-18.47-18.848s-18.47,8.631-18.47,18.848a18.509,18.509,0,0,0,3.63,10.742h-4.78A22.437,22.437,0,0,1,1592.48,820Zm34.98,10.742h-24.79A16.827,16.827,0,0,1,1598.51,820c0-9.158,7.58-16.895,16.55-16.895s16.56,7.737,16.56,16.895A16.882,16.882,0,0,1,1627.46,830.742Zm-33.95,1.944h43.11a13.273,13.273,0,0,1-9.32,4.209h-24.48A13.339,13.339,0,0,1,1593.51,832.686Zm33.79,10.361h-24.48a13.335,13.335,0,0,1-9.31-4.209h43.11A13.269,13.269,0,0,1,1627.3,843.047Zm-8.18-37.1a0.958,0.958,0,0,0-1.19.66,0.979,0.979,0,0,0,.65,1.213A12.744,12.744,0,0,1,1627.5,820a0.96,0.96,0,1,0,1.92,0A14.634,14.634,0,0,0,1619.12,805.948Z" transform="translate(-1590.56 -795)"/>
                   </svg>
                  <span>05</span>
               </div>
               <div class="tpcategory__content">
                  <h5 class="tpcategory__title"><a href="{{url('/produk')}}">Appetizer <br> Plate Set </a></h5>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!-- category-area-end -->

   <!-- product-area-start -->
   <section class="product-area pt-95 pb-70">
      <div class="container">
         <div class="row">
            <div class="col-md-6 col-12">
               <div class="tpsection mb-40">
                  <h4 class="tpsection__title">Popular <span> Products</span></h4>
               </div>
            </div>
         </div>
         <div class="tab-content" id="nav-tabContent">
            <div class="tab-pane fade show active" id="nav-all" role="tabpanel" aria-labelledby="nav-all-tab">
                <div class="row row-cols-xxl-5 row-cols-xl-4 row-cols-lg-3 row-cols-md-2 row-cols-sm-2 row-cols-1">
                    @foreach ($produk as $item)
                    <div class="col">
                        <div class="tpproduct pb-15 mb-30">
                            <div class="tpproduct__thumb p-relative">
                                <a href="{{url('/shop')}}">
                                    <img src="{{asset('/{{ asset('frontend/assets/images/produk/' . $item->gambar)}}" style="height: 250px;" alt="product-thumb">
                                </a>
                                <div class="tpproduct__thumb-action">
                                    <a class="comphare" href="#"><i class="fal fa-exchange"></i></a>
                                    <a class="quckview" href="#"><i class="fal fa-eye"></i></a>
                                    <a class="wishlist" href="wishlist.html"><i class="fal fa-heart"></i></a>
                                </div>
                            </div>
                            <div class="tpproduct__content">
                                <h3 class="tpproduct__title"><a href="shop-details.html">{{ $item->nama_produk }}</a></h3>
                                <div class="tpproduct__priceinfo p-relative">
                                    <div class="tpproduct__priceinfo-list">
                                        <span>{{ $item->harga }}</span>
                                    </div>
                                    <div class="tpproduct__cart">
                                        <a href="#"><i class="fal fa-shopping-cart"></i>Add To Cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>

   </section>
   <!-- product-area-end -->



   <!-- shop-area-start -->
   <section class="shop-area pb-100">
      <div class="container">
         <div class="row">
            <div class="col-md-12">
               <div class="tpsectionarea text-center mb-35">
                  <h5 class="tpsectionarea__subtitle">Follow On</h5>
                  <h4 class="tpsectionarea__title"><i class="fab fa-instagram"></i> Craftcor</h4>
               </div>
            </div>
         </div>
         <div class="shopareaitem">
            <div class="shopslider-active swiper-container">
               <div class="swiper-wrapper">
                  <div class="tpshopitem swiper-slide">
                     <a class="popup-image" href="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRPxeizifViMTgmk-V-BkDl_gYSbebZUrnKPA&s" width="400" height="400" widht>
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRPxeizifViMTgmk-V-BkDl_gYSbebZUrnKPA&s" width="400" height="400" alt="shop-thumb">
                     </a>
                  </div>
                  <div class="tpshopitem swiper-slide">
                     <a class="popup-image" href="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR9nazX-cCj42cRi_d6UwQAHx_Lrc25RLJpItz5L7SYJDvja47XOF11dfHY19DFbnA5ZxU&usqp=CAU" width="400" height="400">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR9nazX-cCj42cRi_d6UwQAHx_Lrc25RLJpItz5L7SYJDvja47XOF11dfHY19DFbnA5ZxU&usqp=CAU" width="400" height="400" alt="shop-thumb">
                     </a>
                  </div>
                  <div class="tpshopitem swiper-slide">
                     <a class="popup-image" href="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS98fOLDLcwhDFfvo59Eg9t5rM9L95JSrof6ZYsTvJOEfUwqft90vJTODwk0jkrC7NFK2U&usqp=CAU"width="400" height="400">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS98fOLDLcwhDFfvo59Eg9t5rM9L95JSrof6ZYsTvJOEfUwqft90vJTODwk0jkrC7NFK2U&usqp=CAU"width="400" height="400" alt="shop-thumb">
                     </a>
                  </div>
                  <div class="tpshopitem swiper-slide">
                     <a class="popup-image" href="data:image/jpeg;base64,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"width="400" height="400">
                        <img src="data:image/jpeg;base64,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"width="400" height="400" alt="shop-thumb">
                     </a>
                  </div>
                  <div class="tpshopitem swiper-slide">
                     <a class="popup-image" href="data:image/jpeg;base64,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"width="400" height="400">
                        <img src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBxISEhUSExIVFRUXGBUXFhUWFhcWFxUXFRgWFhUXFRUYHSggGBonGxUWITEhJSkrLi4uFx8zODMtNygtLisBCgoKDg0OFxAQGi0dHR0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0rLS0tLS0tLS0tLS0tLS0tLS0tLf/AABEIARUAtgMBIgACEQEDEQH/xAAbAAABBQEBAAAAAAAAAAAAAAADAAIEBQYBB//EAEMQAAEDAgMEBwUECgEDBQAAAAEAAhEDIQQSMQVBUWEGInGBkaGxEzLB0fAHQpLhFCMzUmJygqLC8bIVQ9IkJVNjk//EABgBAAMBAQAAAAAAAAAAAAAAAAABAgME/8QAIREBAQACAwADAAMBAAAAAAAAAAECEQMhMRJBUSIyYRP/2gAMAwEAAhEDEQA/AJYHYneC4E6VILA6v/p3RxWhd7rewegWfwXvP10br/UtAPcb2D0CcADvl6BRcXUgFSnKBtAHKY4Jk8/2kHl75a7UwW38hcW5FRsGHVXCkDmBIBHZpI3EcbHtXMZXJcYqNdyIIPdayk7Brk1hnIs2oWkkuIIY6IdGYX5rmybxWbbrAu9myTTZ1W8XEWLiO5cYw0yWgAkTD4mOEI2ydmCox7nGHZcwzFwtN3C0FaClQYaTngAnrDwkBXJ9M8v03PUdTAytjKL3G7UXsqv2Jm/rfuTauJqvqZKceyhrTBlzTqQR2yOCMKZtlGms5rHfJS5OlYNHsvGNYQGNyzbMWDMSeBJgLbYN+ZrTrpvB8xYrA7IwhjMCyTxYXj4Ld7LDvZtzODjxDMgjcA1Vx7LPSSwWC7F+8+qc0WS3ntPqtmbn5egTwFyL+HoE8BBGtH14p0LrR9eKcAgOQkzQdifF01gsOwIDoH13BJdH14BJAYcBOATAU5hn/RWajsF77tNG7+ZWip/s29izmDP6w/y8OY3rR0P2bez4lVAAQo+LYMpkTbRS4+u8odVsj65pk8z2wS55BDWkbhPmVDwdY0ajKgY0ZTJBuSN88JEjVabpHskSXhsuNwIk238gqHD4Nzj1hvEN4k6d/oASufOX7b42a6WeJ2K4Uzi6T5ZmAazLH6qo7KRM7piFGfiG0qdSm4QMxcIvLSbSiUcW6mMg61Nw6zJOV2W+YRce7bsbxUfaLg59UnMJLRFiGkHKYtp1Usc4nLC/QOx8XhhUJawlxmXHx00T6YLqrnuOS53kAHcC5t2d8goFWkKbWVWiBdlQCL7w4cxDv/zPFTsPRvl91wAyu1Babta796mfuu3aHRPPLascdLrZVOoKmV7c/DM4Ntvh497wW9ZoLRYW1jks50a2cQA6GFpuQZ6pnduWmK04pqIzvZNXB8SnNTQtWbu/w9Anj680Pf8AXBdLvT5oAjSntUH21/rkpVE6ICVVbYIMI9bTuKC8pkSSl0BZcT0NvPQnBMCeFissN+0/pO8cWrRYX9mOw+rlnKH7Uae671C0eD/Zjv8AVOEbH13lcIT4SAVErtoYUvaQN6zOP2Y9md7iGtDCB2u1g8StwAmVcOHagFTlhMvVTKx5eXEZHOEjrFwH7rC0W/CLcEKi5zzwzAl0/wAbKxPm4eAW+xnRinUBvEgjzDihjonTGQNOhOYm5cIiBwWX/OtPnGPNDKypTqWEu62uVwhzSeWZp/GVadHdkVXm7SA1rQ0uktAmYa7gCdOa1jNgUznzXD8oI7AbzxVph8O2m0NY0NaNwVY8f6m5uYTDNpthojjzNkZy6uOWrN0JoTgmAoBEoVVyc4oTymA2m/1yUptWIUAvusj9oG3qdNgpNfTFbUh1Mvd7Mhw6joIaZ48Etnp6U+pbuKHUcvOfsr2iagrhxeSCw3Y0NEyLOG8xpoI5lburXAIk7097LWls10NSUXEVgGAzv+BSVbJgqNeTHh1hJ5wpAKg4N4a/q6PgkSNwHVYN/wBclNxmKDDezIMkNuDYg3ERAI36hYq2WGdNRpBkEO7NFYbU2ocNhw8NDiX5ACYF7zbsVGK8OBiSJgizWSfvkGeGg4oHSLFh1Kgwa+0qucJJgtDW790zw0RbqHO7pNpdJqzv+3T8XKww+1qp1azuzfNZbCFXuDWczq7jGgw9cnUBWFKmCqrCq3oK/lS1BhQbw81HLYJHNTAo9cXniqxqbA/n8CnFcHx+BXVSXUikfrxXHfNAdCGnhMQA3fNAqFGf81GqlAR3i6wv2ivLXU4MgjrS4Ogj3f1eo33Wzq14+u1eXbcoh9R9UVm9YlwBJDr3g9mijOrwna9+z7Gsp1Mjg4OfIkOhhcS0/swNYGs7lo/tArf+kcG0873lrG9TOWyZcdDFgb81j+hlV7ajS2qYnr02iS7WJMaK96WGpWqCmzrCnDoplrnybdZpjnYSpmXxxqrjvJSdEaValOTDsc1w/wC44WIIFpbPdpZJWFPCvb7rXMO8uZBOnLkNOC4onL/irgNg9o5GtAy6ffBsTGZvHWLc1Cxe0qgkNgB5nKANIy6C4vfjxUna2FM9UkNJMyB70WM7hYeAQNlbHeTOV7t4c2Yibk6+HArT/GIuza2QxUyuaYgBxE2kyJiZN51XNvYoVKzcujWx3yfyVlR2O4FoyT1hH6s2GgmPmqPaH7epycW/hsfMKcvF4epmDV9gwqLAhX2CUxVXOFVrQVThVa0FZJrUPEC3YnsSqaHsTiaij4/Ap0KLSxgdp9aora5icvroNTor2nQx+vFNd80P9JHmk2oXTDTF9YE9g1RsCIZKfRa55tYSimkGtM34H8kbGkF6iYhykVHgIRw+dsh7B/V6phT1W55aXZQREwCZPIkKpH2b0n0z7LEVBUjqh7WZC6LAlosJV1jdkVyQadWlvkF2um/Ly81O2Tg61O7qrDyDgR5rO+ql0w+I6AClTzYhzmObPWBY5hIBMttmiBvgqsONw8A+xLnRlDnVDTfAEXLXGDbeF6jtPA1Kz5NVmUAAMJEb8x75HgFmMR0Ge55dNIgk9XPlAvuAbCnPHrqLxy3e6q9jbVpQRcRudV9pHY4gH4JLR7K6IGnYtpBsGwOYTaDBFt/iupY43XhWzfoWFLQTLWkydRPZAOi12wsR1TJvIHdFvisNg8WHSd8mRwWk2O4FxEG4tOlr+gK2jOtdnEFxNgJPYF4L7Uve551c5zj/AFGV7ZUpF9J9MOyl7HNDonLmBExv1WDP2cYlvuVaLu3O3/Eqc5b4rCyKTBq8wikUOhWLbupHsqH4tCsMP0YxI1a38YUTGq+Udwys6CgVMOaVWlQfZ9UOyRcdTKHSd3vtV5S2W8fu+P5KtUtxymnoW0D7BheRmgTAMT3woD9rHc0akXk6dkI0SC6kWOLbQHGOySW9hhHovMTJ03C/cO9Dq1nODiRJIHKPkAn0gQACBYT+YPwQBsOyANY1Mi47t4Uqj9evegMJvEaa92/5IuGEAXBHH58CmSThGQNTreR9ShbVqwAOMn68VLpmBpx+gFR7cqdYD+EfFOBX4qvNgrXYdMGkO13qqOFcdH5IcJsASBzhMk91AcPJMOGb+75LEMJk3PiuVMXBjPB4ZkbDbHCt/d8k04RnDyWEqbQI/wC4fxH5oZ2q7/5XfiPzRsN/+hs4eSSwLdrVtz6n4nfNJGxozBU/1jxyHnK1mzH5cpG4gkct8d0qG3YYDszXwfEeCssHhHN1ew/0H/yRINtPSbHZuKk01V4XEFsDNbgrBmMZxVElAqh6WY3E0Wh9IhtOwe4AFwcTAN7ZdB2lW/6SwAuLmgDUkxAWZ23tT9JBpMEU5EuOr8pkQNzZAPE8kqFQ1lSu9lR9WoXsnI6YLc0ZssaTlb4BavZFGtILqryBchxBlVuzcLlhX9AEXSNU9NKpFB0a29QqmsA1pNh2b548e3krHptReaIIEjMzMf3ZcBJHBQqrJ3B2hv6qcvVQ7KCI5SdR38x8k6sQ1p5RHbuHNOdDRO7Ts7OWqT3QLQCR4DlzSB9F4Ibz14HiDzlSKTgByjcIH+9FGDt+8akDXj3wi0alge4WsOZHagJ+FfLdb3lCxmz2VDLiZiLGEXCuO+5veN3ApmIqRHYqhIR2Gw6Pd5FTNn7GdSDodmkEC0HRFwDpJPCVbgWhUTySowhzgbEEgjgVCxTAVoulVMNxVSN+V3i0T5rPVzqkDWUdIA37rlG/6XOo015Iuy62tgeHdvV/Tdm+rJwlAzZRdYDRJaahhrWt2JICC3Hc0eljwqNczkJbNpW47mjMxnNZUVzxRG4so2NLfpFij7NoB1e0HmIcfUBd2fVjw85+UqjxuLzAT+8Pl8VaYAyjYajCVFZUXqmwrohW1HimBq9IPY9jhIc1wI5EEKtbsonQ8ItwVs0qGNt0hoHeA+aV19ibUu08K9gcHdVpNju7AgZ4HvSI13cJPAq/q7XovBaWvIPIfNVjsDh3C7KhG/rVI74dzU3H8Vv9VjagcLEgRE6nQTA39qdRMNFzA4iCBwI3hWTcBhAMsObG7NUtv4pO2Nh3e7VczdZ4/wAwUvjRtGwmMI36TyGupUurVDg0h2YXv3/7TaPRctHUxDyP4g0+bQFKobKqMaWkhw14GeKclLcG2c231vMK2lV+DpkC/Eeq5t6sW0KhFjldfuWkS856W7QL61d9O5EhnPK3KI7wsVRxBBJdVrfrA4AVJaGuA48L6gblfNfKqdqDM4REgb/4jG+02WWV6Xit+hOArVAQXU3FgGbrkg5iYi07jqtzhNmVA0Zi0kToeMrH/ZtiHfpL6ToAcyRBbq13AX0JW/qkhVheiynZ1HAP1tcTr9cF1HrudkY5utwfVJWlggVwtQgU8FQp32aBWdGgJVps0Me0kwTmc08spiPrip7MM3dZTaqRhsTjHgjO0BsgzBtz5LVbIeCBF1OOzmnUT2lDobKpN91gbxglvoQiXQsW9Eq5woss5TpgfeP4nHzlGzcST2knyJVfItNC7ENbMm8aanwVJ7Mc1HdiAOPgqnae1nsEtZPkpyuzkWGJxoDxTBAJIaC7e5xEAcTfxOoRMXjqVCsGPcWl4MkmRDQbciYkkRcd5xzOkLHl7a7XNkNykAnK5pJBG8G+o4Bdw238PUxeH9q+adMPDqlXqkuIf7OQbgCWiTv7EpT09ApYilBaBItfUwYIPZ80DEMynfBAItuK45zA51RzgRLchYcznbiLG+mpsk7EgtaIiBEzEpkVKs4e7mHYYVhQ2u9vviR3A9xVUSOHmfguhpJs3vj4qpSsallYPAc3Q/V1UdL6sYd/8p+A+KmbLplrB2k/BUvTpxNFzZ1Ajn1hMeCv6R9vNaL7Kr2iCX6Hu10k7lZGk5uhKgYnNmBkTvmBPeFjfGmPqy6AOd+n0gHGBnkFxNsh3aBelY3Ei557ucLAdCquWu+q9zWhjDBJ1c6AIlxnetBtbaYaz2bJ9rMwB92m4Zjm00vroVWN1jssp3praLpYBHNJU+yuk1FzQKhDTE8j2fJJVMp+l8b+MoCugpqQSCNUp1abjUoOgn3mbnc4NpVlhekUD9bTc07yD/iboITonVLR7WWH25Qfo+ORBCnUsQx2jmnvB+Kzn6HTN8oHZb0RaWFaLADvA9dUtU9xpGvPJOlYfa+JNNzaeVpLpPVLmFoGk3M7/BAw+Lqg3Bg6dY2jj/pTbdqkjeujiEF9Jp19FkKu1Kg0uOZj4FVbulbw4t9mLb83D+lGzkb12FoTdjT4IZ2bhjrSpzzWVpdIHluYtpgWguzG9+fIo+D2hXxDmspOZmcQ0Q0ASdBLktjTXUmU2iAGgcGj5I7TOgJ7PkLoWy+i+LbUY+tUZlBBc3MTMbsobB7yte2kBoPgPALXHGs7lGew2DrONm5W8TbujXyV9SwzRrf0/NFKa58K5jpNuz3O3Kj6XGKOaAYO/S5Ctc+ip+mBnDOjiz/k0fFF8KMX7drh1qbO6R8VFxGAov1Ye535IIe4b0v0l3JZqMZsSiNDUHaQ71urvYGx2Uw6pd2aW3AAA3wB4dyqRiTwWtwLP1NPm0H8XW+KJjDtrObY2GSZoHKSesJtedOCS0D6fEd64leOKnJWeqiCuBGxbd6jtKpArU9oQ2lFaUA4IrAhtQdrYr2VFzvvRDf5nWHhr3IDL7SxJqYhzmnQ5W9jbesnvV1sTDufL6hkRlAgcey/5qm2XhuU8ltcPQhoCzw7rTPqG06LB91vgFkOmVCMTTPGmPJz/wAlsnwFnemoithuOV09xYf8iry8Th6k7K2UMRhcVTaOu2kyqziXUSZA5lrnD+pUWw8Uab2lpgyCDzBt5gLefZy3LXg3zMqNPaC13+KxfSHZf6NjKtEWa18s3dR0OZ4AgdynXS7f5PdcPVD2Ne3RzQ4d4lccVR9CsZnwrRN2S3u1HrHcrh71tLuMLNUnOUd9Rce+VDxmOp0hmqPawcXOAHmmSS+pBHagbUZnplnEehB+CgUNs0H3ZWY7kDfwR3YwPgiYHEET3FAUT9iBNbsEQrx9T69U/wBql8T2oBsAT4/XmrPLDQ3gAPBS21BJ7Pn8lDeUrNHsJyS6SkgM4azHDqvaexwKjOBCrK+w2qMNmVGe49w7Dbw0Umv2FGaVQ08bWZ77A8cR1T8j5KbhtrUnWLsh4Pt56HxQFsxUfSSuHPbT3NGY/wAztPAf8ldNeAJJsLzyWWpE1Kjqh+8Z7tw8IHco5LqL45urnYeDlwJGl1oyoWzKWVvapsquOahZ3dAqt0HEqm6e0erSdwqPaD2tb/4LQYBmeryHqfylVfTumThKb+GJv2OZU/JPLylj7E/obatSI4mf6muBTftW2bD6WKA1/VVO0SWHwzDuCb0OPXon+Jo8bLadJdmDE4arRi7m9U8Ht6zPMBThN4qzusoxv2e44td7Mn3x/c248pW6cOK8f6PYlzHB03Y4GDaC21/Ben1ccXx7IWP3iOPAfNXx36TyTvZ+OxgaOe4fW5UFfZLars9VuZx3m8cgNwVvTwl73OpPp9ckc01bNU4bZ1NnutA7FKe6FIdTUesxBo7q1/P68004hNc25+vrVDcEtmIzEXPh5fmU4lQL+Z8iYUqjUzD17VOweurjiuphRPpShGmFaPpoJoI0EFuFBQMRshrtyuWsT20UaG2K2lgDQaA17gHktyTYj7xjT/aJsunHWvAvA1MaRzXdtYr2tZwbdrOoO3757zb+lXfR/CAgk7rd+/4rHKby02nWO3cPtiiYBcWHg8ZfP3fNS8RWtI0XcXslrtyz+M2VUpGaRIG9v3T3aLVk2GwqeWm6od+Y9zQR6yoHTBn/ALbUP7tSi7xe1n+atcFjqAw7KZqMzZGgjSHOHWF+ZKh9K6ObZ+IHKm78NWm74J/Qnqp6K1I9meD6Z/uBXpmJrhok67hvK8o6P1h7IEaj4R8l6a3ruzHuHJRxeK5fY8v29hjQxr5GUVf1gjSHXd/dmW56L1w6hFpYcp7NQfOO5V/2jYDNRZXbrScJ/keQD/cG+JUHoXiuvkJs8R4SRbszDvT8yL3FsWjfxv8AJNKM4ITgtGZiDVajuCDV0QaG6mo1SmpzkDEe6ew+iQV9NnVHYEMPyOncdfmrR1MKJicLIKVhnEpKtp1iwBrzEAQSde9JILZuHSqUFJzLrbqiQ2YZRekGJ9hQc/7x6rP5naeAk9ys3lYjpjjfbV20W+7SEu5vd8hA7ypyuorGbqr2bh5ygC5Nu06d+/uXoWA2eKTA3fv7VRdEMCHOzxZmn8x0+fgtdlUcU+1cl+gmUJRDg27wjMsiyFszQ/8Ap9M6tB7lW9JNm0m4LE5Wx+qed/3Rm07lfiFE2zSDsPXb+9SqjxY4IEeZdGKsgiNQb9y9dw75Y08QD4gLxrosfivVtnVZo0z/AAt8hHwWPF7W3L5KmY6g2rTfSd7r2lp7xEry/Yld1GoQ7VjoP8zTfzC9Hre0Nm2JWWx/Rmu6u6o004drJIMwAbAb4WmUZ41taVUPa17bhwBB5G6UKNsqi6nSDHEEidNBN4ClhUgxzUCoxSihEX8PjPwQEZzECvTt3t/5CVPLUCoLtHM+TXfGEAI00x9OxUwtTKjbHsKAjewHBJTISQFW1PzImQrnsJSNV7Z2k2iwvO7QcTuHisDhQTme4yTJcTvLrkr03E7NpvGV7Q4cCgUdgYdpkUhOtySPAmFnnjcl45SCbBwnsqDGxBIzO7XXjusO5WTQuNZKIGrSTXSbdgPK6x0o+QJuWE0kGkpVqMscOLSPEFEY5EaAexAeMdGHR4L1zYUHD044ehIXkuApCliKlMaMqPZ+FxA9F6n0bfOHHIuHnPxWHH/aujl/rFoNZ7vmmORDohroc7vJPKY1IlAdlMBXHG1tdy6LCEg6VHd+0HJrvMtj0KMSgUz13Hkwd/WPo4JgUplQSCDwKeUOqbHsKQPSTSV1ACDU8NXQEkGbCc1q4iNEIB0JpSlKUAgulJNJQRuikUzZAAm6616A8o2y32e0a4/+0u/H1v8AJeh9EXzTeOD58QB8Fg+mbQNoPP73s3f2Bv8Aitf0HrT7UfyHwkH1WM6zb5d4NQ8phKc5COq2YCN0SJSKaUwaSuyuJFIOOKDhj754uPkGt9WlEcg4M9QHiXO7nOLh6oA5KHVNiukodQ+o9QgCEpJhKSAJmSXE5gQDmjelKcUwoBFKUguFAIuXC5cISFMoDudBq1RqnvpFR6mFJQHnvTl84xjhvpM8Q5/whaPoPaq7mw+rY+KpukXRuv7X2rGOexw+6C5zdY6ouQZm3NXvQ/Z1ZtQVHscxoYWw4EEm0dU34rLV+TXf8dNc5NYL+XxPwXXuSpiy1ZOlDJTiUxyATSkVyFxAMrPgF3AE+F0qFPKxreDQPAQhY33COMN/GQ34o5KAaUOp8R6hEJQax9W/8ggjyuJFJAGIRA2EkkGSS4kgOwugJJIBASiEJJIBsLhG7ikkgHuTSkkgBvGg5hFKSSAYmpJIDpTSkkmSPifuji9v9vWHm0IpSSSMwoVTd2j1SSQTpK6kkgP/2Q=="width="400" height="400" alt="shop-thumb">
                     </a>
                  </div>
                  <div class="tpshopitem swiper-slide">
                     <a class="popup-image" href="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTShDmVPbP8s-K31-HLvSL0Pjrcv1WIgi2okg&s"width="400" height="400">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTShDmVPbP8s-K31-HLvSL0Pjrcv1WIgi2okg&s"width="400" height="400" alt="shop-thumb">
                     </a>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!-- shop-area-end -->

</main>
@endsection --}}
