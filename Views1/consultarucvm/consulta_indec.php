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
        document.getElementById("op40").style.color = 'white';
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
                        <b>Consulta RUCVM - INDEC <?php if($_POST){ echo 'desde '.date("d/m/Y", strtotime($_POST['fecha1'])).' hasta '.date("d/m/Y", strtotime($_POST['fecha2'])); } ?></b>
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
                          <table id="tablaConsultaIndec" name="tabla" class="table table-bordered col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <thead>
                              <tr style="background-color: #b3434375">  
                                <td><center><strong>DNI</strong></center></td>
                                <td><center><strong>Institución</strong></center></td>
                                <td><center><strong>Fecha de la consulta</strong></center></td>
                                <td><center><strong>Accesibilidad al servicio</strong></center></td>
                                <td><center><strong>Asesoramiento legal</strong></center></td>
                                <td><center><strong>Asistencia psicológica</strong></center></td>
                                <td><center><strong>Asistencia social</strong></center></td>
                                <td><center><strong>Grupos</strong></center></td>
                                <td><center><strong>No informado</strong></center></td>
                                <td><center><strong>Otros</strong></center></td>
                                <td><center><strong>Patrocinio jurídico</strong></center></td>
                                <td><center><strong>Refugio o casa de tránsito u hogar</strong></center></td>
                                <td><center><strong>Área Mujer</strong></center></td>
                                <td><center><strong>Policía o Comisaría de la mujer</strong></center></td>
                                <td><center><strong>Consulado o cancillería</strong></center></td>
                                <td><center><strong>Defensorías o juzgados</strong></center></td>
                                <td><center><strong>No informado</strong></center></td>
                                <td><center><strong>Oficina de empleo</strong></center></td>
                                <td><center><strong>Otra</strong></center></td>
                                <td><center><strong>Programa social</strong></center></td>
                                <td><center><strong>Fecha de la agresión</strong></center></td>
                                <td><center><strong>Hora de la agresión</strong></center></td>
                                <td><center><strong>Momento de la agresión</strong></center></td>
                                <td><center><strong>Presencia de menores</strong></center></td>
                                <td><center><strong>Sexo</strong></center></td>
                                <td><center><strong>Persona trans</strong></center></td>
                                <td><center><strong>Fecha de nacimiento</strong></center></td>
                                <td><center><strong>Edad</strong></center></td>
                                <td><center><strong>Departamento</strong></center></td>
                                <td><center><strong>Localidad</strong></center></td>
                                <td><center><strong>Educación consultante</strong></center></td>
                                <td><center><strong>Actividad consultante</strong></center></td>
                                <td><center><strong>Vínculo con el agresor</strong></center></td>
                                <td><center><strong>Convivencia con el agresor</strong></center></td>
                                <td><center><strong>Violencia económica</strong></center></td>
                                <td><center><strong>Violencia sexual</strong></center></td>
                                <td><center><strong>Violencia física</strong></center></td>
                                <td><center><strong>Prohibición a la participación social</strong></center></td>
                                <td><center><strong>Violencia simbólica</strong></center></td>
                                <td><center><strong>Violencia psicológica</strong></center></td>
                                <td><center><strong>Educación agresor</strong></center></td>
                              </tr>
                            </thead>
                            <tbody>
                              <?php while($row = pg_fetch_array($datos)){ ?>
                              <tr bgcolor="#DAD2D9">
                                <td><center><?php echo $row['per_dni']; ?></center></td>
                                <td><center><?php if($row['ins_descripcion'] != NULL) echo $row['ins_descripcion']; else echo 0; ?></center></td>
                                <td><center><?php if($row['fec_consulta'] != NULL) echo date("d/m/Y", strtotime($row['fec_consulta'])); else echo 0; ?></center></td>
                                <td><center><?php if($row['ac_descripcion'] != NULL) echo $row['ac_descripcion']; else echo 0; ?></center></td>
                                <td><center><?php if($row['di_legal'] != NULL) echo $row['di_legal']; else echo 0; ?></center></td>
                                <td><center><?php if($row['di_apsico'] != NULL) echo $row['di_apsico']; else echo 0; ?></center></td>
                                <td><center><?php if($row['di_asocial'] != NULL) echo $row['di_asocial']; else echo 0; ?></center></td>
                                <td><center><?php if($row['di_grupos'] != NULL) echo $row['di_grupos']; else echo 0; ?></center></td>
                                <td><center><?php if($row['di_noinfo'] != NULL) echo $row['di_noinfo']; else echo 0; ?></center></td>
                                <td><center><?php if($row['di_otros'] != NULL) echo $row['di_otros']; else echo 0; ?></center></td>
                                <td><center><?php if($row['di_pjuridico'] != NULL) echo $row['di_pjuridico']; else echo 0; ?></center></td>
                                <td><center><?php if($row['di_refugio'] != NULL) echo $row['di_refugio']; else echo 0; ?></center></td>
                                <td><center><?php if($row['de_amujer'] != NULL) echo $row['de_amujer']; else echo 0; ?></center></td>
                                <td><center><?php if($row['de_comujer'] != NULL) echo $row['de_comujer']; else echo 0; ?></center></td>
                                <td><center><?php if($row['de_consul'] != NULL) echo $row['de_consul']; else echo 0; ?></center></td>
                                <td><center><?php if($row['de_defen'] != NULL) echo $row['de_defen']; else echo 0; ?></center></td>
                                <td><center><?php if($row['de_noinfo'] != NULL) echo $row['de_noinfo']; else echo 0; ?></center></td>
                                <td><center><?php if($row['de_ofemp'] != NULL) echo $row['de_ofemp']; else echo 0; ?></center></td>
                                <td><center><?php if($row['de_otra'] != NULL) echo $row['de_otra']; else echo 0; ?></center></td>
                                <td><center><?php if($row['de_psocial'] != NULL) echo $row['de_psocial']; else echo 0; ?></center></td>
                                <td><center><?php if($row['fec_agresion'] != NULL) echo date("d/m/Y", strtotime($row1['fec_agresion'])); else echo 0; ?></center></td>
                                <td><center><?php if($row['hora_agresion'] != NULL) echo $row['hora_agresion']; else echo 0; ?></center></td>
                                <td><center><?php if($row['mo_agresion'] != NULL) echo $row['mo_agresion']; else echo 0; ?></center></td>
                                <td><center><?php if($row['p_menores'] != NULL) echo $row['p_menores']; else echo 0; ?></center></td>
                                <td><center><?php if($row['sex_descripcion'] != NULL) echo $row['sex_descripcion']; else echo 0; ?></center></td>
                                <td><center><?php if($row['gen_descripcion'] != NULL) echo $row['gen_descripcion']; else echo 0; ?></center></td>
                                <td><center><?php if($row['per_nacido'] != NULL) echo date("d/m/Y", strtotime($row['per_nacido'])); else echo 0; ?></center></td>
                                <td><center><?php if($row['edad'] != NULL) echo $row['edad']; else echo 0; ?></center></td>
                                <td><center><?php if($row['dep_descripcion'] != NULL) echo $row['dep_descripcion']; else echo 0; ?></center></td>
                                <td><center><?php if($row['loc_nombre'] != NULL) echo $row['loc_nombre']; else echo 0; ?></center></td>
                                <td><center><?php if($row['edu_consultante'] != NULL) echo $row['edu_consultante']; else echo 0; ?></center></td>
                                <td><center><?php if($row['act_descripcion'] != NULL) echo $row['act_descripcion']; else echo 0; ?></center></td>
                                <td><center><?php if($row['vin_descripcion'] != NULL) echo $row['vin_descripcion']; else echo 0; ?></center></td>
                                <td><center><?php if($row['conv_descripcion'] != NULL) echo $row['conv_descripcion']; else echo 0; ?></center></td>
                                <td><center><?php if($row['v_economica'] != NULL) echo $row['v_economica']; else echo 0; ?></center></td>
                                <td><center><?php if($row['v_sexual'] != NULL) echo $row['v_sexual']; else echo 0; ?></center></td>
                                <td><center><?php if($row['v_fisica'] != NULL) echo $row['v_fisica']; else echo 0; ?></center></td>
                                <td><center><?php if($row['v_parsocial'] != NULL) echo $row['v_parsocial']; else echo 0; ?></center></td>
                                <td><center><?php if($row['v_simbolica'] != NULL) echo $row['v_simbolica']; else echo 0; ?></center></td>
                                <td><center><?php if($row['v_psicologica'] != NULL) echo $row['v_psicologica']; else echo 0; ?></center></td>
                                <td><center><?php if($row['edu_agresor'] != NULL) echo $row['edu_agresor']; else echo 0; ?></center></td>
                            <?php } ?>
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
            url: '<?php echo URL; ?>consultarucvm/consulta_indec',
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
    $('#tablaConsultaIndec').DataTable( {
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
      title: 'Consulta RUCVM - INDEC <?php if($_POST){ echo 'desde '.date("d/m/Y", strtotime($_POST['fecha1'])).' hasta '.date("d/m/Y", strtotime($_POST['fecha2'])); } ?>',
      className: 'btn',
      text: "Excel"
  },
  {
    extend: 'csvHtml5',
    title: 'Consulta RUCVM - INDEC <?php if($_POST){ echo 'desde '.date("d/m/Y", strtotime($_POST['fecha1'])).' hasta '.date("d/m/Y", strtotime($_POST['fecha2'])); } ?>',
    className: 'btn',
    text: "CSV"
},
    {
      extend: 'pdfHtml5',
      title: 'Consulta RUCVM - INDEC <?php if($_POST){ echo 'desde '.date("d/m/Y", strtotime($_POST['fecha1'])).' hasta '.date("d/m/Y", strtotime($_POST['fecha2'])); } ?>',
      className: 'btn',
      text: "PDF"
  },
{
  extend: 'print',
  title: '<H2>Consulta RUCVM - INDEC <?php if($_POST){ echo 'desde '.date("d/m/Y", strtotime($_POST['fecha1'])).' hasta '.date("d/m/Y", strtotime($_POST['fecha2'])); } ?></H2><H5>Registro Único de Casos de Violencia contra las Mujeres (RUCVM)</H5><BR/>',
  className: 'btn',
  text: "Imprimir"
},
 {
   extend: 'copy',
   title: 'Consulta RUCVM - INDEC <?php if($_POST){ echo 'desde '.date("d/m/Y", strtotime($_POST['fecha1'])).' hasta '.date("d/m/Y", strtotime($_POST['fecha2'])); } ?>',
   className: 'btn',
   text: "Copiar"
 }
   ],
        "aoColumns": [
            null,
            null,
            { "sType": "date-uk" },
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
            null,
            null,
            null,
            { "sType": "date-uk" },
            null,
            null,
            null,
            null,
            null,
            { "sType": "date-uk" },
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