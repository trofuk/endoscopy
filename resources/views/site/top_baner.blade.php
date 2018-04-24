@if(isset($pages) && is_object($pages))
@foreach($pages as $k => $page)
			@if($k%2 == 0)
<div class="top-baner swiper-anime arrow-closest" id="{{ $page->alias }}">
<div class="swiper-container top-slider" data-autoplay="0" data-loop="0" data-speed="600" data-center="0" data-slides-per-view="1">
	<div class="swiper-wrapper">
	   <div class="swiper-slide first-slide" data-val="0">
		  <div class="block-bg">
		      <div class="bg-wrap">
			     <div class="bg lazy" data-src="{{ asset('assets/img/'.$page->image_1) }}"  ></div>
			       <div class="black-layer" ></div>
			  </div>
			  <div class="slider-caption vertical-align white-color">
			     <div class="container">
			  	    <h2 class="h1 caption-stye-1 type-1"><img src="{{ asset('assets/img/logo.png') }}" alt="logo" class="logo-default" style="width: 495px; height: 150px;"></h2>
				  	    <div class="simple-text lg">
								 <h1><p>{!! $page->text_1!!}</p></h1>
						</div>
			  	    <a href="{{ route('page', array('alias' => 'about' )) }}" class="link-style-1 bg-w" ><span>детальніше</span></a><!--  or "#{{ 'about' }}"  -->
			  	 </div>
			  </div>
		  </div>
	   </div>
	   <div class="swiper-slide" data-val="1">
		  <div class="block-bg">
		      <div class="bg-wrap">
			     <div class="bg lazy" data-src="{{ asset('assets/img/'.$page->image_2) }}" ></div>
			       <div class="black-layer" ></div>
			  </div>
			  <div class="slider-caption vertical-align white-color">
			     <div class="container">
			  	    <h2 class="h1 caption-stye-1 type-1"><img src="{{ asset('assets/img/logo.png') }}" alt="logo" class="logo-default" style="width: 495px; height: 150px;"></h2>
				  	    <div class="simple-text lg">
								 <p>{!! $page->text_2!!}</p>
						</div>
			  	    <a href="{{ route('page', array('alias' => 'about' )) }}" class="link-style-1 bg-w"><span>детальніше</span></a>
			  	  </div>
			  </div>
		  </div>
	   </div>
	   <div class="swiper-slide" data-val="2">
		  <div class="block-bg">
		      <div class="bg-wrap">
			     <div class="bg lazy" data-src="{{ asset('assets/img/'.$page->image_3) }}" ></div>
			       <div class="black-layer" ></div>
			  </div>
			  <div class="slider-caption vertical-align white-color">
			     <div class="container">
			  	    <h2 class="h1 caption-stye-1 type-1"><img src="{{ asset('assets/img/logo.png') }}" alt="logo" class="logo-default" style="width: 495px; height: 150px;"></h2>
				  	    <div class="simple-text lg">
								 <p>{!! $page->text_3!!}</p>
						</div>
			  	    <a href="{{ route('page', array('alias' => 'about' )) }}" class="link-style-1 bg-w"><span>детальніше</span></a>
			  	  </div>
			  </div>
		  </div>
	   </div>
	</div>
	<div class="pagination hidden pagination-style-1"></div>
	<div class="swiper-arrow-wrap">
		<div class="swiper-arrow-left swiper-arrow hover-circle"><span class="circle-point"><img src="{{ asset('assets/img/prev_arrow.png') }}" alt=""></span></div>
		<div class="swiper-arrow-right swiper-arrow hover-circle"><span class="circle-point"><img src="{{ asset('assets/img/next_arrow.png') }}" alt=""></span></div>
	</div>
 </div>
 </div>
	@endif     

@endforeach
@endif 