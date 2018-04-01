<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::group(['middleware'=>'web'], function(){

	Route::match(['get', 'post'], '/', ['uses'=>'IndexController@execute', 'as'=>'home']);
	Route::match(['get', 'post'], '/#/contact', ['uses'=>'IndexController@execute', 'as'=>'contact']);
	Route::match(['get', 'post'], '/#/about', ['uses'=>'IndexController@execute', 'as'=>'about']);
	Route::get('/page/{alias}', ['uses'=>'PageController@execute', 'as'=>'page']);
	
	//Download Price
	Route::get( '/download/price.zip', 'PriceController@download');

	Route::auth();

});

//admin
Route::group(['prefix'=>'admin', 'middleware'=>'auth'], function() {

	//admin
	Route::get('/', function() {

			if(view()->exists('admin.index')) {
				$data = ['title' => 'Admin Panel'];

				return view('admin.index', $data);
			}

	});
	//admin/pages
	Route::group(['prefix'=>'pages'], function(){

		//admin/pages	
		Route::get('/', ['uses'=>'PagesController@execute', 'as'=>'pages']);

		//admin/pages/add
		Route::match(['get', 'post'], '/add', ['uses'=>'PagesAddController@execute', 'as'=>'pagesAdd']);
		//admin/edit/2
		Route::match(['get', 'post', 'delete'], '/edit/{page}', ['uses'=>'PagesEditController@execute', 'as'=>'pagesEdit']);

	});	

	//admin/products
	Route::group(['prefix'=>'products'], function(){

		//admin/products	
		Route::get('/', ['uses'=>'ProductsController@execute', 'as'=>'products']);

		//admin/products/add
		Route::match(['get', 'post'], '/add', ['uses'=>'ProductsAddController@execute', 'as'=>'productsAdd']);
		//admin/edit/2
		Route::match(['get', 'post', 'delete'], '/edit/{product}', ['uses'=>'ProductsEditController@execute', 'as'=>'productsEdit']);

	});

	//admin/partners
	Route::group(['prefix'=>'partners'], function(){

		//admin/partners	
		Route::get('/', ['uses'=>'PartnersController@execute', 'as'=>'partners']);

		//admin/partners/add
		Route::match(['get', 'post'], '/add', ['uses'=>'PartnersAddController@execute', 'as'=>'partnersAdd']);
		//admin/edit/2
		Route::match(['get', 'post', 'delete'], '/edit/{partner}', ['uses'=>'PartnersEditController@execute', 'as'=>'partnersEdit']);

	});

	//admin/testimonians
	Route::group(['prefix'=>'testimonians'], function(){

		//admin/testimonians	
		Route::get('/', ['uses'=>'TestimoniansController@execute', 'as'=>'testimonians']);

		//admin/testimonians/add
		Route::match(['get', 'post'], '/add', ['uses'=>'TestimoniansAddController@execute', 'as'=>'testimoniansAdd']);
		//admin/edit/2
		Route::match(['get', 'post', 'delete'], '/edit/{testimonian}', ['uses'=>'TestimoniansEditController@execute', 'as'=>'testimoniansEdit']);

	});

	//admin/faqs
	Route::group(['prefix'=>'faqs'], function(){

		//admin/faqs	
		Route::get('/', ['uses'=>'FaqsController@execute', 'as'=>'faqs']);

		//admin/faqs/add
		Route::match(['get', 'post'], '/add', ['uses'=>'FaqsAddController@execute', 'as'=>'faqsAdd']);
		//admin/edit/2
		Route::match(['get', 'post', 'delete'], '/edit/{faq}', ['uses'=>'FaqsEditController@execute', 'as'=>'faqsEdit']);

	});

	//admin/services
	Route::group(['prefix'=>'services'], function(){

		//admin/services	
		Route::get('/', ['uses'=>'ServicesController@execute', 'as'=>'services']);

		//admin/services/add
		Route::match(['get', 'post'], '/add', ['uses'=>'ServicesAddController@execute', 'as'=>'servicesAdd']);
		//admin/edit/2
		Route::match(['get', 'post', 'delete'], '/edit/{service}', ['uses'=>'ServicesEditController@execute', 'as'=>'servicesEdit']);

	});

	//admin/facts
	Route::group(['prefix'=>'facts'], function(){

		//admin/facts	
		Route::get('/', ['uses'=>'FactsController@execute', 'as'=>'facts']);

		//admin/facts/add
		Route::match(['get', 'post'], '/add', ['uses'=>'FactsAddController@execute', 'as'=>'factsAdd']);
		//admin/edit/2
		Route::match(['get', 'post', 'delete'], '/edit/{fact}', ['uses'=>'FactsEditController@execute', 'as'=>'factsEdit']);

	});



	//admin/contacts
	Route::group(['prefix'=>'contacts'], function(){

		//admin/contacts	
		Route::get('/', ['uses'=>'ContactsController@execute', 'as'=>'contacts']);

		//admin/edit/2
		Route::match(['get', 'post', 'delete'], '/edit/{contact}', ['uses'=>'ContactsEditController@execute', 'as'=>'contactsEdit']);

	});


		Route::group(['prefix'=>'price'], function(){

		//admin/price	
		Route::get('/', ['uses'=>'PriceAdminController@execute', 'as'=>'price']);

		//admin/edit/price
		Route::match(['get', 'post', 'delete'], '/edit/price', ['uses'=>'PriceEditAdminController@execute', 'as'=>'priceEdit']);

	});
		
});

// Route::auth();

// Route::get('/home', 'HomeController@index');



// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
