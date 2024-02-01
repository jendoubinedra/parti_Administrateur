<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tweet;

class ControllerTweet extends Controller
{
    //get all the Tweets 
    public function getall(){
        $tweets=Tweet::all();
        return view('tweets/tweet',compact('tweets'));
    }

    // get the Tweets by id
    public function getbyid($id){
        $tweets = Tweet::find($id);
        $tweets=[$tweets];
        return view('tweets/tweet',compact('tweets'));
    }

    // add new Tweets
    public function add(Request $request){
        Tweet::create($request->all());
        return redirect(route('tweets.index'));
    }

      // edit Tweets
      public function edit($id){ 
        $tweet = Tweet::find($id);  
        return view('tweets/edit_tweet',compact('tweet')) ;
    }

    // update Tweets
    public function update($id, Request $request){       
        $tweet=Tweet::find($id);
        $tweet->update($request->all());
        return redirect(route('tweets.index'));
    }

    //delete Tweets
    public function delete($id){
        $tweet=Tweet::find($id);
        $tweet->delete();
        return redirect(route('tweets.index'));
    }
}
