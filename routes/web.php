<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\BioController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\EmailController;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/courses', [CourseController::class, 'index'])->name('course.index');
Route::get('/gallery', [GalleryController::class, 'index'])->name('gallery.index');
Route::get('/descargar-biografia', [BioController::class, 'index'])->name('bio.index');
Route::get('/contact', [ContactController::class, 'index'])->name('contact.index');

Route::post('/send-email', [EmailController::class, 'index'])->name('email.index');

