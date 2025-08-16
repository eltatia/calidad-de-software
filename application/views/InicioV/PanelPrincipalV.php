<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <br>
    <!-- Main content -->
    <section class="content">
      <div style="text-align: center;">
            <!-- Default box -->
            <div class="card">
                <div class="card-header">
                  <br>
                  <div style=" text-align: center;">
                  <div class="row">
                    <div class="col-3">
                      <div class="small-box bg-warning">
                        <div class="inner" style="text-align: left;">
                          <h3><?php echo $TotalLibros?></h3>
                          <p>Libros de la biblioteca</p>
                        </div>
                        <div class="icon">
                          <i class="nav-icon fas fa-book"></i>
                        </div>
                        <a href="<?php echo base_url(); ?>/MantenimientoC/LibrosC" class="small-box-footer">Mas información <i class="fas fa-arrow-circle-right"></i></a>
                      </div>
                    </div>
                    <div class="col-3">
                      <div class="small-box bg-primary">
                        <div class="inner" style="text-align: left;">
                          <h3><?php echo $PresVigentes?></h3>
                          <p>Prestamos Vigentes</p>
                        </div>
                        <div class="icon">
                          <i class="nav-icon fas fa-cogs"></i>
                        </div>
                        <a href="<?php echo base_url(); ?>/PrestamoC/PrestamoC" class="small-box-footer">Mas información <i class="fas fa-arrow-circle-right"></i></a>
                      </div>
                    </div>
                    <div class="col-3">
                      <div class="small-box bg-success">
                        <div class="inner" style="text-align: left;">
                        <h3><?php echo $PresFinalizados?></h3>
                          <p>Prestamos Finalizados</p>
                        </div>
                        <div class="icon">
                          <i class="nav-icon fas fa-check"></i>
                        </div>
                        <a href="<?php echo base_url(); ?>/PrestamoC/PrestamoFC" class="small-box-footer">Mas información <i class="fas fa-arrow-circle-right"></i></a>
                      </div>
                    </div>
                    <div class="col-3">
                      <div class="small-box bg-danger">
                        <div class="inner" style="text-align: left;">
                          <h3><?php echo $PresObservados?></h3>
                          <p>Prestamos Observados</p>
                        </div>
                        <div class="icon">
                          <i class="nav-icon fas fa-exclamation-circle"></i>
                        </div>
                        <a href="<?php echo base_url(); ?>/PrestamoC/PrestamoOC" class="small-box-footer">Mas información <i class="fas fa-arrow-circle-right"></i></a>
                      </div>
                    </div>
                  </div>
                  </div>
                </div>
                <div class="card-body" style="background-color: #B6B6B6;">
                  <div class="row">
                    <div class="col-12" align="center" >
                      <canvas id="Grafico_1" width="400" height="400"></canvas>
                    </div>
                  </div>
                </div>
                <div class="card-body" style=" background-image: url('<?php echo base_url(); ?>assets/img/square.png');">
                  <div class="row">
                    <div class="col-3">
                      <img src="<?php echo base_url(); ?>assets/img/91.png" alt="" heigth="200" width="316" style="transform: scaleX(-1);">
                    </div>
                    <div class="col-9" align="center">
                      <canvas id="Grafico_2" width="400" height="400"></canvas>
                    </div>
                  </div>
                </div>
                <div class="card-body" style="background-color: #B6B6B6;">
                  <div class="row">
                    <div class="col-12" align="center" >
                      <canvas id="Grafico_3" width="400" height="400"></canvas>
                    </div>
                  </div>
                </div>
                <div class="card-body" style=" background-image: url('<?php echo base_url(); ?>assets/img/square.png');">
                  <div class="row">
                    <div class="col-12" align="center" >
                      <canvas id="Grafico_4" width="400" height="400"></canvas>
                    </div>
                  </div>
                </div>
                <div class="card-body" style="background-color: #B6B6B6;">
                  <br>
                  <div class="row">
                    <div class="col-4">
                      <div class="card bg-light d-flex flex-fill">
                      <div class="ribbon-wrapper ribbon-xl">
                        <div class="ribbon bg-orange text-xl">
                          N° 1
                        </div>
                      </div>
                      <div class="card-header border-bottom-0" style="font-size: 20px;">
                        Top 
                      </div>
                      <div class="card-body pt-0">
                        <div class="row">
                          <div class="col-7">
                            <h2 class="lead" style="font-size: 25px;"><b><?php error_reporting(0); echo $Top[0]->Nombre; ?></b></h2>
                            <p style="font-size: 20px;"><b>Autor: </b> <?php error_reporting(0); echo $Top[0]->Autor; ?></p>
                            </div>
                            <div class="col-5 text-center">
                              <img src="<?php error_reporting(0); echo $Top[0]->Qr; ?>" alt="user-avatar" class="img-fluid">
                            </div>
                          </div>
                        </div>
                        <p style="font-size: 20px;"><b>Prestado <?php error_reporting(0); echo $Top[0]->veces_prestado." veces"; ?></b></p>
                      </div>
                    </div>
                    <div class="col-4">
                    <div class="card bg-light d-flex flex-fill">
                      <div class="ribbon-wrapper ribbon-xl">
                        <div class="ribbon bg-warning text-xl">
                          N° 2
                        </div>
                      </div>
                      <div class="card-header border-bottom-0" style="font-size: 20px;">
                        Top 
                      </div>
                      <div class="card-body pt-0">
                        <div class="row">
                          <div class="col-7">
                            <h2 class="lead" style="font-size: 25px;"><b><?php error_reporting(0);echo $Top[1]->Nombre; ?></b></h2>
                            <p style="font-size: 20px;"><b>Autor: </b> <?php error_reporting(0); echo $Top[1]->Autor; ?> </p>
                            </div>
                            <div class="col-5 text-center">
                              <img src="<?php error_reporting(0); echo $Top[1]->Qr; ?>" alt="user-avatar" class="img-fluid">
                            </div>
                          </div>
                        </div>
                        <p style="font-size: 20px;"><b>Prestado <?php error_reporting(0); echo $Top[1]->veces_prestado." veces"; ?></b></p>
                      </div>
                    </div>
                    <div class="col-4">
                    <div class="card bg-light d-flex flex-fill">
                      <div class="ribbon-wrapper ribbon-xl">
                        <div class="ribbon bg-warning text-xl">
                          N° 3
                        </div>
                      </div>
                      <div class="card-header border-bottom-0" style="font-size: 20px;">
                        Top 
                      </div>
                      <div class="card-body pt-0">
                        <div class="row">
                          <div class="col-7">
                            <h2 class="lead" style="font-size: 25px;"><b><?php error_reporting(0); echo $Top[2]->Nombre; ?></b></h2>
                            <p style="font-size: 20px;"><b>Autor: </b> <?php error_reporting(0); echo $Top[2]->Autor; ?> </p>
                            </div>
                            <div class="col-5 text-center">
                              <img src="<?php error_reporting(0); echo $Top[2]->Qr; ?>" alt="user-avatar" class="img-fluid">
                            </div>
                          </div>
                        </div>
                        <p style="font-size: 20px;"><b>Prestado <?php error_reporting(0); echo $Top[2]->veces_prestado." veces"; ?></b></p>
                      </div>
                    </div>
                  </div>
                </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          <!--
          <div class="col-4">
              <img src="<?php echo base_url(); ?>assets/img/03.png" alt="" heigth="200" width="316">
          </div>
          -->
      </div>
    </section>
    <!-- /.content -->    
