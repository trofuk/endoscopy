<div style="margin:50px 50px 0px 50px;">   

@if($partners)
 
	<table class="table table-hover table-striped">
	    <thead>
	    	<tr style="background-color: #f3f3bb">    
	                <td style="font-weight: 600; text-align: center;">Id</td>
	                <td style="font-weight: 600; text-align: center;">Name</td>
	                <td style="font-weight: 600; text-align: center;">Logo</td>
	                <td style="font-weight: 600; text-align: center;">Created</td>
	                <td style="font-weight: 600; text-align: center;">Delete</td>
	        </tr>
	    </thead>		  
	

     <tbody>
		@foreach($partners as $k => $partner)
            
            <tr style="background-color: #f3f3bb">
                <td style="font-weight: 600; text-align: center; vertical-align: middle;">{{ $partner->id }}</td>
                <td style="text-align: center; vertical-align: middle;">{!! Html::link(route('partnersEdit',['partner'=>$partner->id]),$partner->name,['alt'=>$partner->name]) !!}</td>
                <td style="text-align: center; vertical-align: middle;">{!! Html::image('assets/img/'.$partner->logo,'',['class'=>'img-responsive','width'=>'100px']) !!}</td>
                <td style="text-align: center; vertical-align: middle;">{{ $partner->created_at }}</td>
                
                <td style="text-align: center; vertical-align: middle;">
                    {!! Form::open(['url'=>route('partnersEdit',['partner'=>$partner->id]), 'class'=>'form-horizontal','method' => 'POST']) !!}

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
{!! Html::link(route('partnersAdd'),'New partner') !!}
</div> 

</div>

