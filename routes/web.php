<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/sobreNosotros', function () {
    return view('sobreNosotros');
});

Route::get('/ayudanos', function () {
    return view('ayudanos');
});

Route::get('/adopciones', function () {
    return view('adopciones');
});

Route::get('/contacto', function () {
    return view('contacto');
});