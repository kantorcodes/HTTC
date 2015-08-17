@extends('layouts/default')

{{-- Page title --}}
@section('title')
{{{ trans('platform/users::auth/form.login.legend') }}} ::
@parent
@stop

{{-- Queue Assets --}}
{{ Asset::queue('platform-validate', 'platform/js/validate.js', 'jquery') }}

{{-- Inline Scripts --}}
@section('scripts')
@parent
@stop

{{-- Page content --}}
@section('page')

<div class="row">

	<div class="col-md-6 col-md-offset-3">

		{{-- Form --}}
		<form id="login-form" role="form" method="post" accept-char="UTF-8" autocomplete="off" data-parsley-validate>

			{{-- Form: CSRF Token --}}
			<input type="hidden" name="_token" value="{{ csrf_token() }}">

			<div class="panel panel-default">

				<div class="panel-heading">{{{ trans('platform/users::auth/form.login.legend') }}}</div>

				<div class="panel-body">

					{{-- Email Address --}}
					<div class="form-group{{ Alert::onForm('email', ' has-error') }}">

						<label class="control-label" for="email">{{{ trans('platform/users::auth/form.email') }}}</label>

						<input class="form-control" type="email" name="email" id="email" value="{{{ Input::old('email') }}}" placeholder="{{{ trans('platform/users::auth/form.email_placeholder') }}}"
						required
						autofocus
						data-parsley-trigger="change"
						data-parsley-error-message="{{{ trans('platform/users::auth/form.email_error') }}}">

						<span class="help-block">
							{{{ Alert::onForm('email') ?: trans('platform/users::auth/form.email_help') }}}
						</span>

					</div>

					{{-- Password --}}
					<div class="form-group{{ Alert::onForm('password', ' has-error') }}">

						<label class="control-label" for="password">{{{ trans('platform/users::auth/form.password') }}}</label>

						<input class="form-control" type="password" name="password" id="password" placeholder="{{{ trans('platform/users::auth/form.password_placeholder') }}}"
						required
						data-parsley-trigger="change"
						data-parsley-error-message="{{{ trans('platform/users::auth/form.password_error') }}}">

						<span class="help-block">
							{{{ Alert::onForm('password') ?: trans('platform/users::auth/form.password_help') }}}
						</span>

					</div>

					{{-- Remember me --}}
					<div class="form-group">

						<label for="remember">

							<input type="checkbox" name="remember" id="remember" value="1"{{ Input::old('remember') ? ' checked="checked"' : null }} />

							{{{ trans('platform/users::auth/form.login.remember-me') }}}

						</label>

					</div>

					<hr>

					{{-- Form actions --}}
					<div class="form-group">

						<button class="btn btn-primary btn-block" type="submit">{{{ trans('platform/users::auth/form.login.submit') }}}</button>

						<p class="help-block text-center">{{{ trans('platform/users::auth/form.login.no_account') }}} <a href="{{ URL::route('user.register') }}">{{{ trans('platform/users::auth/form.login.register') }}} </a> {{{ trans('platform/users::auth/form.login.or_recover') }}}  <a href="{{ URL::route('user.password_reminder') }}">{{{ trans('platform/users::auth/form.login.forgot-password') }}}</a></p>

					</div>

				</div>

			</div>

		</form>

		{{-- Social Logins --}}
		@if (count($connections) > 0)
		<div class="panel panel-default">

			<div class="panel-heading">{{{ trans('platform/users::auth/form.login-social.legend') }}}</div>

			<div class="panel-body">

				@foreach ($connections as $slug => $connection)

				<a href="{{ url()->route('user.oauth.auth', $slug) }}" class="btn btn-default btn-block">
					<i class="fa fa-{{ $slug }}"></i> {{ $connection['driver'] }}
				</a>

				@endforeach

			</div>

		</div>
		@endif

	</div>

</div>

@stop
