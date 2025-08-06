<!DOCTYPE html>
<html lang="en">

  <body id="page-top">


    <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#my1">
  Open modal
</button> -->



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
              <strong>No se encontraron <?php if($_SESSION['idinstitucion'] == 13) echo 'medidas cautelares.'; ?></strong>
              <br>
              <!--<a href="<?php echo URL; ?>principal/buscar/"><button type="button" class="btn btn-primary">Volver</button></a>-->
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
                        <div class="card-header"><?php if(isset($_POST['ca_expediente1'])) echo 'Medida encontrada'; else echo 'Medidas vencidas hasta el día de hoy'; ?></div>
                          <div class="card-body">
                            <div class="table-responsive">
                              <table class="table table-bordered" id="dataTableCautelarVencidas" width="100%" cellspacing="0">
                                <thead>
                                  <tr style="background-color: #b3434375">
                                    <th>Regional</th>
                                    <th>Expediente</th>
                                    <th>Fecha de ingreso</th>
                                    <th>Víctima</th>
                                    <th>Tipo medida</th>
                                    <th>Domicilio patrullaje</th>
                                    <th>Plazo (días)</th>
                                    <th>Vencida hace (días)</th>
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
                                    <th></th>
                                    
                                  </tr>
                                </thead>
                                <tbody>
                            <?php 
                              while ($row1 = pg_fetch_array($datos)){
                                $fec_vencimiento = strtotime('+'.$row1['ca_plazo'].' day', strtotime($row1['fec_ingreso']));
                                $fec_vencimiento = date('Y-m-d', $fec_vencimiento);
                                $hoy = date('Y-m-d');
                                $fechoy = strtotime($hoy);
                                $fecven = strtotime($fec_vencimiento);
                                $diff = $fecven - $fechoy;
                                $dias_vencidos = round($diff / 86400); 
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
                                $causa[31] = 'Hurto agravado';
                                $causa[32] = 'Alimentos';
                                $causa[33] = 'Sustracción de Menores Art. 146';
                                $medidas = explode(',',$row1['ca_tipmedidas']);
                                $cant_medidas = count($medidas);
			        $causas = explode(',',$row1['ca_causa']);
                                $cant_causas = count($causas);
                                if($dias_vencidos < 0 && $row1['ca_plazo'] != ''){
                            ?>
                                <tr bgcolor="<?php if(in_array('9',$medidas)){ echo '#c9a5c5'; }else{ echo '#DAD2D9';} ?>">
                                  <td id="reg_nombre"><?php echo $row1['reg_nombre']; ?></td>
                                  <td id="ca_expediente"><?php echo $row1['ca_expediente']; ?></td>
                                  <td id="fec_ingreso"><?php echo date("d/m/Y", strtotime($row1['fec_ingreso'])); ?></td>
                                  <td id="consultante"><?php echo $row1['consultante']; ?></td>
                                  <td id="ca_tipmedida"><?php for($i=0;$i<$cant_medidas;$i++){ if($i==0){ if($cant_medidas == 1){ echo $tipo_medida[$medidas[$i]];}else{ echo $tipo_medida[$medidas[$i]]. ', '; }}else{ if($i == $cant_medidas-1){ echo $tipo_medida[$medidas[$i]]; }else{ echo $tipo_medida[$medidas[$i]]. ', ';}}} ?></td>
                                  <td id="ca_domicilio"><?php echo $row1['ca_domicilio']; ?></td>
                                  <td id="ca_plazo"><?php echo $row1['ca_plazo']; ?></td>
                                  <td id="dias_vencidos"><?php echo $dias_vencidos * -1; ?></td>
                                  <td id="fec_vencimiento"><?php echo date("d/m/Y", strtotime($fec_vencimiento)); ?></td>
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
                    <input type="text" id="ca_expedientefiscalia" name="ca_expedientefiscalia" class="form-control" placeholder="N° expediente" required="required" autofocus="autofocus" value="<?php echo $row1['ca_expedientefiscalia']; ?>" readonly>
                    <label for="ca_expedientefiscalia">N° expediente</label>
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
                    <input type="number" id="ca_resolucion" name="ca_resolucion" class="form-control" placeholder="N° de resolucion" required="required" autofocus="autofocus" value="<?php echo $row1['ca_resolucion']; ?>" readonly>
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
              <label for="ca_observaciones"><small>Otras Victimas</small></label> 
              <div class="form-row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                  <div class="form-label-group">
                    <textarea class="form-control" rows="5" id="otrasvict" name="otrasvict" placeholder="" value="" readonly=""><?php echo $row1['otrasvictimas']; ?></textarea> 
                     
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
              <label for="ca_observaciones"><small>Otros Agresores</small></label> 
              <div class="form-row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                  <div class="form-label-group">
                    <textarea class="form-control" rows="5" id="otrosagres" name="otrosagres" placeholder="" value="" readonly=""><?php echo $row1['otrosagresores']; ?></textarea> 
                     
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
                    <input type="text" id="ca_domicilio" name="ca_domicilio2" class="form-control" placeholder="ca_domicilio2" required="required" autofocus="autofocus" value="<?php echo $row1['ca_domicilio2']; ?>" readonly>
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
                    <input type="date" id="fec_vencimiento" name="fec_vencimiento" class="form-control" placeholder="fec_vencimiento" required="required" autofocus="autofocus" value="<?php echo $fec_vencimiento; ?>" readonly>
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
<?php }}}}} ?>
                                
                              </tr>
                            </tbody>
                        </table>
                        <?php if(isset($row1)){
                        if($_SESSION['idinstitucion'] == 13){ ?>
                          <br>
                          <div class="form-group">
                            <div class="form-row">
                              <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
                              </div>
                              <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
                                <i class="fas fa-square" style="color: #DAD2D9;"></i> Medida cautelar vencida
                              </div>
                              <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
                                <i class="fas fa-square" style="color: #c9a5c5;"></i> Dispositivo dual vencido
                              </div>
                              <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
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