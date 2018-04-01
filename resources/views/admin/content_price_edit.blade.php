<div style="margin:100px 50px 0px 50px;">  
<div class="wrapper container-fluid">

 {!! Form::open(['url' => route('priceEdit','price'),'class'=>'form-horizontal','method'=>'POST','enctype'=>'multipart/form-data']) !!}


   	<div class="form-group">
    	{!! Form::label('old_price', 'Current price:',['class'=>'col-xs-2 control-label']) !!}
    	<div class="col-xs-offset-2 col-xs-10" style="margin-bottom: 15px;">
			<ul style="font-size: 14px">	
				<li>Size:   {{ $size  }}  Bytes</li>
				</br>
				<li>Uploaded:   {{  $time  }} </li>
			</ul>
			{!! Form::hidden('old_price', $path) !!}
    	</div>
    </div>

   <div style="clear: both;"></div>
   <div class="form-group">
	     {!! Form::label('price', 'Price:',['class' => 'col-xs-2 control-label']) !!}
	     <div class="col-xs-8" style="margin-bottom: 15px;">
		 	{!! Form::file('price', ['class' => 'filestyle','data-Text' => 'Upload price','data-btnClass'=>"btn-primary",'data-placeholder' => "File not exists"]) !!}
		 </div>
    </div>

      <div style="clear: both;"></div>
      <div class="form-group">
	    <div class="col-xs-offset-2 col-xs-10" style="margin-bottom: 15px;">
	      {!! Form::button('Save', ['class' => 'btn btn-primary','type' => 'submit']) !!}
	    </div>
	  </div>

</div>
</div>