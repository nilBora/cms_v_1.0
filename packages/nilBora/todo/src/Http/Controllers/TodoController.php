<?php namespace nilBora\todo\Http\Controllers;
	
	use Illuminate\Routing\Controller;
	
	class TodoController extends Controller {
		
		public function index()
		{
			
			return view('todo::index');
		}
	}