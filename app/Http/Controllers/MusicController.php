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


    public function getMusicFromFile(){

        //CSV file read
        $file_n = storage_path('app/public/hitData.csv');
        //url('public/example.csv');
        $file = fopen($file_n, "r");
        //print_r($file);
        $hole_data = array();
        while ( ($data = fgetcsv($file, 200, ",")) !==FALSE) {
            $all_data = array(
                'file_name' => $data[0],
                'duration' => $data[1],
                'mfcc' => $data[2],
                'tempo' => $data[3],
                'beats' => $data[4],
                'loudness' => $data[5],
                'energy' => $data[6],
                'class' => $data[7]
            );
            //$all_data = $name. " ".$y_harmonic." ".$y_percussive." ".$tempo." ".$beats." ".$loudness." ".$energy." ".$hit;

            array_push($hole_data, $all_data);
        }
        fclose($file);
        //print_r($hole_data[6]);

        return view('examplePage')->with('songData',$hole_data[6]);
    }
}
