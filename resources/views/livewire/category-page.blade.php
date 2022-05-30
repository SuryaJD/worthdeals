<div>

    <div class="mb-1">
        <a href="path-to-large-image" class="gallery-item"
            data-sub-html='<h6 class="fs-sm text-light">Gallery image caption</h6>'>
            <img src="{{ asset("storage/".$category->icon) }}" alt="Gallery thumbnail">
        </a>
    </div>

    <div class="container">
        <div class="w-full">
            <ul class="nav nav-pills d-flex justify-content-center" id="myTab1" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="products-tab-1" data-toggle="tab" href="#products">
                        <span class="nav-icon">
                            <i class="flaticon2-chat-1"></i>
                        </span>
                        <span class="nav-text">Products</span>
                    </a>
                </li>

                <li class="nav-item" >
                    <a class="nav-link" id="profile-tab-1" data-toggle="tab" href="#profile-1" aria-controls="profile">
                        <span class="nav-icon">
                            <i class="flaticon2-layers-1"></i>
                        </span>
                        <span class="nav-text">Deals</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="contact-tab-1" data-toggle="tab" href="#contact-1" aria-controls="contact">
                        <span class="nav-icon">
                            <i class="flaticon2-rocket-1"></i>
                        </span>
                        <span class="nav-text">Stores</span>
                    </a>
                </li>
            </ul>

            <div class="tab-content" id="myTabContent1">
                <div class="tab-pane fade active show" id="products" role="tabpanel" aria-labelledby="products-tab-1">
                    <div class="container">
                        <div class="top-products-area py-3">
                            <div class="section-heading d-flex align-items-center justify-content-between">
                                <h6>All Products</h6>
                                <!-- Select Product Catagory-->
                                <div style="background-position: right 0rem center;">
                                    <select class="form-select form-select-sm" wire:model.debounce="sort">
                                        @foreach ($sortOptions as $option)
                                            <option value="{{ $option }}">{{ Str::ucfirst($option) }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row g-3">
                            <!-- Single Top Product Card-->
                            @foreach ($category->products as $item)
                                @livewire('product-grid', ['product' => $product], key($product->id))                                
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="profile-1" role="tabpanel" aria-labelledby="profile-tab-1">

                    @isset($deals)
                        {{-- {{ $deals }} --}}
                    @endisset


                </div>
                <div class="tab-pane fade" id="contact-1" role="tabpanel" aria-labelledby="contact-tab-1">Tab content 3
                </div>
            </div>
        </div>
    </div>
</div>
