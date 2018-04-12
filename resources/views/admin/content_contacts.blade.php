<div style="margin:100px 50px 0px 50px;">   

@if($contacts)
 
	<table class="table table-hover table-striped">
	    <thead>
	    	<tr style="background-color: #f3f3bb">    
	                <td style="font-weight: 600; text-align: center;">Id</td>
	                <td style="font-weight: 600; text-align: center;">Address</td>
	                <td style="font-weight: 600; text-align: center;">Email</td>
	                <td style="font-weight: 600; text-align: center;">Phone</td>
	                <td style="font-weight: 600; text-align: center;">Created</td>
	                
	        </tr>
	    </thead>		  
	

     <tbody>
		@foreach($contacts as $k => $contact)
            
            <tr style="background-color: #f3f3bb">
                <td style="font-weight: 600; text-align: center; vertical-align: middle;">
					{!! Html::link(route('contactsEdit',['contact'=>$contact->id]),$contact->id,['alt'=>$contact->id]) !!}
                </td>
                <td style="text-align: center; vertical-align: middle;">{!! $contact->address !!}</td>
				<td style="max-width: 150px;text-align: center;word-wrap:break-word;">{!! $contact->email !!}</td>
				<td style="max-width: 150px;text-align: center;word-wrap:break-word;">{!! $contact->phone !!}</td>
                <td style="text-align: center; vertical-align: middle;">{{ $contact->created_at }}</td>
             
	        </tr>
		@endforeach
     </tbody>
	</table>

@endif 


</div>