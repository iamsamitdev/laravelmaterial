<?php

/*
|--------------------------------------------------------------------------
| Frontend
|--------------------------------------------------------------------------
|
*/

Route::get('/', function () {
    return view('welcome');
});


/*
|--------------------------------------------------------------------------
| Backend
|--------------------------------------------------------------------------
|
*/

Route::group([
    'prefix' => 'backend', 
    'middleware' => 'guest'
], function(){
    // หน้า dashboard
	Route::get('dashboard', array(
		'as'=>'dashboard',
		'uses'=>'BackendController@dashboard'
	));
});


Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

Route::get('admin/routes', 'HomeController@admin')->middleware('admin');