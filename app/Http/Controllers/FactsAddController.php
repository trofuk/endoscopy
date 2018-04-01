<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Validator;

use App\Fact;

use DB;

class FactsAddController extends Controller
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
        			'counter' => 'required|max:65535|integer',
        			'icon' => 'required_without:old_icon',
        					

        		], $messages);
            


            if($validator->fails()) {
    			return redirect()->route('factsAdd')->withErrors($validator)->withInput();
    		}

            
            
            //geting id of current adding testimonian
            $id = DB::connection('mysql2')->table('INFORMATION_SCHEMA.TABLES')->select('AUTO_INCREMENT')->where('TABLE_SCHEMA','=','endoscope')->where('TABLE_NAME','=','facts')->get();

            $id = reset($id[0]);
                    
            
            if($request->hasFile('icon'))  {
                $file_1 = $request->file('icon');
                $input['icon'] = 'fact_icon_'.$id.'.png';

                // $input['image_1'] = $file_1->getClientOriginalName();
                $file_1->move(public_path().'/assets/img', $input['icon']);

            }
          
    		              

    		$fact = new Fact();

    		$fact->fill($input);

    		if($fact->save())  {
    			return redirect('admin')->with('status', 'Fact has been successfully added');
    		}
    		

    	}
    	
        if(view()->exists('admin.facts_add'))  {

    		$data =[

    					'title' => 'New fact',
                        

    				];

    		return view('admin.facts_add', $data);

    	}

    	abort(404);

    }
}
