@extends('layouts.product')

@section('page-area')
<div class="page-title-overlap bg-accent pt-4">
    <div class="container d-lg-flex justify-content-between py-2 py-lg-3">
        <div class="order-lg-2 mb-3 mb-lg-0 pt-lg-2">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb breadcrumb-light flex-lg-nowrap justify-content-center justify-content-lg-start">
                    <li class="breadcrumb-item"><a class="text-nowrap" href="index.html"><i
                                class="czi-home"></i>Home</a></li>
                    <li class="breadcrumb-item text-nowrap"><a href="marketplace-category.html">Market</a>
                    </li>
                    <li class="breadcrumb-item text-nowrap active" aria-current="page">Single Item</li>
                </ol>
            </nav>
        </div>
        <div class="order-lg-1 pr-lg-4 text-center text-lg-left">
            <h1 class="h3 text-light mb-0">{{ $product->name }}</h1>
        </div>
    </div>
</div>
<!-- Page Content-->
<!-- Shadow box-->
<section class="container mb-3 pb-3">
    <div class="bg-light box-shadow-lg rounded-lg overflow-hidden">
        <div class="row">
            <!-- Content-->
            <section class="col-lg-8 pt-2 pt-lg-4 pb-4 mb-lg-3">
                <div class="pt-2 px-4 pr-lg-0 pl-xl-5">
                    <!-- Product gallery-->

                    <div class="cz-product-gallery">
                        @if (Arr::has($product->images,['800x800']))
                        <div class="cz-preview order-sm-2">
                            <div class="cz-preview-item active" id="preview"><img class="cz-image-zoom"
                                    src="{{ asset($product->images['800x800']) }}"
                                    data-zoom="{{ asset($product->images['800x800']) }}"
                                    alt="{{ $product->name}} image">
                                <div class="cz-image-zoom-pane"></div>
                            </div>
                        </div>
                        {{-- <div class="cz-thumblist order-sm-1">
                            <a class="cz-thumblist-item active" href="#preview">
                                <img src="{{ asset($product->images['800x800']) }}" alt="{{ $product->name}} thumb">
                            </a>
                        </div> --}}
                        @else
                        <div class="cz-preview order-sm-2">
                            @foreach ($product->images as $key => $url)
                            <div class="cz-preview-item @if ($loop->first) active @endif " id="{{$key}}"><img
                                    class="cz-image-zoom" src="{{ asset($url) }}" data-zoom="{{ asset($url) }}"
                                    alt="{{ $product->name}} image {{$key}}">
                                <div class="cz-image-zoom-pane"></div>
                            </div>
                            @endforeach
                        </div>
                        <div class="cz-thumblist order-sm-1">
                            @foreach ($product->images as $key => $url)
                            <a class="cz-thumblist-item @if ($loop->first) active @endif" href="#{{ $key }}">
                                <img src="{{ asset($url) }}" alt="{{ $product->name}} thumb {{$key}} ">
                            </a>
                            @endforeach
                        </div>
                        @endif
                    </div>
                </div>
            </section>
            <!-- Sidebar-->
            <aside class="col-lg-4">
                <hr class="d-lg-none">
                <div class="cz-sidebar-static h-100 ml-auto border-left">
                <script async src="https://static.addtoany.com/menu/page.js"></script>
                                    <!-- Wishlist + Sharing-->
                                    <div class="d-flex flex-wrap justify-content-between align-items-center border-top pt-3">
                                      <div>
                                          <button class="btn btn-outline-primary btn-icon btn-sm" type="button">
                                            <i class="czi-heart font-size-sm"></i>
                                          </button>
                                          <button class="btn btn-outline-warning btn-icon btn-sm" type="button">
                                            <i class="czi-bell font-size-sm" title="Get Notified about price drop"></i>
                                          </button>
                                      </div>
                                      <div>
                                        <div class="a2a_kit a2a_kit_size_32 a2a_default_style">
                                          <a class="a2a_button_facebook"></a>
                                          <a class="a2a_button_twitter"></a>
                                          <a class="a2a_button_whatsapp"></a>
                                          <a class="a2a_button_telegram"></a>
                                          <a class="a2a_button_facebook_messenger"></a>
                                        </div>
                                      </div>
                                  </div>
                    <button class="btn btn-primary btn-shadow btn-block mt-4" type="button" data-toggle="toast"
                        data-target="#cart-toast"><i class="czi-cart font-size-lg mr-2"></i>Buy Now @ {{ $product->sale_price }}</button>

                    <div class="bg-secondary rounded p-3 mt-4 mb-2">
                      <a class="media align-items-center" href="#">
                        <img class="rounded-circle" width="50" src="https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fwww.searchpng.com%2Fwp-content%2Fuploads%2F2019%2F01%2FFlipart-Logo-Icon-PNG-Image-1024x1024.png&f=1&nofb=1" alt="Sara Palson" />
                            <div class="media-body pl-2"><span class="font-size-ms text-muted">Sold on Flipkart by</span>
                                <h6 class="font-size-sm mb-0">
                                  {{ $product->extra['seller'] ?? 'N/A' }}
                                </h6>
                            </div>
                        </a>
                    </div>

                    <div class="bg-secondary rounded p-3 mb-2">
                      <a class="media align-items-center" href="#">
                        <img class="rounded-circle" width="50" src="https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fwww.searchpng.com%2Fwp-content%2Fuploads%2F2019%2F01%2FFlipart-Logo-Icon-PNG-Image-1024x1024.png&f=1&nofb=1"/>
                            <div class="media-body pl-2"><span class="font-size-ms text-muted">Brand</span>
                                <h6 class="font-size-sm mb-0">
                                  {{ $product->extra['brand'] ?? 'N/A' }}
                                </h6>
                            </div>
                        </a>
                    </div>

                    <ul class="list-unstyled font-size-sm">
                      @isset($product->extra['cod'])
                      <li class="d-flex justify-content-between mb-3 pb-3 border-bottom">
                        <span class="text-dark font-weight-medium">Cod Available</span><span class="text-muted">
                          {{ $product->extra['cod'] }}      
                        </span>
                      </li>
                      @endisset
                      @isset($product->extra['stock'])
                      <li class="d-flex justify-content-between mb-3 pb-3 border-bottom">
                        <span class="text-dark font-weight-medium">Stock Status</span><span class="text-muted">
                          {{ $product->extra['stock'] }}
                        </span>
                      </li>
                      @endisset
                      @isset($product->extra['discount'])
                      <li class="d-flex justify-content-between mb-3 pb-3 border-bottom">
                        <span class="text-dark font-weight-medium">Discount Percentage</span><span class="text-muted">
                          {{ $product->extra['discount'] }}
                        </span>
                      </li>
                      @endisset
                      @isset($product->extra['delivery'])
                      <li class="d-flex justify-content-between mb-3 pb-3 border-bottom">
                        <span class="text-dark font-weight-medium">Estimated Delivery</span><span class="text-muted">
                          {{ $product->extra['delivery'] }}
                        </span>
                      </li>
                      @endisset
                    </ul>
                </div>
            </aside>
        </div>
    </div>
