<?php
use App\Http\Controllers\VisiteurController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RapportController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/inscription', [VisiteurController::class, 'showRegistrationForm'])->name('inscription');
Route::post('/inscription',  [VisiteurController::class, 'register'])->name('inscription.register');
Route::get('/connexion', [VisiteurController::class, 'showLoginForm'])->name('login.form');
Route::post('/connexion',  [VisiteurController::class, 'login'])->name('login');
Route::get('/acceuil', function () {
    return view('acceuil');
})->name('acceuil');
Route::get('/rapports', [RapportController::class, 'create'])->name('rapport.create');
Route::post('/rapports', [RapportController::class, 'store'])->name('rapport.store');




