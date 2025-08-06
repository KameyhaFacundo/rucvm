<?php
session_start();

$_SESSION['username'] = $_POST['username'];
$_SESSION['password'] = $_POST['password'];

$con = new \Models1\Conexion;

if($_POST){

  if($_SESSION['username'] && $_SESSION['password']){
    $query= $con->consultaRetorno("select * from usuarios where username='".$_SESSION['username']."' AND password='".$_SESSION['password']."'");
    $numrows = pg_num_rows($query);

    if($numrows != 0){
      while($row = pg_fetch_assoc($query)){
        $bdnombre = $row['username'];
        $bdpassword = $row['password'];
      }

      if($_SESSION['username']==$bdnombre){
        if($_SESSION['password']==$bdpassword){
          require_once "index.php";
        }else{
          echo "La password es incorrecta!";
        }
      }else{
        echo "El nombre no es correcto!";
      }
    }else{
      echo "Este nombre no esta registrado";
    }
  }else{
    echo "Completa el login con nombre y password!";
  }
}else{
  echo "Acceso no permitido";
  exit;
}
?>
