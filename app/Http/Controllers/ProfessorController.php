<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Professor;

class ProfessorController extends Controller
{
    public function Index(){
    	$matricula = Session::get("matricula_prof");
    	$mural = DB::table("reposicaos")
		    ->where([ ['id_prof', '=', $matricula], ['situacao', '=', 'Pendente'], ])
		    ->orderBy('data', 'desc')
		    ->get();

		return view('telas.index_prof',  ['mural'=>$mural]);
		
    }
}
