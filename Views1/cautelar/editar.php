<!DOCTYPE html>
<html lang="en">



  <body class="bg-dark">
      <?php //error_reporting(0);?>
          <!-- Bootstrap core CSS-->
         
  <div id="enviar" name="enviar"> 
      <?php include 'r_menuizq1.php';?>
    <div id="content-wrapper" style="background-color: #e9e2e8">
      <div class="container-fluid">
        <div class="card col-xs-12 col-sm-12 col-md-12 col-lg-12">
          <div class="card-header">Nueva medida</div>
            <div class="card-body">
              <form role="form" class="form-horizontal" enctype="multipart/form-data"  method="post" action="">
                <div class="form-group">
                    <div class="form-row">
                      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="form-label-group">
                          <b>Medida cautelar</b>
                        </div>
                      </div>
                    </div>
                  </div>
                  <?php $row = pg_fetch_array($datos); ?>
                      <div class="form-group">
                          <div class="form-row">
                            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                              <div class="selector-regional">
                                <label for="regional"><small>Regional</small></label>
                                  <select class="form-control" name="idregional" id="idregional">
                                            <option value="1" <?php if($row['idregional'] == 1) echo 'selected'; ?>>Unidad Regional Capital</option>
                                            <option value="2" <?php if($row['idregional'] == 2) echo 'selected'; ?>>Unidad Regional Este</option>
                                            <option value="3" <?php if($row['idregional'] == 3) echo 'selected'; ?>>Unidad Regional Oeste</option>
                                            <option value="4" <?php if($row['idregional'] == 4) echo 'selected'; ?>>Unidad Regional Norte</option>
                                            <option value="5" <?php if($row['idregional'] == 5) echo 'selected'; ?>>Unidad Regional Sur</option>
                                  </select>
                               </div>
                              </div>
                            </div>
                          </div>
                           <div class="form-group">
                            <label for="ca_deporig"><small>Nº Expediente de Fiscalia</small></label>
                            <div class="row">



                          <div class="col-xs-12 col-sm-12 col-md-4">
                          <div class="input-group mb-3">
                             <?php 
                                  $ca_expediente_fis = explode("/", $row['ca_expedientefiscalia']);
                                  //$ca_expediente_fis1 = explode("-", $ca_expediente_fis[1]);
                                  ?>


                            <label  class="sr-only" for="dia" > exp1fis: </label>

                             <input class="form-control" type="text" id="exp1fis" name="exp1fis"  autocomplete="off" value= "<?php if (isset($ca_expediente_fis[0])) echo $ca_expediente_fis[0]; ?>"/>



                            <label class="sr-only" for="mes" > exp2fis: </label>
                            <div class="input-group-prepend">
                              <span class="input-group-text">/</span>
                            </div>

                            <input class="form-control" type="number" id="exp2fis" name="exp2fis" min="1" max="9999" autocomplete="off" onfocusout="buscarExpediente();" value= "<?php if (isset($ca_expediente_fis[1])) echo $ca_expediente_fis[1]; ?>"/>


                            <!--<label  class="sr-only" for="anio" > exp3fis: </label>
                            <div class="input-group-prepend">
                              <span class="input-group-text">-</span>
                            </div>

                            <input class="form-control" type="number" id="exp3fis" name="exp3fis"  autocomplete="off"  value="<?php echo intval($ca_expediente_fis1[1]); ?>"/>-->
                            </div>
                            </div>
                          <div class="col-xs-12 col-sm-12 col-md-4" id="respuestafiscalia">
                          </div>

                            </div>
                            </div>
                          <div class="form-group">
                            <label for="ca_deporig"><small>Nº Expediente interno</small></label>
                            <div class="form-row">
                              <div class="col-xs-12 col-sm-12 col-md-4">
                                <div class="input-group mb-3">

                                  <?php 
                                  $ca_expediente = explode("/", $row['ca_expediente']);
                                  $ca_expediente1 = explode("-", $ca_expediente[1]); ?>
                                  <label  class="sr-only" for="dia" > exp1: </label>

                                  <input class="form-control" type="number" id="exp1" name="exp1"  autocomplete="off" value= "<?php if (isset($ca_expediente[0])) echo $ca_expediente[0]; ?>"/>


                                  <label class="sr-only" for="mes" > exp2: </label>
                                  <div class="input-group-prepend">
                                    <span class="input-group-text">/</span>
                                  </div>

                                  <input class="form-control" type="number" id="exp2" name="exp2"  autocomplete="off" value= "<?php if (isset($ca_expediente1[0])) echo $ca_expediente1[0]; ?>"/>


                                  <label  class="sr-only" for="anio" > exp3: </label>
                                  <div class="input-group-prepend">
                                    <span class="input-group-text">-</span>
                                  </div>

                                  <input class="form-control" type="number" id="exp3" name="exp3"  autocomplete="off" onfocusout="buscarExpediente();" value="<?php if (isset($ca_expediente1[1])) echo $ca_expediente1[1]; ?>"/>
                                </div>
                              </div>
                              <div class="col-xs-12 col-sm-12 col-md-4" id="respuesta">
                            </div>
                          </div>
                          <div class="form-group">
                            <div class="form-row">
                              <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                                <div class="form-label-group">
                                  <input type="date" id="fec_ingreso" name="fec_ingreso" class="form-control" placeholder="Fecha de ingreso" required="required" autofocus="autofocus" max="<?php echo date("Y-m-d");?>" value="<?php if(isset($row)){ echo $row['fec_ingreso']; }else{ if($_SESSION['fec_ingreso']){ echo $_SESSION['fec_ingreso'];}} ?>">
                                  <label for="fec_ingreso">Fecha de inicio de la Medida</label>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="form-group">
                            <div class="form-row">
                              <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                                <div class="form-label-group">
                                  <input type="date" id="fec_ingresovieja" name="fec_ingresovieja" class="form-control" placeholder="Fecha de ingreso" required="required" autofocus="autofocus" max="<?php echo date("Y-m-d");?>" value="<?php if(isset($row)){ echo $row['fec_ingresovieja']; }else{ if($_SESSION['fec_ingresovieja']){ echo $_SESSION['fec_ingresovieja'];}else{ echo date("Y-m-d");}} ?>">
                                  <label for="fec_ingresovieja">Fecha de ingreso</label>
                                </div>
                              </div>
                            </div>
                          </div>
                        <div class="form-group">
                        <div class="form-row">
                          <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                            <div class="form-label-group">
                              <input type="number" id="ca_oficio" name="ca_oficio" class="form-control" placeholder="Nº Oficio"  value="<?php if(isset($row)){ echo $row['ca_oficio']; }else{ if($_SESSION['p_ca_oficio']){ echo $_SESSION['p_ca_oficio'];}} ?>" oninput="deshabilitar(this.value);">
                              <label for="idsexo"><small>Nº Oficio</small></label>
                            </div>
                          </div>
                          <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                            <div class="form-label-group">
                              <input type="text" id="ca_resolucion" name="ca_resolucion" class="form-control" placeholder="Nº Oficio" value="<?php if(isset($row)){ echo $row['ca_resolucion']; }else{ if($_SESSION['p_ca_resolucion']){ echo $_SESSION['p_ca_resolucion'];}} ?>" oninput="deshabilitar1(this.value);">
                              <label for="idsexo"><small>Nº Resolución</small></label>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="form-group">
                          <div class="form-row">
                            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                              <div class="selector-fiscalia">
                                <label for="ca_deporigen"><small>Fiscalía</small></label>
                                <input  type="hidden" id="idfiscalia1" name="idfiscalia1" value="<?php if (isset($row['idfiscalia'])){ echo $row['idfiscalia'];}else{echo '+';} ?>">
                                <select name="idfiscalia" id="idfiscalia" style="font-size:11pt" class="form-control"></select>
                              </div>
                            </div>
                          </div>
                        </div>
                      <div class="form-group">
                        <div class="form-row">
                            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                              <div class="selector-causa">
                                <label for="idcausa"><small>Causa</small></label>
                                <input  type="hidden" id="idcausa1" name="idcausa1" value="<?php if(isset($row['ca_causa'])){ echo $row['ca_causa']; }else{ if($_SESSION['p_idcausa']){ echo $_SESSION['p_idcausa'];}}?>">
                                <select name="idcausa[]" id="idcausa" style="font-size:11pt" class="form-control" multiple></select>
                              </div>
                            </div>
                        </div>
                      </div>
                        <hr/>
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
                        <input  type="number" id="per_dni" name="per_dni" class="form-control" placeholder="DNI Consultante" min="1000000" max="99999999" required="required" autofocus="autofocus" value="<?php if(isset($row['per_dni'])){echo $row['per_dni'];}else{ if(isset($_SESSION['p_per_dni'])){echo $_SESSION['p_per_dni'];}} ?>" readonly>
                        <label for="per_dni"><small>DNI Consultante</small></label>
                      </div>
                    </div>
                          </div>
                        </div>                   
                      <div class="form-group">
                        <div class="form-row">
                          <div class="col-xs-12 col-sm-6 col-md-8 col-lg-6">
                            <div class="form-label-group">
                              <input type="text" id="per_apellido" name="per_apellido" class="form-control" placeholder="Apellido" required="required" value="<?php if(isset($row)){ echo $row['per_apellido']; }else{ if($_SESSION['p_per_apellido']){ echo $_SESSION['p_per_apellido'];}} ?>">
                              <label for="per_apellido"><small>Apellido</small></label>
                            </div>
                          </div>
                          <div class="col-xs-12 col-sm-6 col-md-8 col-lg-6">
                            <div class="form-label-group">
                              <input type="text" id="per_nombre" name="per_nombre" class="form-control" placeholder="Nombre" required="required" value="<?php if(isset($row)){ echo $row['per_nombre']; }else{ if($_SESSION['p_per_nombre']){ echo $_SESSION['p_per_nombre'];}} ?>">
                              <label for="per_nombre"><small>Nombre</small></label>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="form-row">
                          <div class="col-xs-12 col-sm-6 col-md-8 col-lg-6">
                            <div class="form-label-group">
                              <br/>Otras Victimas
                          </div>
                        </div>
                      </div> 
                        <div class="form-row">
                          <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                            <div class="form-label-group">
                              <textarea class="form-control" rows="3" id="otrasvict" name="otrasvict" ><?php if(isset($row)){ echo $row['otrasvictimas'];} ?></textarea> 
                              <label for="otrasvict"><small></small></label>  
                            </div>
                          </div> 
                        </div>  
                      <hr/>
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
                        <input  type="number" id="per_dni_agresor" name="per_dni_agresor" class="form-control" placeholder="DNI Agresor" min="1000000" max="99999999" required="required" autofocus="autofocus" value="<?php if(isset($row['dni_agresor'])){echo $row['dni_agresor'];}else{ if(isset($_SESSION['p_per_dni_agresor'])){echo $_SESSION['p_per_dni_agresor'];}} ?>" readonly>
                        <label for="per_dni_agresor"><small>DNI Agresor</small></label>
                      </div>
                    </div>
                  </div>
                </div>                   
                      <div class="form-group">
                        <div class="form-row">
                          <div class="col-xs-12 col-sm-6 col-md-8 col-lg-6">
                            <div class="form-label-group">
                              <input type="text" id="per_apellido_agresor" name="per_apellido_agresor" class="form-control" placeholder="Apellido" required="required" value="<?php if(isset($row)){ echo $row['apellido_agresor']; }else{ if($_SESSION['p_per_apellido_agresor']){ echo $_SESSION['p_per_apellido_agresor'];}} ?>">
                              <label for="per_apellido_agresor"><small>Apellido</small></label>
                            </div>
                          </div>
                          <div class="col-xs-12 col-sm-6 col-md-8 col-lg-6">
                            <div class="form-label-group">
                              <input type="text" id="per_nombre_agresor" name="per_nombre_agresor" class="form-control" placeholder="Nombre" required="required" value="<?php if(isset($row)){ echo $row['nombre_agresor']; }else{ if($_SESSION['p_per_nombre_agresor']){ echo $_SESSION['p_per_nombre_agresor'];}} ?>">
                              <label for="per_nombre_agresor"><small>Nombre</small></label>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="form-row">
                          <div class="col-xs-12 col-sm-6 col-md-8 col-lg-6">
                            <div class="form-label-group">
                              <br/>Otros agresores
                          </div>
                        </div>
                      </div> 
                        <div class="form-row">
                          <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                            <div class="form-label-group">
                              <textarea class="form-control" rows="3" id="otrosagres" name="otrosagres" ><?php if(isset($row)){ echo $row['otrosagresores']; } ?></textarea> 
                              <label for="otrosagres"><small></small></label>  
                            </div>
                          </div> 
                        </div>
                      </div>
                      <hr/>
                      <div class="form-group">
                        <div class="form-row">
                          <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                            <div class="form-label-group">
                              <input type="date" id="fec_hecho" name="fec_hecho" class="form-control" placeholder="Fecha de ingreso" autofocus="autofocus" max="<?php echo date("Y-m-d");?>" value="<?php if(isset($row)){ echo $row['fec_hecho']; }else{ if($_SESSION['p_fec_hecho']){ echo $_SESSION['p_fec_hecho'];}} ?>">
                              <label for="fec_hecho">Fecha de hecho</label>
                            </div>
                          </div>
                          </div>
                        </div>
                        <div class="form-group">
                        <div class="form-row">
                            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                              <div class="selector-oficinas">
                                <label for="ca_deporigen"><small>Dependencia Origen</small></label>
                                <input  type="hidden" id="ca_deporigen1" name="ca_deporigen1" value="<?php if(isset($row)){echo $row['ca_deporigen'];}else{ if($_SESSION['p_ca_deporigen']){ echo $_SESSION['p_ca_deporigen'];}}?>">
                                <select name="ca_deporigen" id="ca_deporigen" style="font-size:11pt" class="form-control"></select>
                              </div>
                            </div>
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="form-row">
                            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                              <div class="selector-tipomedida">
                                <label for="idtipo_medida"><small>Tipo de medida</small></label>
                                <input  type="hidden" id="idtipo_medida1" name="idtipo_medida1" value="<?php if(isset($row['ca_tipmedidas'])){ echo $row['ca_tipmedidas']; }else{ if($_SESSION['p_idtipo_medida']){ echo $_SESSION['p_idtipo_medida'];}}?>">
                                <select name="idtipo_medida[]" id="idtipo_medida" style="font-size:11pt" class="form-control" multiple></select>
                              </div>
                            </div>
                        </div>
                      </div>
                      <div class="form-group">
                      <div class="form-row">
                          <div class="col-xs-12 col-sm-6 col-md-8 col-lg-6">
                            <div class="form-label-group">
                              <input type="text" id="ca_domicilio" name="ca_domicilio" class="form-control" placeholder="Domicilio" required="required" autofocus="autofocus" value="<?php if(isset($row)){ echo $row['ca_domicilio']; }else{ if($_SESSION['ca_domicilio']){ echo $_SESSION['ca_domicilio'];}} ?>">
                              <label for="agresor"><small>Domicilio de patrullaje 1</small></label>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="form-group">
                      <div class="form-row">
                          <div class="col-xs-12 col-sm-6 col-md-8 col-lg-6">
                            <div class="form-label-group">
                              <input type="text" id="ca_domicilio2" name="ca_domicilio2" class="form-control" placeholder="Domicilio2" autofocus="autofocus" value="<?php if(isset($row)){ echo $row['ca_domicilio2']; }else{ if($_SESSION['ca_domicilio2']){ echo $_SESSION['ca_domicilio2'];}} ?>">
                              <label for="agresor"><small>Domicilio de patrullaje 2</small></label>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="form-group">
                      <div class="form-row">
                          <div class="col-xs-12 col-sm-6 col-md-8 col-lg-6">
                            <div class="form-label-group">
                              <input type="text" id="ca_domicilio3" name="ca_domicilio3" class="form-control" placeholder="Domicilio3" autofocus="autofocus" value="<?php if(isset($row)){ echo $row['ca_domicilio3']; }else{ if($_SESSION['ca_domicilio3']){ echo $_SESSION['ca_domicilio3'];}} ?>">
                              <label for="agresor"><small>Domicilio de patrullaje 3</small></label>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="form-row">
                            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                              <div class="selector-comisaria">
                                <label for="idcomisaria"><small>Comisaria</small></label>
                                <input  type="hidden" id="idcomisaria1" name="idcomisaria1" value="<?php if(isset($row)){ echo $row['idcomisaria']; }else{ if($_SESSION['p_idcomisaria']){ echo $_SESSION['p_idcomisaria'];}} ?> ">
                                <select name="idcomisaria" id="idcomisaria" style="font-size:11pt" class="form-control"></select>
                              </div>
                            </div>
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="form-row">
                          <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                            <div class="form-label-group">
                              <input type="number" id="ca_plazo" name="ca_plazo" class="form-control" placeholder="Plazo" oninput="calcular()" maxlength="1"  autofocus="autofocus" value="<?php if(isset($row)){ echo $row['ca_plazo']; }else{ if($_SESSION['p_ca_plazo']){ echo $_SESSION['p_ca_plazo'];}} ?>" onfocus="habilitarPlazo()" onfocusout="readonly()">
                              <label for="ca_plazo"><small>Plazo</small></label>
                            </div>
                          </div>
                          <?php 
                          $fec_vencimiento = strtotime('+'.$row['ca_plazo'].' day', strtotime($row['fec_ingreso']));
                          $fec_vencimiento = date('Y-m-d', $fec_vencimiento);
                          ?>
                          <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                            <div class="form-label-group">
                              <input type="date" id="fec_vencimiento" name="fec_vencimiento" class="form-control" placeholder="Fecha de Vencimiento" required="required" autofocus="autofocus" value="<?php echo $fec_vencimiento; ?>" readonly>
                              <label for="fec_vencimiento">Fecha de Vencimiento</label>
                            </div>
                          </div>
                          </div>
                        </div>
                        <div class="form-group">
                        <div class="form-row">
                          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <div class="form-label-group">
                              <br />Observaciones
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="form-row">
                          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <div class="form-label-group">
                              <textarea class="form-control" rows="5" id="ca_observaciones" name="ca_observaciones" placeholder="Escriba alguna observación..." value=""><?php if(isset($row)){ echo $row['ca_observaciones'];} ?></textarea> 
                              <label for="ca_observaciones"><small></small></label>  
                            </div>
                          </div> 
                        </div>
                      </div> 
                      <br />
                      <div class="form-group">
                        <div class="form-row">
                          <div class="col-xs-3 col-sm-3 col-md-6 col-lg-3"></div>
                          <div class="col-xs-2 col-sm-3 col-md-8 col-lg-2">
                            <a class="btn btn-primary btn-block" href="<?php echo URL;?>principal/buscar/">Volver</a>
                          </div>  
                          <div class="col-xs-2 col-sm-1 col-md-6 col-lg-2"></div>                                      
                          <div class="col-xs-2 col-sm-3 col-md-8 col-lg-2">
                              <input class="btn btn-primary btn-block " type="submit" name="submit" value="Guardar" /> 
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
<script src="<?php echo URL; ?>Views1/template/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
<script src="<?php echo URL; ?>Views1/template/vendor/jquery-easing/jquery.easing.min.js"></script>

