<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">    
    <title>Nuevo informe</title>

    <!-- Bootstrap core CSS-->
    <link href="<?php echo URL; ?>Views1/template/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="<?php echo URL; ?>Views1/template/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template-->
    <link href="<?php echo URL; ?>Views1/template/css/sb-admin.css" rel="stylesheet">
    <script type="text/javascript">
      window.onload=function(){
        document.getElementById("op45").style.color = 'white';
      }
    </script>
  </head>

  <body class="bg-dark">
  <div id="enviar" name="enviar"> 
      <?php include 'r_menuizq4.php';?>
    <div id="content-wrapper" style="background-color: #e9e2e8">
      <div class="container-fluid">
        <div class="card col-xs-12 col-sm-12 col-md-12 col-lg-12">
          <div class="card-header">Nueva consulta</div>
            <div class="card-body">
              <form role="form" class="form-horizontal" enctype="multipart/form-data"  method="post" action="">
                <div class="form-group">
                  <div class="form-row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                      <div class="form-label-group">
                        <b>Vínculo - convivencia <?php if($_POST){ echo 'desde '.date("d/m/Y", strtotime($_POST['fecha1'])).' hasta '.date("d/m/Y", strtotime($_POST['fecha2'])); } ?></b>
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
                        $filas = pg_num_rows($datos);
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
                        <?php if ($filas > 0) {?>
                          <div class="table-responsive">
                          <table id="tablaVinConvivencia" name="tabla" class="table table-bordered col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <thead>
                              <tr style="background-color: #b3434375">  
                                <td><center><strong>Convivencia con el agresor</strong></center></td>
                                <td><center><strong>Pareja o novio</strong></center></td>
                                <td><center><strong>Ex pareja</strong></center></td>
                                <td><center><strong>Ex novio</strong></center></td>
                                <td><center><strong>Padre</strong></center></td>
                                <td><center><strong>Padrastro</strong></center></td>
                                <td><center><strong>Madre</strong></center></td>
                                <td><center><strong>Madrastra</strong></center></td>
                                <td><center><strong>Hijo</strong></center></td>
                                <td><center><strong>Hija</strong></center></td>
                                <td><center><strong>Hermano</strong></center></td>
                                <td><center><strong>Hermana</strong></center></td>
                                <td><center><strong>Otros parientes</strong></center></td>
                                <td><center><strong>Otro vínculo</strong></center></td>
                                <td><center><strong>Agresor desconocido</strong></center></td>
                              </tr>
                            </thead>
                            <tbody>
                              <?php while($row = pg_fetch_array($datos)){ ?>
                              <tr bgcolor="#DAD2D9">
                                <td><center><?php echo $row['conv_descripcion']; ?></center></td>
                                <td><center><?php if($row['pareja_novio'] != NULL) echo $row['pareja_novio']; else echo 0;?></center></td>
                                <td><center><?php if($row['ex_pareja'] != NULL) echo $row['ex_pareja']; else echo 0;?></center></td>
                                <td><center><?php if($row['ex_novio'] != NULL) echo $row['ex_novio']; else echo 0;?></center></td>
                                <td><center><?php if($row['padre'] != NULL) echo $row['padre']; else echo 0;?></center></td>
                                <td><center><?php if($row['padrastro'] != NULL) echo $row['padrastro']; else echo 0;?></center></td>
                                <td><center><?php if($row['madre'] != NULL) echo $row['madre']; else echo 0;?></center></td>
                                <td><center><?php if($row['madrastra'] != NULL) echo $row['madrastra']; else echo 0;?></center></td>
                                <td><center><?php if($row['hijo'] != NULL) echo $row['hijo']; else echo 0;?></center></td>
                                <td><center><?php if($row['hija'] != NULL) echo $row['hija']; else echo 0;?></center></td>
                                <td><center><?php if($row['hermano'] != NULL) echo $row['hermano']; else echo 0;?></center></td>
                                <td><center><?php if($row['hermana'] != NULL) echo $row['hermana']; else echo 0;?></center></td>
                                <td><center><?php if($row['otros_parientes'] != NULL) echo $row['otros_parientes']; else echo 0;?></center></td>
                                <td><center><?php if($row['otro_vinculo'] != NULL) echo $row['otro_vinculo']; else echo 0;?></center></td>
                                <td><center><?php if($row['agr_desconocido'] != NULL) echo $row['agr_desconocido']; else echo 0;?></center></td>
                              </tr>
                            <?php } ?>
                          </tbody>
                        </table>
                  </div> 
                      <?php }?>
                    <?php }else{?>
                      </div>
                      </div>
                      <?php } ?>  
                      <br />
                      <br />
                      <br />
                      <br /> 
                      <div class="form-group">
                    <div class="form-row">
                      <div class="col-xs-4 col-sm-4 col-md-5 col-lg-5"></div>
                      <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
                          <br /><a class="btn btn-primary btn-block" href="<?php echo URL; ?>principal/buscar">Volver</a>
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
<script src="<?php echo URL; ?>Views1/template/vendor/jquery/jquery.min.js"></script>
    <!-- Bootstrap core JavaScript-->
<script src="<?php echo URL; ?>Views1/template/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
<script src="<?php echo URL; ?>Views1/template/vendor/jquery-easing/jquery.easing.min.js"></script>
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
            url: '<?php echo URL; ?>vinconvivencia/vin_convivencia',
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
    $('#tablaVinConvivencia').DataTable( {
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
      title: 'Vínculo - convivencia <?php if($_POST){ echo 'desde '.date("d/m/Y", strtotime($_POST['fecha1'])).' hasta '.date("d/m/Y", strtotime($_POST['fecha2'])); } ?>',
      className: 'btn',
      text: "Excel"
  },
  {
    extend: 'csvHtml5',
    title: 'Vínculo - convivencia <?php if($_POST){ echo 'desde '.date("d/m/Y", strtotime($_POST['fecha1'])).' hasta '.date("d/m/Y", strtotime($_POST['fecha2'])); } ?>',
    className: 'btn',
    text: "Csv"
},
    {
      extend: 'pdfHtml5',
      title: 'Vínculo - convivencia <?php if($_POST){ echo 'desde '.date("d/m/Y", strtotime($_POST['fecha1'])).' hasta '.date("d/m/Y", strtotime($_POST['fecha2'])); } ?>',
      className: 'btn',
      text: "Pdf"
  },
{
  extend: 'print',
  title: '<H2>Vínculo - convivencia <?php if($_POST){ echo 'desde '.date("d/m/Y", strtotime($_POST['fecha1'])).' hasta '.date("d/m/Y", strtotime($_POST['fecha2'])); } ?></H2><H5>Registro Único de Casos de Violencia contra las Mujeres (RUCVM)</H5><BR/>',
  className: 'btn',
  text: "Imprimir"
},
 {
   extend: 'copy',
   title: 'Vínculo - convivencia <?php if($_POST){ echo 'desde '.date("d/m/Y", strtotime($_POST['fecha1'])).' hasta '.date("d/m/Y", strtotime($_POST['fecha2'])); } ?>',
   className: 'btn',
   text: "Copiar"
 }
   ],
        "aoColumns": [
            null,
            null,
            null,
            null,
            null,
            null,
            null,
            null,
            null,
            null,
            null,
            null,
            null,
            null,
            null    
        ]
    } );
} );</script>
</body>
</html>