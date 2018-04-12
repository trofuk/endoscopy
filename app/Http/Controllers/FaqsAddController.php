<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Validator;

use App\Faq;

use DB;

class FaqsAddController extends Controller
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

        			'question' => 'required',
        			'answer' => 'required',
        			'icon' => 'required',
        					

        		], $messages);
            


            if($validator->fails()) {
    			return redirect()->route('faqsAdd')->withErrors($validator)->withInput();
    		}

            
            
            //geting id of current adding testimonian
            $id = DB::connection('mysql2')->table('INFORMATION_SCHEMA.TABLES')->select('AUTO_INCREMENT')->where('TABLE_SCHEMA','=','endoscope')->where('TABLE_NAME','=','faqs')->get();

            $id = reset($id[0]);
                    
            
            if($request->hasFile('icon'))  {
                $file_1 = $request->file('icon');
                $input['icon'] = 'faq_icon_'.$id.'.png';

                // $input['image_1'] = $file_1->getClientOriginalName();
                $file_1->move(public_path().'/assets/img', $input['icon']);

            }
          
    		              

    		$faq = new Faq();

    		$faq->fill($input);

    		if($faq->save())  {
    			return redirect('admin/faqs')->with('status', 'Faq has been successfully added');
    		}
    		

    	}
    	
        if(view()->exists('admin.faqs_add'))  {

    		$data =[

    					'title' => 'New faq',
                        

    				];

    		return view('admin.faqs_add', $data);

    	}

    	abort(404);

    }
}
