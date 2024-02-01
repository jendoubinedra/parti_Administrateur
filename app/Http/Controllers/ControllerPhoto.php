<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use App\Models\Photo;


class ControllerPhoto extends Controller
{
    //get all the photos 
    public function getall(){
        $photos=Photo::all();
        return view('photos/photo',compact('photos'));
    }

    // get the photo by id
    public function getbyid($id){
        $photos = Photo::find($id);
        $photos=[$photos];
        return view('photos/photo',compact('photos'));
    }

    // add new photo
    public function add(Request $request){
        $image=time().$request->vpath->getClientOriginalName();
        $request->vpath->move(public_path('images'),$image);
        $data = $request->all();
        $data['vpath'] = 'images/'.$image;
        Photo::create($data);
        return redirect(route('photos.index'));
    }

      // edit photo
      public function edit($id){ 
        $photo = Photo::find($id);
        return view('photos/edit_photo',compact('photo')) ;
    }


    // update photo
    public function update($id, Request $request){       
        $photo=Photo::find($id);
        if (File::exists(public_path($photo->vpath))) {
            File::delete(public_path($photo->vpath));
        }
        $image=time().$request->vpath->getClientOriginalName();
        $request->vpath->move(public_path('images'),$image);
        $data = $request->all();
        $data['vpath'] = 'images/'.$image;
        $photo->update($data);
        return redirect(route('photos.index'));
    }

    //delete photo
    public function delete($id){
        $photo=Photo::find($id);
        $photo->delete();
        return redirect(route('photos.index'));
    }
}
