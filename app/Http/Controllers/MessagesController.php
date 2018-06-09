<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MessagesController extends Controller
{
    public function submit(Request $request){
    	$validatedData = $this -> validate($request, [
    		'title' => 'required',
    		'summary' => 'required'
    	]);

    	return 'TRUE';
    }
}
