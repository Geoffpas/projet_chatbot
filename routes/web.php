<?php

use App\Http\Controllers\AccueilController;
use App\Http\Controllers\ConnexionController;
use App\Http\Controllers\EnregistrementController;
use App\Http\Controllers\MessageController;
use Illuminate\Support\Facades\Route;

/*****************
 * ACCUEIL
 */
Route::get('/', [AccueilController::class, 'index'])
    ->name('accueil');

/*****************
 * CONNEXION ET ENREGISTREMENT
 */
Route::get("/connexion", [ConnexionController::class, 'create'])
->name('connexion.create')
->middleware('guest');

Route::post("/connexion", [ConnexionController::class, 'authentifier'])
->name('connexion.authentifier');

Route::post("/deconnexion", [ConnexionController::class, 'deconnecter'])
->name('deconnexion');

Route::get("/enregistrement",[EnregistrementController::class, 'create'])
->name('enregistrement.create');

Route::post("/enregistrement", [EnregistrementController::class, 'store'])
->name('enregistrement.store');

/*****************
 * MESSAGES
 */
Route::get('/messages', [MessageController::class, 'index'])
    ->name('messages.index')
    ->middleware('auth');

Route::post('/messages', [MessageController::class, 'conversation'])
    ->name('messages.conversation')
    ->middleware('auth');
