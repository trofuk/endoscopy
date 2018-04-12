<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Product;

use DB;

use Validator;

class ProductsEditController extends Controller
{
    //
   public function execute(Product $product, Request $request)  {

   		// $page = Page::find($id);

   		if($request->isMethod('delete'))  {
   			

   				$file_1 = public_path().'/assets/img/products/'.$product->image_main;
   				if ((file_exists($file_1))&&(is_file($file_1)))
          {  
   					unlink($file_1);
   				}
   				$file_11 = public_path().'/assets/img/products/'.$product->image_1;
   				if ((file_exists($file_11))&&(is_file($file_11)))            
   				{
   					unlink($file_11);
   				}
   				$file_12 = public_path().'/assets/img/products/'.$product->image_2;
   				if ((file_exists($file_12))&&(is_file($file_12))) 
   				{
   					unlink($file_12);
   				}
   				$file_13 = public_path().'/assets/img/products/'.$product->image_3;
   				if ((file_exists($file_13))&&(is_file($file_13))) 
          {
   					unlink($file_13);
          }
   				$file_14 = public_path().'/assets/img/products/'.$product->image_4;
   				if ((file_exists($file_14))&&(is_file($file_14))) 
          {  
   					unlink($file_14);
  			  } 

   			$product->delete();

   			return redirect('admin/products')->with('status', 'Product has been successfully deleted');

   		}


   		if($request->isMethod('post'))  {

   			$input = $request->except('_token');

   			$messages = [

    			'required' => 'Поле :attribute обовязкове для заповнення',	
    			'unique' => 'Поле :attribute має бути унікальним'
    		];
    		
   			$validator = Validator::make($input, [

   				'name' => 'required|max:100',
          // 'type' => 'required|max:100',
          // 'model' => 'required|max:100',
          'description' => 'required|max:1000', 
    			'image_main' => 'required_without:old_image_main',
    			// 'image_1' => 'required_without:old_image_1',
       //    'image_2' => 'required_without:old_image_2',
       //    'image_3' => 'required_without:old_image_3',
       //    'image_4' => 'required_without:old_image_4',	

   			], $messages);
   			
   			
   			if($validator->fails())  {
   				return redirect()->route('productsEdit', ['product' => $input['id']])->withErrors($validator);
    		}

    		$id = $input['id'];

    		
    		
            

          if($request->hasFile('image_main'))  {
    			$file_1 = $request->file('image_main');
    			$input['image_main'] = 'product_'.$id.'_main.jpg';
    			$file_1->move(public_path().'/assets/img/products', $input['image_main']);

    			// $input['image_1'] = $file_1->getClientOriginalName();
	    		}
	    		else  {
	    			$input['image_main'] = $input['old_image_main'];
	    		}

	    		unset($input['old_image_main']);


	    		if($request->hasFile('image_1'))  {
    			$file_11 = $request->file('image_1');
    			$input['image_1'] = 'product_'.$id.'_detail_1.jpg';
    			$file_11->move(public_path().'/assets/img/products', $input['image_1']);

    			// $input['image_1'] = $file_1->getClientOriginalName();
	    		}
	    		else  {
	    			$input['image_1'] = $input['old_image_1'];
	    		}

	    		unset($input['old_image_1']);

	    		
	    		if($request->hasFile('image_2'))  {
    			$file_12 = $request->file('image_2');
    			$input['image_2'] = 'product_'.$id.'_detail_2.jpg';
    			$file_12->move(public_path().'/assets/img/products', $input['image_2']);

    			// $input['image_1'] = $file_1->getClientOriginalName();
	    		}
	    		else  {
	    			$input['image_2'] = $input['old_image_2'];
	    		}

	    		unset($input['old_image_2']);

	    		
	    		if($request->hasFile('image_3'))  {
    			$file_13 = $request->file('image_3');
    			$input['image_3'] = 'product_'.$id.'_detail_3.jpg';
    			$file_13->move(public_path().'/assets/img/products', $input['image_3']);

    			// $input['image_1'] = $file_1->getClientOriginalName();
	    		}
	    		else  {
	    			$input['image_3'] = $input['old_image_3'];
	    		}

	    		unset($input['old_image_3']);


	    		if($request->hasFile('image_4'))  {
    			$file_14 = $request->file('image_4');
    			$input['image_4'] = 'product_'.$id.'_detail_4.jpg';
    			$file_14->move(public_path().'/assets/img/products', $input['image_4']);

    			// $input['image_1'] = $file_1->getClientOriginalName();
	    		}
	    		else  {
	    			$input['image_4'] = $input['old_image_4'];
	    		}

	    		unset($input['old_image_4']);



	    		           

    		$product->fill($input);

    		if($product->update())  {
    			return redirect('admin/products')->with('status', 'Product has been successfully updated');
    		}


   		}
   		
   		$old = $product->toArray();

   		if(view()->exists('admin.products_edit')) {

   			$data = [
   						'title' => 'Editing product - '.$old['name'],
   						'data' => $old,
   						
   					];
   			

			return view('admin.products_edit', $data);   		

   		}	

   }
}
