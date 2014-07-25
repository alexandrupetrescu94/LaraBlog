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
        'email'     => 'Required|Between:3,64|Email|Unique:users',
        'password'  =>'Required|AlphaNum|Between:4,10'
	);

    $validator = Validator::make($data, $rules);

    if ($validator->fails())
	    return Redirect::to('blog')->withErrors($validator->messages());

});


Route::get('/','HomeController@showWelcome');
Route::get('blog','BlogController@home');

Route::post('blog/register',array('before'=>'csrf|valid_user','uses'=>'BlogController@userRegister'));
Route::post('blog/login',array('before'=>'csrf','uses'=>'BlogController@userLogin'));