<script type="text/javascript" src="<?php echo URL; ?>Views1/template/vendor/funciones.js"></script>

<script type="text/javascript">
      function validarFecha(value){
        var fec_ingreso = document.getElementById('fec_ingreso').value;
        if(value > fec_ingreso || value === fec_ingreso){
          alert('La fecha de hecho debe ser menor a la fecha de ingreso');
          document.getElementById('fec_hecho').value='';
        }
      }
           
            

      function calcular(){

        var invoiceDate = document.querySelector("#fec_ingreso").value;
        var days = Number(document.querySelector("#ca_plazo").value);
        var dueDateElement = document.querySelector("#fec_vencimiento");

        if (invoiceDate.length) {
          //alert();
          invoiceDate = invoiceDate.split("-");
          invoiceDate = new Date(invoiceDate[0], invoiceDate[1] - 1, invoiceDate[2]);
          invoiceDate.setDate(invoiceDate.getDate() + days);
          dueDateElement.valueAsDate = null;
          dueDateElement.valueAsDate = invoiceDate;
          //console.log(invoiceDate, dueDateElement.value);
        }
      }
           
                         document.getElementById("fec_ingreso").onchange = function ()
                          {
                          var input = document.getElementById("fec_hecho");
                          input.max = this.value;
                          }

    function readonly(){
      document.getElementById('ca_plazo').readOnly = true;
      var ca_plazo = document.getElementById('ca_plazo').value;
      if(ca_plazo == ''){
        document.getElementById('fec_vencimiento').value = '';
        document.getElementById('ca_observaciones').focus();
      }
    }

    function habilitarPlazo(){
      document.getElementById('ca_plazo').readOnly = false;
    }

      function deshabilitar(value){
        var ca_oficio = value;
        if(ca_oficio != ''){
          document.getElementById("ca_resolucion").value = '';
          document.getElementById("ca_resolucion").readOnly = true;
        }else{
          document.getElementById("ca_resolucion").readOnly = false;
        }
      }

      function deshabilitar1(value){
        var ca_resolucion = value;
        if(ca_resolucion != ''){
          document.getElementById("ca_oficio").value = '';
          document.getElementById("ca_oficio").readOnly = true;
        }else{
          document.getElementById("ca_oficio").readOnly = false;
        }
      }

      $( document ).ready(function() {
        var per_apellido = $('#per_apellido').val();
        var per_nombre = $('#per_nombre').val();
        if(per_apellido != '' && per_nombre != ''){
          $('#per_dni_agresor').attr('readonly', false);  
          $('#per_apellido_agresor').attr('readonly', true);
          $('#per_nombre_agresor').attr('readonly', true); 
          $('#otrosagres').attr('readonly', true); 
        }else{
          $('#per_dni_agresor').attr('readonly', false);  
          $('#per_apellido_agresor').attr('readonly', true);
          $('#per_nombre_agresor').attr('readonly', true);     
        }
        var per_dni_agresor = $('#per_dni_agresor').val();
        if(per_dni_agresor !=''){
         $('#per_apellido_agresor').attr('readonly', false);
         $('#per_nombre_agresor').attr('readonly', false); 
         $('#otrosagres').attr('readonly', false); 
         var per_apellido_agresor = $('#per_apellido_agresor').val();
         var per_nombre_agresor = $('#per_nombre_agresor').val();
         if(per_apellido_agresor != '' && per_nombre_agresor != ''){
          $('#per_dni_agresor').attr('readonly', true);  
         }    
        }
      });
      // Buscar numero de expediente
      function buscarExpediente(){
        var exp1 = $('#exp1').val();
        var exp2 = $('#exp2').val();
        var exp3 = $('#exp3').val();
      //concatenar los numeros que forman el expediente
        var nroexpediente = exp1+'/'+exp2+'-'+exp3;

        $.ajax({
              url: '<?php echo URL; ?>Views1/cautelar/buscarExpediente.php',
              type: "POST",
              dataType: 'html',
              data: {"nroexpediente": nroexpediente},
              success: function(response)
              {
                  $('#respuesta').html(response).fadeIn();
              }
      });  
      }
      // Buscar numero de expediente de fiscalia
      function buscarExpedienteFiscalia(){
        var exp1 = $('#exp1fis').val();
        var exp2 = $('#exp2fis').val();
      //concatenar los numeros que forman el expediente
        var nroexpediente = exp1+'/'+exp2;

        $.ajax({
              url: '<?php echo URL; ?>Views1/cautelar/buscarExpedienteFiscalia.php',
              type: "POST",
              dataType: 'html',
              data: {"nroexpediente": nroexpediente},
              success: function(response)
              {
                  $('#respuestafiscalia').html(response).fadeIn();
              }
      });  
      }
    </script>

</body>
</html>