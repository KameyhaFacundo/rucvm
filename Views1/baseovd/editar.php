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

    <title>Editar Base OVD</title>

    <!-- Bootstrap core CSS-->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin.css" rel="stylesheet">

  </head>

  <body class="bg-dark">
      

    <div class="container">
      <div class="card card-login mx-auto mt-5">
        <div class="card-header">Editar: <strong><?php echo $datos['imagen'];?> <strong/></div>
        <div class="card-body">
          
          <form class="form-horizontal" action="" method="POST" enctype="multipart/form-data">
            <div class="panel-body">
              <div class="form-row">

                <div class="col-md-6">
                  <div class="form-label-group">
                <input type="fechaAnterior" value="<?php echo $datos['fecha'];?>" id="fechaAnterior" name="fechaAnterior" class="form-control" required="required" readonly>
                <label for="fechaAnterior">Fecha de Subida</label>
                  </div>
                    </div>
                    <div class="col-md-6">
                    <div class="form-label-group">
                <input type="fecha" id="fecha" value="<?php echo date('Y-m-d H:i');?>" name="fecha" class="form-control" required="required" readonly>
                <label for="fecha">Fecha</label>
                  </div>


                </div>
              </div>
            </div>
              <br/>
              
            <div class="form-group">
              <div class="form-row">
                <div class="col-md-9">
                  <div class="form-label-group">
                    <textarea type="text" rows="5" id="observacion" name="observacion" class="form-control" placeholder="observacion"><?php if(isset($datos)){ echo $datos['observacion'];} ?></textarea>
                    <label for="observacion"><small></small></label>
                  </div>
                </div>
                  
              </div>
            </div>
              
              
              
            <input type="hidden" value="<?php echo $datos['idbaseovd'];?>" name="idbaseovd" required="required">
            
            <input class="btn btn-primary active" type="submit" name="submit" value="Editar" />
            <a class="btn btn-secondary" href="<?php echo URL;?>baseovd/index/">Volver</a>
          </form>

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
