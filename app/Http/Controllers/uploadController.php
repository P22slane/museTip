<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class uploadController extends Controller
{
    public function upload(){
        return view('toplist');
    }

    public  function store(request $request){

        if($request->hasFile('song')){
            $request->file('song');

            //return $request->song->path();
            return $request->song->getClientOriginalName();
            //return $request->song->store('public');
            //return Storage::putFile('public',$request->file('song'));
            //return $request->song->storeAs('public','');

        }else{
            return "No file selected";
        }


    }

    public function show(){
        return Storage::files('public');
    }
}
