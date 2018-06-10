@extends('layout.main_layout')

@section('content')
	<div id="book-list">
		<div class="sort-by">
			
		</div>
		<table class="book-table">
			<tbody>
				<tr>
					<td class="series-name">Series Name</td>
					<td class="author-name">Author</td>
				</tr>
				@if(isset($books) && count($books) > 0 )
					@foreach ($books as $book)
						<tr>
							<td class="book-name"><a href="#">{{ $book->title }}</a></td>
							<td class="author">Author {{ $book->user }}</td>
						</tr>
					@endforeach
				@endif
			</tbody>
		</table>
	</div>
@endsection