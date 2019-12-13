<?php



Route::get('/', function () {
    return view('coming_soon');
});
Route::get('/thankyou', function () {
    return view('thankyou');
});

Route::post('/inquiry', 'InquiriesController@store');