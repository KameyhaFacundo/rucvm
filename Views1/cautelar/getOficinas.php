<?php
	include ('../../Models1/conexion.php');
	$idcomisaria = $_POST['ca_deporigen1'];

	$con = new \Models1\Conexion;
	
	if($idcomisaria == NULL){
		$sql = "SELECT * FROM comisaria where idcomisaria<>$idcomisaria ORDER BY com_nombre";
	}else{
		$sql = "SELECT * FROM comisaria ORDER BY com_nombre";	
	}
	$datos1 = $con->consultaRetorno($sql);
	$sql2 = "SELECT * FROM comisaria where idcomisaria=$idcomisaria ORDER BY com_nombre";
	$datos2 = $con->consultaRetorno($sql2);
	$row2 =  pg_fetch_array($datos2);
	echo '<option value="NULL">Seleccionar dependencia</option>';
	if(isset($row2)){
		echo '<option value="'.$row2['idcomisaria'].'" selected>'.$row2['com_nombre'].'</option>';
	}
	while ( $row =  pg_fetch_array($datos1))    
	{ 
		echo '<option value="'.$row['idcomisaria'].'">'.$row['com_nombre'].'</option>';
	}