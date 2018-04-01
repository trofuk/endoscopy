<div class="container">
	<div class="row">
		<a href="index.html" class="footer-logo"><img src="{{ asset('assets/img/logo.png') }}" alt="" style="width: 165px; height: 50px;"></a>
		<div class="col-md-4">
			<div class="footer-item white-color">
				
				<h4 class="h4 title">адреса</h4>
				<div class="simple-text">
					<ul>
					@foreach($contacts as $contact) 
                          <p>{!! $contact->address !!}</p>
                    @endforeach
                	</ul>
				</div>
				
				
				
			</div>
		</div>
		<div class="col-md-4">
		    <div class="footer-item  white-color">
		       <h4 class="h4 title">пошта</h4>
		         
		        <div class="f-link">
		        	<ul>
		        	@foreach($contacts as $contact) 
                      <li><a href="mailto:">{{ $contact->email }}</a></li>
                    @endforeach
                	</ul>
                </div>
			</div>
		</div>
	    <div class="col-md-4">
		    <div class="footer-item white-color">
		       <h4 class="h4 title">телефон</h4>
		         <div class="f-link">
		         	<ul>
		         	@foreach($contacts as $contact)
                       <li><a href="tel:">{{ $contact->phone }}</a></li>
                    @endforeach
                	</ul>
                </div>
			</div>
		</div>
	</div>
	<div class="copyright">
		<span>2018 All rights reserved. Developed by <a href="http://electricblaze.com/">Dmytro Trofimenko</a></span>
	</div>
</div>