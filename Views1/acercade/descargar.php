<?php            
$id = 'diccionario_de_datos_rucvm.pdf';
$filepath = URL.'Views1/template/colorlib/docs/'; // of course find the exact filename....  
//echo $filepath; 
$file = $filepath.$id;     
//header('Pragma: public');
//header('Expires: 0');
//header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
//header('Cache-Control: private', false); // required for certain browsers 
//header('Content-Type: application/msword');

header("Content-Disposition: attachment; filename=".$id."");
header ("Content-Type: application/octet-stream");

header('Content-Transfer-Encoding: binary');
header('Content-Length: '.filesize($file));

readfile($file);

exit;
 ?>