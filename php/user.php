<?php

$conectar= mysqli_connect("localhost","root","","prueba");

if(!$conectar){
  die("No hay Conexion: ".mysqli_connect_error());
}

$nombre = $_POST["ID"];
$pass = $_POST["pass"];

$query = mysqli_query($conectar, "SELECT * FROM datos WHERE Identificacion = '".$nombre."' AND Contraseña = '".$pass."'");
//$nom= mysqli_query($conectar, "SELECT Nombre FROM datos WHERE Identificacion = '".$nombre."' AND Contraseña = '".$pass."'");

$nr = mysqli_num_rows($query);

if($nr==1){

  echo "Bienvenido: ". $nombre;
  ?>
  <a href="Atom-Project2/index0.html">Volver al inicio</a>
  <?php
}else if($nr==0){
  echo "No ingreso";
}
 ?>
