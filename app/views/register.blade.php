@extends('layouts.form_layout')

@section('assets')
<?php
	echo HTML::script('js/jquery-1.9.0.js');
	echo HTML::script('js/home.js');
	echo HTML::script('js/bootstrap.min.js');
	echo HTML::style('css/home.css');
	echo HTML::style('css/bootstrap.min.css');
	?>
@stop



@section('form')
<h3>Register</h3>
<form role="form" action="{{URL::to('signup')}}" method='POST' >
	<label for="email">Email address</label>
	<input id='email' type='email' name='email'  value="" placeholder='Email'/>
	<label for="username">Username</label>
	<input id='username' type='text' name='username'  value="" placeholder='Username'/>
	<label for="password">Password</label>
	<input id='password' type='password' name='password' value="" placeholder='Password'/>
	<input type="submit" value='Submit'/>
	{{ Form::token() }}
</form>
<div>{{ Session::get('message') }}</div>
@stop
