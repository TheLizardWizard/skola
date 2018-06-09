<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function getHome(){
    	return view('home');
    }
    public function getBookList(){
    	return view('book_list');
    }
    public function getLogin(){
    	return view('login');
    }
    public function getRegister(){
    	return view('register');
    }
}
