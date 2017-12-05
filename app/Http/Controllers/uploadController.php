<?php

namespace App\Http\Controllers;

use Illuminate\Http\File;
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
            $songName = $request->song->getClientOriginalName();
            //Storage::putFile('public',$request->file('song'));
            Storage::putFileAs('public', $request->file('song'),$request->song->getClientOriginalName() );

            //print_r($request->song->path());

            //Py code
            //print_r("start Py code");
            //$command = escapeshellcmd('/Users/paasuke/Laravel/MuseTip2/MuseTip2/storage/app/public/pyScrips/main.py');
            //$output = shell_exec($command);
            //print_r($output);

            //$request = new \GuzzleHttp\Psr7\Request('GET', 'http://httpbin.org');

            //$client = new \GuzzleHttp\Client();
            //$res = $client->request('GET','http://localhost:5002/hello');

            //test
            //$json = json_decode(file_get_contents('http://localhost:5002/hello'), true);
            $json = json_decode(file_get_contents('http://localhost:5002/predict/L1VzZXJzL3BhYXN1a2UvTGFyYXZlbC9NdXNlVGlwMi9NdXNlVGlwMi9zdG9yYWdlL2FwcC9wdWJsaWMv/'.$songName), true);
            //$json = json_decode(file_get_contents('http://localhost:5002/predict/L3Zhci93d3cvaHRtbC9sYXJhdmVsL3N0b3JhZ2UvYXBwL3B1YmxpYy8=/'.$songName), true);
            print_r($json);


            //$ch = curl_init();

            //curl_setopt($ch, CURLOPT_URL, 'http://localhost:5002/hello');
            //curl_setopt($ch, CURLOPT_URL, 'http://localhost:5002/predict/L1VzZXJzL3BhYXN1a2UvTGFyYXZlbC9NdXNlVGlwMi9NdXNlVGlwMi9zdG9yYWdlL2FwcC9wdWJsaWMv/Thunder.mp3');

            //curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            //$file = curl_exec($ch);
            //curl_close($ch);
            //print_r($file[1]);



            //test with song
            //$json = json_decode(file_get_contents('http://localhost:5002/predict/L1VzZXJzL3BhYXN1a2UvTGFyYXZlbC9NdXNlVGlwMi9NdXNlVGlwMi9zdG9yYWdlL2FwcC9wdWJsaWMv/Thunder.mp3
//'), true);

            //print_r($json);
            /*
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
            //print_r($hole_data[1]);
               */
            Storage::delete($songName);
            return view('songData')->with('songData',$json)->with('fileName',$songName);
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
