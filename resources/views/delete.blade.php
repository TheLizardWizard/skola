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
		<div class="user-body">
			<ul>
				{!! Form::open(['url' => route('bookViewMyDelete')]) !!}
					@if(isset($books) && count($books) > 0 )
						@foreach ($books as $book)

							<li>
								{{Form::label('title', $book->title)}}
								<a href="/user/delete/{{ $book->id }}" class="btn">Delete</a>
							</li>
						@endforeach
					@else
						<li>No books</li>
					@endif
				{!! Form::close() !!}
			</ul>
		</div>
	</div>
@endsection