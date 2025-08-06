<?php
	include ('../../Models1/conexion.php');

	$iddepartamento = $_REQUEST['departamento'];
	
	$con = new \Models1\Conexion;
	$sql = "SELECT idlocalidad, loc_nombre, iddepartamento FROM localidad WHERE iddepartamento = $iddepartamento ORDER BY idlocalidad";	
	$datos1 = $con->consultaRetorno($sql);

	$localidad = array();
	while(($row = pg_fetch_array($datos1)) != NULL)
	{
		$id = $row['idlocalidad'];  
    	$localidad[$id] = $row['loc_nombre'];
	}
	print_r(json_encode($localidad));