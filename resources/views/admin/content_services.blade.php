<div style="margin:100px 50px 0px 50px;">   

@if($services)
 
	<table class="table table-hover table-striped">
	    <thead>
	    	<tr style="background-color: #f3f3bb">    
	                <td style="font-weight: 600; text-align: center;">Id</td>
	                <td style="font-weight: 600; text-align: center;">Name</td>
	                <td style="font-weight: 600; text-align: center;">Text</td>
	                <td style="font-weight: 600; text-align: center;">Icon</td>
	                <td style="font-weight: 600; text-align: center;">Created</td>
	                <td style="font-weight: 600; text-align: center;">Delete</td>
	        </tr>
	    </thead>		  
	

     <tbody>
		@foreach($services as $k => $service)
            
            <tr style="background-color: #f3f3bb">
                <td style="font-weight: 600; text-align: center; vertical-align: middle;">{{ $service->id }}</td>
                <td style="text-align: center; vertical-align: middle;">{!! Html::link(route('servicesEdit',['service'=>$service->id]),$service->name,['alt'=>$service->name]) !!}</td>
				<td style="max-width: 150px;text-align: center;word-wrap:break-word;">{!! $service->text !!}</td>
				<td style="text-align: center; vertical-align: middle;">{!! Html::image('assets/img/'.$service->icon,'',['class'=>'img-circle','width'=>'90px']) !!}</td>
                <td style="text-align: center; vertical-align: middle;">{{ $service->created_at }}</td>
                
                <td style="text-align: center; vertical-align: middle;">
                    {!! Form::open(['url'=>route('servicesEdit',['service'=>$service->id]), 'class'=>'form-horizontal','method' => 'POST']) !!}

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
{!! Html::link(route('servicesAdd'),'New service') !!}
</div> 

</div>