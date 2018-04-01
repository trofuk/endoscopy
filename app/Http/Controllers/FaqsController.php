<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Faq;

class FaqsController extends Controller
{
    //
	public function execute()  {

		if(view()->exists('admin.faqs'))  {

			$faqs = Faq::all();

			$data = [

					'title' => 'Faqs',
					'faqs' => $faqs	

					];
			return view('admin.faqs', $data);
		}

		abort(404);

	}

}
