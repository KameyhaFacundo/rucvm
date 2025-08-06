<?php
	include ('../../Models1/conexion.php');
	require_once("vendor/autoload.php");

	$dotenv = Dotenv\Dotenv::createImmutable(__DIR__, '.env');
	$dotenv->load();

	$idinstitucion = $_POST['idinstitucion1'];

	//$con = new Conexion ();
	$dbconn= pg_connect("host=" . $_ENV['DB_HOST'] . " port=" . $_ENV['DB_PORT'] . " dbname=" . $_ENV['DB_DATABASE'] . " user=" . $_ENV['DB_USERNAME'] . " password=" . $_ENV['DB_PASSWORD'] . "")
	or die('No pudo conectarse: ' . \pg_last_error());
	pg_query("set names 'utf8';");
    if($idinstitucion == NULL){
		$sql = "SELECT * FROM institucion where idinstitucion<>$idinstitucion ORDER BY idinstitucion";
	}else{
		$sql = "SELECT * FROM institucion ORDER BY idinstitucion";	
	}
	$datos1 = pg_query($sql);
	$sql2 = "SELECT * FROM institucion where idinstitucion=$idinstitucion ORDER BY idinstitucion";
	$datos2 = pg_query($sql2);
	$row2 =  pg_fetch_array($datos2);
	echo '<option value="0">Seleccionar institucion</option>';
	if(isset($row2)){
		echo '<option value="'.$row2['idinstitucion'].'" selected>'.$row2['ins_descripcion'].'</option>';
	}
	while ( $row =  pg_fetch_array($datos1))    
	{ 
		echo '<option value="'.$row['idinstitucion'].'">'.$row['ins_descripcion'].'</option>';	
	}