<div style="margin:100px 50px 0px 50px;">  
<div class="wrapper container-fluid">

	{!! Form::open(['url' => route('faqsEdit',array('faq'=>$data['id'])),'class'=>'form-horizontal','method'=>'POST','enctype'=>'multipart/form-data']) !!}
 	
	
	<div class="form-group">
		{!! Form::hidden('id', $data['id']) !!}
	     {!! Form::label('question', 'Question:',['class'=>'col-xs-2 control-label']) !!}
		<div class="col-xs-8" style="margin-bottom: 15px;">
			{!! Form::text('question', $data['question'], ['class' => 'form-control','placeholder'=>'Input question']) !!}
		</div>
	</div>
	
	<div style="clear: both;"></div>
    <div class="form-group">
	     {!! Form::label('answer', 'Answer:',['class' => 'col-xs-2 control-label']) !!}
	     <div class="col-xs-8" style="margin-bottom: 15px;">
		 	{!! Form::textarea('answer', $data['answer'], ['class' => 'form-control','placeholder' => 'Input answer']) !!}
		 </div>
    </div>
	

   	<div style="clear: both;"></div>
	<div class="form-group">
    	{!! Form::label('old_icon', 'Icon:',['class'=>'col-xs-2 control-label']) !!}
    	<div class="col-xs-offset-2 col-xs-10" style="margin-bottom: 15px;">
			{!! Html::image('assets/img/'.$data['icon'],'',['class'=>'img-responsive','width'=>'100px']) !!}
			{!! Form::hidden('old_icon', $data['icon']) !!}
    	</div>
    </div>

   <div style="clear: both;"></div>
   <div class="form-group">
	     {!! Form::label('icon', 'Icon:',['class' => 'col-xs-2 control-label']) !!}
	     <div class="col-xs-8" style="margin-bottom: 15px;">
		 	{!! Form::file('icon', ['class' => 'filestyle','data-Text' => 'Choose icon','data-btnClass'=>"btn-primary",'data-placeholder' => "File not exists"]) !!}
		 </div>
    </div>
    

    
     <div style="clear: both;"></div>
      <div class="form-group">
	    <div class="col-xs-offset-2 col-xs-10" style="margin-bottom: 15px;">
	      {!! Form::button('Save', ['class' => 'btn btn-primary','type' => 'submit']) !!}
	    </div>
	  </div>
	
	
	
	{!! Form::close() !!}

<!-- 	<script>
		CKEDITOR.replace('editor');
	</script> -->

</div>
</div>