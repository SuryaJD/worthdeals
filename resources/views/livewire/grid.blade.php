<div class="product-catagory-wrap">
    <div class="row px-3">
        <!-- Single Catagory Card-->

        @foreach ($grid as $item)
            <div class="col-4 p-1 mb-2">
                <a href="{{ route('category.single',['category' => $item->slug,'utm_source' => 'grid' ])}}">
                <div class="card catagory-card d-flex h-100">
                    <div class="card-body row justify-content-center align-self-center p-1">
                        <img src="{{ asset("storage/".$item->icon) }}">
                    </div>
                        <span class="p-1 pb-2">{{ $item->title }}</span>
                </div>
                </a>
            </div>            
        @endforeach
    </div>
</div>