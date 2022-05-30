<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport"
        content="width=device-width, initial-scale=1, maximum-scale=1, viewport-fit=cover, shrink-to-fit=no">
    <meta name="description" content="Suha - Multipurpose Ecommerce Mobile HTML Template">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="theme-color" content="#100DD1">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <!-- The above tags *must* come first in the head, any other head content must come *after* these tags-->
    <!-- Title-->
    <title>{{ config('app.name') }}</title>
    <link rel="preconnect" href="https://fonts.gstatic.com/">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&amp;display=swap">
    <!-- Favicon-->
    <link rel="icon" href="img/icons/icon-72x72.png">
    <!-- Apple Touch Icon-->
    <link rel="apple-touch-icon" href="img/icons/icon-96x96.png">
    <link rel="apple-touch-icon" sizes="152x152" href="img/icons/icon-152x152.png">
    <link rel="apple-touch-icon" sizes="167x167" href="img/icons/icon-167x167.png">
    <link rel="apple-touch-icon" sizes="180x180" href="img/icons/icon-180x180.png">
    <!-- CSS Libraries-->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.1.1/css/all.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/default/lineicons.min.css">
    <link rel="stylesheet" media="screen" href="{{ asset('css2/vendor.min.css') }}">

    <link rel="stylesheet" media="screen" id="main-styles" href="{{  asset('css2/theme.min.css') }}">

    <!-- Stylesheet-->
    <link rel="stylesheet" href="style.css">
    <!-- Web App Manifest-->
    <link rel="manifest" href="manifest.json">
    <script type="text/JavaScript">
        <!--
         function AutoRefresh( t ) {
            // setTimeout("location.reload(true);", t);
         }
      //-->
    </script>
    @laravelPWA
</head>

