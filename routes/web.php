<?php

use App\Http\Controllers\DirecteurController;
use App\Http\Controllers\EnseignantController;
use App\Http\Controllers\LibraryController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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



Route::get('/', function () {
    return view('home');
});


Route::get('/students', [StudentController::class, 'index'])->name('students.index');
Route::get('/students/create', [StudentController::class, 'create'])->name('students.create');
Route::post('/students', [StudentController::class,'store'])->name('students.store');
Route::get('/students/{student}', [StudentController::class,'show'])->name('students.show');
Route::get('/students/{student}/edit', [StudentController::class, 'edit'])->name('students.edit');
Route::put('/students/{student}', [StudentController::class, 'update'])->name('students.update');
Route::delete('/students/{student}', [StudentController::class, 'destroy'])->name('students.destroy');

Route::get('/enseignants', [EnseignantController::class, 'index'])->name('enseignants.index');
Route::get('/enseignants/create', [EnseignantController::class, 'create'])->name('enseignants.create');
Route::post('/enseignants', [EnseignantController::class,'store'])->name('enseignants.store');
Route::get('/enseignants/{enseignant}', [EnseignantController::class,'show'])->name('enseignants.show');
Route::get('/enseignants/{enseignant}/edit', [EnseignantController::class, 'edit'])->name('enseignants.edit');
Route::put('/enseignants/{enseignant}', [EnseignantController::class, 'update'])->name('enseignants.update');
Route::delete('/enseignants/{enseignant}', [EnseignantController::class, 'destroy'])->name('enseignants.destroy');

Route::get('/directors', [DirecteurController::class, 'index'])->name('directeurs.index');
Route::get('/directors/create', [DirecteurController::class, 'create'])->name('directeurs.create');
Route::post('/directors', [DirecteurController::class,'store'])->name('directeurs.store');
Route::get('/directors/{directeur}', [DirecteurController::class,'show'])->name('directeurs.show');
Route::get('/directors/{directeur}/edit', [DirecteurController::class, 'edit'])->name('directeurs.edit');
Route::put('/directors/{directeur}', [DirecteurController::class, 'update'])->name('directeurs.update');
Route::delete('/directors/{directeur}', [DirecteurController::class, 'destroy'])->name('directeurs.destroy');

Route::get('/libraries', [LibraryController::class, 'index'])->name('libraries.index');
Route::get('/libraries/create', [LibraryController::class, 'create'])->name('libraries.create');
Route::post('/libraries', [LibraryController::class,'store'])->name('libraries.store');
Route::get('/libraries/{library}', [LibraryController::class,'show'])->name('libraries.show');
Route::get('/libraries/{library}/edit', [LibraryController::class, 'edit'])->name('libraries.edit');
Route::put('/libraries/{library}', [LibraryController::class, 'update'])->name('libraries.update');
Route::delete('/libraries/{library}', [LibraryController::class, 'destroy'])->name('libraries.destroy');

