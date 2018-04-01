<div style="margin:50px 50px 0px 50px;">   

@if($faqs)
 
	<table class="table table-hover table-striped">
	    <thead>
	    	<tr style="background-color: #f3f3bb">    
	                <td style="font-weight: 600; text-align: center;">Id</td>
	                <td style="font-weight: 600; text-align: center;">Question</td>
	                <td style="font-weight: 600; text-align: center;">Answer</td>
	                <td style="font-weight: 600; text-align: center;">Icon</td>
	                <td style="font-weight: 600; text-align: center;">Created</td>
	                <td style="font-weight: 600; text-align: center;">Delete</td>
	        </tr>
	    </thead>		  
	

     <tbody>
		@foreach($faqs as $k => $faq)
            
            <tr style="background-color: #f3f3bb">
                <td style="font-weight: 600; text-align: center; vertical-align: middle;">{{ $faq->id }}</td>
                <td style="text-align: center; vertical-align: middle;">{!! Html::link(route('faqsEdit',['faq'=>$faq->id]),$faq->question,['alt'=>$faq->question]) !!}</td>
				<td style="max-width: 150px;text-align: center;word-wrap:break-word;">{!! $faq->answer !!}</td>
				<td style="text-align: center; vertical-align: middle;">{!! Html::image('assets/img/'.$faq->icon,'',['class'=>'img-circle img-responsive','width'=>'90px']) !!}</td>
                <td style="text-align: center; vertical-align: middle;">{{ $faq->created_at }}</td>
                
                <td style="text-align: center; vertical-align: middle;">
                    {!! Form::open(['url'=>route('faqsEdit',['faq'=>$faq->id]), 'class'=>'form-horizontal','method' => 'POST']) !!}

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
{!! Html::link(route('faqsAdd'),'New faq') !!}
</div> 

</div>