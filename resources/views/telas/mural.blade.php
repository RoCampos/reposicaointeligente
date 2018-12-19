@extends('telas.index')
@section('conteudo')
  <div class="row">
    <div class="col-md-6">
      <div class="tile">
        <h3 class="tile-title">Solicitações feitas</h3>
        <div>
          <table class="table">
            <thead>
              <tr>
                <th scope="col">Disciplina</th>
                  <!--<th scope="col">Professor</th>-->
                <th scope="col">Data</th>
                <th scope="col">Ação</th>
              </tr>
            </thead>
            @foreach($mural_feitas as $mural)
              <tbody>
                <tr>
                  <th scope="row">{{$mural->nome_dis}}</th>
                  <td>{{$mural->nome_prof}}</td>
                  <td>{{$mural->data}}</td>
                  <td><a href="#" class="badge badge-info">Detalhes</a></td>
                </tr>
                </tbody>
                @endforeach
          </table>              
          <!--<canvas class="embed-responsive-item" id="lineChartDemo"></canvas>-->
        </div>
      </div>
    </div>
   <div class="col-md-6">
      <div class="tile">
        <h3 class="tile-title">Reposições marcadas</h3>
        <!-- class="embed-responsive embed-responsive-16by9"-->
        <div>
          <!--<canvas class="embed-responsive-item" id="barChartDemo"></canvas>-->
          <table class="table">
            <thead>
              <tr>
                <th scope="col">Disciplina</th>
                <th scope="col">Professor</th>
                <th scope="col">Data</th>
                <th scope="col">Ação</th>
              </tr>
            </thead>
              @foreach($mural_marcadas as $mural)
              <tbody>
                <tr>
                  <th scope="row">{{$mural->nome_dis}}</th>
                  <td>{{$mural->nome_prof}}</td>
                  <td>{{$mural->data}}</td>
                  <td><a href="#" class="badge badge-info">Detalhes</a></td>
                </tr>
                </tbody>
                @endforeach
          </table>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-6">
      <div class="tile">
        <h3 class="tile-title">Solicitações pendentes</h3>
      <div>
      <table class="table">
        <thead>

          <tr>
            <th scope="col">Disciplina</th>
                  <th scope="col">Professor</th>
              <th scope="col">Data</th>
              <th scope="col">Ação</th>
            </tr>
            </thead>
              @foreach($mural_pendentes as $mural)
              <tbody>
                <tr>
                  <th scope="row">{{$mural->nome_dis}}</th>
                  <td>{{$mural->nome_prof}}</td>
                  <td>{{$mural->data}}</td>
                  <td><a href="#" class="badge badge-info">Detalhes</a></td>
                </tr>
                </tbody>
                @endforeach
            </table>              
              <!--<canvas class="embed-responsive-item" id="lineChartDemo"></canvas>-->
          </div>
          
        </div>
      
      </div>
      <div class="col-md-6">
        <div class="tile">
          <h3 class="tile-title">Solicitações abertas</h3>
          <div>
            <table class="table">
              <tr>
                <th scope="col">Disciplina</th>
                <th scope="col">Professor</th>
                <th scope="col">Data</th>
                <th scope="col">Ação</th>
              </tr>
              </thead>
              @foreach($mural_abertas as $mural)
              <tbody>
                <tr>
                  <th scope="row">{{$mural->nome_dis}}</th>
                  <td>{{$mural->nome_prof}}</td>
                  <td>{{$mural->data}}</td>
                  <td><a href="#" class="badge badge-info">Detalhes</a></td>
                </tr>
                </tbody>
                @endforeach
                
            </table>              
            <!--<canvas class="embed-responsive-item" id="lineChartDemo"></canvas>-->
          </div>
        </div>
      </div>
    </div>
@endsection