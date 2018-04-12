<div style="margin:100px 50px 0px 50px;">   

@if($path)
 
	<table class="table table-hover table-striped">
	    <thead>
	    	<tr style="background-color: #f3f3bb">    
	                
	                <td style="font-weight: 600; text-align: center;">Name</td>
	                <td style="font-weight: 600; text-align: center;">Size</td>
	                <td style="font-weight: 600; text-align: center;">Uploaded</td>
	        </tr>
	    </thead>		  
	

     <tbody>
		
            
            <tr style="background-color: #f3f3bb">
                <td style="text-align: center; vertical-align: middle;">{!! Html::link(route('priceEdit', 'price'),$name,['alt'=>$name]) !!}</td>
                <td style="text-align: center; vertical-align: middle;">{{ $size }} Bytes</td>
                <td style="text-align: center; vertical-align: middle;">{{ $time }}</td>
                

            </tr>
		
     </tbody>
	</table>

@endif 

</div>