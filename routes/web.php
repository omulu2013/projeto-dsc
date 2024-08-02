<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CursoController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/curso-listagem', [ CursoController::class, 'index' ]);

/*Route::get('/apresentacao', function () {
    return view('apresentacao');
});*/

Route::get('/apresentacao-disciplina', function () {
    return view('disciplina');
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
