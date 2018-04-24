 <div class="bg ready data-jarallax" data-jarallax="5" style="background-image:url({{ asset('assets/img/contact_bg.jpg') }})"></div>
  <div class="black-layer"></div>
  <div class="container" >
   <div class="section-caption white-color">
        <h2 class="h2 caption-stye-1 type-1">{{ $sections[7]->title }}</h2>
          <div class="simple-text sm">
             <p style="font-family: inherit;">{{ $sections[7]->description }}</p>
          </div>
   </div>
   <div class="row">
      <div class="col-md-10 col-md-offset-1">
           <div class="contact-block" style="font-family: inherit;">
                <div class="contact-item" style="display: inline-grid;">
                   <h4 class="h4 title">адреса</h4>
                     <ul class="list-style-3" style="font-family: 'Raleway', sans-serif;">
                        @foreach($contacts as $k => $contact) 
                        {!! $contact->address !!}
                        </br>
                        @endforeach
                     </ul>
                </div>

                <div class="contact-item" style="display: inline-grid;">
                     <h4 class="h4 title">пошта</h4>
                     @foreach($contacts as $k => $contact) 
                        <a href="mailto:" title="Contact email">{{ $contact->email }}</a>
                      @endforeach                   
                </div>

                <div class="contact-item" style="display: inline-grid;">
                     <h4 class="h4 title">телефон</h4>
                     @foreach($contacts as $k => $contact)
                        <a href="tel:" title="Contact phone">{{ $contact->phone }}</a>
                     @endforeach
                </div>

                <form action="{{ route('contact') }}" method="POST" name="contactform" class="contact-form" id="contact-form">
                     <h4 class="h4 title">Ваше запитання?</h4>
                     <div class="input-field col-wh-50">
                          <label for="name">Ім'я</label>
                          <input name="name" id="name"> 
                           <span></span>
                      </div>
                      <div class="input-field col-wh-50">
                           <label for="email">Пошта</label> 
                           <input name="email" id="email" > 
                           <span></span>
                      </div>
                      <div class="input-field col-wh-50">
                           <label for="phone">Телефон</label> 
                           <input name="phone" id="phone" > 
                           <span></span>
                      </div>
                      <div class="input-field">
                           <label for="text">Запитання</label> 
                           <input name="text" id="text">
                           <span></span>
                      </div>
                      <button type="submit" class="link-style-1 submit"><span>надіслати</span></button>
                      

                     
                   {{ csrf_field() }}

                </form>

              <div class="success">
                 <div class="table-align">
                 <div class="row-view">
                      <div class="cell-view">
                         <div class="thanks">
                          <div class="close-popup"><span>X</span></div> 
                            <h4 class="h4 title">Your message was sent successfully</h4>
                              <div class="simple-text">
                               <p>Duis commodo risus et magna suscipit aliquam. Curabitur gravida efficitur purus. Pellentesque finibus neque sit amet justo volutpat tincidunt enim id turpis feugiat</p>
                              </div>
                         </div>
                        </div>
                       </div>
                     </div>
               </div>
           </div>
      </div>
   </div>
  </div>