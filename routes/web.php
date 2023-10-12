<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TasksController;
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

Route::get('/', [TasksController::class, 'home'], function () {
});

Route::get('/home', [TasksController::class, 'home'])->name('home');

//Route::get('/dashboard',[TasksController::class, 'index'], function () {
//    return view('dashboard');
//})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware('auth')->group(function (){
    Route::get('/dashboard', [TasksController::class, 'index'])->name('dashboard');
    Route::post('/dashboard', [TasksController::class, 'store'])->name('tasks.store');
    Route::patch('/dashboard', [TasksController::class, 'update'])->name('tasks.update');
    Route::delete('/dashboard', [TasksController::class, 'delete'])->name('tasks.delete');
});

require __DIR__.'/auth.php';