</section>
<!-- Product description + Reviews + Comments-->
<section class="container mb-4 mb-lg-5">
  <div class="card" id="mx-auto">
    <a href="https://www.bluehost.com/track/worthdeals/" target="_blank"> <img border="0" src="https://bluehost-cdn.com/media/partner/images/worthdeals/728x90/728x90BW.png"> </a>
  </div>
    <!-- Nav tabs-->
    <ul class="nav nav-tabs" role="tablist">
        <li class="nav-item"><a class="nav-link p-4 active" href="#details" data-toggle="tab" role="tab">Product
                details</a></li>
        <li class="nav-item"><a class="nav-link p-4" href="#reviews" data-toggle="tab" role="tab">Reviews</a></li>
        <li class="nav-item"><a class="nav-link p-4" href="#comments" data-toggle="tab" role="tab">Comments</a></li>
    </ul>
    <div class="tab-content pt-2">
        <!-- Product details tab-->
        <div class="tab-pane fade show active" id="details" role="tabpanel">
            <div class="row">
                <div class="col-lg-8">
                    <p class="font-size-md">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                        exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
                        reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint
                        occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    </p>
                    <h3 class="h5 pt-2">Main features</h3>
                    <ul class="font-size-md">
                        <li>Nemo enim ipsam voluptatem quia voluptas sit</li>
                        <li>Ut enim ad minima veniam, quis nostrum exercitationem</li>
                        <li>Duis aute irure dolor in reprehenderit in voluptate</li>
                        <li>At vero eos et accusamus et iusto odio dignissimos</li>
                        <li>Omnis voluptas assumenda est omnis dolor</li>
                        <li>Quis autem vel eum iure reprehenderit qui in ea voluptate</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Reviews tab-->
        <div class="tab-pane fade" id="reviews" role="tabpanel">
            <!-- Reviews-->
            <div class="row pt-2 pb-3">
                <div class="col-lg-4 col-md-5">
                    <h3 class="h4 mb-4">74 Reviews</h3>
                    <div class="star-rating mr-2"><i class="czi-star-filled font-size-sm text-accent mr-1"></i><i
                            class="czi-star-filled font-size-sm text-accent mr-1"></i><i
                            class="czi-star-filled font-size-sm text-accent mr-1"></i><i
                            class="czi-star-filled font-size-sm text-accent mr-1"></i><i
                            class="czi-star font-size-sm text-muted mr-1"></i></div><span
                        class="d-inline-block align-middle">4.1 Overall rating</span>
                    <p class="pt-3 font-size-sm text-muted">58 out of 74 (77%)<br>Customers recommended this product</p>
                </div>
                <div class="col-lg-8 col-md-7">
                    <div class="d-flex align-items-center mb-2">
                        <div class="text-nowrap mr-3"><span class="d-inline-block align-middle text-muted">5</span><i
                                class="czi-star-filled font-size-xs ml-1"></i></div>
                        <div class="w-100">
                            <div class="progress" style="height: 4px;">
                                <div class="progress-bar bg-success" role="progressbar" style="width: 60%;"
                                    aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div><span class="text-muted ml-3">43</span>
                    </div>
                    <div class="d-flex align-items-center mb-2">
                        <div class="text-nowrap mr-3"><span class="d-inline-block align-middle text-muted">4</span><i
                                class="czi-star-filled font-size-xs ml-1"></i></div>
                        <div class="w-100">
                            <div class="progress" style="height: 4px;">
                                <div class="progress-bar" role="progressbar"
                                    style="width: 27%; background-color: #a7e453;" aria-valuenow="27" aria-valuemin="0"
                                    aria-valuemax="100"></div>
                            </div>
                        </div><span class="text-muted ml-3">16</span>
                    </div>
                    <div class="d-flex align-items-center mb-2">
                        <div class="text-nowrap mr-3"><span class="d-inline-block align-middle text-muted">3</span><i
                                class="czi-star-filled font-size-xs ml-1"></i></div>
                        <div class="w-100">
                            <div class="progress" style="height: 4px;">
                                <div class="progress-bar" role="progressbar"
                                    style="width: 17%; background-color: #ffda75;" aria-valuenow="17" aria-valuemin="0"
                                    aria-valuemax="100"></div>
                            </div>
                        </div><span class="text-muted ml-3">9</span>
                    </div>
                    <div class="d-flex align-items-center mb-2">
                        <div class="text-nowrap mr-3"><span class="d-inline-block align-middle text-muted">2</span><i
                                class="czi-star-filled font-size-xs ml-1"></i></div>
                        <div class="w-100">
                            <div class="progress" style="height: 4px;">
                                <div class="progress-bar" role="progressbar"
                                    style="width: 9%; background-color: #fea569;" aria-valuenow="9" aria-valuemin="0"
                                    aria-valuemax="100"></div>
                            </div>
                        </div><span class="text-muted ml-3">4</span>
                    </div>
                    <div class="d-flex align-items-center">
                        <div class="text-nowrap mr-3"><span class="d-inline-block align-middle text-muted">1</span><i
                                class="czi-star-filled font-size-xs ml-1"></i></div>
                        <div class="w-100">
                            <div class="progress" style="height: 4px;">
                                <div class="progress-bar bg-danger" role="progressbar" style="width: 4%;"
                                    aria-valuenow="4" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div><span class="text-muted ml-3">2</span>
                    </div>
                </div>
            </div>
            <hr class="mt-4 pb-4 mb-3">
            <div class="row pb-4">
                <!-- Reviews list-->
                <div class="col-md-7">
                    <div class="d-flex justify-content-end pb-4">
                        <div class="form-inline flex-nowrap">
                            <label class="text-muted text-nowrap mr-2 d-none d-sm-block" for="sort-reviews">Sort
                                by:</label>
                            <select class="custom-select custom-select-sm" id="sort-reviews">
                                <option>Newest</option>
                                <option>Oldest</option>
                                <option>Popular</option>
                                <option>High rating</option>
                                <option>Low rating</option>
                            </select>
                        </div>
                    </div>
                    <!-- Review-->
                    <div class="product-review pb-4 mb-4 border-bottom">
                        <div class="d-flex mb-3">
                            <div class="media media-ie-fix align-items-center mr-4 pr-2"><img class="rounded-circle"
                                    width="50" src="img/shop/reviews/01.jpg" alt="Rafael Marquez" />
                                <div class="media-body pl-3">
                                    <h6 class="font-size-sm mb-0">Rafael Marquez</h6><span
                                        class="font-size-ms text-muted">June 28, 2019</span>
                                </div>
                            </div>
                            <div>
                                <div class="star-rating"><i class="sr-star czi-star-filled active"></i><i
                                        class="sr-star czi-star-filled active"></i><i
                                        class="sr-star czi-star-filled active"></i><i
                                        class="sr-star czi-star-filled active"></i><i class="sr-star czi-star"></i>
                                </div>
                                <div class="font-size-ms text-muted">83% of users found this review helpful</div>
                            </div>
                        </div>
                        <p class="font-size-md mb-2">Nam libero tempore, cum soluta nobis est eligendi optio cumque
                            nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda
                            est...</p>
                        <ul class="list-unstyled font-size-ms pt-1">
                            <li class="mb-1"><span class="font-weight-medium">Pros:&nbsp;</span>Consequuntur magni,
                                voluptatem sequi, tempora</li>
                            <li class="mb-1"><span class="font-weight-medium">Cons:&nbsp;</span>Architecto beatae, quis
                                autem</li>
                        </ul>
                        <div class="text-nowrap">
                            <button class="btn-like" type="button">15</button>
                            <button class="btn-dislike" type="button">3</button>
                        </div>
                    </div>
                    <!-- Review-->
                    <div class="product-review pb-4 mb-4 border-bottom">
                        <div class="d-flex mb-3">
                            <div class="media media-ie-fix align-items-center mr-4 pr-2"><img class="rounded-circle"
                                    width="50" src="img/shop/reviews/02.jpg" alt="Barbara Palson" />
                                <div class="media-body pl-3">
                                    <h6 class="font-size-sm mb-0">Barbara Palson</h6><span
                                        class="font-size-ms text-muted">May 17, 2019</span>
                                </div>
                            </div>
                            <div>
                                <div class="star-rating"><i class="sr-star czi-star-filled active"></i><i
                                        class="sr-star czi-star-filled active"></i><i
                                        class="sr-star czi-star-filled active"></i><i
                                        class="sr-star czi-star-filled active"></i><i
                                        class="sr-star czi-star-filled active"></i>
                                </div>
                                <div class="font-size-ms text-muted">99% of users found this review helpful</div>
                            </div>
                        </div>
                        <p class="font-size-md mb-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                            eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                            nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                        <ul class="list-unstyled font-size-ms pt-1">
                            <li class="mb-1"><span class="font-weight-medium">Pros:&nbsp;</span>Consequuntur magni,
                                voluptatem sequi, tempora</li>
                            <li class="mb-1"><span class="font-weight-medium">Cons:&nbsp;</span>Architecto beatae, quis
                                autem</li>
                        </ul>
                        <div class="text-nowrap">
                            <button class="btn-like" type="button">34</button>
                            <button class="btn-dislike" type="button">1</button>
                        </div>
                    </div>
                    <!-- Review-->
                    <div class="product-review pb-4 mb-4 border-bottom">
                        <div class="d-flex mb-3">
                            <div class="media media-ie-fix align-items-center mr-4 pr-2"><img class="rounded-circle"
                                    width="50" src="img/shop/reviews/03.jpg" alt="Daniel Adams" />
                                <div class="media-body pl-3">
                                    <h6 class="font-size-sm mb-0">Daniel Adams</h6><span
                                        class="font-size-ms text-muted">May 8, 2019</span>
                                </div>
                            </div>
                            <div>
                                <div class="star-rating"><i class="sr-star czi-star-filled active"></i><i
                                        class="sr-star czi-star-filled active"></i><i
                                        class="sr-star czi-star-filled active"></i><i class="sr-star czi-star"></i><i
                                        class="sr-star czi-star"></i>
                                </div>
                                <div class="font-size-ms text-muted">75% of users found this review helpful</div>
                            </div>
                        </div>
                        <p class="font-size-md mb-2">Sed ut perspiciatis unde omnis iste natus error sit voluptatem
                            accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore
                            veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem.
                        </p>
                        <ul class="list-unstyled font-size-ms pt-1">
                            <li class="mb-1"><span class="font-weight-medium">Pros:&nbsp;</span>Consequuntur magni,
                                voluptatem sequi</li>
                            <li class="mb-1"><span class="font-weight-medium">Cons:&nbsp;</span>Architecto beatae, quis
                                autem, voluptatem sequ</li>
                        </ul>
                        <div class="text-nowrap">
                            <button class="btn-like" type="button">26</button>
                            <button class="btn-dislike" type="button">9</button>
                        </div>
                    </div>
                    <div class="text-center">
                        <button class="btn btn-outline-accent" type="button"><i class="czi-reload mr-2"></i>Load more
                            reviews</button>
                    </div>
                </div>
                <!-- Leave review form-->
                <div class="col-md-5 mt-2 pt-4 mt-md-0 pt-md-0">
                    <div class="bg-secondary py-grid-gutter px-grid-gutter rounded-lg">
                        <h3 class="h4 pb-2">Write a review</h3>
                        <form class="needs-validation" method="post" novalidate>
                            <div class="form-group">
                                <label for="review-name">Your name<span class="text-danger">*</span></label>
                                <input class="form-control" type="text" required id="review-name">
                                <div class="invalid-feedback">Please enter your name!</div><small
                                    class="form-text text-muted">Will be displayed on the comment.</small>
                            </div>
                            <div class="form-group">
                                <label for="review-email">Your email<span class="text-danger">*</span></label>
                                <input class="form-control" type="email" required id="review-email">
                                <div class="invalid-feedback">Please provide valid email address!</div><small
                                    class="form-text text-muted">Authentication only - we won't spam you.</small>
                            </div>
                            <div class="form-group">
                                <label for="review-rating">Rating<span class="text-danger">*</span></label>
                                <select class="custom-select" required id="review-rating">
                                    <option value="">Choose rating</option>
                                    <option value="5">5 stars</option>
                                    <option value="4">4 stars</option>
                                    <option value="3">3 stars</option>
                                    <option value="2">2 stars</option>
                                    <option value="1">1 star</option>
                                </select>
                                <div class="invalid-feedback">Please choose rating!</div>
                            </div>
                            <div class="form-group">
                                <label for="review-text">Review<span class="text-danger">*</span></label>
                                <textarea class="form-control" rows="6" required id="review-text"></textarea>
                                <div class="invalid-feedback">Please write a review!</div><small
                                    class="form-text text-muted">Your review must be at least 50 characters.</small>
                            </div>
                            <div class="form-group">
                                <label for="review-pros">Pros</label>
                                <textarea class="form-control" rows="2" placeholder="Separated by commas"
                                    id="review-pros"></textarea>
                            </div>
                            <div class="form-group mb-4">
                                <label for="review-cons">Cons</label>
                                <textarea class="form-control" rows="2" placeholder="Separated by commas"
                                    id="review-cons"></textarea>
                            </div>
                            <button class="btn btn-primary btn-shadow btn-block" type="submit">Submit a Review</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Comments tab-->
        <div class="tab-pane fade" id="comments" role="tabpanel">
            @comments([
                'model' => $product,
                'maxIndentationLevel' => 2
            ])
        </div>
    </div>
