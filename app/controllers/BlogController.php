<?php


class BlogController extends BaseController {

	public function __construct(){

		$this->beforeFilter('csrf', array('on' => 'post'));
		$this->beforeFilter('auth', array('only' =>array('profile','getProfile')));
	}

	public function getHome(){
		return View::make('home');
	}

	public function getRegister(){
		return View::make('register');
	}

	public function getLogin(){
		return View::make('login');
	}

	public function getProfile($name = NULL){
		
		//$articles= Category::with("articles")->get()->toArray();
		$user_id = User::where('name','=',$name)->get(array('id'))->first();
		$data['articles'] = User::find($user_id->id)->articles;

		return View::make('profile',$data);  
	}

	public function getLogout(){
		Auth::logout();

		return Redirect::to('home');
	}

	//------------------------

	public function postSignup(){
		$user = new User();

		$user->email = Input::get('email');
        $user->name = Input::get('username');
        $user->password =  Hash::make(Input::get('password'));
		$user->save();

		return Redirect::to('login')->with('message', 'Thanks for registering!');
	}

	public function postSignin(){
		$email = Input::get('email');
		$password = Input::get('password');

		if (Auth::attempt(array('email' => $email, 'password' => $password)))
		{
			$user = User::where('email', '=' , $email)->get(array('name'))->first();

    		return Redirect::to('profile/'.$user->name);
		}
		else
			return Redirect::to('login')->with('message','Logging in failed. Try again or register!');
	}

}
	