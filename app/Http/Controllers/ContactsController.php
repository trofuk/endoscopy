<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Contact;

class ContactsController extends Controller
{
    //
	public function execute()  {

		if(view()->exists('admin.contacts'))  {

			$contacts = Contact::all();

			$data = [

					'title' => 'Contacts',
					'contacts' => $contacts	

					];
			return view('admin.contacts', $data);
		}

		abort(404);

	}

}
