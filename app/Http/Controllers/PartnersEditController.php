<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Partner;

use DB;

use Validator;

class PartnersEditController extends Controller
{
    //
   public function execute(Partner $partner, Request $request)  {

   		// $page = Page::find($id);

   		if($request->isMethod('delete'))  {
   			

   				$file_1 = public_path().'/assets/img/'.$partner->logo;
   				unlink($file_1);
   			

   			$partner->delete();

   			return redirect('admin')->with('status', 'Partner has been successfully deleted');

   		}


   		if($request->isMethod('post'))  {

   			$input = $request->except('_token');

   			$messages = [

    			'required' => 'Поле :attribute обовязкове для заповнення',	
    			'unique' => 'Поле :attribute має бути унікальним'
    		];
    		
   			$validator = Validator::make($input, [

   				'name' => 'required|max:200|unique:partners,name,'.$partner->id,
    			'logo' => 'required_without:old_logo'	

   			], $messages);
   			
   			
   			if($validator->fails())  {
   				return redirect()->route('partnersEdit', ['partner' => $input['id']])->withErrors($validator);
    		}

    		$id = $input['id'];

    		
    		
            

          if($request->hasFile('logo'))  {
    			$file_1 = $request->file('logo');
    			$input['logo'] = 'logo_'.$id.'.png';
    			$file_1->move(public_path().'/assets/img', $input['logo']);

    			// $input['image_1'] = $file_1->getClientOriginalName();
	    		}
	    		else  {
	    			$input['logo'] = $input['old_logo'];
	    		}

	    		unset($input['old_logo']);

            

    		$partner->fill($input);

    		if($partner->update())  {
    			return redirect('admin')->with('status', 'Partner has been successfully updated');
    		}


   		}
   		
   		$old = $partner->toArray();

   		if(view()->exists('admin.partners_edit')) {

   			$data = [
   						'title' => 'Editing partner - '.$old['name'],
   						'data' => $old,
   						
   					];
   			

			return view('admin.partners_edit', $data);   		

   		}	

   }
}
