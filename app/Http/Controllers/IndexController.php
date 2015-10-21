<?php namespace App\Http\Controllers;
	
	//use App\Http\Controllers\Controller as Controller;
	//use App\Http\Controllers\Auth\AuthController as Auth;

	class IndexController extends Controller {
		
		
		public function index()
	    {
	    	
	        return \Response::json(['one'=>1]);
	    }
		
		public function show()
		{
			//Auth::logout();
			return view('show');
		}
	}