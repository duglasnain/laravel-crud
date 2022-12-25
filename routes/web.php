<?php

use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');
Route::get('/about', function(){
    return view('about');
})->name('about');
Route::get('/contacts', function(){
    return view('contacts');
})->name('contacts');

Route::post('/contacts/submit', [ContactController::class, 'submit'])->name('submit-message');

Route::get('/contacts/all', [ContactController::class, 'allMessages'])->name('all-messages');

Route::get('/contacts/all/{id}', [ContactController::class, 'oneMessage'])->name('one-message');
Route::get('/contacts/all/{id}/update', [ContactController::class, 'updateMessage'])->name('update-message');
Route::post('/contacts/all/{id}/update', [ContactController::class, 'submitUpdateMessage'])->name('submit-update-message');


Route::get('/contacts/all/{id}/delete', [ContactController::class, 'deleteMessage'])->name('delete-message');