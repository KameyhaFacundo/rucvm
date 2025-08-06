<!DOCTYPE html>
<html lang="en">



  <body class="bg-dark">
      <?php //error_reporting(0);?>
          <!-- Bootstrap core CSS-->


            <script type="text/javascript">
        window.onload=function(){
          //document.getElementById("op20").style.background='#BEB089';
          //document.getElementById("op19").style.background='#BEB089';

              document.getElementById("op20").style.cursor = 'default';
              document.getElementById("op20").style.color = '#585858';
              document.getElementById("op20").style.pointerEvents = "none";
              document.getElementById("op21").style.cursor = 'default';
              document.getElementById("op21").style.color = '#585858';
              document.getElementById("op21").style.pointerEvents = "none";
              document.getElementById("op22").style.cursor = 'default';
              document.getElementById("op22").style.color = '#585858';
              document.getElementById("op22").style.pointerEvents = "none";
              document.getElementById("op23").style.cursor = 'default';
              document.getElementById("op23").style.color = '#585858';
              document.getElementById("op23").style.pointerEvents = "none";
              document.getElementById("op24").style.cursor = 'default';
              document.getElementById("op24").style.color = '#585858';
              document.getElementById("op24").style.pointerEvents = "none";
              document.getElementById("op25").style.cursor = 'default';
              document.getElementById("op25").style.color = '#585858';
              document.getElementById("op25").style.pointerEvents = "none";
              document.getElementById("op26").style.cursor = 'default';
              document.getElementById("op26").style.color = '#585858';
              document.getElementById("op26").style.pointerEvents = "none";
              document.getElementById("op27").style.cursor = 'default';
              document.getElementById("op27").style.color = '#585858';
              document.getElementById("op27").style.pointerEvents = "none";
              document.getElementById("op28").style.cursor = 'default';
              document.getElementById("op28").style.color = '#585858';
              document.getElementById("op28").style.pointerEvents = "none";
              document.getElementById("op29").style.cursor = 'default';
              document.getElementById("op29").style.color = '#585858';
              document.getElementById("op29").style.pointerEvents = "none";
              document.getElementById("op30").style.cursor = 'default';
              document.getElementById("op30").style.color = '#585858';
              document.getElementById("op30").style.pointerEvents = "none";
              document.getElementById("op31").style.cursor = 'default';
              document.getElementById("op31").style.color = '#585858';
              document.getElementById("op31").style.pointerEvents = "none";
              document.getElementById("op32").style.cursor = 'default';
              document.getElementById("op32").style.color = '#585858';
              document.getElementById("op32").style.pointerEvents = "none";

          var apellido = document.getElementById("per_apellido").value;
          if(apellido == ''){
            document.getElementById("per_apellido").readOnly = true;
            document.getElementById("per_nombre").readOnly = true;
            document.getElementById("idsexo").readOnly = true;
            document.getElementById("idgenero").readOnly = true;
            document.getElementById("idestadocivil").readOnly = true;
            document.getElementById("per_nacido").readOnly = true;
            document.getElementById("per_celular").readOnly = true;
            document.getElementById("per_domicilio").readOnly = true;
            document.getElementById("departamento").disabled = true;
            document.getElementById("localidad").disabled = true;
          }
        }

        function habilitar(value)
        {
          if(value=="0")
          {
            // habilitamos
            document.getElementById("idgenero").readOnly=false;
            document.getElementById("idgenero").value='';
          }else{
            // deshabilitamos
            document.getElementById("idgenero").value='0';
            document.getElementById("idgenero").readOnly=true;
          }
        }
    </script>
    <script type="text/javascript">
      $(document).ready(function() {
              document.getElementById("op20").style.cursor = 'default';
              document.getElementById("op20").style.color = '#585858';
              document.getElementById("op20").style.pointerEvents = "none";
              document.getElementById("op21").style.cursor = 'default';
              document.getElementById("op21").style.color = '#585858';
              document.getElementById("op21").style.pointerEvents = "none";
              document.getElementById("op22").style.cursor = 'default';
              document.getElementById("op22").style.color = '#585858';
              document.getElementById("op22").style.pointerEvents = "none";
              document.getElementById("op23").style.cursor = 'default';
              document.getElementById("op23").style.color = '#585858';
              document.getElementById("op23").style.pointerEvents = "none";
              document.getElementById("op24").style.cursor = 'default';
              document.getElementById("op24").style.color = '#585858';
              document.getElementById("op24").style.pointerEvents = "none";
              document.getElementById("op25").style.cursor = 'default';
              document.getElementById("op25").style.color = '#585858';
              document.getElementById("op25").style.pointerEvents = "none";
              document.getElementById("op26").style.cursor = 'default';
              document.getElementById("op26").style.color = '#585858';
              document.getElementById("op26").style.pointerEvents = "none";
              document.getElementById("op27").style.cursor = 'default';
              document.getElementById("op27").style.color = '#585858';
              document.getElementById("op27").style.pointerEvents = "none";
              document.getElementById("op28").style.cursor = 'default';
              document.getElementById("op28").style.color = '#585858';
              document.getElementById("op28").style.pointerEvents = "none";
              document.getElementById("op29").style.cursor = 'default';
              document.getElementById("op29").style.color = '#585858';
              document.getElementById("op29").style.pointerEvents = "none";
              document.getElementById("op30").style.cursor = 'default';
              document.getElementById("op30").style.color = '#585858';
              document.getElementById("op30").style.pointerEvents = "none";
              document.getElementById("op31").style.cursor = 'default';
              document.getElementById("op31").style.color = '#585858';
              document.getElementById("op31").style.pointerEvents = "none";
              document.getElementById("op32").style.cursor = 'default';
              document.getElementById("op32").style.color = '#585858';
              document.getElementById("op32").style.pointerEvents = "none";
      });
    </script>


  <div id="enviar" name="enviar">
      <?php include 'r_menuizq1.php';?>
    <div id="content-wrapper" style="background-color: #e9e2e8">
      <div class="container-fluid">
        <div class="card col-xs-12 col-sm-12 col-md-12 col-lg-12">
          <div class="card-header">Nueva ficha</div>
            <div class="card-body">
              <form role="form" class="form-horizontal" enctype="multipart/form-data"  method="post" action="">
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
                        <input  type="number" id="per_dni" name="per_dni" class="form-control" placeholder="DNI Consultante" min="1000000" max="999999999" required="required" autofocus="autofocus" value="<?php if(isset($_POST['per_dni'])){echo $_POST['per_dni'];}else{ if(isset($_SESSION['p_per_dni'])){echo $_SESSION['p_per_dni'];}} ?>"<?php if(isset($datos)){ $filas = pg_num_rows($datos); if($filas > 0)echo 'readonly';} if(isset($_SESSION['p_per_dni'])&& $_SESSION['p_per_apellido']) echo 'readonly';?>>
                        <label for="per_dni"><small><b>DNI Consultante(*)</b></small></label>
                      </div>
                    </div>
                    <?php
                    if(!isset($_SESSION['p_per_apellido']) && $filas == 0){
                      ?>
                      <div class="input-group-append">
                        <button id="buscar" name="buscar" class="btn btn-primary" type="submit"
                        onsubmit="return Comprobar();">
                          <i class="fas fa-search"></i>
                        </button>
                      </div>
                    <?php } ?>
                    <?php
                      //echo URL;
                      if(isset($datos)){
                        $row = pg_fetch_array($datos);

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
                              <input type="text" id="per_apellido" name="per_apellido" class="form-control" placeholder="Apellido" required="required" value="<?php if(isset($row)){ echo $row['per_apellido']; }else{ if($_SESSION['p_per_apellido']){ echo $_SESSION['p_per_apellido'];}} ?>">
                              <label for="per_apellido"><small><b>Apellido(*)</b></small></label>
                            </div>
                          </div>
                          <div class="col-xs-12 col-sm-6 col-md-8 col-lg-6">
                            <div class="form-label-group">
                              <input type="text" id="per_nombre" name="per_nombre" class="form-control" placeholder="Nombre" required="required" value="<?php if(isset($row)){ echo $row['per_nombre']; }else{ if($_SESSION['p_per_nombre']){ echo $_SESSION['p_per_nombre'];}} ?>">
                              <label for="per_nombre"><small><b>Nombre(*)</b></small></label>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="form-row">
                          <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                            <div class="form-label-group">
                              <input type="number" id="idsexo" name="idsexo" class="form-control" placeholder="Sexo" min="0" max="2" required="required" value="<?php if(isset($row)){ echo $row['idsexo']; }else{ if($_SESSION['p_idsexo']){ echo $_SESSION['p_idsexo'];}} ?>" onkeyup="this.value=Numeros(this.value)" onfocusout="habilitar(this.value);">
                              <label for="idsexo"><small><b>Sexo(*)</b></small></label>
                            </div>
                          </div>
                          <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                            <div class="form-label-group">
                              <input type="number" id="idgenero" name="idgenero" class="form-control" placeholder="Persona trans" onkeyup="this.value=Numeros1(this.value)" required="required" value="<?php if(isset($row)){ echo $row['idgenero']; }else{ if($_SESSION['p_idgenero']){ echo $_SESSION['p_idgenero'];}} ?>">
                              <label for="idgenero"><small><b>Persona Trans(*)</b></small></label>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="form-row">
                          <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                            <div class="form-label-group">
                              <input type="number" id="idestadocivil" name="idestadocivil" class="form-control" placeholder="Estado civil" maxlength="1" required="required"  autofocus="autofocus" min="1" max="6" onkeyup="this.value=Numeros2(this.value)" value="<?php if(isset($row)){ echo $row['idestadocivil']; }else{ if($_SESSION['p_idestadocivil']){ echo $_SESSION['p_idestadocivil'];}} ?>">
                              <label for="idestadocivil"><small><b>Estado civil(*)</b></small></label>
                            </div>
                          </div>
                          <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                            <div class="form-label-group">
                              <?php $fechaactual = date("Y-m-d");
                                    //$fechamasuno = date('d-m-Y', strtotime($fechaactual.'+1 days'));
                                    $fechamenor = date('Y-m-d', strtotime($fechaactual.'- 14 year'));
                              ?>

                              <input type="date" id="per_nacido" name="per_nacido" class="form-control" placeholder="Fecha de nacimiento" required="required" autofocus="autofocus" min="1899-01-01" max="<?php echo $fechamenor;?>" value="<?php if(isset($row)){ echo $row['per_nacido']; }else{ if($_SESSION['p_per_nacido']){ echo $_SESSION['p_per_nacido'];}} ?>">
                              <label for="per_nacido"><b>Fecha de nacimiento(*)</b></label>
                            </div>
                          </div>
                          </div>
                        </div>

                        <div class="form-group">
                          <div class="form-row">
                            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                              <div class="form-label-group">
                                <input type="number" id="per_discapacitada" name="per_discapacitada" class="form-control" placeholder="Discapacitada"  autofocus="autofocus" min="1" max="2" value="<?php if(isset($row)){ echo $row['per_discapacitada']; }else{ if($_SESSION['p_per_discapacitada']){ echo $_SESSION['p_per_discapacitada'];}} ?>">
                                <label for="per_discapacitada"><small>Discapacitada</small></label>
                              </div>
                            </div>
                          </div>
                        </div>

                        <div class="form-group">
                          <div class="form-row">
                            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                              <div class="form-label-group">
                                <input type="number" id="per_celular" name="per_celular" class="form-control" placeholder="DNI Consultante"  autofocus="autofocus" max="100000000000" value="<?php if(isset($row)){ echo $row['per_celular']; }else{ if($_SESSION['p_per_celular']){ echo $_SESSION['p_per_celular'];}} ?>">
                                <label for="per_celular"><small>Celular</small></label>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="form-group">
                          <div class="form-row">
                            <div class="col-xs-12 col-sm-12 col-md-8 col-lg-6">
                              <div class="form-label-group">
                                <input type="text" id="per_domicilio" name="per_domicilio" class="form-control" placeholder="Domicilio"  autofocus="autofocus" value="<?php if(isset($row)){ echo $row['per_domicilio']; }else{ if($_SESSION['p_per_domicilio']){ echo $_SESSION['p_per_domicilio'];}} ?>">
                                <label for="per_domicilio"><small>Domicilio</small></label>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="form-group">
                          <div class="form-row">
                            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                              <div class="selector-departamento">
                                  <label for="departamento"><small>Departamento</small></label>
                                <input  type="hidden" id="departamento1" name="iddepartamento" value="<?php if(isset($row)){ echo $row['iddepartamento']; }else{ if($_SESSION['p_iddepartamento']){ echo $_SESSION['p_iddepartamento'];}} ?> ">
                                <select name="departamento" id="departamento" style="font-size:11pt" class="form-control"></select>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="form-group">
                          <div class="form-row">
                            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                              <div class="selector-localidad">
                                  <label for="localidad"><small>Localidad</small></label>
                                <input  type="hidden" id="localidad1" name="idlocalidad" value="<?php if(isset($row)){ echo $row['idlocalidad']; }else{ if($_SESSION['p_idlocalidad']){ echo $_SESSION['p_idlocalidad'];}} ?> ">
                                <select name="localidad" id="localidad" style="font-size:11pt" class="form-control"></select>
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

<script type="text/javascript">
      $('#buscar').on('click', function(event) {
        event.preventDefault();
        var per_dni = $('#per_dni').val();

        if (per_dni == '') {
          alert('Debe ingresar el DNI de la consultante');
        }else{
        	document.getElementById("per_apellido").readOnly = false;
          	document.getElementById("per_nombre").readOnly = false;
          	document.getElementById("idsexo").readOnly = false;
          	document.getElementById("idgenero").readOnly = false;
          	document.getElementById("idestadocivil").readOnly = false;
          	document.getElementById("per_nacido").readOnly = false;
          	document.getElementById("per_celular").readOnly = false;
          	document.getElementById("per_domicilio").readOnly = false;
          	document.getElementById("departamento").disabled = false;
          	document.getElementById("localidad").disabled = false;
          $.ajax({
            url: '<?php echo URL; ?>persona/agregar',
            type: 'POST',
            dataType: 'html',
            data: {per_dni: per_dni},
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
      }});

      //Sexo
      function Numeros(string){//Solo numeros
        var out = '';
        var filtro = '012';//Caracteres validos

        //Recorrer el texto y verificar si el caracter se encuentra en la lista de validos
        if(string==0 || string==1 || string==2){
           if (filtro.indexOf(string.charAt(i)) != -1)
                 //Se añaden a la salida los caracteres validos
           out += string.charAt(i);
        }
        //Retornar valor filtrado
        return out;
    }

    //Persona trans
      function Numeros1(string){//Solo numeros
        var out = '';
        var filtro = '012349';//Caracteres validos

        //Recorrer el texto y verificar si el caracter se encuentra en la lista de validos
        if(string==0 || string==1 || string==2 || string==3 || string==4 || string==9){
           if (filtro.indexOf(string.charAt(i)) != -1)
                 //Se añaden a la salida los caracteres validos
           out += string.charAt(i);
        }
        //Retornar valor filtrado
        return out;
    }

    //Estado civil
      function Numeros2(string){//Solo numeros
        var out = '';
        var filtro = '123456';//Caracteres validos

        //Recorrer el texto y verificar si el caracter se encuentra en la lista de validos
        if(string==1 || string==2 || string==3 || string==4 || string==5 || string==6){
           if (filtro.indexOf(string.charAt(i)) != -1)
                 //Se añaden a la salida los caracteres validos
           out += string.charAt(i);
        }
        //Retornar valor filtrado
        return out;
    }
    </script>

</body>
</html>
