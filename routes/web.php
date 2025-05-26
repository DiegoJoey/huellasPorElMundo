<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AnimalController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DonationController;
use App\Http\Controllers\VolunteerController;
use Illuminate\Support\Facades\Auth;


Route::get('/', function () {
    return view('index');
});

Route::get('/sobreNosotros', function () {
    return view('sobreNosotros');
});

Route::get('/ayudanos', function () {
    return view('ayudanos');
});

Route::get('/adopciones', [AnimalController::class, 'index']);

Route::get('/contacto', function () {
    return view('contacto');
});

Route::get('/login', function () {
    return view('login');
});

Route::post('/loginn', [LoginController::class, 'login']);

Route::get('/register', function () {
    return view('register');
});

Route::get('/post', [AnimalController::class, 'showFormularioPublicar']);

Route::post('/user/create', [UserController::class, 'store']);

Route::post('/post/animal', [AnimalController::class, 'store']);

Route::post('/destroy/{id}', [AnimalController::class, 'destroy']);

Route::get('/adoptar/{id}', [AnimalController::class, 'showAdoptarForm'])->name('adoptar.form');

Route::post('/adoptar/{id}', [AnimalController::class, 'adoptar'])->name('adoptar.update');


Route::get('/donar/alimentos/{id}', [DonationController::class, 'alimentos']);
Route::post('/donar/alimentos', [DonationController::class, 'donarAlimentos']);

Route::get('/donar/juguetes/{id}', [DonationController::class, 'juguetes']);
Route::post('/donar/juguetes', [DonationController::class, 'donarJuguetes']);

Route::get('/donar/comodidad/{id}', [DonationController::class, 'comodidad']);
Route::post('/donar/comodidad', [DonationController::class, 'donarComodidad']);


Route::get('/volunteer', function () {
    return view('volunteer');
});

Route::post('/volunteer/store', [VolunteerController::class, 'store']);



Route::post('/logout', function () {
    Auth::logout();
    return redirect('/');
})->name('logout');
