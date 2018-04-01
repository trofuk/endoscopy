<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Testimonian;

class TestimoniansController extends Controller
{
    //
    	public function execute()  {

		if(view()->exists('admin.testimonians'))  {

			$testimonians = Testimonian::all();

			$data = [

					'title' => 'Testimonians',
					'testimonians' => $testimonians	

					];
			return view('admin.testimonians', $data);
		}

		abort(404);

	}
}
