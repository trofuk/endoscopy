<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Product;

class ProductsController extends Controller
{
    //
	public function execute() {

		if(view()->exists('admin.products')) {
			$products = Product::all();

			$data = [
						'title' => 'Products',
						'products' => $products	

					];

			return view('admin.products', $data);		
		}

		abort(404);

	}


}
