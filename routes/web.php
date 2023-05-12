<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\controllerAgendamentos;

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

Route::get('/', function () {
    return view('index');
});

Route::post('/addAgendamentos', [controllerAgendamentos::class, 'store']);

Route::get('/consulta', function () { return view('consulta'); });

Route::get('/consultar', [controllerAgendamentos::class, 'consultaragenda']);

Route::get('/editar/{agendas}', [controllerAgendamentos::class, 'Editar']);

Route::get('/excluir', [controllerAgendamentos::class, 'DELETE']);

Route::get('/atualizar', [controllerAgendamentos::class, 'UPDATE']);


