<div>
    <section class="pt-4">
        <!-- Heading-->
        <div class="d-flex flex-wrap justify-content-between align-items-center pt-1 border-bottom pb-4 mb-4">
          <h2 class="h3 mb-0 pt-3 mr-3"> Best Products In {{Str::ucfirst($category)}}</h2>
          <div class="pt-3"><a class="btn btn-outline-accent btn-sm" href="{{route('product.category',['category' => $category])}}">More products<i class="czi-arrow-right ml-1 mr-n1"></i></a></div>
        </div>
        <div class="cz-carousel cz-controls-static cz-controls-outside cz-dots-enabled pt-2">
          <div class="cz-carousel-inner" data-carousel-options="{&quot;items&quot;: 2, &quot;gutter&quot;: 16, &quot;controls&quot;: true, &quot;autoHeight&quot;: true, &quot;responsive&quot;: {&quot;0&quot;:{&quot;items&quot;:1}, &quot;480&quot;:{&quot;items&quot;:2}, &quot;720&quot;:{&quot;items&quot;:3}, &quot;991&quot;:{&quot;items&quot;:2}, &quot;1140&quot;:{&quot;items&quot;:3}, &quot;1300&quot;:{&quot;items&quot;:4}, &quot;1500&quot;:{&quot;items&quot;:5}}}">
            <!-- Product-->
            @foreach ($products as $product)
                <livewire:sections.productblock :product="$product"/>
            @endforeach
          </div>
        </div>
      </section>
</div>
