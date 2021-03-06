<div style="margin:100px 50px 0px 50px;">  
<div class="wrapper container-fluid">

	{!! Form::open(['url' => route('testimoniansEdit',array('testimonian'=>$data['id'])),'class'=>'form-horizontal','method'=>'POST','enctype'=>'multipart/form-data']) !!}
 	
	
	<div class="form-group">
		{!! Form::hidden('id', $data['id']) !!}
	     {!! Form::label('name', 'Name:',['class'=>'col-xs-2 control-label']) !!}
		<div class="col-xs-8" style="margin-bottom: 15px;">
			{!! Form::text('name', $data['name'], ['class' => 'form-control','placeholder'=>'Input person name']) !!}
		</div>
	</div>
	
	<div style="clear: both;"></div>
	<div class="form-group">
		 {!! Form::label('position', 'Position:',['class'=>'col-xs-2 control-label']) !!}
		<div class="col-xs-8" style="margin-bottom: 15px;">
			{!! Form::text('position', $data['position'], ['class' => 'form-control','placeholder'=>'Input person position']) !!}
		</div>
	</div>

   	<div style="clear: both;"></div>
	<div class="form-group">
    	{!! Form::label('old_images', 'Image:',['class'=>'col-xs-2 control-label']) !!}
    	<div class="col-xs-offset-2 col-xs-10" style="margin-bottom: 15px;">
			{!! Html::image('assets/img/'.$data['images'],'',['class'=>'img-responsive','width'=>'100px']) !!}
			{!! Form::hidden('old_images', $data['images']) !!}
    	</div>
    </div>

   <div style="clear: both;"></div>
   <div class="form-group">
	     {!! Form::label('images', 'Image:',['class' => 'col-xs-2 control-label']) !!}
	     <div class="col-xs-8" style="margin-bottom: 15px;">
		 	{!! Form::file('images', ['class' => 'filestyle','data-Text' => 'Choose image','data-btnClass'=>"btn-primary",'data-placeholder' => "File not exists"]) !!}
		 </div>
    </div>
    
    <div style="clear: both;"></div>
    <div class="form-group">
	     {!! Form::label('text', 'Text:',['class' => 'col-xs-2 control-label']) !!}
	     <div class="col-xs-8" style="margin-bottom: 15px;">
		 	{!! Form::textarea('text', $data['text'], ['class' => 'form-control','placeholder' => 'Input testimonian']) !!}
		 </div>
    </div>
    
     <div style="clear: both;"></div>
      <div class="form-group">
	    <div class="col-xs-offset-2 col-xs-10" style="margin-bottom: 15px;">
	      {!! Form::button('Save', ['class' => 'btn btn-primary','type' => 'submit']) !!}
	    </div>
	  </div>
	
	
	
	{!! Form::close() !!}
<!-- 
	<script>
		CKEDITOR.replace('editor');
	</script> -->

</div>
</div>