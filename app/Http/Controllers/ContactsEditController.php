<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Contact;

class ContactsEditController extends Controller
{
    //
   public function execute(Contact $contact, Request $request)  {

   		// $page = Page::find($id);


   		if($request->isMethod('post'))  {

   			$input = $request->except('_token');

			$contact->fill($input);

    		if($contact->update())  {
    			return redirect('admin/contacts')->with('status', 'Contact has been successfully updated');
    		}


   		}
   		
   		$old = $contact->toArray();

   		if(view()->exists('admin.contacts_edit')) {

        
   			$data = [
   						'title' => 'Editing contact - '.$old['id'],
   						'data' => $old,
   						
   					];
   			

			return view('admin.contacts_edit', $data);   		

   		}	

   }
}
