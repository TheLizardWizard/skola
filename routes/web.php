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
// Route::get('/user/edit', function () {
//     return view('edit');
// });

Route::get('/book_list', 'MessagesController@viewBookList')->name('bookViewBookList');

Route::get('/user/add_book', 'MessagesController@viewForm')->name('bookViewForm');
Route::post('/user/add_book', 'MessagesController@submitForm')->name('bookSubmitForm');

Route::get('/user/my_book', 'MessagesController@viewMyBooks')->name('bookViewMyBooks');

Route::get('/user/delete', 'MessagesController@viewMyDelete')->name('bookViewMyDelete');
Route::get('/user/delete/{id}', 'MessagesController@deleteMyBook')->name('bookDeleteMyBook');

Route::get('/user/edit', 'MessagesController@viewMyEdit')->name('bookViewMyEdit');
Route::get('/user/edit/{id}', 'MessagesController@editMyEdit')->name('bookEditMyEdit');
Route::post('/user/edit/{id}', 'MessagesController@submitMyEdit')->name('bookSubmitMyEdit');


//Route::post('/register/submit', 'RegisterController@submit');

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
