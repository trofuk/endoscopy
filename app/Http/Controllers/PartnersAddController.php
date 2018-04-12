<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Validator;

use App\Partner;

use DB;

class PartnersAddController extends Controller
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

        			'name' => 'required|unique:partners|max:200',
        			'logo' => 'required'	

        		], $messages);
            


            if($validator->fails()) {
    			return redirect()->route('partnersAdd')->withErrors($validator)->withInput();
    		}

            
            
            //geting id of current adding partner
            $id = DB::connection('mysql2')->table('INFORMATION_SCHEMA.TABLES')->select('AUTO_INCREMENT')->where('TABLE_SCHEMA','=','endoscope')->where('TABLE_NAME','=','partners')->get();

            $id = reset($id[0]);
                    
            
            if($request->hasFile('logo'))  {
                $file_1 = $request->file('logo');
                $input['logo'] = 'logo_'.$id.'.png';

                // $input['image_1'] = $file_1->getClientOriginalName();
                $file_1->move(public_path().'/assets/img', $input['logo']);

            }
          
    		              

    		$partner = new Partner();

    		$partner->fill($input);

    		if($partner->save())  {
    			return redirect('admin/partners')->with('status', 'Partner has been successfully added');
    		}
    		

    	}
    	
        if(view()->exists('admin.partners_add'))  {

    		$data =[

    					'title' => 'New partner',
                        

    				];

    		return view('admin.partners_add', $data);

    	}

    	abort(404);

    }
}

