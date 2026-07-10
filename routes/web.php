<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('landing_page');
});

Route::get('/devi', function () {
    return view('peta_devi');
});
Route::get('/zia', function () {
    return view('peta_zia');
});
Route::get('/zikra', function () {
    return view('peta_zikra');
});
