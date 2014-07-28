@extends('layouts.profile_layout')

@section('assets')
<?php
	echo HTML::script('js/jquery-1.9.0.js');
	echo HTML::script('js/profile.js');
	echo HTML::script('js/bootstrap.min.js');
	echo HTML::style('css/home.css');
	echo HTML::style('css/bootstrap.min.css');
	?>
@stop

@section('articles')
	<ul>
	@foreach ($articles as $article)
		<li>
			{{$article['title']}}
			Written by: {{$article['user_id']}}
			{{$article['description']}}
		</li>
	@endforeach
	</ul>

@stop