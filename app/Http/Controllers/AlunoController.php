<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Reposicao;
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

	    $dados_disciplina = [
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

		}
		$reposicao->id_professor = $id_professor;

		$reposicao->id_aluno = '20151104010800';
		$reposicao->justificativa = Input::post('justificativa');
		$reposicao->disciplina = Input::post('disciplina');
		$reposicao->email_prof = $email;
		date_default_timezone_set('America/Sao_Paulo');
		$reposicao->data = date('d/m/y') ;
		$reposicao->hora = date('h:i:s');

		$reposicao->situacao = 'Pendente';
		$reposicao->observacao = null;


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
