<!doctype html>
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

  <?php include 'r_menuizq1.php'; ?>
    <div id="content-wrapper">
      <div class="container-fluid">
        <div class="card col-xs-12 col-sm-12 col-md-12 col-lg-12">
          <div class="card-header">Nueva ficha</div>
            <div class="card-body">
              <form id="enviar" name="enviar" role="form" class="form-horizontal" enctype="multipart/form-data"  method="post">
                <div class="form-group">
                    <div class="form-row">
                      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="form-label-group">
                          <b>Alta consultante</b>
                        </div>
                      </div>
                    </div>
                  </div>
                <div class="form-group">
                  <div class="form-row">
                    <div class="col-xs-12 col-sm-6 col-md-8 col-lg-3">
                      <div class="form-label-group">
                        <input type="number" id="per_dni" name="per_dni" class="form-control" placeholder="DNI Consultante" min="1000000" max="99999999" required="required" autofocus="autofocus" value="<?php echo $_POST['per_dni']; ?>">
                        <label for="per_dni"><small>DNI Consultante</small></label>
                      </div>
                    </div>
                      <div class="input-group-append">
                        <button id="buscar" name="buscar" class="btn btn-primary" type="submit">
                          <i class="fas fa-search"></i>
                        </button>
                      </div>
                    <?php
                      //echo 'esto es el row'.$row;
                      if(isset($datos)){
                        $row = pg_fetch_array($datos);
                        $filas = pg_num_rows($datos);
                      //echo $filas;
                      if ($filas == 0) {
                      ?>
                      <div class="col-xs-12 col-sm-6 col-md-4 col-lg-8">
                              <div class="form-label-group">
                                <div class="alert alert-danger" align="center">
                                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                  <small>No se encontró a la persona con DNI: <strong><?php echo $_POST['per_dni']; ?></strong>. Ingrese los datos a continuación.</small>
                                </div>
                              </div>
                            </div>
                          <?php }} ?>
                          </div>
                        </div>
                      <div class="form-group">
                        <div class="form-row">
                          <div class="col-xs-12 col-sm-6 col-md-8 col-lg-6">
                            <div class="form-label-group">
                              <input type="text" id="per_apellido" name="per_apellido" class="form-control" placeholder="Apellido" required="required" value="<?php if(isset($row)){ echo $row['per_apellido']; } ?>">
                              <label for="per_apellido"><small>Apellido</small></label>
                            </div>
                          </div>
                          <div class="col-xs-12 col-sm-6 col-md-8 col-lg-6">
                            <div class="form-label-group">
                              <input type="text" id="per_nombre" name="per_nombre" class="form-control" placeholder="Nombre" required="required" value="<?php if(isset($row)){ echo $row['per_nombre']; } ?>">
                              <label for="per_nombre"><small>Nombre</small></label>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="form-row">
                          <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                            <div class="form-label-group">
                              <input type="number" id="idsexo" name="idsexo" class="form-control" placeholder="Sexo" required="required" value="<?php if(isset($row)){ echo $row['idsexo']; } ?>">
                              <label for="idsexo"><small>Sexo</small></label>
                            </div>
                          </div>
                          <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                            <div class="form-label-group">
                              <input type="number" id="idgenero" name="idgenero" class="form-control" placeholder="Persona trans" required="required" value="<?php if(isset($row)){ echo $row['idgenero']; } ?>">
                              <label for="idgenero"><small>Persona Trans</small></label>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="form-row">
                          <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                            <div class="form-label-group">
                              <input type="number" id="idestadocivil" name="idestadocivil" class="form-control" placeholder="Estado civil" maxlength="1" required="required" autofocus="autofocus" value="<?php if(isset($row)){ echo $row['idestadocivil']; } ?>">
                              <label for="idestadocivil"><small>Estado civil</small></label>
                            </div>
                          </div>
                          <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                            <div class="form-label-group">
                              <input type="date" id="per_nacido" name="per_nacido" class="form-control" placeholder="Fecha de nacimiento" required="required" autofocus="autofocus" value="<?php if(isset($row)){ echo $row['per_nacido']; } ?>">
                              <label for="per_nacido">Fecha de nacimiento</label>
                            </div>
                          </div>
                          </div>
                        </div>
                        <div class="form-group">
                          <div class="form-row">
                            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                              <div class="form-label-group">
                                <input type="number" id="per_celular" name="per_celular" class="form-control" placeholder="DNI Consultante" required="required" autofocus="autofocus" value="<?php if(isset($row)){ echo $row['per_celular']; } ?>">
                                <label for="per_celular"><small>Celular</small></label>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="form-group">
                          <div class="form-row">
                            <div class="col-xs-12 col-sm-12 col-md-8 col-lg-6">
                              <div class="form-label-group">
                                <input type="text" id="per_domicilio" name="per_domicilio" class="form-control" placeholder="Domicilio" required="required" autofocus="autofocus" value="<?php if(isset($row)){ echo $row['per_domicilio']; } ?>">
                                <label for="per_domicilio"><small>Domicilio</small></label>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="form-group">
                          <div class="form-row">
                            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                              <div class="selector-departamento">
                                <select name="departamento" id="departamento" style="font-size:11pt" class="form-control"></select>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="form-group">
                          <div class="form-row">
                            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                              <div class="selector-localidad">
                                <select name="localidad" id="localidad" style="font-size:11pt" class="form-control"></select>
                              </div>
                            </div>
                          </div>
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
                              <a class="btn btn-primary btn-block" href="<?php echo URL; ?>ficha/agregar">Siguiente</a> 
                          </div>
                          <div class="col-xs-3 col-sm-4 col-md-6 col-lg-3"></div>                    
                        </div>
                      </div>                
                  </form>
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
</body>
</html>