<!-- /.content-wrapper -->
<script src="<?php echo base_url(); ?>assets/plugins/jquery/jquery.min.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/chart.js/Chart.min.js"></script>
<script>
        $(document).ready(function(){
            $.ajax({
                url: '<?php echo base_url(); ?>InicioC/PanelPrincipalC/DatosGrado',
                type: 'GET',
                dataType: 'json',
                success: function(data) {
                    crearGrafico1(data, 'Grafico_1');
                }
            });
            $.ajax({
                url: '<?php echo base_url(); ?>InicioC/PanelPrincipalC/DatosGenero',
                type: 'GET',
                dataType: 'json',
                success: function(data) {
                    crearGrafico2(data, 'Grafico_2');
                }
            });
            $.ajax({
                url: '<?php echo base_url(); ?>InicioC/PanelPrincipalC/DatosCategoria',
                type: 'GET',
                dataType: 'json',
                success: function(data) {
                    crearGrafico3(data, 'Grafico_3');
                }
            });
            $.ajax({
              url: '<?php echo base_url(); ?>InicioC/PanelPrincipalC/DatosEstante',
                type: 'GET',
                dataType: 'json',
                success: function(data) {
                    crearGrafico4(data, 'Grafico_4');
                    //alert(data.map(function(d) { return d.Estante + d.Cantidad; }));
                }
            });

            // Función para crear un gráfico de barras
            function crearGrafico1(data, canvasId) {
              var ctx1 = document.getElementById(canvasId).getContext('2d');
              new Chart(ctx1, {
                type: 'bar',
                data: {
                          labels: data.map(function(d) { return d.Grado + "° Grado"; }),
                          datasets: [{
                                label: 'Cantidad',
                                data: data.map(function(d) { return d.Cantidad; }),
                                backgroundColor: 'rgba(40, 167,69, 1)',
                                borderColor: 'rgba(40,167 ,69, 1)',
                                borderWidth: 1
                          }]
                        },
                options: {
                            responsive: true,
                            maintainAspectRatio: false,
                            title: {
                                display: true,
                                text: 'Lectores por grado en General', 
                                fontSize: 20 
                            },
                            scales: 
                            {
                            yAxes: [{
                              ticks: {
                                beginAtZero: true 
                              }
                              }]
                            },
                        }
                });
            }
            function crearGrafico2(data, canvasId) {
              var ctx2 = document.getElementById(canvasId).getContext('2d');
              new Chart(ctx2, {
                        type: 'doughnut',
                        data: {
                            labels: data.map(function(d) { return d.Genero; }),
                            datasets: [{
                                label: 'Cantidad',
                                data: data.map(function(d) { return d.Cantidad; }),
                                backgroundColor: [
                                    'rgba(255, 193, 7, 1)',
                                    'rgba(40, 167, 69, 1)',
                                    
                                ],
                                borderColor: [
                                    'rgba(255, 193, 7, 1)',
                                    'rgba(40, 167, 69, 1)',
                                ],
                                borderWidth: 1
                            }]
                        },
                        options: {
                            responsive: true,
                            maintainAspectRatio: false,
                            title: {
                                display: true,
                                text: 'Lectores por Género',
                                fontSize: 20 
                            }
                        }
                    });
            }
            function crearGrafico3(data, canvasId) {
              var ctx3 = document.getElementById(canvasId).getContext('2d');
              new Chart(ctx3, {
                type: 'bar',
                data: {
                          labels: data.map(function(d) { return d.Categoria}),
                          datasets: [{
                                label: 'Cantidad',
                                data: data.map(function(d) { return d.Cantidad; }),
                                backgroundColor: 'rgba(40, 167,69, 1)',
                                borderColor: 'rgba(40,167 ,69, 1)',
                                borderWidth: 1
                          }]
                        },
                options: {
                            responsive: true,
                            maintainAspectRatio: false,
                            title: {
                                display: true,
                                text: 'Libros prestados por categoria', 
                                fontSize: 20 
                            },
                            scales: 
                            {
                            yAxes: [{
                              ticks: {
                                beginAtZero: true 
                              }
                              }]
                            },
                        }
                });
            }
            function crearGrafico4(data, canvasId) {
              var ctx4 = document.getElementById(canvasId).getContext('2d');
              new Chart(ctx4, {
                type: 'bar',
                data: {
                          labels: data.map(function(d) { return "Estante N° "+d.Estante}),
                          datasets: [{
                                label: 'Cantidad',
                                data: data.map(function(d) { return d.Cantidad; }),
                                backgroundColor: 'rgba(40, 167,69, 1)',
                                borderColor: 'rgba(40,167 ,69, 1)',
                                borderWidth: 1
                          }]
                        },
                options: {
                            responsive: true,
                            maintainAspectRatio: false,
                            title: {
                                display: true,
                                text: 'Libros prestados por estante', 
                                fontSize: 20 
                            },
                            scales: 
                            {
                            yAxes: [{
                              ticks: {
                                beginAtZero: true 
                              }
                              }]
                            },
                        }
                });
            }
        });
