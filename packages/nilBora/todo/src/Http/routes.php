<?php 

Route::group(['namespace' => 'nilBora\todo\Http\Controllers'], function() {

  
  Route::get('todo', 'TodoController@index');


});