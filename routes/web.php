<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index2');
})->name('index.quis');
Route::get('medical', function() {
    return view('medical');
})->name('medical');
Route::get('resiko', function() {
    return view('resiko');
})->name('resiko');
Route::get('ttd', function() {
    return view('ttd');
})->name('ttd');
Route::get('sandbox', function(){
    return view('sandbox');
});
Route::get('dapur', 'QuisController@dapur')->name('quis.dapur');
Route::post('visitor-data', 'QuisController@dataVisitor')->name('visitor.data');
Route::post('visitor-medic', 'QuisController@dataMedic')->name('visitor.medic');
Route::post('visitor-risk', 'QuisController@dataResiko')->name('visitor.risk');