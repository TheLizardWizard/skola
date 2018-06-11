<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LanguageController extends Controller
{
    public function chooser() {

    	session::set('locale', Input::get('locale'));
    	return redirect::back();
    }
}
