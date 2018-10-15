<?php

use Faker\Generator as Faker;

$factory->define(App\cronograma::class, function (Faker $faker) {
	$id_aluno = [
		'20151104010495', 
		'20151104010800',
		'20151104010134',
		'20151104010789'
	];
	$descricao = [
		'Aula de Sociologia', 
		'Natação',
		'Estudar para o enem',
		'Academia',
		'Aula de redes',
		'Comer'
	];
	$hora = [
		'07:00', 
		'18:00',
		'13:00',
		'15:00',
		'16:00',
		'08:00'
	];

    return [
        'id_aluno' => $id_aluno[rand(0, 3)],
        'descricao' => $descricao[rand(0,5)],
        'hora' => $hora[rand(0,5)] 
    ];
});
