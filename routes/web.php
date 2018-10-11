<?php

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
    return view('welcome');
});


Route::get('/aluno', function () {
return view('aluno.index');
});

Route::get('/index', function () {
	return view('telas.index2');
})->name('index2');

Route::get('/mural', function () {
	return view('telas.mural');
})->name('mural');

Route::get('/login', function () {
	return view('telas.page-login');
})->name('page-login');

Route::get('/repo-feitas', function () {
	return view('telas.repo-feitas');
})->name('repo-feitas');

Route::get('/repo-marcadas', function () {
	return view('telas.repo-marcadas');
})->name('repo-marcadas');

Route::get('/repo-pendentes', function () {
	return view('telas.repo-pendentes');
})->name('repo-pendentes');

Route::get('/repo-abertas', function () {
	return view('telas.repo-abertas');
})->name('repo-abertas');