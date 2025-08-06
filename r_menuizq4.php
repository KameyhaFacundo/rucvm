<div id="wrapper">
  <style type="text/css">
      ul.sidebar{
        background-color: #b34343c2;
      }
    </style>
      <!-- Sidebar -->
      <ul class="sidebar navbar-nav">
        <?php if($_SESSION['idinstitucion'] != 13){ ?>
        <li class="nav-item">
          <a class="nav-link" id="op36"  href="<?php echo URL; ?>porcantidades/por_cantidades">
            <i></i>
            <span>Totales por año</span></a>
        </li>
        <?php if($_SESSION['idinstitucion'] == 12){ ?>
        <li class="nav-item">
          <a class="nav-link" id="op52"  href="<?php echo URL; ?>consultarucvm/consulta_indec">
            <i></i>
            <span>Consulta RUCVM - INDEC</span></a>
        </li>
        <?php } ?>
        <li class="nav-item">
          <a class="nav-link" id="op37" href="<?php echo URL; ?>poraccesibilidad/por_accesibilidad">
            <i></i>
            <span>Accesibilidad al servicio</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="op89" href="<?php echo URL; ?>poraccesibilidad/denuncia">
            <i></i>
            <span>Denuncia realizada</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="op90" href="<?php echo URL; ?>poraccesibilidad/medidas">
            <i></i>
            <span>Medidas solicitadas</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="op38" href="<?php echo URL; ?>edadconsultante/edad_consultante">
            <i></i>
            <span>Edad consultante</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="op39" href="<?php echo URL; ?>educonsultante/edu_consultante">
            <i></i>
            <span>Educación consultante</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="op40" href="<?php echo URL; ?>edadeducacion/edad_educacion">
            <i></i>
            <span>Edad - Educación</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="op42" href="<?php echo URL; ?>cobsalud/cobertura_consultante">
            <i></i>
            <span>Cobertura consultante</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="op57" href="<?php echo URL; ?>tipovivienda/vivienda_consultante">
            <i></i>
            <span>Vivienda consultante</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="op43" href="<?php echo URL; ?>ocuconsultante/ocu_consultante">
            <i></i>
            <span>Ocupación consultante</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="op58" href="<?php echo URL; ?>ocuconsultante/remunerada_consultante">
            <i></i>
            <span>Oc. remunerada consultante</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="op59" href="<?php echo URL; ?>ocuconsultante/auh_consultante">
            <i></i>
            <span>AUH consultante</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="op44" href="<?php echo URL; ?>agrvinculo/agr_vinculo">
            <i></i>
            <span>Vínculo con el agresor</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="op45" href="<?php echo URL; ?>edadvinculo/edad_vinculo">
            <i></i>
            <span>Edad - Vínculo</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="op46" href="<?php echo URL; ?>agrconvivencia/agr_convivencia">
            <i></i>
            <span>Convivencia con el agresor</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="op47" href="<?php echo URL; ?>vinconvivencia/vin_convivencia">
            <i></i>
            <span>Vínculo - Convivencia</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="op48" href="<?php echo URL; ?>eduagresor/edu_agresor">
            <i></i>
            <span>Educación agresor</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="op73" href="<?php echo URL; ?>redsocialcomunitaria/rs_concurrir">
            <i></i>
            <span>Red social y comunitaria: Parientes a concurrir</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="op74" href="<?php echo URL; ?>redsocialcomunitaria/rs_vinculos">
            <i></i>
            <span>Red social y comunitaria: Amigos, vecinos, compañeros</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="op75" href="<?php echo URL; ?>redsocialcomunitaria/rs_institucion">
            <i></i>
            <span>Red social y comunitaria: Participa en instituciones</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="op85" href="<?php echo URL; ?>consecuenciasviolencia/cv_problemas">
            <i></i>
            <span>Consec. violencia: Problemas laborales</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="op86" href="<?php echo URL; ?>consecuenciasviolencia/cv_limitacion">
            <i></i>
            <span>Consec. violencia: Limitación para buscar empleo</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="op87" href="<?php echo URL; ?>consecuenciasviolencia/cv_empleo">
            <i></i>
            <span>Consec. violencia: Pérdida empleo</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="op88" href="<?php echo URL; ?>consecuenciasviolencia/cv_estudio">
            <i></i>
            <span>Consec. violencia: Dificultad estudio</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="op60" href="<?php echo URL; ?>hechosasociados/ha_ev_embarazo">
            <i></i>
            <span>H. asoc. a ep. violentos: Embarazo/Nac. hijos</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="op61" href="<?php echo URL; ?>hechosasociados/ha_ev_celos">
            <i></i>
            <span>H. asoc. a ep. violentos: Celos</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="op62" href="<?php echo URL; ?>hechosasociados/ha_ev_laborales">
            <i></i>
            <span>H. asoc. a ep. violentos: Problemas laborales</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="op63" href="<?php echo URL; ?>hechosasociados/ha_ev_alcohol">
            <i></i>
            <span>H. asoc. a ep. violentos: Alcohol/Sustancias psicoactivas</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="op64" href="<?php echo URL; ?>hechosasociados/ha_ev_autonomia">
            <i></i>
            <span>H. asoc. a ep. violentos: Autonomía consultante</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="op65" href="<?php echo URL; ?>hechosasociados/ha_ev_impredecible">
            <i></i>
            <span>H. asoc. a ep. violentos: Impredecible/confuso</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="op61" href="<?php echo URL; ?>hechosasociados/ha_ev_separacion">
            <i></i>
            <span>H. asoc. a ep. violentos: Intención de separarse</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="op62" href="<?php echo URL; ?>indicadoresriesgo/ind_lesion">
            <i></i>
            <span>Indicadores riesgo: Lesión física</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="op63" href="<?php echo URL; ?>indicadoresriesgo/ind_intervencion">
            <i></i>
            <span>Indicadores riesgo: Intervención médica</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="op64" href="<?php echo URL; ?>indicadoresriesgo/ind_amenaza">
            <i></i>
            <span>Indicadores riesgo: Amenaza muerte</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="op65" href="<?php echo URL; ?>indicadoresriesgo/ind_armas">
            <i></i>
            <span>Indicadores riesgo: Armas blancas/fuego</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="op66" href="<?php echo URL; ?>indicadoresriesgo/ind_aborto">
            <i></i>
            <span>Indicadores riesgo: Aborto</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="op67" href="<?php echo URL; ?>indicadoresriesgo/ind_ideacion">
            <i></i>
            <span>Indicadores riesgo: Ideación suicida</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="op68" href="<?php echo URL; ?>indicadoresriesgo/ind_suicidio">
            <i></i>
            <span>Indicadores riesgo: Intento suicidio</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="op69" href="<?php echo URL; ?>indicadoresriesgo/ind_violacion">
            <i></i>
            <span>Indicadores riesgo: Rel. sex. forzosas</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="op70" href="<?php echo URL; ?>indicadoresriesgo/ind_acoso">
            <i></i>
            <span>Indicadores riesgo: Acoso</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="op71" href="<?php echo URL; ?>indicadoresriesgo/ind_antecedentes">
            <i></i>
            <span>Indicadores riesgo: Ant. penales</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="op72" href="<?php echo URL; ?>indicadoresriesgo/ind_sustancias">
            <i></i>
            <span>Indicadores riesgo: Consumo sust.</span></a>
        </li> 
        <li class="nav-item">
          <a class="nav-link" id="op76" href="<?php echo URL; ?>desencadenantesconsulta/des_hijos">
            <i></i>
            <span>Desenc. consulta: Hijos grandes/indep.</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="op77" href="<?php echo URL; ?>desencadenantesconsulta/des_golpes">
            <i></i>
            <span>Desenc. consulta: Golpes a los hijos</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="op78" href="<?php echo URL; ?>desencadenantesconsulta/des_conocimiento">
            <i></i>
            <span>Desenc. consulta: Conoc. del problema en otros</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="op79" href="<?php echo URL; ?>desencadenantesconsulta/des_infidelidad">
            <i></i>
            <span>Desenc. consulta: Infidelidad</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="op80" href="<?php echo URL; ?>desencadenantesconsulta/des_solicitud">
            <i></i>
            <span>Desenc. consulta: Solicitud de un hijo/a</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="op81" href="<?php echo URL; ?>desencadenantesconsulta/des_limite">
            <i></i>
            <span>Desenc. consulta: Situación límite</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="op82" href="<?php echo URL; ?>desencadenantesconsulta/des_miedo">
            <i></i>
            <span>Desenc. consulta: Tuvo miedo</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="op83" href="<?php echo URL; ?>desencadenantesconsulta/des_legal">
            <i></i>
            <span>Desenc. consulta: Razones legales/jurídicas</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="op84" href="<?php echo URL; ?>desencadenantesconsulta/des_derivacion">
            <i></i>
            <span>Desenc. consulta: Derivación</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="op49" href="<?php echo URL; ?>tipoviolencia/tipo_violencia">
            <i></i>
            <span>Tipos de violencia</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="op50" href="<?php echo URL; ?>canviolencias/can_violencia">
            <i></i>
            <span>Cantidad de tipos de violencia</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="op51" href="<?php echo URL; ?>comviolencias/com_violencia">
            <i></i>
            <span>Combinación de tipos de violencia</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="op52" href="<?php echo URL; ?>premenores/pre_menores">
            <i></i>
            <span>Presencia de menores</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="op92" href="<?php echo URL; ?>poraccesibilidad/de_externa">
            <i></i>
            <span>Derivación externa</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="op93" href="<?php echo URL; ?>poraccesibilidad/de_interna">
            <i></i>
            <span>Derivación interna</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="op91" href="<?php echo URL; ?>medidasjudiciales/medidas">
            <i></i>
            <span>Medidas judiciales</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="op92" href="<?php echo URL; ?>persona/edad_departamento">
            <i></i>
            <span>Edad - Departamento</span></a>
        </li>
      <?php }else{?>
        <li class="nav-item">
          <a class="nav-link" id="op53"  href="<?php echo URL; ?>porcantidades/cautelares">
            <i></i>
            <span>Medidas cautelares por año</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="op54"  href="<?php echo URL; ?>tipomedida/medidasportipo">
            <i></i>
            <span>Medidas cautelares por tipo</span></a>
        </li>
      <?php }
      if($_SESSION['idinstitucion'] == 12 || $_SESSION['permiso']==5){ ?>
        <li class="nav-item">
          <a class="nav-link" id="op55"  href="<?php echo URL; ?>porcantidades/cautelares">
            <i></i>
            <span>Medidas cautelares por año</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="op56"  href="<?php echo URL; ?>tipomedida/medidasportipo">
            <i></i>
            <span>Medidas cautelares por tipo</span></a>
        </li>
      <?php }?>
        </ul>     
