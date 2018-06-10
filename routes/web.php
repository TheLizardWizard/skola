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
//Route::get('/login', 'PagesController@getLogin');
//Route::get('/register', 'PagesController@getRegister');
//Route::get('/book_list', 'PagesController@getBookList');

Route::get('/user', function () {
    return view('user');
});
Route::get('/genres', function () {
    return view('genres');
});
Route::get('/user/edit', function () {
    return view('edit');
});

Route::get('/book_list', 'MessagesController@viewBookList')->name('bookViewBookList');
Route::get('/user/add_book', 'MessagesController@viewForm')->name('bookViewForm');
Route::post('/user/add_book', 'MessagesController@submitForm')->name('bookSubmitForm');
Route::get('/user/my_book', 'MessagesController@viewMyBooks')->name('bookViewMyBooks');


//Route::post('/register/submit', 'RegisterController@submit');

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
