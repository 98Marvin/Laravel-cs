<?php


use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
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

Route::get('/', function () {
    return view('welcome');
});

// Routing and response
Route::get('/hello', function () {
	return response('<h2>Journey Continues Bro Lets Keep Going!!!!</h2>',
	 200,
	  ['Content-Type'=>'text/html', 'Foo'=>'bar']
	);
});

Route::get('/hello2', function () {
	return response('<em>Method 2</em>', 404)->header('Content-Type', 'text/html')->header('Foo', 'bar');
});

// Wildcards in routes with constraints
Route::get('/posts/{id}', function ($id) {
	// ddd($id);
	return response('Post'. $id);
})->where('id', '[0-5]+');

// Getting Query Params From Incoming Request
Route::get('/search', function (Request $request) {
	return $request->name.' '.$request->city;
});


//View Basics and Passing Data
Route::get('/listings', function () {
	return view('listings', [
		'heading' => 'Latest Listings',
		'listings' => [
			[
				'id' => 1,
				'title' => 'PHP Developer',
				'description' => 'Build Dynamic Webistes!!'
			],
			[
				'id' => 2,
				'title' => 'Laravel Developer',
				'description' => 'Build Powerful and Secure Webistes!!'
			],	

		]
	]);
});