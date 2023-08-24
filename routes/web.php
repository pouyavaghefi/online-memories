<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Network\MemoryController;
use App\Http\Controllers\Network\NotebookController;
use App\Http\Controllers\Network\UserController;

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

Route::middleware('auth')->group(function () {
    Route::get('/{id}/memories', [MemoryController::class, 'showMemories'])->name('show.memories');
    Route::get('/{id}/notebooks', [NotebookController::class, 'showNotebooks'])->name('show.notebooks');

    Route::get('/user-information', [UserController::class, 'viewForm'])->name('user.information');
    Route::post('/user-information', [UserController::class, 'submitForm']);

    Route::post('/new-memory', [MemoryController::class, 'submitNew'])->name('submit.memory');
    Route::post('/new-notebook', [NotebookController::class, 'submitNew'])->name('submit.notebook');
});

//Route::get('/',[]);

Auth::routes();