</section>
<!-- Related products carousel-->
<section class="container mb-5 pb-lg-3">
    <div class="d-flex flex-wrap justify-content-between align-items-center border-bottom pb-4 mb-4">
        <h2 class="h3 mb-0 pt-2">Related mockups</h2>
        <div class="pt-2"><a class="btn btn-outline-accent btn-sm" href="marketplace-category.html">More mockups<i
                    class="czi-arrow-right ml-1 mr-n1"></i></a></div>
    </div>
    <!-- Carousel-->
    <div class="cz-carousel">
        <div class="cz-carousel-inner"
            data-carousel-options="{&quot;items&quot;: 2, &quot;gutter&quot;: 16, &quot;controls&quot;: false, &quot;nav&quot;: true, &quot;responsive&quot;: {&quot;0&quot;:{&quot;items&quot;:1},&quot;500&quot;:{&quot;items&quot;:2 },&quot;768&quot;:{&quot;items&quot;:3}, &quot;992&quot;:{&quot;items&quot;:4}}}">
            <!-- Product-->
            <div>
                <div class="card product-card-alt">
                    <div class="product-thumb">
                        <button class="btn-wishlist btn-sm" type="button"><i class="czi-heart"></i></button>
                        <div class="product-card-actions"><a
                                class="btn btn-light btn-icon btn-shadow font-size-base mx-2" href="#"><i
                                    class="czi-eye"></i></a>
                            <button class="btn btn-light btn-icon btn-shadow font-size-base mx-2" type="button"
                                data-toggle="toast" data-target="#cart-toast"><i class="czi-cart"></i></button>
                        </div><a class="product-thumb-overlay" href="#"></a><img src="img/marketplace/products/02.jpg"
                            alt="Product">
                    </div>
                    <div class="card-body">
                        <div class="d-flex flex-wrap justify-content-between align-items-start pb-2">
                            <div class="text-muted font-size-xs mr-1">by <a class="product-meta font-weight-medium"
                                    href="#">Createx Std. </a>in <a class="product-meta font-weight-medium"
                                    href="#">Graphics</a></div>
                            <div class="star-rating"><i class="sr-star czi-star-filled active"></i><i
                                    class="sr-star czi-star-filled active"></i><i
                                    class="sr-star czi-star-filled active"></i><i
                                    class="sr-star czi-star-filled active"></i><i
                                    class="sr-star czi-star-filled active"></i>
                            </div>
                        </div>
                        <h3 class="product-title font-size-sm mb-2"><a href="#">Floating Phone and Tablet Mockup</a>
                        </h3>
                        <div class="d-flex flex-wrap justify-content-between align-items-center">
                            <div class="font-size-sm mr-2"><i class="czi-download text-muted mr-1"></i>109<span
                                    class="font-size-xs ml-1">Sales</span></div>
                            <div class="bg-faded-accent text-accent rounded-sm py-1 px-2">$15.<small>00</small></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Product-->
            <div>
                <div class="card product-card-alt">
                    <div class="product-thumb">
                        <button class="btn-wishlist btn-sm" type="button"><i class="czi-heart"></i></button>
                        <div class="product-card-actions"><a
                                class="btn btn-light btn-icon btn-shadow font-size-base mx-2" href="#"><i
                                    class="czi-eye"></i></a>
                            <button class="btn btn-light btn-icon btn-shadow font-size-base mx-2" type="button"
                                data-toggle="toast" data-target="#cart-toast"><i class="czi-cart"></i></button>
                        </div><a class="product-thumb-overlay" href="#"></a><img src="img/marketplace/products/03.jpg"
                            alt="Product">
                    </div>
                    <div class="card-body">
                        <div class="d-flex flex-wrap justify-content-between align-items-start pb-2">
                            <div class="text-muted font-size-xs mr-1">by <a class="product-meta font-weight-medium"
                                    href="#">Createx Std. </a>in <a class="product-meta font-weight-medium"
                                    href="#">Graphics</a></div>
                            <div class="star-rating"><i class="sr-star czi-star-filled active"></i><i
                                    class="sr-star czi-star-filled active"></i><i
                                    class="sr-star czi-star-filled active"></i><i
                                    class="sr-star czi-star-filled active"></i><i class="sr-star czi-star"></i>
                            </div>
                        </div>
                        <h3 class="product-title font-size-sm mb-2"><a href="#">Project Devices Showcase (PSD)</a></h3>
                        <div class="d-flex flex-wrap justify-content-between align-items-center">
                            <div class="font-size-sm mr-2"><i class="czi-download text-muted mr-1"></i>95<span
                                    class="font-size-xs ml-1">Sales</span></div>
                            <div class="bg-faded-accent text-accent rounded-sm py-1 px-2">$18.<small>00</small></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Product-->
            <div>
                <div class="card product-card-alt">
                    <div class="product-thumb">
                        <button class="btn-wishlist btn-sm" type="button"><i class="czi-heart"></i></button>
                        <div class="product-card-actions"><a
                                class="btn btn-light btn-icon btn-shadow font-size-base mx-2" href="#"><i
                                    class="czi-eye"></i></a>
                            <button class="btn btn-light btn-icon btn-shadow font-size-base mx-2" type="button"
                                data-toggle="toast" data-target="#cart-toast"><i class="czi-cart"></i></button>
                        </div><a class="product-thumb-overlay" href="#"></a><img src="img/marketplace/products/08.jpg"
                            alt="Product">
                    </div>
                    <div class="card-body">
                        <div class="d-flex flex-wrap justify-content-between align-items-start pb-2">
                            <div class="text-muted font-size-xs mr-1">by <a class="product-meta font-weight-medium"
                                    href="#">pixels </a>in <a class="product-meta font-weight-medium"
                                    href="#">Graphics</a></div>
                            <div class="star-rating"><i class="sr-star czi-star-filled active"></i><i
                                    class="sr-star czi-star-filled active"></i><i
                                    class="sr-star czi-star-filled active"></i><i
                                    class="sr-star czi-star-filled active"></i><i
                                    class="sr-star czi-star-filled active"></i>
                            </div>
                        </div>
                        <h3 class="product-title font-size-sm mb-2"><a href="#">Business Card Branding Mockup</a></h3>
                        <div class="d-flex flex-wrap justify-content-between align-items-center">
                            <div class="font-size-sm mr-2"><i class="czi-download text-muted mr-1"></i>316<span
                                    class="font-size-xs ml-1">Sales</span></div>
                            <div class="bg-faded-accent text-accent rounded-sm py-1 px-2">$17.<small>00</small></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Product-->
            <div>
                <div class="card product-card-alt">
                    <div class="product-thumb">
                        <button class="btn-wishlist btn-sm" type="button"><i class="czi-heart"></i></button>
                        <div class="product-card-actions"><a
                                class="btn btn-light btn-icon btn-shadow font-size-base mx-2" href="#"><i
                                    class="czi-eye"></i></a>
                            <button class="btn btn-light btn-icon btn-shadow font-size-base mx-2" type="button"
                                data-toggle="toast" data-target="#cart-toast"><i class="czi-cart"></i></button>
                        </div><a class="product-thumb-overlay" href="#"></a><img src="img/marketplace/products/07.jpg"
                            alt="Product">
                    </div>
                    <div class="card-body">
                        <div class="d-flex flex-wrap justify-content-between align-items-start pb-2">
                            <div class="text-muted font-size-xs mr-1">by <a class="product-meta font-weight-medium"
                                    href="#">pixels </a>in <a class="product-meta font-weight-medium"
                                    href="#">Graphics</a></div>
                            <div class="star-rating"><i class="sr-star czi-star-filled active"></i><i
                                    class="sr-star czi-star-filled active"></i><i
                                    class="sr-star czi-star-filled active"></i><i
                                    class="sr-star czi-star-filled active"></i><i class="sr-star czi-star"></i>
                            </div>
                        </div>
                        <h3 class="product-title font-size-sm mb-2"><a href="#">Gravity Device Mockups (PSD)</a></h3>
                        <div class="d-flex flex-wrap justify-content-between align-items-center">
                            <div class="font-size-sm mr-2"><i class="czi-download text-muted mr-1"></i>234<span
                                    class="font-size-xs ml-1">Sales</span></div>
                            <div class="bg-faded-accent text-accent rounded-sm py-1 px-2">$16.<small>00</small></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Toast: Added to Cart-->
<div class="toast-container toast-bottom-center">
    <div class="toast mb-3" id="cart-toast" data-delay="5000" role="alert" aria-live="assertive" aria-atomic="true">
        <div class="toast-header bg-success text-white"><i class="czi-check-circle mr-2"></i>
            <h6 class="font-size-sm text-white mb-0 mr-auto">Added to cart!</h6>
            <button class="close text-white ml-2 mb-1" type="button" data-dismiss="toast" aria-label="Close"><span
                    aria-hidden="true">&times;</span></button>
        </div>
        <div class="toast-body">This item has been added to your cart.</div>
    </div>
</div>
@endsection