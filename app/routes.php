<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/
Route::filter('valid_user', function()
{
    $data = Input::except('_token');
    $rules = array(
        'username' => 'Required|Min:3|Max:80|Alpha',
        'email'    => 'Required|Between:3,64|Email|Unique:users',
        'password' => 'Required|AlphaNum|Between:4,10'
	);

    $validator = Validator::make($data, $rules);

    if ($validator->fails())
	    return Redirect::to('/')->withErrors($validator->messages());

});

Route::filter('guest', function()
{
        if (Auth::check()) 
                return Redirect::route('/')
                        ->with('flash_notice', 'You are already logged in!');
});



Route::get('/','BlogController@home');
Route::get('/register','BlogController@register');
Route::get('/login','BlogController@login');
Route::get('/profile',array('before' => 'auth' ,'uses' => 'BlogController@profile'));
Route::get('/logout','BlogController@logout');

Route::post('/signup',array('before'=>'csrf|valid_user','uses'=>'BlogController@signup'));
Route::post('/signin',array('before'=>'csrf','uses'=>'BlogController@signin'));