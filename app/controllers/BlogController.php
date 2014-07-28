<?php


class BlogController extends BaseController {

	public function home(){
		return View::make('home');
	}
	public function register(){
		return View::make('register');
	}
	public function login(){
		return View::make('login');
	}
	public function profile(){
		return View::make('profile');
	}

	public function signup(){
		$user = new User();

		$user->email = Input::get('email');
        $user->name = Input::get('username');
        $user->password =  Hash::make(Input::get('password'));

		$user->save();
		return Redirect::to('login')->with('message', 'Thanks for registering!');
	}

	public function signin(){
		$email = Input::get('email');
		$password = Input::get('password');

		if (Auth::attempt(array('email' => $email, 'password' => $password)))
		{
    		return Redirect::to('profile');
		}
	}

	public function logout(){
		Auth::logout();
		return Redirect::to('/');
	}

}
	