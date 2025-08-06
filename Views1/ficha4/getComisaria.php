<?php
	include ('../../Models1/conexion.php');

	$con = new \Models1\Conexion;

	$idcomisaria = $_POST['idcomisaria1'];
	
	if($idcomisaria == NULL){
		$sql = "SELECT * FROM comisaria where idcomisaria<>$idcomisaria AND dep_origen = 2 ORDER BY idcomisaria";
	} else {
		$sql = "SELECT * FROM comisaria WHERE dep_origen = 2 ORDER BY idcomisaria";	
	}
	$datos1 = $con->consultaRetorno($sql);
	$sql2 = "SELECT * FROM comisaria where idcomisaria=$idcomisaria AND dep_origen = 2 ORDER BY idcomisaria";
	$datos2 = $con->consultaRetorno($sql2);
	$row2 =  pg_fetch_array($datos2);
	echo '<option value="NULL">Seleccionar comisaria</option>';
	if(isset($row2)){
		echo '<option value="'.$row2['idcomisaria'].'" selected>'.$row2['com_nombre'].'</option>';
	}
	while ( $row =  pg_fetch_array($datos1))    
	{
		echo '<option value="'.$row['idcomisaria'].'">'.$row['com_nombre'].'</option>';
	}