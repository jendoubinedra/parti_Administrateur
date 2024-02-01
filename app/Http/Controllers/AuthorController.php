<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Author;
use App\Models\Countrie;
use App\Models\Specialsession;

class AuthorController extends Controller
{
     //get all the Authors 
     public function getall(){
        $authors=Author::with('special','countrie')->get();
        $countries=Countrie::all();
        $specialsessions=Specialsession::all();
        return view('authors/author',compact('authors','countries','specialsessions')) ;
    }
    // get the Author by id
    public function getbyid($id){
        $authors=Author::with('special','countrie')->find($id);
        $authors=[$authors];
        return view('authors/author',compact('authors'));
    }

    // add new Author
    public function add(Request $request){
        Author::create($request->all());
        return redirect(route('authors.index'));
    }

    // edit Author
    public function edit($id){ 
        $author=Author::with('special','countrie')->find($id);      
        $countries=Countrie::all();
        $specialsessions=Specialsession::all();
        return view('authors/edit_author',compact('author','countries','specialsessions')) ;
    }


    // update Author
    public function update($id, Request $request){       
        $auth=Author::find($id);
        $auth->update($request->all());
        return redirect(route('authors.index'));
    }

    //delete Author
    public function delete($id){
        $auth=Author::find($id);
        $auth->delete();
        return redirect(route('authors.index'));
    }
}
