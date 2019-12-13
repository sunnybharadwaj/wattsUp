<?php



Route::get('/', function () {
    return view('coming_soon');
});

Route::post('/inquiry', 'InquiriesController@store');