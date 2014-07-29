<!DOCTYPE html>
<html>
<head> 
	<title>Join Us</title>
	@yield('assets')
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>


	<h3>Welcome</h3>
	<p></p>
	<div class="blk-border">
  		@yield('form')
	  	@if ( $errors->count() > 0 )
	      <ul>
	        @foreach( $errors->all() as $message )
	          <li>{{ $message }}</li>
	        @endforeach
	      </ul>
	    @endif
  	</div>
  	<p>{{Session::get('message')}}</p>

</body>
</html>