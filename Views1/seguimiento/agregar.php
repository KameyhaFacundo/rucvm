<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">    
    <title>Nueva ficha de seguimiento</title>

    <!-- Bootstrap core CSS-->
    <link href="<?php echo URL; ?>Views1/template/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="<?php echo URL; ?>Views1/template/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template-->
    <link href="<?php echo URL; ?>Views1/template/css/sb-admin.css" rel="stylesheet">
    <script type="text/javascript">
      function habilitar(value)
        {
          if(value=="1")
          {
            // habilitamos
            document.getElementById("seg_monto").disabled=false;
          }else{
            // deshabilitamos
            document.getElementById("seg_monto").value='';
            document.getElementById("seg_monto").disabled=true;
          }
        }

        function habilitar1(value)
        {
          if(value=="1")
          {
            // habilitamos
            document.getElementById("seg_cualpen").disabled=false;
          }else{
            // deshabilitamos
            document.getElementById("seg_cualpen").value='';
            document.getElementById("seg_cualpen").disabled=true;
          }
        }
    </script>
  </head>

  <body class="bg-dark">
  <div id="enviar" name="enviar"> 
      <?php include 'r_menuizq.php';?>
    <div id="content-wrapper" style="background-color: #e9e2e8">
      <div class="container-fluid">
        <div class="card col-xs-12 col-sm-12 col-md-12 col-lg-12">
          <div class="card-header">Nuevo seguimiento</div>
            <div class="card-body">
              <form role="form" class="form-horizontal" enctype="multipart/form-data"  method="post" action="">
                <div class="form-group">
                  <div class="form-row">
                    <div class="col-xs-12 col-sm-6 col-md-8 col-lg-3">
                      <div class="form-label-group">
                        <input type="date" id="seg_fecha" name="seg_fecha" class="form-control" placeholder="Fecha de seguimiento" required="required" autofocus="autofocus" max="<?php echo date("Y-m-d");?>" value="" onfocusout="validarFecha(this.value);">
                        <label for="seg_fecha"><b>Fecha de seguimiento(*)</b></label>
                      </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-8 col-lg-3">
                    <div class="form-label-group">
                      <input type="number" id="seg_derivacion" name="seg_derivacion" class="form-control" placeholder="Derivación" required="required" autofocus="autofocus" value="" min="1" max="2" onkeyup="this.value=Numeros(this.value)">
                        <label for="seg_derivacion"><small><b>Derivación(*)</b></small></label>
                    </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-8 col-lg-3">
                      <div class="form-label-group">
                        <input type="hidden" id="idficha" name="idficha" class="form-control" placeholder="Fecha de seguimiento" required="required" autofocus="autofocus" value="<?php echo $_GET['idficha']; ?>">
                        <label for="idficha"></label>
                      </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-8 col-lg-3">
                      <div class="form-label-group">
                        <input type="hidden" id="fec_consulta" name="fec_consulta" class="form-control" placeholder="Fecha de seguimiento" required="required" autofocus="autofocus" value="<?php $row = pg_fetch_array($datos); echo $row['fec_consulta']; ?>">
                        <label for="idficha"></label>
                      </div>
                    </div>
                    </div>
                  </div>
                     <div class="form-group">
                        <div class="form-row">
                          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <div class="form-label-group">
                              <br /><b>Nuevas situaciones de violencia</b><hr>
                            </div>
                          </div>
                        </div>
                      </div>    
                      <div class="form-group">
                        <div class="form-row">
                          <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                            <div class="form-label-group">
                              <input type="number" id="seg_denuncia" required="required" name="seg_denuncia" class="form-control" placeholder="¿Hizo la denuncia?" value="" min="1" max="2" onkeyup="this.value=Numeros(this.value)">
                              <label for="seg_denuncia"><small><b>¿Hizo la denuncia?(*)</b></small></label>
                            </div>
                          </div>
                          <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                            <div class="form-label-group">
                              <input type="number" id="seg_violencia" name="seg_violencia" required="required" class="form-control" placeholder="Nuevas situaciones de violencia" value="" min="1" max="2" onkeyup="this.value=Numeros(this.value)">
                              <label for="seg_violencia"><small><b>Nuevas situaciones de violencia(*)</b></small></label>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="form-row">
                          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <div class="form-label-group">
                              <br /><b>Novedades del abordaje legal</b><hr>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="form-row">
                          <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                            <div class="form-label-group">
                              <input type="number" id="seg_proteccion" name="seg_proteccion" class="form-control" placeholder="Obtuvo medidas de protección" value="" min="1" max="2" onkeyup="this.value=Numeros(this.value)">
                              <label for="seg_proteccion"><small>Obtuvo medidas de protección</small></label>
                            </div>
                          </div>
                          <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                            <div class="form-label-group">
                              <input type="number" id="seg_vioprotec" name="seg_vioprotec" class="form-control" placeholder="Sufrió violación de medidas de protección" value="" min="1" max="2" onkeyup="this.value=Numeros(this.value)">
                              <label for="seg_vioprotec"><small>Sufrió violación de medidas de protección</small></label>
                            </div>
                          </div>
                          <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                            <div class="form-label-group">
                              <input type="number" id="seg_medidas" name="seg_medidas" class="form-control" placeholder="Pidió nuevas medidas" value="" min="1" max="2" onkeyup="this.value=Numeros(this.value)">
                              <label for="seg_medidas"><small>Pidió nuevas medidas</small></label>
                            </div>
                          </div>
                          <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                            <div class="form-label-group">
                              <input type="number" id="seg_regcom" name="seg_regcom" class="form-control" placeholder="Consiguió régimen comunicacional" value="" min="1" max="2" onkeyup="this.value=Numeros(this.value)">
                              <label for="seg_regcom"><small>Consiguió régimen comunicacional</small></label>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="form-row">
                          <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                            <div class="form-label-group">
                              <input type="number" id="seg_regalim" name="seg_regalim" class="form-control" placeholder="Consiguió régimen de alimentos" maxlength="1" autofocus="autofocus" value="<?php if(isset($row)){ echo $row['seg_regalim']; } ?>" min="1" max="2" onkeyup="this.value=Numeros(this.value)">
                              <label for="seg_regalim"><small>Consiguió regimen de alimentos</small></label>
                            </div>
                          </div>
                          <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                            <div class="form-label-group">
                              <input type="number" id="seg_divorcio" name="seg_divorcio" class="form-control" placeholder="Consiguió setencia de divorcio" autofocus="autofocus" value="" min="1" max="2" onkeyup="this.value=Numeros(this.value)">
                              <label for="seg_divorcio"><small>Consiguió setencia de divorcio</small></label>
                            </div>
                          </div>
                          <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                            <div class="form-label-group">
                               <input type="number" id="seg_reshijos" name="seg_reshijos" class="form-control" placeholder="Consiguió régimen restitución de hijos" autofocus="autofocus" value="" min="1" max="2" onkeyup="this.value=Numeros(this.value)">
                               <label for="seg_reshijos"><small>Consiguió régimen restitución de hijos</small></label>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="form-group">
                        <div class="form-row">
                          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <div class="form-label-group">
                              <br /><b>Novedades del abordaje social</b><hr>
                            </div>
                          </div>
                        </div>
                      </div>
                        <div class="form-group">
                          <div class="form-row">
                            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                              <div class="form-label-group">
                                <input type="number" id="seg_cv" name="seg_cv" class="form-control" placeholder="Se confecciona CV" autofocus="autofocus" value="<?php if(isset($row)){ echo $row['seg_cv']; } ?>" min="1" max="2" onkeyup="this.value=Numeros(this.value)">
                                <label for="seg_cv"><small>Se confecciona CV</small></label>
                              </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                              <div class="form-label-group">
                                <input type="number" id="seg_trabajo" name="seg_trabajo" class="form-control" placeholder="Consiguió trabajo" autofocus="autofocus" value="" min="1" max="2" onkeyup="this.value=Numeros(this.value)">
                                <label for="seg_trabajo"><small>Consiguió trabajo</small></label>
                              </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                            <div class="form-label-group">
                              <input type="number" id="seg_habita" name="seg_habita" class="form-control" placeholder="Sufrió violación de medidas de protección" value="" min="1" max="2" onkeyup="this.value=Numeros(this.value)">
                              <label for="seg_habita"><small>Inicia trámite de solución habitacional</small></label>
                            </div>
                          </div>
                          <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                            <div class="form-label-group">
                              <input type="number" id="seg_mobiliario" name="seg_mobiliario" class="form-control" placeholder="Inicia pedido de mobiliario" value="" min="1" max="2" onkeyup="this.value=Numeros(this.value)">
                              <label for="seg_mobiliario"><small>Inicia pedido de mobilario</small></label>
                            </div>
                          </div>
                          </div>
                        </div>
                        <div class="form-group">
                          <div class="form-row">
                            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                            <div class="form-label-group">
                              <input type="number" id="seg_medica" name="seg_medica" class="form-control" placeholder="Inicia pedido de medicamentos" value="" min="1" max="2" onkeyup="this.value=Numeros(this.value)">
                              <label for="seg_medica"><small>Inicia pedido de medicamentos</small></label>
                            </div>
                          </div>
                            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                              <div class="form-label-group">
                                <input type="number" id="seg_vaesc" name="seg_vaesc" class="form-control" placeholder="Inicia pedido de vacante escolar/CDI" autofocus="autofocus" value="" min="1" max="2" onkeyup="this.value=Numeros(this.value)">
                                <label for="seg_vaesc"><small>Inicia pedido de vacante escolar/CDI</small></label>
                              </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                            <div class="form-label-group">
                              <input type="number" id="seg_tramdni" name="seg_tramdni" class="form-control" placeholder="Tramita DNI" value="" min="1" max="2" onkeyup="this.value=Numeros(this.value)">
                              <label for="seg_tramdni"><small>Tramita DNI</small></label>
                            </div>
                          </div>
                          <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                            <div class="form-label-group">
                              <input type="number" id="seg_pension" name="seg_pension" class="form-control" placeholder="Inicia trámite pensión" value="" min="1" max="2" onkeyup="this.value=Numeros(this.value)">
                              <label for="seg_pension"><small>Inicia trámite pensión</small></label>
                            </div>
                          </div>
                          </div>
                        </div>
                        <div class="form-group">
                          <div class="form-row">
                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                            <div class="form-label-group">
                              <input type="number" id="seg_asisecon" name="seg_asisecon" class="form-control" placeholder="Se otorga asistecia económica" value="" min="1" max="2" onfocusout="habilitar(this.value);" onkeyup="this.value=Numeros(this.value)">
                              <label for="seg_asisecon"><small>Se otorga asistencia económica</small></label>
                            </div>
                          </div>
                          <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                            <div class="form-label-group">
                              <input type="number" id="seg_monto" name="seg_monto" class="form-control" placeholder="¿Cuánto?" value="">
                              <label for="seg_monto"><small>¿Cuánto?</small></label>
                            </div>
                          </div>
                        </div>
                      </div>
                         <div class="form-group">
                          <div class="form-row">
                            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                            <div class="form-label-group">
                              <input type="number" id="seg_modalim" name="seg_modalim" class="form-control" placeholder="Se otorga módulo alimentario" value="" min="1" max="2" onkeyup="this.value=Numeros(this.value)">
                              <label for="seg_modalim"><small>Se otorga módulo alimentario</small></label>
                            </div>
                          </div>
                            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                              <div class="form-label-group">
                                <input type="number" id="seg_solhabita" name="seg_solhabita" class="form-control" placeholder="Se concretó solución habitacional" autofocus="autofocus" value="" min="1" max="2" onkeyup="this.value=Numeros(this.value)">
                                <label for="seg_solhabita"><small>Se concretó solución habitacional</small></label>
                              </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                            <div class="form-label-group">
                              <input type="number" id="seg_entmobila" name="seg_entmobila" class="form-control" placeholder="Se concretó entrega de mobiliario" value="" min="1" max="2" onkeyup="this.value=Numeros(this.value)">
                              <label for="seg_entmobila"><small>Se concretó entrega de mobiliario</small></label>
                            </div>
                          </div>
                          <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                            <div class="form-label-group">
                              <input type="number" id="seg_entmedica" name="seg_entmedica" class="form-control" placeholder="Se concretó entrega de medicamentos" value="" min="1" max="2" onkeyup="this.value=Numeros(this.value)">
                              <label for="seg_entmedica"><small>Se concretó entrega de medicamentos</small></label>
                            </div>
                          </div>
                          </div>
                        </div>
                        <div class="form-group">
                          <div class="form-row">
                          <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                            <div class="form-label-group">
                              <input type="number" id="seg_convaesc" name="seg_convaesc" class="form-control" placeholder="Se concretó vacante escolar/CDI" value="" min="1" max="2" onkeyup="this.value=Numeros(this.value)">
                              <label for="seg_convaesc"><small>Se concretó vacante escolar/CDI</small></label>
                            </div>
                          </div>
                            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                              <div class="form-label-group">
                                <input type="number" id="seg_pasajes" name="seg_pasajes" class="form-control" placeholder="Se concretó pedido de pasajes" autofocus="autofocus" value="" min="1" max="2" onkeyup="this.value=Numeros(this.value)">
                                <label for="seg_pasajes"><small>Se concretó pedido de pasajes</small></label>
                              </div>
                            </div>
                          <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                            <div class="form-label-group">
                              <input type="number" id="seg_ppsocial" name="seg_ppsocial" class="form-control" placeholder="Se concretó pensión/programa social" value="" min="1" max="2" onfocusout="habilitar1(this.value);" onkeyup="this.value=Numeros(this.value)">
                              <label for="seg_ppsocial"><small>Se concretó pensión/programa social</small></label>
                            </div>
                          </div>
                          <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                            <div class="form-label-group">
                              <input type="text" id="seg_cualpen" name="seg_cualpen" class="form-control" placeholder="¿Cuál?" value="">
                              <label for="seg_cualpen"><small>¿Cuál?</small></label>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="form-row">
                          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <div class="form-label-group">
                              <br /><b>Observaciones</b><hr>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="form-row">
                          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <div class="form-label-group">
                              <textarea class="form-control" rows="5" id="seg_observacion" name="seg_observacion" placeholder="Escriba alguna observación..." value=""></textarea> 
                              <label for="seg_cualpen"><small></small></label>  
                            </div>
                          </div> 
                        </div>
                      </div> 
                      <br />
                  <div class="form-group">
                    <div class="form-row">
                      <div class="col-xs-3 col-sm-3 col-md-6 col-lg-3"></div>
                      <div class="col-xs-2 col-sm-3 col-md-8 col-lg-2">
                        <a class="btn btn-primary btn-block" href="<?php echo URL; ?>seguimiento/ver_seguimiento/<?php echo $_GET['idficha'];?>/">Volver</a>
                      </div>  
                      <div class="col-xs-2 col-sm-1 col-md-6 col-lg-2"></div>                                      
                      <div class="col-xs-2 col-sm-3 col-md-8 col-lg-2">
                          
                         <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#seguimiento41ModalGuardar">Guardar</button>
        
                          <!-- <input class="btn btn-primary btn-block " data-toggle="modal" data-target="#ficha41ModalGuardar"  value="Guardar" /> -->
                          <!-- <button type="submit" class="btn btn-primary">Guardar</button> -->
                      </div>
                      <div class="col-xs-3 col-sm-4 col-md-6 col-lg-3"></div>                    
                    </div>
                  </div>
                  <!-- Modal -->
