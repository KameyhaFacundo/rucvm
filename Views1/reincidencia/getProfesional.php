<?php
	include ('../../Models1/conexion.php');

	$idprofesional = $_POST['profesional1'];
	$idusuario = $_POST['idusuario'];

	$con = new \Models1\Conexion;

	if($idprofesional == NULL){
		$sql = "SELECT * FROM profesional where idprofesional<>$idprofesional ORDER BY idprofesional";
	} else {
		$sql = "SELECT * FROM profesional, usuarios WHERE usuarios.idinstitucion = profesional.idinstitucion AND usuarios.idusuario = $idusuario ORDER BY profesional.idprofesional";	
	}
	$datos1 = $con->consultaRetorno($sql);
	$sql2 = "SELECT * FROM profesional where idprofesional=$idprofesional ORDER BY idprofesional";
	$datos2 = $con->consultaRetorno($sql2);
	$row2 =  pg_fetch_array($datos2);
	echo '<option value="a">Seleccionar profesional</option>';
	if(isset($row2)){
		echo '<option value="'.$row2['idprofesional'].'" selected>'.ucwords(strtolower($row2['pro_apellido'])).", ".ucwords(strtolower($row2['pro_nombre'])).'</option>';
	}
	while ( $row =  pg_fetch_array($datos1))    
	{	
		echo '<option value="'.ucwords(strtolower($row['pro_apellido'])).", ".ucwords(strtolower($row['pro_nombre'])).'</option>';         
	}