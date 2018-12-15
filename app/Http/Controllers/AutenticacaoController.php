<?php
namespace App\Http\Controllers;

use App\Autenticacao;
use Illuminate\Http\Request;
use Ivmelo\SUAP\SUAP;
use Illuminate\Support\facades\Session;
use Illuminate\Support\facades\Input;
use Romerito\Suap\SuapClient;

use DB;



class AutenticacaoController extends Controller
{
	public function index(Request $request){
		
		$client_aluno = new Suap;
		$client = new SuapClient;

		$matricula = Input::post('matricula');
		$senha = Input::post('senha');
		
		try {
			$res = $client->auth($matricula, $senha);
			
			if (strlen($matricula) == 14){
				$token_aluno = $client_aluno->autenticar($matricula, $senha);
				Session::put('senha_aluno', $senha);
				Session::put('matricula_aluno', $matricula);
				$meusDados = $client_aluno->getMeusDados();
				$turmasVirtuais = $client_aluno->getTurmasVirtuais(2018, 1);
				$n_disciplinas = count($turmasVirtuais);
				Session::put('nome', $meusDados["nome_usual"]);
				Session::put('disciplinas', $turmasVirtuais);
				Session::put('n_disciplinas', $n_disciplinas);
				return view('telas.index2');

			}
			if (strlen($matricula) == 7){
				Session::put('senha_prof', $senha);
				Session::put('matricula_prof', $matricula);

				$result = $client->get("/minhas-informacoes/meus-dados/");
					
				return view('telas.index_prof');

				

			}
			
				
				
			
			

		} catch (Exception $e) {
			return view('telas.page-login');
		}


		
		
	}

}
