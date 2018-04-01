<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Page;

use DB;

use Validator;

class PagesEditController extends Controller
{
    //
   public function execute(Page $page, Request $request)  {

   		// $page = Page::find($id);

   		if($request->isMethod('delete'))  {
   			$count = DB::table('pages')->where('id','<=',$page->id)->count();
   			   			
   			if($count%2 == 0){

   				$file_1 = public_path().'/assets/img/'.$page->image_1;
   				// dd($file_1);
   				unlink($file_1);
   			}
   			else
   			{

   				$file_1 = public_path().'/assets/img/'.$page->image_1;
   				unlink($file_1);
   				$file_2 = public_path().'/assets/img/'.$page->image_2;
   				unlink($file_2);
   				$file_3 = public_path().'/assets/img/'.$page->image_3;
   				unlink($file_3);
   			}


   			$page->delete();

   			return redirect('admin')->with('status', 'Page has been successfully deleted');

   		}


   		if($request->isMethod('post'))  {

   			$input = $request->except('_token');

   			$count = DB::table('pages')->where('id','<=',$input['id'])->count();

   			$messages = [

    			'required' => 'Поле :attribute обовязкове для заповнення',	
    			'unique' => 'Поле :attribute має бути унікальним'
    		];
    		if($count%2 == 0){
	   			$validator = Validator::make($input, [

	   				'name' => 'required|max:100',
	    			'alias' => 'required|max:100|unique:pages,alias,'.$page->id, 
	    			'text_1' => 'required',
            'text_2' => 'required',
            'text_3' => 'required',
            'text_4' => 'required',
	    			'image_1' => 'required_without:old_image_1'	

	   			], $messages);
   			}
   			else
   			{
   				$validator = Validator::make($input, [

	   				'name' => 'required|max:100',
	    			'alias' => 'required|max:100|unique:pages,alias,'.$page->id, 
	    			'text_1' => 'required',
	    			'text_2' => 'required',
	    			'text_3' => 'required',
	    			'image_1' => 'required_without:old_image_1',
	    			'image_2' => 'required_without:old_image_2',
	    			'image_3' => 'required_without:old_image_3',	

	   			], $messages);

   			}

   			if($validator->fails())  {
   				return redirect()->route('pagesEdit', ['page' => $input['id']])->withErrors($validator);
    		}

    		$id = $input['id'];

    		
    		
            if($count%2 == 0){

          if($request->hasFile('image_1'))  {
    			$file_1 = $request->file('image_1');
    			$input['image_1'] = 'about_'.$id.'_block_img.jpg';
    			$file_1->move(public_path().'/assets/img', $input['image_1']);

    			// $input['image_1'] = $file_1->getClientOriginalName();
	    		}
	    		else  {
	    			$input['image_1'] = $input['old_image_1'];
	    		}

	    		unset($input['old_image_1']);

            }

            else{

          if($request->hasFile('image_1'))  {
    			$file_1 = $request->file('image_1');
    			$input['image_1'] = 'home_'.$id.'_main_slide_1.jpg';
    			$file_1->move(public_path().'/assets/img', $input['image_1']);

    			// $input['image_1'] = $file_1->getClientOriginalName();
	    		}
	    		else  {
	    			$input['image_1'] = $input['old_image_1'];
	    		}

	    		unset($input['old_image_1']);

	    		if($request->hasFile('image_2'))  {
	    			$file_1 = $request->file('image_2');
	    			$input['image_2'] = 'home_'.$id.'_main_slide_2.jpg';
	    			$file_1->move(public_path().'/assets/img', $input['image_2']);

	    			// $input['image_1'] = $file_1->getClientOriginalName();
	    		}
	    		else  {
	    			$input['image_2'] = $input['old_image_2'];
	    		}

	    		unset($input['old_image_2']);

	    		if($request->hasFile('image_3'))  {
	    			$file_1 = $request->file('image_3');
	    			$input['image_3'] = 'home_'.$id.'_main_slide_3.jpg';
	    			$file_1->move(public_path().'/assets/img', $input['image_3']);

	    			// $input['image_1'] = $file_1->getClientOriginalName();
	    		}
	    		else  {
	    			$input['image_3'] = $input['old_image_3'];
	    		}

	    		unset($input['old_image_3']);

            }

    		

    		$page->fill($input);

    		if($page->update())  {
    			return redirect('admin')->with('status', 'Page has been successfully updated');
    		}


   		}
   		
   		$old = $page->toArray();

   		$count = DB::table('pages')->where('id','<=',$old['id'])->count();

   		if(view()->exists('admin.pages_edit')) {

   			$data = [
   						'title' => 'Editing page - '.$old['name'],
   						'data' => $old,
   						'count' => $count
   					];
   			

			return view('admin.pages_edit', $data);   		

   		}	

   }
}
