@extends('layouts.default')

@section('content')
	<h1>Register</h1>

	{{ Former::open()->route('register_path')->method('POST') }}

	<fieldset>
		{{ Former::legend('Details')}}
		{{ Former::text('username') }}
		{{ Former::email('email') }}
		{{ Former::password('password') }}
		{{ Former::password('password_confirmation') }}
	</fieldset>

	{{ Former::actions()->primary_submit('Sign Up')->inverse_reset('Reset') }}

	{{Former::close()}}
@stop