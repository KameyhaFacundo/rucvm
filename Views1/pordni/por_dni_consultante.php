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
      document.getElementById("op33").style.color = 'white';
    }
    </script> 
  </head>

  <body class="bg-dark">





  <div id="enviar" name="enviar"> 
      <?php 
      if($_SESSION['idinstitucion'] == 13 || $_SESSION['idinstitucion'] == 16){
        include 'r_menuizq.php';
      }else{
        include 'r_menuizq2.php';
      }
      ?>
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
                          <b>Por DNI consultante</b>
                        </div>
                      </div>
                    </div>
                  </div>
                <div class="form-group">
                  <div class="form-row">
                    <div class="col-xs-12 col-sm-6 col-md-8 col-lg-3">
                      <div class="form-label-group">
                        <input type="number" id="per_dni2" name="per_dni2" class="form-control" placeholder="DNI Consultante" min="1000000" max="99999999" required="required" autofocus="autofocus" value="<?php echo $_POST['per_dni2']; ?>">
                        <label for="per_dni2"><small>DNI Consultante</small></label>
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
                                  <small>No se encontró a la persona con DNI: <strong><?php echo $_POST['per_dni2']; ?></strong>.</small>
                                </div>
                              </div>
                            </div>
                          <?php }?>
                          </div>
                        </div>
                        <?php 
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
                        
                        if ($filas > 0) {?>
                        <div class="table-responsive">
                          <table id="tablaPorDniConsultante" name="tablaPorDniConsultante" class="table table-bordered col-mb-12">
                            <thead>
                              <tr style="background-color: #b3434375">
                                <td>DNI</td>
                                <td>Apellido y Nombre</td>
                                <td>Institución</td>
                                <td>Fecha de consulta</td>
                                <td>Hora de consulta</td>
                                <td>Fecha de agresión</td>
                                <td>Hora de agresión</td>
                                <td>Fecha de inicio medida</td>
                                <td>Tipo de medida</td>
                                <td>Plazo de medida (días)</td>
                                <td>Fecha de vencimiento de medida</td>
                              </tr>
                            </thead>
                            <tbody id="grupofami" name="grupofami">
                            <?php 
                            while ( $row = pg_fetch_array($datos)){ 
                              if($row['ins_descripcion'] == '911 - POLICÍA DE TUCUMÁN'){
                              if($row['ca_plazo'] != ''){
                                $fec_vencimiento = strtotime('+'.$row['ca_plazo'].' day', strtotime($row['fec_ingreso']));
                                $fec_vencimiento = date('Y-m-d', $fec_vencimiento);
                                $hoy = date('Y-m-d');
                                $fechoy = strtotime($hoy);
                                $fecven = strtotime($fec_vencimiento);
                                $diff = $fecven - $fechoy;
                                $dias_restantes = round($diff / 86400);
                              }else{
                                $fec_vencimiento = 'Sin fecha de vencimiento';
                                $dias_restantes = '-';
                              }
                            }
                              $medidas = explode(',',$row['ca_tipmedidas']);
                              $cant_medidas = count($medidas);
                              ?>
                            
                              <tr bgcolor="#DAD2D9">
                                <td id="per_dni2"><?php echo $row['per_dni']; ?></td>
                                <td id="consultante"><?php echo $row['consultante']; ?></td>
                                <td id="institucion"><?php echo $row['ins_descripcion']; ?></td>
                                <td id="fec_consulta"><?php if(isset($row['fec_consulta'])) echo date("d/m/Y", strtotime($row['fec_consulta'])); ?></td>
                                <td id="horaconsulta"><?php echo $row['horaconsulta']; ?></td>
                                <td id="fec_agresion"><?php if(isset($row['fec_agresion']))  echo date("d/m/Y", strtotime($row['fec_agresion'])); ?></td>
                                <td id="horaagresion"><?php echo $row['hora_agresion']; ?></td>
                                <td id="fec_ingreso"><?php if(isset($row['fec_ingreso']))  echo date("d/m/Y", strtotime($row['fec_ingreso'])); ?></td>
                                <td id="ca_tipmedidas"><?php for($i=0;$i<$cant_medidas;$i++){ if($i==0){ if($cant_medidas == 1){ echo $tipo_medida[$medidas[$i]];}else{ echo $tipo_medida[$medidas[$i]]. ', '; }}else{ if($i == $cant_medidas-1){ echo $tipo_medida[$medidas[$i]]; }else{ echo $tipo_medida[$medidas[$i]]. ', ';}}} ?></td>
                                <td id="ca_plazo"><?php echo $row['ca_plazo']; ?></td>
                                <td id="fec_vencimiento"><?php if(isset($fec_vencimiento)) { if($row['ca_plazo'] != '') echo date("d/m/Y", strtotime($fec_vencimiento)); else if($row['ins_descripcion'] == '911 - POLICÍA DE TUCUMÁN') echo 'Sin fecha de vencimiento'; } ?></td>
                      <?php }?>
                      </tr>
                      
                          </tbody>
                        </table>
                      </div>
                    <?php }}else{?>
                      </div>
                      <?php } ?>   
                      <div class="form-group">
                        <div class="form-row">
                          <div class="col-xs-4 col-sm-4 col-md-5 col-lg-5"></div>
                          <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
                            <br /><a class="btn btn-secondary btn-block" href="<?php echo URL;?>principal/buscar/">Volver</a>
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
        var per_dni2 = $('#per_dni2').val();
        if (per_dni2 == '') {
          alert('Debe ingresar el DNI');
        }else{
          $.ajax({
            url: '<?php echo URL; ?>pordni/por_dni_consultante',
            type: 'POST',
            dataType: 'html',
            data: {per_dni2: per_dni2},
          })
          .done(function(data) {
            //console.log(JSON.stringify(data));
            //var p_dni = data.per_dni2,
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



</body>
</html>