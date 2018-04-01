<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PriceController extends Controller
{
    
    public function download( $filename = 'price.zip' ) { 
// Check if file exists in storage directory
		$file_path = storage_path().'/' . $filename;
		// dd(storage_path().'/' . $filename);
		 
		if ( file_exists( $file_path ) ) { 
			// Send Download 
			return \Response::download( $file_path, $filename ); 
		 
			} else { 
			// Error exit( 'Requested file does not exist on our server!' ); 
			}
	 }
}
