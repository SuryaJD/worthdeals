@extends('layouts.main')

@section('page-area')
              <!-- Page title + breadcrumb-->
          <!-- Content-->
          <!-- Slider-->
          {{-- <livewire:sections.heroslider /> --}}
          <!-- How it works-->
          <section class="pt-4 mb-5">
            {{-- <h2 class="h3 text-center mb-grid-gutter pt-2">How it works?</h2> --}}
            <div class="row no-gutters bg-light rounded-lg">
              <div class="col-xl-4 col-lg-12 col-md-4 border-right">
                <div class="py-3">
                  <div class="d-flex align-items-center mx-auto py-3 px-3" style="max-width: 362px;">
                    <div class="display-2 font-weight-normal border-color mr-4">01</div>
                    <div class="pl-2"><img class="d-block my-2" src="img/first.png" width="256" alt="Order online">
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
                    <div class="pl-2"><img class="d-block my-2" src="img/second.png" width="256" alt="Grocery collected">
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
                    <div class="pl-2"><img class="d-block my-2" src="img/third.png" width="256" alt="Delivery">
                      <p class="mb-3 pt-1">We deliver to the door at a time convenient for you</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
          <!-- Discounted products (Carousel)-->
          @php
            $laptops = 'laptops';
            $mobiles = 'mobiles';
            $food_nutrition = 'food_nutrition';
            $furniture = 'furniture';
            $toys = 'toys';
            $mens_clothing = 'mens_clothing';
          @endphp
          <livewire:sections.productslider :category="$laptops"/>
          <livewire:sections.productslider :category="$mobiles"/>
          <livewire:sections.productslider :category="$food_nutrition"/>
          <livewire:sections.productslider :category="$furniture"/>
          <livewire:sections.productslider :category="$toys"/>
          <livewire:sections.productslider :category="$mens_clothing"/>
          <!-- Bestsellers (Carousel)-->
          {{-- <section class="pt-5 pb-4">
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
          </section> --}}
          <!-- Reviews-->
          {{-- <section class="py-5 bg-light rounded-lg my-5 px-3 px-sm-4">
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
          </section> --}}
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
@endsection