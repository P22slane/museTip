<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Playlist;
use App\Music;


class PlayListController extends Controller
{
    public function addSong($song_id){
        $user = Auth::user();

        $playlist = new Playlist;
        $playlist->user_id = $user->id;
        $playlist->musics_id = $song_id;
        $playlist->visible = 'YES';

        $playlist->save();

        return redirect('/toplist')->with('success','Song added into Playlist');


    }

    public function getPlaylist(){

        $user = Auth::user();
        $user_id = Auth::user()->id;
        $songsInPlaylist = Playlist::where('user_id','=',$user_id)->first();
        $playlist = Music::where('id','=',$songsInPlaylist->musics_id)->get();
        print_r($playlist);

        //print_r($user->id);

        #$playlist = Playlist::where('user_id','=',$user->id)->where('visible','=','YES')->get();
        #$playlist = Playlist::select('musics.song_name','musics.artist','musics.length')->join('musics','musics.id','=','playlists.musics_id')->get();
        #print_r($playlist);

        return view('playlist')->with('playlist', $playlist);
    }
}
//-> join('toplist','playlist.musics_id','=','toplist.id')


