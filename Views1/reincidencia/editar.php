<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">    
    <title>Edición de ficha de reincidencia</title>

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
            document.getElementById("re_donde").disabled=false;
            document.getElementById("idfiscalia").disabled=false;
          }else{
            // deshabilitamos
            if(value=="2"){
              document.getElementById("re_donde").value='';
              document.getElementById("re_donde").disabled=true;
              document.getElementById("idfiscalia").value='';
              document.getElementById("idfiscalia").disabled=true;
            }
          }
        }

        function habilitar1(value)
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
  </head>

  <body class="bg-dark">
  <div id="enviar" name="enviar"> 
      <?php include 'r_menuizq.php';?>
    <div id="content-wrapper" style="background-color: #e9e2e8">
      <div class="container-fluid">
        <div class="card col-xs-12 col-sm-12 col-md-12 col-lg-12">
          <div class="card-header">Edición reincidencia</div>
            <div class="card-body">
              <form role="form" class="form-horizontal" enctype="multipart/form-data"  method="post" action="">
                <div class="form-group">
                  <div class="form-row">
                    <div class="col-xs-12 col-sm-6 col-md-8 col-lg-3">
                      <div class="form-label-group">
                        <?php $row = pg_fetch_array($datos); ?>
                        <input type="date" id="re_fecha" name="re_fecha" class="form-control" placeholder="Fecha de seguimiento" required="required" autofocus="autofocus" max="<?php echo date("Y-m-d");?>" value="<?php if($row['re_fecha']) echo $row['re_fecha']; ?>" onfocusout="validarFecha(this.value);">
                        <label for="re_fecha"><b>Fecha de reincidencia(*)</b></label>
                      </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-8 col-lg-3">
                    <div class="form-label-group">
                      <input type="time" id="re_horario" name="re_horario" class="form-control" placeholder="Horario" required="required" autofocus="autofocus" value="<?php if($row['re_horario']) echo $row['re_horario']; ?>">
                        <label for="re_horario"><small><b>Horario(*)</b></small></label>
                    </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-8 col-lg-3">
                      <div class="form-label-group">
                        <input type="hidden" id="idficha" name="idficha" class="form-control" placeholder="Fecha de seguimiento" required="required" autofocus="autofocus" value="<?php echo $row['idficha']; ?>">
                        <label for="idficha"></label>
                      </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-8 col-lg-3">
                      <div class="form-label-group">
                        <input type="hidden" id="fec_consulta" name="fec_consulta" class="form-control" placeholder="Fecha de seguimiento" required="required" autofocus="autofocus" value="<?php if($row['fec_consulta']) echo $row['fec_consulta']; ?>">
                        <label for="fec_consulta"></label>
                      </div>
                    </div>
                    </div>
                  </div>
                     <div class="form-group">
                        <div class="form-row">
                          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <div class="form-label-group">
                              <br /><b>Persona</b><hr>
                            </div>
                          </div>
                        </div>
                      </div>    
                      <div class="form-group">
                        <div class="form-row">
                          <div class="col-xs-12 col-sm-6 col-md-8 col-lg-3">
                            <div class="form-label-group">
                              <input  type="number" id="per_dni" name="per_dni" class="form-control" placeholder="DNI Consultante" min="1000000" max="99999999" required="required" autofocus="autofocus" value="<?php if($row['per_dni']) echo $row['per_dni']; ?>" disabled>
                            <label for="per_dni"><small><b>DNI Consultante(*)</b></small></label>
                          </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-8 col-lg-3">
                            <div class="form-label-group">
                              <input  type="hidden" id="r_per_dni" name="r_per_dni" class="form-control" placeholder="DNI Consultante" min="1000000" max="99999999" required="required" autofocus="autofocus" value="<?php if($row['per_dni']) echo $row['per_dni']; ?>">
                          </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-8 col-lg-3">
                            <div class="form-label-group">
                              <input  type="hidden" id="idreincidencia" name="idreincidencia" class="form-control" value="<?php if($row['idreincidencia']) echo $row['idreincidencia']; ?>">
                          </div>
                        </div>
                    </div>
                  </div>
                      <div class="form-group">
                        <div class="form-row">
                          <div class="col-xs-12 col-sm-6 col-md-8 col-lg-6">
                            <div class="form-label-group">
                              <input type="text" id="per_apellido" name="per_apellido" class="form-control" placeholder="Apellido" required="required" value="<?php if($row['per_apellido']) echo $row['per_apellido']; ?>">
                              <label for="per_apellido"><small><b>Apellido(*)</b></small></label>
                            </div>
                          </div>
                          <div class="col-xs-12 col-sm-6 col-md-8 col-lg-6">
                            <div class="form-label-group">
                              <input type="text" id="per_nombre" name="per_nombre" class="form-control" placeholder="Nombre" required="required" value="<?php if($row['per_nombre']) echo $row['per_nombre']; ?>">
                              <label for="per_nombre"><small><b>Nombre(*)</b></small></label>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="form-row">
                          <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                            <div class="form-label-group">
                              <input type="number" id="idsexo" name="idsexo" class="form-control" placeholder="Sexo" min="0" max="2" required="required" value="<?php if($row['idsexo']) echo $row['idsexo']; ?>" onkeyup="this.value=Numeros(this.value)" onfocusout="habilitar1(this.value);">
                              <label for="idsexo"><small><b>Sexo(*)</b></small></label>
                            </div>
                          </div>
                          <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                            <div class="form-label-group">
                              <input type="number" id="idgenero" name="idgenero" class="form-control" placeholder="Persona trans" onkeyup="this.value=Numeros1(this.value)" required="required" value="<?php if(isset($row)){ echo $row['idgenero']; } ?>">
                              <label for="idgenero"><small><b>Persona Trans(*)</b></small></label>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="form-row">
                          <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                            <div class="form-label-group">
                              <input type="number" id="idestadocivil" name="idestadocivil" class="form-control" placeholder="Estado civil" maxlength="1"  autofocus="autofocus" min="1" max="6" onkeyup="this.value=Numeros2(this.value)" value="<?php if($row['idestadocivil']) echo $row['idestadocivil']; ?>">
                              <label for="idestadocivil"><small><b>Estado civil(*)</b></small></label>
                            </div>
                          </div>
                          <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                            <div class="form-label-group">
                              <?php $fechaactual = date("Y-m-d"); 
                                    //$fechamasuno = date('d-m-Y', strtotime($fechaactual.'+1 days'));
                                    $fechamenor = date('Y-m-d', strtotime($fechaactual.'- 14 year'));
                              ?>

                              <input type="date" id="per_nacido" name="per_nacido" class="form-control" placeholder="Fecha de nacimiento" required="required" autofocus="autofocus" min="1899-01-01" max="<?php echo $fechamenor;?>" value="<?php if(isset($row)){ echo $row['per_nacido']; } ?>">
                              <label for="per_nacido"><b>Fecha de nacimiento(*)</b></label>
                            </div>
                          </div>
                          </div>
                        </div>
                        <div class="form-group">
                          <div class="form-row">
                            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                              <div class="form-label-group">
                                <input type="number" id="per_celular" name="per_celular" class="form-control" placeholder="DNI Consultante"  autofocus="autofocus" max="100000000000" value="<?php if(isset($row)){ echo $row['per_celular']; } ?>">
                                <label for="per_celular"><small>Celular</small></label>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="form-group">
                          <div class="form-row">
                            <div class="col-xs-12 col-sm-12 col-md-8 col-lg-6">
                              <div class="form-label-group">
                                <input type="text" id="per_domicilio" name="per_domicilio" class="form-control" placeholder="Domicilio"  autofocus="autofocus" value="<?php if(isset($row)){ echo $row['per_domicilio']; } ?>">
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
                                <input  type="hidden" id="departamento1" name="iddepartamento" value="<?php if(isset($row)){ echo $row['iddepartamento']; } ?> ">
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
                                <input  type="hidden" id="localidad1" name="idlocalidad" value="<?php if(isset($row)){ echo $row['idlocalidad']; } ?> ">
                                <select name="localidad" id="localidad" style="font-size:11pt" class="form-control"></select>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="form-group">
                        <div class="form-row">
                          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <div class="form-label-group">
                              <br /><b>Datos consultante</b><hr>
                            </div>
                          </div>
                        </div>
                      </div> 
                      <div class="form-group">
                  <div class="form-row">
                    <div class="col-xs-12 col-sm-6 col-md-8 col-lg-3">
                      <div class="form-label-group">
                        <input type="date" id="fec_consulta" name="fec_consulta" class="form-control" placeholder="Fecha consulta" value= "<?php if (isset($row['fec_consulta'])) echo $row['fec_consulta']; ?>" required="required" max="<?php echo date("Y-m-d");?>" autofocus="autofocus" disabled>
                        <label for="fec_consulta"><b>Fecha consulta(*)</b></label>
                      </div>
                    </div>

                    <div class="col-xs-12 col-sm-6 col-md-8 col-lg-3">
                      <div class="form-label-group">
                        <input type="time" id="horaconsulta" name="horaconsulta" class="form-control" placeholder="Hora consulta" value= "<?php if (isset($row['horaconsulta'])) echo $row['horaconsulta']; ?>" max="fec_consulta" disabled>
                        <label for="horaconsulta">Hora consulta</label>
                      </div>
                    </div>
                  </div>
                </div>
               <script>
                   document.getElementById("fec_consulta").onchange = function ()
                    {
                    var input = document.getElementById("fec_agresion");
                    input.max = this.value;
                    }
               </script>
                  
               <div class="form-group">
                  <div class="form-row">
                    <div class="col-xs-12 col-sm-6 col-md-8 col-lg-3">
                      <div class="form-label-group">
                        <input type="date" id="r_fec_agresion" name="r_fec_agresion" class="form-control" placeholder="Fecha agresión" value= "<?php if (isset($row['r_fec_agresion'])) echo $row['r_fec_agresion']; ?>" max="<?php echo date("Y-m-d");?>" required="required">
                        <label for="fec_agresion"><b>Fecha agresión(*)</b></label>
                      </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-8 col-lg-3">
                      <div class="form-label-group">
                        <input type="time" id="r_hora_agresion" name="r_hora_agresion" class="form-control" placeholder="Hora agresión" value= "<?php if (isset($row['r_hora_agresion'])) echo $row['r_hora_agresion']; ?>" >
                        <label for="r_hora_agresion"><small>Hora agresión</small></label>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="form-row">
                      <div class="col-xs-12 col-sm-6 col-md-8 col-lg-3">
                      <div class="form-label-group">
                        <input type="number" id="r_idmomento" name="r_idmomento" class="form-control" placeholder="Momento del día" min="1" max="5" onkeyup="this.value=Numeros4(this.value)" value= "<?php if (isset($row['r_idmomento'])) echo $row['r_idmomento']; ?>" required="required">
                        <label for="r_idmomento"><small><b>Momento de agresión(*)</b></small></label>
                      </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-8 col-lg-3">
                      <div class="form-label-group">
                        <input type="number" id="r_p_menores" name="r_p_menores" class="form-control" placeholder="Presencia de menores" onkeyup="this.value=Numeros3(this.value)" value= "<?php if (isset($row['r_p_menores'])) echo $row['r_p_menores']; ?>" required="required" autofocus="autofocus">
                        <label for="r_p_menores"><small><b>Presencia de menores(*)</b></small></label>
                      </div>
                    </div>
                    </div>
                  </div>
                  <div class="form-group">
                  <div class="form-row">
                      <div class="col-xs-12 col-sm-12 col-md-8 col-lg-6">
                        <div class="form-label-group">
                          <input type="text" id="agresor" name="agresor" class="form-control" placeholder="Apellido y nombre del agresor" value= "<?php if (isset($row['agresor'])) echo $row['agresor']; ?>" autofocus="autofocus" autocomplete="off" disabled>
                          <label for="agresor"><small>Nombre del agresor</small></label>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="form-row">
                      <div class="col-xs-12 col-sm-6 col-md-8 col-lg-3">
                        <div class="form-label-group">
                          <input type="number" id="r_disponelugar" name="r_disponelugar" class="form-control" placeholder="Dispone de lugar" onkeyup="this.value=Numeros5(this.value)" value= "<?php if($row['r_disponelugar']) echo $row['r_disponelugar']; ?>" autofocus="autofocus" min="1" max="2">
                          <label for="r_disponelugar"><small>Dispone de lugar</small></label>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="form-row">
                      <div class="col-xs-12 col-sm-6 col-md-8 col-lg-3">
                        <div class="form-label-group">
                          <input type="number" id="r_idsalud" name="r_idsalud" class="form-control" placeholder="Cobertura de salud" onkeyup="this.value=Numeros6(this.value)" value= "<?php if (isset($row['r_idsalud'])) echo $row['r_idsalud']; ?>" autofocus="autofocus" min="1" max="3">
                          <label for="r_idsalud"><small>Cobertura de salud</small></label>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="form-row">
                      <div class="col-xs-12 col-sm-6 col-md-8 col-lg-3">
                        <div class="form-label-group">
                          <input type="number" id="r_idvivienda" name="r_idvivienda" class="form-control" onkeyup="this.value=Numeros7(this.value)" value= "<?php if (isset($row['r_idvivienda'])) echo $row['r_idvivienda']; ?>" placeholder="Tenencia de vivienda" autofocus="autofocus" min="1" max="7">
                          <label for="r_idvivienda"><small>Tenencia de vivienda</small></label>
                        </div>
                      </div>
                    </div>
                  </div>
                <div class="form-group">
                          <div class="form-row">
                            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                              <div class="selector-profesional">
                                <input  type="hidden" id="idusuario" name="idusuario" value="<?php echo $_SESSION['idusuario']; ?>">
                                <input  type="hidden" id="idprofesional1" name="idprofesional1" value="<?php if ($row['r_idprofesional']){ echo $row['r_idprofesional'];}else{echo '+';} ?>">
                                <select name="idprofesional" id="idprofesional" style="font-size:11pt" class="form-control"></select>
                              </div>
                            </div>
                          </div>
                        </div>
                  <div class="form-group">
                    <div class="form-row">
                      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="form-label-group">
                          <b>Tipos de violencia</b>
                        </div>
                      </div>
                    </div>
                  </div>
                <div class="form-group">
                  <div class="form-row">
                    <div class="col-xs-12 col-sm-6 col-md-8 col-lg-3">
                      <div class="form-label-group">
                        <input type="number" id="r_v_fisica" name="r_v_fisica" class="form-control" placeholder="Violencia física" value= "<?php if (isset($row['r_v_fisica'])) echo $row['r_v_fisica']; ?>" required="required" autofocus="autofocus" min="1" max="2" onkeyup="this.value=Numeros5(this.value)">
                        <label for="r_v_fisica"><small><b>Violencia física(*)</b></small></label>
                      </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-8 col-lg-3">
                      <div class="form-label-group">
                        <input type="number" id="r_v_psicologica" name="r_v_psicologica" class="form-control" placeholder="Violencia verbal/psicologica/emocional" value= "<?php if (isset($row['r_v_psicologica'])) echo $row['r_v_psicologica']; ?>" required="required" min="1" max="2" onkeyup="this.value=Numeros5(this.value)">
                        <label for="r_v_psicologica"><small><b>Violencia verbal/psicologica/emocional(*)</b></small></label>
                      </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-8 col-lg-3">
                        <div class="form-label-group">
                          <input type="number" id="r_v_sexual" name="r_v_sexual" class="form-control" placeholder="Violencia sexual/reproductiva" required="required" value= "<?php if (isset($row['r_v_sexual'])) echo $row['r_v_sexual']; ?>" autofocus="autofocus" min="1" max="2" onkeyup="this.value=Numeros5(this.value)">
                          <label for="r_v_sexual"><small><b>Violencia sexual/reproductiva(*)</b></small></label>
                        </div>
                      </div>
                      </div>
                  </div>
               <div class="form-group">
                  <div class="form-row">
                    <div class="col-xs-12 col-sm-6 col-md-8 col-lg-3">
                        <div class="form-label-group">
                          <input type="number" id="r_v_economica" name="r_v_economica" class="form-control" placeholder="Violencia económica/patrimonial" value= "<?php if (isset($row['r_v_economica'])) echo $row['r_v_economica']; ?>" required="required" autofocus="autofocus" min="1" max="2" onkeyup="this.value=Numeros5(this.value)">
                          <label for="r_v_economica"><small><b>Violencia económica/patrimonial(*)</b></small></label>
                        </div>
                      </div>
                    <div class="col-xs-12 col-sm-6 col-md-8 col-lg-3">
                      <div class="form-label-group">
                        <input type="number" id="r_v_parsocial" name="r_v_parsocial" class="form-control" placeholder="Restricción participación social" required="required" value= "<?php if (isset($row['r_v_parsocial'])) echo $row['r_v_parsocial']; ?>" min="1" max="2" onkeyup="this.value=Numeros5(this.value)">
                        <label for="r_v_parsocial"><small><b>Restricción participación social(*)</b></small></label>
                      </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-8 col-lg-3">
                      <div class="form-label-group">
                        <input type="number" id="r_v_simbolica" name="r_v_simbolica" class="form-control" placeholder="Violencia simbólica" value= "<?php if (isset($row['r_v_simbolica'])) echo $row['r_v_simbolica']; ?>" min="1" max="2" onkeyup="this.value=Numeros5(this.value)" required="required">
                        <label for="r_v_simbolica"><small><b>Violencia simbólica(*)</b></small></label>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                    <div class="form-row">
                      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="form-label-group">
                          <br /><b>Consecuencias de la violencia</b><hr>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="form-row">
                      <div class="col-xs-12 col-sm-6 col-md-8 col-lg-3">
                        <div class="form-label-group">
                          <input type="number" id="r_co_obstaculo" name="r_co_obstaculo" class="form-control" placeholder="Impedimento/obstaculación del contacto con los hijos" value= "<?php if (isset($row['r_co_obstaculo'])) echo $row['r_co_obstaculo']; ?>" autofocus="autofocus" min="1" max="2" onkeyup="this.value=Numeros5(this.value)">
                          <label for="r_co_obstaculo"><small>Impedimento del contacto con los hijos</small></label>
                        </div>
                      </div>
                        <div class="col-xs-12 col-sm-6 col-md-8 col-lg-3">
                          <div class="form-label-group">
                            <input type="number" id="r_co_econo" name="r_co_econo" class="form-control" placeholder="Limitación de recursos económicos" value= "<?php if (isset($row['r_co_econo'])) echo $row['r_co_econo']; ?>" autofocus="autofocus" min="1" max="2" onkeyup="this.value=Numeros5(this.value)">
                            <label for="r_co_econo"><small>Limitación de recursos económicos</small></label>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                        <div class="form-row">
                          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <div class="form-label-group">
                              <br /><b>Datos de reincidencia</b><hr>
                            </div>
                          </div>
                        </div>
                      </div> 
                      <div class="form-group">
                  <div class="form-row">
                      <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                      <div class="form-label-group">
                        <input type="number" id="re_denuncia" name="re_denuncia" class="form-control" placeholder="¿Realizó/ara denuncia?" onfocusout="habilitar(this.value);" min="1" max="2" onkeyup="this.value=Numeros5(this.value)" value= "<?php if($row['re_denuncia']) echo $row['re_denuncia']; ?>">
                        <label for="re_denuncia"><small><b>¿Realizó/ara denuncia?(*)</b></small></label>
                      </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                      <div class="form-label-group">
                        <input type="text" id="re_donde" name="re_donde" class="form-control" placeholder="¿Donde?" value= "<?php if($row['re_donde']) echo $row['re_donde']; ?>" autofocus="autofocus">
                        <label for="re_donde"><small>¿Donde?</small></label>
                      </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                      <div class="form-label-group">
                        <input type="number" id="idfiscalia" name="idfiscalia" class="form-control" placeholder="Fiscalía Nº" value= "<?php if($row['idfiscalia']) echo $row['idfiscalia']; ?>">
                        <label for="idfiscalia"><small>Fiscalía Nº</small></label>
                      </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                      <div class="form-label-group">
                        <input type="text" id="re_porque" name="re_porque" class="form-control" placeholder="¿Por qué?" value= "<?php if($row['re_porque']) echo $row['re_porque']; ?>" autofocus="autofocus">
                        <label for="re_porque"><small>¿Por qué?</small></label>
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
                              <textarea class="form-control" rows="5" id="re_observacion" name="re_observacion" placeholder="Escriba alguna observación..." value=""><?php if($row['re_observacion']) echo $row['re_observacion']; ?></textarea> 
                              <label for="re_observacion"><small></small></label>  
                            </div>
                          </div> 
                        </div>
                      </div> 
                      <br />
                  <div class="form-group">
                    <div class="form-row">
                      <div class="col-xs-3 col-sm-3 col-md-6 col-lg-3"></div>
                      <div class="col-xs-2 col-sm-3 col-md-8 col-lg-2">
                        <a class="btn btn-primary btn-block" href="<?php echo URL; ?>reincidencia/ver_reincidencia/<?php echo $_GET['idficha'];?>/">Volver</a>
                      </div>  
                      <div class="col-xs-2 col-sm-1 col-md-6 col-lg-2"></div>                                      
                      <div class="col-xs-2 col-sm-3 col-md-8 col-lg-2">
                          
                         <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#seguimiento41ModalGuardar">Actualizar datos</button>
        
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
        <h5 class="modal-title" id="exampleModalLongTitle">Actualizar datos</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>¿Desea guardar los cambios de la ficha de reincidencia?</p>
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

