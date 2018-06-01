<?php
Route::get('/', function () {
    return view('/phoneBook');
});

Route::get('/{name}', function () {
    return redirect('/')->where('name','[A-Za-z]+');
});