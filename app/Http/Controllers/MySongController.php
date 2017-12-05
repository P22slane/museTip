<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\MySong;

class MySongController extends Controller
{


    public function submit(Request $request){
        $user = Auth::user();

        $mySong = new MySong;
        $mySong->file_name = $request->input('file_name');
        $mySong->user_id = $user->id;
        $mySong->duration = $request->input('duration');
        $mySong->mfcc = $request->input('mfcc');
        $mySong->tempo = $request->input('tempo');
        $mySong->beats = $request->input('beats');
        $mySong->loudness = $request->input('loudness');
        $mySong->energy = $request->input('energy');
        $mySong->class = $request->input('class');
        $mySong->visible = 'YES';

        $mySong->save();

        return redirect('/addSong')->with('success','Song added');
    }

    public function addSong(){



        return redirect('/mySongs');
    }

    public function getMySongs(){
        $user_id = Auth::user()->id;
        $mySongs = MySong::where('user_id','=',$user_id)->get();
        print_r($mySongs);

        return view('mySongList')->with('mySongs', $mySongs);


    }
}
