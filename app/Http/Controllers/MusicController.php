<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Music;
use Illuminate\Support\Facades\Auth;


class MusicController extends Controller
{
    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function submit(Request $request){

        $this->validate($request,[
            'song_name'=>'required',
            'artist' => 'required',
            'length' => 'required'
        ]);

        $music = new Music;
        $music->song_name = $request->input('song_name');
        $music->artist = $request->input('artist');
        $music->length = $request->input('length');
        $music->album = $request->input('album');

        $music->save();

        return redirect('/insert')->with('success','Music added');
    }

    public function getMusic(){

        $user = Auth::user();
        //print_r($user->id);

        $music = Music::all();

        return view('toplist')->with('music', $music);
    }
}
