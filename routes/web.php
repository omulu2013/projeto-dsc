<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CursoController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/apresentacao', [ CursoController::class, 'index' ]);

/*Route::get('/apresentacao', function () {
    return view('apresentacao');
});*/

Route::get('/apresentacao-disciplina', function () {
    return view('disciplina');
});