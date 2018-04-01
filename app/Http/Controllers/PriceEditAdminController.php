<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use File;

class PriceEditAdminController extends Controller
{
    //
   public function execute(Request $request, $filename = 'price.zip')  {

   		
   		
   		if($request->isMethod('post'))  {

  		
            
   	
          		if($request->hasFile('price'))  {
          		
    				$file_1 = $request->file('price');
    			
    				$file_1->move(storage_path().'/', 'price.zip');
    				return redirect('admin/price')->with('status', 'Price has been successfully updated');
    			
	    		}
	    		else  {
	    			return redirect('admin/price');
	    		}

	    }
   		
   			$file_path = storage_path().'/' . $filename;
			$size = File::size($file_path);	
			$time = File::lastModified($file_path);
			$time = date("F j, Y, g:i a", $time + 2 * 3600);

   		if(view()->exists('admin.price_edit')) {

   			$data = [
   						'title' => 'Editing price',
   						'name' => $filename,
						'path' => $file_path,
						'size' =>  $size,
						'time' => $time
   						
   					];
   			

			return view('admin.price_edit', $data);   		

   		}	

   }
}