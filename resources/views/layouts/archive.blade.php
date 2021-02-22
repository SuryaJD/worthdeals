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
    <link rel="stylesheet" href="http://127.0.0.1:8000/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://127.0.0.1:8000/css/animate.css">
    <link rel="stylesheet" href="http://127.0.0.1:8000/css/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.1.1/css/all.min.css">
    <link rel="stylesheet" href="http://127.0.0.1:8000/css/font-awesome.min.css">
    <link rel="stylesheet" href="http://127.0.0.1:8000/css/default/lineicons.min.css">
    <link rel="stylesheet" media="screen" href="http://127.0.0.1:8000/css2/vendor.min.css">

    <link rel="stylesheet" media="screen" id="main-styles" href="http://127.0.0.1:8000/css2/theme.min.css">

    <!-- Stylesheet-->
    <link rel="stylesheet" href="http://127.0.0.1:8000/style.css">
    <!-- Web App Manifest-->
    <link rel="manifest" href="manifest.json">
    <script type="text/JavaScript">
        <!--
             function AutoRefresh( t ) {
                setTimeout("location.reload(true);", t);
             }
          //-->
    </script>
</head>

<body>
    <!-- Preloader-->
    <div class="preloader" id="preloader">
        <div class="spinner-grow text-secondary" role="status">
            <div class="sr-only">Loading...</div>
        </div>
    </div>
    <!-- Header Area-->

    @yield('header-area')

    <!-- Sidenav Black Overlay-->
    <div class="sidenav-black-overlay"></div>
    <!-- Side Nav Wrapper-->
    <div class="suha-sidenav-wrapper filter-nav" id="sidenavWrapper">
        <!-- Catagory Sidebar Area-->
        <div class="catagory-sidebar-area">
            <!-- Catagory-->
            <div class="widget catagory mb-4">
                <h6 class="widget-title mb-3">Product Brand</h6>
                <div class="widget-desc">
                    <!-- Single Checkbox-->
                    <div class="form-check">
                        <input class="form-check-input" id="zara" type="checkbox" checked>
                        <label class="form-check-label font-weight-bold" for="zara">Zara</label>
                    </div>
                    <!-- Single Checkbox-->
                    <div class="form-check">
                        <input class="form-check-input" id="Gucci" type="checkbox">
                        <label class="form-check-label font-weight-bold" for="Gucci">Gucci</label>
                    </div>
                    <!-- Single Checkbox-->
                    <div class="form-check">
                        <input class="form-check-input" id="Addidas" type="checkbox">
                        <label class="form-check-label font-weight-bold" for="Addidas">Addidas</label>
                    </div>
                    <!-- Single Checkbox-->
                    <div class="form-check">
                        <input class="form-check-input" id="Nike" type="checkbox">
                        <label class="form-check-label font-weight-bold" for="Nike">Nike</label>
                    </div>
                    <!-- Single Checkbox-->
                    <div class="form-check">
                        <input class="form-check-input" id="Denim" type="checkbox">
                        <label class="form-check-label font-weight-bold" for="Denim">Denim</label>
                    </div>
                </div>
            </div>
            <!-- Color-->
            <div class="widget color mb-4">
                <h6 class="widget-title mb-3">Color Family</h6>
                <div class="widget-desc">
                    <!-- Single Checkbox-->
                    <div class="form-check">
                        <input class="form-check-input" id="Purple" type="checkbox" checked>
                        <label class="form-check-label font-weight-bold" for="Purple">Purple</label>
                    </div>
                    <!-- Single Checkbox-->
                    <div class="form-check">
                        <input class="form-check-input" id="Black" type="checkbox">
                        <label class="form-check-label font-weight-bold" for="Black">Black</label>
                    </div>
                    <!-- Single Checkbox-->
                    <div class="form-check">
                        <input class="form-check-input" id="White" type="checkbox">
                        <label class="form-check-label font-weight-bold" for="White">White</label>
                    </div>
                    <!-- Single Checkbox-->
                    <div class="form-check">
                        <input class="form-check-input" id="Red" type="checkbox">
                        <label class="form-check-label font-weight-bold" for="Red">Red</label>
                    </div>
                    <!-- Single Checkbox-->
                    <div class="form-check">
                        <input class="form-check-input" id="Pink" type="checkbox">
                        <label class="form-check-label font-weight-bold" for="Pink">Pink</label>
                    </div>
                </div>
            </div>
            <!-- Size-->
            <div class="widget size mb-4">
                <h6 class="widget-title mb-3">Size</h6>
                <div class="widget-desc">
                    <!-- Single Checkbox-->
                    <div class="form-check">
                        <input class="form-check-input" id="XtraLarge" type="checkbox" checked>
                        <label class="form-check-label font-weight-bold" for="XtraLarge">Xtra Large</label>
                    </div>
                    <!-- Single Checkbox-->
                    <div class="form-check">
                        <input class="form-check-input" id="Large" type="checkbox">
                        <label class="form-check-label font-weight-bold" for="Large">Large</label>
                    </div>
                    <!-- Single Checkbox-->
                    <div class="form-check">
                        <input class="form-check-input" id="medium" type="checkbox">
                        <label class="form-check-label font-weight-bold" for="medium">Medium</label>
                    </div>
                    <!-- Single Checkbox-->
                    <div class="form-check">
                        <input class="form-check-input" id="Small" type="checkbox">
                        <label class="form-check-label font-weight-bold" for="Small">Small</label>
                    </div>
                    <!-- Single Checkbox-->
                    <div class="form-check">
                        <input class="form-check-input" id="ExtraSmall" type="checkbox">
                        <label class="form-check-label font-weight-bold" for="ExtraSmall">Extra Small</label>
                    </div>
                </div>
            </div>
            <!-- Ratings-->
            <div class="widget ratings mb-4">
                <h6 class="widget-title mb-3">Ratings</h6>
                <div class="widget-desc">
                    <!-- Single Checkbox-->
                    <div class="form-check">
                        <input class="form-check-input" id="5star" type="checkbox" checked>
                        <label class="form-check-label font-weight-bold" for="5star">5 star</label>
                    </div>
                    <!-- Single Checkbox-->
                    <div class="form-check">
                        <input class="form-check-input" id="4star" type="checkbox">
                        <label class="form-check-label font-weight-bold" for="4star">4 star</label>
                    </div>
                    <!-- Single Checkbox-->
                    <div class="form-check">
                        <input class="form-check-input" id="3star" type="checkbox">
                        <label class="form-check-label font-weight-bold" for="3star">3 star</label>
                    </div>
                    <!-- Single Checkbox-->
                    <div class="form-check">
                        <input class="form-check-input" id="2star" type="checkbox">
                        <label class="form-check-label font-weight-bold" for="2star">2 star</label>
                    </div>
                    <!-- Single Checkbox-->
                    <div class="form-check">
                        <input class="form-check-input" id="1star" type="checkbox">
                        <label class="form-check-label font-weight-bold" for="1star">1 star</label>
                    </div>
                </div>
            </div>
            <!-- Payment Type-->
            <div class="widget payment-type mb-4">
                <h6 class="widget-title mb-3">Payment Type</h6>
                <div class="widget-desc">
                    <!-- Single Checkbox-->
                    <div class="form-check">
                        <input class="form-check-input" id="cod" type="checkbox" checked>
                        <label class="form-check-label font-weight-bold" for="cod">Cash On Delivery</label>
                    </div>
                    <!-- Single Checkbox-->
                    <div class="form-check">
                        <input class="form-check-input" id="paypal" type="checkbox">
                        <label class="form-check-label font-weight-bold" for="paypal">Paypal</label>
                    </div>
                    <!-- Single Checkbox-->
                    <div class="form-check">
                        <input class="form-check-input" id="checkpayment" type="checkbox">
                        <label class="form-check-label font-weight-bold" for="checkpayment">Check Payment</label>
                    </div>
                    <!-- Single Checkbox-->
                    <div class="form-check">
                        <input class="form-check-input" id="payonner" type="checkbox">
                        <label class="form-check-label font-weight-bold" for="payonner">Payonner</label>
                    </div>
                    <!-- Single Checkbox-->
                    <div class="form-check">
                        <input class="form-check-input" id="mobbanking" type="checkbox">
                        <label class="form-check-label font-weight-bold" for="mobbanking">Mobile Banking</label>
                    </div>
                </div>
            </div>
            <!-- Apply Filter-->
            <div class="apply-filter-btn"><a class="btn btn-success" href="#">Apply Filter</a></div>
        </div>
        <!-- Go Back Button-->
        <div class="go-home-btn" id="goHomeBtn"><i class="lni lni-arrow-left"></i></div>
    </div>
    <div class="page-content-wrapper">
        <!-- Top Products-->
        <div class="top-products-area">
            <!-- Item -->
            <div class="mb-4">
                <a href="path-to-large-image" class="gallery-item"
                    data-sub-html='<h6 class="fs-sm text-light">Gallery image caption</h6>'>
                    <img src="data:image/jpeg;base64,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"
                        alt="Gallery thumbnail">
                    <span class="gallery-item-caption">Gallery image caption</span>
                </a>
            </div>

            <div class="container">
                <div class="product-catagories">
                    <div class="row g-3">
                        <!-- Single Catagory-->
                        <div class="col-4"><a class="shadow-sm" href="#"><i class="fas fa-box-open"></i>Furniture</a></div>
                        <!-- Single Catagory-->
                        <div class="col-4"><a class="shadow-sm" href="#"><img src="http://127.0.0.1:8000/img/product/9.png" alt="">Shoes</a>
                        </div>
                        <!-- Single Catagory-->
                        <div class="col-4"><a class="shadow-sm" href="#"><img src="http://127.0.0.1:8000/img/product/4.png" alt="">Dress</a>
                        </div>
                    </div>
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
    </div>
    <div class="internet-connection-status" id="internetStatus"></div>
    <!-- Footer Nav-->
    @include('includes.footer')
    <!-- All JavaScript Files-->
    <script src="http://127.0.0.1:8000/js/jquery.min.js"></script>
    <script src="http://127.0.0.1:8000/js/bootstrap.bundle.min.js"></script>
    <script src="http://127.0.0.1:8000/js/waypoints.min.js"></script>
    <script src="http://127.0.0.1:8000/js/jquery.easing.min.js"></script>
    <script src="http://127.0.0.1:8000/js/owl.carousel.min.js"></script>
    <script src="http://127.0.0.1:8000/js/jquery.counterup.min.js"></script>
    <script src="http://127.0.0.1:8000/js/jquery.countdown.min.js"></script>
    <script src="http://127.0.0.1:8000/js/default/jquery.passwordstrength.js"></script>
    <script src="http://127.0.0.1:8000/js/wow.min.js"></script>
    <script src="http://127.0.0.1:8000/js/jarallax.min.js"></script>
    <script src="http://127.0.0.1:8000/js/jarallax-video.min.js"></script>
    <script src="http://127.0.0.1:8000/js/default/dark-mode-switch.js"></script>
    <script src="http://127.0.0.1:8000/js/default/no-internet.js"></script>
    <script src="http://127.0.0.1:8000/js/default/active.js"></script>
    <script src="http://127.0.0.1:8000/js/pwa.js"></script>
    <script src="http://127.0.0.1:8000/js2/vendor.min.js"></script>
    <script src="http://127.0.0.1:8000/js2/theme.min.js"></script>
</body>

</html>