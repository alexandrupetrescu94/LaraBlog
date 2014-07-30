<div class="container">
	<h3>Login</h3>
	<form role="form" action="{{URL::to('signin')}}" method='POST' >
		<div class="form-group">
			<label for="email" class="glyphicon glyphicon-envelope"></label>
			<input id='email' type='email' name='email'  value="" placeholder='Email'/>
		</div>

		<div class="form-group">
			<label for="password">Password</label>
			<input id='password' type='password' name='password' value="" placeholder='Password'/>	
		</div>

				<button type="submit" class="btn btn-default">Login</button>
		{{ Form::token() }}
	</form>

	@if ( $errors->count() > 0 )
	    <ul>
	    @foreach( $errors->all() as $message )
	        <li>{{ $message }}</li>
	    @endforeach
	    </ul>
    @endif
</div>