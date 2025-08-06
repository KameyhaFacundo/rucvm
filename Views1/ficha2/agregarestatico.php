<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">    
    <title>Nueva ficha</title>

    <!-- Bootstrap core CSS-->
    <link href="/rucvm1/Views1/template/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="/rucvm1/Views1/template/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template-->
    <link href="/rucvm1/Views1/template/css/sb-admin.css" rel="stylesheet">
  </head>

  <body class="bg-dark">
  <div id="enviar" name="enviar"> 
      <?php include 'r_menuizq1.php';?>
    <div id="content-wrapper">
      <div class="container-fluid">
        <div class="card col-xs-12 col-sm-12 col-md-12 col-lg-12">
          <div class="card-header">Nueva ficha</div>
            <div class="card-body">
              <form role="form" class="form-horizontal" enctype="multipart/form-data"  method="post" action="">
                <div class="form-group">
                    <div class="form-row">
                      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="form-label-group">
                          <b>Grupo familiar conviviente</b>
                        </div>
                      </div>
                    </div>
                  </div>
                <div class="form-group">
                  <div class="form-row">
                    <div class="col-xs-12 col-sm-6 col-md-8 col-lg-3">
                      <div class="form-label-group">
                        <input type="number" id="cantidad" name="cantidad" class="form-control" placeholder="" min="0" max="20" required="required" autofocus="autofocus" value="<?php if (isset($_SESSION['cantidad1'])) echo $_SESSION['cantidad1'];?>">
                        <label for="per_dni"><small>Cantidad de familiares</small></label>
                      </div>
                    </div>
                      <div class="input-group-append">
                        <button id="insertar" name="insertar" class="btn btn-primary" type="submit">
                          <i class="fa fa-user-plus" aria-hidden="true"></i>
                        </button>
                      </div>
                      <!--<div class="input-group-append">
                        <button id="insertar" name="insertar" class="btn btn-danger" type="submit">
                          <i class="fas fa-user-minus" aria-hidden="true"></i>
                        </button>
                      </div>-->
                     </div>
                    </div> 
                      <div class="table-responsive">
                        <table id="tabla" name="tabla" class="table table-bordered col-mb-12">
                          <thead>
                            <tr>
                              <!--<td>Nº</td>-->
                              <td>Apellido</td>
                              <td>Nombre</td>
                              <td>Sexo</td>
                              <td>Edad</td>
                              <td>Meses</td>
                              <td>Vínculo</td>
                              <td>Discapacitado</td>
                              <td>Violencia</td>
                            </tr>
                          </thead>
                    <?php
                      if($_POST){
                      $cantidad = $_POST['cantidad'];
                      //echo 'si entro en el if';
                      $i = 0;
                      if ($cantidad){
                       while($i<$cantidad){
                                    ?>
                                    <tbody id="grupofam" name="grupofam">
                                      <tr class="selected" id="<?php echo 'fila'.$i; ?>">
                                        <!--<td id="td_id"><?php// $fila=$i+1; echo $fila; ?></td>-->
                                   
                                       <td id="td_id"><input id="<?php echo 'f2_apellido'.$i; ?>" size="30%" style="color: black" type="text" name="<?php echo 'f2_apellido'.$i; ?>" value= ""/></td>
                                      
                                       <td id="td_id"><input id="<?php echo 'f2_nombre'.$i; ?>" size="30%" style="color: black" type="text" name="<?php echo 'f2_nombre'.$i; ?>" value= ""/></td>
                                      
                                       <td id="td_id"><input id="<?php echo 'idsexo'.$i; ?>" min="1" max="3" style="color: black" type="number" name="<?php echo 'idsexo'.$i; ?>" value= ""/></td>
                                      
                                       <td id="td_id"><input id="<?php echo 'f2_edad'.$i; ?>" min="1" max="125" style="color: black" type="number" name="<?php echo 'f2_edad'.$i; ?>" value= ""/></td>
                                       
                                       <td id="td_id"><input id="<?php echo 'f2_mes'.$i; ?>" min="1" max="11" style="color: black" type="number" name="<?php echo 'f2_mes'.$i; ?>" value= ""/></td>
                                      
                                       <td id="td_id"><input id="<?php echo 'idpariente'.$i; ?>" min="1" max="14" style="color: black" type="number" name="<?php echo 'idpariente'.$i; ?>" value= ""/></td>
                                       
                                       <td id="td_id"><input id="<?php echo 'discapacitado'.$i; ?>" min="1" max="2"  style="color: black" type="number" name="<?php echo 'discapacitado'.$i; ?>" value= ""/></td>
                                      
                                       <td id="td_id"><input id="<?php echo 'victimavio'.$i; ?>" min="1" max="2" style="color: black" type="number" name="<?php echo 'victimavio'.$i; ?>" value= ""/></td>
                                       </tr>
                                   </tbody>
                                   <input id="cantidad1" name="cantidad1" size="30%" style="color: black" type="hidden" name="cantidad1" value= "<?php if(isset($cantidad)) echo $cantidad; ?>"/>
                                   <?php
                                   //echo $contv;
                                    $i++;
                                    $contv++;
                                  }
                                }
                              }
                                if ($_SESSION['cantidad1']){
                                  $i = 0;
                                 while($i<$_SESSION['cantidad1']){
                                    ?>
                                    <tbody id="grupofam" name="grupofam">
                                      <tr class="selected" id="<?php echo 'fila'.$i; ?>">
                                        <!--<td id="td_id"><?php// $fila=$i+1; echo $fila; ?></td>-->
                                   
                                       <td id="td_id"><input id="<?php echo 'f2_apellido'.$i; ?>" size="30%" style="color: black" type="text" name="<?php echo 'f2_apellido'.$i; ?>" value= "<?php if (isset($_SESSION['f2_f2_apellido'.$i])) echo $_SESSION['f2_f2_apellido'.$i]; ?>"/></td>
                                      
                                       <td id="td_id"><input id="<?php echo 'f2_nombre'.$i; ?>" size="30%" style="color: black" type="text" name="<?php echo 'f2_nombre'.$i; ?>" value= "<?php if (isset($_SESSION['f2_f2_nombre'.$i])) echo $_SESSION['f2_f2_nombre'.$i];?>"/></td>
                                      
                                       <td id="td_id"><input id="<?php echo 'idsexo'.$i; ?>" min="1" max="3" style="color: black" type="number" name="<?php echo 'idsexo'.$i; ?>" value= "<?php if (isset($_SESSION['f2_idsexo'.$i])) echo $_SESSION['f2_idsexo'.$i];?>"/></td>
                                      
                                       <td id="td_id"><input id="<?php echo 'f2_edad'.$i; ?>" min="1" max="125" style="color: black" type="number" name="<?php echo 'f2_edad'.$i; ?>" value= "<?php if (isset($_SESSION['f2_f2_edad'.$i])) echo $_SESSION['f2_f2_edad'.$i];?>"/></td>
                                       
                                       <td id="td_id"><input id="<?php echo 'f2_mes'.$i; ?>" min="1" max="11" style="color: black" type="number" name="<?php echo 'f2_mes'.$i; ?>" value= "<?php if (isset($_SESSION['f2_f2_mes'.$i])) echo $_SESSION['f2_f2_mes'.$i];?>"/></td>
                                      
                                       <td id="td_id"><input id="<?php echo 'idpariente'.$i; ?>" min="1" max="14" style="color: black" type="number" name="<?php echo 'idpariente'.$i; ?>" value= "<?php if (isset($_SESSION['f2_idpariente'.$i])) echo $_SESSION['f2_idpariente'.$i];?>"/></td>
                                       
                                       <td id="td_id"><input id="<?php echo 'discapacitado'.$i; ?>" min="1" max="2"  style="color: black" type="number" name="<?php echo 'discapacitado'.$i; ?>" value= "<?php if (isset($_SESSION['f2_discapacitado'.$i])) echo $_SESSION['f2_discapacitado'.$i];?>"/></td>
                                      
                                       <td id="td_id"><input id="<?php echo 'victimavio'.$i; ?>" min="1" max="2" style="color: black" type="number" name="<?php echo 'victimavio'.$i; ?>" value= "<?php if (isset($_SESSION['f2_victimavio'.$i])) echo $_SESSION['f2_victimavio'.$i];?>"/></td>
                                       </tr>
                                   </tbody>
                                   <input id="cantidad2" size="30%" style="color: black" type="hidden" name="cantidad2" value= "<?php if($_POST['cantidad']) echo $_POST['cantidad']; ?>"/>
                                   <?php
                                   //echo $i;
                                    $i++;
                                  }
                                }
                            ?>  
                      </table>
                      </div> 
                      <div class="form-group">
                        <div class="form-row">
                          <div class="col-xs-3 col-sm-3 col-md-6 col-lg-3"></div>
                          <div class="col-xs-2 col-sm-3 col-md-8 col-lg-2">
                            <a class="btn btn-primary btn-block" href="<?php echo URL; ?>">Volver</a>
                          </div>  
                          <div class="col-xs-2 col-sm-1 col-md-6 col-lg-2"></div>                                      
                          <div class="col-xs-2 col-sm-3 col-md-8 col-lg-2">
                              <!--<input class="btn btn-primary btn-block " type="submit" name="submit" value="Agregar" /> -->
                              <input class="btn btn-primary btn-block " type="submit" value="Siguiente" /> 
                          </div>
                          <div class="col-xs-3 col-sm-4 col-md-6 col-lg-3"></div>                    
                        </div>
                      </div>                
                  </form>
              </div>
            </div>
          </div>
        </div>
      </div>
<script src="/rucvm1/Views1/template/vendor/jquery/jquery.min.js"></script>
    <!-- Bootstrap core JavaScript-->
<script src="/rucvm1/Views1/template/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
<script src="/rucvm1/Views1/template/vendor/jquery-easing/jquery.easing.min.js"></script>
<script type="text/javascript" src="http://localhost/rucvm1/Views1/template/vendor/funciones.js"></script>
<!--<script type="text/javascript">
      $('#insertar').on('click', function(event) {
        event.preventDefault();
        var cantidad = $('#cantidad').val();
          $.ajax({
            url: '/rucvm1/Views1/ficha2/grupofamiliar.php',
            type: 'POST',
            dataType: 'html',
            data: {cantidad: cantidad},
          })
          .done(function(data) {
            //console.log(JSON.stringify(data));
            //var p_dni = data.per_dni,
            //var p_apellido = data.per_apellido;
            $('#cantidad1').empty();
            $('#cantidad1').html(data);
            //$('.enviarap').html(JSON.stringify(data.per_apellido, null, 2));
          })
          .fail(function() {
            console.log("error");
          })
          .always(function() {
            console.log("complete");
          });          
      });
    </script>-->
</body>
</html>