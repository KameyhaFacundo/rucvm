<?php 
date_default_timezone_set('America/Argentina/Buenos_Aires');

$content = "<html>
<style>
th {
  font-weight: bold;
  background-color: #cccccc;
}
th, td {
  border-bottom: 1px solid #ddd;
    padding: 15px;
  text-align: left;
}
</style>


".
    $c=0;
while ($row2 = pg_fetch_array($datos)){
    
    if($c==0){
$content .= "
    <body>
<H3>Registro Único de Casos de Violencia contra las Mujeres (RUCVM)</H3>
<H4>Ficha de la Consultante</H4>
<H5>Fecha de creación del PDF: ".date('d/m/Y H:i')."</H5><BR/>    
<table >
   <tr>
    <th colspan='2'>1. Alta consultante</th>
  </tr>
  <tr>
    <th>DNI consultante:</th>
    <td>".  $row2['per_dni'] ." </td>
  </tr>
  <tr>
    <th>Apellido:</th>
    <td>". $row2['per_apellido']."</td>
  </tr>
    <tr>
    <th>Nombre:</th>
    <td>". $row2['per_nombre']."</td>
  </tr>
  <tr>
    <th>Sexo:</th>
    <td>". $row2['peridsexo']."</td>
  </tr>
    <tr>
    <th>Persona trans:</th>
    <td>". $row2['peridgenero'] ."</td>
  </tr>
    <tr>
    <th>Estado civil:</th>
    <td>". $row2['estcividestadocivil']. "</td>
  </tr>
    <tr>
    <th>Fecha de nacimiento:</th>
    <td>". date('d/m/Y', strtotime($row2['per_nacido'])). "</td>
  </tr>
    <tr>
    <th>Celular:</th>
    <td>". $row2['per_celular'] ."</td>
  </tr>
  <tr>
    <th>Discapacitada:</th>
    <td>". $row2['fperdiscapacitada'] ."</td>
  </tr>
    <tr>
    <th>Domicilio:</th>
    <td>". $row2['per_domicilio']."</td>
  </tr>
    <tr>
    <th>Departamento:</th>
    <td>". $row2['periddepartamento']."</td>
  </tr>
  <tr>
    <th>Localidad:</th>
    <td>". $row2['locidlocalidad'] ."</td>
  </tr>
</table>
<br/>       
<table >
   <tr >
    <th colspan='2'>2. Datos Consultante</th>
  </tr>
  <tr>
    <th>Fecha de Consulta:</th>
    <td>".  date('d/m/Y', strtotime($row2['fec_consulta']))."</td>
  </tr>
  <tr>
    <th>Hora de Consulta:</th>
    <td>". date('H:i', strtotime($row2['horaconsulta']))."</td>
  </tr>
    <tr>
    <th>Fecha de Agresión:</th>
    <td>". date('d/m/Y', strtotime($row2['fec_agresion']))."</td>
  </tr>
  <tr>
    <th>Hora de Agresión:</th>
    <td>". date('H:i', strtotime($row2['hora_agresion']))."</td>
  </tr>
    <tr>
    <th>Momento de agresión:</th>
    <td>". $row2['fidmomento']."</td>
  </tr>
    <tr>
    <th>Presencia de menores:</th>
    <td>". $row2['fp_menores']."</td>
  </tr>
    <tr>
    <th>Nombre del agresor:</th>
    <td>". $row2['agresor']."</td>
  </tr>
    <tr>
    <th>Dispone de lugar:</th>
    <td>". $row2['fdisponelugar']."</td>
  </tr>
    <tr>
    <th>Cobertura de salud:</th>
    <td>". $row2['fidsalud']."</td>
  </tr>
    <tr>
    <th>Tenencia de vivienda:</th>
    <td>". $row2['fidvivienda']."</td>
  </tr>
  <tr>
    <th>Profesional:</th>
    <td>". $row2['pro_apellidonombre']."</td>
  </tr>

</table>
<br/>
<table>
   <tr>
    <th colspan='2'>3. Laboral - educación</th>
  </tr>
  <tr>
    <th>Condición laboral:</th>
    <td>". $row2['f1idactividad']."</td>
  </tr>
  <tr>
    <th>Ocupación remunerada:</th>
    <td>". $row2['f1idremunerada']."</td>
  </tr>
    <tr>
    <th>Dispone de ingresos propios:</th>
    <td>". $row2['f1ingreso']."</td>
  </tr>
  <tr>
    <th>Cuenta con auh:</th>
    <td>". $row2['f1auh']."</td>
  </tr>
    <tr>
    <th>¿Sabe leer o escribir?:</th>
    <td>". $row2['f1leeono']."</td>
  </tr>
    <tr>
    <th>Nivel educativo consultante:</th>
    <td>". $row2['f1_educonsultante']."</td>
  </tr>
    <tr>
    <th>Nivel educativo agresor:</th>
    <td>". $row2['f1_eduagresor']."</td>
  </tr>
    <tr>
    <th>¿Cuenta con un programa social?:</th>
    <td>". $row2['f1psocial']."</td>
  </tr>
    <tr>
    <th>Migrante:</th>
    <td>". $row2['f1migrante']."</td>
  </tr>
    <tr>
    <th>Procedencia:</th>
    <td>". $row2['fidprocedencia']."</td>
  </tr>
  <tr>
    <th>Tiempo de permanencia en años:</th>
    <td>". $row2['permanencia']."</td>
  </tr>
</table>
<br/>
<table>
   <tr >
    <th colspan='2'>4. Red social y comunitaria</th>
  </tr>
  <tr>
    <th>Parientes a concurrir:</th>
    <td>". $row2['f1rs_concurrir']."</td>
  </tr>
  <tr>
    <th>Amigos, vecinos, compañeros:</th>
    <td>". $row2['f1rs_vinculos']."</td>
  </tr>
    <tr>
    <th>Participa en instituciones:</th>
    <td>". $row2['f1rs_institucion']."</td>
  </tr>
</table>
<br/>
<table>
   <tr >
    <th colspan='2'>5. Consecuencias de la violencia</th>
  </tr>
  <tr>
    <th>Problemas laborales:</th>
    <td>". $row2['f1cv_problemas']."</td>
  </tr>
  <tr>
    <th>Limitación para buscar empleo:</th>
    <td>". $row2['f1cv_limitacion']."</td>
  </tr>
    <tr>
    <th>Perdió empleo por violencia:</th>
    <td>". $row2['f1cv_perempleo']."</td>
  </tr>
      <tr>
    <th>Dificultad o pérdida de estudio:</th>
    <td>". $row2['f1cv_perestudio']."</td>
  </tr>
</table>
<br/>
<table>
   <tr >
    <th colspan='2'>7. Evaluación de riesgo</th>
  </tr>
  <tr>
    <th>Cohabitación consultante:</th>
    <td>". $row2['f3cohab']."</td>
  </tr>
  <tr>
    <th>Vínculos con el agresor:</th>
    <td>". $row2['f3idvinculo']."</td>
  </tr>
    <tr>
    <th>Años de vínculos con el agresor:</th>
    <td>". $row2['anviagresor']."</td>
  </tr>
      <tr>
    <th>Años de maltrato:</th>
    <td>". $row2['anmaltrato']."</td>
  </tr>
  <tr>
    <th>Consultante embarazada:</th>
    <td>". $row2['f3embarazada']."</td>
  </tr>
  <tr>
    <th>Evaluación de riesgo:</th>
    <td>". $row2['f3idriesgo']."</td>
  </tr>
</table>
<br/>
<table>
   <tr >
    <th colspan='2'>8. Motivo/s de consulta</th>
  </tr>
  <tr>
    <th>Violencia física:</th>
    <td>". $row2['f31v_fisica']."</td>
  </tr>
  <tr>
    <th>Violencia verbal/psicologica/emocional:</th>
    <td>". $row2['f31v_psicologica']."</td>
  </tr>
    <tr>
    <th>Violencia sexual/reproductiva:</th>
    <td>". $row2['f31v_sexual']."</td>
  </tr>
      <tr>
    <th>Violencia económica/patrimonial:</th>
    <td>". $row2['f31v_economica']."</td>
  </tr>
  <tr>
    <th>Restricción de participación social:</th>
    <td>". $row2['f31v_parsocial']."</td>
  </tr>
  <tr>
    <th>Violencia simbólica:</th>
    <td>". $row2['f31v_simbolica']."</td>
  </tr>
</table>
<br/>
<table>
   <tr >
    <th colspan='2'>9. Consecuencias de violencia</th>
  </tr>
  <tr>
    <th>Impedimento del contacto con los hijos:</th>
    <td>". $row2['f31co_obstaculo']."</td>
  </tr>
  <tr>
    <th>Limitación de recursos económicos:</th>
    <td>". $row2['f31co_econo']."</td>
  </tr>
</table>
<br/>
<table>
   <tr >
    <th colspan='2'>10. Antecedente violencia consultante</th>
  </tr>
  <tr>
    <th>Física:</th>
    <td>". $row2['f32anco_fisica']."</td>
  </tr>
  <tr>
    <th>Psicologica:</th>
    <td>". $row2['f32anco_psico']."</td>
  </tr>
    <tr>
    <th>Abuso sexual:</th>
    <td>". $row2['f32anco_absex']."</td>
  </tr>
      <tr>
    <th>Testigo de violencia:</th>
    <td>". $row2['f32anco_tesvio']."</td>
  </tr>
  <tr>
    <th>Abandono:</th>
    <td>". $row2['f32anco_aban']."</td>
  </tr>
  <tr>
    <th>Otro:</th>
    <td>". $row2['f32anco_otro']."</td>
  </tr>
</table>
<br/>
<table>
   <tr >
    <th colspan='2'>11. Antecedente violencia agresor</th>
  </tr>
  <tr>
    <th>Física:</th>
    <td>". $row2['f33anag_fisica']."</td>
  </tr>
  <tr>
    <th>Psicologica:</th>
    <td>". $row2['f33anag_psico']."</td>
  </tr>
    <tr>
    <th>Abuso sexual:</th>
    <td>". $row2['f33anag_absex']."</td>
  </tr>
      <tr>
    <th>Testigo de violencia:</th>
    <td>". $row2['f33anag_tesvio']."</td>
  </tr>
  <tr>
    <th>Abandono:</th>
    <td>". $row2['f33anag_aban']."</td>
  </tr>
  <tr>
    <th>Otro:</th>
    <td>". $row2['anag_otro']."</td>
  </tr>
</table>
<br/>
<table>
   <tr >
    <th colspan='2'>12. Hechos asociados a episodios violentos</th>
  </tr>
  <tr>
    <th>Embarazo/nacimiento de hijos:</th>
    <td>". $row2['f34he_embar']."</td>
  </tr>
  <tr>
    <th>Celos:</th>
    <td>". $row2['f34he_celos']."</td>
  </tr>
    <tr>
    <th>Problemas laborales:</th>
    <td>". $row2['f34he_plabor']."</td>
  </tr>
      <tr>
    <th>Alcohol/sustancias psicoactivas:</th>
    <td>". $row2['f34he_alcohol']."</td>
  </tr>
  <tr>
      <th>Autonomía de la consultante:</th>
    <td>". $row2['f34he_autoco']."</td>
  </tr>
  <tr>
    <th>Impredecible/confuso:</th>
    <td>". $row2['f34he_impco']."</td>
  </tr>
  <tr>
    <th>Intención de separarse:</th>
    <td>". $row2['f34he_separ']."</td>
  </tr>
  <tr>
    <th>Otro:</th>
    <td>". $row2['he_otro']."</td>
  </tr>
</table>
<br/>
<table>
   <tr >
    <th colspan='2'>13. Indicadores de riesgo</th>
  </tr>
  <tr>
    <th>Signos de lesión física:</th>
    <td>". $row2['f35ind_lesfis']."</td>
  </tr>
    <tr>
    <th>Intervención médica:</th>
    <td>". $row2['f35ind_intmed']."</td>
  </tr>
      <tr>
    <th>Amenaza de muerte:</th>
    <td>". $row2['f35ind_amuerte']."</td>
  </tr>
      <tr>
    <th>Tiene armas blancas/fuego:</th>
    <td>". $row2['f35ind_armas']."</td>
  </tr>
      <tr>
    <th>Aborto provocado por agresor:</th>
    <td>". $row2['f35ind_aborto']."</td>
  </tr>
      <tr>
    <th>Ideación suicida:</th>
    <td>". $row2['f35ind_idsuic']."</td>
  </tr>
      <tr>
    <th>Intento de suicidio:</th>
    <td>". $row2['f35ind_insuic']."</td>
  </tr>
      <tr>
    <th>Relaciones sexuales forzosas:</th>
    <td>". $row2['f35ind_sexfor']."</td>
  </tr>
      <tr>
    <th>Acoso:</th>
    <td>". $row2['f35ind_acoso']."</td>
  </tr>
        <tr>
    <th>Antecedentes penales:</th>
    <td>". $row2['f35ind_antpen']."</td>
  </tr>
        <tr>
    <th>Consumo de sustancias:</th>
    <td>". $row2['f35ind_sust']."</td>
  </tr>
</table>
<br/>
<table>
   <tr >
    <th colspan='2'>14. Estado de salud</th>
  </tr>
  <tr>
    <th>Transtorno de sueño:</th>
    <td>". $row2['f36t_suenio']."</td>
  </tr>
    <tr>
    <th>Transtorno de alimentación:</th>
    <td>". $row2['f36t_alimen']."</td>
  </tr>
    <tr>
    <th>Transtorno digestivo:</th>
    <td>". $row2['f36t_digest']."</td>
  </tr>
    <tr>
    <th>Ingesta ansiolíticos/antidepresivos:</th>
    <td>". $row2['f36t_antidep']."</td>
  </tr>
    <tr>
    <th>Consumo alcohol/drogas:</th>
    <td>". $row2['f36t_aldrog']."</td>
  </tr>
    <tr>
    <th>ITS:</th>
    <td>". $row2['f36t_its']."</td>
  </tr>
    <tr>
    <th>Otros trastornos de salud:</th>
    <td>". $row2['t_otro']."</td>
  </tr>
</table>
<br/>
<table>
   <tr >
    <th colspan='2'>15. Descencadenantes de la consulta</th>
  </tr>
  <tr>
    <th>Hijos grandes/indepedientes:</th>
    <td>". $row2['f37des_hijos']."</td>
  </tr>
  <tr>
    <th>Golpes a los hijos:</th>
    <td>". $row2['f37des_golpe']."</td>
  </tr>
    <tr>
    <th>Conocimiento del problema en otros:</th>
    <td>". $row2['f37des_conoc']."</td>
  </tr>
    <tr>
    <th>Infidelidad:</th>
    <td>". $row2['f37des_infide']."</td>
  </tr>
    <tr>
    <th>Solicitud de un hijo/a:</th>
    <td>". $row2['f37des_solic']."</td>
  </tr>
    <tr>
    <th>Se siente ante una situación límite:</th>
    <td>". $row2['f37des_limite']."</td>
  </tr>
    <tr>
    <th>Tuvo miedo(más que el habitual):</th>
    <td>". $row2['f37des_miedo']."</td>
  </tr>
    <tr>
    <th>Razones legales/jurídicas:</th>
    <td>". $row2['f37des_legal']."</td>
  </tr>
    <tr>
    <th>Derivación:</th>
    <td>". $row2['f37des_deriv']."</td>
  </tr>
    <tr>
    <th>Otro:</th>
    <td>". $row2['des_otro']."</td>
  </tr>  
</table>
<br/>
<table>
  <tr >
    <th colspan='2'>16. Estrategias de intervención</th>
  </tr>
  <tr >
    <th colspan='2'>Antecedentes</th>
  </tr>
  <tr>
    <th>Penal reciente:</th>
    <td>". $row2['f4recientepenal']."</td>
  </tr>
    <tr>
    <th>Penal previo:</th>
    <td>". $row2['f4previapenal']."</td>
  </tr>
    <tr>
    <th>Civil reciente:</th>
    <td>". $row2['f4recientecivil']."</td>
  </tr>
    <tr>
    <th>Civil previo:</th>
    <td>". $row2['f4previacivil']."</td>
  </tr>
    <tr>
    <th>Intervención policial reciente:</th>
    <td>". $row2['f4recientepoli']."</td>
  </tr>
    <tr>
    <th>Intervención policial previa:</th>
    <td>". $row2['f4previapoli']."</td>
  </tr>
    <tr>
    <th>¿Hizo denuncia?:</th>
    <td>". $row2['f4denuncia']."</td>
  </tr>
  <tr>
    <th>¿Pidió medidas?:</th>
    <td>". $row2['f4p_medidas']."</td>
  </tr>
  <tr >
    <th colspan='2'>Accesibilidad</th>
  </tr>
    <tr>
    <th>Accesibilidad al servicio:</th>
    <td>". $row2['f4idaccesibilidad']."</td>
  </tr>
      <tr>
    <th>Comisaría:</th>
    <td>". $row2['com_nombre']."</td>
  </tr>
    <tr >
    <th colspan='2'>Derivación externa</th>
  </tr>
        <tr>
    <th>No informado:</th>
    <td>". $row2['f4de_noinfo']."</td>
  </tr>
        <tr>
    <th>Oficina de empleo:</th>
    <td>". $row2['f4de_ofemp']."</td>
  </tr>
        <tr>
    <th>Consulado o cancillería:</th>
    <td>". $row2['f4de_consul']."</td>
  </tr>
        <tr>
    <th>Juzgados o defensorías:</th>
    <td>". $row2['f4de_defen']."</td>
  </tr>
        <tr>
    <th>Programa social:</th>
    <td>". $row2['f4de_psocial']."</td>
  </tr>
        <tr>
    <th>Área mujer:</th>
    <td>". $row2['f4_amujer']."</td>
  </tr>
          <tr>
    <th>Policia o comisaría de la mujer:</th>
    <td>". $row2['f4de_comujer']."</td>
  </tr>
          <tr>
    <th>Otra:</th>
    <td>". $row2['de_otra']."</td>
  </tr>
      <tr >
    <th colspan='2'>Derivación interna</th>
  </tr>
        <tr>
    <th>No informado:</th>
    <td>". $row2['f4di_noinfo']."</td>
  </tr>
        <tr>
    <th>Asistencia psicológica:</th>
    <td>". $row2['f4di_apsico']."</td>
  </tr>
        <tr>
    <th>Patrocinio jurídico:</th>
    <td>". $row2['f4di_pjuridico']."</td>
  </tr>
        <tr>
    <th>Refugio o casa de tránsito u hogar:</th>
    <td>". $row2['f4di_refugio']."</td>
  </tr>
        <tr>
    <th>Grupos:</th>
    <td>". $row2['f4di_grupos']."</td>
  </tr>
        <tr>
    <th>Asesoramiento legal:</th>
    <td>". $row2['f4di_alegal']."</td>
  </tr>
          <tr>
    <th>Asistencia social:</th>
    <td>". $row2['f4di_asocial']."</td>
  </tr>
          <tr>
    <th>Otra:</th>
    <td>". $row2['di_otros']."</td>
  </tr>
</table>
<br/>
<table>
   <tr >
    <th colspan='2'>17. Medidas judiciales</th>
  </tr>
  <tr>
    <th>Prohibición de acercamiento:</th>
    <td>". $row2['f41me_acerca']."</td>
  </tr>
  <tr>
    <th>Exclusión del hogar:</th>
    <td>". $row2['f41me_exhog']."</td>
  </tr>
    <tr>
    <th>Retiro de pertenencias:</th>
    <td>". $row2['f41me_perten']."</td>
  </tr>
    <tr>
    <th>Restitución de personas:</th>
    <td>". $row2['f41me_resper']."</td>
  </tr>
    <tr>
    <th>Alimentos/tenencia provisoria:</th>
    <td>". $row2['f41me_alimen']."</td>
  </tr>
    <tr>
    <th>Régimen de visitas:</th>
    <td>". $row2['f41me_visitas']."</td>
  </tr>
    <tr>
    <th>Intervención psiquiátrica/adicciones:</th>
    <td>". $row2['f41me_psico']."</td>
  </tr>
    <tr>
    <th>Secuestro/prohibición de armas:</th>
    <td>". $row2['f41me_prohib']."</td>
  </tr>
    <tr>
    <th>Otra:</th>
    <td>". $row2['me_otra']."</td>
  </tr>
</table>
<br/>
<table>
  <tr >
    <th colspan='8'>6. Grupo Familiar Conviviente</th>
  </tr>
    <tr>
    <th>Apellidos</th>
    <th>Nombres</th>
    <th>Sexo</th>
    <th>Edad</th>
    <th>Meses</th>
    <th>Pariente</th>
    <th>Discapacitado</th>
    <th>Victima</th>
  </tr>";
 }

  $content .=" <tr >
    <td>". $row2['f2_apellido']."</td>
    <td>". $row2['f2_nombre'] ."</td>
    <td>". $row2['f2idsexo']."</td>
    <td>".  $row2['f2_edad']. "</td>
    <td>". $row2['f2_mes']."</td>
    <td>". $row2['f2par_descripcion'] ."</td>
    <td>". $row2['f2discapacitado'] ."</td>
    <td>". $row2['f2victimavio']."</td>
  </tr>".
            $c++;
    } 
 $content .= " </table></body></html>";
 
  
 //echo $content;
            

 require_once(dirname(dirname(__FILE__)).'/template/vendor/html2pdf/html2pdf.class.php');
$html2pdf = new HTML2PDF('P','A4','fr');
$html2pdf->WriteHTML($content);
$html2pdf->WriteHTML($content1);
ob_end_clean();
$html2pdf->Output('Ficha_RUCVM.pdf');

?>
