<div style="margin:100px 50px 0px 50px;">  
<div class="wrapper container-fluid">

	{!! Form::open(['url' => route('productsEdit',array('product'=>$data['id'])),'class'=>'form-horizontal','method'=>'POST','enctype'=>'multipart/form-data']) !!}
 	
	
	<div class="form-group">
		{!! Form::hidden('id', $data['id']) !!}
	     {!! Form::label('name', 'Name:',['class'=>'col-xs-2 control-label']) !!}
		<div class="col-xs-8" style="margin-bottom: 15px;">
			{!! Form::text('name', $data['name'], ['class' => 'form-control','placeholder'=>'Input product name']) !!}
		</div>
	</div>
	
	<div style="clear: both;"></div>
	<div class="form-group">
		 {!! Form::label('type', 'Price:',['class'=>'col-xs-2 control-label']) !!}
		<div class="col-xs-8" style="margin-bottom: 15px;">
			{!! Form::text('type', $data['type'], ['class' => 'form-control','placeholder'=>'Input product type']) !!}
		</div>
	</div>

	<div style="clear: both;"></div>
	<div class="form-group">
		 {!! Form::label('model', 'Model:',['class'=>'col-xs-2 control-label']) !!}
		<div class="col-xs-8" style="margin-bottom: 15px;">
			{!! Form::text('model', $data['model'], ['class' => 'form-control','placeholder'=>'Input product model']) !!}
		</div>
	</div>

	<div style="clear: both;"></div>
    <div class="form-group">
	     {!! Form::label('description', 'Description:',['class' => 'col-xs-2 control-label']) !!}
	     <div class="col-xs-8" style="margin-bottom: 15px;">
		 	{!! Form::textarea('description', $data['description'], ['id' => 'editor','class' => 'form-control','placeholder' => 'Input product description']) !!}
		 </div>
    </div>




	<!-- Main image -->
   	<div style="clear: both;"></div>
	<div class="form-group">
    	{!! Form::label('old_image_main', 'Main image:',['class'=>'col-xs-2 control-label']) !!}
    	<div class="col-xs-offset-2 col-xs-10" style="margin-bottom: 15px;">
			{!! Html::image('assets/img/products/'.$data['image_main'],'',['class'=>'img-responsive','width'=>'100px']) !!}
			{!! Form::hidden('old_image_main', $data['image_main']) !!}
    	</div>
    </div>

   <div style="clear: both;"></div>
   <div class="form-group">
	     {!! Form::label('image_main', 'Main image:',['class' => 'col-xs-2 control-label']) !!}
	     <div class="col-xs-8" style="margin-bottom: 15px;">
		 	{!! Form::file('image_main', ['class' => 'filestyle','data-Text' => 'Choose main image','data-btnClass'=>"btn-primary",'data-placeholder' => "File not exists"]) !!}
		 </div>
    </div>


	
	<!-- Large images -->

	<div style="clear: both;"></div>
	<div class="form-group">
    	{!! Form::label('old_image_1', 'Image 1:',['class'=>'col-xs-2 control-label']) !!}
    	<div class="col-xs-offset-2 col-xs-10" style="margin-bottom: 15px;">
			{!! Html::image('assets/img/products/'.$data['image_1'],'',['class'=>'img-responsive','width'=>'100px']) !!}
			{!! Form::hidden('old_image_1', $data['image_1']) !!}
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
    	{!! Form::label('old_image_2', 'Image 2:',['class'=>'col-xs-2 control-label']) !!}
    	<div class="col-xs-offset-2 col-xs-10" style="margin-bottom: 15px;">
			{!! Html::image('assets/img/products/'.$data['image_2'],'',['class'=>'img-responsive','width'=>'100px']) !!}
			{!! Form::hidden('old_image_2', $data['image_2']) !!}
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
    	{!! Form::label('old_image_3', 'Image 3:',['class'=>'col-xs-2 control-label']) !!}
    	<div class="col-xs-offset-2 col-xs-10" style="margin-bottom: 15px;">
			{!! Html::image('assets/img/products/'.$data['image_3'],'',['class'=>'img-responsive','width'=>'100px']) !!}
			{!! Form::hidden('old_image_3', $data['image_3']) !!}
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
    	{!! Form::label('old_image_4', 'Image 4:',['class'=>'col-xs-2 control-label']) !!}
    	<div class="col-xs-offset-2 col-xs-10" style="margin-bottom: 15px;">
			{!! Html::image('assets/img/products/'.$data['image_4'],'',['class'=>'img-responsive','width'=>'100px']) !!}
			{!! Form::hidden('old_image_4', $data['image_4']) !!}
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