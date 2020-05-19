<?php

  include("con_db0.php");
  if(isset($_POST['Rentar'])){
    if(strlen($_POST['Identificacion'])>=1 &&
    strlen($_POST['Telefono'])>=1
    ){
      $ID= trim($_POST['Identificacion']);
      $Tel= trim($_POST['Telefono']);
      $Marca= trim($_POST['marca']);
      $Modelo= trim($_POST['modelo']);
      $DI= trim($_POST['DiaInicial']);
      $DF= trim($_POST['DiaFinal']);

      $consulta= "INSERT INTO datosreservas1(Identificacion, Telefono, Marca, Modelo, DiaInicio, DiaFinal) VALUES ('$ID','$Tel','$Marca','$Modelo','$DI','$DF')";
      $resultado= mysqli_query($conectar,$consulta);

      if($resultado){
       ?>
        <h3 class="ok">Reservaste Correctamente</h3>
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
