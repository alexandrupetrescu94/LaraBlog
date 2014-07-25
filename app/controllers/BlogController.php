<?php


class BlogController extends BaseController {

	public function home(){
		return View::make('home');
	}

	public function userRegister(){
		$user = new User();

		$user->email = Input::get('email');
        $user->name = Input::get('username');
        $user->password =  Hash::make(Input::get('password'));

		$user->save();
		return Redirect::to('blog')->with('message', 'Thanks for registering!');
	}

	public function userLogin(){

	}

}
	