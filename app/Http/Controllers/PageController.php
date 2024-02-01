<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Page;
use App\Models\Link;

class PageController extends Controller
{

    //get all the page 
    public function getall(){
        $pages=Page::all();
        return view('pages/page',compact('pages'));
    }

    // get the page by id
    public function getbyid($id){
        $pages = Page::find($id);
        $pages=[$pages];
        return view('pages/page',compact('pages'));
    }

    // add new page
    public function add(Request $request){
        Page::create($request->all());
        return redirect(route('pages.index'));
    }

      // edit organizer
      public function edit($id){ 
        $page = Page::find($id);  
        return view('pages/edit_page',compact('page')) ;
    }


    // update page
    public function update($id, Request $request){        
        $page=Page::find($id);
        $page->update($request->all());
        return redirect(route('pages.index'));
    }

    //delete page
    public function delete($id){
        $page=Page::find($id);
        $page->delete();
        return redirect(route('pages.index'));
    }

}
