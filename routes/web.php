<?php

use App\Http\Controllers\CommentaireController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [CommentaireController::class, 'home']);
Route::get('/create', [CommentaireController::class, 'create'])->name('create');
Route::post('/store/commentaire', [CommentaireController::class, 'store'])->name('store.commentaire');
Route::delete('/delete/{id}', [CommentaireController::class, 'delete']);
Route::get('/edit/{id}', [CommentaireController::class, 'edit']);
Route::post('/update/{id}', [CommentaireController::class, 'update']);