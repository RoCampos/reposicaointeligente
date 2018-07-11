<!-- <!DOCTYPE html>
<html>
<head>
	<title>Solicitar reposição</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  //Bootstrap core CSS
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
  //Custom fonts for this template
  <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  //Custom styles for this template
	<link href="css/sb-admin.css" rel="stylesheet">	
</head>-->
@extends('padrao')

@section('conteudo')<!--Mudei--> 
  <div class="row">
    <div class="card card-login col-sm-6 offset-sm-3 mx-auto mt-5">
    	<div class="card-header">Solicitar reposição.</div>
    	<div class="card-body">
        <form>
          <div class="form-group">
            <label for="exampleFormControlSelect1">Disciplina</label>
            <select class="form-control" id="exampleFormControlSelect1">
      				<option value="portugues">Português</option>
      				<option value="mat">Matemática</option>
      				<option value="hist">História</option>
      				<option value="bdd">Banco de Dados</option>
      				<option value="prog_internet">Programação para internet</option>
    				</select>
          </div>
          <div class="form-group">
            <label for="exampleFormControlSelect1">Atividade</label>
            <select class="form-control" id="exampleFormControlSelect1">
      				<option value="n1">Nota 1</option>
      				<option value="n2">Nota 2</option>
      				<option value="n3">Nota 3</option>
      				<option value="n4">Nota 4</option>
    				</select>          	
          </div>
  				<div class="form-group">
    				<label for="exampleFormControlTextarea1">Motivo</label>
    				<textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
  				</div>
  				<div class="custom-control custom-checkbox">
  					<input type="checkbox" class="custom-control-input" id="customCheck1">
  					<label class="custom-control-label" for="customCheck1">Declaro estar ciente da necessidade de apresentar documento(s) que comprove(m) a minha ausência da atividade selecionada.</label>
					</div>
					<div class="form-group"></div>
          <a class="btn btn-primary btn-block" href="salvar_no_banco . php">Enviar</a>
        </form>
      </div>
    </div>
  </div>
@endsection