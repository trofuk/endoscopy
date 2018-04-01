 <div class="bg ready data-jarallax" data-jarallax="5" style="background-image:url({{ asset('assets/img/fact_bg.jpg') }})"></div>
      <div class="black-layer"></div>
  <div class="container">
   <div class="section-caption white-color">
        <h2 class="h2 caption-stye-1 type-1">{{ $sections[1]->title }}</h2>
          <div class="simple-text sm">
           <p>{{ $sections[1]->description }}</p>
          </div>
   </div>
  
  <div class="row">
      @foreach($facts as $k => $fact)
          <div class="col-lg-3 col-md-6 col-sm-12">
            <div class="fact-item white-color hover-circle">
                    <div class="image circle-point lg">
                      <img src="{{ asset('assets/img/'.$fact->icon) }}" alt="">
                      <span class="timer" data-to="{{ $fact->counter }}" data-speed="3000">0</span> 
                    </div>
                    <h4 class="h4 title">{{ $fact->name }}</h4>
                  <div class="simple-text">
                      <p style="font-family: inherit;">{{ $fact->text }}</p>
                  </div>
            </div>
          </div>
      @endforeach
    </div>
  </div>