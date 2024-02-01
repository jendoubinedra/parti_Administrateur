<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Countrie;

class CountrieController extends Controller
{
    //get all the Countrie 
    public function getall(){
        $countries=Countrie::all();
        return view('countries/countrie',compact('countries'));
    }

    // get the Countrie by id
    public function getbyid($id){
        $countries = Countrie::find($id);
        $countries=[$countries];
        return view('countries/countrie',compact('countries'));
    }

    // add new Countrie
    public function add(Request $request){
        Countrie::create($request->all());
        return redirect(route('countries.index'));
    }

     // edit Countrie
     public function edit($id){ 
        $countrie = Countrie::find($id);    
        return view('countries/edit_countrie',compact('countrie')) ;
    }

    // update Countrie
    public function update($id, Request $request){       
        $video=Countrie::find($id);
        $video->update($request->all());
        return redirect(route('countries.index'));
    }

    //delete Countrie
    public function delete($id){
        $video=Countrie::find($id);
        $video->delete();
        return redirect(route('countries.index'));
    }
}
