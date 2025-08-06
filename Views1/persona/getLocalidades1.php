<?php
	include ('../../Models1/conexion.php');

	$con = new \Models1\Conexion;

	$iddepartamento1 = $_POST['departamento1'];
	$idlocalidad1 = $_POST['localidad1'];
	
	if($iddepartamento1 != NULL){
		if($idlocalidad1 != NULL){
			$sql = "SELECT * FROM localidad WHERE iddepartamento = $iddepartamento1 AND idlocalidad<>$idlocalidad1 ORDER BY idlocalidad";
			$datos1 = $con->consultaRetorno($sql);
			$sql2 = "SELECT * FROM localidad where idlocalidad=$idlocalidad1 ORDER BY idlocalidad";
			$datos2 = $con->consultaRetorno($sql2);
			$row2 =  pg_fetch_array($datos2);
		}else{
			$sql = "SELECT * FROM localidad WHERE iddepartamento = $iddepartamento1 ORDER BY idlocalidad";
			$datos1 = $con->consultaRetorno($sql);
		}
	}
	echo '<option value="0">Seleccionar departamento</option>';
	if(isset($row2)){
		echo '<option value="'.$row2['idlocalidad'].'" selected>'.$row2['loc_nombre'].'</option>';
	}
	while ( $row =  pg_fetch_array($datos1))    
	{
		echo '<option value="'.$row['idlocalidad'].'">'.$row['loc_nombre'].'</option>';
	}