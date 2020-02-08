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
    return view('home.index');
});
Route::get('/about', function () {
    return view('home.about');
});
Route::get('/places', function () {
    return view('home.places');
});
Route::get('/hotel', function () {
    return view('home.hotel');
});
Route::get('/blog', function () {
    return view('home.blog');
});
Route::get('/contact', function () {
    return view('home.contact');
});




Auth::routes();


Route::group(['prefix'=>'dashboard','middleware'=>['auth']],function(){
   
    Route::group(['middleware'=>['admin']],function(){
        Route::get('/admin', function () {
            return view('admin.dashboard')->with('users',\App\User::all());
        })->name('admin');;

        Route::resource('places', 'PlacesController');
        Route::resource('users', 'UsersController');
        Route::resource('guides', 'GuidesController');
        Route::resource('stayingplaces', 'StayingplacesController');
        Route::resource('packages', 'PackagesController');
        Route::resource('events', 'EventsController');



    });
    Route::group(['middleware'=>['notadmin']],function(){
        
        Route::get('/', 'HomeController@index')->name('home');
        Route::get('/mypackages', 'HomeController@packages')->name('mypackages');
        Route::get('/mypackages/store/{mypackage}', 'HomeController@store')->name('mypackages.store');


    });
});
