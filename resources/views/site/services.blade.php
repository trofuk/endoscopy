<div class="container">
     <div class="section-caption">
          <h2 class="h2 caption-stye-1 type-2">{{ $sections[2]->title }}</h2>
            <div class="simple-text sm">
             <p style="font-family: inherit;">{!! $sections[2]->description !!}</p>
            </div>
            <br>
            <!-- <a href="{{ URL::to( '/download/price.zip') }}" target="_blank" style="position: relative; z-index: 5; font-size: 16px;">Завантажити прайс на всі види робіт</a> -->
     </div>
     <div class="row">
      @foreach($services as $k => $service)
        <?php $texts = explode(".", $service->text); ?> 
        <div class="col-md-4 col-sm-6 col-xs-12">
             <div class="service-item hover-circle">
                  <div class="image circle-point lg"><img class="lazy" data-src="{{ asset('assets/img/'.$service->icon) }}" style="max-width: 70px; max-height: 90px;" alt="{{$service->name}}"></div>
                    <h4 class="h4  title">{{$service->name}}</h4>
                    <div class="text">
                        <ul class="list-style-1" style="font-family: inherit;">
                          @foreach($texts as $text)
                          <li style="font-size: 14px; ">{!!$text!!}</li>
                          @endforeach

                        </ul>
                    </div>
             </div>
        </div>
      @endforeach
    </div>
   </div>
