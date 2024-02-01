<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use App\Models\Organizer;

class ControllerOrganizer extends Controller
{
     //get all the organizers 
     public function getall(){
        $organizers=Organizer::all();
        return view('organizers/organizer',compact('organizers'));
    }

    // get the organizer by id
    public function getbyid($id){
        $organizers = Organizer::find($id);
        $organizers=[$organizers];
        return view('organizers/organizer',compact('organizers'));
    }

    // add new organizer
    public function add(Request $request){
        $image=time().$request->src->getClientOriginalName();
        $request->src->move(public_path('images'),$image);
        $data = $request->all();
        $data['src'] = 'images/'.$image;
        Organizer::create($data);
        return redirect(route('organizers.index'));
    }

     // edit organizer
     public function edit($id){ 
        $organizer = Organizer::find($id);  
        return view('organizers/edit_organizer',compact('organizer')) ;
    }

    // update organizer
    public function update($id, Request $request){       
        $organizer = Organizer::find($id);
        if (File::exists(public_path($organizer->src))) {
            File::delete(public_path($organizer->src));
        }
        $image=time().$request->src->getClientOriginalName();
        $request->src->move(public_path('images'),$image);
        $data = $request->all();
        $data['src'] = 'images/'.$image;
        $organizer->update($data);
        return redirect(route('organizers.index'));
    }

    //delete organizer
    public function delete($id){
        $keynote=Organizer::find($id);
        $keynote->delete();
        return redirect(route('organizers.index'));
    }
}
