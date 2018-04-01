<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Validator;

use App\Service;

use DB;

class ServicesAddController extends Controller
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

        			'name' => 'required|max:100',
        			'text' => 'required',
        			'icon' => 'required'
        					

        		], $messages);
            


            if($validator->fails()) {
    			return redirect()->route('servicesAdd')->withErrors($validator)->withInput();
    		}

            
            
            //geting id of current adding testimonian
            $id = DB::connection('mysql2')->table('INFORMATION_SCHEMA.TABLES')->select('AUTO_INCREMENT')->where('TABLE_SCHEMA','=','endoscope')->where('TABLE_NAME','=','services')->get();

            $id = reset($id[0]);
                    
            
            if($request->hasFile('icon'))  {
                $file_1 = $request->file('icon');
                $input['icon'] = 'service_icon_'.$id.'.png';

                // $input['image_1'] = $file_1->getClientOriginalName();
                $file_1->move(public_path().'/assets/img', $input['icon']);

            }
          
    		              

    		$service = new Service();

    		$service->fill($input);

    		if($service->save())  {
    			return redirect('admin')->with('status', 'Service has been successfully added');
    		}
    		

    	}
    	
        if(view()->exists('admin.services_add'))  {

    		$data =[

    					'title' => 'New service',
                        

    				];

    		return view('admin.services_add', $data);

    	}

    	abort(404);

    }
}
