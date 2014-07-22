@extends('layouts.default')

@section('content')
	<div class="status-post">
		{{ Former::open()->route('statuses_path')->method('POST') }}

		{{ Former::textarea('body')->label('Status')->placeholder("What's on your mind?") }}

		{{ Former::actions()->primary_submit('Post Status')->inverse_reset('Reset') }}

		{{Former::close()}}
	</div>

	@foreach($statuses as $status)
		@include ('statuses.partials.status')
	@endforeach
@stop