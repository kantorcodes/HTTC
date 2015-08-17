@extends('layouts/default')

{{-- Queue styles/scripts --}}
{{ Asset::queue('welcome', 'platform/sass/home.scss', 'style') }}
@section('styles')
  <link href='//fonts.googleapis.com/css?family=Questrial' rel='stylesheet' type='text/css'>
  <link href='//fonts.googleapis.com/css?family=Sanchez:400italic,400' rel='stylesheet' type='text/css'>
@endsection


@section('main')

	@foreach($posts as $post)
		@include('partials.article',['article' => $post])
	@endforeach

@endsection