<?php
  //Conectamos con el servidor
  $conectar=@mysql_connect('localhost','root','');
  //Verificamos Conexion
  if(!$conectar){
    echo"no se pudo conectar con el servidor";
  }else{
    $base=mysql_select_db('datosregistro');
    if(!$prueba){
      echo"No se encontro la base de datos";
    }
  }
  //recuperar variables
  $nombre=$_POST['Nombre'];
  $identificacion=$_POST['Identificacion'];
  $telefono=$_POST['Telefono'];
  $email=$_POST['Email'];
  $contraseña=$_POST['Contraseña'];
  //Sentencia
  $sql="INSERT INTO usuarios VALUES('$nombre','$identificacion','$telefono','$email','$contraseña')";
  //Ejecutamos Sentencia
  $ejecutar=mysql_query($sql);
  //Verificamos Ejecucion
  if(!$ejecutar){
    echo "Hubo un Error";
  }else{
    echo "Datos Guardados Correctamente <br><a href=index.html>volver</a>";
  }
