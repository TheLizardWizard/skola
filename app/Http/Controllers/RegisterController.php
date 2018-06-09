<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function submit(Request $request){
    	$validated = $this -> validate($request, [
    		'username' => 'required',
    		'email' => 'required',
    		'password' => 'required',
    		'password2' => 'required'
    	]);
    	return 'True';
    }
}
