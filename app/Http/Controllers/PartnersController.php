<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Partner;

class PartnersController extends Controller
{
    //
	public function execute()  {

		if(view()->exists('admin.partners'))  {

			$partners = Partner::all();

			$data = [

					'title' => 'Partners',
					'partners' => $partners	

					];
			return view('admin.partners', $data);
		}

		abort(404);

	}

}
