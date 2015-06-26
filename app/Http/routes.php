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
Route::post('contact', 'PageController@storecontact');
Route::get('social', 'PageController@social');
Route::get('news/{id}', 'PageController@newsdetail');
Route::get('products/{name}', 'PageController@typeProducts');
Route::get('products/{name}/{product}', 'PageController@televisors');
Route::get('news/{slug}', 'PageController@showNews')->where('slug', '[a-z0-9-]+');


/* admin area */

Route::get('admin', function () {
  return redirect('admin/dashboard');
});

Route::group([
  'namespace' => 'Admin',
  'middleware' => 'auth',
], function () {
  Route::get('admin/dashboard', 'DashboardController@index');  	
  Route::resource('admin/news', 'NewsController');
  Route::resource('admin/editors', 'AdminUsersController');
  Route::resource('admin/categorynews', 'TypeNewsController');
  Route::resource('admin/pages', 'PageController');
  Route::resource('admin/nodes', 'NodeController');
  Route::resource('admin/images', 'ImageController');
  Route::resource('admin/brands', 'BrandController');
  Route::resource('admin/categories', 'CategoryController');
  Route::resource('admin/products', 'ProductController');
  Route::resource('admin/productprices', 'ProductPriceController');
  Route::resource('admin/productdetails', 'ProductDetailController');
  Route::resource('admin/address', 'AddressController');
  Route::resource('admin/paymentmethods', 'PaymentMethodController');
  Route::resource('admin/bankaccounts', 'AccountNumberController');
  Route::resource('admin/paymentprofiles', 'PaymentProfileController');
  Route::get('admin/galleries/{id}/images', 'GalleryController@getAddImages');
  Route::get('admin/galleries/{id}/images/edit', 'GalleryController@getEditImages');
  Route::post('admin/galleries/images', ['as' => 'admin.galleries.postSaveImages', 'uses' => 'GalleryController@postSaveImages']);
  Route::post('admin/galleries/images/edit', ['as' => 'admin.galleries.putEditImages', 'uses' => 'GalleryController@putEditImages']);
  Route::get('admin/productdetails/{id}/images', 'ProductDetailController@getAddImages');
  Route::get('admin/productdetails/{id}/images/edit', 'ProductDetailController@getEditImages');
  Route::post('admin/productdetails/images', ['as' => 'admin.productdetails.postSaveImages', 'uses' => 'ProductDetailController@postSaveImages']);
  Route::post('admin/productdetails/images/edit', ['as' => 'admin.productdetails.putEditImages', 'uses' => 'ProductDetailController@putEditImages']);
  Route::resource('admin/galleries', 'GalleryController');
  Route::get('admin/imagesall', 'AjaxController@getAllImages');

});


Route::post('auth/register', 'Auth\AuthController@postRegister');
Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);


Route::controller('filemanager', 'FilemanagerLaravelController');
/*Route::group(array('middleware' => ''), function(){
    Route::controller('filemanager', 'FilemanagerLaravelController');
});*/
