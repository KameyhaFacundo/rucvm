<!DOCTYPE html>
<html lang="en">



  <body class="bg-dark">
         
  <div id="enviar" name="enviar"> 
      <?php include 'r_menuizq1.php';?>
    <div id="content-wrapper" style="background-color: #e9e2e8">
      <div class="container-fluid">
        <div class="card col-xs-12 col-sm-12 col-md-12 col-lg-12">
          <div class="card-header">Nueva usuario</div>
            <div class="card-body">
              <form role="form" class="form-horizontal" enctype="multipart/form-data"  method="post" action="">
                <div class="form-group">
                    <div class="form-row">
                      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="form-label-group">
                          <b>Alta usuario</b>
                        </div>
                      </div>
                    </div>
                  </div>
                      <div class="form-group">
                        <div class="form-row">
                          <div class="col-xs-12 col-sm-6 col-md-8 col-lg-6">
                            <div class="form-label-group">
                              <input type="text" id="apellido" name="apellido" class="form-control" placeholder="Apellido" required="required" value="<?php if(isset($row)){ echo $row['apellido']; }else{ if($_SESSION['p_apellido']){ echo $_SESSION['p_apellido'];}} ?>">
                              <label for="apellido"><small><b>Apellido(*)</b></small></label>
                            </div>
                          </div>
                          <div class="col-xs-12 col-sm-6 col-md-8 col-lg-6">
                            <div class="form-label-group">
                              <input type="text" id="nombre" name="nombre" class="form-control" placeholder="Nombre" required="required" value="<?php if(isset($row)){ echo $row['nombre']; }else{ if($_SESSION['p_nombre']){ echo $_SESSION['p_nombre'];}} ?>">
                              <label for="nombre"><small><b>Nombre(*)</b></small></label>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="form-row">
                          <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                            <div class="form-label-group">
                              <input type="text" id="username" name="username" class="form-control" placeholder="Sexo" min="0" max="2" required="required" value="<?php if(isset($row)){ echo $row['username']; }else{ if($_SESSION['p_username']){ echo $_SESSION['p_username'];}} ?>" onkeyup="this.value=Numeros(this.value)" onfocusout="habilitar(this.value);">
                              <label for="username"><small><b>Nombre de usuario</b></small></label>
                            </div>
                          </div>
                          <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                            <div class="form-label-group">
                              <input type="password" id="contraseña" name="contraseña" class="form-control" placeholder="Contraseña" required="required" value="">
                              <label for="contraseña"><small><b>Contraseña</b></small></label>
                            </div>
                          </div>
                        </div>
                      </div>
                        <div class="form-group">
                          <div class="form-row">
                            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                              <div class="form-label-group">
                                <input type="number" id="permiso" name="permiso" class="form-control" placeholder="permiso"  autofocus="autofocus" min="1" max="2" value="<?php if(isset($row)){ echo $row['permiso']; }else{ if($_SESSION['p_permiso']){ echo $_SESSION['p_permiso'];}} ?>">
                                <label for="permiso"><small>Permiso</small></label>
                              </div>
                            </div>
                          </div>
                        </div>
                        
                        <div class="form-group">
                          <div class="form-row">
                            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                              <div class="form-label-group">
                                <div class="selector-institucion">
                                  <label for="idinstitucion"><small>Institucion</small></label>
                                    <input  type="hidden" id="idinstitucion1" name="idinstitucion" value="<?php if(isset($row)){ echo $row['idinstitucion']; }else{ if($_SESSION['p_idinstitucion']){ echo $_SESSION['p_idinstitucion'];}} ?> ">
                                    <select name="idinstitucion" id="idinstitucion" style="font-size:11pt" class="form-control"></select>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      <div class="form-group">
                        <div class="form-row">
                          <div class="col-xs-3 col-sm-3 col-md-6 col-lg-3"></div>
                          <div class="col-xs-2 col-sm-3 col-md-8 col-lg-2">
                            <a class="btn btn-primary btn-block" href="<?php echo URL; ?>principal/buscar/">Volver</a>
                          </div>  
                          <div class="col-xs-2 col-sm-1 col-md-6 col-lg-2"></div>                                      
                          <div class="col-xs-2 col-sm-3 col-md-8 col-lg-2">
                              <input class="btn btn-primary btn-block " type="submit" name="submit" value="Siguiente" /> 
                             <!-- <a class="btn btn-primary btn-block" href="<?php echo URL; ?>ficha/agregar">Siguiente</a> -->
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

    <script src="<?php echo URL; ?>Views1/template/vendor/jquery/jquery.min.js"></script>
    <!-- Bootstrap core JavaScript-->
<script src="/rucvm1/Views1/template/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
<script src="/rucvm1/Views1/template/vendor/jquery-easing/jquery.easing.min.js"></script>

<script type="text/javascript" src="http://localhost/rucvm1/Views1/template/vendor/funciones.js"></script>

</body>
</html>