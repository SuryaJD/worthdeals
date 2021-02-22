<div>
    <section class="cz-carousel cz-controls-static cz-dots-enabled cz-dots-light cz-dots-inside mb-4 mb-sm-5">
        <div class="cz-carousel-inner"  data-carousel-options='{"loop": true}'>
          <!-- Slide 1-->
          {{ $slides }}
          @foreach ($slides as $slide)
          <div>
            <div class="rounded-lg px-md-5 text-center text-xl-left" style="background-color: #59c879;">
              <div class="d-xl-flex justify-content-between align-items-center px-4 px-sm-5 mx-auto" style="max-width: 1226px;">
                <div class="py-5 mr-xl-4 mx-auto mx-xl-0" style="max-width: 490px;">
                  <h2 class="h1 text-light">{{ $slide->name }}</h2>
                  <p class="text-light pb-4">{{ $slide->description }}</p>
                  @if (isset($slide->start_date) && isset($slide->expiry_date))
                    <h6 class="text-light pb-3">
                      From {{ $slide->start_date->format('jS \\of F')  }} To {{ $slide->expiry_date->format('jS \\of F') }}
                    </h6>                      
                  @endif
                  <div class="d-flex flex-wrap justify-content-center justify-content-xl-start">
                    <a href="{{$slide->link}}" class="btn btn-light btn-lg">Buy Now</a>
                  </div>
                </div>
                <div><img src="{{ $slide->images['200x200'] ?? ""}}" alt="Image"></div>
              </div>
            </div>
          </div>
          @endforeach
        </div>
    </section>
</div>