<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
	  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="{{ $description or 'Raelina Wrote a book yolo.' }}">
    <meta name="author" content="{{ $author or 'Raelina Marie'}}">
    <meta name="rating" content="{{ $rating or 0 }}" />
    <meta name="thumbnail" content="{{$ogimage or ''}}" />
    <meta name="twitter:card" content="{{$twittercard or ''}}">
    <meta name="twitter:site" content="@RaelinaMarie">
    <meta name="twitter:title" content="{{$title or ''}}">
    <meta name="twitter:description" content="{{$description or ''}}">
    <meta name="twitter:creator" content="{{$twittercreator or '@mikenolimits'}}">
    <meta name="twitter:image" content="{{$ogimage or ''}}">
    <!-- Open Graph data -->
    <meta property="og:title" content="{{$title or ''}}" />
    <meta property="og:type" content="{{$ogtype or ''}}" />
    <meta property="og:url" content="{{$ogurl or Request::url() }}" />
    <meta property="og:image" content="{{$ogimage or ''}}" />
    <meta property="og:description" content="{{$description or ''}}" />
    <meta property="og:site_name" content="Raelina Marie" />
    <link rel="canonical" href="{{$canonical or Request::url()}}">
    <link rel="apple-touch-icon" sizes="57x57" href="/favicons/apple-touch-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="/favicons/apple-touch-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="/favicons/apple-touch-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="/favicons/apple-touch-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="/favicons/apple-touch-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="/favicons/apple-touch-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="/favicons/apple-touch-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="/favicons/apple-touch-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="/favicons/apple-touch-icon-180x180.png">
<link rel="icon" type="image/png" href="/favicons/favicon-32x32.png" sizes="32x32">
<link rel="icon" type="image/png" href="/favicons/favicon-194x194.png" sizes="194x194">
<link rel="icon" type="image/png" href="/favicons/favicon-96x96.png" sizes="96x96">
<link rel="icon" type="image/png" href="/favicons/android-chrome-192x192.png" sizes="192x192">
<link rel="icon" type="image/png" href="/favicons/favicon-16x16.png" sizes="16x16">
<link rel="manifest" href="/favicons/manifest.json">
<meta name="apple-mobile-web-app-title" content="Raelina Marie">
<meta name="application-name" content="Raelina Marie">
<meta name="msapplication-TileColor" content="#da532c">
<meta name="msapplication-TileImage" content="/favicons/mstile-144x144.png">
<meta name="theme-color" content="#ffffff">
<meta name="csrf-token" content="{{ csrf_token() }}">

		{{ Asset::queue('modernizr', 'modernizr/js/modernizr.min.js') }}
		{{ Asset::queue('jquery', 'jquery/js/jquery.min.js') }}
		{{ Asset::queue('platform', 'platform/js/platform.js', 'jquery') }}

		{{ Asset::queue('fonts','font-awesome/css/font-awesome.min.css') }}
		{{ Asset::queue('app','platform/sass/app.scss') }}


		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]--> 

		{{-- Compiled styles --}}
		@foreach (Asset::getCompiledStyles() as $style)
			<link href="{{ $style }}" rel="stylesheet">
		@endforeach

		{{-- Call custom inline styles --}}
		@section('styles')
		@show
	</head>
	<body>

	<section class="content">
	@include('partials.navigation')
	</section>
	<section class="content">
	@yield('main')
	</section>

<section class="content">
	@include('partials.footer')
	</section>

	@foreach (Asset::getCompiledScripts() as $url)
    	<script src="{!! $url !!}"></script>
	@endforeach


	<script>
$(document).ready(function() {
  var menuToggle = $('#js-mobile-menu').unbind();
  $('#js-navigation-menu').removeClass("show");

  menuToggle.on('click', function(e) {
    e.preventDefault();
    $('#js-navigation-menu').slideToggle(function(){
      if($('#js-navigation-menu').is(':hidden')) {
        $('#js-navigation-menu').removeAttr('style');
      }
    });
  });
});
	</script>

	</body>
</html>
