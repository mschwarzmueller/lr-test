@extends('app.layouts.index')

@section('content')

	<form action="{{ action('App\SignUpController@signUp') }}" method="POST" autocomplete="off">

		<div class="field">
			<div class="in-field">
				<input type="text" name="email" value="{{ old('email') }}" placeholder="E-mail">
			</div>
		</div>

		<div class="field field-two clear-fix">
			<div class="in-field">
				<input type="text" name="fname" value="{{ old('fname') }}" placeholder="First name">
			</div>
			<div class="in-field">
				<input type="text" name="lname" value="{{ old('lname') }}" placeholder="Last name">
			</div>
		</div>

		<div class="field field-two clear-fix">
			<div class="in-field">
				<input type="password" name="password" placeholder="Password">
			</div>
			<div class="in-field">
				<input type="password" name="password_confirmation" placeholder="Confirmation Password">
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
				<input type="submit" value="sign up">
			</div>
		</div>

		<input type="hidden" name="_method" value="POST">
	    <input type="hidden" name="_token" value="{{ csrf_token() }}">

	</form>

@endsection
