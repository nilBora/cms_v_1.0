<?php 

/* Route::get('/admin', ['/' => 'auth', 'uses' => '\nilBora\admin\AdminController@show']); */

//Route::get('/admin', 'AdminController@show');


Route::group(['namespace' => 'nilBora\admin\Http\Controllers'], function() {

  Route::get('/admin', ['middleware' => 'auth', 'uses' => 'AdminController@index']);
  
  Route::get('/admin/auth/login', 'AuthController@login');
  
  Route::get('/admin/auth/logout', 'AuthController@logout');
  
  
  
  
  Route::post('/admin/auth/authenticate', 'AuthController@authenticate');

});



/*
Route::get('/admin', function () {
    dd(123);
});
*/

