<?php
	include ('../../Models1/conexion.php');
	
	
	$idtipo_medida = $_POST['idtipo_medida1'];	

	$con = new \Models1\Conexion;

	if($idtipo_medida==" "){
		$sql = "SELECT * FROM tipo_medida ORDER BY med_nombre";
		$datos1 = $con->consultaRetorno($sql);   
    	while ( $row =  pg_fetch_array($datos1))    
		{
			echo '<option value="'.$row['idtipo_medida'].'">'.$row['med_nombre'].'</option>';   
		}
	} else {
		$sql4 = "SELECT * FROM tipo_medida ORDER BY med_nombre";
		$datos4 = $con->consultaRetorno($sql4);	
		$cid = explode(',',$idtipo_medida);
		echo "en el array".$cid[0]; 

		while($row4 =  pg_fetch_array($datos4))
		{
			if(in_array($row4['idtipo_medida'], $cid))
			{
				echo '<option value="'.$row4['idtipo_medida'].'" selected>'.$row4['med_nombre'] .'</option>';
			} else {
				echo '<option value="'.$row4['idtipo_medida'].'">'.$row4['med_nombre'] .'</option>';
			}  
		}   
	}	