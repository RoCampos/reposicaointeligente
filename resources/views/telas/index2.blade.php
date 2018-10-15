@extends('telas.index')
@section('conteudo')
<div class="row">
  <div class="col-md-8 offset-md-2">
    <div class="tile">
      <form>
        <div>
          <h3 >Solicitar Reposição</h3>
        </div>
        <br>
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
              <option value="a1">Atividade 1</option>
              <option value="a2">Atividade 2</option>
              <option value="a3">Atividade 3</option>
              <option value="a4">Atividade 4</option>
            </select>           
          </div>
          <div class="form-group">
            <label for="exampleFormControlTextarea1">Motivo</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
          </div>
          <label for="exampleFormControlTextarea1">Anexar documento comprovante</label>
          <div class="input-group mb-3">
            <div class="custom-file">
              <input type="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
              <label class="custom-file-label" for="inputGroupFile01">Procurar arquivo...</label>
            </div>
          </div>
          <div class="custom-control custom-checkbox">
            <input type="checkbox" class="custom-control-input" id="customCheck1">
            <label class="custom-control-label" for="customCheck1">Declaro estar ciente da necessidade de apresentar documento(s) que comprove(m) a minha ausência da atividade selecionada.</label>
          </div><br>
          <button type="submit" class="btn btn-success">Enviar</button>
        </form>
      </div>
    </div>
  </div>
@endsection