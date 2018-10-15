<?php

use Faker\Generator as Faker;

$factory->define(App\reposicao::class, function (Faker $faker) {

	$id_aluno = [
		'20151104010495', 
		'20151104010800',
		'20151104010134',
		'20151104010789'
	];
	
	$dados_disciplina = [
		'programacao' => ['34981', 'romerito.campos@ifrn.edu.br', '1047828'],
		'quimica' =>  ['34987', 'carlos.chaves@ifrn.edu.br', '1677639'],
		'engenharia_software' => ['34980', 'ari.barreto@ifrn.edu.br', '1138756'],
		'redes' => ['34985', 'pedro.iuri@ifrn.edu.br', '3273771' ]

	];
	$disciplina = [
		'programacao',
		'quimica',
		'engenharia_software',
		'redes'
	];
	$justificativa = [
		'Estava doente',
		'Não tinha transporte',
		'Estava com zika'
	];
	$situacao = [
		'aguardando',
		'deferida',
		'indeferida',
		'concluida'
	];

	$aleatorio = $disciplina[rand(0, 3)];

    return [

    	'id_aluno' => $id_aluno[rand(0, 3)],
        'justificativa' => $justificativa[rand(0,2)],
       	'situacao' => $situacao[rand(0,3)], 
       	'disciplina' => $dados_disciplina[$aleatorio][0],
       	'email_prof' => $dados_disciplina[$aleatorio][1],
       	'id_professor' => $dados_disciplina[$aleatorio][2]
    ];
});