<script type="text/javascript" src="http://localhost/rucvm1/Views1/template/vendor/funciones.js"></script>

<script type="text/javascript">
  //validar que la fecha de seguimiento sea mayor a la fecha de la ficha
  function validarFecha(value){
        var re_fecha = value;
        var fec_consulta = document.getElementById("fec_consulta").value;
        if (re_fecha < fec_consulta) {
          alert('La fecha de reincidencia debe ser mayor a la fecha de consulta: '+fec_consulta);
          document.getElementById("re_fecha").value='';
        }       
      }

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

    //Presencia de menores
      function Numeros3(string){//Solo numeros
        var out = '';
        var filtro = '0129';//Caracteres validos
      
        //Recorrer el texto y verificar si el caracter se encuentra en la lista de validos 
        if(string==0 || string==1 || string==2 || string==9){
           if (filtro.indexOf(string.charAt(i)) != -1) 
                 //Se añaden a la salida los caracteres validos
           out += string.charAt(i);
        }
      
        //Retornar valor filtrado
        return out;
    }

    //Momento de la agresion
    function Numeros4(string){//Solo numeros
        var out = '';
        var filtro = '12345';//Caracteres validos
      
        //Recorrer el texto y verificar si el caracter se encuentra en la lista de validos 
        if(string==1 || string==2 || string==3 || string==4 || string==5){
           if (filtro.indexOf(string.charAt(i)) != -1) 
                 //Se añaden a la salida los caracteres validos
           out += string.charAt(i);
        }
      
        //Retornar valor filtrado
        return out;
    }

    //siyno
    function Numeros5(string){//Solo numeros
        var out = '';
        var filtro = '12';//Caracteres validos
      
        //Recorrer el texto y verificar si el caracter se encuentra en la lista de validos 
        if(string==1 || string==2){
           if (filtro.indexOf(string.charAt(i)) != -1) 
                 //Se añaden a la salida los caracteres validos
           out += string.charAt(i);
        }
  }

  //Cobertura de salud
    function Numeros6(string){//Solo numeros
        var out = '';
        var filtro = '123';//Caracteres validos
      
        //Recorrer el texto y verificar si el caracter se encuentra en la lista de validos 
        if(string==1 || string==2 || string==3){
           if (filtro.indexOf(string.charAt(i)) != -1) 
                 //Se añaden a la salida los caracteres validos
           out += string.charAt(i);
        }
      
        //Retornar valor filtrado
        return out;
    }

    //Tenencia de vivienda
    function Numeros7(string){//Solo numeros
        var out = '';
        var filtro = '1234567';//Caracteres validos
      
        //Recorrer el texto y verificar si el caracter se encuentra en la lista de validos 
        if(string==1 || string==2 || string==3 || string==4 || string==5 || string==6 || string==7){
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