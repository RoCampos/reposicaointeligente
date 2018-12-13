<?php
namespace App\Http\Controllers;

use App\Autenticacao;
use Illuminate\Http\Request;
use Ivmelo\SUAP\SUAP;
use Illuminate\Support\facades\Session;
use Illuminate\Support\facades\Input;

use DB;



class AutenticacaoController extends Controller
{
	public function index(Request $request){
		
		$client_aluno = new Suap;
		$autenticacao = new Autenticacao;

		$matricula = Input::post('matricula');
		$senha = Input::post('senha');

		/*$client_prof = new SUAP($matricula, $senha);
		$token_professor = $client_prof->auth($matricula, $senha);*/
		
		try {
			$token_aluno = $client_aluno->autenticar($matricula, $senha);
			Session::put('senha', $senha);
			Session::put('matricula', $matricula);
				
				
			$meusDados = $client_aluno->getMeusDados();
				
			$turmasVirtuais = $client_aluno->getTurmasVirtuais(2018, 1);

			$n_disciplinas = count($turmasVirtuais);

			Session::put('nome', $meusDados["nome_usual"]);
			Session::put('disciplinas', $turmasVirtuais);
			Session::put('n_disciplinas', $n_disciplinas);
			return view('telas.index2');
			

		} catch (Exception $e) {
			return view('telas.page-login');
		}


		
		
	}

}
