<!DOCTYPE html>
<html>
	<head>
    	<title>BookReader</title>
    	<meta charset="UTF-8">
    	<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="/css/app.css" />
	</head>
	<body>
		<div class="centered-content">
			<div id="page-container">
				<div class="top_banner">
					<img src="/img/baneris.png" alt="bookreader-girl" width="100" height="125"/>
					<img class="book-reader" src="/img/banner-logo.png" alt="bookreader-logo"/>
				</div>




                        <!-- @if (Auth::guest())
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif -->




				<nav id="main-menu" class="section">
    				<div class="center-area">
						<a id="main-menu-home" class="home-selected" href="/home">Home</a>
						<a class="comic-selected" href="/book_list">Book List</a>
						<a class="book-selected" href="/user">User</a>
					</div>
				</nav>
				@yield('content')
			</div>
		</div>
		<div id="login-register">
			@if (Auth::guest())
				<p><a href="/login">Login</a> or <a href="/register">Register</a></p>
				@else
					<p><a href="#">{{Auth::user()->name}}
						@if (Auth::user()->admin == 1)
							(admin)
						@endif
					</a>

					<a href="{{ route('logout') }}"
                        onclick="event.preventDefault(); 
                        document.getElementById('logout-form').submit();">Logout </a>
                                        
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">{{ csrf_field() }} </form></p>
			@endif
			<div class="search-bar">
				<form action="/action_page.php">
					<select id="select-type" onchange="barSelect()">
						<option>Book Name</option>
						<option>Author</option>
					</select>
					<input type="text" id="search" size="20">
					<input type="button" id="search-button" name="button-search" value="Search">
				</form>
			</div>
		</div>

	</body>
</html>