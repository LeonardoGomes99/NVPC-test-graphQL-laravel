<?php

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

Route::get('/', function () {
    return view('index');
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