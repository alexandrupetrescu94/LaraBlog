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
<h3>Login</h3>
<form role="form" action="{{URL::to('signin')}}" method='POST' >
	<label for="email">Email</label>
	<input id='email' type='text' name='email' value="" placeholder='email'/>
	<label for="password">Password</label>
	<input id='password' type='password' name='password' value="" placeholder='Password'/>
	<input type="submit" value='Login'/>
	{{ Form::token() }}
</form>
@stop