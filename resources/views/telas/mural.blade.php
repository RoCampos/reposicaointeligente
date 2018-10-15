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
            <tbody>
              <tr>
                <th scope="row">Português</th>
                <!--<td>Maria José</td>-->
                <td>12/08/2018</td>
                <td><a href="#" class="badge badge-primary">Detalhes</a></td>
              </tr>
              <tr>
                <th scope="row">Matemática</th>
                <!--<td>Joaildo Maia</td>-->
                <td>14/09/2018</td>
                <td><a href="#" class="badge badge-primary">Detalhes</a></td>
              </tr>
              <tr>
                <th scope="row">História</th>
                <!--<td>Kelson Oliveira</td>-->
                <td>14/09/2018</td>
                <td><a href="#" class="badge badge-primary">Detalhes</a></td>
              </tr>
            </tbody>
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
                <!--<th scope="col">Professor</th>-->
                <th scope="col">Data</th>
                <th scope="col">Ação</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">Biologia</th>
                <!--<td>Cleysyvan</td>-->
                <td>01/10/2018</td>
                <td><a href="#" class="badge badge-warning">Detalhes</a></td></td>
              </tr>
              <tr>
                <th scope="row">Programação</th>
                <!--<td>Romerito</td>-->
                <td>03/10/2018</td>
                <td><a href="#" class="badge badge-warning">Detalhes</a></td>
              </tr>
              <tr>
                <th scope="row">Redes de Computadores</th>
                <!--<td>Pedro Iuri</td>-->
                <td>03/10/2018</td>
                <td><a href="#" class="badge-warning badge">Detalhes</a></td>
              </tr>
            </tbody>
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
                  <!--<th scope="col">Professor</th>-->
              <th scope="col">Data</th>
              <th scope="col">Ação</th>
            </tr>
            </thead>
              <tbody>
                <tr>
                  <th scope="row">Português</th>
                  <!--<td>Maria José</td>-->
                  <td>12/08/2018</td>
                  <td><a href="#" class="badge badge-info">Detalhes</a></td>
                </tr>
                <tr>
                  <th scope="row">Matemática</th>
                  <!--<td>Joaildo Maia</td>-->
                  <td>14/09/2018</td>
                  <td><a href="#" class="badge badge-info">Detalhes</a></td>
                </tr>
                <tr>
                  <th scope="row">História</th>
                  <!--<td>Kelson Oliveira</td>-->
                  <td>14/09/2018</td>
                  <td><a href="#" class="badge badge-info">Detalhes</a></td>
                </tr>
              </tbody>
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
              <thead>
                <tr>
                  <th scope="col">Disciplina</th>
                  <!--<th scope="col">Professor</th>-->
                  <th scope="col">Data</th>
                  <th scope="col">Ação</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">Português</th>
                  <!--<td>Maria José</td>-->
                  <td>12/08/2018</td>
                  <td><a href="#" class="badge badge-dark">Detalhes</a></td>
                </tr>
                <tr>
                  <th scope="row">Matemática</th>
                  <!--<td>Joaildo Maia</td>-->
                  <td>14/09/2018</td>
                  <td><a href="#" class="badge badge-dark">Detalhes</a></td>
                </tr>
                <tr>
                  <th scope="row">História</th>
                  <!--<td>Kelson Oliveira</td>-->
                  <td>14/09/2018</td>
                  <td><a href="#" class="badge badge-dark">Detalhes</a></td>
                </tr>
              </tbody>
            </table>              
            <!--<canvas class="embed-responsive-item" id="lineChartDemo"></canvas>-->
          </div>
        </div>
      </div>
    </div>
@endsection