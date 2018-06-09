@extends('layout.main_layout')

@section('content')
<div id="latest-menu">
	<h1>Latest update</h1>
	<div class="row">
		{!! Form::open(['url' => '/home']) !!}
			<div class="latest-book">
				{{Form::label('book','And Then It Happened')}}
				{{ Form::image('img/and-then-it-happened.jpg', 'book', ['class' => 'latest-cover']) }}
			</div>
			<div class="latest-book">
				{{Form::label('book','And Then It Happened')}}
				{{ Form::image('img/and-then-it-happened.jpg', 'book', ['class' => 'latest-cover']) }}
			</div>
			<div class="latest-book">
				{{Form::label('book','And Then It Happened')}}
				{{ Form::image('img/and-then-it-happened.jpg', 'book', ['class' => 'latest-cover']) }}
			</div>
			<div class="latest-book">
				{{Form::label('book','And Then It Happened')}}
				{{ Form::image('img/and-then-it-happened.jpg', 'book', ['class' => 'latest-cover']) }}
			</div>
			<div class="latest-book">
				{{Form::label('book','And Then It Happened')}}
				{{ Form::image('img/and-then-it-happened.jpg', 'book', ['class' => 'latest-cover']) }}
			</div>
		{!! Form::close() !!}
	</div>
</div>
@endsection