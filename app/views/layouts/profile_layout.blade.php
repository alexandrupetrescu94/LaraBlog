<!DOCTYPE html>
<html>
<head>
	<title>Profile</title>
	@yield('assets')
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
	<a href="{{URL::to('/logout');}}">Logout</a>

	@yield('profile')

	@yield('articles')
	
</body>
</html>