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
        document.getElementById("op49").style.color = 'white';
      }
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
              <form role="form" class="form-horizontal" enctype="multipart/form-data"  method="post" action="">
                <div class="form-group">
                  <div class="form-row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                      <div class="form-label-group">
                        <b>Combinación de violencias <?php if($_POST){ echo 'desde '.date("d/m/Y", strtotime($_POST['fecha1'])).' hasta '.date("d/m/Y", strtotime($_POST['fecha2'])); } ?></b>
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
                          <table id="tablaComViolencia" name="tabla" class="table table-bordered col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <thead>
                              <tr style="background-color: #b3434375">  
                                <td><center><strong>Combinación de violencia</strong></center></td>
                                <td><center><strong>Fichas</strong></center></td>
                              </tr>
                            </thead>
                            <tbody>
                              <?php $row = pg_fetch_array($datos); ?>
                              <tr bgcolor="#DAD2D9">
                                <td><center>Violencia física</center></td>
                                <td><center><?php echo $row['fis']; ?></center></td>
                              </tr>
                              <tr bgcolor="#DAD2D9">
                                <td><center>Violencia psicológica</center></td>
                                <td><center><?php echo $row['psico']; ?></center></td>
                              </tr>
                              <tr bgcolor="#DAD2D9">
                                <td><center>Violencia económica</center></td>
                                <td><center><?php echo $row['eco']; ?></center></td>
                              </tr>
                              <tr bgcolor="#DAD2D9">
                                <td><center>Violencia sexual</center></td>
                                <td><center><?php echo $row['sex']; ?></center></td>
                              </tr>
                              <tr bgcolor="#DAD2D9">
                                <td><center>Restricción a la participación social</center></td>
                                <td><center><?php echo $row['rps']; ?></center></td>
                              </tr>
                              <tr bgcolor="#DAD2D9">
                                <td><center>Violencia simbólica</center></td>
                                <td><center><?php echo $row['sim']; ?></center></td>
                              </tr>
                              <tr bgcolor="#DAD2D9">
                                <td><center>Violencia física - Violencia psicológica</center></td>
                                <td><center><?php echo $row['fis_psico']; ?></center></td>
                              </tr>
                              <tr bgcolor="#DAD2D9">
                                <td><center>Violencia psicológica - Violencia económica</center></td>
                                <td><center><?php echo $row['psico_eco']; ?></center></td>
                              </tr>
                              <tr bgcolor="#DAD2D9">
                                <td><center>Violencia psicológica - Violencia sexual</center></td>
                                <td><center><?php echo $row['psico_sex']; ?></center></td>
                              </tr>
                              <tr bgcolor="#DAD2D9">
                                <td><center>Violencia fisica - Violencia sexual</center></td>
                                <td><center><?php echo $row['fis_sex']; ?></center></td>
                              </tr>
                              <tr bgcolor="#DAD2D9">
                                <td><center>Violencia fisica - Violencia económica</center></td>
                                <td><center><?php echo $row['fis_eco']; ?></center></td>
                              </tr>
                              <tr bgcolor="#DAD2D9">
                                <td><center>Violencia física - Restricción a la participación social</center></td>
                                <td><center><?php echo $row['fis_rps']; ?></center></td>
                              </tr>
                              <tr bgcolor="#DAD2D9">
                                <td><center>Violencia física - Violencia simbólica</center></td>
                                <td><center><?php echo $row['fis_sim']; ?></center></td>
                              </tr>
                              <tr bgcolor="#DAD2D9">
                                <td><center>Violencia sexual - Violencia económica</center></td>
                                <td><center><?php echo $row['eco_sex']; ?></center></td>
                              </tr>
                              <tr bgcolor="#DAD2D9">
                                <td><center>Violencia económica - Restricción a la participación social</center></td>
                                <td><center><?php echo $row['eco_rps']; ?></center></td>
                              </tr>
                              <tr bgcolor="#DAD2D9">
                                <td><center>Violencia económica - Violencia simbólica</center></td>
                                <td><center><?php echo $row['eco_sim']; ?></center></td>
                              </tr>
                              <tr bgcolor="#DAD2D9">
                                <td><center>Violencia psicológica - Restricción a la participación social</center></td>
                                <td><center><?php echo $row['psico_rps']; ?></center></td>
                              </tr>
                              <tr bgcolor="#DAD2D9">
                                <td><center>Violencia psicológica - Violencia simbólica</center></td>
                                <td><center><?php echo $row['psico_sim']; ?></center></td>
                              </tr>
                              <tr bgcolor="#DAD2D9">
                                <td><center>Violencia sexual - Restricción a la participación social</center></td>
                                <td><center><?php echo $row['sex_rps']; ?></center></td>
                              </tr>
                              <tr bgcolor="#DAD2D9">
                                <td><center>Violencia sexual - Violencia simbólica</center></td>
                                <td><center><?php echo $row['sex_sim']; ?></center></td>
                              </tr>
                              <tr bgcolor="#DAD2D9">
                                <td><center>Restricción a la participación social - Violencia simbólica</center></td>
                                <td><center><?php echo $row['rps_sim']; ?></center></td>
                              </tr>
                              <tr bgcolor="#DAD2D9">
                                <td><center>Violencia física - Violencia psicológica - Violencia económica</center></td>
                                <td><center><?php echo $row['fis_psico_eco']; ?></center></td>
                              </tr>
                              <tr bgcolor="#DAD2D9">
                                <td><center>Violencia física - Violencia psicológica - Violencia sexual</center></td>
                                <td><center><?php echo $row['fis_psico_sex']; ?></center></td>
                              </tr>
                              <tr bgcolor="#DAD2D9">
                                <td><center>Violencia psicológica - Violencia económica - Violencia sexual</center></td>
                                <td><center><?php echo $row['psico_eco_sex']; ?></center></td>
                              </tr>
                              <tr bgcolor="#DAD2D9">
                                <td><center>Violencia fisica - Violencia económica - Violencia sexual</center></td>
                                <td><center><?php echo $row['fis_eco_sex']; ?></center></td>
                              </tr>
                              <tr bgcolor="#DAD2D9">
                                <td><center>Violencia fisica - Violencia sexual - Violencia simbólica</center></td>
                                <td><center><?php echo $row['fis_sex_sim']; ?></center></td>
                              </tr>
                              <tr bgcolor="#DAD2D9">
                                <td><center>Violencia fisica - Violencia sexual - Restricción a la participación social</center></td>
                                <td><center><?php echo $row['fis_sex_rps']; ?></center></td>
                              </tr>
                              <tr bgcolor="#DAD2D9">
                                <td><center>Violencia fisica - Violencia psicológica - Violencia simbólica</center></td>
                                <td><center><?php echo $row['fis_psico_sim']; ?></center></td>
                              </tr>
                              <tr bgcolor="#DAD2D9">
                                <td><center>Violencia fisica - Violencia psicológica - Restricción a la participación social</center></td>
                                <td><center><?php echo $row['fis_psico_rps']; ?></center></td>
                              </tr>
                              <tr bgcolor="#DAD2D9">
                                <td><center>Violencia fisica - Violencia económica - Restricción a la participación social</center></td>
                                <td><center><?php echo $row['fis_eco_rps']; ?></center></td>
                              </tr>
                              <tr bgcolor="#DAD2D9">
                                <td><center>Violencia fisica - Violencia económica - Violencia simbólica</center></td>
                                <td><center><?php echo $row['fis_eco_sim']; ?></center></td>
                              </tr>
                              <tr bgcolor="#DAD2D9">
                                <td><center>Violencia fisica - Restricción a la participación social - Violencia simbólica</center></td>
                                <td><center><?php echo $row['fis_rps_sim']; ?></center></td>
                              </tr>
                              <tr bgcolor="#DAD2D9">
                                <td><center>Violencia sexual - Violencia psicológica - Violencia simbólica</center></td>
                                <td><center><?php echo $row['sex_psico_sim']; ?></center></td>
                              </tr>
                              <tr bgcolor="#DAD2D9">
                                <td><center>Violencia sexual - Violencia psicológica - Restricción a la participación social</center></td>
                                <td><center><?php echo $row['sex_psico_rps']; ?></center></td>
                              </tr>
                              <tr bgcolor="#DAD2D9">
                                <td><center>Violencia sexual - Violencia económica - Violencia simbólica</center></td>
                                <td><center><?php echo $row['sex_eco_sim']; ?></center></td>
                              </tr>
                              <tr bgcolor="#DAD2D9">
                                <td><center>Violencia sexual - Violencia económica - Restricción a la participación social</center></td>
                                <td><center><?php echo $row['sex_eco_rps']; ?></center></td>
                              </tr>
                              <tr bgcolor="#DAD2D9">
                                <td><center>Violencia psicológica - Violencia económica - Restricción a la participación social</center></td>
                                <td><center><?php echo $row['psico_eco_rps']; ?></center></td>
                              </tr>
                              <tr bgcolor="#DAD2D9">
                                <td><center>Violencia psicológica - Violencia económica - Violencia simbólica</center></td>
                                <td><center><?php echo $row['psico_eco_sim']; ?></center></td>
                              </tr>
                              <tr bgcolor="#DAD2D9">
                                <td><center>Violencia económica - Restricción a la participación social - Violencia simbólica</center></td>
                                <td><center><?php echo $row['eco_rps_sim']; ?></center></td>
                              </tr>
                              <tr bgcolor="#DAD2D9">
                                <td><center>Violencia física - Violencia sexual - Violencia psicológica - Violencia económica</center></td>
                                <td><center><?php echo $row['fis_sex_psico_eco']; ?></center></td>
                              </tr>
                              <tr bgcolor="#DAD2D9">
                                <td><center>Violencia física - Violencia sexual - Violencia psicológica - Restricción a la participación social</center></td>
                                <td><center><?php echo $row['fis_sex_psico_rps']; ?></center></td>
                              </tr>
                              <tr bgcolor="#DAD2D9">
                                <td><center>Violencia física - Violencia sexual - Violencia psicológica - Violencia simbólica</center></td>
                                <td><center><?php echo $row['fis_sex_psico_sim']; ?></center></td>
                              </tr>
                              <tr bgcolor="#DAD2D9">
                                <td><center>Violencia física - Violencia sexual - Violencia económica - Restricción a la participación social</center></td>
                                <td><center><?php echo $row['fis_sex_eco_rps']; ?></center></td>
                              </tr>
                              <tr bgcolor="#DAD2D9">
                                <td><center>Violencia física - Violencia sexual - Restricción a la participación social - Violencia simbólica</center></td>
                                <td><center><?php echo $row['fis_sex_rps_sim']; ?></center></td>
                              </tr>
                              <tr bgcolor="#DAD2D9">
                                <td><center>Violencia física - Violencia psicológica - Violencia económica - Restricción a la participación social</center></td>
                                <td><center><?php echo $row['fis_psico_eco_rps']; ?></center></td>
                              </tr>
                              <tr bgcolor="#DAD2D9">
                                <td><center>Violencia física - Violencia psicológica - Violencia económica - Violencia simbólica</center></td>
                                <td><center><?php echo $row['fis_psico_eco_sim']; ?></center></td>
                              </tr>
                              <tr bgcolor="#DAD2D9">
                                <td><center>Violencia física - Violencia económica - Restricción a la participación social - Violencia simbólica</center></td>
                                <td><center><?php echo $row['fis_eco_rps_sim']; ?></center></td>
                              </tr>
                              <tr bgcolor="#DAD2D9">
                                <td><center>Violencia sexual - Violencia psicológica - Violencia económica - Restricción a la participación social</center></td>
                                <td><center><?php echo $row['sex_psico_eco_rps']; ?></center></td>
                              </tr>
                              <tr bgcolor="#DAD2D9">
                                <td><center>Violencia sexual - Violencia psicológica - Violencia económica - Violencia simbólica</center></td>
                                <td><center><?php echo $row['sex_psico_eco_sim']; ?></center></td>
                              </tr>
                              <tr bgcolor="#DAD2D9">
                                <td><center>Violencia psicológica - Violencia económica - Restricción a la participación social - Violencia simbólica</center></td>
                                <td><center><?php echo $row['psico_eco_rps_sim']; ?></center></td>
                              </tr>
                              <tr bgcolor="#DAD2D9">
                                <td><center>Violencia física - Violencia sexual - Violencia psicológica - Violencia económica - Restricción a la participación social</center></td>
                                <td><center><?php echo $row['fis_sex_psico_eco_rps']; ?></center></td>
                              </tr>
                              <tr bgcolor="#DAD2D9">
                                <td><center>Violencia física - Violencia sexual - Violencia psicológica - Violencia económica - Violencia simbólica</center></td>
                                <td><center><?php echo $row['fis_sex_psico_eco_sim']; ?></center></td>
                              </tr>
                              <tr bgcolor="#DAD2D9">
                                <td><center>Violencia física - Violencia sexual - Violencia psicológica - Restricción a la participación social - Violencia simbólica</center></td>
                                <td><center><?php echo $row['fis_sex_psico_rps_sim']; ?></center></td>
                              </tr>
                              <tr bgcolor="#DAD2D9">
                                <td><center>Violencia física - Violencia sexual - Violencia económica - Restricción a la participación social - Violencia simbólica</center></td>
                                <td><center><?php echo $row['fis_sex_eco_rps_sim']; ?></center></td>
                              </tr>
                              <tr bgcolor="#DAD2D9">
                                <td><center>Violencia física - Violencia psicológica - Violencia económica - Restricción a la participación social - Violencia simbólica</center></td>
                                <td><center><?php echo $row['fis_psico_eco_rps_sim']; ?></center></td>
                              </tr>
                              <tr bgcolor="#DAD2D9">
                                <td><center>Violencia sexual - Violencia psicológica - Violencia económica - Restricción a la participación social - Violencia simbólica</center></td>
                                <td><center><?php echo $row['sex_psico_eco_rps_sim']; ?></center></td>
                              </tr>
                              <tr bgcolor="#DAD2D9">
                                <td><center>Violencia física - Violencia sexual - Violencia psicológica - Violencia económica - Restricción a la participación social - Violencia simbólica</center></td>
                                <td><center><?php echo $row['fis_sex_psico_eco_rps_sim']; ?></center></td>
                              </tr>
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
<script type="text/javascript" src="http://localhost/rucvm1/Views1/template/vendor/funciones.js"></script>
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
            url: '<?php echo URL; ?>comviolencias/com_violencia',
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
    $('#tablaComViolencia').DataTable( {
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
      title: 'Combinación de violencias <?php if($_POST){ echo 'desde '.date("d/m/Y", strtotime($_POST['fecha1'])).' hasta '.date("d/m/Y", strtotime($_POST['fecha2'])); } ?>',
      className: 'btn',
      text: "Excel"
  },
  {
    extend: 'csvHtml5',
    title: 'Combinación de violencias <?php if($_POST){ echo 'desde '.date("d/m/Y", strtotime($_POST['fecha1'])).' hasta '.date("d/m/Y", strtotime($_POST['fecha2'])); } ?>',
    className: 'btn',
    text: "CSV"
},
    {
      extend: 'pdfHtml5',
      title: 'Combinación de violencias <?php if($_POST){ echo 'desde '.date("d/m/Y", strtotime($_POST['fecha1'])).' hasta '.date("d/m/Y", strtotime($_POST['fecha2'])); } ?>',
      className: 'btn',
      text: "PDF"
  },
{
  extend: 'print',
  title: '<H2>Combinación de violencias <?php if($_POST){ echo 'desde '.date("d/m/Y", strtotime($_POST['fecha1'])).' hasta '.date("d/m/Y", strtotime($_POST['fecha2'])); } ?></H2><H5>Registro Único de Casos de Violencia contra las Mujeres (RUCVM)</H5><BR/>',
  className: 'btn',
  text: "Imprimir"
},
 {
   extend: 'copy',
   title: 'Combinación de violencias <?php if($_POST){ echo 'desde '.date("d/m/Y", strtotime($_POST['fecha1'])).' hasta '.date("d/m/Y", strtotime($_POST['fecha2'])); } ?>',
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