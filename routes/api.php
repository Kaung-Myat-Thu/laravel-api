<?php

use App\Http\Controllers\ContactController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/contacts', [ContactController::class, 'contacts']);

Route::post('/add-contact', [ContactController::class, 'addContact']);

Route::get('/edit-contact/{id}', [ContactController::class, 'editContact']);

Route::post('/update-contact/{id}', [ContactController::class, 'updateContact']);

Route::delete('/delete-contact/{id}', [ContactController::class, 'deleteContact']);
