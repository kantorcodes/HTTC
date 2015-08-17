@extends('layouts/default')

@section('main')

<article class="row">
	<h1>Contact The Author</h1>
	{!! Form::open(['method' => 'POST']) !!}

	<div class="row">
		{!! Form::label('email') !!}
		{!! Form::text('from') !!}
	</div>
	<div class="row">
			{!! Form::label('name') !!}
			{!! Form::text('name') !!}
	</div>

	<div class="row">
		{!! Form::label('subject') !!}
		{!! Form::text('subject') !!}
	</div>
	<div class="row">
		{!! Form::label('body') !!}
		{!! Form::textarea('body') !!}
	</div>

	{!! Form::submit('Send Message',['class' => 'btn']) !!}
	{!! Form::close() !!}
</article>
@endsection