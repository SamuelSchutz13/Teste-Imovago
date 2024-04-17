<?php

use App\Http\Controllers\PersonController;
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

Route::prefix('/')->group(function (){
    Route::get('', [PersonController::class, 'index'])->name('index');
    Route::delete('/delete', [PersonController::class, 'deletarPessoa'])->name('deletar.pessoa');
    Route::get('/cadastrar', [PersonController::class, 'cadastrarPessoa'])->name('cadastrar.pessoa');
});

