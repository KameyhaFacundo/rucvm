<?php
	include ('../../Models1/conexion.php');

	$idfiscalia = $_POST['idfiscalia1'];

	$con = new \Models1\Conexion;

	if($idfiscalia == NULL){
		$sql = "SELECT * FROM fiscalia where idfiscalia<>$idfiscalia ORDER BY fis_descripcion";
	}else{
		$sql = "SELECT * FROM fiscalia ORDER BY fis_descripcion";	
	}
	$datos1 = $con->consultaRetorno($sql);
	$sql2 = "SELECT * FROM fiscalia where idfiscalia=$idfiscalia ORDER BY fis_descripcion";
	$datos2 = $con->consultaRetorno($sql2);
	$row2 =  pg_fetch_array($datos2);
	echo '<option value="NULL">Seleccionar fiscalia</option>';
	if(isset($row2)){
		echo '<option value="'.$row2['idfiscalia'].'" selected>'.$row2['fis_descripcion'].'</option>';
	}
	while ( $row =  pg_fetch_array($datos1))    
	{
		echo '<option value="'.$row['idfiscalia'].'">'.$row['fis_descripcion'].'</option>';
	}