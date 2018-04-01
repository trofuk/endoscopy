<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Service;

use DB;

use Validator;

class ServicesEditController extends Controller
{
    //
   public function execute(Service $service, Request $request)  {

   		// $page = Page::find($id);

   		if($request->isMethod('delete'))  {
   			

   				$file_1 = public_path().'/assets/img/'.$service->icon;
   				unlink($file_1);
   			

   			$service->delete();

   			return redirect('admin')->with('status', 'Service has been successfully deleted');

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
    			'icon' => 'required_without:old_icon',
    				

   			], $messages);
   			
   			
   			if($validator->fails())  {
   				return redirect()->route('servicesEdit', ['service' => $input['id']])->withErrors($validator);
    		}

    		$id = $input['id'];

    		
    		
            

          if($request->hasFile('icon'))  {
    			$file_1 = $request->file('icon');
    			$input['icon'] = 'service_icon_'.$id.'.png';
    			$file_1->move(public_path().'/assets/img', $input['icon']);

    			// $input['image_1'] = $file_1->getClientOriginalName();
	    		}
	    		else  {
	    			$input['icon'] = $input['old_icon'];
	    		}

	    		unset($input['old_icon']);

            

    		$service->fill($input);

    		if($service->update())  {
    			return redirect('admin')->with('status', 'Service has been successfully updated');
    		}


   		}
   		
   		$old = $service->toArray();

   		if(view()->exists('admin.services_edit')) {

        
   			$data = [
   						'title' => 'Editing service - '.$old['name'],
   						'data' => $old,
   						
   					];
   			

			return view('admin.services_edit', $data);   		

   		}	

   }
}
