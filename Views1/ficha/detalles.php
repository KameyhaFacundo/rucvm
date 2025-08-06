<?php session_start(); ?>
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
    
<?php //echo dirname(dirname(__FILE__)).'/template/vendor/html2pdf/html2pdf.class.php'; ?>
  <div id="enviar" name="enviar"> 
      <?php include 'r_menuizq.php';?>
    <div id="content-wrapper" style="background-color: #e9e2e8">
      <div class="container-fluid">
        <div class="card col-xs-12 col-sm-12 col-md-12 col-lg-12">
          <div class="card-header">Ficha RUCVM</div>
            <div class="card-body">


                

    <?php 
    $c=0;
while ($row2 = pg_fetch_array($datos)){
    
    if($c==0){
?>
<table class="table table-hover" style="width:100%; background-color: #DAD2D9">
   <tr style="background-color: #b3434375">
    <th colspan="2">1. Alta consultante</th>
  </tr>
  <tr>
    <th>DNI consultante:</th>
    <td><?php echo  $row2['per_dni']; ?></td>
  </tr>
  <tr>
    <th>Apellido:</th>
    <td><?php echo  $row2['per_apellido']; ?></td>
  </tr>
    <tr>
    <th>Nombre:</th>
    <td><?php echo  $row2['per_nombre']; ?></td>
  </tr>
  <tr>
    <th>Sexo:</th>
    <td><?php echo  $row2['peridsexo']; ?></td>
  </tr>
    <tr>
    <th>Persona trans:</th>
    <td><?php echo $row2['peridgenero']; ?></td>
  </tr>
    <tr>
    <th>Estado civil:</th>
    <td><?php echo $row2['estcividestadocivil']; ?></td>
  </tr>
    <tr>
    <th>Fecha de nacimiento:</th>
    <td><?php echo date("d/m/Y", strtotime($row2['per_nacido'])); ?></td>
  </tr>
    <tr>
    <th>Celular:</th>
    <td><?php echo $row2['per_celular']; ?></td>
  </tr>
  <tr>
    <th>Discapacitada:</th>
    <td><?php echo $row2['fperdiscapacitada']; ?></td>
  </tr>
    <tr>
    <th>Domicilio:</th>
    <td><?php echo $row2['per_domicilio']; ?></td>
  </tr>
    <tr>
    <th>Departamento:</th>
    <td><?php echo $row2['periddepartamento']; ?></td>
  </tr>
  <tr>
    <th>Localidad:</th>
    <td><?php echo $row2['locidlocalidad']; ?></td>
  </tr>

</table>
<br/>                
<table class="table table-hover" style="width:100%; background-color: #DAD2D9">
   <tr style="background-color: #b3434375">
    <th colspan="2">2. Datos Consultante</th>
  </tr>
  <tr>
    <th>Fecha de Consulta:</th>
    <td><?php echo  date("d/m/Y", strtotime($row2['fec_consulta'])); ?></td>
  </tr>
  <tr>
    <th>Hora de Consulta:</th>
    <td><?php echo date("H:i", strtotime($row2['horaconsulta'])); ?></td>
  </tr>
    <tr>
    <th>Fecha de Agresión:</th>
    <td><?php echo date("d/m/Y", strtotime($row2['fec_agresion'])); ?></td>
  </tr>
  <tr>
    <th>Hora de Agresión:</th>
    <td><?php echo date("H:i", strtotime($row2['hora_agresion'])); ?></td>
  </tr>
    <tr>
    <th>Momento de agresión:</th>
    <td><?php echo $row2['fidmomento']; ?></td>
  </tr>
    <tr>
    <th>Presencia de menores:</th>
    <td><?php echo $row2['fp_menores']; ?></td>
  </tr>
    <tr>
    <th>Nombre del agresor:</th>
    <td><?php echo $row2['agresor']; ?></td>
  </tr>
    <tr>
    <th>Dispone de lugar:</th>
    <td><?php echo $row2['fdisponelugar']; ?></td>
  </tr>
    <tr>
    <th>Cobertura de salud:</th>
    <td><?php echo $row2['fidsalud']; ?></td>
  </tr>
    <tr>
    <th>Tenencia de vivienda:</th>
    <td><?php echo $row2['fidvivienda']; ?></td>
  </tr>
  <tr>
    <th>Profesional:</th>
    <td><?php echo $row2['pro_apellidonombre']; ?></td>
  </tr>

</table>
<br/>
<table class="table table-hover" style="width:100%; background-color: #DAD2D9">
   <tr style="background-color: #b3434375">
    <th colspan="2">3. Laboral - educación</th>
  </tr>
  <tr>
    <th>Condición laboral:</th>
    <td><?php echo $row2['f1idactividad']; ?></td>
  </tr>
  <tr>
    <th>Ocupación remunerada:</th>
    <td><?php echo $row2['f1idremunerada']; ?></td>
  </tr>
    <tr>
    <th>Dispone de ingresos propios:</th>
    <td><?php echo $row2['f1ingreso']; ?></td>
  </tr>
  <tr>
    <th>Cuenta con auh:</th>
    <td><?php echo $row2['f1auh']; ?></td>
  </tr>
    <tr>
    <th>¿Sabe leer o escribir?:</th>
    <td><?php echo $row2['f1leeono']; ?></td>
  </tr>
    <tr>
    <th>Nivel educativo consultante:</th>
    <td><?php echo $row2['f1edu_consultante']; ?></td>
  </tr>
    <tr>
    <th>Nivel educativo agresor:</th>
    <td><?php echo $row2['f1edu_agresor']; ?></td>
  </tr>
    <tr>
    <th>¿Cuenta con un programa social?:</th>
    <td><?php echo $row2['f1psocial']; ?></td>
  </tr>
    <tr>
    <th>Migrante:</th>
    <td><?php echo $row2['f1migrante']; ?></td>
  </tr>
    <tr>
    <th>Procedencia:</th>
    <td><?php echo $row2['fidprocedencia']; ?></td>
  </tr>
  <tr>
    <th>Tiempo de permanencia en años:</th>
    <td><?php echo $row2['permanencia']; ?></td>
  </tr>
</table>
<br/>
<table class="table table-hover" style="width:100%; background-color: #DAD2D9">
   <tr style="background-color: #b3434375">
    <th colspan="2">4. Red social y comunitaria</th>
  </tr>
  <tr>
    <th>Parientes a concurrir:</th>
    <td><?php echo $row2['f1rs_concurrir']; ?></td>
  </tr>
  <tr>
    <th>Amigos, vecinos, compañeros:</th>
    <td><?php echo $row2['f1rs_vinculos']; ?></td>
  </tr>
    <tr>
    <th>Participa en instituciones:</th>
    <td><?php echo $row2['f1rs_institucion']; ?></td>
  </tr>
</table>
<br/>
<table class="table table-hover" style="width:100%; background-color: #DAD2D9">
   <tr style="background-color: #b3434375">
    <th colspan="2">5. Consecuencias de la violencia</th>
  </tr>
  <tr>
    <th>Problemas laborales:</th>
    <td><?php echo $row2['f1cv_problemas']; ?></td>
  </tr>
  <tr>
    <th>Limitación para buscar empleo:</th>
    <td><?php echo $row2['f1cv_limitacion']; ?></td>
  </tr>
    <tr>
    <th>Perdió empleo por violencia:</th>
    <td><?php echo $row2['f1cv_perempleo']; ?></td>
  </tr>
      <tr>
    <th>Dificultad o pérdida de estudio:</th>
    <td><?php echo $row2['f1cv_perestudio']; ?></td>
  </tr>
</table>
<br/>
<table class="table table-hover" style="width:100%; background-color: #DAD2D9">
   <tr style="background-color: #b3434375">
    <th colspan="2">7. Evaluación de riesgo</th>
  </tr>
  <tr>
    <th>Cohabitación consultante:</th>
    <td><?php echo $row2['f3cohab']; ?></td>
  </tr>
  <tr>
    <th>Vínculos con el agresor:</th>
    <td><?php echo $row2['f3idvinculo']; ?></td>
  </tr>
    <tr>
    <th>Años de vínculos con el agresor:</th>
    <td><?php echo $row2['anviagresor']; ?></td>
  </tr>
      <tr>
    <th>Años de maltrato:</th>
    <td><?php echo $row2['anmaltrato']; ?></td>
  </tr>
  <tr>
    <th>Consultante embarazada:</th>
    <td><?php echo $row2['f3embarazada']; ?></td>
  </tr>
  <tr>
    <th>Evaluación de riesgo:</th>
    <td><?php echo $row2['f3idriesgo']; ?></td>
  </tr>
</table>
<br/>
<table class="table table-hover" style="width:100%; background-color: #DAD2D9">
   <tr style="background-color: #b3434375">
    <th colspan="2">8. Motivo/s de consulta</th>
  </tr>
  <tr>
    <th>Violencia física:</th>
    <td><?php echo $row2['f31v_fisica']; ?></td>
  </tr>
  <tr>
    <th>Violencia verbal/psicologica/emocional:</th>
    <td><?php echo $row2['f31v_psicologica']; ?></td>
  </tr>
    <tr>
    <th>Violencia sexual/reproductiva:</th>
    <td><?php echo $row2['f31v_sexual']; ?></td>
  </tr>
      <tr>
    <th>Violencia económica/patrimonial:</th>
    <td><?php echo $row2['f31v_economica']; ?></td>
  </tr>
  <tr>
    <th>Restricción de participación social:</th>
    <td><?php echo $row2['f31v_parsocial']; ?></td>
  </tr>
  <tr>
    <th>Violencia simbólica:</th>
    <td><?php echo $row2['f31v_simbolica']; ?></td>
  </tr>
</table>
<br/>
<table class="table table-hover" style="width:100%; background-color: #DAD2D9">
   <tr style="background-color: #b3434375">
    <th colspan="2">9. Consecuencias de violencia</th>
  </tr>
  <tr>
    <th>Impedimento del contacto con los hijos:</th>
    <td><?php echo $row2['f31co_obstaculo']; ?></td>
  </tr>
  <tr>
    <th>Limitación de recursos económicos:</th>
    <td><?php echo $row2['f31co_econo']; ?></td>
  </tr>
</table>
<br/>
<table class="table table-hover" style="width:100%; background-color: #DAD2D9">
   <tr style="background-color: #b3434375">
    <th colspan="2">10. Antecedente violencia consultante</th>
  </tr>
  <tr>
    <th>Física:</th>
    <td><?php echo $row2['f32anco_fisica']; ?></td>
  </tr>
  <tr>
    <th>Psicologica:</th>
    <td><?php echo $row2['f32anco_psico']; ?></td>
  </tr>
    <tr>
    <th>Abuso sexual:</th>
    <td><?php echo $row2['f32anco_absex']; ?></td>
  </tr>
      <tr>
    <th>Testigo de violencia:</th>
    <td><?php echo $row2['f32anco_tesvio']; ?></td>
  </tr>
  <tr>
    <th>Abandono:</th>
    <td><?php echo $row2['f32anco_aban']; ?></td>
  </tr>
  <tr>
    <th>Otro:</th>
    <td><?php echo $row2['f32anco_otro']; ?></td>
  </tr>
</table>
<br/>
<table class="table table-hover" style="width:100%; background-color: #DAD2D9">
   <tr style="background-color: #b3434375">
    <th colspan="2">11. Antecedente violencia agresor</th>
  </tr>
  <tr>
    <th>Física:</th>
    <td><?php echo $row2['f33anag_fisica']; ?></td>
  </tr>
  <tr>
    <th>Psicologica:</th>
    <td><?php echo $row2['f33anag_psico']; ?></td>
  </tr>
    <tr>
    <th>Abuso sexual:</th>
    <td><?php echo $row2['f33anag_absex']; ?></td>
  </tr>
      <tr>
    <th>Testigo de violencia:</th>
    <td><?php echo $row2['f33anag_tesvio']; ?></td>
  </tr>
  <tr>
    <th>Abandono:</th>
    <td><?php echo $row2['f33anag_aban']; ?></td>
  </tr>
  <tr>
    <th>Otro:</th>
    <td><?php echo $row2['anag_otro']; ?></td>
  </tr>
</table>
<br/>
<table class="table table-hover" style="width:100%; background-color: #DAD2D9">
   <tr style="background-color: #b3434375">
    <th colspan="2">12. Hechos asociados a episodios violentos</th>
  </tr>
  <tr>
    <th>Embarazo/nacimiento de hijos:</th>
    <td><?php echo $row2['f34he_embar']; ?></td>
  </tr>
  <tr>
    <th>Celos:</th>
    <td><?php echo $row2['f34he_celos']; ?></td>
  </tr>
    <tr>
    <th>Problemas laborales:</th>
    <td><?php echo $row2['f34he_plabor']; ?></td>
  </tr>
      <tr>
    <th>Alcohol/sustancias psicoactivas:</th>
    <td><?php echo $row2['f34he_alcohol']; ?></td>
  </tr>
      <th>Autonomía de la consultante:</th>
    <td><?php echo $row2['f34he_autoco']; ?></td>
  </tr>
  <tr>
      <tr>
    <th>Impredecible/confuso:</th>
    <td><?php echo $row2['f34he_impco']; ?></td>
  </tr>
  <tr>
    <th>Intención de separarse:</th>
    <td><?php echo $row2['f34he_separ']; ?></td>
  </tr>
  <tr>
    <th>Otro:</th>
    <td><?php echo $row2['he_otro']; ?></td>
  </tr>
</table>
<br/>
<table class="table table-hover" style="width:100%; background-color: #DAD2D9">
   <tr style="background-color: #b3434375">
    <th colspan="2">13. Indicadores de riesgo</th>
  </tr>
  <tr>
    <th>Signos de lesión física:</th>
    <td><?php echo $row2['f35ind_lesfis']; ?></td>
  </tr>
    <tr>
    <th>Intervención médica:</th>
    <td><?php echo $row2['f35ind_intmed']; ?></td>
  </tr>
      <tr>
    <th>Amenaza de muerte:</th>
    <td><?php echo $row2['f35ind_amuerte']; ?></td>
  </tr>
      <tr>
    <th>Tiene armas blancas/fuego:</th>
    <td><?php echo $row2['f35ind_armas']; ?></td>
  </tr>
      <tr>
    <th>Aborto provocado por agresor:</th>
    <td><?php echo $row2['f35ind_aborto']; ?></td>
  </tr>
      <tr>
    <th>Ideación suicida:</th>
    <td><?php echo $row2['f35ind_idsuic']; ?></td>
  </tr>
      <tr>
    <th>Intento de suicidio:</th>
    <td><?php echo $row2['f35ind_insuic']; ?></td>
  </tr>
      <tr>
    <th>Relaciones sexuales forzosas:</th>
    <td><?php echo $row2['f35ind_sexfor']; ?></td>
  </tr>
      <tr>
    <th>Acoso:</th>
    <td><?php echo $row2['f35ind_acoso']; ?></td>
  </tr>
        <tr>
    <th>Antecedentes penales:</th>
    <td><?php echo $row2['f35ind_antpen']; ?></td>
  </tr>
        <tr>
    <th>Consumo de sustancias:</th>
    <td><?php echo $row2['f35ind_sust']; ?></td>
  </tr>
</table>
<br/>
<table class="table table-hover" style="width:100%; background-color: #DAD2D9">
   <tr style="background-color: #b3434375">
    <th colspan="2">14. Estado de salud</th>
  </tr>
  <tr>
    <th>Transtorno de sueño:</th>
    <td><?php echo $row2['f36t_suenio']; ?></td>
  </tr>
    <tr>
    <th>Transtorno de alimentación:</th>
    <td><?php echo $row2['f36t_alimen']; ?></td>
  </tr>
    <tr>
    <th>Transtorno digestivo:</th>
    <td><?php echo $row2['f36t_digest']; ?></td>
  </tr>
    <tr>
    <th>Ingesta ansiolíticos/antidepresivos:</th>
    <td><?php echo $row2['f36t_antidep']; ?></td>
  </tr>
    <tr>
    <th>Consumo alcohol/drogas:</th>
    <td><?php echo $row2['f36t_aldrog']; ?></td>
  </tr>
    <tr>
    <th>ITS:</th>
    <td><?php echo $row2['f36t_its']; ?></td>
  </tr>
    <tr>
    <th>Otros trastornos de salud:</th>
    <td><?php echo $row2['t_otro']; ?></td>
  </tr>
</table>
<br/>
<table class="table table-hover" style="width:100%; background-color: #DAD2D9">
   <tr style="background-color: #b3434375">
    <th colspan="2">15. Descencadenantes de la consulta</th>
  </tr>
  <tr>
    <th>Hijos grandes/indepedientes:</th>
    <td><?php echo $row2['f37des_hijos']; ?></td>
  </tr>
  <tr>
    <th>Golpes a los hijos:</th>
    <td><?php echo $row2['f37des_golpe']; ?></td>
  </tr>
    <tr>
    <th>Conocimiento del problema en otros:</th>
    <td><?php echo $row2['f37des_conoc']; ?></td>
  </tr>
    <tr>
    <th>Infidelidad:</th>
    <td><?php echo $row2['f37des_infide']; ?></td>
  </tr>
    <tr>
    <th>Solicitud de un hijo/a:</th>
    <td><?php echo $row2['f37des_solic']; ?></td>
  </tr>
    <tr>
    <th>Se siente ante una situación límite:</th>
    <td><?php echo $row2['f37des_limite']; ?></td>
  </tr>
    <tr>
    <th>Tuvo miedo(más que el habitual):</th>
    <td><?php echo $row2['f37des_miedo']; ?></td>
  </tr>
    <tr>
    <th>Razones legales/jurídicas:</th>
    <td><?php echo $row2['f37des_legal']; ?></td>
  </tr>
    <tr>
    <th>Derivación:</th>
    <td><?php echo $row2['f37des_deriv']; ?></td>
  </tr>
    <tr>
    <th>Otro:</th>
    <td><?php echo $row2['des_otro']; ?></td>
  </tr>  
</table>
<br/>
<table class="table table-hover" style="width:100%; background-color: #DAD2D9">
  <tr style="background-color: #b3434375">
    <th colspan="2">16. Estrategias de intervención</th>
  </tr>
  <tr style="background-color: #b3434375">
    <th colspan="2">Antecedentes</th>
  </tr>
  <tr>
    <th>Penal reciente:</th>
    <td><?php echo $row2['f4recientepenal']; ?></td>
  </tr>
    <tr>
    <th>Penal previo:</th>
    <td><?php echo $row2['f4previapenal']; ?></td>
  </tr>
    <tr>
    <th>Civil reciente:</th>
    <td><?php echo $row2['f4recientecivil']; ?></td>
  </tr>
    <tr>
    <th>Civil previo:</th>
    <td><?php echo $row2['f4previacivil']; ?></td>
  </tr>
    <tr>
    <th>Intervención policial reciente:</th>
    <td><?php echo $row2['f4recientepoli']; ?></td>
  </tr>
    <tr>
    <th>Intervención policial previa:</th>
    <td><?php echo $row2['f4previapoli']; ?></td>
  </tr>
    <tr>
    <th>¿Hizo denuncia?:</th>
    <td><?php echo $row2['f4denuncia']; ?></td>
  </tr>
  <tr>
    <th>¿Pidió medidas?:</th>
    <td><?php echo $row2['f4p_medidas']; ?></td>
  </tr>
  <tr style="background-color: #b3434375">
    <th colspan="2">Accesibilidad</th>
  </tr>
    <tr>
    <th>Accesibilidad al servicio:</th>
    <td><?php echo $row2['f4idaccesibilidad']; ?></td>
  </tr>
      <tr>
    <th>Comisaría:</th>
    <td><?php echo $row2['com_nombre']; ?></td>
  </tr>
    <tr style="background-color: #b3434375">
    <th colspan="2">Derivación externa</th>
  </tr>
        <tr>
    <th>No informado:</th>
    <td><?php echo $row2['f4de_noinfo']; ?></td>
  </tr>
        <tr>
    <th>Oficina de empleo:</th>
    <td><?php echo $row2['f4de_ofemp']; ?></td>
  </tr>
        <tr>
    <th>Consulado o cancillería:</th>
    <td><?php echo $row2['f4de_consul']; ?></td>
  </tr>
        <tr>
    <th>Juzgados o defensorías:</th>
    <td><?php echo $row2['f4de_defen']; ?></td>
  </tr>
        <tr>
    <th>Programa social:</th>
    <td><?php echo $row2['f4de_psocial']; ?></td>
  </tr>
        <tr>
    <th>Área mujer:</th>
    <td><?php echo $row2['f4_amujer']; ?></td>
  </tr>
          <tr>
    <th>Policia o comisaría de la mujer:</th>
    <td><?php echo $row2['f4de_comujer']; ?></td>
  </tr>
          <tr>
    <th>Otra:</th>
    <td><?php echo $row2['de_otra']; ?></td>
  </tr>
      <tr style="background-color: #b3434375">
    <th colspan="2">Derivación interna</th>
  </tr>
        <tr>
    <th>No informado:</th>
    <td><?php echo $row2['f4di_noinfo']; ?></td>
  </tr>
        <tr>
    <th>Asistencia psicológica:</th>
    <td><?php echo $row2['f4di_apsico']; ?></td>
  </tr>
        <tr>
    <th>Patrocinio jurídico:</th>
    <td><?php echo $row2['f4di_pjuridico']; ?></td>
  </tr>
        <tr>
    <th>Refugio o casa de tránsito u hogar:</th>
    <td><?php echo $row2['f4di_refugio']; ?></td>
  </tr>
        <tr>
    <th>Grupos:</th>
    <td><?php echo $row2['f4di_grupos']; ?></td>
  </tr>
        <tr>
    <th>Asesoramiento legal:</th>
    <td><?php echo $row2['f4di_alegal']; ?></td>
  </tr>
          <tr>
    <th>Asistencia social:</th>
    <td><?php echo $row2['f4di_asocial']; ?></td>
  </tr>
          <tr>
    <th>Otra:</th>
    <td><?php echo $row2['di_otros']; ?></td>
  </tr>
</table>
<br/>
<table class="table table-hover" style="width:100%; background-color: #DAD2D9">
   <tr style="background-color: #b3434375">
    <th colspan="2">17. Medidas judiciales</th>
  </tr>
  <tr>
    <th>Prohibición de acercamiento:</th>
    <td><?php echo $row2['f41me_acerca']; ?></td>
  </tr>
  <tr>
    <th>Exclusión del hogar:</th>
    <td><?php echo $row2['f41me_exhog']; ?></td>
  </tr>
    <tr>
    <th>Retiro de pertenencias:</th>
    <td><?php echo $row2['f41me_perten']; ?></td>
  </tr>
    <tr>
    <th>Restitución de personas:</th>
    <td><?php echo $row2['f41me_resper']; ?></td>
  </tr>
    <tr>
    <th>Alimentos/tenencia provisoria:</th>
    <td><?php echo $row2['f41me_alimen']; ?></td>
  </tr>
    <tr>
    <th>Régimen de visitas:</th>
    <td><?php echo $row2['f41me_visitas']; ?></td>
  </tr>
    <tr>
    <th>Intervención psiquiátrica/adicciones:</th>
    <td><?php echo $row2['f41me_psico']; ?></td>
  </tr>
    <tr>
    <th>Secuestro/prohibición de armas:</th>
    <td><?php echo $row2['f41me_prohib']; ?></td>
  </tr>
    <tr>
    <th>Dispositivo Dual:</th>
    <td><?php echo $row2['f41me_dual']; ?></td>
  </tr>
    <tr>
    <th>Otra:</th>
    <td><?php echo $row2['me_otra']; ?></td>
  </tr>
</table>
<br/>
<table class="table table-hover" style="width:100%">
  <tr style="background-color: #b3434375">
    <th colspan="8">6. Grupo Familiar Conviviente</th>
  </tr>
    <tr style="background-color: #b3434375">
    <th>Apellidos</th>
    <th>Nombres</th>
    <th>Sexo</th>
    <th>Edad</th>
    <th>Meses</th>
    <th>Pariente</th>
    <th>Discapacitado</th>
    <th>Victima</th>
  </tr>
<?php }?>

  <tr style=" background-color: #DAD2D9">
    <td><?php echo $row2['f2_apellido']; ?></td>
    <td><?php echo $row2['f2_nombre']; ?></td>
    <td><?php echo $row2['f2idsexo']; ?></td>
    <td><?php echo $row2['f2_edad']; ?></td>
    <td><?php echo $row2['f2_mes']; ?></td>
    <td><?php echo $row2['f2par_descripcion']; ?></td>
    <td><?php echo $row2['f2discapacitado']; ?></td>
    <td><?php echo $row2['f2victimavio']; ?></td>
  </tr>
  <?php  
  $c++;
    }  ?>
</table>
<br/>
<br/>
<br/>

                          <div class="form-group">
                        <div class="form-row">
                          <div class="col-xs-3 col-sm-3 col-md-6 col-lg-3"></div>
                          <div class="col-xs-2 col-sm-3 col-md-8 col-lg-2">
                            <a class="btn btn-primary btn-block" href="<?php echo URL; ?>principal/buscar/">Volver</a>
                          </div>  
                          <div class="col-xs-2 col-sm-1 col-md-6 col-lg-2"></div>                                      
                          <div class="col-xs-2 col-sm-3 col-md-8 col-lg-2">
                              
                             <a class="btn btn-primary btn-block" target="_blank" href="<?php echo URL.'ficha/descargarpdf/'.$_SESSION['idfichaDetalles'];?>">
                                 <i class="far fa-file-pdf"></i>  Descargar</a>
                          </div>
                          <div class="col-xs-3 col-sm-4 col-md-6 col-lg-3"></div>                    
                        </div>
                      </div> 

              </div>
            </div>
          </div>
        </div>
      </div>
 



</body>
</html>
