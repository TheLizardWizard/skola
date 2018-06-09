<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'PagesController@getHome');
Route::get('/home', 'PagesController@getHome');
Route::get('/login', 'PagesController@getLogin');
Route::get('/register', 'PagesController@getRegister');
Route::get('/book_list', 'PagesController@getBookList');

Route::get('/user', function () {
    return view('user');
});
Route::get('/genres', function () {
    return view('genres');
});
Route::get('/user/add_book', function () {
    return view('add_book');
});
Route::get('/user/edit', function () {
    return view('edit');
});
Route::get('/user/my_book', function () {
    return view('my_books');
});

Route::post('/user/add_book/submit', 'MessagesController@submit');

Route::post('/register/submit', 'RegisterController@submit');

