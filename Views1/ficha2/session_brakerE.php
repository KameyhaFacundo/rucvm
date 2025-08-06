<?php 
	session_start();
	$id_fila = $_POST['idfila'];
        for($i=0;$i<  count($id_fila);$i++){
	//echo $id_fila[0];

    unset($_SESSION['Ef2_f2_apellido'.$id_fila[$i]]);
    unset($_SESSION['Ef2_f2_nombre'.$id_fila[$i]]);
    unset($_SESSION['Ef2_idsexo'.$id_fila[$i]]);
    unset($_SESSION['Ef2_f2_edad'.$id_fila[$i]]);
    unset($_SESSION['Ef2_f2_mes'.$id_fila[$i]]);
    unset($_SESSION['Ef2_idpariente'.$id_fila[$i]]);
    unset($_SESSION['Ef2_discapacitado'.$id_fila[$i]]);
    unset($_SESSION['Ef2_victimavio'.$id_fila[$i]]);
        }
        ?>