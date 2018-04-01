<section>
    <div class="container" style="position: relative; top: 100px; z-index: 2;">
     <div class="section-caption">
          <h2 class="h2 caption-stye-1 type-2">{{ $page->name }}</h2>
            <div class="simple-text sm">
             <p style="font-family: inherit;">Lvivendoskop  це компанія, яка прагне стати вашим найкращим вибором по ремонту та профілактичному обслуговуванню</p>
            </div>
     </div>
        <div class="benefit-block">
               <div class="bg" style="background-image:url({{ asset('assets/img/'.$page->image_1) }})"></div>
               <div class="col-wh-50 text">
                <h3 class="h3">ми працюємо для вас</h3>
                    
                  <div class="simple-text">
                          <p style="font-family: inherit;">
                                  {!! $page->text_4 !!}
                          </p>
                  </div>
                    
               </div>
              
                  
        </div>
        {!! link_to(route('about'), 'Повернутися') !!}
    </div>
</section>