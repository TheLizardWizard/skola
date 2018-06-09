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
				<li>Book1</li>
				<li>Book2</li>
			</ul>
		</div>
	</div>
@endsection