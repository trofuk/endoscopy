<div class="bg ready data-jarallax" data-jarallax="5" style="background-image:url({{ asset('assets/img/products_bg.jpg') }})"></div>
<div class="black-layer"></div>
 <div class="container">
     <div class="section-caption white-color">
          <h2 class="h2 caption-stye-1 type-1">{{ $sections[3]->title }}</h2>
            <div class="simple-text sm">
             <p>{{ $sections[3]->description }}</p>
            </div>
            <!-- <a href="{{ URL::to( '/download/price.zip') }}" target="_blank" style="position: relative; z-index: 5; font-size: 16px;">Click to download price</a> -->
      </div>
      
      

<!--      @if(isset($tags) && is_object($tags))
     <div class="filters">
         <div class="drop-filter"><span>All </span><i class="icon-down-open-big arrow-down"></i></div>
           <ul class="filter-mob-list">
              <li class="active link-style-1" data-filter="*"><span>All</span></li>

              @foreach($tags as $tag)
                <li class="link-style-1" data-filter=".{{$tag}}"><span>{{$tag}}</span></li>
              @endforeach
           </ul>
     </div>
     @endif  -->
     
     <div class="row">
        <div class="izotope-container">
           <div class="grid-sizer"></div>
            
            @foreach($products as $k => $product)

            @if(($k < 8))
            <!-- ||(in_array($product->filter, $tags->toArray())) -->
              <div class="item wh-25 {{ $product->filter }}">
                <div class="image" >
                   {{ Html::image('assets/img/products/'.$product->image_main, $product->name, array('width' => '100%')) }} 
                </div> 
                 <div class="project-desc open-popup" data-rel="index-{{ $k + 11 }}">
                  <span class="layer"></span>
                   <div class="vertical-align white-color">
                  <h4 class="h4 title">{{ $product->name }}</h4>
                    <span class="sub-title">{{ $product->type }}</span>
                   </div>     
                 </div>
              </div>
             @endif 
            @endforeach
            <div class="load-item">

            @foreach($products as $k => $product)
            @if($k >= 8)
              <div class="item wh-25 {{ $product->filter }}">
               <div class="image">
                   {{ Html::image('assets/img/products/'.$product->image_main, $product->name) }} 
                </div> 
                 <div class="project-desc open-popup" data-rel="index-{{ $k + 11 }}">
                  <span class="layer"></span>
                   <div class="vertical-align white-color">
                  <h4 class="h4 title">{{ $product->name }}</h4>
                    <span class="sub-title">{{ $product->type }}</span>
                   </div>     
                 </div>
              </div>
                         
            @endif
            @endforeach
            
            @if($k > 7)
              </div>
            @endif 
             
                           
        </div>
     </div>
     <div class="text-center">
       <a href="#" class="link-style-1 load-more"><span>Більше товарів</span></a>
       <span class="no-item">Більше немає</span>
     </div>
    </div>