<div class="modal fade" id="seguimiento41ModalGuardar" tabindex="-1" role="dialog" aria-labelledby="seguimiento41ModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Guardar</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>¿Desea guardar los datos de la ficha de seguimiento?</p>
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
<script src="<?php echo URL; ?>Views1/template/vendor/jquery/jquery.min.js"></script>
    <!-- Bootstrap core JavaScript-->
<script src="<?php echo URL; ?>Views1/template/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
<script src="<?php echo URL; ?>Views1/template/vendor/jquery-easing/jquery.easing.min.js"></script>

<script type="text/javascript">
  //validar que la fecha de seguimiento sea mayor a la fecha de la ficha
  function validarFecha(value){
        var seg_fecha = value;
        var fec_consulta = document.getElementById("fec_consulta").value;
        if (seg_fecha < fec_consulta) {
          alert('La fecha de seguimiento debe ser mayor a la fecha de consulta: '+fec_consulta);
          document.getElementById("seg_fecha").value='';
        }       
      }

    //antecedentes agresor
    function Numeros(string){//Solo numeros
        var out = '';
        var filtro = '12';//Caracteres validos
      
        //Recorrer el texto y verificar si el caracter se encuentra en la lista de validos 
        if(string==1 || string==2){
           if (filtro.indexOf(string.charAt(i)) != -1) 
                 //Se añaden a la salida los caracteres validos
           out += string.charAt(i);
        }
  }
  </script>
</body>
</html>