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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// --------------------
// Backpack\Demo routes
// --------------------
Route::group([
    'prefix'     => config('backpack.base.route_prefix', 'admin'),
    'middleware' => ['admin'],
    'namespace'  => 'Admin',
], function () {
    // CRUD resources and other admin routes
    CRUD::resource('monster', 'MonsterCrudController');
    CRUD::resource('icon', 'IconCrudController');
    CRUD::resource('product', 'ProductCrudController');
});
Route::get('/about','PageController@about');
Route::get('/contact','PageController@contact');
Route::get('/accomodation','PageController@accomodation');
Route::get('/transport','PageController@transport');
Route::get('/plantrip','PageController@plantrip');
Route::get('/scenery','PageController@scenery');
Route::get('/safaris','PageController@safaris');
Route::get('/single-safaris','PageController@single_safaris');

Route::get('events', ['uses' => '\SeanDowney\BackpackEventsCrud\app\Http\Controllers\EventController@index']);
Route::get('events/{event}/{subs?}', ['as' => 'view-event', 'uses' => '\SeanDowney\BackpackEventsCrud\app\Http\Controllers\EventController@view'])
    ->where(['event' => '^((?!admin).)*$', 'subs' => '.*']);

/** CATCH-ALL ROUTE for Backpack/PageManager - needs to be at the end of your routes.php file  **/
Route::get('{page}/{subs?}', ['uses' => 'PageController@index'])
    ->where(['page' => '^((?!admin).)*$', 'subs' => '.*']);
