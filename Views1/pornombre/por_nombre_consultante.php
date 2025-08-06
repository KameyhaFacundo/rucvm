<!DOCTYPE html>
<html lang="es">

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
      if($_SESSION['idinstitucion'] == 13){
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
                          <b>Por nombre consultante</b>
                        </div>
                      </div>
                    </div>
                  </div>
                <div class="form-group">
                  <div class="form-row">
                    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-3">
                      <div class="form-label-group">
                        <input type="text" id="nombre" name="nombre" class="form-control" placeholder="Nombre Consultante" required="required" autofocus="autofocus" value="<?php echo $_POST['nombre']; ?>">
                        <label for="nombre"><small>Nombre Consultante</small></label>
                      </div>
                    </div>
                    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-3">
                      <div class="form-label-group">
                        <input type="text" id="apellido" name="apellido" class="form-control" placeholder="Apellido Consultante" required="required" autofocus="autofocus" value="<?php echo $_POST['apellido']; ?>">
                        <label for="apellido"><small>Apellido Consultante</small></label>
                      </div>
                    </div>
                      <div class="d-none d-sm-block input-group-append">
                        <button id="buscar" name="buscar" class="btn btn-primary" type="submit">
                          <i class="fas fa-search"></i>
                        </button>
                      </div>
                      <div class="d-block d-sm-none col-xs-12">
                      <button id="buscar" name="buscar" class="btn btn-primary" type="submit">
                          Buscar
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
                                  <small>No se encontró a la persona con nombre y apellido: <strong><?php echo $_POST['nombre']. ' ' .$_POST['apellido']; ?></strong>.</small>
                                </div>
                              </div>
                            </div>
                          <?php }else{?>
                          </div>
                        </div>
                            <div class="table-responsive">
                            <p><?php echo $filas; ?> ficha/s encontrada/s con <strong><?php echo $_POST['nombre']. ' ' .$_POST['apellido']; ?></strong></p>
                              <table class="table table-bordered" id="dataTableBuscarPorNombre" width="100%" cellspacing="0">
                                <thead>
                                  <tr style="background-color: #b3434375">
                                    <th>DNI</th>
                                    <th>Consultante</th>
                                    <th>Agresor</th>
                                    <th>Fecha de consulta</th>
                                    <th>Fecha de agresion</th>
                                    <th>Hora de consulta</th>
                                  </tr>
                                </thead>
                                <tbody>
                            <?php 
                              while ($row1 = pg_fetch_array($datos)){
                            ?>
                                <tr bgcolor="#DAD2D9">
                                  <td id="per_dni"><?php echo $row1['per_dni']; ?></td>
                                  <td id="per_dni"><?php echo $row1['consultante']; ?></td>
                                  <td id="agresor"><?php echo $row1['agresor']; ?></td>
                                  <td id="fec_consulta"><?php echo date("d/m/Y", strtotime($row1['fec_consulta'])); ?></td>
                                  <td id="fec_agresion"><?php echo date("d/m/Y", strtotime($row1['fec_agresion'])); ?></td>
                                  <td id="horaconsulta"><?php echo $row1['horaconsulta']; ?></td>
          
                             <?php  }}} ?>
                                
                              </tr>
                            </tbody>
                        </table>
                    </div>
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
        var nombre = $('#nombre').val();
        var apellido = $('#apellido').val();
        if (nombre == '' || apellido == '') {
          alert('Debe ingresar el nombre/apellido');
        }else{
          $.ajax({
            url: '<?php echo URL; ?>pornombre/por_nombre_consultante',
            type: 'POST',
            dataType: 'html',
            data: {nombre: nombre, apellido: apellido},
          })
          .done(function(data) {
            $('#enviar').empty();
            $('#enviar').html(data);
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