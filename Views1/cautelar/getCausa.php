<?php
	include ('../../Models1/conexion.php');
	
	$idcausa = $_POST['idcausa1'];	
	$con = new \Models1\Conexion;
	
	if($idcausa==" "){
		$sql = "SELECT * FROM causa ORDER BY ca_nombre";
		$datos1 = $con->consultaRetorno($sql);   
		while ( $row =  pg_fetch_array($datos1))    
		{		
			echo '<option value="'.$row['idcausa'].'">'.$row['ca_nombre'].'</option>';   
		}
	}
	else{
		$sql4 = "SELECT * FROM causa ORDER BY ca_nombre";
		$datos4 = pg_query($sql4);	
		$cid = explode(',',$idcausa);
		echo "en el array".$cid[0]; 
		
		while($row4 =  pg_fetch_array($datos4))
		{
			if(in_array($row4['idcausa'], $cid))
			{
				echo '<option value="'.$row4['idcausa'].'" selected>'.$row4['ca_nombre'] .'</option>';
			}
			else{
				echo '<option value="'.$row4['idcausa'].'">'.$row4['ca_nombre'] .'</option>';
			}  
		}   
	}	


