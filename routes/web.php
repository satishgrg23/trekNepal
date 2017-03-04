<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/


/*
|--------------------------------------------------------------------------
| Web Routes For Frontend
|--------------------------------------------------------------------------
*/

Route::get('/', [
    'as' => 'index', 'uses' => 'SitesController@showIndex'
]);

Route::get('/trekkingSites/{id}', [
    'as' => 'trekkingSites', 'uses' => 'SitesController@showTrekkingSitesPage'
]);

Route::get('/trekkingSitesList', [
    'as' => 'trekkingSitesList', 'uses' => 'SitesController@showTrekkingSitesListPage'
]);

Route::post('/search', [
    'as' => 'search', 'uses' => 'SitesController@searchTrekkingSitesListPage'
]);
Route::get('/bookTrip', [
    'as' => 'bookTrip', 'uses' => 'BookTripController@showBookingForm'
]);
Route::post('/bookTrip', [
    'as' => 'bookTrip', 'uses' => 'BookTripController@bookTrip'
]);
Route::get('/trekkingTrips/{id}', [
    'as' => 'trekkingTrips', 'uses' => 'SitesController@trekkingTrips'
]);
Route::get('/viewMap/{id}', [
    'as' => 'viewMap', 'uses' => 'SitesController@viewMap'
]);
// Route::post('/user/home', [
//     'as' => 'index', 'uses' => 'UserController@index'
// ]);


/*
|--------------------------------------------------------------------------
| Web Routes For Authentication sytem
|--------------------------------------------------------------------------
*/
Route::group(['prefix' => 'admin'], function () {
  Route::get('/login', 'AdminAuth\LoginController@showLoginForm');
  Route::post('/login', 'AdminAuth\LoginController@login');
  Route::post('/logout', 'AdminAuth\LoginController@logout');

  // Route::get('/register', 'AdminAuth\RegisterController@showRegistrationForm');
  // Route::post('/register', 'AdminAuth\RegisterController@register');

  Route::post('/password/email', 'AdminAuth\ForgotPasswordController@sendResetLinkEmail');
  Route::post('/password/reset', 'AdminAuth\ResetPasswordController@reset');
  Route::get('/password/reset', 'AdminAuth\ForgotPasswordController@showLinkRequestForm');
  Route::get('/password/reset/{token}', 'AdminAuth\ResetPasswordController@showResetForm');
});

Route::group(['prefix' => 'user'], function () {
  Route::get('/login', 'UserAuth\LoginController@showLoginForm');
  Route::post('/login', 'UserAuth\LoginController@login');
  Route::post('/logout', 'UserAuth\LoginController@logout');

  Route::get('/register', 'UserAuth\RegisterController@showRegistrationForm');
  Route::post('/register', 'UserAuth\RegisterController@register');

  Route::post('/password/email', 'UserAuth\ForgotPasswordController@sendResetLinkEmail');
  Route::post('/password/reset', 'UserAuth\ResetPasswordController@reset');
  Route::get('/password/reset', 'UserAuth\ForgotPasswordController@showLinkRequestForm');
  Route::get('/password/reset/{token}', 'UserAuth\ResetPasswordController@showResetForm');
});

/*
|--------------------------------------------------------------------------
| Web Routes For Backend
|--------------------------------------------------------------------------
*/

Route::get('/admin', 'AdminController@showIndex');
Route::resource('admin/trekkingSites','TrekkingSitesController');
Route::resource('admin/gallery','GalleryController');
Route::resource('admin/trip','TripController');
Route::resource('admin/customer','CustomerController');
Route::get('/admin/booking', [
    'as' => 'bookTrip', 'uses' => 'BookingController@index'
]);