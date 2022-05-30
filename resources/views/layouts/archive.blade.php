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

    @livewireStyles
    <!-- Web App Manifest-->
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
            @yield('content')
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
    @livewireScripts
</body>

</html>