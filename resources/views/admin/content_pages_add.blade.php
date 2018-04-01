<div style="margin:100px 50px 0px 50px;">  
<div class="wrapper container-fluid">

	{!! Form::open(['url' => route('pagesAdd'),'class' => 'form-horizontal','method' => 'POST','enctype' => 'multipart/form-data']) !!}
 	
	
	<div class="form-group">
		{!! Form::label('name', 'Name:', ['class' => 'col-xs-2 control-label']) !!}
		<div class="col-xs-8" style="margin-bottom: 15px;">
			{!! Form::text('name', old('name'), ['class' => 'form-control','placeholder' => 'Input page name']) !!}
		</div>
	
	</div>

	<div style="clear: both;"></div>
	<div class="form-group">
	     {!! Form::label('alias', 'Alias:', ['class' => 'col-xs-2 control-label']) !!}
	     <div class="col-xs-8" style="margin-bottom: 15px;">
		 	{!! Form::text('alias', old('alias'), ['class' => 'form-control','placeholder' => 'Input page alias']) !!}
		 </div>
    </div>
    @if($count%2 == 0)
    <div style="clear: both;"></div>
    <div class="form-group">
	     {!! Form::label('text_1', 'Text for slide 1:',['class' => 'col-xs-2 control-label']) !!}
	     <div class="col-xs-8" style="margin-bottom: 15px;">
		 	{!! Form::textarea('text_1', old('text_1'), ['class' => 'form-control','placeholder' => 'Input page text 1']) !!}
		 </div>
    </div>
	
	
	<div style="clear: both;"></div>
    <div class="form-group">
	     {!! Form::label('text_2', 'Text for slide 2:',['class' => 'col-xs-2 control-label']) !!}
	     <div class="col-xs-8" style="margin-bottom: 15px;">
		 	{!! Form::textarea('text_2', old('text_2'), ['class' => 'form-control','placeholder' => 'Input page text 2']) !!}
		 </div>
    </div>

    <div style="clear: both;"></div>
    <div class="form-group">
	     {!! Form::label('text_3', 'Text for slide 3:',['class' => 'col-xs-2 control-label']) !!}
	     <div class="col-xs-8" style="margin-bottom: 15px;">
		 	{!! Form::textarea('text_3', old('text_3'), ['class' => 'form-control','placeholder' => 'Input page text 3']) !!}
		 </div>
    </div>
	@endif

	@if($count%2 == 1)
		
	<div style="clear: both;"></div>
    <div class="form-group">
	     {!! Form::label('text_1', 'Short text:',['class' => 'col-xs-2 control-label']) !!}
	     <div class="col-xs-8" style="margin-bottom: 15px;">
		 	{!! Form::textarea('text_1', old('text_1'), ['class' => 'form-control','placeholder' => 'Input page text 1']) !!}
		 </div>
    </div>
	
	
	<div style="clear: both;"></div>
    <div class="form-group">
	     {!! Form::label('text_2', 'Column 1 (use dots for separating!!!):',['class' => 'col-xs-2 control-label']) !!}
	     <div class="col-xs-8" style="margin-bottom: 15px;">
		 	{!! Form::textarea('text_2', old('text_2'), ['class' => 'form-control','placeholder' => 'Input page text 2']) !!}
		 </div>
    </div>

    <div style="clear: both;"></div>
    <div class="form-group">
	     {!! Form::label('text_3', 'Column 2 (use dots for separating!!!):',['class' => 'col-xs-2 control-label']) !!}
	     <div class="col-xs-8" style="margin-bottom: 15px;">
		 	{!! Form::textarea('text_3', old('text_3'), ['class' => 'form-control','placeholder' => 'Input page text 3']) !!}
		 </div>
    </div>
	<div style="clear: both;"></div>
    <div class="form-group">
	     {!! Form::label('text_4', 'Long text:',['class' => 'col-xs-2 control-label']) !!}
	     <div class="col-xs-8" style="margin-bottom: 15px;">
		 	{!! Form::textarea('text_4', old('text_4'), ['class' => 'form-control','placeholder' => 'Input page text 4']) !!}
		 </div>
    </div>

    @endif

   <div style="clear: both;"></div>
   <div class="form-group">
	     {!! Form::label('image_1', 'Image 1:',['class' => 'col-xs-2 control-label']) !!}
	     <div class="col-xs-8" style="margin-bottom: 15px;">
		 	{!! Form::file('image_1', ['class' => 'filestyle','data-Text' => 'Choose image','data-btnClass'=>"btn-primary",'data-placeholder' => "File not exists"]) !!}
		 </div>
    </div>

    @if($count%2 == 0)
    <div style="clear: both;"></div>
    <div class="form-group">
	     {!! Form::label('image_2', 'Image 2:',['class' => 'col-xs-2 control-label']) !!}
	     <div class="col-xs-8" style="margin-bottom: 15px;">
		 	{!! Form::file('image_2', ['class' => 'filestyle','data-Text'=>'Choose image','data-btnClass' => "btn-primary",'data-placeholder' => "File not exists"]) !!}
		 </div>
    </div>

    <div style="clear: both;"></div>
    <div class="form-group">
	     {!! Form::label('image_3', 'Image 3:',['class' => 'col-xs-2 control-label']) !!}
	     <div class="col-xs-8" style="margin-bottom: 15px;">
		 	{!! Form::file('image_3', ['class' => 'filestyle','data-placeholder' => "File not exists",'data-Text'=>'Choose image', 'data-btnClass' => "btn-primary"]) !!}
		 </div>
    </div>
    @endif
    
      <div style="clear: both;"></div>
      <div class="form-group">
	    <div class="col-xs-offset-2 col-xs-10" style="margin-bottom: 15px;">
	      {!! Form::button('Save', ['class' => 'btn btn-primary','type' => 'submit']) !!}
	    </div>
	  </div>
	
	
	
	{!! Form::close() !!}
	
<!-- 	@if($count%2 == 0)
		<script>
			CKEDITOR.replace('editor_2');
			CKEDITOR.replace('editor_3');
		</script>
	@endif
		<script>
			CKEDITOR.replace('editor_1');
		</script> -->
	
</div>
</div>