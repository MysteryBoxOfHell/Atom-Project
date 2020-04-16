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
  $identificacion=$_POST['Identificacion'];
  $Telefono=$_POST['Telefono'];
  $Marca=$_POST['Accidente'];
  $Modelo=$_POST['Correo'];
  $Fecha_I=$_POST['Mensaje'];
  $Fecha_F=$_POST['Direccion'];
  //Sentencia
  $sql="INSERT INTO reservas VALUES('1','$identificacion','$Telefono','$Marca','$Modelo','$Fecha_I','$Fecha_F')";
  //Ejecutamos Sentencia
  $ejecutar=mysql_query($sql);
  //Verificamos Ejecucion
  if(!$ejecutar){
    echo "Hubo un Error";
  }else{
    echo "Datos Guardados Correctamente <br><a href=index.html>volver</a>";
  }
?>
