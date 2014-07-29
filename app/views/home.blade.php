<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
</head>
<body>
	<div class="container">
		<li>
			<a href="{{URL::to('home')}}">Home</a>
		</li>

		<li>
			<a href="{{URL::to('register')}}">Register</a>
		</li>
			
		<li>
			<a href="{{URL::to('login')}}">Login</a>
		</li>
		
		<li>
			<a href="{{URL::to('profile')}}">Profile</a>
		</li>
	</div>
	<p>{{Session::get('message')}}</p>
</body>
</html>