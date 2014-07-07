@extends('layouts.default')

@section('content')
	<h1>Register!</h1>

	{{ Former::open()->route('register_path')->method('POST') }}

	<fieldset>
		{{ Former::legend('Details')}}
		{{ Former::text('username')->required() }}
		{{ Former::email('email')->required() }}
		{{ Former::password('password')->required() }}
		{{ Former::password('password_confirmation')->required() }}
	</fieldset>

	{{ Former::actions()->primary_submit('Sign Up')->inverse_reset('Reset') }}

	{{Former::close()}}
@stop