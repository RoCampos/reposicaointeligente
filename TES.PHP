<?php
	$dados_disciplina = [
			'programacao' => ['34981', 'romerito.campos@ifrn.edu.br', '1047828'],
			'quimica' =>  ['34987', 'carlos.chaves@ifrn.edu.br', '1677639'],
			'engenharia_software' => ['34980', 'ari.barreto@ifrn.edu.br', '1138756'],
			'redes' => ['34985', 'pedro.iuri@ifrn.edu.br', '3273771' ]

		];
		$dis = 'programacao';
		var_dump($dados_disciplina);
		if ($dis == $dados_disciplina['programacao'][0]){
			$email = $dados_disciplina[$dis][1];
			$id_professor = $dados_disciplina[$dis][2];

		}
		echo ($email);

?>