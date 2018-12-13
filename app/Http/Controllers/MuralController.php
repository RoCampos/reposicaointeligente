<?php

namespace App\Http\Controllers;
use App\Mural;
use Ivmelo\SUAP\SUAP;
use Illuminate\Support\facades\Session;
use Illuminate\Support\facades\Input;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class MuralController extends Controller
{
    public function Index(){
   		
   		$matricula = Session::get("matricula");
        $mural = new Mural();
		$mural_p = DB::table("reposicaos")
		    ->where([ ['id_aluno', '=', $matricula], ['situacao', '=', 'Pendente'], ])
		    ->orderBy('data', 'desc')
		    ->get();
		$mural_a = DB::table("reposicaos")
		    ->where([ ['id_aluno', '=', $matricula], ['situacao', '=', 'Aberta'], ])
		    ->orderBy('data', 'desc')
		    ->get();
		$mural_m = DB::table("reposicaos")
		    ->where([ ['id_aluno', '=', $matricula], ['situacao', '=', 'Marcada'], ])
		    ->orderBy('data', 'desc')
		    ->get();
		$mural_f = DB::table("reposicaos")
		    ->where([ ['id_aluno', '=', $matricula], ['situacao', '=', 'Feita'], ])
		    ->orderBy('data', 'desc')
		    ->get();
        return view('telas.mural',  ['mural_pendentes'=>$mural_p, "mural_marcadas" =>$mural_m, "mural_feitas" => $mural_f, "mural_abertas" => $mural_a]);

   	}
}
