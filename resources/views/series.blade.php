@extends('layout.main_layout')

@section('content')

		@if(isset($books) && count($books) > 0 )
			@foreach ($books as $book)
				<div id="information" class="book-information">
					<h2>{{$book->title}} information</h2>
					<img src="images/and-then-it-happened.jpg" alt="and-then-it-happened" />
					<p class="book-info">Genres: {{$book->category}}</p>
					<p class="author-info">Author: <a href="">Author {{$book->user}}</a></p>
					<p>Summmary: </p>
					<p>{{ $book->summary }}</p>
				</div>
			@endforeach
		@endif
@endsection