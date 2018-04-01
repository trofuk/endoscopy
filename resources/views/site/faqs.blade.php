

<!-- CSS -->
<style>
  .accordion-toggle {cursor: pointer;}
  .accordion-content {display: none; box-sizing: content-box; height: 100px;}
  .accordion-content.default {display: block;box-sizing: content-box; height: 100px;}
  .container-faq {min-height: 650px;}

</style>




 <div class="container container-faq">
     <div class="section-caption">
          <h2 class="h2 caption-stye-1 type-2">{{ $sections[6]->title }}</h2>
            <div class="simple-text sm">
             <p style="font-family: inherit;">{{ $sections[6]->description }}</p>
            </div>
     </div>
     


     <div class="row" id="accordion">
        
    @foreach($faqs as $k => $faq)
        <div class="col-lg-12 col-md-12">

             <h4 class="h4 title accordion-toggle"><span class="circle-point" style="display: inline-block; width: 25px; height: 25px; margin-right: 20px">{{ ($k+1).'.'}}</span>{{ $faq->question }}</h4>
             <div class="service-block hover-circle accordion-content">
                <div class="image lg circle-point " style="width: 100px; height: 100px;">
                    
                    <img src="{{ 'assets/img/'.$faq->icon}}" alt="{{ $faq->question }}" style="width: 90px;" >
                </div>
                  <div class="text" style="font-size: 14px;">
                       {!! $faq->answer !!}
                        
                  </div>
             </div>
        </div>
    @endforeach

     </div>
    </div>
  