<body onload="JavaScript:AutoRefresh(20000);">
    <!-- Header Area-->
    @include('includes.header')
    <!-- Sidenav Black Overlay-->
    <div class="sidenav-black-overlay"></div>
    <!-- Side Nav Wrapper-->
    @include('includes.sidebar')
    {{-- <!-- PWA Install Alert-->
    <div class="toast pwa-install-alert shadow bg-white" role="alert" aria-live="assertive" aria-atomic="true" data-bs-delay="5000" data-bs-autohide="true">
      <div class="toast-body">
        <div class="content d-flex align-items-center mb-2"><img src="img/icons/icon-72x72.png" alt="">
          <h6 class="mb-0">Add to Home Screen</h6>
          <button class="btn-close ms-auto" type="button" data-bs-dismiss="toast" aria-label="Close"></button>
        </div><span class="mb-0 d-block">Add Suha on your mobile home screen. Click the<strong class="mx-1">"Add to Home Screen"</strong>button &amp; enjoy it like a regular app.</span>
      </div>
    </div> --}}
    <div class="page-content-wrapper">

     

        <!-- Gallery inside carousel  -->
        <div class="container">
            <div class="pt-3">
                <!-- Hero Slides-->
                <div class="hero-slides owl-carousel">
                    <!-- Single Hero Slide-->
                    <div class="single-hero-slide p-4"
                        style="background-image: url('https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Ftse1.mm.bing.net%2Fth%3Fid%3DOIP.keZ0KLKwBEijohH0s9TO4AHaDt%26pid%3DApi&f=1')">
                        <div class="slide-content h-100 d-flex align-items-center">
                            <div class="slide-text">
                                <h4 class="text-white mb-0" data-animation="fadeInUp" data-delay="100ms"
                                    data-wow-duration="1000ms">Amazon Echo</h4>
                                <p class="text-white" data-animation="fadeInUp" data-delay="400ms"
                                    data-wow-duration="1000ms">3rd Generation, Charcoal</p><a
                                    class="btn btn-primary btn-sm" href="#" data-animation="fadeInUp" data-delay="800ms"
                                    data-wow-duration="1000ms">Buy Now</a>
                            </div>
                        </div>
                    </div>
                    <!-- Single Hero Slide-->
                    <div class="single-hero-slide p-4" style="background-image: url('img/bg-img/2.jpg')">
                        <div class="slide-content h-100 d-flex align-items-center">
                            <div class="slide-text">
                                <h4 class="text-white mb-0" data-animation="fadeInUp" data-delay="100ms"
                                    data-wow-duration="1000ms">Light Candle</h4>
                                <p class="text-white" data-animation="fadeInUp" data-delay="400ms"
                                    data-wow-duration="1000ms">Now only $22</p><a class="btn btn-success btn-sm"
                                    href="#" data-animation="fadeInUp" data-delay="500ms" data-wow-duration="1000ms">Buy
                                    Now</a>
                            </div>
                        </div>
                    </div>
                    <!-- Single Hero Slide-->
                    <div class="single-hero-slide p-4" style="background-image: url('img/bg-img/3.jpg')">
                        <div class="slide-content h-100 d-flex align-items-center">
                            <div class="slide-text">
                                <h4 class="text-white mb-0" data-animation="fadeInUp" data-delay="100ms"
                                    data-wow-duration="1000ms">Best Furniture</h4>
                                <p class="text-white" data-animation="fadeInUp" data-delay="400ms"
                                    data-wow-duration="1000ms">3 years warranty</p><a class="btn btn-danger btn-sm"
                                    href="#" data-animation="fadeInUp" data-delay="800ms" data-wow-duration="1000ms">Buy
                                    Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Product Catagories-->
        <div class="product-catagories-wrapper py-3">
            <div class="container">
                <div class="section-heading">
                    <h6>Product Categories</h6>
                </div>
                @livewire('grid')
            </div>
        </div>
        <!-- Flash Sale Slide-->
        <div class="flash-sale-wrapper">
            <div class="container">
                <div class="section-heading d-flex align-items-center justify-content-between">
                    <h6 class="me-1 d-flex align-items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor"
                            class="bi bi-lightning me-1" viewBox="0 0 16 16">
                            <path fill-rule="evenodd"
                                d="M11.251.068a.5.5 0 0 1 .227.58L9.677 6.5H13a.5.5 0 0 1 .364.843l-8 8.5a.5.5 0 0 1-.842-.49L6.323 9.5H3a.5.5 0 0 1-.364-.843l8-8.5a.5.5 0 0 1 .615-.09zM4.157 8.5H7a.5.5 0 0 1 .478.647L6.11 13.59l5.732-6.09H9a.5.5 0 0 1-.478-.647L9.89 2.41 4.157 8.5z" />
                        </svg>Flash sale
                    </h6>
                    <!-- Please use event time this format: YYYY/MM/DD hh:mm:ss-->
                    <ul class="sales-end-timer ps-0 d-flex align-items-center" data-countdown="2022/01/01 14:21:37">
                        <li><span class="days">0</span>d</li>
                        <li><span class="hours">0</span>h</li>
                        <li><span class="minutes">0</span>m</li>
                        <li><span class="seconds">0</span>s</li>
                    </ul>
                </div>
                <!-- Flash Sale Slide-->
                <div class="flash-sale-slide owl-carousel">
                    <!-- Single Flash Sale Card-->
                    <div class="card flash-sale-card">
                        <div class="card-body"><a href="single-product.html"><img src="img/product/1.png" alt=""><span
                                    class="product-title">Black Table Lamp</span>
                                <p class="sale-price">$7.99<span class="real-price">$15</span></p><span
                                    class="progress-title">33% Sold Out</span>
                                <!-- Progress Bar-->
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" style="width: 33%" aria-valuenow="33"
                                        aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </a></div>
                    </div>
                    <!-- Single Flash Sale Card-->
                    <div class="card flash-sale-card">
                        <div class="card-body"><a href="single-product.html"><img src="img/product/2.png" alt=""><span
                                    class="product-title">Modern Sofa</span>
                                <p class="sale-price">$14<span class="real-price">$21</span></p><span
                                    class="progress-title">57% Sold Out</span>
                                <!-- Progress Bar-->
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" style="width: 57%" aria-valuenow="57"
                                        aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </a></div>
                    </div>
                    <!-- Single Flash Sale Card-->
                    <div class="card flash-sale-card">
                        <div class="card-body"><a href="single-product.html"><img src="img/product/3.png" alt=""><span
                                    class="product-title">Classic Garden Chair</span>
                                <p class="sale-price">$36<span class="real-price">$49</span></p><span
                                    class="progress-title">99% Sold Out</span>
                                <!-- Progress Bar-->
                                <div class="progress">
                                    <div class="progress-bar bg-danger" role="progressbar" style="width: 100%"
                                        aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </a></div>
                    </div>
                    <!-- Single Flash Sale Card-->
                    <div class="card flash-sale-card">
                        <div class="card-body"><a href="single-product.html"><img src="img/product/1.png" alt=""><span
                                    class="product-title">Black Table Lamp</span>
                                <p class="sale-price">$7.99<span class="real-price">$15</span></p><span
                                    class="progress-title">33% Sold Out</span>
                                <!-- Progress Bar-->
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" style="width: 33%" aria-valuenow="33"
                                        aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </a></div>
                    </div>
                    <!-- Single Flash Sale Card-->
                    <div class="card flash-sale-card">
                        <div class="card-body"><a href="single-product.html"><img src="img/product/2.png" alt=""><span
                                    class="product-title">Modern Sofa</span>
                                <p class="sale-price">$14<span class="real-price">$21</span></p><span
                                    class="progress-title">57% Sold Out</span>
                                <!-- Progress Bar-->
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" style="width: 57%" aria-valuenow="57"
                                        aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </a></div>
                    </div>
                    <!-- Single Flash Sale Card-->
                    <div class="card flash-sale-card">
                        <div class="card-body"><a href="single-product.html"><img src="img/product/3.png" alt=""><span
                                    class="product-title">Classic Garden Chair</span>
                                <p class="sale-price">$36<span class="real-price">$49</span></p><span
                                    class="progress-title">99% Sold Out</span>
                                <!-- Progress Bar-->
                                <div class="progress">
                                    <div class="progress-bar bg-danger" role="progressbar" style="width: 100%"
                                        aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </a></div>
                    </div>
                </div>
            </div>
            <div class="container">
                <!--.text-center.mt-3-->
                <!--a.btn.btn-warning.btn-sm(href="flash-sale.html") View All-->
            </div>
        </div>
        <!-- Top Products-->
        <div class="top-products-area clearfix py-3">
            <div class="container">
                <div class="section-heading d-flex align-items-center justify-content-between">
                    <h6>Top Products</h6><a class="btn btn-danger btn-sm" href="shop-grid.html">View All</a>
                </div>
                <div class="row g-3">
                    <!-- Single Top Product Card-->
                    <div class="col-6 col-md-4 col-lg-3">
                        <div class="card top-product-card">
                            <div class="card-body"><span class="badge badge-success">Sale</span><a class="wishlist-btn"
                                    href="#"><i class="lni lni-heart"></i></a><a class="product-thumbnail d-block"
                                    href="single-product.html"><img class="mb-2" src="img/product/11.png" alt=""></a><a
                                    class="product-title d-block" href="single-product.html">Beach Cap</a>
                                <p class="sale-price">$13<span>$42</span></p>
                                <div class="product-rating"><i class="lni lni-star-filled"></i><i
                                        class="lni lni-star-filled"></i><i class="lni lni-star-filled"></i><i
                                        class="lni lni-star-filled"></i><i class="lni lni-star-filled"></i></div><a
                                    class="btn btn-success btn-sm" href="#"><i class="lni lni-plus"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- Single Top Product Card-->
                    <div class="col-6 col-md-4 col-lg-3">
                        <div class="card top-product-card">
                            <div class="card-body"><span class="badge badge-primary">New</span><a class="wishlist-btn"
                                    href="#"><i class="lni lni-heart"></i></a><a class="product-thumbnail d-block"
                                    href="single-product.html"><img class="mb-2" src="img/product/5.png" alt=""></a><a
                                    class="product-title d-block" href="single-product.html">Wooden Sofa</a>
                                <p class="sale-price">$74<span>$99</span></p>
                                <div class="product-rating"><i class="lni lni-star-filled"></i><i
                                        class="lni lni-star-filled"></i><i class="lni lni-star-filled"></i><i
                                        class="lni lni-star-filled"></i><i class="lni lni-star-filled"></i></div><a
                                    class="btn btn-success btn-sm" href="#"><i class="lni lni-plus"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- Single Top Product Card-->
                    <div class="col-6 col-md-4 col-lg-3">
                        <div class="card top-product-card">
                            <div class="card-body"><span class="badge badge-success">Sale</span><a class="wishlist-btn"
                                    href="#"><i class="lni lni-heart"></i></a><a class="product-thumbnail d-block"
                                    href="single-product.html"><img class="mb-2" src="img/product/6.png" alt=""></a><a
                                    class="product-title d-block" href="single-product.html">Roof Lamp</a>
                                <p class="sale-price">$99<span>$113</span></p>
                                <div class="product-rating"><i class="lni lni-star-filled"></i><i
                                        class="lni lni-star-filled"></i><i class="lni lni-star-filled"></i><i
                                        class="lni lni-star-filled"></i><i class="lni lni-star-filled"></i></div><a
                                    class="btn btn-success btn-sm" href="#"><i class="lni lni-plus"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- Single Top Product Card-->
                    <div class="col-6 col-md-4 col-lg-3">
                        <div class="card top-product-card">
                            <div class="card-body"><span class="badge badge-danger">-15%</span><a class="wishlist-btn"
                                    href="#"><i class="lni lni-heart"></i></a><a class="product-thumbnail d-block"
                                    href="single-product.html"><img class="mb-2" src="img/product/9.png" alt=""></a><a
                                    class="product-title d-block" href="single-product.html">Sneaker Shoes</a>
                                <p class="sale-price">$87<span>$92</span></p>
                                <div class="product-rating"><i class="lni lni-star-filled"></i><i
                                        class="lni lni-star-filled"></i><i class="lni lni-star-filled"></i><i
                                        class="lni lni-star-filled"></i><i class="lni lni-star-filled"></i></div><a
                                    class="btn btn-success btn-sm" href="#"><i class="lni lni-plus"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- Single Top Product Card-->
                    <div class="col-6 col-md-4 col-lg-3">
                        <div class="card top-product-card">
                            <div class="card-body"><span class="badge badge-danger">-11%</span><a class="wishlist-btn"
                                    href="#"><i class="lni lni-heart"></i></a><a class="product-thumbnail d-block"
                                    href="single-product.html"><img class="mb-2" src="img/product/8.png" alt=""></a><a
                                    class="product-title d-block" href="single-product.html">Wooden Chair</a>
                                <p class="sale-price">$21<span>$25</span></p>
                                <div class="product-rating"><i class="lni lni-star-filled"></i><i
                                        class="lni lni-star-filled"></i><i class="lni lni-star-filled"></i><i
                                        class="lni lni-star-filled"></i><i class="lni lni-star-filled"></i></div><a
                                    class="btn btn-success btn-sm" href="#"><i class="lni lni-plus"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- Single Top Product Card-->
                    <div class="col-6 col-md-4 col-lg-3">
                        <div class="card top-product-card">
                            <div class="card-body"><span class="badge badge-warning">Hot</span><a class="wishlist-btn"
                                    href="#"><i class="lni lni-heart"></i></a><a class="product-thumbnail d-block"
                                    href="single-product.html"><img class="mb-2" src="img/product/4.png" alt=""></a><a
                                    class="product-title d-block" href="single-product.html">Polo Shirts</a>
                                <p class="sale-price">$38<span>$41</span></p>
                                <div class="product-rating"><i class="lni lni-star-filled"></i><i
                                        class="lni lni-star-filled"></i><i class="lni lni-star-filled"></i><i
                                        class="lni lni-star-filled"></i><i class="lni lni-star-filled"></i></div><a
                                    class="btn btn-success btn-sm" href="#"><i class="lni lni-plus"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Cool Facts Area-->
        <div class="cta-area">
            <div class="container">
                <div class="cta-text p-4 p-lg-5" style="background-image: url(img/bg-img/24.jpg)">
                    <h4>Winter Sale 50% Off</h4>
                    <p>Suha is a multipurpose, creative &amp; <br>modern mobile template.</p><a class="btn btn-danger"
                        href="#">Shop Today</a>
                </div>
            </div>
        </div>
        <!-- Weekly Best Sellers-->
        <div class="weekly-best-seller-area py-3">
            <div class="container">
                <div class="section-heading d-flex align-items-center justify-content-between">
                    <h6>Weekly Best Sellers</h6><a class="btn btn-success btn-sm" href="shop-list.html">View All</a>
                </div>
                <div class="row g-3">
                    <!-- Single Weekly Product Card-->
                    <div class="col-12 col-md-6">
                        <div class="card weekly-product-card">
                            <div class="card-body d-flex align-items-center">
                                <div class="product-thumbnail-side"><span class="badge badge-success">Sale</span><a
                                        class="wishlist-btn" href="#"><i class="lni lni-heart"></i></a><a
                                        class="product-thumbnail d-block" href="single-product.html"><img
                                            src="img/product/10.png" alt=""></a></div>
                                <div class="product-description"><a class="product-title d-block"
                                        href="single-product.html">Modern Red Sofa</a>
                                    <p class="sale-price"><i class="lni lni-dollar"></i>$64<span>$89</span></p>
                                    <div class="product-rating"><i class="lni lni-star-filled"></i>4.88 (39)</div><a
                                        class="btn btn-danger btn-sm" href="#"><i class="me-1 lni lni-cart"></i>Buy
                                        Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Single Weekly Product Card-->
                    <div class="col-12 col-md-6">
                        <div class="card weekly-product-card">
                            <div class="card-body d-flex align-items-center">
                                <div class="product-thumbnail-side"><span class="badge badge-primary">Sale</span><a
                                        class="wishlist-btn" href="#"><i class="lni lni-heart"></i></a><a
                                        class="product-thumbnail d-block" href="single-product.html"><img
                                            src="img/product/7.png" alt=""></a></div>
                                <div class="product-description"><a class="product-title d-block"
                                        href="single-product.html">Office Chair</a>
                                    <p class="sale-price"><i class="lni lni-dollar"></i>$100<span>$160</span></p>
                                    <div class="product-rating"><i class="lni lni-star-filled"></i>4.82 (125)</div><a
                                        class="btn btn-danger btn-sm" href="#"><i class="me-1 lni lni-cart"></i>Buy
                                        Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Single Weekly Product Card-->
                    <div class="col-12 col-md-6">
                        <div class="card weekly-product-card">
                            <div class="card-body d-flex align-items-center">
                                <div class="product-thumbnail-side"><span class="badge badge-danger">-10%</span><a
                                        class="wishlist-btn" href="#"><i class="lni lni-heart"></i></a><a
                                        class="product-thumbnail d-block" href="single-product.html"><img
                                            src="img/product/12.png" alt=""></a></div>
                                <div class="product-description"><a class="product-title d-block"
                                        href="single-product.html">Sun Glasses</a>
                                    <p class="sale-price"><i class="lni lni-dollar"></i>$24<span>$32</span></p>
                                    <div class="product-rating"><i class="lni lni-star-filled"></i>4.79 (63)</div><a
                                        class="btn btn-danger btn-sm" href="#"><i class="me-1 lni lni-cart"></i>Buy
                                        Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Single Weekly Product Card-->
                    <div class="col-12 col-md-6">
                        <div class="card weekly-product-card">
                            <div class="card-body d-flex align-items-center">
                                <div class="product-thumbnail-side"><span class="badge badge-warning">New</span><a
                                        class="wishlist-btn" href="#"><i class="lni lni-heart"></i></a><a
                                        class="product-thumbnail d-block" href="single-product.html"><img
                                            src="img/product/13.png" alt=""></a></div>
                                <div class="product-description"><a class="product-title d-block"
                                        href="single-product.html">Wall Clock</a>
                                    <p class="sale-price"><i class="lni lni-dollar"></i>$31<span>$47</span></p>
                                    <div class="product-rating"><i class="lni lni-star-filled"></i>4.99 (7)</div><a
                                        class="btn btn-danger btn-sm" href="#"><i class="me-1 lni lni-cart"></i>Buy
                                        Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Discount Coupon Card-->
        <div class="container">
            <div class="card discount-coupon-card border-0">
                <div class="card-body">
                    <div class="coupon-text-wrap d-flex align-items-center p-3">
                        <h5 class="text-white pe-3 mb-0">Get 20% <br> discount</h5>
                        <p class="text-white ps-3 mb-0">To get discount, enter the<strong
                                class="px-1">GET20</strong>code on the checkout page.</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Featured Products Wrapper-->
        <div class="featured-products-wrapper py-3">
            <div class="container">
                <div class="section-heading d-flex align-items-center justify-content-between">
                    <h6>Featured Products</h6><a class="btn btn-warning btn-sm" href="featured-products.html">View
                        All</a>
                </div>
                <div class="row g-3">
                    <!-- Featured Product Card-->
                    <div class="col-6 col-md-4 col-lg-3">
                        <div class="card featured-product-card">
                            <div class="card-body"><span class="badge badge-warning custom-badge"><i
                                        class="lni lni-star"></i></span>
                                <div class="product-thumbnail-side"><a class="wishlist-btn" href="#"><i
                                            class="lni lni-heart"></i></a><a class="product-thumbnail d-block"
                                        href="single-product.html"><img src="img/product/14.png" alt=""></a></div>
                                <div class="product-description"><a class="product-title d-block"
                                        href="single-product.html">Blue Skateboard</a>
                                    <p class="sale-price">$64<span>$89</span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Featured Product Card-->
                    <div class="col-6 col-md-4 col-lg-3">
                        <div class="card featured-product-card">
                            <div class="card-body"><span class="badge badge-warning custom-badge"><i
                                        class="lni lni-star"></i></span>
                                <div class="product-thumbnail-side"><a class="wishlist-btn" href="#"><i
                                            class="lni lni-heart"></i></a><a class="product-thumbnail d-block"
                                        href="single-product.html"><img src="img/product/15.png" alt=""></a></div>
                                <div class="product-description"><a class="product-title d-block"
                                        href="single-product.html">Travel Bag</a>
                                    <p class="sale-price">$64<span>$89</span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Featured Product Card-->
                    <div class="col-6 col-md-4 col-lg-3">
                        <div class="card featured-product-card">
                            <div class="card-body"><span class="badge badge-warning custom-badge"><i
                                        class="lni lni-star"></i></span>
                                <div class="product-thumbnail-side"><a class="wishlist-btn" href="#"><i
                                            class="lni lni-heart"></i></a><a class="product-thumbnail d-block"
                                        href="single-product.html"><img src="img/product/16.png" alt=""></a></div>
                                <div class="product-description"><a class="product-title d-block"
                                        href="single-product.html">Cotton T-shirts</a>
                                    <p class="sale-price">$64<span>$89</span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Featured Product Card-->
                    <div class="col-6 col-md-4 col-lg-3">
                        <div class="card featured-product-card">
                            <div class="card-body"><span class="badge badge-warning custom-badge"><i
                                        class="lni lni-star"></i></span>
                                <div class="product-thumbnail-side"><a class="wishlist-btn" href="#"><i
                                            class="lni lni-heart"></i></a><a class="product-thumbnail d-block"
                                        href="single-product.html"><img src="img/product/6.png" alt=""></a></div>
                                <div class="product-description"><a class="product-title d-block"
                                        href="single-product.html">Roof Lamp </a>
                                    <p class="sale-price">$64<span>$89</span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Internet Connection Status-->
    <div class="internet-connection-status" id="internetStatus"></div>
    <!-- Footer Nav-->
    @include('includes.footer')
    <!-- All JavaScript Files-->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/waypoints.min.js"></script>
    <script src="js/jquery.easing.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    <script src="js/jquery.countdown.min.js"></script>
    <script src="js/default/jquery.passwordstrength.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/jarallax.min.js"></script>
    <script src="js/jarallax-video.min.js"></script>
    <script src="js/default/dark-mode-switch.js"></script>
    <script src="js/default/no-internet.js"></script>
    <script src="js/default/active.js"></script>
    <script src="js/pwa.js"></script>
    <script src="js2/vendor.min.js"></script>
    <script src="js2/theme.min.js"></script>
    <script src="https://www.gstatic.com/dialogflow-console/fast/messenger/bootstrap.js?v=1"></script>
<df-messenger
  chat-title="Worthdeals"
  agent-id="6e792c66-a255-4d82-9e69-04c1daad7c88"
  language-code="hi"
></df-messenger>
</body>

<!-- Mirrored from designing-world.com/suha-v2.2.1/home.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 03 Feb 2021 14:41:53 GMT -->

</html>