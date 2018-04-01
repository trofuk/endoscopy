<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Fact;

class FactsController extends Controller
{
    //
	public function execute()  {

		if(view()->exists('admin.facts'))  {

			$facts = Fact::all();

			$data = [

					'title' => 'Facts',
					'facts' => $facts	

					];
			return view('admin.facts', $data);
		}

		abort(404);

	}

}