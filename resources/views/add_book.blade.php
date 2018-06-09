@extends('layout.main_layout')

@section('content')
	<div id="user-tab-id" class="user-tab">
		<div class="user-head">
			<a class="comic-selected" href="/user/my_book">My Books</a>
			<a class="comic-selected" href="/user/add_book">Add book</a>
			<a class="comic-selected" href="/user/delete">Delete</a>
			<a class="comic-selected" href="/user/hide">Hide</a>
			<a class="comic-selected" href="/user/edit">Edit</a>
		</div>
		<div>
			@include('layout.error')
		</div>
		<div class="user-body">
			{!! Form::open(['url' => 'user/add_book/submit']) !!}
				<div class="user-form">
					{{Form::label('title','Title')}}
					{{Form::text('title', '', ['class' => 'form-control', 'placeholder' => 'Enter title'])}}
				</div>
				<div class="user-form">
					{{Form::label('Genre', 'Action')}}
					{{Form::checkbox('action', 'value', false)}}
					{{Form::label('Genre', 'Adventure')}}
					{{Form::checkbox('adventure', 'value', false)}}
					{{Form::label('Genre', 'Comedy')}}
					{{Form::checkbox('comedy', 'value', false)}}
					{{Form::label('Genre', 'Drama')}}
					{{Form::checkbox('drama', 'value', false)}}
					{{Form::label('Genre', 'Fantasy')}}
					{{Form::checkbox('fantasy', 'value', false)}}
					{{Form::label('Genre', 'Historical')}}
					{{Form::checkbox('historical', 'value', false)}}
					{{Form::label('Genre', 'Horror')}}
					{{Form::checkbox('horror', 'value', false)}}
					{{Form::label('Genre', 'Kids')}}
					{{Form::checkbox('kids', 'value', false)}}
					{{Form::label('Genre', 'Military')}}
					{{Form::checkbox('military', 'value', false)}}
					{{Form::label('Genre', 'Music')}}
					{{Form::checkbox('music', 'value', false)}}
					{{Form::label('Genre', 'Mystery')}}
					{{Form::checkbox('mystery', 'value', false)}}
					{{Form::label('Genre', 'Psychological')}}
					{{Form::checkbox('psychological', 'value', false)}}
					{{Form::label('Genre', 'Romance')}}
					{{Form::checkbox('romance', 'value', false)}}
					{{Form::label('Genre', 'Sci-Fi')}}
					{{Form::checkbox('sci-fi', 'value', false)}}
					{{Form::label('Genre', 'Sports')}}
					{{Form::checkbox('sports', 'value', false)}}
				</div>
				<div class="user-form">
					{{Form::label('summary','Summary')}}
					{{Form::textarea('summary', '', ['class' => 'form-control', 'placeholder' => 'Enter Summary'])}}
				</div>
				<div class="user-form">
					{{Form::label('book-choose','Choose book (.pdf)')}}
					{{Form::file('bookFile')}}
				</div>
				<div class="user-form">
					{{Form::label('cover-choose','Choose cover')}}
					{{Form::file('bookFile')}}
				</div>
				<div>
					{{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
				</div>
			{!! Form::close() !!}
		</div>
	</div>
@endsection