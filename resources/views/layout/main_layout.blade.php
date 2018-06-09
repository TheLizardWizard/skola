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
			<p><a href="/login">Login</a> or <a href="/register">Register</a></p>
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