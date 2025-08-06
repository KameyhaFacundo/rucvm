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
              <strong>No se encontraron <?php if($_SESSION['idinstitucion'] == 13) echo 'medidas cautelares.'; else echo 'fichas con '. $_POST['per_dni1']; ?></strong>
              <br>
            </div>
          </div>
        </div>
      </div>
        <?php 
          }else{ 
            if($_SESSION['idinstitucion'] == 13){
        ?>
        <div id="content-wrapper" style="background-color: #e9e2e8">
               <div class="container-fluid">  
                      <div class="card col-xs-12 col-sm-12 col-md-12 col-lg-12">  
                        <div class="card-header"><?php if(isset($_POST['ca_expediente1'])) echo 'Medida encontrada'; else echo 'Medidas vigentes hasta el día de hoy'; ?></div>
                          <div class="card-body">
                            <div class="table-responsive">
                              <table class="table table-bordered" id="dataTableCautelar" width="100%" cellspacing="0">
                                <thead>
                                  <tr style="background-color: #b3434375">
                                    <th>Regional</th>
                                    <th>Expediente</th>
                                    <th>Fecha de ingreso</th>
                                    <th>Víctima</th>
                                    <th>Tipo medida</th>
                                    <th>Domicilio patrullaje</th>
                                    <th>Plazo (días)</th>
                                    <th>Días restantes</th>
                                    <th>Fecha de vencimiento</th>
                                    <th>DNI de la Victima</th>
                                    <th>Fecha del Hecho</th>
                                    <th>Fecha de Ingreso</th>
                                    <th>DNI del agresor</th>
                                    <th>Agresor</th>
                                    <th>Fiscalia</th>
                                    <th>Causas</th>
                                    <th>Domicilio patrullaje 2</th>
                                    <th>Domicilio patrullaje 3</th>
                                    <th>Comisaria</th>
                                    <th>Nº Expediente de Fiscalia</th>
                                    <th>N° de Oficio</th>
                                    <th>Dependencia Origen</th>
                                    <th>Observaciones</th>
                                    <th></th>
                                    <?php if($_SESSION['permiso'] != 2){ ?>
                                    <th></th>
                                    <?php } ?>
                                    <?php if($_SESSION['permiso'] != 3){ ?>
                                    <th></th>
                                  <?php } ?>
                                  </tr>
                                </thead>
                                <tbody>
                            <?php 
                            $cont = 0;
                              while ($row1 = pg_fetch_array($datos)){
                                if($row1['ca_plazo'] != ''){
                                    $fec_vencimiento = strtotime('+'.$row1['ca_plazo'].' day', strtotime($row1['fec_ingreso']));
                                    $fec_vencimiento = date('Y-m-d', $fec_vencimiento);
                                    $hoy = date('Y-m-d');
                                    $fechoy = strtotime($hoy);
                                    $fecven = strtotime($fec_vencimiento);
                                    $diff = $fecven - $fechoy;
                                    $dias_restantes = round($diff / 86400);
                                }else{
                                  $fec_vencimiento = 'Sin fecha de vencimiento';
                                  $dias_restantes = '-';
                                }
                                
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
                                $medidas = explode(',',$row1['ca_tipmedidas']);
                                $cant_medidas = count($medidas);
                                $causas = explode(',',$row1['ca_causa']);
                                $cant_causas = count($causas);
                                /*for($i=0;$i<$cant_medidas;$i++){
                                  $t_medida[] = $medidas[$i];
                                }*/
                                if($dias_restantes > -1 && !$_POST['ca_expediente1']){
                            ?>
                                <tr bgcolor="<?php if($dias_restantes < 6 && $dias_restantes != '-'){ if(in_array('9',$medidas)){ echo '#fac339'; }else{echo '#FFD773';} }else{ if(in_array('9',$medidas)){ echo '#c9a5c5'; }else{ echo '#DAD2D9';}} ?>">
                                  <td id="reg_nombre"><?php echo $row1['reg_nombre']; ?></td>
                                  <td id="ca_expediente"><?php echo $row1['ca_expediente']; ?></td>
                                  <td id="fec_ingreso"><?php echo date("d/m/Y", strtotime($row1['fec_ingreso'])); ?></td>
                                  <td id="consultante"><?php echo $row1['consultante']; ?></td>
                                  <td id="ca_tipmedida"><?php for($i=0;$i<$cant_medidas;$i++){ if($i==0){ if($cant_medidas == 1){ echo $tipo_medida[$medidas[$i]];}else{ echo $tipo_medida[$medidas[$i]]. ', '; }}else{ if($i == $cant_medidas-1){ echo $tipo_medida[$medidas[$i]]; }else{ echo $tipo_medida[$medidas[$i]]. ', ';}}} ?></td>
                                  <td id="ca_domicilio"><?php echo $row1['ca_domicilio']; ?></td>
                                  <td id="ca_plazo"><?php if($row1['ca_plazo'] != '') echo $row1['ca_plazo']; else echo 'Sin plazo';?></td>
                                  <td id="dias_restantes"><?php echo $dias_restantes; ?></td>
                                  <td id="fec_vencimiento"><?php if($row1['ca_plazo'] != '') echo date("d/m/Y", strtotime($fec_vencimiento)); else echo 'Sin fecha de vencimiento'; ?></td>
                                  <td id="per_dni"><?php echo $row1['per_dni']; ?></td>
                                  <td id="fec_hecho"><?php echo $row1['fec_hecho']; ?></td>
                                  <td id="fec_ingreso"><?php echo $row1['fec_ingreso']; ?></td>
                                  <td id="dni_agresor"><?php echo $row1['dni_agresor']; ?></td>
                                  <td id="agresor"><?php echo $row1['agresor']; ?></td>
                                  <td id="fis_descripcion"><?php echo $row1['fis_descripcion']; ?></td>
                                  <td id="ca_causa"><?php for($i=0;$i<$cant_causas;$i++){ if($i==0){ if($cant_causas == 1){ echo $causa[$causas[$i]];}else{ echo $causa[$causas[$i]]. ', '; }}else{ if($i == $cant_causas-1){ echo $causa[$causas[$i]]; }else{ echo $causa[$causas[$i]]. ', ';}}} ?></td>
                                  <td id="ca_domicilio2"><?php echo $row1['ca_domicilio2']; ?></td>
                                  <td id="ca_domicilio3"><?php echo $row1['ca_domicilio3']; ?></td>
                                  <td id="com_nombre"><?php echo $row1['com_nombre']; ?></td>
                                  <td id="ca_expedientefiscalia"><?php echo $row1['ca_expedientefiscalia']; ?></td>
                                  <td id="ca_oficio"><?php echo $row1['ca_oficio']; ?></td>
                                  <td id="comdependencia"><?php echo $row1['comdependencia']; ?></td>
                                  <td id="ca_observaciones"><?php echo $row1['ca_observaciones']; ?></td>
                                  <td align=center>
                                    <a data-toggle="modal" href="#ver" data-target="#verModalCenter<?php echo $row1['idcautelar']; ?>" id="<?php echo $row1['idcautelar']; ?>" class="btn btn-primary btn-md"><i class="far fa-eye" data-toggle="tooltip" data-placement="top" title="Visualizar"></i></a>
                                   </td>
                                   <?php if($_SESSION['permiso'] != 2){ ?>
                                  <td align=center>
                                    <a href="<?php echo URL; ?>cautelar/editar/<?php echo $row1['idcautelar']; ?>" class="btn btn-primary btn-md" data-toggle="tooltip" data-placement="top" title="Editar"><i class="fas fa-pencil-alt"></i></a></td>
                                  <?php } ?>
                                  <?php if($_SESSION['permiso'] != 3){ ?>
                                  <td align=center>
                                    <a data-toggle="modal" href="#eliminar" data-target="#eliminarModalCenter<?php echo $row1['idcautelar']; ?>" id="<?php echo $row1['idcautelar']; ?>" class="btn btn-primary btn-md"><i class="fas fa-trash-alt" data-toggle="tooltip" data-placement="top" title="Eliminar"></i></a>
                                   </td>
                                 <?php } ?>
                                   
<!-- el id del modal debe ser el mismo que el data target del boton-->
 <div class="modal fade" id="eliminarModalCenter<?php echo $row1['idcautelar'];?>" tabindex="-1" role="dialog" aria-labelledby="eliminarModalCenterTitle" aria-hidden="true"> 
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="eliminarModalLongTitle">Eliminar</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <p>¿Desea eliminar la medida cautelar con fecha de ingreso <b> <?php echo date("d/m/Y", strtotime($row1['fec_ingreso'])); ?> </b>?</p>         
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        <a href="<?php echo URL; ?>cautelar/eliminar/<?php echo $row1['idcautelar']; ?>" class="btn btn-primary">Eliminar</a>
      </div>
    </div>
  </div>
  </div>

  <!--Modal para ver medida cautelar-->
<!-- Modal -->
<div class="modal fade" id="verModalCenter<?php echo $row1['idcautelar']; ?>" tabindex="-1" role="dialog" aria-labelledby="verModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <!--Content-->
    <div class="modal-content">
      <!--Header-->
      <div class="modal-header text-center">
        <h3 class="modal-title w-100 dark-grey-text font-weight-bold my-3" id="eliminarModalLabel"><strong>Medida cautelar</strong></h3>
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
                    <input type="text" id="reg_nombre" name="reg_nombre" class="form-control" placeholder="Regional" required="required" autofocus="autofocus" value="<?php echo $row1['reg_nombre']; ?>" readonly>
                    <label for="reg_nombre">Regional</label>
                  </div>
                </div>
              </div>
            </div>
            <div class="form-group">
              <div class="form-row">
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                  <div class="form-label-group">
                    <input type="text" id="ca_expediente" name="ca_expediente" class="form-control" placeholder="N° expediente" required="required" autofocus="autofocus" value="<?php echo $row1['ca_expediente']; ?>" readonly>
                    <label for="ca_expediente">N° expediente</label>
                  </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                  <div class="form-label-group">
                    <input type="date" id="fec_ingresovieja" name="fec_ingresovieja" class="form-control" placeholder="Fecha de ingreso" required="required" autofocus="autofocus" max="<?php echo date("Y-m-d");?>" value="<?php echo $row1['fec_ingresovieja']; ?>" readonly>
                    <label for="per_nacido">Fecha de ingreso</label>
                  </div>
                </div>
              </div>
            </div>
            <div class="form-group">
              <div class="form-row">
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                  <div class="form-label-group">
                    <input type="text" id="ca_expedientefiscalia" name="ca_expedientefiscalia" class="form-control" placeholder="N° expediente fiscalía" required="required" autofocus="autofocus" value="<?php echo $row1['ca_expedientefiscalia']; ?>" readonly>
                    <label for="ca_expedientefiscalia">N° expediente fiscalía</label>
                  </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                  <div class="form-label-group">
                    <input type="date" id="fec_ingreso" name="fec_ingreso" class="form-control" placeholder="Fecha de inicio medida" required="required" autofocus="autofocus" max="<?php echo date("Y-m-d");?>" value="<?php echo $row1['fec_ingreso']; ?>" readonly>
                    <label for="per_nacido">Fecha de inicio medida</label>
                  </div>
                </div>
              </div>
            </div>
            <div class="form-group">
              <div class="form-row">
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                  <div class="form-label-group">
                    <input type="number" id="ca_oficio" name="ca_oficio" class="form-control" placeholder="N° de oficio" required="required" autofocus="autofocus" value="<?php echo $row1['ca_oficio']; ?>" readonly>
                    <label for="ca_oficio">N° de oficio</label>
                  </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                  <div class="form-label-group">
                    <input type="number" id="ca_oficio" name="ca_oficio" class="form-control" placeholder="N° de resolucion" required="required" autofocus="autofocus" value="<?php echo $row1['ca_resolucion']; ?>" readonly>
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
              <label for="ca_causa"><small>Causa</small></label> 
              <div class="form-row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                  <div class="form-label-group">
                    <textarea class="form-control" rows="5" id="ca_causa" name="ca_causa" value="" readonly=""><?php $ca_causa = explode(",", $row1['ca_causa']); $filas = count($ca_causa); for($i=0;$i<$filas;$i++){ if(isset($ca_causa[$i+1])) echo $causa[$ca_causa[$i]]. ' - '; else echo $causa[$ca_causa[$i]]; }?></textarea> 
                     
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
            <hr/>
            <div class="form-group">
              <div class="form-row">
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                  <div class="form-label-group">
                    <input type="date" id="fec_hecho" name="fec_hecho" class="form-control" placeholder="Fecha de ingreso" required="required" autofocus="autofocus" value="<?php echo $row1['fec_hecho']; ?>" readonly>
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
                    <label for="com_nombre">Dependencia de origen</label>
                  </div>
                </div>
              </div>
            </div>
            <div class="form-group">
              <div class="form-row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                  <div class="form-label-group">
                    <input type="text" id="med_nombre" name="med_nombre" class="form-control" placeholder="med_nombre" required="required" autofocus="autofocus" value="<?php for($i=0;$i<$cant_medidas;$i++){ if($i==0){ if($cant_medidas == 1){ echo $tipo_medida[$medidas[$i]];}else{ echo $tipo_medida[$medidas[$i]]. ', '; }}else{ if($i == $cant_medidas-1){ echo $tipo_medida[$medidas[$i]]; }else{ echo $tipo_medida[$medidas[$i]]. ', ';}}} ?>" readonly>
                    <label for="med_nombre">Tipo de medida</label>
                  </div>
                </div>
              </div>
            </div>
            <div class="form-group">
              <div class="form-row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                  <div class="form-label-group">
                    <input type="text" id="ca_domicilio" name="ca_domicilio" class="form-control" placeholder="ca_domicilio" required="required" autofocus="autofocus" value="<?php echo $row1['ca_domicilio']; ?>" readonly>
                    <label for="ca_domicilio">Domicilio de patrullaje 1</label>
                  </div>
                </div>
              </div>
            </div>
            <div class="form-group">
              <div class="form-row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                  <div class="form-label-group">
                    <input type="text" id="ca_domicilio2" name="ca_domicilio2" class="form-control" placeholder="ca_domicilio2" required="required" autofocus="autofocus" value="<?php echo $row1['ca_domicilio2']; ?>" readonly>
                    <label for="ca_domicilio2">Domicilio de patrullaje 2</label>
                  </div>
                </div>
              </div>
            </div>
            <div class="form-group">
              <div class="form-row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                  <div class="form-label-group">
                    <input type="text" id="ca_domicilio3" name="ca_domicilio3" class="form-control" placeholder="ca_domicilio3" required="required" autofocus="autofocus" value="<?php echo $row1['ca_domicilio3']; ?>" readonly>
                    <label for="ca_domicilio3">Domicilio de patrullaje 3</label>
                  </div>
                </div>
              </div>
            </div>
            <div class="form-group">
              <div class="form-row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                  <div class="form-label-group">
                    <input type="text" id="com_nombre" name="com_nombre" class="form-control" placeholder="com_nombre" required="required" autofocus="autofocus" value="<?php echo $row1['com_nombre']; ?>" readonly>
                    <label for="com_nombre">Comisaria</label>
                  </div>
                </div>
              </div>
            </div>
            <div class="form-group">
              <div class="form-row">
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                  <div class="form-label-group">
                    <input type="number" id="ca_plazo" name="ca_plazo" class="form-control" placeholder="ca_plazo" required="required" autofocus="autofocus" value="<?php echo $row1['ca_plazo']; ?>" readonly>
                    <label for="ca_plazo">Plazo</label>
                  </div>
                </div>
            <?php 
              $fec_vencimiento = strtotime('+'.$row1['ca_plazo'].' day', strtotime($row1['fec_ingreso']));
              $fec_vencimiento = date('Y-m-d', $fec_vencimiento);
            ?>
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                  <div class="form-label-group">
                    <input type="date" id="fec_vencimiento" name="fec_vencimiento" class="form-control" placeholder="fec_vencimiento" required="required" autofocus="autofocus" value="<?php if($dias_restantes != '-') echo $fec_vencimiento; else ''; ?>" readonly>
                    <label for="fec_vencimiento">Fecha de vencimiento</label>
                  </div>
                </div>
              </div>
            </div>
            <div class="form-group">
              <label for="ca_observaciones"><small>Observaciones</small></label> 
              <div class="form-row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                  <div class="form-label-group">
                    <textarea class="form-control" rows="5" id="ca_observaciones" name="ca_observaciones" placeholder="" value="" readonly=""><?php echo $row1['ca_observaciones']; ?></textarea> 
                     
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
if(isset($_POST['ca_expediente1'])){//TABLA PARA MOSTRAR CAUTELAR BUSCADA POR NUMERO DE EXPEDIENTE (PUEDE ESTAR VENCIDA O NO) ?>
                                  <tr bgcolor="<?php if($dias_restantes < 6 && $dias_restantes != '-'){ if(in_array('9',$medidas)){ echo '#fac339'; }else{echo '#FFD773';} }else{ if(in_array('9',$medidas)){ echo '#c9a5c5'; }else{ echo '#DAD2D9';}} ?>">
                                  <td id="reg_nombre"><?php echo $row1['reg_nombre']; ?></td>
                                  <td id="ca_expediente"><?php echo $row1['ca_expediente']; ?></td>
                                  <td id="fec_ingreso"><?php echo date("d/m/Y", strtotime($row1['fec_ingreso'])); ?></td>
                                  <td id="consultante"><?php echo $row1['consultante']; ?></td>
                                  <td id="ca_tipmedida"><?php for($i=0;$i<$cant_medidas;$i++){ if($i==0){ if($cant_medidas == 1){ echo $tipo_medida[$medidas[$i]];}else{ echo $tipo_medida[$medidas[$i]]. ', '; }}else{ if($i == $cant_medidas-1){ echo $tipo_medida[$medidas[$i]]; }else{ echo $tipo_medida[$medidas[$i]]. ', ';}}} ?></td>
                                  <td id="ca_domicilio"><?php echo $row1['ca_domicilio']; ?></td>
                                  <td id="ca_plazo"><?php if($row1['ca_plazo'] != '') echo $row1['ca_plazo']; else echo 'Sin plazo';?></td>
                                  <td id="dias_restantes"><?php if($dias_restantes < 0) echo 'VENCIDA'; else echo $dias_restantes; ?></td>
                                  <td id="fec_vencimiento"><?php if($row1['ca_plazo'] != '') echo date("d/m/Y", strtotime($fec_vencimiento)); else echo 'Sin fecha de vencimiento'; ?></td>
                                  <td align=center>
                                    <a data-toggle="modal" href="#ver" data-target="#verModalCenter<?php echo $row1['idcautelar']; ?>" id="<?php echo $row1['idcautelar']; ?>" class="btn btn-primary btn-md"><i class="far fa-eye" data-toggle="tooltip" data-placement="top" title="Visualizar"></i></a>
                                   </td>
                                  <?php if($_SESSION['permiso'] != 2){ ?>
                                  <td align=center>
                                    <a href="<?php echo URL; ?>cautelar/editar/<?php echo $row1['idcautelar']; ?>" class="btn btn-primary btn-md" data-toggle="tooltip" data-placement="top" title="Editar"><i class="fas fa-pencil-alt"></i></a></td>
                                  <?php } ?>
                                  <?php if($_SESSION['permiso'] != 3){ ?>
                                  <td align=center>
                                    <a data-toggle="modal" href="#eliminar" data-target="#eliminarModalCenter<?php echo $row1['idcautelar']; ?>" id="<?php echo $row1['idcautelar']; ?>" class="btn btn-primary btn-md"><i class="fas fa-trash-alt" data-toggle="tooltip" data-placement="top" title="Eliminar"></i></a>
                                   </td>
                                 <?php } ?>
                                   
<!-- el id del modal debe ser el mismo que el data target del boton-->
 <div class="modal fade" id="eliminarModalCenter<?php echo $row1['idcautelar'];?>" tabindex="-1" role="dialog" aria-labelledby="eliminarModalCenterTitle" aria-hidden="true"> 
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="eliminarModalLongTitle">Eliminar</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <p>¿Desea eliminar la medida cautelar con fecha de ingreso <b> <?php echo date("d/m/Y", strtotime($row1['fec_ingreso'])); ?> </b>?</p>         
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        <a href="<?php echo URL; ?>cautelar/eliminar/<?php echo $row1['idcautelar']; ?>" class="btn btn-primary">Eliminar</a>
      </div>
    </div>
  </div>
  </div>

  <!--Modal para ver medida cautelar-->
<!-- Modal -->
<div class="modal fade" id="verModalCenter<?php echo $row1['idcautelar']; ?>" tabindex="-1" role="dialog" aria-labelledby="verModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <!--Content-->
    <div class="modal-content">
      <!--Header-->
      <div class="modal-header text-center">
        <h3 class="modal-title w-100 dark-grey-text font-weight-bold my-3" id="eliminarModalLabel"><strong>Medida cautelar</strong></h3>
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
                    <input type="text" id="reg_nombre" name="reg_nombre" class="form-control" placeholder="Regional" required="required" autofocus="autofocus" value="<?php echo $row1['reg_nombre']; ?>" readonly>
                    <label for="reg_nombre">Regional</label>
                  </div>
                </div>
              </div>
            </div>
            <div class="form-group">
              <div class="form-row">
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                  <div class="form-label-group">
                    <input type="text" id="ca_expediente" name="ca_expediente" class="form-control" placeholder="N° expediente" required="required" autofocus="autofocus" value="<?php echo $row1['ca_expediente']; ?>" readonly>
                    <label for="ca_expediente">N° expediente</label>
                  </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                  <div class="form-label-group">
                    <input type="date" id="fec_ingresovieja" name="fec_ingresovieja" class="form-control" placeholder="Fecha de ingreso" required="required" autofocus="autofocus" max="<?php echo date("Y-m-d");?>" value="<?php echo $row1['fec_ingresovieja']; ?>" readonly>
                    <label for="per_nacido">Fecha de ingreso</label>
                  </div>
                </div>
              </div>
            </div>
            <div class="form-group">
              <div class="form-row">
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                  <div class="form-label-group">
                    <input type="text" id="ca_expedientefiscalia" name="ca_expedientefiscalia" class="form-control" placeholder="N° expediente fiscalía" required="required" autofocus="autofocus" value="<?php echo $row1['ca_expedientefiscalia']; ?>" readonly>
                    <label for="ca_expedientefiscalia">N° expediente fiscalía</label>
                  </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                  <div class="form-label-group">
                    <input type="date" id="fec_ingreso" name="fec_ingreso" class="form-control" placeholder="Fecha de ingreso" required="required" autofocus="autofocus" max="<?php echo date("Y-m-d");?>" value="<?php echo $row1['fec_ingreso']; ?>" readonly>
                    <label for="per_nacido">Fecha de inicio medida</label>
                  </div>
                </div>
              </div>
            </div>
            <div class="form-group">
              <div class="form-row">
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                  <div class="form-label-group">
                    <input type="number" id="ca_oficio" name="ca_oficio" class="form-control" placeholder="N° de oficio" required="required" autofocus="autofocus" value="<?php echo $row1['ca_oficio']; ?>" readonly>
                    <label for="ca_oficio">N° de oficio</label>
                  </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                  <div class="form-label-group">
                    <input type="number" id="ca_oficio" name="ca_oficio" class="form-control" placeholder="N° de resolucion" required="required" autofocus="autofocus" value="<?php echo $row1['ca_resolucion']; ?>" readonly>
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
              <label for="ca_causa"><small>Causa</small></label> 
              <div class="form-row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                  <div class="form-label-group">
                    <textarea class="form-control" rows="5" id="ca_causa" name="ca_causa" value="" readonly=""><?php $ca_causa = explode(",", $row1['ca_causa']); $filas = count($ca_causa); for($i=0;$i<$filas;$i++){ if(isset($ca_causa[$i+1])) echo $causa[$ca_causa[$i]]. ' - '; else echo $causa[$ca_causa[$i]]; }?></textarea> 
                     
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
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                  <div class="form-label-group">
                    <b>Agresor</b>
                  </div>
                </div>
              </div>
            </div>
            <div class="form-group">
              <div class="form-row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                  <div class="form-label-group">
                    <input type="text" id="agresor" name="agresor" class="form-control" placeholder="agresor" required="required" autofocus="autofocus" value="<?php echo $row1['agresor']; ?>" readonly>
                    <label for="agresor">Nombre del agresor</label>
                  </div>
                </div>
              </div>
            </div>
            <hr/>
            <div class="form-group">
              <div class="form-row">
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                  <div class="form-label-group">
                    <input type="date" id="fec_hecho" name="fec_hecho" class="form-control" placeholder="Fecha de ingreso" required="required" autofocus="autofocus" value="<?php echo $row1['fec_hecho']; ?>" readonly>
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
                    <label for="com_nombre">Dependencia de origen</label>
                  </div>
                </div>
              </div>
            </div>
            <div class="form-group">
              <div class="form-row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                  <div class="form-label-group">
                    <input type="text" id="med_nombre" name="med_nombre" class="form-control" placeholder="med_nombre" required="required" autofocus="autofocus" value="<?php for($i=0;$i<$cant_medidas;$i++){ if($i==0){ if($cant_medidas == 1){ echo $tipo_medida[$medidas[$i]];}else{ echo $tipo_medida[$medidas[$i]]. ', '; }}else{ if($i == $cant_medidas-1){ echo $tipo_medida[$medidas[$i]]; }else{ echo $tipo_medida[$medidas[$i]]. ', ';}}} ?>" readonly>
                    <label for="med_nombre">Tipo de medida</label>
                  </div>
                </div>
              </div>
            </div>
            <div class="form-group">
              <div class="form-row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                  <div class="form-label-group">
                    <input type="text" id="ca_domicilio" name="ca_domicilio" class="form-control" placeholder="ca_domicilio" required="required" autofocus="autofocus" value="<?php echo $row1['ca_domicilio']; ?>" readonly>
                    <label for="ca_domicilio">Domicilio de patrullaje 1</label>
                  </div>
                </div>
              </div>
            </div>
            <div class="form-group">
              <div class="form-row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                  <div class="form-label-group">
                    <input type="text" id="ca_domicilio2" name="ca_domicilio2" class="form-control" placeholder="ca_domicilio2" required="required" autofocus="autofocus" value="<?php echo $row1['ca_domicilio2']; ?>" readonly>
                    <label for="ca_domicilio2">Domicilio de patrullaje 2</label>
                  </div>
                </div>
              </div>
            </div>
            <div class="form-group">
              <div class="form-row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                  <div class="form-label-group">
                    <input type="text" id="ca_domicilio3" name="ca_domicilio3" class="form-control" placeholder="ca_domicilio3" required="required" autofocus="autofocus" value="<?php echo $row1['ca_domicilio3']; ?>" readonly>
                    <label for="ca_domicilio3">Domicilio de patrullaje 3</label>
                  </div>
                </div>
              </div>
            </div>
            <div class="form-group">
              <div class="form-row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                  <div class="form-label-group">
                    <input type="text" id="com_nombre" name="com_nombre" class="form-control" placeholder="com_nombre" required="required" autofocus="autofocus" value="<?php echo $row1['com_nombre']; ?>" readonly>
                    <label for="com_nombre">Comisaria</label>
                  </div>
                </div>
              </div>
            </div>
            <div class="form-group">
              <div class="form-row">
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                  <div class="form-label-group">
                    <input type="number" id="ca_plazo" name="ca_plazo" class="form-control" placeholder="ca_plazo" required="required" autofocus="autofocus" value="<?php echo $row1['ca_plazo']; ?>" readonly>
                    <label for="ca_plazo">Plazo</label>
                  </div>
                </div>
            <?php 
              $fec_vencimiento = strtotime('+'.$row1['ca_plazo'].' day', strtotime($row1['fec_ingreso']));
              $fec_vencimiento = date('Y-m-d', $fec_vencimiento);
            ?>
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                  <div class="form-label-group">
                    <input type="date" id="fec_vencimiento" name="fec_vencimiento" class="form-control" placeholder="fec_vencimiento" required="required" autofocus="autofocus" value="<?php if($dias_restantes != '-')echo $fec_vencimiento; else ''; ?>" readonly>
                    <label for="fec_vencimiento">Fecha de vencimiento</label>
                  </div>
                </div>
              </div>
            </div>
            <div class="form-group">
              <label for="ca_observaciones"><small>Observaciones</small></label> 
              <div class="form-row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                  <div class="form-label-group">
                    <textarea class="form-control" rows="5" id="ca_observaciones" name="ca_observaciones" placeholder="" value="" readonly=""><?php echo $row1['ca_observaciones']; ?></textarea> 
                     
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
<?php }}}else{ ?>

              <div id="content-wrapper" style="background-color: #e9e2e8">
               <div class="container-fluid">  
                      <div class="card col-xs-12 col-sm-12 col-md-12 col-lg-12">  
                        <div class="card-header"><?php echo $filas; ?> ficha/s encontrada/s con <strong><?php echo $_POST['per_dni1']; ?></strong></div>
                          <div class="card-body">
                            <div class="table-responsive">
                              <table class="table table-bordered" id="dataTableBuscar" width="100%" cellspacing="0">
                                <thead>
                                  <tr style="background-color: #b3434375">
                                    <th>DNI</th>
                                    <th>Consultante</th>
                                    <th>Agresor</th>
                                    <th>Fecha de consulta</th>
                                    <th>Fecha de agresion</th>
                                    <th>Hora de consulta</th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                  </tr>
                                </thead>
                                <tbody>
                            <?php 
                              while ($row1 = pg_fetch_array($datos)){
                            ?>
                                <tr bgcolor="#DAD2D9">
                                  <td id="per_dni"><?php echo $row1['per_dni']; ?></td>
                                  <td id="per_dni"><?php echo $row1['consultante']; ?></td>
                                  <td id="agresor"><?php echo $row1['agresor']; ?></td>
                                  <td id="fec_consulta"><?php echo date("d/m/Y", strtotime($row1['fec_consulta'])); ?></td>
                                  <td id="fec_agresion"><?php echo date("d/m/Y", strtotime($row1['fec_agresion'])); ?></td>
                                  <td id="horaconsulta"><?php echo $row1['horaconsulta']; ?></td>
                                  <td align=center>
                                  <a href="<?php echo URL; ?>ficha/detalles/<?php echo $row1['idficha']; ?>" class="btn btn-primary btn-md" data-toggle="tooltip" data-placement="top" title="Ver Ficha Completa"><i class="far fa-id-card"></i></i></a></td>
                                  <td align=center>
                                    <a href="<?php echo URL; ?>persona/editar/<?php echo $row1['idficha']; ?>" class="btn btn-primary btn-md" data-toggle="tooltip" data-placement="top" title="Editar"><i class="fas fa-pencil-alt"></i></a></td>
                                    <td align=center>
                                    <a href="<?php echo URL; ?>seguimiento/ver_seguimiento?idficha=<?php echo $row1['idficha']; ?>" class="btn btn-primary btn-md" data-toggle="tooltip" data-placement="top" title="Seguimiento"><i>S</i></a></td>
                                    <td align=center>
                                    <a href="<?php echo URL; ?>reincidencia/ver_reincidencia?idficha=<?php echo $row1['idficha']; ?>" class="btn btn-primary btn-md" data-toggle="tooltip" data-placement="top" title="Reincidencia"><i>R</i></a></td>
                                  <td align=center>
                                    <a data-toggle="modal" href="#eliminar" data-target="#eliminarModalCenter<?php echo $row1['idficha']; ?>" id="<?php echo $row1['idficha']; ?>" class="btn btn-primary btn-md"><i class="fas fa-trash-alt" data-toggle="tooltip" data-placement="top" title="Eliminar"></i></a>
                                   </td>
                                   
                                         <!-- el id del modal debe ser el mismo que el data target del boton-->
 <div class="modal fade" id="eliminarModalCenter<?php echo $row1['idficha'];?>" tabindex="-1" role="dialog" aria-labelledby="eliminarModalCenterTitle" aria-hidden="true"> 
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="eliminarModalLongTitle">Eliminar</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <p>¿Desea eliminar la ficha del consultante <b> <?php echo $row1['consultante'];?> </b> elaborada 
              en la fecha <b> <?php echo $row1['fec_consulta']; ?> </b> a horas <b> <?php echo $row1['horaconsulta']; ?> </b> ?</p>         
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        <a href="<?php echo URL; ?>ficha/eliminar/<?php echo $row1['idficha'] ; ?>" class="btn btn-primary">Eliminar</a>
      </div>
    </div>
  </div>
  </div>
          
      <?php  }}} } ?>
                                
                              </tr>
                            </tbody>
                        </table>
                        <?php  if(isset($row1)){
                        if($_SESSION['idinstitucion'] == 13){ ?>
                          <br>
                          <div class="form-group">
                            <div class="form-row">
                              <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
                                <i class="fas fa-square" style="color: #DAD2D9;"></i> Medida cautelar vigente
                              </div>
                              <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
                                <i class="fas fa-square" style="color: #FFD773;"></i> Medida cautelar cerca de vencer
                              </div>
                              <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
                                <i class="fas fa-square" style="color: #c9a5c5;"></i> Dispositivo dual vigente
                              </div>
                              <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
                                <i class="fas fa-square" style="color: #fac339;"></i> Dispositivo dual cerca de vencer
                              </div>
                            </div>
                          </div>
                      <?php }} ?>
                    </div>
                </div>
           </div>               
      </div>
</div>
  </body>
</html>