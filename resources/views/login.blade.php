@extends('layout.main_layout')

@section('content')
	<div id="login-div">
		<div class="warning">
			@include('layout.error')
		</div>
		{!! Form::open(['url' => 'login/submit']) !!}
			<div class="login">
				{{Form::label('username','Username')}}
				{{Form::text('username', '', ['class' => 'login-form', 'placeholder' => 'Enter your username'])}}
			</div>
			<div class="login">
				{{Form::label('password','Password')}}
				{{Form::password('password', '', ['class' => 'login-form', 'placeholder' => 'Enter your password'])}}
			</div>
			<div class="login-btn">
				{{Form::submit('Login', ['class' => 'btn btn-primary'])}}
			</div>
		{!! Form::close() !!}
	</div>
@endsection