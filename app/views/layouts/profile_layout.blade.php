<!DOCTYPE html>
<html>
<head>
	<title></title>
	@yield('assets')
</head>
<body>
<a href="{{URL::to('/logout');}}">Logout</a>

	@yield('profile')

	@yield('articles')
</body>
</html>