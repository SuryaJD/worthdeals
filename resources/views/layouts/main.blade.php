<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Cartzilla | Grocery Store
    </title>
    <!-- SEO Meta Tags-->
    <meta name="description" content="Cartzilla - Bootstrap E-commerce Template">
    <meta name="keywords" content="bootstrap, shop, e-commerce, market, modern, responsive,  business, mobile, bootstrap 4, html5, css3, jquery, js, gallery, slider, touch, creative, clean">
    <meta name="author" content="Createx Studio">
    <!-- Viewport-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon and Touch Icons-->
    <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png">
    <link rel="manifest" href="site.webmanifest">
    <link rel="mask-icon" color="#fe6a6a" href="safari-pinned-tab.svg">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="theme-color" content="#ffffff">
    <!-- Vendor Styles including: Font Icons, Plugins, etc.-->
    <link rel="stylesheet" media="screen" href="css/vendor.min.css">
    <!-- Main Theme Styles + Bootstrap-->
    <link rel="stylesheet" media="screen" id="main-styles" href="css/theme.min.css">

  </head>
  <!-- Body-->
  <body class="bg-secondary">
    <!-- Google Tag Manager (noscript)-->

    <!-- Sign in / sign up modal-->
    <div class="modal fade" id="signin-modal" tabindex="-1" role="dialog">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <ul class="nav nav-tabs card-header-tabs" role="tablist">
              <li class="nav-item"><a class="nav-link active" href="#signin-tab" data-toggle="tab" role="tab" aria-selected="true"><i class="czi-unlocked mr-2 mt-n1"></i>Sign in</a></li>
              <li class="nav-item"><a class="nav-link" href="#signup-tab" data-toggle="tab" role="tab" aria-selected="false"><i class="czi-user mr-2 mt-n1"></i>Sign up</a></li>
            </ul>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          </div>
          <div class="modal-body tab-content py-4">
            <form class="needs-validation tab-pane fade show active" autocomplete="off" novalidate id="signin-tab">
              <div class="form-group">
                <label for="si-email">Email address</label>
                <input class="form-control" type="email" id="si-email" placeholder="johndoe@example.com" required>
                <div class="invalid-feedback">Please provide a valid email address.</div>
              </div>
              <div class="form-group">
                <label for="si-password">Password</label>
                <div class="password-toggle">
                  <input class="form-control" type="password" id="si-password" required>
                  <label class="password-toggle-btn">
                    <input class="custom-control-input" type="checkbox"><i class="czi-eye password-toggle-indicator"></i><span class="sr-only">Show password</span>
                  </label>
                </div>
              </div>
              <div class="form-group d-flex flex-wrap justify-content-between">
                <div class="custom-control custom-checkbox mb-2">
                  <input class="custom-control-input" type="checkbox" id="si-remember">
                  <label class="custom-control-label" for="si-remember">Remember me</label>
                </div><a class="font-size-sm" href="#">Forgot password?</a>
              </div>
              <button class="btn btn-primary btn-block btn-shadow" type="submit">Sign in</button>
            </form>
            <form class="needs-validation tab-pane fade" autocomplete="off" novalidate id="signup-tab">
              <div class="form-group">
                <label for="su-name">Full name</label>
                <input class="form-control" type="text" id="su-name" placeholder="John Doe" required>
                <div class="invalid-feedback">Please fill in your name.</div>
              </div>
              <div class="form-group">
                <label for="su-email">Email address</label>
                <input class="form-control" type="email" id="su-email" placeholder="johndoe@example.com" required>
                <div class="invalid-feedback">Please provide a valid email address.</div>
              </div>
              <div class="form-group">
                <label for="su-password">Password</label>
                <div class="password-toggle">
                  <input class="form-control" type="password" id="su-password" required>
                  <label class="password-toggle-btn">
                    <input class="custom-control-input" type="checkbox"><i class="czi-eye password-toggle-indicator"></i><span class="sr-only">Show password</span>
                  </label>
                </div>
              </div>
              <div class="form-group">
                <label for="su-password-confirm">Confirm password</label>
                <div class="password-toggle">
                  <input class="form-control" type="password" id="su-password-confirm" required>
                  <label class="password-toggle-btn">
                    <input class="custom-control-input" type="checkbox"><i class="czi-eye password-toggle-indicator"></i><span class="sr-only">Show password</span>
                  </label>
                </div>
              </div>
              <button class="btn btn-primary btn-block btn-shadow" type="submit">Sign up</button>
            </form>
          </div>
        </div>
      </div>
    </div>
    <!-- Navbar-->
    @include('includes.header')
    <!-- Sidebar menu-->
    @include('includes.sidebar')
    <!-- Page-->
    <main class="sidebar-fixed-enabled" style="padding-top: 5rem;">
      <section class="px-lg-3 pt-4">
        <div class="px-3 pt-2">
          <!-- Page title + breadcrumb-->
          <!-- Content-->
          <!-- Slider-->
          <section class="cz-carousel mb-4 mb-sm-5">
            <div class="cz-carousel-inner" data-carousel-options="{&quot;items&quot;: 1, &quot;mode&quot;: &quot;gallery&quot;, &quot;nav&quot;: false, &quot;responsive&quot;: {&quot;0&quot;: {&quot;nav&quot;: true, &quot;controls&quot;: false}, &quot;576&quot;: {&quot;nav&quot;: false, &quot;controls&quot;: true}}}">
              <!-- Slide 1-->
              <div>
                <div class="rounded-lg px-md-5 text-center text-xl-left" style="background-color: #59c879;">
                  <div class="d-xl-flex justify-content-between align-items-center px-4 px-sm-5 mx-auto" style="max-width: 1226px;">
                    <div class="py-5 mr-xl-4 mx-auto mx-xl-0" style="max-width: 490px;">
                      <h2 class="h1 text-light">Fresh Foods a Click Away</h2>
                      <p class="text-light pb-4">Order any goods from our store online and we deliver them to your door at a time convenient for you.</p>
                      <h5 class="text-light pb-3">On the go? Try our mobile app</h5>
                      <div class="d-flex flex-wrap justify-content-center justify-content-xl-start"><a class="btn-market btn-apple mr-2 mb-2" href="#" role="button"><span class="btn-market-subtitle">Download on the</span><span class="btn-market-title">App Store</span></a><a class="btn-market btn-google mb-2" href="#" role="button"><span class="btn-market-subtitle">Download on the</span><span class="btn-market-title">Google Play</span></a></div>
                    </div>
                    <div><img src="img/grocery/slider/slide01.jpg" alt="Image"></div>
                  </div>
                </div>
              </div>
              <!-- Slide 2-->
              <div>
                <div class="rounded-lg px-md-5 text-center text-xl-left" style="background-color: #1a6fb0;">
                  <div class="d-xl-flex justify-content-between align-items-center px-4 px-sm-5 mx-auto" style="max-width: 1226px;">
                    <div class="py-5 mr-xl-4 mx-auto mx-xl-0" style="max-width: 490px;">
                      <h2 class="h1 text-light">24/7 Delivery Service</h2>
                      <p class="text-light pb-4">Order any goods from our store online and we deliver them to your door at a time convenient for you.</p>
                      <h5 class="text-light pb-3">On the go? Try our mobile app</h5>
                      <div class="d-flex flex-wrap justify-content-center justify-content-xl-start"><a class="btn-market btn-apple mr-2 mb-2" href="#" role="button"><span class="btn-market-subtitle">Download on the</span><span class="btn-market-title">App Store</span></a><a class="btn-market btn-google mb-2" href="#" role="button"><span class="btn-market-subtitle">Download on the</span><span class="btn-market-title">Google Play</span></a></div>
                    </div>
                    <div><img src="img/grocery/slider/slide02.jpg" alt="Image"></div>
                  </div>
                </div>
              </div>
            </div>
          </section>
          <!-- How it works-->
          <section class="pt-4 mb-5">
            <h2 class="h3 text-center mb-grid-gutter pt-2">How it works?</h2>
            <div class="row no-gutters bg-light rounded-lg">
              <div class="col-xl-4 col-lg-12 col-md-4 border-right">
                <div class="py-3">
                  <div class="d-flex align-items-center mx-auto py-3 px-3" style="max-width: 362px;">
                    <div class="display-2 font-weight-normal border-color mr-4">01</div>
                    <div class="pl-2"><img class="d-block my-2" src="img/grocery/steps/01.png" width="72" alt="Order online">
                      <p class="mb-3 pt-1">You order your favorite products online</p>
                    </div>
                  </div>
                  <hr class="d-md-none d-lg-block d-xl-none">
                </div>
              </div>
              <div class="col-xl-4 col-lg-12 col-md-4 border-right">
                <div class="py-3">
                  <div class="d-flex align-items-center mx-auto py-3 px-3" style="max-width: 362px;">
                    <div class="display-2 font-weight-normal border-color mr-4">02</div>
                    <div class="pl-2"><img class="d-block my-2" src="img/grocery/steps/02.png" width="72" alt="Grocery collected">
                      <p class="mb-3 pt-1">A personal assistant collects the products from your list</p>
                    </div>
                  </div>
                  <hr class="d-md-none d-lg-block d-xl-none">
                </div>
              </div>
              <div class="col-xl-4 col-lg-12 col-md-4">
                <div class="py-3">
                  <div class="d-flex align-items-center mx-auto py-3 px-3" style="max-width: 362px;">
                    <div class="display-2 font-weight-normal border-color mr-4">03</div>
                    <div class="pl-2"><img class="d-block my-2" src="img/grocery/steps/03.png" width="72" alt="Delivery">
                      <p class="mb-3 pt-1">We deliver to the door at a time convenient for you</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
          <!-- Discounted products (Carousel)-->
          <section class="pt-4">
            <!-- Heading-->
            <div class="d-flex flex-wrap justify-content-between align-items-center pt-1 border-bottom pb-4 mb-4">
              <h2 class="h3 mb-0 pt-3 mr-3">Discounted products</h2>
              <div class="pt-3"><a class="btn btn-outline-accent btn-sm" href="grocery-catalog.html">More products<i class="czi-arrow-right ml-1 mr-n1"></i></a></div>
            </div>
            <div class="cz-carousel cz-controls-static cz-controls-outside cz-dots-enabled pt-2">
              <div class="cz-carousel-inner" data-carousel-options="{&quot;items&quot;: 2, &quot;gutter&quot;: 16, &quot;controls&quot;: true, &quot;autoHeight&quot;: true, &quot;responsive&quot;: {&quot;0&quot;:{&quot;items&quot;:1}, &quot;480&quot;:{&quot;items&quot;:2}, &quot;720&quot;:{&quot;items&quot;:3}, &quot;991&quot;:{&quot;items&quot;:2}, &quot;1140&quot;:{&quot;items&quot;:3}, &quot;1300&quot;:{&quot;items&quot;:4}, &quot;1500&quot;:{&quot;items&quot;:5}}}">
                <!-- Product-->
                <div>
                  <div class="card product-card card-static pb-3"><span class="badge badge-danger badge-shadow">Sale</span>
                    <button class="btn-wishlist btn-sm" type="button" data-toggle="tooltip" data-placement="left" title="Add to wishlist"><i class="czi-heart"></i></button><a class="card-img-top d-block overflow-hidden" href="grocery-single.html"><img src="img/grocery/catalog/01.jpg" alt="Product"></a>
                    <div class="card-body py-2"><a class="product-meta d-block font-size-xs pb-1" href="#">Fruits and Vegetables</a>
                      <h3 class="product-title font-size-sm"><a href="grocery-single.html">Coconut, Indonesia (piece)</a></h3>
                      <div class="product-price"><span class="text-accent">$1.<small>99</small></span>
                        <del class="font-size-sm text-muted">$2.<small>99</small></del>
                      </div>
                    </div>
                    <div class="product-floating-btn">
                      <button class="btn btn-primary btn-shadow btn-sm" type="button" data-toggle="toast" data-target="#cart-toast">+<i class="czi-cart font-size-base ml-1"></i></button>
                    </div>
                  </div>
                </div>
                <!-- Product-->
                <div>
                  <div class="card product-card card-static pb-3"><span class="badge badge-danger badge-shadow">Sale</span>
                    <button class="btn-wishlist btn-sm" type="button" data-toggle="tooltip" data-placement="left" title="Add to wishlist"><i class="czi-heart"></i></button><a class="card-img-top d-block overflow-hidden" href="grocery-single.html"><img src="img/grocery/catalog/02.jpg" alt="Product"></a>
                    <div class="card-body py-2"><a class="product-meta d-block font-size-xs pb-1" href="#">Dairy and Eggs</a>
                      <h3 class="product-title font-size-sm"><a href="grocery-single.html">Soft Creme Cheese (200g)</a></h3>
                      <div class="product-price"><span class="text-accent">$2.<small>99</small></span>
                        <del class="font-size-sm text-muted">$3.<small>99</small></del>
                      </div>
                    </div>
                    <div class="product-floating-btn">
                      <button class="btn btn-primary btn-shadow btn-sm" type="button" data-toggle="toast" data-target="#cart-toast">+<i class="czi-cart font-size-base ml-1"></i></button>
                    </div>
                  </div>
                </div>
                <!-- Product-->
                <div>
                  <div class="card product-card card-static pb-3"><span class="badge badge-danger badge-shadow">Sale</span>
                    <button class="btn-wishlist btn-sm" type="button" data-toggle="tooltip" data-placement="left" title="Add to wishlist"><i class="czi-heart"></i></button><a class="card-img-top d-block overflow-hidden" href="grocery-single.html"><img src="img/grocery/catalog/03.jpg" alt="Product"></a>
                    <div class="card-body py-2"><a class="product-meta d-block font-size-xs pb-1" href="#">Soft Drinks and Juice</a>
                      <h3 class="product-title font-size-sm"><a href="grocery-single.html">Pepsi Soda Can (.33ml)</a></h3>
                      <div class="product-price"><span class="text-accent">$1.<small>00</small></span>
                        <del class="font-size-sm text-muted">$1.<small>25</small></del>
                      </div>
                    </div>
                    <div class="product-floating-btn">
                      <button class="btn btn-primary btn-shadow btn-sm" type="button" data-toggle="toast" data-target="#cart-toast">+<i class="czi-cart font-size-base ml-1"></i></button>
                    </div>
                  </div>
                </div>
                <!-- Product-->
                <div>
                  <div class="card product-card card-static pb-3"><span class="badge badge-danger badge-shadow">Sale</span>
                    <button class="btn-wishlist btn-sm" type="button" data-toggle="tooltip" data-placement="left" title="Add to wishlist"><i class="czi-heart"></i></button><a class="card-img-top d-block overflow-hidden" href="grocery-single.html"><img src="img/grocery/catalog/04.jpg" alt="Product"></a>
                    <div class="card-body py-2"><a class="product-meta d-block font-size-xs pb-1" href="#">Fruits and Vegetables</a>
                      <h3 class="product-title font-size-sm"><a href="grocery-single.html">Fresh Orange, Spain (1kg)</a></h3>
                      <div class="product-price"><span class="text-accent">$1.<small>15</small></span>
                        <del class="font-size-sm text-muted">$1.<small>75</small></del>
                      </div>
                    </div>
                    <div class="product-floating-btn">
                      <button class="btn btn-primary btn-shadow btn-sm" type="button" data-toggle="toast" data-target="#cart-toast">+<i class="czi-cart font-size-base ml-1"></i></button>
                    </div>
                  </div>
                </div>
                <!-- Product-->
                <div>
                  <div class="card product-card card-static pb-3"><span class="badge badge-danger badge-shadow">Sale</span>
                    <button class="btn-wishlist btn-sm" type="button" data-toggle="tooltip" data-placement="left" title="Add to wishlist"><i class="czi-heart"></i></button><a class="card-img-top d-block overflow-hidden" href="grocery-single.html"><img src="img/grocery/catalog/05.jpg" alt="Product"></a>
                    <div class="card-body py-2"><a class="product-meta d-block font-size-xs pb-1" href="#">Personal hygiene</a>
                      <h3 class="product-title font-size-sm"><a href="grocery-single.html">Moisture Body Lotion (250ml)</a></h3>
                      <div class="product-price"><span class="text-accent">$4.<small>20</small></span>
                        <del class="font-size-sm text-muted">$5.<small>99</small></del>
                      </div>
                    </div>
                    <div class="product-floating-btn">
                      <button class="btn btn-primary btn-shadow btn-sm" type="button" data-toggle="toast" data-target="#cart-toast">+<i class="czi-cart font-size-base ml-1"></i></button>
                    </div>
                  </div>
                </div>
                <!-- Product-->
                <div>
                  <div class="card product-card card-static pb-3"><span class="badge badge-danger badge-shadow">Sale</span>
                    <button class="btn-wishlist btn-sm" type="button" data-toggle="tooltip" data-placement="left" title="Add to wishlist"><i class="czi-heart"></i></button><a class="card-img-top d-block overflow-hidden" href="grocery-single.html"><img src="img/grocery/catalog/06.jpg" alt="Product"></a>
                    <div class="card-body py-2"><a class="product-meta d-block font-size-xs pb-1" href="#">Snacks, Sweets and Chips</a>
                      <h3 class="product-title font-size-sm"><a href="grocery-single.html">Nut Chocolate Paste (750g)</a></h3>
                      <div class="product-price"><span class="text-accent">$6.<small>50</small></span>
                        <del class="font-size-sm text-muted">$7.<small>99</small></del>
                      </div>
                    </div>
                    <div class="product-floating-btn">
                      <button class="btn btn-primary btn-shadow btn-sm" type="button" data-toggle="toast" data-target="#cart-toast">+<i class="czi-cart font-size-base ml-1"></i></button>
                    </div>
                  </div>
                </div>
                <!-- Product-->
                <div>
                  <div class="card product-card card-static pb-3"><span class="badge badge-danger badge-shadow">Sale</span>
                    <button class="btn-wishlist btn-sm" type="button" data-toggle="tooltip" data-placement="left" title="Add to wishlist"><i class="czi-heart"></i></button><a class="card-img-top d-block overflow-hidden" href="grocery-single.html"><img src="img/grocery/catalog/07.jpg" alt="Product"></a>
                    <div class="card-body py-2"><a class="product-meta d-block font-size-xs pb-1" href="#">Dairy and Eggs</a>
                      <h3 class="product-title font-size-sm"><a href="grocery-single.html">Mozzarella Mini Cheese</a></h3>
                      <div class="product-price"><span class="text-accent">$3.<small>50</small></span>
                        <del class="font-size-sm text-muted">$4.<small>99</small></del>
                      </div>
                    </div>
                    <div class="product-floating-btn">
                      <button class="btn btn-primary btn-shadow btn-sm" type="button" data-toggle="toast" data-target="#cart-toast">+<i class="czi-cart font-size-base ml-1"></i></button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
          <!-- Bestsellers (Carousel)-->
          <section class="pt-5 pb-4">
            <!-- Heading-->
            <div class="d-flex flex-wrap justify-content-between align-items-center pt-1 border-bottom pb-4 mb-4">
              <h2 class="h3 mb-0 pt-3 mr-3">Bestsellers</h2>
              <div class="pt-3"><a class="btn btn-outline-accent btn-sm" href="grocery-catalog.html">More products<i class="czi-arrow-right ml-1 mr-n1"></i></a></div>
            </div>
            <div class="cz-carousel cz-controls-static cz-controls-outside cz-dots-enabled pt-2">
              <div class="cz-carousel-inner" data-carousel-options="{&quot;items&quot;: 2, &quot;gutter&quot;: 16, &quot;controls&quot;: true, &quot;autoHeight&quot;: true, &quot;responsive&quot;: {&quot;0&quot;:{&quot;items&quot;:1}, &quot;480&quot;:{&quot;items&quot;:2}, &quot;720&quot;:{&quot;items&quot;:3}, &quot;991&quot;:{&quot;items&quot;:2}, &quot;1140&quot;:{&quot;items&quot;:3}, &quot;1300&quot;:{&quot;items&quot;:4}, &quot;1500&quot;:{&quot;items&quot;:5}}}">
                <!-- Product-->
                <div>
                  <div class="card product-card card-static pb-3">
                    <button class="btn-wishlist btn-sm" type="button" data-toggle="tooltip" data-placement="left" title="Add to wishlist"><i class="czi-heart"></i></button><a class="card-img-top d-block overflow-hidden" href="grocery-single.html"><img src="img/grocery/catalog/08.jpg" alt="Product"></a>
                    <div class="card-body py-2"><a class="product-meta d-block font-size-xs pb-1" href="#">Dairy and Eggs</a>
                      <h3 class="product-title font-size-sm"><a href="grocery-single.html">Mozzarella Cheese (125g)</a></h3>
                      <div class="product-price"><span class="text-accent">$4.<small>30</small></span></div>
                    </div>
                    <div class="product-floating-btn">
                      <button class="btn btn-primary btn-shadow btn-sm" type="button" data-toggle="toast" data-target="#cart-toast">+<i class="czi-cart font-size-base ml-1"></i></button>
                    </div>
                  </div>
                </div>
                <!-- Product-->
                <div>
                  <div class="card product-card card-static pb-3">
                    <button class="btn-wishlist btn-sm" type="button" data-toggle="tooltip" data-placement="left" title="Add to wishlist"><i class="czi-heart"></i></button><a class="card-img-top d-block overflow-hidden" href="grocery-single.html"><img src="img/grocery/catalog/09.jpg" alt="Product"></a>
                    <div class="card-body py-2"><a class="product-meta d-block font-size-xs pb-1" href="#">Personal hygiene</a>
                      <h3 class="product-title font-size-sm"><a href="grocery-single.html">Men’s Shampoo (400ml)</a></h3>
                      <div class="product-price"><span class="text-accent">$5.<small>99</small></span></div>
                    </div>
                    <div class="product-floating-btn">
                      <button class="btn btn-primary btn-shadow btn-sm" type="button" data-toggle="toast" data-target="#cart-toast">+<i class="czi-cart font-size-base ml-1"></i></button>
                    </div>
                  </div>
                </div>
                <!-- Product-->
                <div>
                  <div class="card product-card card-static pb-3">
                    <button class="btn-wishlist btn-sm" type="button" data-toggle="tooltip" data-placement="left" title="Add to wishlist"><i class="czi-heart"></i></button><a class="card-img-top d-block overflow-hidden" href="grocery-single.html"><img src="img/grocery/catalog/10.jpg" alt="Product"></a>
                    <div class="card-body py-2"><a class="product-meta d-block font-size-xs pb-1" href="#">Meat and Poultry</a>
                      <h3 class="product-title font-size-sm"><a href="grocery-single.html">Frozen Oven-ready Poultry</a></h3>
                      <div class="product-price"><span class="text-accent">$12.<small>00</small></span></div>
                    </div>
                    <div class="product-floating-btn">
                      <button class="btn btn-primary btn-shadow btn-sm" type="button" data-toggle="toast" data-target="#cart-toast">+<i class="czi-cart font-size-base ml-1"></i></button>
                    </div>
                  </div>
                </div>
                <!-- Product-->
                <div>
                  <div class="card product-card card-static pb-3">
                    <button class="btn-wishlist btn-sm" type="button" data-toggle="tooltip" data-placement="left" title="Add to wishlist"><i class="czi-heart"></i></button><a class="card-img-top d-block overflow-hidden" href="grocery-single.html"><img src="img/grocery/catalog/11.jpg" alt="Product"></a>
                    <div class="card-body py-2"><a class="product-meta d-block font-size-xs pb-1" href="#">Snacks, Sweets and Chips</a>
                      <h3 class="product-title font-size-sm"><a href="grocery-single.html">Dark Chocolate with Nuts</a></h3>
                      <div class="product-price"><span class="text-accent">$2.<small>50</small></span></div>
                    </div>
                    <div class="product-floating-btn">
                      <button class="btn btn-primary btn-shadow btn-sm" type="button" data-toggle="toast" data-target="#cart-toast">+<i class="czi-cart font-size-base ml-1"></i></button>
                    </div>
                  </div>
                </div>
                <!-- Product-->
                <div>
                  <div class="card product-card card-static pb-3">
                    <button class="btn-wishlist btn-sm" type="button" data-toggle="tooltip" data-placement="left" title="Add to wishlist"><i class="czi-heart"></i></button><a class="card-img-top d-block overflow-hidden" href="grocery-single.html"><img src="img/grocery/catalog/12.jpg" alt="Product"></a>
                    <div class="card-body py-2"><a class="product-meta d-block font-size-xs pb-1" href="#">Canned Food and Oil</a>
                      <h3 class="product-title font-size-sm"><a href="grocery-single.html">Corn Oil Bottle (500ml)</a></h3>
                      <div class="product-price"><span class="text-accent">$3.<small>10</small></span></div>
                    </div>
                    <div class="product-floating-btn">
                      <button class="btn btn-primary btn-shadow btn-sm" type="button" data-toggle="toast" data-target="#cart-toast">+<i class="czi-cart font-size-base ml-1"></i></button>
                    </div>
                  </div>
                </div>
                <!-- Product-->
                <div>
                  <div class="card product-card card-static pb-3">
                    <button class="btn-wishlist btn-sm" type="button" data-toggle="tooltip" data-placement="left" title="Add to wishlist"><i class="czi-heart"></i></button><a class="card-img-top d-block overflow-hidden" href="grocery-single.html"><img src="img/grocery/catalog/13.jpg" alt="Product"></a>
                    <div class="card-body py-2"><a class="product-meta d-block font-size-xs pb-1" href="#">Fish and Seafood</a>
                      <h3 class="product-title font-size-sm"><a href="grocery-single.html">Steak Salmon Fillet (1kg)</a></h3>
                      <div class="product-price"><span class="text-accent">$17.<small>99</small></span></div>
                    </div>
                    <div class="product-floating-btn">
                      <button class="btn btn-primary btn-shadow btn-sm" type="button" data-toggle="toast" data-target="#cart-toast">+<i class="czi-cart font-size-base ml-1"></i></button>
                    </div>
                  </div>
                </div>
                <!-- Product-->
                <div>
                  <div class="card product-card card-static pb-3">
                    <button class="btn-wishlist btn-sm" type="button" data-toggle="tooltip" data-placement="left" title="Add to wishlist"><i class="czi-heart"></i></button><a class="card-img-top d-block overflow-hidden" href="grocery-single.html"><img src="img/grocery/catalog/14.jpg" alt="Product"></a>
                    <div class="card-body py-2"><a class="product-meta d-block font-size-xs pb-1" href="#">Canned Food and Oil</a>
                      <h3 class="product-title font-size-sm"><a href="grocery-single.html">Sardine in Tomato Sauce (105g)</a></h3>
                      <div class="product-price"><span class="text-accent">$3.<small>25</small></span></div>
                    </div>
                    <div class="product-floating-btn">
                      <button class="btn btn-primary btn-shadow btn-sm" type="button" data-toggle="toast" data-target="#cart-toast">+<i class="czi-cart font-size-base ml-1"></i></button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
          <!-- Reviews-->
          <section class="py-5 bg-light rounded-lg my-5 px-3 px-sm-4">
            <h2 class="h3 py-4 text-center">Customer reviews</h2>
            <div class="cz-carousel mb-3">
              <div class="cz-carousel-inner" data-carousel-options="{&quot;items&quot;: 2, &quot;gutter&quot;: 20, &quot;controls&quot;: false, &quot;autoplay&quot;: true, &quot;autoplayTimeout&quot;: 5000, &quot;responsive&quot;: {&quot;0&quot;:{&quot;items&quot;:1}, &quot;576&quot;:{&quot;items&quot;:2},&quot;1200&quot;:{&quot;items&quot;:3},&quot;1560&quot;:{&quot;items&quot;:4}}}">
                <blockquote class="mb-2">
                  <div class="card border-0"><span class="cz-testimonial-mark"></span>
                    <div class="card-body px-3 font-size-md text-muted">
                      <div class="mb-2">
                        <div class="star-rating"><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star"></i>
                        </div>
                      </div>Lorem ipsum dolor sit amet, quia non consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua porro quisquam est.
                    </div>
                  </div>
                  <footer class="d-flex justify-content-center pt-4">
                    <div class="media align-items-center"><img class="rounded-circle" width="50" src="img/testimonials/03.jpg" alt="Richard Davis"/>
                      <div class="media-body pl-3">
                        <h6 class="font-size-sm mb-n1">Richard Davis</h6><span class="font-size-ms text-muted opacity-75">Feb 14, 2020</span>
                      </div>
                    </div>
                  </footer>
                </blockquote>
                <blockquote class="mb-2">
                  <div class="card border-0"><span class="cz-testimonial-mark"></span>
                    <div class="card-body px-3 font-size-md text-muted">
                      <div class="mb-2">
                        <div class="star-rating"><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i>
                        </div>
                      </div>Lorem ipsum dolor sit amet, quia non consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua porro quisquam est.
                    </div>
                  </div>
                  <footer class="d-flex justify-content-center pt-4">
                    <div class="media align-items-center"><img class="rounded-circle" width="50" src="img/testimonials/04.jpg" alt="Laura Willson"/>
                      <div class="media-body pl-3">
                        <h6 class="font-size-sm mb-n1">Laura Willson</h6><span class="font-size-ms text-muted opacity-75">Feb 05, 2020</span>
                      </div>
                    </div>
                  </footer>
                </blockquote>
                <blockquote class="mb-2">
                  <div class="card border-0"><span class="cz-testimonial-mark"></span>
                    <div class="card-body px-3 font-size-md text-muted">
                      <div class="mb-2">
                        <div class="star-rating"><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star"></i><i class="sr-star czi-star"></i>
                        </div>
                      </div>Lorem ipsum dolor sit amet, quia non consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua porro quisquam est.
                    </div>
                  </div>
                  <footer class="d-flex justify-content-center pt-4">
                    <div class="media align-items-center"><img class="rounded-circle" width="50" src="img/testimonials/01.jpg" alt="Mary Grant"/>
                      <div class="media-body pl-3">
                        <h6 class="font-size-sm mb-n1">Mary Alice Grant</h6><span class="font-size-ms text-muted opacity-75">Jan 27, 2020</span>
                      </div>
                    </div>
                  </footer>
                </blockquote>
                <blockquote class="mb-2">
                  <div class="card border-0"><span class="cz-testimonial-mark"></span>
                    <div class="card-body px-3 font-size-md text-muted">
                      <div class="mb-2">
                        <div class="star-rating"><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star"></i>
                        </div>
                      </div>Lorem ipsum dolor sit amet, quia non consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua porro quisquam est.
                    </div>
                  </div>
                  <footer class="d-flex justify-content-center pt-4">
                    <div class="media align-items-center"><img class="rounded-circle" width="50" src="img/shop/reviews/01.jpg" alt="Rafael Marquez"/>
                      <div class="media-body pl-3">
                        <h6 class="font-size-sm mb-n1">Rafael Marquez</h6><span class="font-size-ms text-muted opacity-75">Dec 19, 2020</span>
                      </div>
                    </div>
                  </footer>
                </blockquote>
                <blockquote class="mb-2">
                  <div class="card border-0"><span class="cz-testimonial-mark"></span>
                    <div class="card-body px-3 font-size-md text-muted">
                      <div class="mb-2">
                        <div class="star-rating"><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i>
                        </div>
                      </div>Lorem ipsum dolor sit amet, quia non consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua porro quisquam est.
                    </div>
                  </div>
                  <footer class="d-flex justify-content-center pt-4">
                    <div class="media align-items-center"><img class="rounded-circle" width="50" src="img/testimonials/02.jpg" alt="Adrian Lewis"/>
                      <div class="media-body pl-3">
                        <h6 class="font-size-sm mb-n1">Adrian Lewis</h6><span class="font-size-ms text-muted opacity-75">Dec 13, 2020</span>
                      </div>
                    </div>
                  </footer>
                </blockquote>
                <blockquote class="mb-2">
                  <div class="card border-0"><span class="cz-testimonial-mark"></span>
                    <div class="card-body px-3 font-size-md text-muted">
                      <div class="mb-2">
                        <div class="star-rating"><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star"></i><i class="sr-star czi-star"></i>
                        </div>
                      </div>Lorem ipsum dolor sit amet, quia non consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua porro quisquam est.
                    </div>
                  </div>
                  <footer class="d-flex justify-content-center pt-4">
                    <div class="media align-items-center"><img class="rounded-circle" width="50" src="img/shop/reviews/03.jpg" alt="Daniel Adams"/>
                      <div class="media-body pl-3">
                        <h6 class="font-size-sm mb-n1">Daniel Adams</h6><span class="font-size-ms text-muted opacity-75">Dec 04, 2020</span>
                      </div>
                    </div>
                  </footer>
                </blockquote>
              </div>
            </div>
          </section>
          <div class="pb-4"></div>
          <!-- Toast: Added to Cart-->
          <div class="toast-container toast-bottom-center">
            <div class="toast mb-3" id="cart-toast" data-delay="5000" role="alert" aria-live="assertive" aria-atomic="true">
              <div class="toast-header bg-success text-white"><i class="czi-check-circle mr-2"></i>
                <h6 class="font-size-sm text-white mb-0 mr-auto">Added to cart!</h6>
                <button class="close text-white ml-2 mb-1" type="button" data-dismiss="toast" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              </div>
              <div class="toast-body">This item has been added to your cart.</div>
            </div>
          </div>
        </div>
      </section>
      <!-- Footer-->
    @include('includes.footer')
    </main>
    <!-- Back To Top Button--><a class="btn-scroll-top" href="#top" data-scroll><span class="btn-scroll-top-tooltip text-muted font-size-sm mr-2">Top</span><i class="btn-scroll-top-icon czi-arrow-up">   </i></a>
    <!-- JavaScript libraries, plugins and custom scripts-->
    <script src="js/vendor.min.js"></script>
    <script src="js/theme.min.js"></script>
  </body>
</html>