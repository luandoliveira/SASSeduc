<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\ControllerAdmin;
use App\Http\Controllers\ControllerFase;
use App\Http\Controllers\ControllerProjeto;
use App\Http\Controllers\FornecedorController;

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

/* Route::get('/editar-usuario', function () {
    return view('admin.formCadastroUser');
});
Route::get('/usuario-permissoes', function () {
    return view('admin.permissoesUser');
});
Route::get('/lista', function () {
    return view('admin.listaUsers');
}); */


Route::get('/', function () {
    return view('welcome');
});

// todas as rotas resources
Auth::routes();

//
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Login do Google
Route::get('auth/google', [App\Http\Controllers\Auth\LoginController::class, 'redirectToGoogle'])->name('auth.google');
Route::get('auth/google/callback', [App\Http\Controllers\Auth\LoginController::class, 'handleGoogleCallback']);

//rota para editar perfil no modal
Route::post('/atualizar-perfil', [App\Http\Controllers\ControllerUser::class, 'profileupdate'])->name('profile.update')->middleware('auth');
Route::get('/meu-perfil', [App\Http\Controllers\ControllerUser::class, 'profile'])->name('profile')->middleware('auth');

//rotas do administrador
Route::resource('/admin/usuarios', ControllerAdmin::class)->middleware('auth');

//Rota para a view de editar Permissão
Route::get('/admin/usuarios-permissao/{id}', 'App\Http\Controllers\ControllerAdmin@permissao')->name('permissao')->middleware('auth');

//Rota para enviar as permissões do Usuário
Route::post('/admin/usuarios-permissao/{id}', 'App\Http\Controllers\ControllerAdmin@editPermissao')->name('editpermissao')->middleware('auth');

//rotas Projeto
Route::resource('/projetos', ControllerProjeto::class)->middleware('auth');

//rotas para Editar Fase
Route::get('/projetos/fase/{id}', 'App\Http\Controllers\ControllerProjeto@fase')->name('fase')->middleware('auth');
Route::post('/projetos/fase/{id}', 'App\Http\Controllers\ControllerProjeto@editFase')->name('projetos.editfase')->middleware('auth');

//Rotas para Fornecedores
Route::resource('/fornecedores', FornecedorController::class)->middleware('auth');