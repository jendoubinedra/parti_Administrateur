<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use App\Models\Video;

class ControllerVideo extends Controller
{
    //get all the videos 
    public function getall(){
        $videos=Video::all();
        return view('videos/video',compact('videos'));
    }

    // get the video by id
    public function getbyid($id){
        $videos = Video::find($id);
        $videos=[$videos];
        return view('videos/video',compact('videos'));
    }

    // add new video
    public function add(Request $request){
        $video=time().$request->vpath->getClientOriginalName();
        $request->vpath->move(public_path('videos'),$video);
        $data = $request->all();
        $data['vpath'] = 'videos/'.$video;
        Video::create($data);
        return redirect(route('videos.index'));
    }

      // edit video
      public function edit($id){ 
        $video = Video::find($id); 
        return view('videos/edit_video',compact('video')) ;
    }

    // update video
    public function update($id, Request $request){       
        $video=Video::find($id);
        if (File::exists(public_path($video->vpath))) {
            File::delete(public_path($video->vpath));
        }
        $videos=time().$request->vpath->getClientOriginalName();
        $request->vpath->move(public_path('videos'),$videos);
        $data = $request->all();
        $data['vpath'] = 'videos/'.$videos;
        $video->update($data);
        return redirect(route('videos.index'));
    }

    //delete video
    public function delete($id){
        $video=Video::find($id);
        $video->delete();
        return redirect(route('videos.index'));
    }
}
