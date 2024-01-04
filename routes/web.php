<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\indexController;
use App\Http\Controllers\tasksController;

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

Route::get('/',[indexController::class,'viewIndex'])->name('index');

//page inscription
Route::get('/inscription',[indexController::class,'viewInscription'])->name('inscription');

//create compte
Route::post('/create',[indexController::class,'inscription'])->name('createUser');

//log in
Route::post('/login',[indexController::class,'login'])->name('login');
//log out
Route::get('/logout',[indexController::class,'logout'])->name('logout');

//tasks listing
Route::get('/tasks',[tasksController::class,'tasksListing'])->name('tasks');

//add task
Route::post('/createTask',[tasksController::class,'taskCreate'])->name('createTask');

//edit task
Route::put('/editTask/{task}',[tasksController::class,'taskEdit'])->name('editTask');

//delete task
Route::delete('/deleteTask/{task}',[tasksController::class,'taskDelete'])->name('deleteTask');


///hello
