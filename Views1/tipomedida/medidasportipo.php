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
      document.getElementById("op39").style.color = 'white';
    }
  $(function () {
    
Highcharts.chart('container', {
  <?php
    while($row = pg_fetch_array($datos)){
      $cantidad[] = $row['medidas']; 
      $ca_tipmedidas[] = $row['ca_tipmedidas'];
    }

       $tipo_medida = array();
       $tipo_medida[1] = 'Exclusión de hogar'; 
       $tipo_medida[2] = 'Prohibición de acercamiento';
       $tipo_medida[3] = 'Prohibición de actos turbatorios';
       $tipo_medida[4] = 'Prohibición de comunicación';
       $tipo_medida[5] = 'Prohibición de proximidad física';
       $tipo_medida[6] = 'Protección de persona';
       $tipo_medida[7] = 'Tipo medida';
       $tipo_medida[8] = 'Restricción de acercamiento';
       $tipo_medida[9] = 'Prohibición de acercamiento con dispositivo dual';
       $cant_medidas = count($ca_tipmedidas);
       //$tipos_de_medidas = array();
       for($i=0;$i<$cant_medidas;$i++){
          $medidas = explode(',',$ca_tipmedidas[$i]);
          $filas = count($medidas);
          for($j=0;$j<$filas;$j++){
            if($j==0){ 
              if($filas == 1){ 
                $tipos_de_medidas[$i] = $tipo_medida[$medidas[$j]];
              }else{ 
                $tipos_de_medidas[$i] = $tipo_medida[$medidas[$j]]. ', '; 
              }
            }else{ 
              if($j == $filas-1){ 
                $tipos_de_medidas[$i] = $tipos_de_medidas[$i] . $tipo_medida[$medidas[$j]]; 
              }else{ 
                $tipos_de_medidas[$i] = $tipos_de_medidas[$i] . $tipo_medida[$medidas[$j]]. ', ';
              }
            }
          }
       }
  ?>
  chart: {
    type: 'bar'
  },
  title: {
    text: 'Medidas cautelares registradas e informadas, según el tipo de medida, en la provincia de Tucumán. Período: <?php echo date("d/m/Y", strtotime($_POST['fecha1'])); ?> - <?php echo date("d/m/Y", strtotime($_POST['fecha2'])); ?>.',
   style: { 
         fontSize: '14px', 
             fontFamily: '-apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol","Noto Color Emoji"', 

          } 
  },
  subtitle: {
    text: 'Fuente: RUCVM en base a datos de Centro de Monitoreo 911.',
    style: { 
         fontSize: '14px', 
             fontFamily: '-apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol","Noto Color Emoji"', 

          }
  },
  xAxis: {
    categories: [<?php $filas1 = count($tipos_de_medidas); for($i=0;$i<$filas1;$i++){echo '\''.$tipos_de_medidas[$i].'\''.',';} ?>],
    title: {
      text: null
    }
  },
  yAxis: {
    min: 0,
    title: {
      text: 'Medidas cautelares',
    },
  },
  legend: {
    reversed: true
  },
  tooltip: {
    valueSuffix: ' medidas'
  },
  plotOptions: {
    series: {
      stacking: 'normal'
    }
  },
  series: [<?php for($g=0;$g<$filas1;$g++){ ?>{
    name: '<?php echo $tipos_de_medidas[$g]; ?>',
    data: [<?php if($g!=0){for($c=0;$c<$g;$c++){echo '0,';}} echo $cantidad[$g]; ?> ]
  },<?php } ?>]
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
                        <b>Medidas cautelares por tipo de medida <?php if($_POST){ echo 'desde '.date("d/m/Y", strtotime($_POST['fecha1'])).' hasta '.date("d/m/Y", strtotime($_POST['fecha2'])); } ?></b>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="form-row">
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                            <div class="form-label-group">
                              <input type="date" id="fecha1" name="fecha1" class="form-control" placeholder="Fecha de nacimiento" required="required" autofocus="autofocus" value="<?php if($_POST){echo $_POST['fecha1']; } ?>">
                              <label for="fecha1">Fecha de inicio</label>
                            </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                            <div class="form-label-group">
                              <input type="date" id="fecha2" name="fecha2" class="form-control" placeholder="Fecha de nacimiento" required="required" autofocus="autofocus" value="<?php if($_POST){echo $_POST['fecha2']; } ?>">
                              <label for="fecha2">Fecha de fin</label>
                            </div>
                    </div>
                      <div class="input-group-append">
                        <button id="buscar" name="buscar" class="btn btn-primary" type="submit">
                          <i class="fas fa-filter"></i>
                        </button>
                      </div>
                  <?php
                      //echo URL;
                      if(isset($datos)){
                        $filas = count($ca_tipmedidas);
                      //echo $filas;
                      if ($filas == 0) {
                      ?>
                      <div class="col-xs-6 col-sm-4 col-md-4 col-lg-5">
                              <div class="form-label-group">
                                <div class="alert alert-danger" align="center">
                                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                  <small>No se encontraron datos entre ese rango de fechas.</small>
                                </div>
                              </div>
                            </div>
                          <?php }?>
                          </div>
                        </div>
                <?php if($filas > 0){ ?>
                <br />
                <br /> 
                <div class="table-responsive">
                          <table id="tablaEduConsultante" name="tabla" class="table table-bordered col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <thead>
                              <tr style="background-color: #b3434375">  
                                <td><center><strong>Tipo de medida</strong></center></td>
                                <td><center><strong>Cantidad de medidas</strong></center></td>
                              </tr>
                            </thead>
                            <tbody>
                              <?php for($i=0;$i<$filas;$i++){ ?>
                              <tr bgcolor="#DAD2D9">
                                <td><center><?php echo $tipos_de_medidas[$i]; ?></center></td>
                                <td><center><?php echo $cantidad[$i]; ?></center></td>
                              
                            <?php } ?>
						      </tr>
                          </tbody>
                        </table>
                  </div>
                <?php } ?>
                <?php }else{?>
                      </div>
                      </div>
                <?php } ?>
                <br />
                <br />
                <br />
                <br />
                <?php if($_POST){ ?>
                <?php if($filas > 0){ ?>
                <div id="container" style="min-width: 310px; max-width: 800px; height: 400px; margin: 0 auto"></div>
              <?php }} ?>
                 <div class="form-group">
                        <div class="form-row">
                          <div class="col-xs-4 col-sm-4 col-md-5 col-lg-5"></div>
                          <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
                            <br /><a class="btn btn-primary btn-block" href="<?php echo URL;?>principal/buscar/">Volver</a>
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
   <script type="text/javascript">
      $('#buscar').on('click', function(event) {
        event.preventDefault();
        var fecha1 = $('#fecha1').val();
        var fecha2 = $('#fecha2').val();
        var hoy = new Date();
        var dd = hoy.getDate();
        var mm = hoy.getMonth()+1;
        var yyyy = hoy.getFullYear();
        if(dd<10) {
          dd='0'+dd;
        }  
        if(mm<10) {
          mm='0'+mm;
        } 
        var fechahoy = yyyy+"-"+mm+"-"+dd;
        if (fecha1 == '') {
          alert('Debe ingresar la fecha de INICIO del filtro');
        }else{
          if (fecha2 == '') {
            alert('Debe ingresar la fecha de FIN del filtro');
          }else{
            if (fecha1 > fecha2) {
              alert('La fecha de INICIO debe ser menor a la fecha de FIN');
            }else{
              if(fecha2 > fechahoy){
                alert('La fecha de FIN debe ser menor a la fecha de HOY');
              }else{
          $.ajax({
            url: '<?php echo URL; ?>tipomedida/medidasportipo',
            type: 'POST',
            dataType: 'html',
            data: {fecha1: fecha1, fecha2: fecha2},
          })
          .done(function(data) {
            //console.log(JSON.stringify(data));
            //var p_dni = data.per_dni,
            //var p_apellido = data.per_apellido;
            $('#enviar').empty();
            $('#enviar').html(data);
            //$('.enviarap').html(JSON.stringify(data.per_apellido, null, 2));
          })
          .fail(function() {
            console.log("error");
          })
          .always(function() {
            console.log("complete");
          });          
      }}}}});
    </script>

     <script>$(document).ready(function() {
    $('#tablaEduConsultante').DataTable( {
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
      title: 'Casos de violencia contra las mujeres registrados e informados, según educación de la consultante, en la provincia de Tucumán. Período: <?php echo date("d/m/Y", strtotime($_POST['fecha1'])); ?> - <?php echo date("d/m/Y", strtotime($_POST['fecha2'])); ?>.',
      className: 'btn',
      text: "Excel"
  },
  {
    extend: 'csvHtml5',
    title: 'Casos de violencia contra las mujeres registrados e informados, según educación de la consultante, en la provincia de Tucumán. Período: <?php echo date("d/m/Y", strtotime($_POST['fecha1'])); ?> - <?php echo date("d/m/Y", strtotime($_POST['fecha2'])); ?>.',
    className: 'btn',
    text: "CSV"
},
    {
      extend: 'pdfHtml5',
      title: 'Casos de violencia contra las mujeres registrados e informados, según educación de la consultante, en la provincia de Tucumán. Período: <?php echo date("d/m/Y", strtotime($_POST['fecha1'])); ?> - <?php echo date("d/m/Y", strtotime($_POST['fecha2'])); ?>.',
      className: 'btn',
      text: "PDF"
  },
{
  extend: 'print',
  title: 'Casos de violencia contra las mujeres registrados e informados, según educación de la consultante, en la provincia de Tucumán. Período: <?php echo date("d/m/Y", strtotime($_POST['fecha1'])); ?> - <?php echo date("d/m/Y", strtotime($_POST['fecha2'])); ?><H5>Registro Único de Casos de Violencia contra las Mujeres (RUCVM)</H5><BR/>.',
  className: 'btn',
  text: "Imprimir"
},
 {
   extend: 'copy',
   title: 'Casos de violencia contra las mujeres registrados e informados, según educación de la consultante, en la provincia de Tucumán. Período: <?php echo date("d/m/Y", strtotime($_POST['fecha1'])); ?> - <?php echo date("d/m/Y", strtotime($_POST['fecha2'])); ?>.',
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