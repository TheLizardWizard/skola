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
				<tr class="book-name">
					<td class="book-name"><a href="">Two kinds of truth</a></td>
					<td class="author"><a href="">Michael Connelly</a></td>
				</tr>
				<tr class="book-name">
					<td class="book-name"><a href="">Two kinds of truth</a></td>
					<td class="author"><a href="">Michael Connelly</a></td>
				</tr>
				<tr class="book-name">
					<td class="book-name"><a href="">Two kinds of truth</a></td>
					<td class="author"><a href="">Michael Connelly</a></td>
				</tr>
			</tbody>
		</table>
	</div>
@endsection