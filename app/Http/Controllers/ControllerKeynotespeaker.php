<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Keynotespeaker;

class ControllerKeynotespeaker extends Controller
{
      //get all the speaker 
      public function getall(){
        $keynotes=Keynotespeaker::all();
        return view('keyNoteSpeakers/speaker',compact('keynotes'));
    }

    // get the speaker by id
    public function getbyid($id){
        $keynotes = Keynotespeaker::find($id);
        $keynotes=[$keynotes];
        return view('keyNoteSpeakers/speaker',compact('keynotes'));
    }

    // add new speaker
    public function add(Request $request){
        Keynotespeaker::create($request->all());
        return redirect(route('keynotes.index'));
    }

     // edit speaker
     public function edit($id){ 
        $keynote = Keynotespeaker::find($id);;    
        return view('keyNoteSpeakers/edit_speaker',compact('keynote')) ;
    }

    // update speaker
    public function update($id, Request $request){       
        $keynote=Keynotespeaker::find($id);
        $keynote->update($request->all());
        return redirect(route('keynotes.index'));
    }

    //delete speaker
    public function delete($id){
        $keynote=Keynotespeaker::find($id);
        $keynote->delete();
        return redirect(route('keynotes.index'));
    }
}
