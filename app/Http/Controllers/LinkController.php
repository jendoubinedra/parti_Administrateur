<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Link;
use App\Models\Page;

class LinkController extends Controller
{
       //get all the links 
       public function getall(){
        $links=Link::with('page')->get();
        $pages=Page::all();
        return view('links/link',compact('links','pages'));
    }

    // get the links by id
    public function getbyid($id){
        $links = Link::with('page')->find($id);
        $links=[$links];
        return view('links/link',compact('links'));
    }

    // add new link
    public function add(Request $request){
        Link::create($request->all());
        return redirect(route('links.index'));
    }

     // edit link
     public function edit($id){ 
        $link = Link::with('page')->find($id); 
        $pages=Page::all();   
        return view('links/edit_link',compact('link','pages')) ;
    }

    // update link
    public function update($id, Request $request){       
        $link=Link::find($id);
        $link->update($request->all());
        return redirect(route('links.index'));
    }


    //delete link
    public function delete($id){
        $link=Link::find($id);
        $link->delete();
        return redirect(route('links.index'));
    }
}
