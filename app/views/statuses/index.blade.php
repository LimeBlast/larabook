@extends('layouts.default')

@section('content')
	<h1>Post a Status</h1>

	{{ Former::open()->route('statuses_path')->method('POST') }}

	<fieldset>
		{{ Former::textarea('body')->label('Status') }}
	</fieldset>

	{{ Former::actions()->primary_submit('Post Status')->inverse_reset('Reset') }}

	{{Former::close()}}

	<h2>Statuses</h2>

	@foreach($statuses as $status)
		<article>
			{{ $status->body }}
		</article>
	@endforeach
@stop