<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Fact;

use DB;

use Validator;

class FactsEditController extends Controller
{
    //
   public function execute(Fact $fact, Request $request)  {

   		// $page = Page::find($id);

   		if($request->isMethod('delete'))  {
   			

   				$file_1 = public_path().'/assets/img/'.$fact->icon;
   				unlink($file_1);
   			

   			$fact->delete();

   			return redirect('admin')->with('status', 'Fact has been successfully deleted');

   		}


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
   			
   			
   			if($validator->fails())  {
   				return redirect()->route('factsEdit', ['fact' => $input['id']])->withErrors($validator);
    		}

    		$id = $input['id'];

    		
    		
            

          if($request->hasFile('icon'))  {
    			$file_1 = $request->file('icon');
    			$input['icon'] = 'fact_icon_'.$id.'.png';
    			$file_1->move(public_path().'/assets/img', $input['icon']);

    			// $input['image_1'] = $file_1->getClientOriginalName();
	    		}
	    		else  {
	    			$input['icon'] = $input['old_icon'];
	    		}

	    		unset($input['old_icon']);

            

    		$fact->fill($input);

    		if($fact->update())  {
    			return redirect('admin')->with('status', 'Fact has been successfully updated');
    		}


   		}
   		
   		$old = $fact->toArray();

   		if(view()->exists('admin.facts_edit')) {

        
   			$data = [
   						'title' => 'Editing fact - '.$old['name'],
   						'data' => $old,
   						
   					];
   			

			return view('admin.facts_edit', $data);   		

   		}	

   }
}
