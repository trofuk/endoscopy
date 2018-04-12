<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Faq;

use DB;

use Validator;

class FaqsEditController extends Controller
{
    //
   public function execute(Faq $faq, Request $request)  {

   		// $page = Page::find($id);

   		if($request->isMethod('delete'))  {
   			

   				$file_1 = public_path().'/assets/img/'.$faq->icon;
          if ((file_exists($file_1))&&(is_file($file_1)))
          {
   				 unlink($file_1);
   			  }

   			$faq->delete();

   			return redirect('admin/faqs')->with('status', 'Faq has been successfully deleted');

   		}


   		if($request->isMethod('post'))  {

   			$input = $request->except('_token');

   			$messages = [

    			'required' => 'Поле :attribute обовязкове для заповнення',	
    			'unique' => 'Поле :attribute має бути унікальним'
    		];
    		
   			$validator = Validator::make($input, [

   				'question' => 'required',
   				'answer' => 'required',
    			'icon' => 'required_without:old_icon',
    				

   			], $messages);
   			
   			
   			if($validator->fails())  {
   				return redirect()->route('faqsEdit', ['faq' => $input['id']])->withErrors($validator);
    		}

    		$id = $input['id'];

    		
    		
            

          if($request->hasFile('icon'))  {
    			$file_1 = $request->file('icon');
    			$input['icon'] = 'faq_icon_'.$id.'.png';
    			$file_1->move(public_path().'/assets/img', $input['icon']);

    			// $input['image_1'] = $file_1->getClientOriginalName();
	    		}
	    		else  {
	    			$input['icon'] = $input['old_icon'];
	    		}

	    		unset($input['old_icon']);

            

    		$faq->fill($input);

    		if($faq->update())  {
    			return redirect('admin/faqs')->with('status', 'Faq has been successfully updated');
    		}


   		}
   		
   		$old = $faq->toArray();

   		if(view()->exists('admin.faqs_edit')) {

        
   			$data = [
   						'title' => 'Editing faq - '.$old['question'],
   						'data' => $old,
   						
   					];
   			

			return view('admin.faqs_edit', $data);   		

   		}	

   }
}
