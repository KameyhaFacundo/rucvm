<!DOCTYPE html>
<html lang="en">
<script type="text/javascript">
  window.onload=function(){
          var apellido_c = document.getElementById("per_apellido").value;
          var apellido_a = document.getElementById("per_apellido_agresor").value;
          var dni_consultante = document.getElementById("per_dni").value;
          var dni_agresor = document.getElementById('per_dni_agresor').value;
          if(dni_consultante == ''){
            document.getElementById('per_dni_agresor').readOnly = true;
          }
          if(apellido_c == ''){
            document.getElementById("per_apellido").readOnly = true;
            document.getElementById("per_nombre").readOnly = true;
          }
          if(dni_agresor == ''){
            document.getElementById("per_apellido_agresor").readOnly = true;
            document.getElementById("per_nombre_agresor").readOnly = true;
          }
        }
</script>



  <body class="bg-dark">
      <?php //error_reporting(0);?>

      <!-- Bootstrap core CSS-->

      <div id="enviar" name="enviar">
          <?php include 'r_menuizq.php';?>
          <div id="content-wrapper" style="background-color: #e9e2e8">
              <div class="container-fluid">
                  <div class="card col-xs-12 col-sm-12 col-md-12 col-lg-12">
                      <div class="card-header">Editar sumario</div>
                      <div class="card-body">
                          <form role="form" class="form-horizontal" enctype="multipart/form-data" method="post"
                              action="">
                              <div class="form-group">
                                  <div class="form-row">
                                      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                          <div class="form-label-group">
                                              <b>Sumario</b>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                              <?php $row = pg_fetch_array($datos); ?>
                              <div class="form-group">
                                  <div class="form-row">
                                      <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                                          <div class="form-label-group">
                                              <input type="date" id="sum_fecha" name="sum_fecha"
                                                  class="form-control" placeholder="Fecha"
                                                  required="required" autofocus="autofocus"
                                                  max="<?php echo date("Y-m-d");?>"
                                                  value="<?php if(isset($row)){ echo $row['sum_fecha']; }else{ if($_SESSION['sum_fecha']){ echo $_SESSION['sum_fecha'];}else{ echo date("Y-m-d");}} ?>">
                                              <label for="sum_fecha">Fecha</label>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                              <div class="form-group">
                                  <div class="form-row">
                                      <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                          <div class="selector-causa">
                                              <label for="idcausa"><small>Causa</small></label>
                                              <input type="hidden" id="idcausa1" name="idcausa1" value="<?php if(isset($row)){ echo $row['idcausa']; }else{
                                  if($_SESSION['idcausa']){ echo $_SESSION['idcausa'];}
                                } ?>">
                                              <select name="idcausa[]" id="idcausa" class="form-control" multiple>
                                              </select>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                              <div class="form-group">
                                  <div class="form-row">
                                      <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                          <div class="selector-fiscalia">
                                              <label for="ca_deporigen"><small>Unidad Fiscal</small></label>
                                              <input type="hidden" id="idfiscalia1" name="idfiscalia1"
                                                  value="<?php if(isset($row)){ echo $row['idfiscalia']; }else{ if($_SESSION['idfiscalia']){ echo $_SESSION['idfiscalia'];}} ?> ">
                                              <select name="idfiscalia" id="idfiscalia" style="font-size:11pt"
                                                  class="form-control"></select>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                              <div class="form-group">
                                  <div class="form-row">
                                      <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                                          <div class="form-label-group">
                                              <input type="number" id="sum_numero" name="sum_numero" class="form-control"
                                                  placeholder="N° Sumario"
                                                  value="<?php if(isset($row)){ echo $row['sum_numero']; } ?>"
                                                  oninput="deshabilitar(this.value);" onfocusout="buscarSumario(this.value);">
                                              <label for="idsexo"><small>Nº Sumario</small></label>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                              <div class="form-group">
                                      <div class="form-row">
                                          <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                              <div class="selector-externa">
                                                  <label for="idde_externa"><small>Procede</small></label>
                                                  <input type="hidden" id="idde_externa1" name="idde_externa1"
                                                      value="<?php if(isset($row)){ echo $row['idde_externa']; }else{ if($_SESSION['idde_externa']){ echo $_SESSION['idde_externa'];}else{echo 0;}}?>">
                                                  <select name="idde_externa" id="idde_externa" style="font-size:11pt"
                                                      class="form-control"></select>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                              <hr />
                              <div class="form-group">
                                  <div class="form-row">
                                      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                          <div class="form-label-group">
                                              <b>Víctima</b>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                              <div class="form-group">
                                  <div class="form-row">
                                      <div class="col-xs-12 col-sm-6 col-md-8 col-lg-3">
                                          <div class="form-label-group">
                                              <input type="number" id="per_dni" name="per_dni" class="form-control"
                                                  placeholder="DNI Consultante" min="1000000" max="99999999"
                                                  required="required" autofocus="autofocus"
                                                  value="<?php if(isset($row['per_dni'])){echo $row['per_dni'];} ?>" readonly>
                                              <label for="per_dni"><small>DNI Consultante</small></label>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                              <div class="form-group">
                                  <div class="form-row">
                                      <div class="col-xs-12 col-sm-6 col-md-8 col-lg-6">
                                          <div class="form-label-group">
                                              <input type="text" id="per_apellido" name="per_apellido"
                                                  class="form-control" placeholder="Apellido" required="required"
                                                  value="<?php if(isset($row)){ echo $row['per_apellido']; } ?>">
                                              <label for="per_apellido"><small>Apellido</small></label>
                                          </div>
                                      </div>
                                      <div class="col-xs-12 col-sm-6 col-md-8 col-lg-6">
                                          <div class="form-label-group">
                                              <input type="text" id="per_nombre" name="per_nombre" class="form-control"
                                                  placeholder="Nombre" required="required"
                                                  value="<?php if(isset($row)){ echo $row['per_nombre']; } ?>">
                                              <label for="per_nombre"><small>Nombre</small></label>
                                          </div>
                                      </div>
                                  </div>
                                </div>
                                <div class="form-group">
                                  <div class="form-row">
                                      <div class="col-xs-12 col-sm-6 col-md-8 col-lg-6">
                                          <div class="form-label-group">
                                              <input type="text" id="per_domicilio" name="per_domicilio"
                                                  class="form-control" placeholder="Domicilio" required="required"
                                                  value="<?php if(isset($row)){ echo $row['per_domicilio']; } ?>">
                                              <label for="per_domicilio"><small>Domicilio</small></label>
                                          </div>
                                      </div>
                                      <div class="col-xs-12 col-sm-6 col-md-8 col-lg-6">
                                          <div class="form-label-group">
                                              <input type="text" id="per_celular" name="per_celular" class="form-control"
                                                  placeholder="Celular" required="required"
                                                  value="<?php if(isset($row)){ echo $row['per_celular']; } ?>">
                                              <label for="per_celular"><small>Celular</small></label>
                                          </div>
                                      </div>
                                  </div>
                                </div>
                                  <hr />
                                  <div class="form-group">
                                      <div class="form-row">
                                          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                              <div class="form-label-group">
                                                  <b>Agresor</b>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <div class="form-row">
                                          <div class="col-xs-12 col-sm-6 col-md-8 col-lg-3">
                                              <div class="form-label-group">
                                                  <input type="number" id="per_dni_agresor" name="per_dni_agresor"
                                                      class="form-control" placeholder="DNI Agresor" min="1000000"
                                                      max="99999999"  autofocus="autofocus"
                                                      value="<?php if(isset($row['dni_agresor'])){echo $row['dni_agresor'];}?>" readonly>
                                                  <label for="per_dni_agresor"><small>DNI Agresor</small></label>
                                              </div>
                                          </div>
                                      </div>
                                  </div>

                                  <div class="form-group">
                                      <div class="form-row">
                                          <div class="col-xs-12 col-sm-6 col-md-8 col-lg-6">
                                              <div class="form-label-group">
                                                  <input type="text" id="per_apellido_agresor"
                                                      name="per_apellido_agresor" class="form-control"
                                                      placeholder="Apellido"
                                                      value="<?php if(isset($row)){ echo $row['apellido_agresor']; } ?>">
                                                  <label for="per_apellido_agresor"><small>Apellido</small></label>
                                              </div>
                                          </div>
                                          <div class="col-xs-12 col-sm-6 col-md-8 col-lg-6">
                                              <div class="form-label-group">
                                                  <input type="text" id="per_nombre_agresor" name="per_nombre_agresor"
                                                      class="form-control" placeholder="Nombre"
                                                      value="<?php if(isset($row)){ echo $row['nombre_agresor']; } ?>">
                                                  <label for="per_nombre_agresor"><small>Nombre</small></label>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="form-group">
                                  <div class="form-row">
                                      <div class="col-xs-12 col-sm-6 col-md-8 col-lg-6">
                                          <div class="form-label-group">
                                              <input type="text" id="per_domicilio_agresor" name="per_domicilio_agresor"
                                                  class="form-control" placeholder="Domicilio"
                                                  value="<?php if(isset($row)){ echo $row['domicilio_agresor']; } ?>">
                                              <label for="per_domicilio_agresor"><small>Domicilio</small></label>
                                          </div>
                                      </div>
                                      <div class="col-xs-12 col-sm-6 col-md-8 col-lg-6">
                                          <div class="form-label-group">
                                              <input type="text" id="per_celular_agresor" name="per_celular_agresor" class="form-control"
                                                  placeholder="Celular"
                                                  value="<?php if(isset($row)){ echo $row['celular_agresor']; } ?>">
                                              <label for="per_celular_agresor"><small>Celular</small></label>
                                          </div>
                                      </div>
                                  </div>
                                </div>
                                  <hr />
                                  <div class="form-group">
                                      <div class="form-row">
                                          <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                                              <div class="form-label-group">
                                                  <input type="date" id="sum_fecha_hecho" name="sum_fecha_hecho"
                                                      class="form-control" placeholder="Fecha de ingreso"
                                                      autofocus="autofocus" onfocusout="validarFecha(this.value);"
                                                      value="<?php if(isset($row)){ echo $row['sum_fecha_hecho']; } ?>">
                                                  <label for="sum_fecha_hecho">Fecha de hecho</label>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="form-row">
                                      <div class="col-xs-12 col-sm-6 col-md-8 col-lg-6">
                                          <div class="form-label-group">
                                              <input type="text" id="sum_tel_familiar" name="sum_tel_familiar" class="form-control"
                                                  placeholder="Telefono" required="required"
                                                  value="<?php if(isset($row)){ echo $row['sum_tel_familiar']; }else{ if($_SESSION['p_sum_tel_familiar']){ echo $_SESSION['p_sum_tel_familiar'];}} ?>">
                                              <label for="sum_tel_familiar"><small>Telefono familia</small></label>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="form-group">
                                    <div class="form-row">
                                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                        <div class="selector-comisaria">
                                            <label for="idcomisaria"><small>Comisaria</small></label>
                                            <input  type="hidden" id="idcomisaria1" name="idcomisaria1" value="<?php if(isset($row)){ echo $row['idcomisaria']; }else{ if($_SESSION['idcomisaria']){ echo $_SESSION['idcomisaria'];}} ?> ">
                                            <select name="idcomisaria" id="idcomisaria" style="font-size:11pt" class="form-control"></select>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                                  <div class="form-group">
                                      <div class="form-row">
                                          <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                              <div class="selector-vinculo">
                                                  <label for="idvinculo"><small>Vínculo</small></label>
                                                  <input type="hidden" id="idvinculo1" name="idvinculo1"
                                                      value="<?php if($row['idvinculo']){ echo $row['idvinculo'];}else{echo 0;}?>">
                                                  <select name="idvinculo" id="idvinculo" style="font-size:11pt"
                                                      class="form-control"></select>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <div class="form-row">
                                          <div class="col-xs-12 col-sm-6 col-md-8 col-lg-6">
                                              <div class="form-label-group">
                                                  <input type="number" id="sum_menor" name="sum_menor"
                                                      class="form-control" placeholder="Domicilio2"
                                                      autofocus="autofocus"
                                                      value="<?php if(isset($row)){ echo $row['sum_menor']; }else{ if($_SESSION['sum_menor']){ echo $_SESSION['sum_menor'];}} ?>">
                                                  <label for="agresor"><small>Menor</small></label>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <div class="form-row">
                                          <div class="col-xs-12 col-sm-6 col-md-8 col-lg-6">
                                              <div class="form-label-group">
                                                  <input type="text" id="sum_legajo" name="sum_legajo"
                                                      class="form-control" placeholder="Domicilio"
                                                      autofocus="autofocus"
                                                      value="<?php if(isset($row)){ echo $row['sum_legajo']; }else{ if($_SESSION['sum_legajo']){ echo $_SESSION['sum_legajo'];}} ?>">
                                                  <label for="agresor"><small>Legajo</small></label>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <div class="form-row">
                                          <div class="col-xs-12 col-sm-6 col-md-8 col-lg-6">
                                              <div class="form-label-group">
                                                  <input type="text" id="sum_juez" name="sum_juez"
                                                      class="form-control" placeholder="Domicilio3"
                                                      autofocus="autofocus"
                                                      value="<?php if(isset($row)){ echo $row['sum_juez']; }else{ if($_SESSION['sum_juez']){ echo $_SESSION['sum_juez'];}} ?>">
                                                  <label for="agresor"><small>Juez/a</small></label>
                                              </div>
                                          </div>
                                      </div>
                                  </div>

                                  <div class="form-group">
                                      <div class="form-row">
                                          <div class="col-xs-12 col-sm-6 col-md-8 col-lg-6">
                                              <div class="form-label-group">
                                                  <input type="text" id="sum_tramite" name="sum_tramite"
                                                      class="form-control" placeholder="Domicilio3"
                                                      autofocus="autofocus"
                                                      value="<?php if(isset($row)){ echo $row['sum_tramite']; }else{ if($_SESSION['sum_tramite']){ echo $_SESSION['sum_tramite'];}} ?>">
                                                  <label for="agresor"><small>Trámite</small></label>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <div class="form-row">
                                          <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                              <div class="selector-tipomedida">
                                                  <label for="idtipo_medida"><small>Tipo de medida</small></label>
                                                  <input type="hidden" id="idtipo_medida1" name="idtipo_medida1"
                                                      value="<?php if(isset($row['idtipo_medida'])){ echo $row['idtipo_medida']; }else{ if($_SESSION['p_idtipo_medida']){ echo $_SESSION['p_idtipo_medida'];}}?>">
                                                  <select name="idtipo_medida[]" id="idtipo_medida"
                                                      style="font-size:11pt" class="form-control" multiple></select>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <div class="form-row">
                                          <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                            <label for="sum_resultado"><small>Resultado</small></label>
                                                <select name="sum_resultado" id="sum_resultado" style="font-size:11pt" class="form-control">
                                                    <option value="null">Seleccione un resultado</option>
                                                    <option value="1" <?php if(isset($row['sum_resultado']) && $row['sum_resultado'] == 1){ echo 'selected'; } ?>>Positivo</option>
                                                    <option value="2" <?php if(isset($row['sum_resultado']) && $row['sum_resultado'] == 2){ echo 'selected'; } ?>>Negativo</option>
                                                </select>
                                          </div>
                                      </div>
                                  </div>
                                  <br />
                                  <div class="form-group">
                                      <div class="form-row">
                                          <div class="col-xs-3 col-sm-3 col-md-6 col-lg-3"></div>
                                          <div class="col-xs-2 col-sm-3 col-md-8 col-lg-2">
                                              <a class="btn btn-secondary btn-block"
                                                  href="<?php echo URL;?>home/inicio/">Volver</a>
                                          </div>
                                          <div class="col-xs-2 col-sm-1 col-md-6 col-lg-2"></div>
                                          <div class="col-xs-2 col-sm-3 col-md-8 col-lg-2">
                                              <input class="btn btn-primary btn-block " type="submit" name="submit"
                                                  value="Guardar" />
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
      <script src="<?php echo URL; ?>Views1/template/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
      <!-- Core plugin JavaScript-->
      <script src="<?php echo URL; ?>Views1/template/vendor/jquery-easing/jquery.easing.min.js"></script>

      <script type="text/javascript" src="<?php echo URL; ?>Views1/template/vendor/funciones.js"></script>

