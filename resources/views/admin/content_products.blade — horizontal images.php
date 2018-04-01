<div style="margin:50px 50px 0px 50px;">   

@if($products)
 
	<table class="table table-hover table-striped">
	    <thead>
	    	<tr style="background-color: #f3f3bb">    
	                <td style="font-weight: 600; text-align: center;">Id</td>
	                <td style="font-weight: 600; text-align: center;">Name</td>
	                <td style="font-weight: 600; text-align: center;">Type</td>
	                <td style="font-weight: 600; text-align: center;">Model</td>
	                <td style="font-weight: 600; text-align: center;">Description</td>
					<td style="font-weight: 600; text-align: center;">Image Main</td>
					<td style="font-weight: 600; text-align: center;">Image 1</td>
					<td style="font-weight: 600; text-align: center;">Image 2</td>
					<td style="font-weight: 600; text-align: center;">Image 3</td>
					<td style="font-weight: 600; text-align: center;">Image 4</td>
	                <td style="font-weight: 600; text-align: center;">Created</td>
	                <td style="font-weight: 600; text-align: center;">Delete</td>
	        </tr>
	    </thead>		  
	

     <tbody>
		@foreach($products as $k => $product)
            
            <tr style="background-color: #f3f3bb">
                <td style="font-weight: 600; text-align: center; ">{{ $product->id }}</td>
                <td style="text-align: center; ">{!! Html::link(route('productsEdit',['product'=>$product->id]),$product->name,['alt'=>$product->name]) !!}</td>

				<td style="text-align: center; ">{{ $product->type }}</td>
				<td style="text-align: center; ">{{ $product->model }}</td>   
				<td style="max-width: 150px;text-align: center;word-wrap:break-word;">{{ $product->description }}</td>
                <td style="text-align: center;"><h5>Main</h5>{!! Html::image('assets/img/products/'.$product->image_main,'',['class'=>'img-responsive','width'=>'100px']) !!}</td>
				<td style="text-align: center; "><h5>Preview 1</h5>{!! Html::image('assets/img/products/'.$product->image_1_sm,'',['class'=>'img-responsive','width'=>'100px']) !!}
				<div style="vertical-align: bottom;"><h5>Detail 1</h5>{!! Html::image('assets/img/products/'.$product->image_1,'',['class'=>'img-responsive','width'=>'100px']) !!}</div>
				</td>
                <td style="text-align: center; "><h5>Preview 2</h5>{!! Html::image('assets/img/products/'.$product->image_2_sm,'',['class'=>'img-responsive','width'=>'100px']) !!}</td>
				<td style="text-align: center; "><h5>Preview 3</h5>{!! Html::image('assets/img/products/'.$product->image_3_sm,'',['class'=>'img-responsive','width'=>'100px']) !!}</td>
				<td style="text-align: center; "><h5>Preview 4</h5>{!! Html::image('assets/img/products/'.$product->image_4_sm,'',['class'=>'img-responsive','width'=>'100px']) !!}</td>

                <td style="text-align: center; ">{{ $product->created_at }}</td>
                <td style="text-align: center; ">
                    {!! Form::open(['url'=>route('productsEdit',['product'=>$product->id]), 'class'=>'form-horizontal','method' => 'POST']) !!}

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
	{!! Html::link(route('productsAdd'),'New product') !!}
</div>

   
</div>