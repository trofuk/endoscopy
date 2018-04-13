<div class="header">
  <a href="#home" class="logo vertical-align auto anchor-link">
     <img src="{{ asset('assets/img/logo.png') }}" alt="" class="logo-default" style="width: 165px; height: 50px;">
     <img src="{{ asset('assets/img/logo_scroll.png') }}" alt="" class="logo-scroll" style="width: 165px; height: 50px;">
  </a>
  <a href="#" class="burger-menu vertical-align right"><i></i></a>
   
   @if(isset($menu))
      <nav class="nav-menu vertical-align auto">
       <ul>
         
         @foreach($menu as $item) 
            <li><a href="#{{ $item['alias'] }}" class="anchor-link">{{ $item['title'] }}</a></li>
         @endforeach
            
       </ul>
     </nav>
   @endif
</div>

  @if(session('status'))
      <div class="alert alert-success">
        {{ session('status') }}
      </div>
  @endif
  
  @if(count($errors) > 0)
      <div class="alert alert-danger">
        <ul>
          @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
  @endif