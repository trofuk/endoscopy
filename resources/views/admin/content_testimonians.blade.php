<div style="margin:50px 50px 0px 50px;">   

@if($testimonians)
 
	<table class="table table-hover table-striped">
	    <thead>
	    	<tr style="background-color: #f3f3bb">    
	                <td style="font-weight: 600; text-align: center;">Id</td>
	                <td style="font-weight: 600; text-align: center;">Name</td>
	                <td style="font-weight: 600; text-align: center;">Position</td>
	                <td style="font-weight: 600; text-align: center;">Images</td>
	                <td style="font-weight: 600; text-align: center;">Text</td>
	                <td style="font-weight: 600; text-align: center;">Created</td>
	                <td style="font-weight: 600; text-align: center;">Delete</td>
	        </tr>
	    </thead>		  
	

     <tbody>
		@foreach($testimonians as $k => $testimonian)
            
            <tr style="background-color: #f3f3bb">
                <td style="font-weight: 600; text-align: center; ">{{ $testimonian->id }}</td>
                <td style="text-align: center; ">{!! Html::link(route('testimoniansEdit',['testimonian'=>$testimonian->id]),$testimonian->name,['alt'=>$testimonian->name]) !!}</td>
				<td style="text-align: center; ">{{ $testimonian->position }}</td>                
                <td style="text-align: center; ">{!! Html::image('assets/img/'.$testimonian->images,'',['class'=>'img-circle img-responsive','width'=>'100px']) !!}</td>
				<td style="max-width: 150px;text-align: center;word-wrap:break-word;">{{ $testimonian->text }}</td>
                <td style="text-align: center; ">{{ $testimonian->created_at }}</td>
                <td style="text-align: center; ">
                    {!! Form::open(['url'=>route('testimoniansEdit',['testimonian'=>$testimonian->id]), 'class'=>'form-horizontal','method' => 'POST']) !!}

                        {{ method_field('DELETE') }}
                        {!! Form::button('Delete',['class'=>'btn btn-danger','type'=>'submit']) !!}
                        
                    {!! Form::close() !!}
                </td>
            </tr>
		@endforeach
     </tbody>
	</table>

@endif 
<div style="padding-bottom: 20px;" >
	{!! Html::link(route('testimoniansAdd'),'New testimonian') !!}
</div>

   
</div>