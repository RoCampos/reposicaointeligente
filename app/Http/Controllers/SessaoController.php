<?php

namespace App\Http\Controllers;
use App\Sessao;
use Illuminate\Http\Request;
use Ivmelo\SUAP\SUAP;
use Illuminate\Support\facades\Session;
use Illuminate\Support\facades\Input;


class SessaoController extends Controller
{
   	public function Index(){
   		Session::flush();
        
        return view('telas.page-login');

   	}
   	
}
