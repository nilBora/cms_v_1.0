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

//include(__DIR__.'/../../packages/nilBora/admin/src/Http/routes.php');

Route::get('/', function () {
    return view('welcome');
});

Route::get('show', 'IndexController@show');

Route::group(array('prefix' => 'api'), function() {
	
    // since we will be using this just for CRUD, we won't need create and edit
    // Angular will handle both of those forms
    // this ensures that a user can't access api/create or api/edit when there's nothing there
    Route::resource('comments', 'IndexController', 
        array('only' => array('index')));
  
});