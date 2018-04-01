<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Testimonian;

use DB;

use Validator;

class TestimoniansEditController extends Controller
{
    //
   public function execute(Testimonian $testimonian, Request $request)  {

   		// $page = Page::find($id);

   		if($request->isMethod('delete'))  {
   			

   				$file_1 = public_path().'/assets/img/'.$testimonian->images;
   				unlink($file_1);
   			

   			$testimonian->delete();

   			return redirect('admin')->with('status', 'Testimonian has been successfully deleted');

   		}


   		if($request->isMethod('post'))  {

   			$input = $request->except('_token');

   			$messages = [

    			'required' => 'Поле :attribute обовязкове для заповнення',	
    			'unique' => 'Поле :attribute має бути унікальним'
    		];
    		
   			$validator = Validator::make($input, [

   				'name' => 'required|max:255',
    			'images' => 'required_without:old_images',
    			'text' => 'required'	

   			], $messages);
   			
   			
   			if($validator->fails())  {
   				return redirect()->route('testimoniansEdit', ['testimonian' => $input['id']])->withErrors($validator);
    		}

    		$id = $input['id'];

    		
    		
            

            	if($request->hasFile('images'))  {
    			$file_1 = $request->file('images');
    			$input['images'] = 'people_'.$id.'.jpg';
    			$file_1->move(public_path().'/assets/img', $input['images']);

    			// $input['image_1'] = $file_1->getClientOriginalName();
	    		}
	    		else  {
	    			$input['images'] = $input['old_images'];
	    		}

	    		unset($input['old_images']);

            

    		$testimonian->fill($input);

    		if($testimonian->update())  {
    			return redirect('admin')->with('status', 'Testimonian has been successfully updated');
    		}


   		}
   		
   		$old = $testimonian->toArray();

   		if(view()->exists('admin.testimonians_edit')) {

   			$data = [
   						'title' => 'Editing testimonian - '.$old['name'],
   						'data' => $old,
   						
   					];
   			

			return view('admin.testimonians_edit', $data);   		

   		}	

   }
}
