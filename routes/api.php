<?php

use App\Http\Controllers\CursoController;
use App\Http\Controllers\ConteudoProgramaticoController;
use App\Http\Controllers\ScormController;
use App\Http\Controllers\FormatoController;
use App\Http\Controllers\GeradorCatalogoController;
use App\Http\Controllers\MatriculaController;
use App\Http\Controllers\NivelController;
use App\Http\Controllers\PersonalizacaoController;
use App\Http\Controllers\PlanoController;
use App\Http\Controllers\SetupController;
use App\Http\Controllers\SuporteController;
use App\Http\Controllers\TreinamentoController;
use App\Models\Curso;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::resource('cursos', CursoController::class);
Route::resource('conteudosprogramaticos', ConteudoProgramaticoController::class);
Route::post('/conteudosprogramaticos/topicos/', [ConteudoProgramaticoController::class, 'cadastrarTopicos']);
Route::resource('scorms', ScormController::class);
Route::resource('formatos', FormatoController::class);
Route::resource('geradorcatalogos', GeradorCatalogoController::class);
Route::resource('matriculas', MatriculaController::class);
Route::resource('niveis', NivelController::class);
Route::resource('personalizacoes', PersonalizacaoController::class);
Route::resource('planos', PlanoController::class);
Route::resource('setups', SetupController::class);
Route::resource('suportes', SuporteController::class);
Route::resource('treinamentos', TreinamentoController::class);



/*Route::get('/cursos', [CursoController::class, 'index']);
Route::post('/cursos', [CursoController::class, 'store']);*/
