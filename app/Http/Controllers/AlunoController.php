<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Reposicao;
use Ivmelo\SUAP\SUAP;
use Illuminate\Support\facades\Session;
use Illuminate\Support\facades\Input;
use DB;

class AlunoController extends Controller
{
    public function index(){
 		return view ("telas.index2");
 	}

	public function store(){
	    $reposicao = new Reposicao;

	    /*$dados_disciplina = [
			'programacao' => ['34981', 'romerito.campos@ifrn.edu.br', '1047828'],
			'quimica' =>  ['34987', 'carlos.chaves@ifrn.edu.br', '1677639'],
			'engenharia_software' => ['34980', 'ari.barreto@ifrn.edu.br', '1138756'],
			'redes' => ['34985', 'pedro.iuri@ifrn.edu.br', '3273771' ]

		];
		$dis = Input::post('disciplina');

		if ($dis == $dados_disciplina['programacao'][0]){
			$email = $dados_disciplina['programacao'][1];
			$id_professor = $dados_disciplina['programacao'][2];

		}
		else if ($dis == $dados_disciplina['quimica'][0]){
			$email = $dados_disciplina['quimica'][1];
			$id_professor = $dados_disciplina['quimica'][2];

		}
		else if ($dis == $dados_disciplina['engenharia_software'][0]){
			$email = $dados_disciplina['engenharia_software'][1];
			$id_professor = $dados_disciplina['engenharia_software'][2];

		}
		else if ($dis == $dados_disciplina['redes'][0]){
			$email = $dados_disciplina['redes'][1];
			$id_professor = $dados_disciplina['redes'][2];

		}*/

		$suap = new Suap;
		$matricula = Session::get("matricula_aluno");
		$senha = Session::get("senha_aluno");

		$token_aluno = $suap->autenticar($matricula, $senha);
		$meusDados = $suap->getMeusDados();
		
		/*return Input::post('disciplina');*/

		$course = $suap->getTurmaVirtual(Input::post('disciplina'));

		$prof = $course['professores'][0]['matricula'];
		$email = $course['professores'][0]['email'];

		$reposicao->id_aluno = $matricula;
		$reposicao->id_professor = (string) $prof;
		$n_disciplinas = Session::get("n_disciplinas");
		$turmasvirtuais = Session::get("disciplinas");
		
		$reposicao->justificativa = Input::post('justificativa');
		$reposicao->disciplina = (string) Input::post('disciplina');

		for ($i = 0; $i < $n_disciplinas; $i++){
			if ($turmasvirtuais[$i]['id'] == Input::post('disciplina')){
				$nome_dis = $turmasvirtuais[$i]["descricao"];
			}
		}

		$reposicao->nome_dis = $nome_dis;
		$reposicao->nome_prof = $course['professores'][0]["nome"];
		$reposicao->email_prof = (string) $email;
		date_default_timezone_set('America/Sao_Paulo');
		$reposicao->data = date('d/m/y') ;
		$reposicao->hora = date('h:i:s');
		$reposicao->email = $meusDados["email"];

		$reposicao->situacao = 'Pendente';
		$reposicao->observacao = null;
		$reposicao->nome_aluno = $meusDados['nome_usual'];


			// from Model
		$reposicao->save();

		return view('telas.index2');
	}
	/*public function show()
	{
		$mural = Reposicao::findOrFail ('20151104010800');
		return view('telas.mural', ['mural'=> $mural]);	
	}*/
}