</script>
<!--
<script>
        $(document).ready(function(){
            // Función para cargar los datos del gráfico circular mediante AJAX
            $.ajax({
                url: '<?php echo base_url(); ?>InicioC/PanelPrincipalC/DatosGenero',
                type: 'GET',
                dataType: 'json',
                success: function(data) {
                    // Configurar y mostrar el gráfico circular
                    var ctxCircular = document.getElementById('Grafico_2').getContext('2d');
                    var myChartCircular = new Chart(ctxCircular, {
                        type: 'doughnut',
                        data: {
                            labels: data.map(function(d) { return d.Genero; }),
                            datasets: [{
                                label: 'Cantidad',
                                data: data.map(function(d) { return d.Cantidad; }),
                                backgroundColor: [
                                    'rgba(255, 99, 132, 0.5)',
                                    'rgba(54, 162, 235, 0.5)',
                                    'rgba(255, 206, 86, 0.5)',
                                    'rgba(75, 192, 192, 0.5)',
                                    'rgba(153, 102, 255, 0.5)',
                                    'rgba(255, 159, 64, 0.5)'
                                ],
                                borderColor: [
                                    'rgba(255, 99, 132, 1)',
                                    'rgba(54, 162, 235, 1)',
                                    'rgba(255, 206, 86, 1)',
                                    'rgba(75, 192, 192, 1)',
                                    'rgba(153, 102, 255, 1)',
                                    'rgba(255, 159, 64, 1)'
                                ],
                                borderWidth: 1
                            }]
                        },
                        options: {
                            responsive: true,
                            maintainAspectRatio: false,
                            title: {
                                display: true,
                                text: 'Lectores por Género',
                                fontSize: 20 
                            }
                        }
                    });
                }
            });

            // Función para cargar los datos del gráfico de barras mediante AJAX
            $.ajax({
                url: '<?php echo base_url(); ?>InicioC/PanelPrincipalC/DatosGrado',
                type: 'GET',
                dataType: 'json',
                success: function(data) {
                    // Configurar y mostrar el gráfico de barras
                    var ctxBarras = document.getElementById('Grafico_1').getContext('2d');
                    var myChartBarras = new Chart(ctxBarras, {
                        type: 'bar',
                        data: {
                            labels: data.map(function(d) { return d.Grado + "° Grado"; }),
                            datasets: [{
                                label: 'Cantidad',
                                data: data.map(function(d) { return d.Cantidad; }),
                                backgroundColor: 'rgba(54, 162, 235, 0.5)',
                                borderColor: 'rgba(54, 162, 235, 1)',
                                borderWidth: 1
                            }]
                        },
                        options: {
                            responsive: true,
                            maintainAspectRatio: false,
                            title: {
                                display: true,
                                text: 'Lectores por grado en General', 
                                fontSize: 20 
                            }
                        }
                    });
                }
            });

            $.ajax({
                url: '<?php echo base_url(); ?>InicioC/PanelPrincipalC/DatosCategoria',
                type: 'GET',
                dataType: 'json',
                success: function(data) {
                    // Configurar y mostrar el gráfico de barras
                    var ctxBarras2 = document.getElementById('Grafico_3').getContext('2d');
                    var myChartBarras = new Chart(ctxBarras2, {
                        type: 'bar',
                        data: {
                            labels: data.map(function(d) { return d.Categoria; }),
                            datasets: [{
                                label: 'Cantidad',
                                data: data.map(function(d) { return d.Cantidad; }),
                                backgroundColor: 'rgba(54, 162, 235, 0.5)',
                                borderColor: 'rgba(54, 162, 235, 1)',
                                borderWidth: 1
                            }]
                        },
                        options: {
                            responsive: true,
                            maintainAspectRatio: false,
                            title: {
                                display: true,
                                text: 'Lectores por grado en General', 
                                fontSize: 20 
                            }
                        }
                    });
                }
            });


            $.ajax({
                url: '<?php echo base_url(); ?>InicioC/PanelPrincipalC/DatosEstante',
                type: 'GET',
                dataType: 'json',
                success: function(data) {
                    // Configurar y mostrar el gráfico de barras
                    var ctxBarras = document.getElementById('Grafico_4').getContext('2d');
                    var myChartBarras = new Chart(ctxBarras, {
                        type: 'bar',
                        data: {
                            labels: data.map(function(e) { return e.Estante; }),
                            datasets: [{
                                label: 'Cantidad',
                                data: data.map(function(e) { return e.Cantidad; }),
                                backgroundColor: 'rgba(54, 162, 235, 0.5)',
                                borderColor: 'rgba(54, 162, 235, 1)',
                                borderWidth: 1
                            }]
                        },
                        options: {
                            responsive: true,
                            maintainAspectRatio: false,
                            title: {
                                display: true,
                                text: 'Lectores por grado en General', 
                                fontSize: 20 
                            }
                        }
                    });
                }
            });

        });
</script>
      -->
<!-- jQuery -->