<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<?php
	echo HTML::script('js/jquery-1.9.0.js');
	echo HTML::script('js/profile.js');
	echo HTML::script('js/bootstrap.min.js');
	echo HTML::style('css/home.css');
	echo HTML::style('css/bootstrap.min.css');
	?>
</head>
<body>

<nav class="navbar navbar-default" role="navigation">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="{{URL::to('#home')}}">Blog</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="{{URL::to('#register')}}">Register</a></li>
        <li><a href="{{URL::to('#login')}}">Login</a></li>
        <li><a href="{{URL::to('profile')}}">Profile</a></li>
      </ul>
      <form class="navbar-form navbar-right" role="search">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
      </form>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

@include('register')
@include('login')
</body>
</html>