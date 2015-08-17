@extends('layouts/default')

{{-- Queue styles/scripts --}}
{{ Asset::queue('welcome', 'platform/sass/home.scss', 'style') }}

@section('main')

<div class="device-background">
  <div class="device-text">
    <h1>How To Train A Chicken</h1>
    <p>Training Chickens Requires Serious Work</p>
  </div>
  <div class="device">
    <div class="screen"></div>
  </div>
</div>
@endsection