<?php

  include("con_db0.php");
  if(isset($_POST['register'])){
    if(strlen($_POST['nombre'])>=1 &&strlen($_POST['ID'])>=1 &&
    strlen($_POST['Telefono'])>=1 &&strlen($_POST['correo'])>=1 &&
    strlen($_POST['contraseña'])>=1
    ){
      $name= trim($_POST['nombre']);
      $ID= trim($_POST['ID']);
      $Tel= trim($_POST['Telefono']);
      $Email= trim($_POST['correo']);
      $Contra= trim($_POST['contraseña']);

      $consulta= "INSERT INTO datosregistro1(Nombre, Identificacion, Telefono, Correo, Contraseña) VALUES ('$name','$ID','$Tel','$Email','$Contra')";
      $resultado= mysqli_query($conectar,$consulta);

      if($resultado){
       ?>
        <h3 class="ok">Te Inscribiste Correctamente</h3>
      <?php
    }else{
      ?>
        <h3 class="bad">Ocurrio un error</h3>
        <?php
      }
    }else{
      ?>
        <h3 class="bad">Por favor Complete los campos</h3>
      <?php
    }
  }
?>
