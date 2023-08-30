<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContenteController;
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
Route::get('/', [ContenteController::class, 'menu'])->name('home.page');
Route::get('/contact', [ContenteController::class, 'contacto'])->name('contacto.page');
Route::get('/about_us', [ContenteController::class, 'sobreNos'])->name('about_us.page');
Route::get('/service', [ContenteController::class, 'service'])->name('service.page');
Route::get('/blog', [ContenteController::class, 'blog'])->name('blog.page');

Route::get('/seguranca', [ContenteController::class, 'seguranca'])->name('seguranca.pages');
Route::get('/infra_estrutura', [ContenteController::class, 'infraEstrutura'])->name('infra_estrutura.pages');
Route::get('/rd', [ContenteController::class, 'rd'])->name('rd.pages');
Route::get('/gestao_projecto', [ContenteController::class, 'getaoProjecto'])->name('gestao_projecto.pages');
Route::get('/erpnext', [ContenteController::class, 'erpnext'])->name('erpnext.pages');
Route::get('/analise_sistema', [ContenteController::class, 'analiseSistemas'])->name('analise_sistema.pages');

Route::get('/service_detail', function () {
    return view('content.service_detail');
});

Route::get('/admin', function () {
    return view('layout.admin');
});



Route::get('/blog_detail', function () {
    return view('content.blog_detail');
});
