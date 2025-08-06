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
    Highcharts.chart('container', {
      <?php
        while($row = pg_fetch_array($datos)){
            $fichas[] = $row['fichas']; 
            $personas[] = $row['personas'];
            $meses[] = $row['mes'];
            $institucion[] = $row['ins_descripcion'];
          }
      ?>
    chart: {
      type: 'column'
    },
    title: {
    text: 'Casos de violencia contra las mujeres registrados e informados, según cantidad de fichas por mes, en la provincia de Tucumán. Período: <?php echo $_GET['anio']; ?>.',
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
      categories: [
      <?php    
      $num = pg_num_rows($datos); 
      for($i=0;$i<$num;$i++){
        if($meses[$i] == 1){ echo '"Enero",';}elseif($meses[$i] == 2){ echo '"Febrero",';}elseif($meses[$i] == 3){ echo '"Marzo",';}elseif($meses[$i] == 4){ echo '"Abril",';}elseif($meses[$i] == 5){ echo '"Mayo",';}elseif($meses[$i] == 6){ echo '"Junio",';}elseif($meses[$i] == 7){ echo '"Julio",';}elseif($meses[$i] == 8){ echo '"Agosto",';}elseif($meses[$i] == 9){ echo '"Septiembre",';}elseif($meses[$i] == 10){ echo '"Octubre",';}elseif($meses[$i] == 11){ echo '"Noviembre",';}elseif($meses[$i] == 12){ echo '"Diciembre"';}
      }
      ?>
      
      ],
      crosshair: true
    },
    yAxis: {
      min: 0,
      title: {
        text: 'Cantidad de fichas y consultantes'
      }
    },
    tooltip: {
      headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
      pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
        '<td style="padding:0"><b>{point.y}</b></td></tr>',
      footerFormat: '</table>',
      shared: true,
      useHTML: true
    },
    plotOptions: {
      column: {
        pointPadding: 0.2,
        borderWidth: 0
      }
    },
    series: [{
      name: 'Fichas',
      data: [
      <?php for($i=0;$i<$num;$i++){
        echo $fichas[$i].",";
      }
      ?>,
      ]
    },
    {
      name: 'Consultantes',
      data: [<?php for($i=0;$i<$num;$i++){echo $personas[$i].",";}?>]
    }
    ]
  });
  });
