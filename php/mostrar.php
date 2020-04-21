<?php

$inc=include("con_db.php");

if($inc){
  $ID= $_POST['ID'];
  $consulta = "SELECT * FROM reservas WHERE Identifcacion = '".$ID."'";
  $resultado = mysqli_query($conectar, $consulta);
  if($resultado){
    while($row = $resultado -> fetch_array()){
      $id = $row['Identifcacion'];
      $id1 = $row['Telefono'];
      $id2 = $row['Marca'];
      $id3 = $row['Modelo'];
      $id4 = $row['DiaInicio'];
      $id5 = $row['DiaFinal'];
      ?>
      <div class="muestra">
          <div>
            <p>
              <b>Identificacion: </b><?php echo $id ?><br />
              <b>Telefono: </b><?php echo $id1 ?><br />
              <b>Marca: </b><?php echo $id2 ?><br />
              <b>Modelo: </b><?php echo $id3 ?><br />
              <b>DiaInicio: </b><?php echo $id4 ?><br />
              <b>DiaFinal: </b><?php echo $id5 ?><br />
            </p>
          </div>
      </div>
      <?php
    }
  }
}
 ?>
