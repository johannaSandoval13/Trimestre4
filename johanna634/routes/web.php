<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CountryController;

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
//Ruta para acceder con el métdodo get a una vista

Route::get('/', function () { 
    return view('country.store');
});

//Rutas de controlador para gestionar paises:
//En su orden: get, post
//Revise la lógica y el nombre (name) de la ruta al final:

Route::get('/country', [CountryController::class, 'index'])->name('country.index');
Route::post('/country', [CountryController::class, 'store'])->name('country.store');















//Route::get('/country/edit/{id}', [CountryController::class, 'actionEdit'])->name('country.action.edit');
//Route::put('/country/{id}', [CountryController::class, 'edit'])->name('country.edit');









Route::get('/home', function () { 
    return view('home');
});