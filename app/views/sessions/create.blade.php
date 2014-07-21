@extends('layouts.default')

@section('content')
	<h1>Sign In</h1>

	{{ Former::open()->route('login_path')->method('POST') }}

	{{ Former::email('email')->required() }}
	{{ Former::password('password')->required() }}

	{{ Former::actions()->primary_submit('Sign In')->inverse_reset('Reset') }}

	{{Former::close()}}
@stop