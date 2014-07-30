<div class="container">
	<h3>Register</h3>
	<form role="form" action="{{URL::to('signup')}}" method='POST' >
		<div class="form-group">
			<label for="email">Email address</label>
			<input id='email' type='email' name='email'  value="" placeholder='Email'/>
		</div>

		<div class="form-group">
			<label for="username">Username</label>
			<input id='username' type='text' name='username'  value="" placeholder='Username'/>
		</div>

		<div class="form-group">
			<label for="password">Password</label>
			<input id='password' type='password' name='password' value="" placeholder='Password'/>	
		</div>
		
		<button type="submit" class="btn btn-default">Submit</button>
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