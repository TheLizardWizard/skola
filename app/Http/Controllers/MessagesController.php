<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\books;

class MessagesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

	public function viewMyBooks(){

      $books = books::where([
          ['user', '=', \Auth::user()->id],
      ])->select('title')->get();

        return view('my_books',compact('books'));
    }




    public function viewBookList(){

      $books = books::where([
          ['id', '>=', \Auth::user()->id],
      ])->select('title')->get();

        return view('book_list',compact('books'));
    }





    public function viewForm(){
        return view('add_book');
    }

    public function submitForm(Request $request){
      //parbauda pievienoto gramatu
        $data = $request->all();
        $rules = [
          'title' => 'required|string|max:100',
          'summary' => 'required|string|max:2000',
          // 'bookFile' => 'required|mimes:.pdf|max:10000'
        ];
        $validatedData =\Validator::validate($data, $rules);

        // if (input::hasFile('bookFile')) {
        // 	$file=input::file('bookFile');
        // }

        $catergory = '';
        if(isset($data['action'])){
          $catergory .= ',action';
        }
        if(isset($data['adventure'])){
          $catergory .= ',adventure';
        }
        if(isset($data['comedy'])){
          $catergory .= ',comedy';
        }
        if(isset($data['drama'])){
          $catergory .= ',drama';
        }
        if(isset($data['fantasy'])){
          $catergory .= ',fantasy';
        }
        if(isset($data['historical'])){
          $catergory .= ',historical';
        }
        if(isset($data['horror'])){
          $catergory .= ',horror';
        }
        if(isset($data['kids'])){
          $catergory .= ',kids';
        }
        if(isset($data['military'])){
          $catergory .= ',military';
        }
        if(isset($data['music'])){
          $catergory .= ',music';
        }
        if(isset($data['mystery'])){
          $catergory .= ',mystery';
        }
        if(isset($data['psychological'])){
          $catergory .= ',psychological';
        }
        if(isset($data['romance'])){
          $catergory .= ',romance';
        }
        if(isset($data['sci-fi'])){
          $catergory .= ',sci-fi';
        }
        if(isset($data['sports'])){
          $catergory .= ',sports';
        }





        $books = books::create([
          'title' => $data['title'],
          'summary' => $data['summary'],
          'category' => $catergory,
          'pdf' => false,
          'cover' => false,
          'user' => \Auth::user()->id
        ]);
        if($books){
          $request->session()->flash('status', 'Your book was successfully submited!');
        }else{
            $request->session()->flash('status', 'UPZ... something went wrong...');

        }

       return redirect()->route('bookViewForm');

    }
}