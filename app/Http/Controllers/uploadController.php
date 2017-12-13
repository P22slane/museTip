<?php

namespace App\Http\Controllers;

use Illuminate\Http\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Redirect;

class uploadController extends Controller
{
    public function upload(){
        return view('toplist');
    }

    public  function store(request $request){

        if($request->hasFile('song')){
            print_r($request->song->getClientMimeType());
            if($request->song->getClientMimeType() =="audio/mp3" || $request->song->getClientMimeType() =="audio/wav"){
                $request->file('song');

                $songName = str_slug($request->song->getClientOriginalName(), "-");
                print_r($songName);

                //$request->song->getClientOriginalName();
                //Storage::putFile('public',$request->file('song'));
                Storage::putFileAs('public', $request->file('song'),$songName );

                //print_r($request->song->path());



                //test
                //$json = json_decode(file_get_contents('http://localhost:5002/hello'), true);
                $json = json_decode(file_get_contents('http://localhost:5002/predict/L1VzZXJzL3BhYXN1a2UvTGFyYXZlbC9NdXNlVGlwMi9NdXNlVGlwMi9zdG9yYWdlL2FwcC9wdWJsaWMv/'.$songName), true);
                //$json = json_decode(file_get_contents('http://localhost:5002/predict/L3Zhci93d3cvaHRtbC9sYXJhdmVsL3N0b3JhZ2UvYXBwL3B1YmxpYy8=/'.$songName), true);
                print_r($json);


                Storage::delete($songName);
                return view('songData')->with('songData',$json)->with('fileName',$songName);
                //return $request->song->path();
                //return $request->song->getClientOriginalName();
                //return $request->song->store('public');
                //return Storage::putFile('public',$request->file('song'));
                //return $request->song->storeAs('public','');
            }else{
                return Redirect::back()->withErrors("Wrong file type");
                //return "Wrong file type";
            }


        }else{
            return Redirect::back()->withErrors("No file selected");
            //return "No file selected";
        }


    }

    public function show(){
        return Storage::files('public');
    }
}
