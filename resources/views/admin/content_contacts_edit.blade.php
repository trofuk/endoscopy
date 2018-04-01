<div style="margin:100px 50px 0px 50px;">  
<div class="wrapper container-fluid">

	{!! Form::open(['url' => route('contactsEdit',array('contact'=>$data['id'])),'class'=>'form-horizontal','method'=>'POST','enctype'=>'multipart/form-data']) !!}
 	
	
	<div class="form-group">
		{!! Form::hidden('id', $data['id']) !!}
	     {!! Form::label('address', 'Address:',['class'=>'col-xs-2 control-label']) !!}
		<div class="col-xs-8" style="margin-bottom: 15px;">
			{!! Form::text('address', $data['address'], ['class' => 'form-control','placeholder'=>'Input address']) !!}
		</div>
	</div>

	<div style="clear: both;"></div>
	<div class="form-group">
		{!! Form::label('email', 'Email:',['class'=>'col-xs-2 control-label']) !!}
		<div class="col-xs-8" style="margin-bottom: 15px;">
			{!! Form::text('email', $data['email'], ['class' => 'form-control','placeholder'=>'Input email']) !!}
		</div>
	</div>
	
	<div style="clear: both;"></div>
	<div class="form-group">
		{!! Form::label('phone', 'Phone:',['class'=>'col-xs-2 control-label']) !!}
		<div class="col-xs-8" style="margin-bottom: 15px;">
			{!! Form::text('phone', $data['phone'], ['class' => 'form-control','placeholder'=>'Input phone']) !!}
		</div>
	</div>

  
     <div style="clear: both;"></div>
      <div class="form-group">
	    <div class="col-xs-offset-2 col-xs-10" style="margin-bottom: 15px;">
	      {!! Form::button('Save', ['class' => 'btn btn-primary','type' => 'submit']) !!}
	    </div>
	  </div>
	
	
	
	{!! Form::close() !!}

</div>
</div>