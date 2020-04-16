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
  $Marca=$_POST['Marca'];
  $Tipo_de_Falla=$_POST['Accidente'];
  $Correo=$_POST['Correo'];
  $Mensaje=$_POST['Mensaje'];
  $Direccion=$_POST['Direccion'];
  //Sentencia
  $sql="INSERT INTO reportes VALUES('1','$identificacion','$Marca','$Tipo_de_Falla','$Correo','$Mensaje','$Direccion')";
  //Ejecutamos Sentencia
  $ejecutar=mysql_query($sql);
  //Verificamos Ejecucion
  if(!$ejecutar){
    echo "Hubo un Error";
  }else{
    echo "Datos Guardados Correctamente <br><a href=index.html>volver</a>";
  }
?>
