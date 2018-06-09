@extends('layout.main_layout')

@section('content')
	<div id="register-div">
		<div class="warning">
			@include('layout.error')
		</div>
		{!! Form::open(['url' => 'register/submit']) !!}
			<div class="register">
				{{Form::label('username','Username')}}
				{{Form::text('username', '', ['class' => 'register-form', 'placeholder' => 'Enter your username'])}}
			</div>
			<div class="register">
				{{Form::label('email','E-mail Address')}}
				{{Form::text('email', '', ['class' => 'register-form', 'placeholder' => 'Enter E-mail Address'])}}
			</div>
			<div class="register">
				{{Form::label('password','Password')}}
				{{Form::password('password', '', ['class' => 'register-form', 'placeholder' => 'Enter your password'])}}
			</div>
			<div class="register">
				{{Form::label('password2','Re-Password')}}
				{{Form::password('password2', '', ['class' => 'register-form', 'placeholder' => 'Re-enter your password'])}}
			</div>
			<div class="register-btn">
				{{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
			</div>
		{!! Form::close() !!}
	</div>
@endsection