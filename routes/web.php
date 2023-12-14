<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ResumeController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProjectsController;


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
Route::get('/projects', [ProjectsController::class, 'projects'])->name('project');
Route::get('/resume', [ResumeController::class, 'resume'])->name('resume');
Route::get('/contact', [ContactController::class, 'contact'])->name('contact');
Route::post('/submit-form', [ContactController::class, 'submitForm'])->name('submitForm');