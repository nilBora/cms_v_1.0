<?php namespace nilBora\admin\Http\Controllers;
	
	use App\Http\User;
	use Auth;
	use Illuminate\Routing\Controller;
	
	
	class AuthController extends Controller {
		
		
		public function login()
		{
			return view('auth::login');
		}
		
		public function logout()
		{
			Auth::logout();
		    return \Redirect::to("admin");
		}
		
		public function authenticate()
	    {
			if (\Input::has('email') && \Input::has('password'))
			{
				$email = \Input::get('email');
				$password = \Input::get('password');
				
				if (Auth::attempt(['email' => $email, 'password' => $password]))
					return \Redirect::to("admin");
				else
					return \Redirect::to("admin/auth/login");
			}else
				return \Redirect::to("admin/auth/login");
	      
	    }
		
		public function show()
		{
			//dd(2);
			//Auth::create(['name'=>'admin', 'email'=>'brdnlsrg@gmail.com', 'password'=>'admin']);
			//dd(1);
			if (Auth::attempt(['email' => 'brdnlsrg@gmail.com', 'password' => 'admin']))
		      {
		       dd(1);
		      }else{
			      dd(3);
		      }
		    dd(2);
			if(!Auth::guest())
			$this->idUser = Auth::user()->id;
		else
			$this->beforeFilter('check');
			
			/*
 if (Auth::authenticate(['email' => "brdnlsrg@gmail.com", 'password' => "admin"]))
	        {
	        		
	            // Auth::user() возвращает объект пользователя...
	        }
*/
		}
		
		public function auth()
		{
			
		}
	}