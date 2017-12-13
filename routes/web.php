<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('songCheck');
});
Route::get('/down', 'HomeController@index');

Auth::routes();


Route::get('/home', 'HomeController@index')->name('home');

//view song data page
Route::get('/songData', function () {
    return view('songData');
});

//inserted song add page
//Route::get('/addSong', '');
Route::get('/addSong', function () {
    return view('addSong');
});


//insert My Song to database
Route::post('mysong/submit', 'MySongController@submit');


//view song inser page
Route::get('/insert', function () {
    return view('songInsert');
});
//insert song to database
Route::post('/music/submit', 'MusicController@submit');

//mysongs list
Route::get('/mySongs','MySongController@getMySongs');

//Insert my song
Route::post('/addMySongs','MySongController@addMySongs');

//get songs from database
Route::get('/toplist','MusicController@getMusic');

//examplePage call
Route::get('/examplePage','MusicController@getMusicFromFile');

//insert picked song into playlist tabel
Route::get('/playlist/add/{song_id}','PlayListController@addSong');

//get playlist from database
Route::get('/playlist2','PlayListController@getPlaylist');

//get MySongs from database
Route::get('/playlist','MySongController@getMySongs');


//Song upload
Route::get('upload','uploadController@upload');
Route::post('/store','uploadController@store');
Route::get('/show','uploadController@show');


Route::get('/phpData', function () {
    return view('phpdata');
});