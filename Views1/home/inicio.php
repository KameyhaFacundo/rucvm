<!DOCTYPE html>
<html lang="en">

  <body id="page-top">


  <?php
  include 'r_menuizq.php';
      if(isset($datos)) {
        $filas = pg_num_rows($datos);
        if ($filas == 0) { ?> 
        <div id="content-wrapper" style="background-color: #e9e2e8">
         <div class="container-fluid"> 
          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
              <div class="alert alert-danger" align="center">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
              <strong>No se encontraron <?php echo 'sumarios con número '. $_POST['sum_numero1'];?></strong>
              <br>
            </div>
          </div>
        </div>
      </div>
        <?php 
          }else{ 
            if($_SESSION['idinstitucion'] == 16){
              ?>
              <div id="content-wrapper" style="background-color: #e9e2e8">
                     <div class="container-fluid">  
                            <div class="card col-xs-12 col-sm-12 col-md-12 col-lg-12">  
                              <div class="card-header"><?php if(isset($_POST['sum_numero1'])) echo 'Sumario encontrado'; else echo 'Sumarios encontrados'; ?></div>
                                <div class="card-body">
                                  <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTableSumario" width="100%" cellspacing="0">
                                      <thead>
                                        <tr style="background-color: #b3434375">
                                          <th>Comisaría</th>
                                          <th>Fecha</th>
                                          <th>Víctima</th>
                                          <th>Tipo medida</th>
                                          <th>DNI de la Victima</th>
                                          <th>Fecha del Hecho</th>
                                          <th>DNI del agresor</th>
                                          <th>Agresor</th>
                                          <th>Fiscalia</th>
                                          <th>Causas</th>
                                          <th>N° Sumario</th>
                                          <th>Nº Legajo</th>
                                          <th>Procede</th>
                                          <th></th>
                                          <th></th>
                                          <th></th>
                                        </tr>
                                      </thead>
                                      <tbody>
                                  <?php 
                                  $cont = 0;
                                    while ($row1 = pg_fetch_array($datos)){
                                      
                                      $tipo_medida = array();
                                      $tipo_medida[1] = 'Exclusión de hogar'; 
                                      $tipo_medida[2] = 'Prohibición de acercamiento';
                                      $tipo_medida[3] = 'Prohibición de actos turbatorios';
                                      $tipo_medida[4] = 'Prohibición de comunicación';
                                      $tipo_medida[5] = 'Prohibición de proximidad física';
                                      $tipo_medida[6] = 'Protección de persona';
                                      $tipo_medida[7] = 'Tipo medida';
                                      $tipo_medida[8] = 'Restricción de acercamiento';
                                      $tipo_medida[9] = 'Prohibición de acercamiento con dispositivo dual';
                                      $causa = array();
                                      $causa[1] = 'S/ amenazas'; 
                                      $causa[2] = 'S/ amenaza agravada por empleo de arma o anonimato (Art. 149 bis)';
                                      $causa[3] = 'S/ lesiones';
                                      $causa[4] = 'S/ su denuncia';
                                      $causa[5] = 'S/ abuso sexual';
                                      $causa[6] = 'S/ privación ilegítima de la libertad';
                                      $causa[7] = 'S/ protección de persona';
                                      $causa[8] = 'S/ daños';
                                      $causa[9] = 'S/ homicidio agravado por alevosía';
                                      $causa[10] = 'S/ abuso de armas de fuego';
                                      $causa[11] = 'S/ desobediencia judicial';
                                      $causa[12] = 'S/ VD/VG';
                                      $causa[13] = 'S/ Art. 89';
                                      $causa[14] = 'S/ Art. 89 bis';
                                      $causa[15] = 'S/ integridad sexual';
                                      $causa[16] = 'S/ abuso de arma de fuego (Art. 104)';
                                      $causa[17] = 'S/ exhibiciones obsenas';
                                      $causa[18] = 'S/ abuso sexual con acceso carnal';
                                      $causa[19] = 'S/ robo simple';
                                      $causa[20] = 'S/ lesiones agravadas (Art. 92)';
                                      $causa[21] = 'S/ violencia familiar (Ley 7264)';
                                      $causa[22] = 'S/ amenazas y otros delitos';
                                      $causa[23] = 'S/ atentado contra la autoridad';
                                      $causa[24] = 'Inc. Ejec. Sentencia';
                                      $causa[25] = 'Maltrato infantil';
                                      $causa[26] = 'Usurpación en grado de tentativa';
                                      $causa[27] = 'Especiales (Residual)';
                                      $causa[28] = 'S/ violación de domicilio';
                                      $causa[29] = 'Portación de arma de fuego de uso civil sin autorización legal';
                                      $causa[30] = 'S/ desobediencia judicial (Art. 239)';
                                      $causa[31] = 'Infracción a la ley Nº 24270';
                                      $causa[32] = 'S/ abandono de persona';
                                      $causa[33] = 'S/ regimen comunicacional';
                                      $causa[34] = 'S/ tentativa de homicidio y otros delitos';
                                      $causa[35] = 'Hurto agravado';
                                      $causa[36] = 'Alimentos';
                                      $causa[37] = 'Sustracción de Menores Art. 146';
                                      $medidas = explode(',',$row1['idtipo_medida']);
                                      $cant_medidas = count($medidas);
                                      $causas = explode(',',$row1['idcausa']);
                                      $cant_causas = count($causas);
                                      if(!$_POST['sum_numero1']){
                                  ?>
                                      <tr>
                                        <td><?php echo $row1['com_nombre']; ?></td>
                                        <td><?php echo date("d/m/Y", strtotime($row1['sum_fecha'])); ?></td>
                                        <td><?php echo $row1['consultante']; ?></td>
                                        <td><?php for($i=0;$i<$cant_medidas;$i++){ if($i==0){ if($cant_medidas == 1){ echo $tipo_medida[$medidas[$i]];}else{ echo $tipo_medida[$medidas[$i]]. ', '; }}else{ if($i == $cant_medidas-1){ echo $tipo_medida[$medidas[$i]]; }else{ echo $tipo_medida[$medidas[$i]]. ', ';}}} ?></td>
                                        <td><?php echo $row1['per_dni']; ?></td>
                                        <td><?php echo date("d/m/Y", strtotime($row1['sum_fecha_hecho'])); ?></td>
                                        <td><?php echo $row1['dni_agresor']; ?></td>
                                        <td><?php echo $row1['agresor']; ?></td>
                                        <td><?php echo $row1['fis_descripcion']; ?></td>
                                        <td><?php for($i=0;$i<$cant_causas;$i++){ if($i==0){ if($cant_causas == 1){ echo $causa[$causas[$i]];}else{ echo $causa[$causas[$i]]. ', '; }}else{ if($i == $cant_causas-1){ echo $causa[$causas[$i]]; }else{ echo $causa[$causas[$i]]. ', ';}}} ?></td>
                                        <td><?php echo $row1['sum_numero']; ?></td>
                                        <td><?php echo $row1['sum_legajo']; ?></td>
                                        <td><?php echo $row1['ext_descripcion']; ?></td>
                                        <td align=center>
                                          <a data-toggle="modal" href="#ver" data-target="#verModalCenter<?php echo $row1['idsumario']; ?>" id="<?php echo $row1['idsumario']; ?>" class="btn btn-primary btn-md"><i class="far fa-eye" data-toggle="tooltip" data-placement="top" title="Visualizar"></i></a>
                                         </td>
                                        <td align=center>
                                          <a href="<?php echo URL; ?>sumario/editar/<?php echo $row1['idsumario']; ?>" class="btn btn-primary btn-md" data-toggle="tooltip" data-placement="top" title="Editar"><i class="fas fa-pencil-alt"></i></a></td>
                                        <td align=center>
                                          <a data-toggle="modal" href="#eliminar" data-target="#eliminarModalCenter<?php echo $row1['idsumario']; ?>" id="<?php echo $row1['idsumario']; ?>" class="btn btn-primary btn-md"><i class="fas fa-trash-alt" data-toggle="tooltip" data-placement="top" title="Eliminar"></i></a>
                                         </td>
                                       <?php// } ?>
                                         
      <!-- el id del modal debe ser el mismo que el data target del boton-->
       <div class="modal fade" id="eliminarModalCenter<?php echo $row1['idsumario'];?>" tabindex="-1" role="dialog" aria-labelledby="eliminarModalCenterTitle" aria-hidden="true"> 
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="eliminarModalLongTitle">Eliminar</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                <p>¿Desea eliminar el sumario con fecha de ingreso <b> <?php echo date("d/m/Y", strtotime($row1['sum_fecha'])); ?> </b>?</p>         
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
              <a href="<?php echo URL; ?>sumario/eliminar/<?php echo $row1['idsumario']; ?>" class="btn btn-primary">Eliminar</a>
            </div>
          </div>
        </div>
        </div>
      
        <!--Modal para ver sumario-->
      <!-- Modal -->
      <div class="modal fade" id="verModalCenter<?php echo $row1['idsumario']; ?>" tabindex="-1" role="dialog" aria-labelledby="verModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <!--Content-->
          <div class="modal-content">
            <!--Header-->
            <div class="modal-header text-center">
              <h3 class="modal-title w-100 dark-grey-text font-weight-bold my-3" id="eliminarModalLabel"><strong>Sumario</strong></h3>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <!--Body-->
            <div class="modal-body">
              <!--Body-->
                  <div class="form-group">
                    <div class="form-row">
                      <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                        <div class="form-label-group">
                          <input type="text" id="com_nombre" name="com_nombre" class="form-control" placeholder="Comisaría" required="required" autofocus="autofocus" value="<?php echo $row1['com_nombre']; ?>" readonly>
                          <label for="com_nombre">Comisaría</label>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="form-row">
                      <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                        <div class="form-label-group">
                          <input type="text" id="sum_numero" name="sum_numero" class="form-control" placeholder="N° expediente" required="required" autofocus="autofocus" value="<?php echo $row1['sum_numero']; ?>" readonly>
                          <label for="sum_numero">N° Sumario</label>
                        </div>
                      </div>
                      <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                        <div class="form-label-group">
                          <input type="date" id="sum_fecha" name="sum_fecha" class="form-control" placeholder="Fecha" required="required" autofocus="autofocus" max="<?php echo date("Y-m-d");?>" value="<?php echo $row1['sum_fecha']; ?>" readonly>
                          <label for="per_nacido">Fecha</label>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="form-row">
                      <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                        <div class="form-label-group">
                          <input type="text" id="sum_legajo" name="sum_legajo" class="form-control" placeholder="N° expediente fiscalía" required="required" autofocus="autofocus" value="<?php echo $row1['sum_legajo']; ?>" readonly>
                          <label for="sum_legajo">N° Legajo</label>
                        </div>
                      </div>
                      <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                        <div class="form-label-group">
                          <input type="date" id="sum_fecha_hecho" name="sum_fecha_hecho" class="form-control" placeholder="Fecha de hecho" required="required" autofocus="autofocus" max="<?php echo date("Y-m-d");?>" value="<?php echo $row1['sum_fecha_hecho']; ?>" readonly>
                          <label for="sum_fecha_hecho">Fecha de hecho</label>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="form-row">
                      <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                        <div class="form-label-group">
                          <input type="text" id="sum_juez" name="sum_juez" class="form-control" placeholder="Juez" required="required" autofocus="autofocus" value="<?php echo $row1['sum_juez']; ?>" readonly>
                          <label for="sum_juez">Juez</label>
                        </div>
                      </div>
                      <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                        <div class="form-label-group">
                          <input type="number" id="sum_tel_familiar" name="sum_tel_familiar" class="form-control" placeholder="N° de resolucion" required="required" autofocus="autofocus" value="<?php echo $row1['sum_tel_familiar']; ?>" readonly>
                          <label for="ca_resolucion">N° de resolución</label>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="form-row">
                      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="form-label-group">
                          <input type="text" id="fis_descripcion" name="fis_descripcion" class="form-control" placeholder="Fiscalía" required="required" autofocus="autofocus" value="<?php echo $row1['fis_descripcion']; ?>" readonly>
                          <label for="fis_descripcion">Fiscalía</label>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="idcausa"><small>Causa</small></label> 
                    <div class="form-row">
                      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="form-label-group">
                          <textarea class="form-control" rows="5" id="idcausa" name="idcausa" value="" readonly=""><?php $ca_causa = explode(",", $row1['idcausa']); $filas = count($ca_causa); for($i=0;$i<$filas;$i++){ if(isset($ca_causa[$i+1])) echo $causa[$ca_causa[$i]]. ' - '; else echo $causa[$ca_causa[$i]]; }?></textarea> 
                           
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
                      <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                        <div class="form-label-group">
                          <input type="number" id="per_dni" name="per_dni" class="form-control" placeholder="N° de oficio" required="required" autofocus="autofocus" value="<?php echo $row1['per_dni']; ?>" readonly>
                          <label for="per_dni">DNI</label>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="form-row">
                      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="form-label-group">
                          <input type="text" id="consultante" name="consultante" class="form-control" placeholder="Consultante" required="required" autofocus="autofocus" value="<?php echo $row1['consultante']; ?>" readonly>
                          <label for="consultante">Víctima</label>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="form-row">
                      <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                        <div class="form-label-group">
                          <input type="number" id="per_celular" name="per_celular" class="form-control" placeholder="Celular" required="required" autofocus="autofocus" value="<?php echo $row1['per_celular']; ?>" readonly>
                          <label for="per_celular">Celular</label>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="form-row">
                      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="form-label-group">
                          <input type="text" id="per_domicilio" name="per_domicilio" class="form-control" placeholder="Domicilio" required="required" autofocus="autofocus" value="<?php echo $row1['per_domicilio']; ?>" readonly>
                          <label for="per_domicilio">Domicilio</label>
                        </div>
                      </div>
                    </div>
                  </div>
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
                      <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                        <div class="form-label-group">
                          <input type="number" id="per_dni" name="per_dni" class="form-control" placeholder="N° de oficio" required="required" autofocus="autofocus" value="<?php echo $row1['per_dni_agresor']; ?>" readonly>
                          <label for="per_dni">DNI</label>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="form-row">
                      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="form-label-group">
                          <input type="text" id="consultante" name="consultante" class="form-control" placeholder="Consultante" required="required" autofocus="autofocus" value="<?php echo $row1['agresor']; ?>" readonly>
                          <label for="consultante">Agresor</label>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="form-row">
                      <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                        <div class="form-label-group">
                          <input type="number" id="per_celular_agresor" name="per_celular_agresor" class="form-control" placeholder="Celular" required="required" autofocus="autofocus" value="<?php echo $row1['per_celular_agresor']; ?>" readonly>
                          <label for="per_celular_agresor">Celular</label>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="form-row">
                      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="form-label-group">
                          <input type="text" id="per_domicilio_agresor" name="per_domicilio_agresor" class="form-control" placeholder="Domicilio" required="required" autofocus="autofocus" value="<?php echo $row1['per_domicilio_agresor']; ?>" readonly>
                          <label for="per_domicilio_agresor">Domicilio</label>
                        </div>
                      </div>
                    </div>
                  </div>
                  <hr/>
                  <div class="form-group">
                    <div class="form-row">
                      <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                        <div class="form-label-group">
                          <input type="date" id="fec_hecho" name="fec_hecho" class="form-control" placeholder="Fecha de ingreso" required="required" autofocus="autofocus" value="<?php echo $row1['sum_fecha_hecho']; ?>" readonly>
                          <label for="per_nacido">Fecha de hecho</label>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="form-row">
                      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="form-label-group">
                          <input type="text" id="com_nombre" name="com_nombre" class="form-control" placeholder="com_nombre" required="required" autofocus="autofocus" value="<?php echo $row1['com_nombre']; ?>" readonly>
                          <label for="com_nombre">Comisaría</label>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="form-row">
                      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="form-label-group">
                          <input type="text" id="idtipo_medida" name="idtipo_medida" class="form-control" placeholder="idtipo_medida" required="required" autofocus="autofocus" value="<?php for($i=0;$i<$cant_medidas;$i++){ if($i==0){ if($cant_medidas == 1){ echo $tipo_medida[$medidas[$i]];}else{ echo $tipo_medida[$medidas[$i]]. ', '; }}else{ if($i == $cant_medidas-1){ echo $tipo_medida[$medidas[$i]]; }else{ echo $tipo_medida[$medidas[$i]]. ', ';}}} ?>" readonly>
                          <label for="idtipo_medida">Tipo de medida</label>
                        </div>
                      </div>
                    </div>
                  </div>
              <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
            </div>
          </div>
          <!--/.Content-->
        </div>
      </div>
      </div>
      <!-- Modal -->
      <?php }
      if(isset($_POST['sum_numero1'])){//TABLA PARA MOSTRAR CAUTELAR BUSCADA POR NUMERO DE EXPEDIENTE (PUEDE ESTAR VENCIDA O NO) ?>
                                        <tr>
                                        <td><?php echo $row1['com_nombre']; ?></td>
                                        <td><?php echo date("d/m/Y", strtotime($row1['sum_fecha'])); ?></td>
                                        <td><?php echo $row1['consultante']; ?></td>
                                        <td><?php for($i=0;$i<$cant_medidas;$i++){ if($i==0){ if($cant_medidas == 1){ echo $tipo_medida[$medidas[$i]];}else{ echo $tipo_medida[$medidas[$i]]. ', '; }}else{ if($i == $cant_medidas-1){ echo $tipo_medida[$medidas[$i]]; }else{ echo $tipo_medida[$medidas[$i]]. ', ';}}} ?></td>
                                        <td><?php echo $row1['per_dni']; ?></td>
                                        <td><?php echo date("d/m/Y", strtotime($row1['sum_fecha_hecho'])); ?></td>
                                        <td><?php echo $row1['dni_agresor']; ?></td>
                                        <td><?php echo $row1['agresor']; ?></td>
                                        <td><?php echo $row1['fis_descripcion']; ?></td>
                                        <td><?php for($i=0;$i<$cant_causas;$i++){ if($i==0){ if($cant_causas == 1){ echo $causa[$causas[$i]];}else{ echo $causa[$causas[$i]]. ', '; }}else{ if($i == $cant_causas-1){ echo $causa[$causas[$i]]; }else{ echo $causa[$causas[$i]]. ', ';}}} ?></td>
                                        <td><?php echo $row1['sum_numero']; ?></td>
                                        <td><?php echo $row1['sum_legajo']; ?></td>
                                        <td><?php echo $row1['ext_descripcion']; ?></td>
                                        <td align=center>
                                          <a data-toggle="modal" href="#ver" data-target="#verModalCenter<?php echo $row1['idsumario']; ?>" id="<?php echo $row1['idsumario']; ?>" class="btn btn-primary btn-md"><i class="far fa-eye" data-toggle="tooltip" data-placement="top" title="Visualizar"></i></a>
                                         </td>
                                        <td align=center>
                                          <a href="<?php echo URL; ?>sumario/editar/<?php echo $row1['idsumario']; ?>" class="btn btn-primary btn-md" data-toggle="tooltip" data-placement="top" title="Editar"><i class="fas fa-pencil-alt"></i></a></td>
                                        <td align=center>
                                          <a data-toggle="modal" href="#eliminar" data-target="#eliminarModalCenter<?php echo $row1['idsumario']; ?>" id="<?php echo $row1['idsumario']; ?>" class="btn btn-primary btn-md"><i class="fas fa-trash-alt" data-toggle="tooltip" data-placement="top" title="Eliminar"></i></a>
                                         </td>
                                       <?php } ?>
                                         
      <!-- el id del modal debe ser el mismo que el data target del boton-->
       <div class="modal fade" id="eliminarModalCenter<?php echo $row1['idsumario'];?>" tabindex="-1" role="dialog" aria-labelledby="eliminarModalCenterTitle" aria-hidden="true"> 
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="eliminarModalLongTitle">Eliminar</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                <p>¿Desea eliminar el sumario con fecha de ingreso <b> <?php echo date("d/m/Y", strtotime($row1['sum_fecha_hecho'])); ?> </b>?</p>         
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
              <a href="<?php echo URL; ?>sumario/eliminar/<?php echo $row1['idsumario']; ?>" class="btn btn-primary">Eliminar</a>
            </div>
          </div>
        </div>
        </div>
      
        <!--Modal para ver medida cautelar-->
      <!-- Modal -->
      <div class="modal fade" id="verModalCenter<?php echo $row1['idsumario']; ?>" tabindex="-1" role="dialog" aria-labelledby="verModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <!--Content-->
          <div class="modal-content">
            <!--Header-->
            <div class="modal-header text-center">
              <h3 class="modal-title w-100 dark-grey-text font-weight-bold my-3" id="eliminarModalLabel"><strong>Sumario</strong></h3>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <!--Body-->
            <div class="modal-body">
              <!--Body-->
              <div class="form-group">
                    <div class="form-row">
                      <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                        <div class="form-label-group">
                          <input type="text" id="com_nombre" name="com_nombre" class="form-control" placeholder="Comisaría" required="required" autofocus="autofocus" value="<?php echo $row1['com_nombre']; ?>" readonly>
                          <label for="com_nombre">Comisaría</label>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="form-row">
                      <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                        <div class="form-label-group">
                          <input type="text" id="sum_numero" name="sum_numero" class="form-control" placeholder="N° expediente" required="required" autofocus="autofocus" value="<?php echo $row1['sum_numero']; ?>" readonly>
                          <label for="sum_numero">N° Sumario</label>
                        </div>
                      </div>
                      <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                        <div class="form-label-group">
                          <input type="date" id="sum_fecha" name="sum_fecha" class="form-control" placeholder="Fecha" required="required" autofocus="autofocus" max="<?php echo date("Y-m-d");?>" value="<?php echo $row1['sum_fecha']; ?>" readonly>
                          <label for="per_nacido">Fecha</label>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="form-row">
                      <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                        <div class="form-label-group">
                          <input type="text" id="sum_legajo" name="sum_legajo" class="form-control" placeholder="N° expediente fiscalía" required="required" autofocus="autofocus" value="<?php echo $row1['sum_legajo']; ?>" readonly>
                          <label for="sum_legajo">N° Legajo</label>
                        </div>
                      </div>
                      <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                        <div class="form-label-group">
                          <input type="date" id="sum_fecha_hecho" name="sum_fecha_hecho" class="form-control" placeholder="Fecha de hecho" required="required" autofocus="autofocus" max="<?php echo date("Y-m-d");?>" value="<?php echo $row1['sum_fecha_hecho']; ?>" readonly>
                          <label for="sum_fecha_hecho">Fecha de hecho</label>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="form-row">
                      <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                        <div class="form-label-group">
                          <input type="text" id="sum_juez" name="sum_juez" class="form-control" placeholder="Juez" required="required" autofocus="autofocus" value="<?php echo $row1['sum_juez']; ?>" readonly>
                          <label for="sum_juez">Juez</label>
                        </div>
                      </div>
                      <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                        <div class="form-label-group">
                          <input type="number" id="sum_tel_familiar" name="sum_tel_familiar" class="form-control" placeholder="Telefono familiar" required="required" autofocus="autofocus" value="<?php echo $row1['sum_tel_familiar']; ?>" readonly>
                          <label for="ca_resolucion">Telefono familiar</label>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="form-row">
                      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="form-label-group">
                          <input type="text" id="fis_descripcion" name="fis_descripcion" class="form-control" placeholder="Fiscalía" required="required" autofocus="autofocus" value="<?php echo $row1['fis_descripcion']; ?>" readonly>
                          <label for="fis_descripcion">Fiscalía</label>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="idcausa"><small>Causa</small></label> 
                    <div class="form-row">
                      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="form-label-group">
                          <textarea class="form-control" rows="5" id="idcausa" name="idcausa" value="" readonly=""><?php $ca_causa = explode(",", $row1['idcausa']); $filas = count($ca_causa); for($i=0;$i<$filas;$i++){ if(isset($ca_causa[$i+1])) echo $causa[$ca_causa[$i]]. ' - '; else echo $causa[$ca_causa[$i]]; }?></textarea> 
                           
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
                      <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                        <div class="form-label-group">
                          <input type="number" id="per_dni" name="per_dni" class="form-control" placeholder="N° de oficio" required="required" autofocus="autofocus" value="<?php echo $row1['per_dni']; ?>" readonly>
                          <label for="per_dni">DNI</label>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="form-row">
                      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="form-label-group">
                          <input type="text" id="consultante" name="consultante" class="form-control" placeholder="Consultante" required="required" autofocus="autofocus" value="<?php echo $row1['consultante']; ?>" readonly>
                          <label for="consultante">Víctima</label>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="form-row">
                      <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                        <div class="form-label-group">
                          <input type="number" id="per_celular" name="per_celular" class="form-control" placeholder="Celular" required="required" autofocus="autofocus" value="<?php echo $row1['per_celular']; ?>" readonly>
                          <label for="per_celular">Celular</label>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="form-row">
                      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="form-label-group">
                          <input type="text" id="per_domicilio" name="per_domicilio" class="form-control" placeholder="Domicilio" required="required" autofocus="autofocus" value="<?php echo $row1['per_domicilio']; ?>" readonly>
                          <label for="per_domicilio">Domicilio</label>
                        </div>
                      </div>
                    </div>
                  </div>
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
                      <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                        <div class="form-label-group">
                          <input type="number" id="per_dni" name="per_dni" class="form-control" placeholder="N° de oficio" required="required" autofocus="autofocus" value="<?php echo $row1['per_dni_agresor']; ?>" readonly>
                          <label for="per_dni">DNI</label>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="form-row">
                      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="form-label-group">
                          <input type="text" id="consultante" name="consultante" class="form-control" placeholder="Consultante" required="required" autofocus="autofocus" value="<?php echo $row1['agresor']; ?>" readonly>
                          <label for="consultante">Agresor</label>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="form-row">
                      <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                        <div class="form-label-group">
                          <input type="number" id="per_celular_agresor" name="per_celular_agresor" class="form-control" placeholder="Celular" required="required" autofocus="autofocus" value="<?php echo $row1['per_celular_agresor']; ?>" readonly>
                          <label for="per_celular_agresor">Celular</label>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="form-row">
                      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="form-label-group">
                          <input type="text" id="per_domicilio_agresor" name="per_domicilio_agresor" class="form-control" placeholder="Domicilio" required="required" autofocus="autofocus" value="<?php echo $row1['per_domicilio_agresor']; ?>" readonly>
                          <label for="per_domicilio_agresor">Domicilio</label>
                        </div>
                      </div>
                    </div>
                  </div>
                  <hr/>
                  <div class="form-group">
                    <div class="form-row">
                      <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                        <div class="form-label-group">
                          <input type="date" id="fec_hecho" name="fec_hecho" class="form-control" placeholder="Fecha de ingreso" required="required" autofocus="autofocus" value="<?php echo $row1['sum_fecha_hecho']; ?>" readonly>
                          <label for="per_nacido">Fecha de hecho</label>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="form-row">
                      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="form-label-group">
                          <input type="text" id="com_nombre" name="com_nombre" class="form-control" placeholder="com_nombre" required="required" autofocus="autofocus" value="<?php echo $row1['com_nombre']; ?>" readonly>
                          <label for="com_nombre">Comisaría</label>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="form-row">
                      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="form-label-group">
                          <input type="text" id="idtipo_medida" name="idtipo_medida" class="form-control" placeholder="idtipo_medida" required="required" autofocus="autofocus" value="<?php for($i=0;$i<$cant_medidas;$i++){ if($i==0){ if($cant_medidas == 1){ echo $tipo_medida[$medidas[$i]];}else{ echo $tipo_medida[$medidas[$i]]. ', '; }}else{ if($i == $cant_medidas-1){ echo $tipo_medida[$medidas[$i]]; }else{ echo $tipo_medida[$medidas[$i]]. ', ';}}} ?>" readonly>
                          <label for="idtipo_medida">Tipo de medida</label>
                        </div>
                      </div>
                    </div>
                  </div>
              <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
            </div>
          </div>
          <!--/.Content-->
        </div>
      </div>
      </div>
      <!-- Modal -->
      <?php }}}} ?>
                                
                              </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
           </div>               
      </div>
</div>
  </body>
</html>