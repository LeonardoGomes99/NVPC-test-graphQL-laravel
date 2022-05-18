<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\GithubController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::prefix('search')->group(function () {

    //buscar usuario
    Route::get('/user/{nome}', [GithubController::class, 'searchByName']);

    //buscar todos os repositorios do usuario
    Route::get('/repos/all/{nome}', [GithubController::class, 'searchByAllRepos']);

    //buscar repositorio
    Route::get('/repos/{nome}/{repos}', [GithubController::class, 'searchByRepos']);
    
    //buscar linguagens usadas no repositorio
    Route::get('/repos/languages/{nome}/{repos}', [GithubController::class, 'searchByReposLanguages']);

    Route::get('/view', [GithubController::class, 'return_view']);
});