<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
    <meta name="format-detection" content="telephone=no" /> 
    <meta name="description" content="Ремонт гнучких ендоскопів бронхоскопів, колоноскопів, гастроскопів, дуоденоскопів"> 
            <link rel="shortcut icon" href="{{ asset('assets/favicon1.ico') }}"/> 
            <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css"/>
            <link href="{{ asset('assets/css/fontello.css') }}" rel="stylesheet" type="text/css"/>
            <link href="{{ asset('assets/css/idangerous.swiper.css') }}" rel="stylesheet" type="text/css"/>   
            <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet" type="text/css"/>
            <link href="{{ asset('assets/css/404.css') }}" rel="stylesheet" type="text/css"/>      
      <title>EndoscopyLviv - сервіс з ремонту та продажу ендоскопів та комплектуючих</title>

  </head>
<body>
     
     <div class="loader">
       <span class="circle-point lg">
       	 <img src="{{ asset('assets/img/logo_load.png') }}" alt="" style="width: 95px; height: 29px;">
       </span>	
     </div>

     <!--==========HEADER============-->
    
     <header class="header-style-1 type-1">
		@yield('header') 
     </header>
     
     <!--==========TOP BANER============-->
     
		
		
		    @yield('top_baner')
	    

		     <!--==========MAIN CONTENT============-->
	   <div class="content">  
		
		
			@yield('about')
	  	
			
	

	@if(isset($facts) && is_object($facts))
	<section class="section time-line" id="facts">
		@yield('facts')
  	</section>
  	@endif
	
	@if(isset($services) && is_object($services))
  	<section class="section">
		@yield('services')
  	</section>
  	@endif
	
	@if(isset($products) && is_object($products))
  	<section class="section" id="products">
		@yield('products')
  	</section>
  	@endif
	
	@if(isset($partners) && is_object($partners))
	<section class="section-slider point-padd" id="partners">
		@yield('partners')
  	</section>
  	@endif

	@if(isset($testimonians) && is_object($testimonians))
	<section class="section" id="testimonians">
		@yield('testimonians')
  	</section>
  	@endif 

	@if(isset($faqs) && is_object($faqs))
  	<section class="section bg-grey" id="faqs">
		@yield('faqs')
  	</section>
  	@endif


 	<section class="section" id="contact">
		@yield('form')
  	</section>
		
		@yield('map')
		
   </div>  
     <!--==========FOOTER============-->
     
     <footer class="footer">
		@yield('footer')
     </footer>
     
 	<!--========TEAM POPUP========-->
 	
 	@yield('popup_1')
     
	
	<!--=========PRODUCTS POPUP==========-->
	@if(isset($products) && is_object($products))
		@yield('product_1')
	@endif
	



    <!--================SCRIPTS==================-->

<script>
    var assetBaseUrl = "{{ asset('') }}";
</script>

<!-- <script>
	function submitForm() {
		$.ajax({type:'POST', url:assetBaseUrl + 'assets/email-action.php', data:$('#contact-form').serialize(), success: function(response) {
		   $('.submit').html('send');
		   $('.success').addClass('active');
		   document.contactform.reset();                                 
		}});                
		return false;
	}	
</script> -->



                                                       
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/2.7.6/idangerous.swiper.min.js"></script>  
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/2.2.2/isotope.pkgd.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA69OfixgZvbLnSG3GB203NUEfZnjkDdww&v=3.exp"></script>
<script src="{{ asset('assets/js/map.js') }}"></script>
<script src="{{ asset('assets/js/SmoothScroll.js') }}"></script>
<script src="{{ asset('assets/js/jarallax.js') }}"></script>
<script src="{{ asset('assets/js/jquery.countTo.js') }}"></script>
<script id="all" src="{{ asset('assets/js/all.js') }}"></script>
<script src="{{ asset('assets/js/anchors.nav.js') }}"></script> 

<!-- JS accordion-->
<script type="text/javascript">
  $(document).ready(function($) {
    $('#accordion').find('.accordion-toggle').click(function(){

      //Expand or collapse this panel
      $(this).next().slideToggle('fast');

      //Hide the other panels
      $(".accordion-content").not($(this).next()).slideUp('fast');

    });
  });
</script>

</body>
</html>				   