<script type="text/javascript">
$( document ).ready(function() {
    var idde_externa = $('#idde_externa1').val();
    $.ajax({
            url: '<?php echo URL; ?>sumario/getDerivaciones',
            type: 'POST',
            dataType: 'html',
            data: {
                idde_externa: idde_externa
            },
            success: function(response)
                    {
                        $('.selector-externa select').html(response).fadeIn();
                    }
          });
});


$( document ).ready(function() {
    var idvinculo = $('#idvinculo1').val();
    $.ajax({
            url: '<?php echo URL; ?>sumario/getVinculos',
            type: 'POST',
            dataType: 'html',
            data: {
                idvinculo: idvinculo
            },
            success: function(response)
                    {
                        $('.selector-vinculo select').html(response).fadeIn();
                    }
          });
});


function validarFecha(value){
  var sum_fecha = document.getElementById('sum_fecha').value;
  if(value > sum_fecha || value === sum_fecha){
    alert('La fecha del hecho debe ser menor a la fecha de ingreso');
    document.getElementById('sum_fecha').value='';
  }
}


$( document ).ready(function() {
  var per_apellido = $('#per_apellido').val();
  var per_nombre = $('#per_nombre').val();
  if(per_apellido != '' && per_nombre != ''){
    $('#per_dni_agresor').attr('readonly', false);
    $('#per_apellido_agresor').attr('readonly', true);
    $('#per_nombre_agresor').attr('readonly', true);
    $('#per_celular_agresor').attr('readonly', true);
    $('#per_domicilio_agresor').attr('readonly', true);
  }else{
    $('#per_dni_agresor').attr('readonly', false);
    $('#per_apellido_agresor').attr('readonly', true);
    $('#per_nombre_agresor').attr('readonly', true);
    $('#per_celular_agresor').attr('readonly', true);
    $('#per_domicilio_agresor').attr('readonly', true);
  }
  var per_dni_agresor = $('#per_dni_agresor').val();
  if(per_dni_agresor !=''){
    $('#per_apellido_agresor').attr('readonly', false);
    $('#per_nombre_agresor').attr('readonly', false);
    $('#per_celular_agresor').attr('readonly', false);
    $('#per_domicilio_agresor').attr('readonly', false);
    var per_apellido_agresor = $('#per_apellido_agresor').val();
    var per_nombre_agresor = $('#per_nombre_agresor').val();
    if(per_apellido_agresor != '' && per_nombre_agresor != ''){
        $('#per_dni_agresor').attr('readonly', true);
    }
  }
});
// Buscar numero de expediente
function buscarSumario(value){
  var sum_numero = value;

  $.ajax({
        url: '<?php echo URL; ?>Views1/sumario/buscarSumario.php',
        type: "POST",
        dataType: 'html',
        data: {"sum_numero": sum_numero},
        success: function(response)
        {
            $('#respuesta').html(response).fadeIn();
        }
});
}
</script>
</body>
</html>

