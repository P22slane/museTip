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
            //print_r($request->song->path());

            //Py code run
            //$command = escapeshellcmd('/Users/paasuke/Laravel/MuseTip2/MuseTip2/storage/app/public/pyScrips/hello.py');
            //$output = shell_exec($command);
            //return $output;


            $file_n = storage_path('app/public/example.csv');
            //url('public/example.csv');
            $file = fopen($file_n, "r");
            //print_r($file);
            $hole_data = array();
            while ( ($data = fgetcsv($file, 200, ",")) !==FALSE) {
                $all_data = array(
                    'name' => $data[0],
                    'y_harmonic' => $data[1],
                    'y_percussive' => $data[2],
                    'tempo' => $data[3],
                    'beats' => $data[4],
                    'loudness' => $data[5],
                    'energy' => $data[6],
                    'hit' => $data[7]
            );
                //$all_data = $name. " ".$y_harmonic." ".$y_percussive." ".$tempo." ".$beats." ".$loudness." ".$energy." ".$hit;

                array_push($hole_data, $all_data);
            }
            fclose($file);
            print_r($hole_data[0]);


            return view('songData')->with('songData',$hole_data[0]);
            //return $request->song->path();
            //return $request->song->getClientOriginalName();
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
