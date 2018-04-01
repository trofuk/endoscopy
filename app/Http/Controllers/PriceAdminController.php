<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use File;

class PriceAdminController extends Controller
{
    //
	public function execute( $filename = 'price.zip' )  {

		if(view()->exists('admin.price'))  {


			$file_path = storage_path().'/' . $filename;
			$size = File::size($file_path);	
			$time = File::lastModified($file_path);
			$time = date("F j, Y, g:i a", $time + 2 * 3600);
			
			$data = [

					'title' => 'Price',
					'name' => $filename,
					'path' => $file_path,
					'size' =>  $size,
					'time' => $time

					];
			return view('admin.price', $data);
		}

	abort(404);

	}
}
