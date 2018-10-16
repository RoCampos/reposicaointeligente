<!DOCTYPE html>
<html lang="en">
  <head>
    <meta name="description" content="Vali is a responsive and free admin theme built with Bootstrap 4, SASS and PUG.js. It's fully customizable and modular.">
    <!-- Twitter meta-->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:site" content="@pratikborsadiya">
    <meta property="twitter:creator" content="@pratikborsadiya">
    <!-- Open Graph Meta-->
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Vali Admin">
    <meta property="og:title" content="Vali - Free Bootstrap 4 admin theme">
    <meta property="og:url" content="http://pratikborsadiya.in/blog/vali-admin">
    <meta property="og:image" content="http://pratikborsadiya.in/blog/vali-admin/hero-social.png">
    <meta property="og:description" content="Vali is a responsive and free admin theme built with Bootstrap 4, SASS and PUG.js. It's fully customizable and modular.">
    <title>Reposição Inteligente</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Main CSS-->
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <!-- Font-icon css-->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  <body class="app sidebar-mini rtl">
    <!-- Navbar-->
    <header class="app-header"> 
      <a class="app-header__logo" href="index.html">Reposição Inteligente</a>
      <!-- Sidebar toggle button-->
      <a class="app-sidebar__toggle" href="#" data-toggle="sidebar" aria-label=""></a>
      
      <!-- Navbar Right Menu-->
      <ul class="app-nav">
        
        <!--Notification Menu-->
        <li class="dropdown"><a class="app-nav__item" href="#" data-toggle="dropdown" aria-label="Show notifications"><i class="fa fa-bell-o fa-lg"></i></a>
          <ul class="app-notification dropdown-menu dropdown-menu-right">
            <li class="app-notification__title">Notificações referentes à reposição</li>
            <div class="app-notification__content">
              
            </div>
            <li class="app-notification__footer"><a href="#">See all notifications.</a></li>
          </ul>
        </li>

        <!-- User Menu-->
        <li class="dropdown"><a class="app-nav__item" href="#" data-toggle="dropdown" aria-label="Open Profile Menu"><i class="fa fa-user fa-lg"></i></a>
          <ul class="dropdown-menu settings-menu dropdown-menu-right">
            <li><a class="dropdown-item" href="page-user.html"><i class="fa fa-cog fa-lg"></i> Configurações</a></li>
            <li><a class="dropdown-item" href="page-user.html"><i class="fa fa-user fa-lg"></i> Perfil</a></li>
            <li><a class="dropdown-item" href="page-login.html"><i class="fa fa-sign-out fa-lg"></i> Sair</a></li>
          </ul>
        </li>
      </ul>
    </header>


    <!-- Sidebar menu-->
    <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
    <aside class="app-sidebar">
      <div class="app-sidebar__user"><img class="app-sidebar__user-avatar" src="https://s3.amazonaws.com/uifaces/faces/twitter/jsa/48.jpg" alt="User Image">
        <div>
          <p class="app-sidebar__user-name">Romerito</p>
          <p class="app-sidebar__user-designation">20151108</p>
        </div>
      </div>
      <ul class="app-menu">
        <li><a class="app-menu__item active" href="index.html"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">Inicio</span></a></li>

        
        <li><a class="app-menu__item" href="mural.html"><i class="app-menu__icon fa fa-pie-chart"></i><span class="app-menu__label">Mural</span></a></li>
      </ul>
    </aside>


    <main class="app-content">
      <!--<div class="app-title">
        <div>
          <h1><i class=""></i> Reposição Inteligente</h1>
          <p>Solicite suas reposições de maneira mais rápida e fácil!</p>
        </div>
      </div>-->
     
      <div class="row">
        <div class="col-md-10 offset-md-1">
          <div class="tile">
            <h3 class="tile-title">Solicitações recebidas</h3>
            <div>

              <div id="accordion">
                <div class="card bg-light>
                  <div class="card-header" id="headingTwo" >
                    <h5 class="mb-0">
                      <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        Pablo Vespúcio
                      </button>
                    </h5>
                  </div>
                  <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                    <div class="card-body">
                      <div class="row">
                        <div class="col-md-6">
                          <b>Curso/Turma:</b>                          
                        </div>

                        <div class="col-md-6">
                          <b>Disciplina:</b>                          
                        </div> 
                      </div>

                      <div class="row">
                        <div class="col-md-6">
                          <b>Anexo: </b>                       
                        </div>

                        <div class="col-md-6">
                          <b>Data da solicitação:</b>                          
                        </div> 
                      </div>

                      <div class="row">
                        <div class="col-md-6">
                          <b>Justificativa:</b>
                          <div class="col-md-6">
                            KAJKJAJSDJDJDJHFHGGGGGGGGGGGGHFHHn
                          </div>                      
                        </div> 

                        <div class="col-md-6">
                          <button type="button" class="btn btn-outline-success pull-right" data-toggle="modal" data-target="#exampleModal"> Marcar reposição</button>
                              <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <h5 class="modal-title" id="exampleModalLabel"> Marque a reposição</h5>
                                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                      </button>
                                    </div>
                                  <div class="modal-body">
                                    Sala: <input type="string" name=""/>
                                    <br>
                                    Data: <input type="date" name=""/>
                                    <br>
                                    Horário: <input type="time" name="appt-time"
                                    min="7:00" max="22:00" required/>
                                    <br>

                                  </div>
                                  <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                                    <button type="button" class="btn btn-primary"> Enviar</button>
                                  </div>

                                </div>
                              </div>
                            </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>


                <div id="accordion">
                <div class="card bg-light>
                  <div class="card-header" id="headingTwo" >
                    <h5 class="mb-0">
                      <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse3" aria-expanded="false" aria-controls="collapseTwo">
                        Eloisa
                      </button>
                    </h5>
                  </div>
                  <div id="collapse3" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                    <div class="card-body">
                      <div class="row">
                        <div class="col-md-6">
                          <b>Curso/Turma:</b>                          
                        </div>

                        <div class="col-md-6">
                          <b>Disciplina:</b>                          
                        </div> 
                      </div>

                      <div class="row">
                        <div class="col-md-6">
                          <b>Anexo: </b>                       
                        </div>

                        <div class="col-md-6">
                          <b>Data da solicitação:</b>                          
                        </div> 
                      </div>

                      <div class="row">
                        <div class="col-md-6">
                          <b>Justificativa:</b>
                          <div class="col-md-6">
                            Preguiça
                          </div>                      
                        </div> 

                        <div class="col-md-6">
                          <button type="button" class="btn btn-outline-success pull-right" data-toggle="modal" data-target="#exampleModal2"> Marcar reposição</button>
                              <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <h5 class="modal-title" id="exampleModalLabel"> Marque a reposição</h5>
                                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                      </button>
                                    </div>
                                  <div class="modal-body">
                                    Sala: <input type="string" name=""/>
                                    <br>
                                    Data: <input type="date" name=""/>
                                    <br>
                                    Horário: <input type="time" name="appt-time"
                                    min="7:00" max="22:00" required/>
                                    <br>

                                  </div>
                                  <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                                    <button type="button" class="btn btn-primary"> Enviar</button>
                                  </div>

                                </div>
                              </div>
                            </div>
                        </div>

                      </div>
                    </div>
                  </div>
                </div>

            </div>
          </div>
        </div>
      </div>
    </main>


    <!-- Essential javascripts for application to work-->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
    <!-- The javascript plugin to display page loading on top-->
    <script src="js/plugins/pace.min.js"></script>
    <!-- Page specific javascripts-->
    <script type="text/javascript" src="js/plugins/chart.js"></script>
    <script type="text/javascript">
      var data = {
      	labels: ["January", "February", "March", "April", "May"],
      	datasets: [
      		{
      			label: "My First dataset",
      			fillColor: "rgba(220,220,220,0.2)",
      			strokeColor: "rgba(220,220,220,1)",
      			pointColor: "rgba(220,220,220,1)",
      			pointStrokeColor: "#fff",
      			pointHighlightFill: "#fff",
      			pointHighlightStroke: "rgba(220,220,220,1)",
      			data: [15, 29, 37, 41, 56]
      		},
      		{
      			label: "My Second dataset",
      			fillColor: "rgba(151,187,205,0.2)",
      			strokeColor: "rgba(151,187,205,1)",
      			pointColor: "rgba(151,187,205,1)",
      			pointStrokeColor: "#fff",
      			pointHighlightFill: "#fff",
      			pointHighlightStroke: "rgba(151,187,205,1)",
      			data: [28, 48, 40, 19, 86]
      		}
      	]
      };
      var pdata = [
      	{
      		value: 300,
      		color: "#46BFBD",
      		highlight: "#5AD3D1",
      		label: "Complete"
      	},
      	{
      		value: 50,
      		color:"#F7464A",
      		highlight: "#FF5A5E",
      		label: "In-Progress"
      	}
      ]
      
      var ctxl = $("#lineChartDemo").get(0).getContext("2d");
      var lineChart = new Chart(ctxl).Line(data);
      
      var ctxp = $("#pieChartDemo").get(0).getContext("2d");
      var pieChart = new Chart(ctxp).Pie(pdata);
    </script>
    <!-- Google analytics script-->
    <script type="text/javascript">
      if(document.location.hostname == 'pratikborsadiya.in') {
      	(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      	(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      	m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      	})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
      	ga('create', 'UA-72504830-1', 'auto');
      	ga('send', 'pageview');
      }
    </script>

    <script>
    $('#exampleModal').modal(options)
    $('#exampleModal2').modal(options)
   </script>

  </body>
</html>