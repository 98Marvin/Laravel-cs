<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Prefix api in the URL bar to test API routes

Route::get('/posts', function () {
	return response()->json([
		'posts' => [
			['title'=>'First Post', 'body'=>'1st'],

			['title'=>'Second Post', 'body'=>'2nd']

		]

	]);
});

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
