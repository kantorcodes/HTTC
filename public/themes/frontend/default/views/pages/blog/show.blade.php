@extends('layouts/default')

{{-- Queue styles/scripts --}}
{{ Asset::queue('welcome', 'platform/sass/home.scss', 'style') }}

@section('main')

@include('partials.article')

@endsection