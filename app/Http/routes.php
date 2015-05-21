<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

//use App\Models\User;
/*Route::get('testing', function(){
	$user = new User;

	$user->name = "willi";
	$user->email = "willi@gmail.com";
	$password = "1234";

	$user->set_password($password);

	$user->save();

	return "user saved in db";

});

Route::get('user/{id}', 'UserController@index');*/
Route::get('home', 'PageController@index');
Route::get('test', 'PageController@test');
Route::get('about', 'PageController@about');
Route::get('products', 'PageController@products');
Route::get('news', 'PageController@news');
Route::get('locations', 'PageController@locations');
Route::get('gallery', 'PageController@gallery');
Route::get('contact', 'PageController@contact');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
