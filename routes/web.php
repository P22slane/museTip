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
    return view('welcome');
});
Route::get('/down', 'HomeController@index');

Auth::routes();


Route::get('/home', 'HomeController@index')->name('home');


//old list
Route::get('/toplist2', function () {
    return view('toplist');
});

//view song data page
Route::get('/songData', function () {
    return view('songData');
});

//view song inser page
Route::get('/insert', function () {
    return view('songInsert');
});
//insert song to database
Route::post('/music/submit', 'MusicController@submit');


//get songs from database
Route::get('/toplist','MusicController@getMusic');

//insert picked song into playlist tabel
Route::get('/playlist/add/{song_id}','PlayListController@addSong');

//get playlist from database
Route::get('/playlist','PlayListController@getPlaylist');


//Song upload
Route::get('upload','uploadController@upload');
Route::post('/store','uploadController@store');
Route::get('/show','uploadController@show');


