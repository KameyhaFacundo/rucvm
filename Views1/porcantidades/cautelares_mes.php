<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">    
    <title>Nueva consulta</title>


    <link href="<?php echo URL; ?>Views1/template/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="<?php echo URL; ?>Views1/template/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template-->
    <link href="<?php echo URL; ?>Views1/template/css/sb-admin.css" rel="stylesheet">
    <script src="<?php echo URL; ?>Views1/template/vendor/jquery/jquery.min.js"></script>
    <!-- Bootstrap core JavaScript-->
<script src="<?php echo URL; ?>Views1/template/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
<script src="<?php echo URL; ?>Views1/template/vendor/jquery-easing/jquery.easing.min.js"></script>
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/export-data.js"></script>
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
            $meses[] = $row['mes'];
            $cautelares[] = $row['cautelares'];
            $institucion[] = $row['ins_descripcion'];
          } 
        ?>
          chart: {
            type: 'column'
          },
          title: {
            text: 'Medidas cautelares registradas e informadas por mes en el año <?php echo $_GET['anio']; ?>, en la provincia de Tucumán. Período: 01/01/2000 - <?php echo date("d/m/Y"); ?>.',
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
              text: 'Cantidad total de medidas cautelares por mes'
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
                  "name": <?php if($meses[$i] == 1){ echo '"Enero"';}elseif($meses[$i] == 2){ echo '"Febrero"';}elseif($meses[$i] == 3){ echo '"Marzo"';}elseif($meses[$i] == 4){ echo '"Abril"';}elseif($meses[$i] == 5){ echo '"Mayo"';}elseif($meses[$i] == 6){ echo '"Junio"';}elseif($meses[$i] == 7){ echo '"Julio"';}elseif($meses[$i] == 8){ echo '"Agosto"';}elseif($meses[$i] == 9){ echo '"Septiembre"';}elseif($meses[$i] == 10){ echo '"Octubre"';}elseif($meses[$i] == 11){ echo '"Noviembre"';}elseif($meses[$i] == 12){ echo '"Diciembre"';} ?>,
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
                          <b><h3><?php echo $_GET['anio']; ?></h3></b>
                        </div>
                      </div>
                    </div>
                  </div>
                  <?php
                  if(isset($datos)){
                  ?>
                  <div class="table-responsive">
                          <table id="dataTablePorCantidades" name="tabla" class="table table-bordered col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <thead>
                              <tr style="background-color: #b3434375"> 
                                <td><center><strong>Mes</strong></center></td>
                                <td><center><strong>Medidas cautelares</strong></center></td>
                              </tr>
                            </thead>
                            
                            <tbody>
                              <?php for($i=0;$i<$filas;$i++){ ?>
                              <tr bgcolor="#DAD2D9">
                                <td><center><strong><?php if($meses[$i] == 1){ echo '01-Enero';}elseif($meses[$i] == 2){ echo '02-Febrero';}elseif($meses[$i] == 3){ echo '03-Marzo';}elseif($meses[$i] == 4){ echo '04-Abril';}elseif($meses[$i] == 5){ echo '05-Mayo';}elseif($meses[$i] == 6){ echo '06-Junio';}elseif($meses[$i] == 7){ echo '07-Julio';}elseif($meses[$i] == 8){ echo '08-Agosto';}elseif($meses[$i] == 9){ echo '09-Septiembre';}elseif($meses[$i] == 10){ echo '10-Octubre';}elseif($meses[$i] == 11){ echo '11-Noviembre';}elseif($meses[$i] == 12){ echo '12-Diciembre';} ?></strong></center></td> 
                                <td><center><?php echo $cautelares[$i]; ?></center></td> 
                        </tr>
                        <?php } ?>
                            
                            </tbody>
                          </table>
                 </div>
                  <?php } ?>
                          <br />
                          <br />
                          <br />
                <div id="graficas" style="min-width: 310px; height: 400px; margin: 0 auto"></div>
                 <div class="form-group">
                    <div class="form-row">
                      <div class="col-xs-4 col-sm-4 col-md-4 col-lg-5"></div>
                      <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
                          <br /><a class="btn btn-primary btn-block" href="<?php echo URL; ?>porcantidades/cautelares">Volver</a>
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


    <script>$(document).ready(function() {
    $('#dataTablePorCantidades').DataTable( {
        dom: 'Bfrtip',
        "bFilter": false,
        language: {
            "sProcessing":     "Procesando...",
            "sLengthMenu":     "Mostrar _MENU_ registros",
            "sZeroRecords":    "No se encontraron resultados",
            "sEmptyTable":     "Ningún dato disponible en esta tabla",
            "sInfo":           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
            "sInfoEmpty":      "Mostrando registros del 0 al 0 de un total de 0 registros",
            "sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
            "sInfoPostFix":    "",
            "sSearch":         "Buscar:",
            "sUrl":            "",
            "sInfoThousands":  ",",
            "sLoadingRecords": "Cargando...",
            "oPaginate": {
                          "sFirst":    " Primero ",
                          "sLast":     " Último ",
                          "sNext":     " Siguiente ",
                          "sPrevious": " Anterior "
                        },
            "oAria":    {
                        "sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
                        "sSortDescending": ": Activar para ordenar la columna de manera descendente"
                        },
            "decimal": ",",
            "thousands": "."
          },
         buttons: [
    {
      extend: 'excelHtml5',
      title: 'Casos de violencia contra las mujeres registrados e informados, según cantidad de fichas por mes, en la provincia de Tucumán. Período: <?php echo $_GET['anio']; ?>.',
      className: 'btn',
      text: "Excel"
  },
  {
    extend: 'csvHtml5',
    title: 'Casos de violencia contra las mujeres registrados e informados, según cantidad de fichas por mes, en la provincia de Tucumán. Período: <?php echo $_GET['anio']; ?>.',
    className: 'btn',
    text: "CSV"
},
    {
      extend: 'pdfHtml5',
      title: 'Casos de violencia contra las mujeres registrados e informados, según cantidad de fichas por mes, en la provincia de Tucumán. Período: <?php echo $_GET['anio']; ?>.',
      className: 'btn',
      text: "PDF"
  },
{
  extend: 'print',
  title: 'Casos de violencia contra las mujeres registrados e informados, según cantidad de fichas por mes, en la provincia de Tucumán. Período: <?php echo $_GET['anio']; ?>.',
  className: 'btn',
  text: "Imprimir"
},
 {
   extend: 'copy',
   title: 'Casos de violencia contra las mujeres registrados e informados, según cantidad de fichas por mes, en la provincia de Tucumán. Período: <?php echo $_GET['anio']; ?>.',
   className: 'btn',
   text: "Copiar"
 }
   ],
        "aoColumns": [
            null,
            null
                   
        ]
    } );
} );</script>
</body>
</html>