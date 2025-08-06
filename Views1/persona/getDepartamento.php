<?php
	include ('../../Models1/conexion.php');

	$iddepartamento = $_POST['departamento1'];

	$con = new \Models1\Conexion;
	
	if($iddepartamento == NULL){
		$sql = "SELECT * FROM departamento where iddepartamento<>$iddepartamento ORDER BY iddepartamento";
	} else {
		$sql = "SELECT * FROM departamento ORDER BY iddepartamento";	
	}
	$datos1 = $con->consultaRetorno($sql);
	$sql2 = "SELECT * FROM departamento where iddepartamento=$iddepartamento ORDER BY iddepartamento";
	$datos2 = $con->consultaRetorno($sql2);
	$row2 =  pg_fetch_array($datos2);
	echo '<option value="0">Seleccionar departamento</option>';
	if(isset($row2)){
		echo '<option value="'.$row2['iddepartamento'].'" selected>'.$row2['dep_descripcion'].'</option>';
	}
	while ( $row =  pg_fetch_array($datos1))    
	{
		echo '<option value="'.$row['iddepartamento'].'">'.$row['dep_descripcion'].'</option>';
	}