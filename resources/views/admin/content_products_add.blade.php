<div style="margin:100px 50px 0px 50px;">  
<div class="wrapper container-fluid">

	{!! Form::open(['url' => route('productsAdd'),'class' => 'form-horizontal','method' => 'POST','enctype' => 'multipart/form-data']) !!}
 	
	
	<div class="form-group">
		{!! Form::label('name', 'Name:', ['class' => 'col-xs-2 control-label']) !!}
		<div class="col-xs-8" style="margin-bottom: 15px;">
			{!! Form::text('name', old('name'), ['class' => 'form-control','placeholder' => 'Input product name']) !!}
		</div>
	</div>

	<div style="clear: both;"></div>
	<div class="form-group">
		{!! Form::label('type', 'Price:', ['class' => 'col-xs-2 control-label']) !!}
		<div class="col-xs-8" style="margin-bottom: 15px;">
			{!! Form::text('type', old('type'), ['class' => 'form-control','placeholder' => 'Input product type']) !!}
		</div>
	</div>

	<div style="clear: both;"></div>
	<div class="form-group">
		{!! Form::label('model', 'Model:', ['class' => 'col-xs-2 control-label']) !!}
		<div class="col-xs-8" style="margin-bottom: 15px;">
			{!! Form::text('model', old('model'), ['class' => 'form-control','placeholder' => 'Input product model']) !!}
		</div>
	</div>

	
	
	<div style="clear: both;"></div>
    <div class="form-group">
	     {!! Form::label('description', 'Description:',['class' => 'col-xs-2 control-label']) !!}
	     <div class="col-xs-8" style="margin-bottom: 15px;">
		 	{!! Form::textarea('description', old('description'), ['id' => 'editor','class' => 'form-control','placeholder' => 'Input description']) !!}
		 </div>
    </div>


   <div style="clear: both;"></div>
   <div class="form-group">
	     {!! Form::label('image_main', 'Main image:',['class' => 'col-xs-2 control-label']) !!}
	     <div class="col-xs-8" style="margin-bottom: 15px;">
		 	{!! Form::file('image_main', ['class' => 'filestyle','data-Text' => 'Choose main image','data-btnClass'=>"btn-primary",'data-placeholder' => "File not exists"]) !!}
		 </div>
    </div>


   <div style="clear: both;"></div>
   <div class="form-group">
	     {!! Form::label('image_1', 'Image 1:',['class' => 'col-xs-2 control-label']) !!}
	     <div class="col-xs-8" style="margin-bottom: 15px;">
		 	{!! Form::file('image_1', ['class' => 'filestyle','data-Text' => 'Choose image 1','data-btnClass'=>"btn-primary",'data-placeholder' => "File not exists"]) !!}
		 </div>
    </div>

   <div style="clear: both;"></div>
   <div class="form-group">
	     {!! Form::label('image_2', 'Image 2:',['class' => 'col-xs-2 control-label']) !!}
	     <div class="col-xs-8" style="margin-bottom: 15px;">
		 	{!! Form::file('image_2', ['class' => 'filestyle','data-Text' => 'Choose image 2','data-btnClass'=>"btn-primary",'data-placeholder' => "File not exists"]) !!}
		 </div>
    </div>

   <div style="clear: both;"></div>
   <div class="form-group">
	     {!! Form::label('image_3', 'Image 3:',['class' => 'col-xs-2 control-label']) !!}
	     <div class="col-xs-8" style="margin-bottom: 15px;">
		 	{!! Form::file('image_3', ['class' => 'filestyle','data-Text' => 'Choose image 3','data-btnClass'=>"btn-primary",'data-placeholder' => "File not exists"]) !!}
		 </div>
    </div>

   <div style="clear: both;"></div>
   <div class="form-group">
	     {!! Form::label('image_4', 'Image 4:',['class' => 'col-xs-2 control-label']) !!}
	     <div class="col-xs-8" style="margin-bottom: 15px;">
		 	{!! Form::file('image_4', ['class' => 'filestyle','data-Text' => 'Choose image 4','data-btnClass'=>"btn-primary",'data-placeholder' => "File not exists"]) !!}
		 </div>
    </div>



   	<div style="clear: both;"></div>
	  <div class="form-group">
	    <div class="col-xs-offset-2 col-xs-10" style="margin-bottom: 15px;">
	      {!! Form::button('Save', ['class' => 'btn btn-primary','type' => 'submit']) !!}
	    </div>
	</div>
	
	
	
	{!! Form::close() !!}
	
	<script>
		CKEDITOR.replace('editor');
	</script>
	
</div>
</div>