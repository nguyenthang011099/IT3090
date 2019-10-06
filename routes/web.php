<?php



Route::get('/', function () {
    return view('welcome');
});
Route::get('/list','NCCController@show');
