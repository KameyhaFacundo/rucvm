<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<html>
<?php

if(isset($_COOKIE['rucvm'])){


}else{ ?>



<head>
<link rel="stylesheet" type="text/css" href="styleindex.css" />
<title>Bienvenidos</title>
<meta name="description" content="Conteo de días habiles desde la entrada
 de un expediente, oficio o nota externa hasta su salida o hasta la fecha actual" />
<meta name="keywords" content="conteo, días habiles, oficios, nota externa, expediente" />
<meta name="author" content="Germán" />
<meta http-equiv="content-type" content="text/html;charset=iso-8859-1" />

</head>

<body>
<center><h2>Bienvenidos</h2>
  <h3>Sistema de Gestión de Mesa de Entrada</h3><p>

    <?php  echo $_GET['url'] ;?>

Por favor logueate..<p>

<form method="post" action="login.php">

<label for="nombre" > Nombre: </label><input type="text" id="nombre" name="username" placeholder="escribe el nombre de usuario.." maxlength="50"/>
<label for="password" > Password: </label><input type="password" id="password" name="password" placeholder="escribe la contraseña.." maxlength="50"/>


  <p class="primero">
    <input type="submit" name="submit" value="Login" />


</form>
</center>

</body>

</html>
<?php
}
 ?>