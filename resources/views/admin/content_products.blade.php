<div style="margin:100px 50px 0px 50px;">   

@if($products)
 
	<table class="table table-hover table-striped">
	    <thead>
	    	<tr style="background-color: #f3f3bb">    
	                <td style="font-weight: 600; text-align: center;">Id</td>
	                <td style="font-weight: 600; text-align: center;">Name</td>
	                <td style="font-weight: 600; text-align: center;">Price</td>
	                <td style="font-weight: 600; text-align: center;">Model</td>
	               
	                <td style="font-weight: 600; text-align: center;">Description</td>
					<td style="font-weight: 600; text-align: center;">Image Main</td>
					<td style="font-weight: 600; text-align: center;">Detail</td>
					<td style="font-weight: 600; text-align: center;">Created</td>
	                <td style="font-weight: 600; text-align: center;">Delete</td>
	        </tr>
	    </thead>		  
	

     <tbody>
		@foreach($products as $k => $product)
            
            <tr style="background-color: #f3f3bb">
                <td rowspan="4" style="font-weight: 600; text-align: center; ">{{ $product->id }}</td>
                <td rowspan="4" style="text-align: center; max-width: 50px">{!! Html::link(route('productsEdit',['product'=>$product->id]),$product->name,['alt'=>$product->name]) !!}</td>

				<td rowspan="4" style="text-align: center; word-wrap:break-word; max-width: 50px">{{ $product->type }}</td>
				<td rowspan="4" style="text-align: center; word-wrap:break-word; max-width: 50px">{{ $product->model }}</td>

				<td rowspan="4" style="max-width: 150px;text-align: center;word-wrap:break-word;">{!! $product->description !!}</td>
                <td rowspan="4" style="text-align: center;"><h5>Main</h5>{!! Html::image('assets/img/products/'.$product->image_main,'',['width'=>'100px']) !!}</td>

				
				<td style="text-align: center; ">
				<h5>Detail 1</h5>{!! Html::image('assets/img/products/'.$product->image_1,'',['width'=>'200px']) !!}</div></td>





                

                <td rowspan="4" style="text-align: center; max-width: 50px">{{ $product->created_at }}</td>
                <td rowspan="4" style="text-align: center; ">
                    {!! Form::open(['url'=>route('productsEdit',['product'=>$product->id]), 'class'=>'form-horizontal','method' => 'POST']) !!}

                        {{ method_field('DELETE') }}
                        {!! Form::button('Delete',['class'=>'btn btn-danger','type'=>'submit']) !!}
                        
                    {!! Form::close() !!}
                </td>
            </tr>
			<tr style="background-color: #f3f3bb">
				
				<td style="text-align: center; ">
				@if($product->image_2)	
				<h5>Detail 2</h5>{!! Html::image('assets/img/products/'.$product->image_2,'',['width'=>'200px']) !!}</div></td>
				@endif
			</tr>
			
			<tr style="background-color: #f3f3bb">
				

				<td style="text-align: center; ">
				@if($product->image_3)	
				<h5>Detail 3</h5>{!! Html::image('assets/img/products/'.$product->image_3,'',['width'=>'200px']) !!}</div></td>
				@endif
			</tr>	
			<tr style="background-color: #f3f3bb">	
								
				
				<td style="text-align: center; ">
				@if($product->image_4)	
				<h5>Detail 4</h5>{!! Html::image('assets/img/products/'.$product->image_4,'',['width'=>'200px']) !!}</div>
				</td>
				@endif
			</tr>

		@endforeach
     </tbody>
	</table>

@endif 
<div style="padding-bottom: 20px;" >
	{!! Html::link(route('productsAdd'),'New product') !!}
</div>

   
</div>