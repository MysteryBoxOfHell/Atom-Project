<?php

  include("con_db.php");
  if(isset($_POST['reporte'])){
    if(strlen($_POST['ID'])>=1
    ){
      $ID= trim($_POST['ID']);
      $marca= trim($_POST['marca']);
      $modelo= trim($_POST['modelo']);
      $Email= trim($_POST['correo']);
      $men= trim($_POST['mensaje']);
      $dir= trim($_POST['Direccion']);

      $consulta= "INSERT INTO reportes(Idenficiacion, Marca, Modelo, Email, Mensaje, Direccion) VALUES ('$ID','$marca','$modelo','$Email','$men','$dir')";
      $resultado= mysqli_query($conectar,$consulta);

      if($resultado){
       ?>
        <h3 class="ok">Su reporte se envio correctamente</h3>
        <h3 class="ok">En las proximas horas recibira un correo</h3>
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
