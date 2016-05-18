@extends('app.layouts.index')

@section('content')

	<form action="{{ action('App\SignInController@signIn') }}" method="POST" autocomplete="off">

		<div class="field">
			<div class="in-field">
				<input type="text" name="email" value="{{ old('email') }}" placeholder="E-mail">
			</div>
		</div>

		<div class="field">
			<div class="in-field">
				<input type="password" name="password" placeholder="Password">
			</div>
		</div>

		@if (count($errors) > 0)
			<div class="field field-error">
				<div class="in-field">
			        @foreach ($errors->all() as $error)
			            <p>{{ $error }}</p>
			        @endforeach
				</div>
			</div>
		@endif

		<div class="field">
			<div class="in-field">
				<input type="submit" value="sign in">
			</div>
		</div>

		<input type="hidden" name="_method" value="POST">
	    <input type="hidden" name="_token" value="{{ csrf_token() }}">

	</form>

@endsection
