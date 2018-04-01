<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Page;

use App\Contact;

class PageController extends Controller
{
    public function execute($alias) {

    	if(!$alias) {
    		abort(404);	
    	}

    	if(view()->exists('site.page')) {

            $contacts = Contact::all();

    		$page = Page::where('alias', $alias)->first();

    		$data = [
    					'title' => $page->name,
    					'page' => $page,
                        'contacts'=> $contacts

    				];

    		return view('site.page', $data);	
    	}
    	else {
    		abort(404);
    	} 
    }
}
