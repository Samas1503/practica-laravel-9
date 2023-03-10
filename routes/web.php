<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\PersonController;
use App\Http\Controllers\UserController;

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
    return redirect('/proyectos');
});

// Route::get('/proyectos', [ProjectController::class, 'index']) -> name('projects');
// Route::get('/proyectos/{id}', [ProjectController::class, 'project']) -> name('project');

Route::resource('proyectos', ProjectController::class);
// Route::resource('tareas', TaskController::class);
// Route::resource('personas', PersonController::class);
// Route::resource('usuarios', UserController::class);

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

