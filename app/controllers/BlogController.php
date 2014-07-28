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
		$view = View::make('profile');
		//$view['articles']= Article::all()->user();
		$articles= Category::with("articles")->get()->toArray();
		//$users = $articles->user;
		
		echo "<pre>";
		print_r($articles); 
		echo "</pre>";	
		exit;
		return $view; 
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
	