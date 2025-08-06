<?php
	include ('../../Models1/conexion.php');
	$nroexpediente = $_POST['nroexpediente'];

	$con = new \Models1\Conexion;
	
	if($nroexpediente != NULL){
		$sql = "SELECT * FROM cautelar WHERE cautelar.ca_expediente = '$nroexpediente'";
		$datos = $con->consultaRetorno($sql);
		$rows = pg_num_rows($datos);
		if($rows > 0){
			echo '<div class="alert alert-danger" align="center">
				<small>El número de expediente ya existe</small>
			</div>';
			echo "<script>$('#exp1').focus();</script>";
		}
	}