<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContenteController;
use App\Http\Controllers\ContactoController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\EmailController;
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

Route::get('/cism', [ContenteController::class, 'cism'])->name('trabalhos.cism');
Route::get('/autoridadeTributaria', [ContenteController::class, 'autoridadeTributaria'])->name('trabalhos.autoridadeTributaria');
Route::get('/jsh', [ContenteController::class, 'jsh'])->name('trabalhos.jsh');
Route::get('/inav', [ContenteController::class, 'inav'])->name('trabalhos.inav');
Route::get('/ministerio', [ContenteController::class, 'ministerio'])->name('trabalhos.ministerio');
Route::get('/revimo', [ContenteController::class, 'revimo'])->name('trabalhos.revimo');
Route::get('/counterpart', [ContenteController::class, 'counterpart'])->name('trabalhos.counterpart');
Route::get('/stae', [ContenteController::class, 'stae'])->name('trabalhos.stae');
Route::get('/edm', [ContenteController::class, 'edm'])->name('trabalhos.edm');
Route::get('/mozaBanco', [ContenteController::class, 'mozaBanco'])->name('trabalhos.mozaBanco');
Route::get('/centralMedicamento', [ContenteController::class, 'centralMedicamento'])->name('trabalhos.centralMedicamento');

Route::get('/send', [EmailController::class, 'send'])->name('send');


Route::get('blog/{id}', [BlogController::class, 'show']);

Route::post('/contacto_gravar', [ContactoController::class, 'store'])->name('contacto.gravar');
Route::get('/blog_index', [BlogController::class, 'index'])->name('blog.index');
Route::post('/blog_gravar', [BlogController::class, 'store'])->name('blog.gravar');
Route::get('/blog_registo', [BlogController::class, 'registo_blog'])->name('blog.registro');
Route::get('/service_detail', function () {
    return view('content.service_detail');
});

Route::get('/admin', function () {
    return view('layout.admin');
});

Route::get('/admin_main', function () {
    return view('layout.main_admin');
});

Route::get('/blog_detail', function () {
    return view('content.blog_detail');
});


Route::get('/blog_tabela', function () {
    return view('content.blog_tabela');
});

Route::get('/blog_register', function () {
    return view('content.blog_register');
});