</script>
<script type="text/javascript">
  $(function (){
    Highcharts.chart('containerDep', {
      <?php
          $filas = count($meses);
          for($i=0;$i<$filas;$i++){
            if($meses[$i] != $meses[$i+1]){
              $meses1[] = $meses[$i];
            }
            if($i == 0){
              $institucion1[] = $institucion[$i];
            }else{
              if(!in_array($institucion[$i], $institucion1)){
                $institucion1[] = $institucion[$i]; 
              }
            }
          }
        ?>

  chart: {
    type: 'column'
  },

  title: {
            text: 'Casos de violencia contra las mujeres registrados e informados, según cantidad de fichas por mes en el año <?php echo $_GET['anio']; ?>, en la provincia de Tucumán.',
           style: { 
                 fontSize: '14px', 
                     fontFamily: '-apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol","Noto Color Emoji"', 

                  } 
          },
  subtitle: {
            text: 'Fuente: RUCVM.',
            style: { 
                 fontSize: '14px', 
                     fontFamily: '-apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol","Noto Color Emoji"', 

                  }
          },

  xAxis: {
    categories: [<?php
                $filas = count($meses1);
                for($i=0;$i<$filas;$i++){ 
                   if($i == ($filas-1)){if($meses1[$i] == 1){echo "'Enero'";}elseif($meses1[$i] == 2){echo "'Febrero'";}elseif($meses1[$i] == 3){echo "'Marzo'";} elseif($meses1[$i] == 4){echo "'Abril'";}elseif($meses1[$i] ==5){echo "'Mayo'";}elseif($meses1[$i] == 6){echo "'Junio'";}elseif($meses1[$i] == 7){echo "'Julio'";}elseif($meses1[$i] == 8){echo "'Agosto'";}elseif($meses1[$i] == 9){echo "'Septiembre'";}elseif($meses1[$i] == 10){echo "'Octubre'";}elseif($meses1[$i] == 11){echo "'Noviembre'";}elseif($meses1[$i] == 12){echo "'Diciembre'";}
                 }else{ 
                  if($meses1[$i] == 1){echo "'Enero',";}elseif($meses1[$i] == 2){echo "'Febrero',";}elseif($meses1[$i] == 3){echo "'Marzo',";} elseif($meses1[$i] == 4){echo "'Abril',";}elseif($meses1[$i] ==5){echo "'Mayo',";}elseif($meses1[$i] == 6){echo "'Junio',";}elseif($meses1[$i] == 7){echo "'Julio',";}elseif($meses1[$i] == 8){echo "'Agosto',";}elseif($meses1[$i] == 9){echo "'Septiembre',";}elseif($meses1[$i] == 10){echo "'Octubre',";}elseif($meses1[$i] == 11){echo "'Noviembre',";}elseif($meses1[$i] == 12){echo "'Diciembre'";} } 
           } ?>]
  },

  yAxis: {
    allowDecimals: false,
    min: 0,
    title: {
      text: 'Cantidad de fichas por mes'
    }
  },

  tooltip: {
    formatter: function () {
      return '<b>' + this.x + '</b><br/>' +
        this.series.name + ': ' + this.y + ' ' + this.series.options.stack + '<br/>' +
        'Total: ' + this.point.stackTotal + ' ' + this.series.options.stack;
    }
  },

  plotOptions: {
    column: {
      stacking: 'normal'
    }
  },

  series: [
  <?php 
            $ins = count($institucion1);
            for($i=0;$i<$ins;$i++)//recorre institucion 
              {
               $k=0; 
               $bandera = 0;
               ?> 
              {
                name: '<?php echo $institucion1[$i]; ?>',
                data: [<?php 
                                          $filas1 = pg_num_rows($datos);   
                                          $filas = count($meses1); 
                                          unset($mesesAcumulados);
                                          while($k<$filas){//recorre meses
                                          for($j=0;$j<$filas1;$j++){//recorre consulta
                                            if($institucion[$j] == $institucion1[$i]){
                                                if(in_array($meses[$j], $meses1)) {
                                                    if($meses[$j] == $meses1[0]){
                                                      echo $fichas[$j]; 
                                                      $mesesAcumulados[] = $meses[$j];
                                                    }else{
                                                        echo ','.$fichas[$j]; 
                                                        $mesesAcumulados[] = $meses[$j];
                                                    }              
                                                    $k++;
                                                }                          
                                              }else{
                                                    if(!in_array($meses[$j], $mesesAcumulados)){
                                                      if($meses[$j] != $meses[$j+1]){
                                                        if($meses[$j] == $meses1[0]){
                                                          echo '0';  
                                                          $mesesAcumulados[] = $meses[$j];
                                                        }else{
                                                          echo ',0';  
                                                          $mesesAcumulados[] = $meses[$j];
                                                        }
                                                      }
                                                    }
                                                    $k++;                          
                                                  }                                                                 
                                            }//for consulta
                                          }//for anios ?>],
                stack: 'fichas'
              },
  <?php } ?>
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
                                <td><center><strong>Consultantes</strong></center></td>
                                <td><center><strong>Fichas</strong></center></td>
                                <?php if($_SESSION['idinstitucion'] == 12){ ?>
                                <td><center><strong>Institución</strong></center></td>
                              <?php } ?>
                              </tr>
                            </thead>
                            
                            <tbody>
                              <?php for($i=0;$i<$num;$i++){ ?>
                              <tr bgcolor="#DAD2D9">
                                <td><center><strong><?php if($meses[$i] == 1){ echo '01-Enero';}elseif($meses[$i] == 2){ echo '02-Febrero';}elseif($meses[$i] == 3){ echo '03-Marzo';}elseif($meses[$i] == 4){ echo '04-Abril';}elseif($meses[$i] == 5){ echo '05-Mayo';}elseif($meses[$i] == 6){ echo '06-Junio';}elseif($meses[$i] == 7){ echo '07-Julio';}elseif($meses[$i] == 8){ echo '08-Agosto';}elseif($meses[$i] == 9){ echo '09-Septiembre';}elseif($meses[$i] == 10){ echo '10-Octubre';}elseif($meses[$i] == 11){ echo '11-Noviembre';}elseif($meses[$i] == 12){ echo '12-Diciembre';} ?></strong></center></td> 
                                <td><center><?php echo $personas[$i]; ?></center></td>
                                <td><center><?php echo $fichas[$i]; ?></center></td>
                                <?php if($_SESSION['idinstitucion'] == 12){ ?>
                                <td><center><?php echo $institucion[$i]; ?></center></td>
                                <?php } ?>
                             
                  
                        </tr>
                        <?php } ?>
                            
                            </tbody>
                          </table>
                 </div>
                  <?php } ?>
                          <br />
                          <br />
                          <br />
                          <?php if($_SESSION['idinstitucion'] != 12){ ?>
                <div id="container" style="min-width: 310px; height: 400px; margin: 0 auto"></div>
                <?php }else{ ?>
                <div id="containerDep" style="min-width: 310px; height: 400px; margin: 0 auto"></div>
                <?php } ?>
                 <div class="form-group">
                    <div class="form-row">
                      <div class="col-xs-4 col-sm-4 col-md-5 col-lg-5"></div>
                      <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
                          <br /><a class="btn btn-primary btn-block" href="<?php echo URL; ?>porcantidades/por_cantidades">Volver</a>
                      </div>  
                      <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2"></div>                                      
                      <div class="col-xs-4 col-sm-4 col-md-3 col-lg-3"></div>                   
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
  title: '<H2>Casos de violencia contra las mujeres registrados e informados, según cantidad de fichas por mes, en la provincia de Tucumán. Período: <?php echo $_GET['anio']; ?>.<H2/><H5>Registro Único de Casos de Violencia contra las Mujeres (RUCVM)</H5><BR/>',
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
            null,
            <?php if($_SESSION['idinstitucion'] == 12) { ?>
            null,
            null
          <?php }else{ ?>
            null
          <?php } ?>
                   
        ]
    } );
} );</script>
</body>
</html>