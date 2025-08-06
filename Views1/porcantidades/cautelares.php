<!DOCTYPE html>
<html lang="en">

  <head>

    <style type="text/css">
      .colorfondo{
        background-color: #d28686;
      }
      .colorfondo2{
        background-color: black;
      }
      .colorborde{
        border: 1px solid #d28686;
      }
    </style>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">    
    <title>Nuevo informe</title>


    <link href="<?php echo URL; ?>Views1/template/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="<?php echo URL; ?>Views1/template/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template-->
    <link href="<?php echo URL; ?>Views1/template/css/sb-admin.css" rel="stylesheet">
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script src="https://code.highcharts.com/modules/data.js"></script>
    <script src="https://code.highcharts.com/modules/drilldown.js"></script>
    <script src="https://code.highcharts.com/modules/exporting.js"></script>
    <script src="https://code.highcharts.com/modules/export-data.js"></script>


    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo URL; ?>Views1/template/vendor/jquery/jquery.min.js"></script>
    <!-- Bootstrap core JavaScript-->
    <script src="<?php echo URL; ?>Views1/template/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="<?php echo URL; ?>Views1/template/vendor/jquery-easing/jquery.easing.min.js"></script>
    <script type="text/javascript">
    window.onload=function(){
      document.getElementById("op36").style.color = 'white';
    }
    $(function () {
      // Create the chart
      // Create the chart
        Highcharts.chart('graficas', {
        <?php
          while($row = pg_fetch_array($datos)){
            $anio[] = $row['anio']; 
            $cautelares[] = $row['cautelares'];
            $institucion[] = $row['ins_descripcion'];
          } 
        ?>
          chart: {
            type: 'column'
          },
          title: {
            text: 'Medidas cautelares registradas e informadas, según cantidad de medidas por año, en la provincia de Tucumán. Período: 01/01/2000 - <?php echo date("d/m/Y"); ?>.',
           style: { 
                 fontSize: '14px', 
                     fontFamily: '-apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol","Noto Color Emoji"', 

                  } 
          },
          subtitle: {
            text: 'Fuente: RUCVM en base a datos de <?php echo $institucion[0]; ?>.',
            style: { 
                 fontSize: '14px', 
                     fontFamily: '-apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol","Noto Color Emoji"', 

                  }
          },
          xAxis: {
            type: 'category'
          },
          yAxis: {
            title: {
              text: 'Cantidad total de medidas cautelares por año'
            }

          },
          legend: {
            enabled: false
          },
          plotOptions: {
            series: {
              borderWidth: 0,
              dataLabels: {
                enabled: true,
                format: '{point.y}'
              }
            }
          },

          tooltip: {
            headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
            pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.y} medidas cautelares</b>'
          },

          "series": [
            {
              "name": "Año",
              "colorByPoint": true,
              "data": [
                <?php
                $filas = pg_num_rows($datos);
                for($i=0;$i<$filas;$i++){ ?>
                {
                  "name": <?php echo $anio[$i]; ?>,
                  "y": <?php echo $cautelares[$i]; ?>,
                },
                <?php } ?>
              ]
            }
          ]
          });
          });
    </script>
  </head>

  <body class="bg-dark">
  <div id="enviar" name="enviar"> 
      <?php include 'r_menuizq4.php';?>
    <div id="content-wrapper" style="background-color: #e9e2e8">
      <div class="container-fluid">
        <div class="card col-xs-12 col-sm-12 col-md-12 col-lg-12">
          <div class="card-header">Nuevo informe</div>
            <div class="card-body">
              <form id="enviar" name="enviar" role="form" class="form-horizontal" enctype="multipart/form-data"  method="post" action="">
                <div class="form-group">
                    <div class="form-row">
                      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="form-label-group">
                          <b>Años con carga de datos</b>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="form-row">
                  <?php
                      //echo URL;
                      if(isset($datos)){
                        $filas = pg_num_rows($datos);
                      //echo $filas;
                      if ($filas == 0) {
                      ?>
                      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                              <div class="form-label-group">
                                <div class="alert alert-danger" align="center">
                                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                  <small>No se encontraron datos cargados.</small>
                                </div>
                              </div>
                            </div>
                          <?php }?>
                          </div>
                        </div>
                <?php if($filas > 0){ ?>
                  <br />
                  <div class="form-group">
                    <div class="form-row">
                  <?php
                  for($i=0;$i<$filas;$i++){
                      ?>
                  <div class="card col-sm-5 col-md-4 col-lg-3 colorborde" style="max-width: 20rem;">
                    <div class="card-body text-white colorfondo">
                      <?php if($_SESSION['idinstitucion'] != 13){ ?><i class="fa fa-users fa-5x"></i><?php }else{ ?><i class="fas fa-book fa-5x"></i><?php } ?><h1 align="right"><?php echo $anio[$i];?></h1>    
                    </div>
                    <a href="cautelares_mes?anio=<?php echo $anio[$i]; ?>">
                    <div class="card-footer colorborde">
                                <span class="pull-left">Ver más</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                                </a>
                            </div>
                  </div>
                 <?php }?>
                 </div>
                 <br />
                 <br />
                 <br />
                 <br />
                  <div class="form-group">
                    <div class="form-row">
                      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                          <div id="graficas" style="min-width: 310px; height: 400px; margin: 0 auto"></div>
                    </div>
                  </div>
                 </div>

               <?php }} ?>
                 </div>
                 <div class="form-group">
                        <div class="form-row">
                          <div class="col-xs-4 col-sm-4 col-md-4 col-lg-5"></div>
                          <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
                            <br /><a class="btn btn-primary btn-block" href="<?php echo URL;?>principal/buscar/">Volver</a>
                          </div>  
                          <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2"></div>                                      
                          <div class="col-xs-4 col-sm-4 col-md-4 col-lg-3"></div>                   
                        </div>
                      </div> 
              </form>      
            </div>
          </div>                
        </div>
      </div>
   </div>
</body>
</html>