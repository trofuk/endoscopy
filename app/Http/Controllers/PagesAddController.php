<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Validator;

use App\Page;

use DB;

class PagesAddController extends Controller
{
    //
    public function execute(Request $request)  {

    	if($request->isMethod('post'))  {

    		$input = $request->except('_token');

            
    		$messages = [

    			'required' => 'Поле :attribute обовязкове для заповнення',	
    			'unique' => 'Поле :attribute має бути унікальним'
    		];

    		$count = DB::table('pages')->count();
            if($count%2 == 1){

                $validator = Validator::make($input, [

        			'name' => 'required|max:100',
        			'alias' => 'required|unique:pages|max:100',
        			'text_1' => 'required',
                    'text_2' => 'required',
                    'text_3' => 'required',
                    'text_4' => 'required',
        			'image_1' => 'required'	

        		], $messages);
            }
    		else
            {
                $validator = Validator::make($input, [

                    'name' => 'required|max:100',
                    'alias' => 'required|unique:pages|max:100',
                    'text_1' => 'required',
                    'text_2' => 'required',
                    'text_3' => 'required',
                    'image_1' => 'required',
                    'image_2' => 'required', 
                    'image_3' => 'required',  

                ], $messages);
                


            }

            if($validator->fails()) {
    			return redirect()->route('pagesAdd')->withErrors($validator)->withInput();
    		}

            
            
            //geting id of current adding page
            $id = DB::connection('mysql2')->table('INFORMATION_SCHEMA.TABLES')->select('AUTO_INCREMENT')->where('TABLE_SCHEMA','=','endoscope')->where('TABLE_NAME','=','pages')->get();

            $id = reset($id[0]);
                    
            if($count%2 == 1){
                if($request->hasFile('image_1'))  {
                    $file_1 = $request->file('image_1');
                    $input['image_1'] = 'about_'.$id.'_block_img.jpg';

                    // $input['image_1'] = $file_1->getClientOriginalName();
                    $file_1->move(public_path().'/assets/img', $input['image_1']);

                }
            }
    		
            else{

                if($request->hasFile('image_1'))  {
                $file_1 = $request->file('image_1');
                $input['image_1'] = 'home_'.$id.'_main_slide_1.jpg';

                // $input['image_1'] = $file_1->getClientOriginalName();
                $file_1->move(public_path().'/assets/img', $input['image_1']);

                }

                if($request->hasFile('image_2'))  {
                    $file_2 = $request->file('image_2');
                    $input['image_2'] = 'home_'.$id.'_main_slide_2.jpg';

                    // $input['image_2'] = $file_2->getClientOriginalName();
                    $file_2->move(public_path().'/assets/img', $input['image_2']);
                }

                if($request->hasFile('image_3'))  {
                    $file_3 = $request->file('image_3');
                    $input['image_3'] = 'home_'.$id.'_main_slide_3.jpg';

                    // $input['image_3'] = $file_3->getClientOriginalName();
                    $file_3->move(public_path().'/assets/img', $input['image_3']);
                }

            }

           

    		$page = new Page();

    		$page->fill($input);

    		if($page->save())  {
    			return redirect('admin')->with('status', 'Page has been successfully added');
    		}
    		

    	}
    	
        $count = DB::table('pages')->count();

    	if(view()->exists('admin.pages_add'))  {

    		$data =[

    					'title' => 'New page',
                        'count' => $count

    				];

    		return view('admin.pages_add', $data);

    	}

    	abort(404);

    }
}
