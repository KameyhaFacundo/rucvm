<?php if($_SESSION['idusuario'] == 12){ ?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">    
    <title>Usuarios</title>

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
        include 'r_menuizq.php';
      ?>
    <div id="content-wrapper" style="background-color: #e9e2e8">
      <div class="container-fluid">
        <div class="card col-xs-12 col-sm-12 col-md-12 col-lg-12">
          <div class="card-header">Usuarios</div>
            <div class="card-body">
              <form role="form" class="form-horizontal" enctype="multipart/form-data"  method="post" action="">
                <div class="form-group">
                    <div class="form-row">
                      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="form-label-group">
                          <b>Usuarios del sistema</b>
                        </div>
                      </div>
                    </div>
                  </div>
                <div class="form-group">
                  <div class="form-row">
                    <div class="col-xs-12 col-sm-6 col-md-8 col-lg-3">
                      <div class="form-label-group">
                        <input type="text" id="usuario" name="usuario" class="form-control" placeholder="Escriba aquí..." required="required" autofocus="autofocus" value="<?php echo $_POST['usuario']; ?>">
                        <label for="usuario"><small>Apellido/Nombre</small></label>
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
                                  <small>No se encontró al usuario <strong><?php echo $_POST['usuario']; ?></strong>.</small>
                                </div>
                              </div>
                            </div>
                          <?php }?>
                          </div>
                        </div>
                        <?php 
                        if ($filas > 0) {?>
                        <div class="table-responsive">
                          <table id="tablaUsuarios" name="tablaUsuarios" class="table table-bordered col-mb-12">
                            <thead>
                              <tr style="background-color: #b3434375">
                                <td>Id</td>
                                <td>Apellido</td>
                                <td>Nombre</td>
                                <td>Institución</td>
                                <td>Email</td>
                                <td>Username</td>
                                <td>Contraseña</td>
                                <td>Permiso</td>
                              </tr>
                            </thead>
                            <tbody>
                            <?php 
                            while ( $row = pg_fetch_array($datos)){ ?>
                              <tr bgcolor="#DAD2D9">
                                <td id="id"><?php echo $row['idusuario']; ?></td>
                                <td id="apellido"><?php echo $row['apellido']; ?></td>
                                <td id="nombre"><?php echo $row['nombre']; ?></td>
                                <td id="institucion"><?php echo $row['ins_descripcion']; ?></td>
                                <td id="us_mail"><?php echo $row['us_mail']; ?></td>
                                <td id="username"><?php echo $row['username']; ?></td>
                                <td id="password"><?php echo $row['password']; ?></td>
                                <td id="permiso"><?php echo $row['permiso']; ?></td>
                                </tr>
                            <?php }?>                      
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
                            <br /><a class="btn btn-primary btn-block" href="<?php echo URL;?>usuario/agregar">Nuevo usuario</a>
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



  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Modal Methods</h4>
        </div>
        <div class="modal-body">
          <p>The <strong>show</strong> method shows the modal and the <strong>hide</strong> method hides the modal.</p>
        </div>
      </div>
      
    </div>
  </div>


<script type="text/javascript">
      $('#buscar').on('click', function(event) {
        event.preventDefault();
        var usuario = $('#usuario').val();
        if (usuario == '') {
          alert('Debe ingresar el usuario');
        }else{
          $.ajax({
            url: '<?php echo URL; ?>usuario/ver_usarios',
            type: 'POST',
            dataType: 'html',
            data: {usuario: usuario},
          })
          .done(function(data) {
            //console.log(JSON.stringify(data));
            //var p_dni = data.usuario,
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
<?php } ?>