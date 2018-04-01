 <div class="container">
     <div class="section-caption">
          <h2 class="h2 caption-stye-1 type-2">{{ $sections[4]->title }}</h2>
            <div class="simple-text sm">
             <p style="font-family: inherit;">{{ $sections[4]->description }}</p>
            </div>
     </div>
     <div class="swiper-container" data-autoplay="0" data-loop="0" data-speed="600" data-center="0" data-slides-per-view="responsive" data-xs-slides="1" data-sm-slides="3" data-md-slides="5" data-lg-slides="5" data-add-slides="5">
          <div class="swiper-wrapper">
              @foreach($partners as $partner)
              <div class="swiper-slide">
                <div class="logo-item hover-circle">
                  <a href="#" class="image circle-point lg">
                      
                      <img src="{{ 'assets/img/'.$partner->logo }}" alt="{{ $partner->name }}" style="width: 115px; height: 115px; position: absolute; margin: 25px" > 
                      
                      
                  </a>
                  <h6 class="h6 caption-stye-1" style="text-align: center; margin-top: 5px">{{ $partner->name }}</h6> 
                </div>
               </div>
               @endforeach
          </div>
          <div class="pagination pagination-style-1 dark bottom-lg"></div>
     </div>
    </div>