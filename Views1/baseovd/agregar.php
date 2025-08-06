<!DOCTYPE html>
<html lang="es">
      <?php include 'r_menuizq.php';
      date_default_timezone_set('America/Argentina/Tucuman');?>
  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Archivo OVD</title>

    <!-- Bootstrap core CSS-->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin.css" rel="stylesheet">

  </head>

  <body class="bg-dark">

    <div class="container">
      <div class="card card-register mx-auto mt-5">
        <div class="card-header">Agregar un archivo de base</div>
        <div class="card-body">
          <form class="form-horizontal" enctype="multipart/form-data"  method="post" action="">
              
            <div class="form-group">
                <div class="form-row">
              <div class="input-group">
                  <div class="form-label-group">
          <input type="datetime" class="form-control" name="fecha" placeholder="Search for..." value="<?php echo date('Y-m-d H:i');?>" aria-label="Search" aria-describedby="basic-addon2" readonly>
          <label for="fecha">Fecha de Subida</label>
          </div>
        </div>
                </div>
           </div>
                        
              
              
              


            <div class="form-group">
              <div class="form-row">
                <div class="col-md-9">
                  <div class="form-label-group">
                    <input type="file" id="imagen" name="imagen" class="form-control" placeholder="Imagen" required="required">
                    <label for="imagen">Archivo</label>
                  </div>
                </div>
                  
              </div>
            </div>
              
            <div class="form-group">
              <div class="form-row">
                <div class="col-md-9">
                  <div class="form-label-group">
                    <textarea type="text" rows="5" id="observacion" name="observacion" class="form-control" placeholder="observacion"></textarea>
                    <label for="observacion"><small></small></label>
                  </div>
                </div>
                  
              </div>
            </div>
            
            <input class="btn btn-primary active" type="submit" name="submit" value="Enviar" />
            <a class="btn btn-secondary" href="<?php echo URL;?>baseovd/index/">Volver</a>
          </form>
            

          <!--  <div class="text-center">
            <a class="d-block small mt-3" href="login.html">Login Page</a>
            <a class="d-block small" href="forgot-password.html">Forgot Password?</a>
          </div> -->
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  </body>

</html>
