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




    public function viewMyEdit() {
    	$books = books::where([
          ['user', '=', \Auth::user()->id],
      ])->select('title', 'id')->get();

    	return view('edit',compact('books'));
    }

    public function editMyEdit() {
    	return view('edit_book');
    }





    // public function submitMyEdit($id){

    //     $booksEdit = books::where('id', '=', $id)->update([
    //     	'title' => $title,
    //     	'catergory' => $catergory,
    //     	'summary' => $summary
    //         ]);

    //    return redirect()->route('bookViewMyEdit');

    // }
    public function submitMyEdit($id, Request $request){
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





        $books = books::update([
          'title' => $data['title'],
          'summary' => $data['summary'],
          'category' => $catergory,
        ]);
        if($books){
          $request->session()->flash('status', 'Your book was successfully EDITED!');
        }else{
            $request->session()->flash('status', 'UPZ... something went wrong...');

        }

       return redirect()->route('viewMyEdit');

    }










	public function viewMyBooks(){

      $books = books::where([
          ['user', '=', \Auth::user()->id],
      ])->select('title')->get();

        return view('my_books',compact('books'));
    }



    public function viewMyDelete(){


      $books = books::where([
          ['user', '=', \Auth::user()->id],
      ])->select('title','id')->get();

      // $booksDelete = books::where([
      //     ['id', '=', $id],
      // ])->delete();

    	return view('delete',compact('books'));
    }




    public function deleteMyBook($id){

    	$delete = books::where([
          ['id', '=', $id],
      ])->delete();
    	return redirect()->route('bookViewMyDelete');
    }




    public function viewBookList(){

      $books = books::where([
          ['title', '!=', \Auth::user()->id],
      ])->select('title','user','id')->get();

        return view('book_list',compact('books'));
    }

    public function viewBook($id){

      $books = books::where([
          ['id', '=', $id],
      ])->select('title', 'category', 'summary', 'user')->get();

      return view('series',compact('books'));
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
          $catergory .= 'Action';
        }
        if(isset($data['adventure'])){
          $catergory .= ', Adventure';
        }
        if(isset($data['comedy'])){
          $catergory .= ', Comedy';
        }
        if(isset($data['drama'])){
          $catergory .= ', Drama';
        }
        if(isset($data['fantasy'])){
          $catergory .= ', Fantasy';
        }
        if(isset($data['historical'])){
          $catergory .= ', Historical';
        }
        if(isset($data['horror'])){
          $catergory .= ', Horror';
        }
        if(isset($data['kids'])){
          $catergory .= ', Kids';
        }
        if(isset($data['military'])){
          $catergory .= ', Military';
        }
        if(isset($data['music'])){
          $catergory .= ', Music';
        }
        if(isset($data['mystery'])){
          $catergory .= ', Mystery';
        }
        if(isset($data['psychological'])){
          $catergory .= ', Psychological';
        }
        if(isset($data['romance'])){
          $catergory .= ', Romance';
        }
        if(isset($data['sci-fi'])){
          $catergory .= ', Sci-Fi';
        }
        if(isset($data['sports'])){
          $catergory .= ', Sports';
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