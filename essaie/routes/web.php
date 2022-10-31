<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\EtudiantController;

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
})->name('lave');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get("/etudiant",[EtudiantController::class, "cool"])->name("etudiant");

Route::get("/etudiant/create", [EtudiantController::class, "create"])->name("etudiant.create");
Route::post("/etudiant/create", [EtudiantController::class, "store"])->name("etudiant.ajouter");


