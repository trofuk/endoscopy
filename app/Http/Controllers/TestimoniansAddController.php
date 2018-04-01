<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Validator;

use App\Testimonian;

use DB;

class TestimoniansAddController extends Controller
{
    //
    public function execute(Request $request)  {

    	if($request->isMethod('post'))  {

    		$input = $request->except('_token');

            
    		$messages = [

    			'required' => 'Поле :attribute обовязкове для заповнення',	
    			'unique' => 'Поле :attribute має бути унікальним'
    		];

    		$validator = Validator::make($input, [

        			'name' => 'required|max:255',
        			'images' => 'required',
        			'text' => 'required',		

        		], $messages);
            


            if($validator->fails()) {
    			return redirect()->route('testimoniansAdd')->withErrors($validator)->withInput();
    		}

            
            
            //geting id of current adding testimonian
            $id = DB::connection('mysql2')->table('INFORMATION_SCHEMA.TABLES')->select('AUTO_INCREMENT')->where('TABLE_SCHEMA','=','endoscope')->where('TABLE_NAME','=','testimonians')->get();

            $id = reset($id[0]);
                    
            
            if($request->hasFile('images'))  {
                $file_1 = $request->file('images');
                $input['images'] = 'people_'.$id.'.jpg';

                // $input['image_1'] = $file_1->getClientOriginalName();
                $file_1->move(public_path().'/assets/img', $input['images']);

            }
          
    		              

    		$testimonian = new Testimonian();

    		$testimonian->fill($input);

    		if($testimonian->save())  {
    			return redirect('admin')->with('status', 'Testimonian has been successfully added');
    		}
    		

    	}
    	
        if(view()->exists('admin.testimonians_add'))  {

    		$data =[

    					'title' => 'New testimonian',
                        

    				];

    		return view('admin.testimonians_add', $data);

    	}

    	abort(404);

    }
}
