<div id="wrapper" style="background-color: #e9e2e8">
    <style type="text/css">
      ul.sidebar{
        background-color: #b34343c2;
      }
    </style>
      <!-- Sidebar -->
      <ul class="sidebar navbar-nav">
    <?php if($_SESSION['idusuario'] != 20 ){ ?>
        <?php if($_SESSION['idinstitucion']!=13 && $_SESSION['idinstitucion']!=16 && $_SESSION['permiso'] != 4 && $_SESSION['permiso'] != 5){ ?>
        <li class="nav-item">
          
          <a class="nav-link" href="<?php echo URL; ?>persona/agregar">
            <i class="fas fa-folder-open"></i>
            <span>Nueva ficha</span></a>
        </li>
        <?php }else{ echo ' ';} ?>
        <?php if($_SESSION['idinstitucion']==13 || $_SESSION['idinstitucion'] == 12 && $_SESSION['permiso'] != 4 && $_SESSION['permiso'] != 5){ ?>
        <?php if($_SESSION['permiso'] != 2){ ?>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo URL; ?>cautelar/agregar">
            <!--<img  width="50" height="25" style="color:white" src="<?php echo URL; ?>Views1/template/colorlib/images/book-medical-solid.svg">--><i class="fas fa-balance-scale"></i>
            <span>Nueva medida</span></a>
        </li>
        <?php } ?>
        <li class="nav-item">
          
          <a class="nav-link" href="<?php echo URL; ?>cautelar/vencidas">
            <!--<img  width="50" height="25" style="color:white" src="<?php echo URL; ?>Views1/template/colorlib/images/book-dead-solid.svg">--><i class="fas fa-hourglass-end"></i>
            <span>Medidas vencidas</span></a>
        </li>
        <?php }else{ echo ' ';}
         if($_SESSION['idinstitucion']==16 || $_SESSION['idinstitucion'] == 12 && $_SESSION['permiso'] != 4 && $_SESSION['permiso'] != 5){ 
          if($_SESSION['permiso'] != 2){ ?>
        <li class="nav-item">
          
          <a class="nav-link" href="<?php echo URL; ?>sumario/agregar">
            <i class="fas fa-balance-scale"></i>
            <span>Nuevo sumario</span></a>
        </li>
        <?php }} ?>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa fa-search"></i>
            <span>Consultas</span></a>
            <div class="dropdown-menu" aria-labelledby="pagesDropdown">
            <a class="dropdown-item" href="<?php echo URL; ?>pordni/por_dni_consultante"><small>Por DNI consultante</small></a>
            <?php if($_SESSION['idinstitucion'] == 4 || $_SESSION['idinstitucion'] == 12 || $_SESSION['idinstitucion'] == 8){ ?>
              <a class="dropdown-item" href="<?php echo URL; ?>pornombre/por_nombre_consultante"><small>Por nombre consultante</small></a>
            <?php } ?>
             <?php if($_SESSION['idinstitucion']!=13 && $_SESSION['idinstitucion']!=16){ ?>
            <a class="dropdown-item" href="<?php echo URL; ?>porriesgo/por_riesgo"><small>Por riesgo</small></a>
            <?php }else{ echo ' ';} ?>
            <?php if($_SESSION['permiso']==1 && $_SESSION['idinstitucion'] != 13 && $_SESSION['idinstitucion']!=16){ ?>
            <a class="dropdown-item" href="<?php echo URL; ?>profesional/profesional"><small>Fichas por profesional</small></a>
            <?php }else{ echo ' ';} ?>
            </div>
          </li>
          <?php if($_SESSION['permiso']!=3){ ?>

          <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="far fa-chart-bar"></i>
            <span>Informes</span></a>
            <div class="dropdown-menu" aria-labelledby="pagesDropdown">
              <?php if($_SESSION['idinstitucion']!=13 && $_SESSION['idinstitucion']!=16){ ?>
              <a class="dropdown-item" href="<?php echo URL; ?>porcantidades/por_cantidades"><small>Totales por año</small></a>
              <?php if($_SESSION['idinstitucion']==12){ ?>
              <a class="dropdown-item" href="<?php echo URL; ?>consultarucvm/consulta_indec"><small>Consulta RUCVM - INDEC</small></a>
              <?php } ?>
              <a class="dropdown-item" href="<?php echo URL; ?>poraccesibilidad/por_accesibilidad"><small>Accesibilidad al servicio</small></a>
              <a class="dropdown-item" href="<?php echo URL; ?>poraccesibilidad/denuncia"><small>Denuncia realizada</small></a>
              <a class="dropdown-item" href="<?php echo URL; ?>poraccesibilidad/medidas"><small>Medidas solicitadas</small></a>
              <a class="dropdown-item" href="<?php echo URL; ?>edadconsultante/edad_consultante"><small>Edad consultante</small></a>
              <a class="dropdown-item" href="<?php echo URL; ?>educonsultante/edu_consultante"><small>Educación consultante</small></a>
              <a class="dropdown-item" href="<?php echo URL; ?>edadeducacion/edad_educacion"><small>Edad - Educacion</small></a>
              <a class="dropdown-item" href="<?php echo URL; ?>cobsalud/cobertura_consultante"><small>Cobertura consultante</small></a>
              <a class="dropdown-item" href="<?php echo URL; ?>tipovivienda/vivienda_consultante"><small>Vivienda consultante</small></a>
              <a class="dropdown-item" href="<?php echo URL; ?>ocuconsultante/ocu_consultante"><small>Ocupación consultante</small></a>
              <a class="dropdown-item" href="<?php echo URL; ?>ocuconsultante/remunerada_consultante"><small>Oc. remunerada consultante</small></a>
              <a class="dropdown-item" href="<?php echo URL; ?>ocuconsultante/auh_consultante"><small>AUH consultante</small></a>
              <a class="dropdown-item" href="<?php echo URL; ?>agrvinculo/agr_vinculo"><small>Vínculo con el agresor</small></a>
              <a class="dropdown-item" href="<?php echo URL; ?>edadvinculo/edad_vinculo"><small>Edad - Vínculo</small></a>
              <a class="dropdown-item" href="<?php echo URL; ?>agrconvivencia/agr_convivencia"><small>Convivencia</small></a>
              <a class="dropdown-item" href="<?php echo URL; ?>vinconvivencia/vin_convivencia"><small>Vínculo - Convivencia</small></a>
              <a class="dropdown-item" href="<?php echo URL; ?>eduagresor/edu_agresor"><small>Educación agresor</small></a>
              <a class="dropdown-item" href="<?php echo URL; ?>redsocialcomunitaria/rs_concurrir"><small>Red social y com.: Parientes</small></a>
              <a class="dropdown-item" href="<?php echo URL; ?>redsocialcomunitaria/rs_vinculos"><small>Red social y com.: Amigos</small></a>
              <a class="dropdown-item" href="<?php echo URL; ?>redsocialcomunitaria/rs_institucion"><small>Red social y com.: Institución</small></a>
              <a class="dropdown-item" href="<?php echo URL; ?>consecuenciasviolencia/cv_problemas"><small>Consecuencias: Prob. labor.</small></a>
              <a class="dropdown-item" href="<?php echo URL; ?>consecuenciasviolencia/cv_limitacion"><small>Consecuencias: Busq. empleo</small></a>
              <a class="dropdown-item" href="<?php echo URL; ?>consecuenciasviolencia/cv_empleo"><small>Consecuencias: Perd. empleo</small></a>
              <a class="dropdown-item" href="<?php echo URL; ?>consecuenciasviolencia/cv_estudio"><small>Consecuencias: Dific. estudio</small></a>
              <a class="dropdown-item" href="<?php echo URL; ?>hechosasociados/ha_ev_embarazo"><small>H. A. E. V.: Embarazo</small></a>
              <a class="dropdown-item" href="<?php echo URL; ?>hechosasociados/ha_ev_celos"><small>H. A. E. V.: Celos</small></a>
              <a class="dropdown-item" href="<?php echo URL; ?>hechosasociados/ha_ev_laborales"><small>H. A. E. V.: Prob. laborales</small></a>
              <a class="dropdown-item" href="<?php echo URL; ?>hechosasociados/ha_ev_alcohol"><small>H. A. E. V.: Alcohol/Sustancias</small></a>
              <a class="dropdown-item" href="<?php echo URL; ?>hechosasociados/ha_ev_autonomia"><small>H. A. E. V.: Autonomía consul.</small></a>
              <a class="dropdown-item" href="<?php echo URL; ?>hechosasociados/ha_ev_impredecible"><small>H. A. E. V.: Impredecible/Conf.</small></a>
              <a class="dropdown-item" href="<?php echo URL; ?>hechosasociados/ha_ev_separacion"><small>H. A. E. V.: Inten. de separarse</small></a>
              <a class="dropdown-item" href="<?php echo URL; ?>indicadoresriesgo/ind_lesion"><small>Ind. Riesgo: Lesión física</small></a>
              <a class="dropdown-item" href="<?php echo URL; ?>indicadoresriesgo/ind_intervencion"><small>Ind. Riesgo: Interv. médica</small></a>
              <a class="dropdown-item" href="<?php echo URL; ?>indicadoresriesgo/ind_amenaza"><small>Ind. Riesgo: Amenaza muerte</small></a>
              <a class="dropdown-item" href="<?php echo URL; ?>indicadoresriesgo/ind_armas"><small>Ind. Riesgo: Armas</small></a>
              <a class="dropdown-item" href="<?php echo URL; ?>indicadoresriesgo/ind_aborto"><small>Ind. Riesgo: Aborto</small></a>
              <a class="dropdown-item" href="<?php echo URL; ?>indicadoresriesgo/ind_ideacion"><small>Ind. Riesgo: Ideación suicida</small></a>
              <a class="dropdown-item" href="<?php echo URL; ?>indicadoresriesgo/ind_suicidio"><small>Ind. Riesgo: Intento suicidio</small></a>
              <a class="dropdown-item" href="<?php echo URL; ?>indicadoresriesgo/ind_violacion"><small>Ind. Riesgo: Rel. sex. forzosas</small></a>
              <a class="dropdown-item" href="<?php echo URL; ?>indicadoresriesgo/ind_acoso"><small>Ind. Riesgo: Acoso</small></a>
              <a class="dropdown-item" href="<?php echo URL; ?>indicadoresriesgo/ind_antecedentes"><small>Ind. Riesgo: Ant. penales</small></a>
              <a class="dropdown-item" href="<?php echo URL; ?>indicadoresriesgo/ind_sustancias"><small>Ind. Riesgo: Consumo sust.</small></a>
              <a class="dropdown-item" href="<?php echo URL; ?>desencadenantesconsulta/des_hijos"><small>Desc. consulta: Hijos grandes</small></a>
              <a class="dropdown-item" href="<?php echo URL; ?>desencadenantesconsulta/des_golpes"><small>Desc. consulta: Golpes hijos</small></a>
              <a class="dropdown-item" href="<?php echo URL; ?>desencadenantesconsulta/des_conocimiento"><small>Desc. consulta: Conoc. otros</small></a>
              <a class="dropdown-item" href="<?php echo URL; ?>desencadenantesconsulta/des_infidelidad"><small>Desc. consulta: Infidelidad</small></a>
              <a class="dropdown-item" href="<?php echo URL; ?>desencadenantesconsulta/des_solicitud"><small>Desc. consulta: Solic. de hijo</small></a>
              <a class="dropdown-item" href="<?php echo URL; ?>desencadenantesconsulta/des_limite"><small>Desc. consulta: Situac. límite</small></a>
              <a class="dropdown-item" href="<?php echo URL; ?>desencadenantesconsulta/des_miedo"><small>Desc. consulta: Tuvo miedo</small></a>
              <a class="dropdown-item" href="<?php echo URL; ?>desencadenantesconsulta/des_legal"><small>Desc. consulta: Razon. legales</small></a>
              <a class="dropdown-item" href="<?php echo URL; ?>desencadenantesconsulta/des_derivacion"><small>Desc. consulta: Derivación</small></a>
              <a class="dropdown-item" href="<?php echo URL; ?>tipoviolencia/tipo_violencia"><small>Tipos de violencia</small></a>
              <a class="dropdown-item" href="<?php echo URL; ?>canviolencias/can_violencia"><small>Cantidad de violencias</small></a>
              <a class="dropdown-item" href="<?php echo URL; ?>comviolencias/com_violencia"><small>Combinación de violencias</small></a>
              <a class="dropdown-item" href="<?php echo URL; ?>premenores/pre_menores"><small>Presencia de menores</small></a>
              <a class="dropdown-item" href="<?php echo URL; ?>poraccesibilidad/de_externa"><small>Derivación externa</small></a>
              <a class="dropdown-item" href="<?php echo URL; ?>poraccesibilidad/de_interna"><small>Derivación interna</small></a>
              <a class="dropdown-item" href="<?php echo URL; ?>medidasjudiciales/medidas"><small>Medidas judiciales</small></a>
              <a class="dropdown-item" href="<?php echo URL; ?>persona/edad_departamento"><small>Edad - Departamento</small></a>
              <?php }else{ if($_SESSION['permiso'] == 2){?>
              <a class="dropdown-item" href="<?php echo URL; ?>porcantidades/cautelares"><small>Medidas cautelares por año</small></a>
               <a class="dropdown-item" href="<?php echo URL; ?>tipomedida/medidasportipo"><small>Medidas cautelares por tipo</small></a>
            <?php }}
            if($_SESSION['idinstitucion'] == 12 || $_SESSION['permiso'] == 5){ ?>
               <a class="dropdown-item" href="<?php echo URL; ?>porcantidades/cautelares"><small>Medidas cautelares por año</small></a>
               <a class="dropdown-item" href="<?php echo URL; ?>tipomedida/medidasportipo"><small>Medidas cautelares por tipo</small></a>
            <?php } ?>
            </div>
          </li>
          <?php }else{ echo ' ';} ?>
            <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="fas fa-info-circle"></i>
              <span>Acerca de</span></a>
              <div class="dropdown-menu" aria-labelledby="pagesDropdown">
              <a class="dropdown-item" href="<?php echo URL; ?>acercade/def_rucvm"><small>¿Que es RUCVM?</small></a>
              <a class="dropdown-item" href="<?php echo URL; ?>Views1/template/colorlib/docs/manual_usuario_rucvm.pdf" target="_blank"><small>Manual de Usuario</small></a>
              <?php if($_SESSION['idinstitucion'] != 13){ ?>
              <a class="dropdown-item" href="<?php echo URL; ?>Views1/template/colorlib/docs/diccionario_de_datos_rucvm.pdf" target="_blank"><small>Diccionario de datos</small></a>
              <?php } 
               if($_SESSION['idinstitucion'] == 8){ ?>
              <a class="dropdown-item" href="<?php echo URL; ?>Views1/template/colorlib/docs/Informe Técnico final 2017-2018 V.2.pdf" target="_blank"><small>Informe 2017-2018</small></a>
              <?php } ?>
              <a class="dropdown-item" href="<?php echo URL; ?>Views1/template/colorlib/docs/fichadecarga.pdf" target="_blank"><small>Ficha de Carga</small></a>
              <a class="dropdown-item" href="<?php echo URL; ?>acercade/contacto"><small>Contacto</small></a>
              </div>
            </li>
            <?php }else{ echo ' ';} ?>
             <?php if($_SESSION['idinstitucion'] == 12 || $_SESSION['idusuario'] == 20 || $_SESSION['idusuario'] == 6 || $_SESSION['idusuario'] == 7){ ?>
            <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="fa fa-database"></i>
              <span>Bases OVD</span></a>
              <div class="dropdown-menu" aria-labelledby="pagesDropdown">
              <a class="dropdown-item" href="<?php echo URL; ?>baseovd/agregar"><small>Agregar</small></a>
              <a class="dropdown-item" href="<?php echo URL; ?>baseovd/indexovd"><small>Ver Listado</small></a>
              <?php if($_SESSION['idinstitucion'] == 12){ ?>
              <a class="dropdown-item" href="<?php echo URL; ?>baseovd/mostrarfinalizadas"><small>Ver Listado Finalizadas</small></a>
              <?php }else{ echo ' ';} ?>
              </div>
            </li>
            <?php }else{ echo ' ';} ?>
            <?php if($_SESSION['idusuario'] == 12){ ?>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="fas fa-tools"></i>
                  <span>Administrador</span></a>
                <div class="dropdown-menu" aria-labelledby="pagesDropdown">
                  <a class="dropdown-item" href="<?php echo URL; ?>usuario/ver_usuarios"><small>Usuarios</small></a>
                  <a class="dropdown-item" href="<?php echo URL; ?>sumario/agregar"><small>Sumario</small></a>
                  <a class="dropdown-item" href="<?php echo URL; ?>profesional/ver_profesionales"><small>Profesionales</small></a>
                </div>
              </li>
            <?php } ?>
        </ul>