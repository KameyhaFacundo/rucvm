<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">    
    <title>Nueva consulta</title>

    <!-- Bootstrap core CSS-->
    <link href="<?php echo URL; ?>Views1/template/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="<?php echo URL; ?>Views1/template/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template-->
    <link href="<?php echo URL; ?>Views1/template/css/sb-admin.css" rel="stylesheet">
    <script type="text/javascript">
        window.onload=function(){
          document.getElementById("op34").style.color = 'white';
        }
    </script> 
  </head>

  <body class="bg-dark">
  <div id="enviar" name="enviar"> 
      <?php include 'r_menuizq2.php';?>
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
                          <b>Por evaluación de riesgo</b>
                        </div>
                      </div>
                    </div>
                  </div>
                <div class="form-group">
                  <div class="form-row">
                    <div class="col-xs-12 col-sm-6 col-md-8 col-lg-3">
                      <?php error_reporting(0); ?>
                      <div class="form-label-group">
                        <select name="idriesgo" id="idriesgo" style="font-size:11pt" class="form-control">
                        <option value="" <?php if($_POST['idriesgo']==0) echo 'selected'; ?>>Seleccionar tipo de riesgo</option>
                        <option value="1" <?php if($_POST['idriesgo']==1) echo 'selected'; ?>>Bajo</option>
                        <option value="2" <?php if($_POST['idriesgo']==2) echo 'selected'; ?>>Medio</option>
                        <option value="3" <?php if($_POST['idriesgo']==3) echo 'selected'; ?>>Alto</option>
                        <option value="4" <?php if($_POST['idriesgo']==4) echo 'selected'; ?>>Altísimo</option>
                        </select>
                      </div>
                    </div>
                      <div class="input-group-append">
                        <button id="buscar" name="buscar" class="btn btn-primary" type="submit">
                          <i class="fas fa-search"></i>
                        </button>
                      </div>
                    <?php
                      //echo URL;
                      if(isset($datos)){
                        $filas = pg_num_rows($datos);
                      //echo $filas;
                      if ($filas == 0) {
                      ?>
                      <div class="col-xs-12 col-sm-6 col-md-4 col-lg-8">
                              <div class="form-label-group">
                                <div class="alert alert-danger" align="center">
                                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                  <small>No se encontraron consultantes con ese tipo de riesgo.<strong></strong></small>
                                </div>
                              </div>
                            </div>
                          <?php }?>
                          </div>
                        </div>
                        <?php if ($filas > 0) {?>
                        <div class="table-responsive">
                          <table id="tablaPorRiesgo" name="tabla" class="table table-bordered col-mb-12">
                            <thead>
                              <tr style="background-color: #b3434375">
                                <td>DNI</td>
                                <td>Apellido y Nombre</td>
                                <td>Celular</td>
                                <td>Evaluación de riesgo</td>
                              </tr>
                            </thead>
                            <tbody id="evriesgo" name="evriesgo">
                            <?php 
                            while ( $row = pg_fetch_array($datos)){ ?>
                            
                              <tr bgcolor="#DAD2D9">
                                <td id="per_dni"><?php echo $row['per_dni']; ?></td>
                                <td id="consultante"><?php echo $row['consultante']; ?></td>
                                <td id="per_celular"><?php echo $row['per_celular']; ?></td>
                                <td id="rie_descripcion" <?php if($_POST['idriesgo']==4){ echo 'bgcolor="#ff2727"';}
                                                               if($_POST['idriesgo']==3){ echo 'bgcolor="#ff6666"';}
                                                               if($_POST['idriesgo']==2){ echo 'bgcolor="#ffb366"';}
                                                               if($_POST['idriesgo']==1){ echo 'bgcolor="#ffeb99"';}
                                                               ?>><?php echo $row['rie_descripcion']; ?></td>
                              
                      <?php }?>
                      </tr>
                      
                          </tbody>
                        </table>
                    <?php }}else{?>
                      </div>
                      </div>
                      <?php } ?>   
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
<script src="<?php echo URL; ?>Views1/template/vendor/jquery/jquery.min.js"></script>
    <!-- Bootstrap core JavaScript-->
<script src="<?php echo URL; ?>Views1/template/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
<script src="<?php echo URL; ?>Views1/template/vendor/jquery-easing/jquery.easing.min.js"></script>
<script type="text/javascript">
      $('#buscar').on('click', function(event) {
        event.preventDefault();
        var idriesgo = $('#idriesgo').val();
        if (idriesgo == '') {
          alert('Debe ingresar el tipo de riesgo');
        }else{
          $.ajax({
            url: '<?php echo URL; ?>porriesgo/por_riesgo',
            type: 'POST',
            dataType: 'html',
            data: {idriesgo: idriesgo},
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
      }});
    </script>

    <script>$(document).ready(function(){
    $('#tablaPorRiesgo').DataTable( {
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
      title: 'Fichas por Riesgo',
      className: 'btn',
      text: "Excel"
  },
  {
    extend: 'csvHtml5',
    title: 'Fichas por Riesgo',
    className: 'btn',
    text: "CSV"
},
    {
      extend: 'pdfHtml5',
      title: 'Fichas por Riesgo',
      className: 'btn',
      text: "PDF"
  },
{
  extend: 'print',
  title: '<H2>Fichas por Riesgo</H2><H5>Registro Único de Casos de Violencia contra las Mujeres (RUCVM)</H5><BR/>',
  className: 'btn',
  text: "Imprimir"
},
 {
   extend: 'copy',
   title: 'Fichas por Riesgo',
   className: 'btn',
   text: "Copiar"
 }
   ],
        "aoColumns": [
            null,
            null,
            null,
            null
        ]
    } );
} );</script>
</body>
</html>