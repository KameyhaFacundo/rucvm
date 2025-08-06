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
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin.css" rel="stylesheet">

  </head>

  <body class="bg-dark">

  <?php include 'r_menuizq1E.php'; ?>
    <div id="content-wrapper" style="background-color: #e9e2e8">
      <div class="container-fluid">
        <div class="card col-xs-12 col-sm-12 col-md-12 col-lg-12">
          <div class="card-header">Nueva ficha</div>
            <div class="card-body">
              <form action="" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <div class="form-row">
                      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="form-label-group">
                          <b>Medidas Judiciales</b>
                        </div>
                      </div>
                    </div>
                  </div>
                <div class="form-group">
                  <div class="form-row">
                    <div class="col-xs-12 col-sm-6 col-md-8 col-lg-3">
                      <div class="form-label-group">
                        <input type="number" value="<?php if (isset($_SESSION['f41E_me_acerca'])) echo $_SESSION['f41E_me_acerca']; else echo $datos['me_acerca'];?>" name="me_acerca" id="me_acerca" class="form-control" placeholder="Prohibición de acercamiento"  autofocus="autofocus" min="1" max="3" onkeyup="this.value=Numeros(this.value)">
                        <label for="me_acercamimento"><small>Prohibición de acercamiento</small></label>
                      </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-8 col-lg-3">
                      <div class="form-label-group">
                        <input type="number" value="<?php if (isset($_SESSION['f41E_me_exhog'])) echo $_SESSION['f41E_me_exhog']; else echo $datos['me_exhog'];?>" name="me_exhog" id="me_exhog" class="form-control" placeholder="Exclusión del hogar"  min="1" max="3" onkeyup="this.value=Numeros(this.value)">
                        <label for="me_exhog"><small>Exclusión del hogar</small></label>
                      </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-8 col-lg-3">
                        <div class="form-label-group">
                          <input type="number" value="<?php if (isset($_SESSION['f41E_me_perten'])) echo $_SESSION['f41E_me_perten']; else echo $datos['me_perten'];?>" name="me_perten" id="me_perten" class="form-control" placeholder="Retiro de pertenencias"  autofocus="autofocus" min="1" max="3" onkeyup="this.value=Numeros(this.value)">
                          <label for="me_perten"><small>Retiro de pertenencias</small></label>
                        </div>
                      </div>
                      <div class="col-xs-12 col-sm-6 col-md-8 col-lg-3">
                        <div class="form-label-group">
                          <input type="number" value="<?php if (isset($_SESSION['f41E_me_resper'])) echo $_SESSION['f41E_me_resper']; else echo $datos['me_resper'];?>" name="me_resper" id="me_resper" class="form-control" placeholder="Restitución de personas"  autofocus="autofocus" min="1" max="3" onkeyup="this.value=Numeros(this.value)">
                          <label for="me_resper"><small>Restitución de personas</small></label>
                        </div>
                      </div>
                  </div>
                </div>
               <div class="form-group">
                  <div class="form-row">
                    <div class="col-xs-12 col-sm-6 col-md-8 col-lg-3">
                      <div class="form-label-group">
                        <input type="number" value="<?php if (isset($_SESSION['f41E_me_alimen'])) echo $_SESSION['f41E_me_alimen']; else echo $datos['me_alimen'];?>" name="me_alimen" id="me_alimen" class="form-control" placeholder="Alimentos/tenencia provisoria" min="1" max="3" onkeyup="this.value=Numeros(this.value)" >
                        <label for="me_alimen"><small>Alimentos/tenencia provisoria</small></label>
                      </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-8 col-lg-3">
                      <div class="form-label-group">
                        <input type="number" value="<?php if (isset($_SESSION['f41E_me_visitas'])) echo $_SESSION['f41E_me_visitas']; else echo $datos['me_visitas'];?>" name="me_visitas" id="me_visitas" class="form-control" placeholder="Régimen de visitas" min="1" max="3" onkeyup="this.value=Numeros(this.value)" >
                        <label for="me_visitas"><small>Régimen de visitas</small></label>
                      </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-8 col-lg-3">
                      <div class="form-label-group">
                        <input type="number" value="<?php if (isset($_SESSION['f41E_me_psico'])) echo $_SESSION['f41E_me_psico']; else echo $datos['me_psico'];?>" name="me_psico" id="me_psico" class="form-control" placeholder="Intervención psiquiátrica/adicciones" min="1" max="3" onkeyup="this.value=Numeros(this.value)" >
                        <label  for="me_psico"><small>Intervención psiquiátrica/ Adicciones</small></label>
                      </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-8 col-lg-3">
                        <div class="form-label-group">
                          <input type="number" value="<?php if (isset($_SESSION['f41E_me_prohib'])) echo $_SESSION['f41E_me_prohib']; else echo $datos['me_prohib'];?>" name="me_prohib" id="me_prohib" class="form-control" placeholder="Secuestro/Prohibición de armas"  autofocus="autofocus" min="1" max="3" onkeyup="this.value=Numeros(this.value)">
                          <label for="me_prohib"><small>Secuestro/Prohibición de armas</small></label>
                        </div>
                      </div>
                  </div>
                </div>

                <div class="form-group">
                  <div class="form-row">
                    <div class="col-xs-12 col-sm-6 col-md-8 col-lg-3">
                      <div class="form-label-group">
                        <input type="number" value="<?php if (isset($_SESSION['f41E_me_dual'])) echo $_SESSION['f41E_me_dual']; else echo $datos['me_dual'];?>" name="me_dual" id="me_dual" class="form-control" placeholder="Dispositivo Dual" min="1" max="3" onkeyup="this.value=Numeros(this.value)" >
                        <label for="me_alimen"><small>Dispositivo Dual</small></label>
                      </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-8 col-lg-3">
                        <div class="form-label-group">
                          <input type="number" id="me_prisionprev" name="me_prisionprev" class="form-control" placeholder="Prisión preventiva" value= "<?php if (isset($_SESSION['f41E_me_prisionprev'])) echo $_SESSION['f41E_me_prisionprev']; ?>"  autofocus="autofocus" min="1" max="3" onkeyup="this.value=Numeros(this.value)">
                          <label for="me_prisionprev"><small>Prisión preventiva</small></label>
                        </div>
                      </div>
                  </div>
                </div>

                 <div class="form-group">
                    <div class="form-row">
                      <div class="col-xs-12 col-sm-12 col-md-8 col-lg-6">
                        <div class="form-label-group">
                          <input type="text" value="<?php if (isset($_SESSION['f41E_me_otra'])) echo $_SESSION['f41E_me_otra']; else echo $datos['me_otra'];?>" name="me_otra" id="me_otra" class="form-control" placeholder="Otra"  autofocus="autofocus">
                          <label for="me_otra"><small>Otra</small></label>
                        </div>
                      </div>
                    </div>
                  </div>
                  
                  

                <input type="hidden" value="<?php echo $datos['idficha41'];?>" name="idficha41" >


                  <div class="form-group">
                    <div class="form-row">
                      <div class="col-xs-3 col-sm-3 col-md-6 col-lg-3"></div>
                      <div class="col-xs-2 col-sm-3 col-md-8 col-lg-2">
                        <a class="btn btn-primary btn-block" href="<?php echo URL; ?>ficha4/editar">Volver</a>
                      </div>  
                      <div class="col-xs-2 col-sm-1 col-md-6 col-lg-2"></div>                                      
                      <div class="col-xs-2 col-sm-3 col-md-8 col-lg-2">
                          
                         <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#ficha41ModalEditar">
  Guardar
</button>

        
                         <!--  <input class="btn btn-primary btn-block " data-toggle="modal" data-target="#ficha41ModalEditar"  value="Guardar" /> -->
                          <!-- <button type="submit" class="btn btn-primary">Guardar</button> -->
                      </div>
                      <div class="col-xs-3 col-sm-4 col-md-6 col-lg-3"></div>                    
                    </div>
                  </div>
                  <!-- Modal -->
<div class="modal fade" id="ficha41ModalEditar" tabindex="-1" role="dialog" aria-labelledby="ficha41ModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Editar</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>¿Desea guardar los cambios?</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        <button type="submit" class="btn btn-primary">Guardar</button>
      </div>
    </div>
  </div>
</div>
              </form>
        </div>
      </div>
    </div>
  </div>
</div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <script type="text/javascript">
    //medidas
    function Numeros(string){//Solo numeros
        var out = '';
        var filtro = '123';//Caracteres validos
      
        //Recorrer el texto y verificar si el caracter se encuentra en la lista de validos 
        if(string==1 || string==2 || string==3){
           if (filtro.indexOf(string.charAt(i)) != -1) 
                 //Se añaden a la salida los caracteres validos
           out += string.charAt(i);
        }
  }
  </script>


  </body>

</html>
