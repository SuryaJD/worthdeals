<div>
    <div class="card product-card card-static pb-3"><span class="badge badge-warning badge-shadow"><i class="czi-lightning font-size-base mr-2">deal</i></span>
        <button class="btn-wishlist btn-sm" type="button" data-toggle="tooltip" data-placement="left"
            title="Add to wishlist" wire:click="wishlist"><i class="czi-heart"></i>
        </button>
            <a class="card-img-top d-block overflow-hidden text-center py-4 my-auto" href="{{ $product->link }}">
            <img src="{{ asset($product->display_pic) ?? config('worthdeals.default.images.featured') }}" alt="Product" width="100px;" class="mx-auto d-block"></a>
            <div class="card-body py-2">
                <h6 class="product-meta d-block font-size-xs pb-1">
                    {{ count($product->offers )}} offers
                </h6>
                <h3 class="product-title font-size-sm"><a href="{{ route('product.single',['product' => $product->slug ]) }}">{{ $product->name }}</a></h3>
                <div class="product-price"><span class="text-accent">₹ {{ $product->sale_price }}</span>
                    <del class="font-size-sm text-muted">₹ {{ $product->regular_price }}</del>
                </div>
            </div>
        <div class="product-floating-btn">
            <a class="btn btn-primary btn-shadow btn-sm" href="{{ $product->link }}"><i class="czi-cart font-size-base ml-1"></i></a>
        </div>
    </div>
</div>