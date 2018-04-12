<div style="margin:100px 50px 0px 50px;">   

@if($facts)
 
	<table class="table table-hover table-striped">
	    <thead>
	    	<tr style="background-color: #f3f3bb">    
	                <td style="font-weight: 600; text-align: center;">Id</td>
	                <td style="font-weight: 600; text-align: center;">Name</td>
	                <td style="font-weight: 600; text-align: center;">Text</td>
	                <td style="font-weight: 600; text-align: center;">Counter</td>
	                <td style="font-weight: 600; text-align: center;">Icon</td>
	                <td style="font-weight: 600; text-align: center;">Created</td>
	                <td style="font-weight: 600; text-align: center;">Delete</td>
	        </tr>
	    </thead>		  
	

     <tbody>
		@foreach($facts as $k => $fact)
            
            <tr style="background-color: #f3f3bb">
                <td style="font-weight: 600; text-align: center; vertical-align: middle;">{{ $fact->id }}</td>
                <td style="text-align: center; vertical-align: middle;">{!! Html::link(route('factsEdit',['fact'=>$fact->id]),$fact->name,['alt'=>$fact->name]) !!}</td>
				<td style="max-width: 150px; text-align: center; vertical-align: middle; word-wrap:break-word;">{!! $fact->text !!}</td>
				<td style="max-width: 150px; text-align: center; vertical-align: middle;">{!! $fact->counter !!}</td>
				<td style="text-align: center; vertical-align: middle; background-color: grey;">{!! Html::image('assets/img/'.$fact->icon,'',['width'=>'90px']) !!}</td>
                <td style="text-align: center; vertical-align: middle;">{{ $fact->created_at }}</td>
                
                <td style="text-align: center; vertical-align: middle;">
                    {!! Form::open(['url'=>route('factsEdit',['fact'=>$fact->id]), 'class'=>'form-horizontal','method' => 'POST']) !!}

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
{!! Html::link(route('factsAdd'),'New fact') !!}
</div> 

</div>