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
	if (Session::has('senha') and Session::has("matricula")){
		return view('aluno.index');
	}
	else{
		return view("telas.page-login");
	}
	
});

Route::get('/index', function () {
	if (Session::has('senha') and Session::has("matricula")){
		return view('telas.index2');
	}
	else{
		return view("telas.page-login");
	}
	
})->name('index2');

Route::get('/index-prof', function () {
	if (Session::has('senha') and Session::has("matricula")){
		return view('telas.index_prof');
	}
	else{
		return view("telas.page-login");
	}
	
})->name('index-prof');


Route::get('/mural', function () {
	if (Session::has('senha') and Session::has("matricula")){
		return view('telas.mural');
	}
	else{
		return view("telas.page-login");
	}
	
})->name('mural');

Route::get('/login', function () {
	if (Session::has('senha') and Session::has("matricula")){
		return view('telas.page-login');
	}
	else{
		return view("telas.page-login");
	}
	
})->name('page-login');

Route::get('/repo-feitas', function () {
	if (Session::has('senha') and Session::has("matricula")){
		return view('telas.repo-feitas');
	}
	else{
		return view("telas.page-login");
	}
	
})->name('repo-feitas');

Route::get('/repo-marcadas', function () {
	if (Session::has('senha') and Session::has("matricula")){
		return view('telas.repo-marcadas');
	}
	else{
		return view("telas.page-login");
	}

})->name('repo-marcadas');

Route::get('/repo-pendentes', function () {
	if (Session::has('senha') and Session::has("matricula")){
		return view('telas.repo-pendentes');
	}
	else{
		return view("telas.page-login");
	}

})->name('repo-pendentes');

Route::get('/repo-abertas', function () {
	if (Session::has('senha') and Session::has("matricula")){
		return view('telas.repo-abertas');
	}
	else{
		return view("telas.page-login");
	}
	
})->name('repo-abertas');

Route::get('/index-prof', function () {
	if (Session::has('senha') and Session::has("matricula")){
		return view('telas.index_prof');
	}
	else{
		return view("telas.page-login");
	}

})->name('index-prof');

Route::resource('reposicao', 'AlunoController',[ 
	'names' => [
		'index' => 'reposicao.inicio',
		'store' => 'reposicao.salvar',

	]
]);
// Route::resource('autenticacao', 'AutenticacaoController',[ 
// 	'names' => [
// 		'index' => 'autenticacao.logar',
		
// 	]
// ]);

Route::post('autenticacao', 'AutenticacaoController@index')->name('autenticacao.logar');
Route::get('sessao', 'sessaoController@index')->name('sessao.detroy');
/*Route::post('aut', 'AutenticacaoController@destroy')->name('autenticacao.detroy');*/
