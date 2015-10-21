<?php namespace nilBora\admin\Http\Controllers;
	
	//use App\Http\Controllers\Controller as Controller;
	//use App\Http\Controllers\Auth\AuthController as Auth;
	use App\Http\User;
	use Illuminate\Routing\Controller;
	use Auth;
	class AdminController extends Controller {
		
		public function index()
		{
			return view('views::index');
		}
	}