<div class="bg ready data-jarallax" data-jarallax="5" style="background-image:url({{ asset('assets/img/testimonians_bg.jpg') }})"></div>
<div class="black-layer"></div>
 <div class="container-fluid">
     <div class="section-caption white-color">
          <h2 class="h2 caption-stye-1 type-1">{{ $sections[5]->title }}</h2>
            <div class="simple-text sm">
             <p style="font-family: inherit;">{{ $sections[5]->description }}</p>
            </div>
     </div>
     <div class="swiper-container testi-slider slide-max-width click-point" data-autoplay="0" data-loop="0" data-speed="600" data-center="1" data-slides-per-view="responsive" data-xs-slides="1" data-sm-slides="1" data-md-slides="1" data-lg-slides="1" data-add-slides="3">
          <div class="swiper-wrapper">
            @foreach($testimonians as $k => $testimonian)
              <div class="swiper-slide" data-val="{{ $k }}">
                <div class="testi-block hover-circle">
                  <div class="text">
                       <div class="simple-text">
                         <i>“</i>
                            <p style="font-family: inherit;">{!! $testimonian->text !!}</p>
                         <i>”</i>     
                       </div>    
                  </div>
                  <div class="people vertical-align">
<!--                         <div class="image circle-point lg">
                          <img src="{{ 'assets/img/'.$testimonian->images}}" alt="{{ $testimonian->name }}" style="width: 115px; height: 115px;" > 
                           
                        </div> -->
                       <h4 class="h4 title" style="padding-bottom: 5px; margin-right: 20px">{{ $testimonian->name }}</h4>
                       <div class="sub-title" style="margin-right: 20px">{{ $testimonian->position }}</div>    
                  </div>
                </div>
               </div>
            @endforeach   
          </div>
        <div class="pagination pagination-style-1 hidden dark bottom-lg"></div>
     </div>
    </div>