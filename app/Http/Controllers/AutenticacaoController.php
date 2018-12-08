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
		
		$token_aluno = $client_aluno->autenticar($matricula, $senha);

		if ($token_aluno){
				//$request->session()->put('matricula', 'oi');
				Session::put('senha', $senha);
				Session::put('matricula', $matricula);
				
				
				$meusDados = $client_aluno->getMeusDados();
				Session::put('nome', $meusDados["nome_usual"]);
				
				
			
				return view('telas.index2');
				
			}

			
			

			
		
		/*else if ($token_professor){
			return view('telas.index-prof');
			$_SESSION['matricula'] = $matricula;
			$_SESSION['senha'] = $senha;
		}*/
		else {
			
			return view('telas.page-login');
			
		}
	}
	/*public function destroy()    {
        Session::flush();
        return view('telas.page-login');

        //
    }*/
}
