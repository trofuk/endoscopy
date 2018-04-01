<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Validator;

use App\Product;

use DB;

class ProductsAddController extends Controller
{
    //
    public function execute(Request $request)  {

    	if($request->isMethod('post'))  {

    		$input = $request->except('_token');
    		// dd($input);
    		$value = $input['type'];	
    		// $input['filter'] = $type;
    		$key = 'filter';
    		$input[$key] = $value;
    		// dd($input);

    		$messages = [

    			'required' => 'Поле :attribute обовязкове для заповнення',	
    			'unique' => 'Поле :attribute має бути унікальним'
    		];

    		$validator = Validator::make($input, [

        			'name' => 'required|max:100',
        			// 'type' => 'required|max:100',
        			// 'model' => 'required|max:100',
        			'description' => 'required|max:1000',
        			'image_main' => 'required',
        			// 'image_1' => 'required',
        			// 'image_2' => 'required',
        			// 'image_3' => 'required',
        			// 'image_4' => 'required',
        					

        		], $messages);
            


            if($validator->fails()) {
    			return redirect()->route('productsAdd')->withErrors($validator)->withInput();
    		}

            
            
            //geting id of current adding product
            $id = DB::connection('mysql2')->table('INFORMATION_SCHEMA.TABLES')->select('AUTO_INCREMENT')->where('TABLE_SCHEMA','=','endoscope')->where('TABLE_NAME','=','products')->get();

            $id = reset($id[0]);
                    
            
            if($request->hasFile('image_main'))  {
                $file_1 = $request->file('image_main');
                $input['image_main'] = 'product_'.$id.'_main.jpg';

                // $input['image_1'] = $file_1->getClientOriginalName();
                $file_1->move(public_path().'/assets/img/products', $input['image_main']);

            }

            if($request->hasFile('image_1'))  {
                $file_1 = $request->file('image_1');
                $input['image_1'] = 'product_'.$id.'_detail_1.jpg';

                // $input['image_1'] = $file_1->getClientOriginalName();
                $file_1->move(public_path().'/assets/img/products', $input['image_1']);

            }

            if($request->hasFile('image_2'))  {
                $file_1 = $request->file('image_2');
                $input['image_2'] = 'product_'.$id.'_detail_2.jpg';

                // $input['image_1'] = $file_1->getClientOriginalName();
                $file_1->move(public_path().'/assets/img/products', $input['image_2']);

            }

            if($request->hasFile('image_3'))  {
                $file_1 = $request->file('image_3');
                $input['image_3'] = 'product_'.$id.'_detail_3.jpg';

                // $input['image_1'] = $file_1->getClientOriginalName();
                $file_1->move(public_path().'/assets/img/products', $input['image_3']);

            }

            if($request->hasFile('image_4'))  {
                $file_1 = $request->file('image_4');
                $input['image_4'] = 'product_'.$id.'_detail_4.jpg';

                // $input['image_1'] = $file_1->getClientOriginalName();
                $file_1->move(public_path().'/assets/img/products', $input['image_4']);

            }
          	
          

    		$product = new Product();
    		// dd($input);
    		$product->fill($input);

    		if($product->save())  {
    			return redirect('admin')->with('status', 'Product has been successfully added');
    		}
    		

    	}
    	
        if(view()->exists('admin.products_add'))  {

    		$data =[

    					'title' => 'New product',
                        

    				];

    		return view('admin.products_add', $data);

    	}

    	abort(404);

    }
}
