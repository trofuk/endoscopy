@if(isset($pages) && is_object($pages))
@foreach($pages as $k => $page)
      @if($k%2 == 1)
 <section class="section bg-grey" id="{{ $page->alias }}">
 <div class="container">
     <div class="section-caption">
          <h2 class="h2 caption-stye-1 type-2">{{ $sections[0]->title }}</h2>
            <div class="simple-text sm" >
             <p style="font-family: inherit;">{{ $sections[0]->description }}</p>
            </div>
     </div>
        <div class="benefit-block">
               <div class="bg" style="background-image:url({{ asset('assets/img/'.$page->image_1) }})"></div>
               <div class="col-wh-50 text">
                  <h3 class="h3">ми працюємо для вас</h3>
                    <div class="simple-text">
                          <p style="font-family: inherit;">
                              {!! $page->text_1 !!}
                          </p>
                    </div>
                    <?php $texts = explode(".", $page->text_2); ?>
                    <div class="col-wh-50">
                      <ul class="list-style-1" style="font-family: inherit;">
                        @foreach($texts as $text)                      
                          <li>{!! $text !!}</li>
                        @endforeach
                      </ul>
                    
                    </div>  
                    <?php $texts = explode(".", $page->text_3); ?>
                    <div class="col-wh-50">
                      <ul class="list-style-1" style="font-family: inherit;">
                        @foreach($texts as $text)                      
                          <li>{!! $text !!}</li>
                        @endforeach
                      </ul>
                    
                    </div> 
                    <a href="{{ route('page', array('alias' => $page->alias)) }}" class="link-style-1"><span>детальніше</span></a>
               </div>
        </div>
    </div>
  </section>
  @endif     

@endforeach
@endif
 