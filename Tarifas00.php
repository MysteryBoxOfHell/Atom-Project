<!DOCTYPE html>
<html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Consigue tu ZIPCAR</title>
    <meta name="viewport" content="width=device-width, user-scalable=yes initial-scale=1.0
    , maximun-scale=3.0, minimun-scale=1.0">
    <script src="https://kit.fontawesome.com/5869d7f10a.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/tiempo.css">
  </head>
  <body>
    <form class="formulario" method="post">
      <h1>Consigue Tu ZIPCAR</h1>
      <p>Para conseguir tu auto solo debes ingresar la marca que deseas su modelo y el tiempo que lo vas a tener</p>
      <div class="contenedor">
        <div class="input-contenedor">
          <i class="fas fa-id-card icon"></i>
          <input type="number" placeholder="Identificacion" name="Identificacion">
        </div>

        <div class="input-contenedor">
          <i class="fas fa-phone-alt icon"></i>
          <input type="number" placeholder="Telefono" name="Telefono">
        </div>


        <div class="input-contenedor">
          <i class="fas fa-car-side icon"></i>
          <input type="text" placeholder="Ingresa la marca del auto" name="marca">
        </div>
        <!--
        <div class="input-contenedor">
          <i class="fas fa-car-side icon"></i>
            <select class="box" name: "marca">
              <option>Chevrolet</option>
              <option>BMW</option>
              <option>Honda</option>
              <option>Mazda</option>
              <option>Renault</option>
            </select>
        </div>
      -->


        <div class="input-contenedor">
          <i class="fas fa-car icon"></i>
          <input type="text" placeholder="Modelo" name="modelo">
        </div>
        <div class="input-contenedor">
          <i class="far fa-calendar-alt icon"></i>
          <input type="date" placeholder="Fecha de inicio" name="DiaInicial">
        </div>
        <div class="input-contenedor">
          <i class="far fa-calendar-check icon"></i>
          <input type="date" placeholder="Fecha final" name="DiaFinal">
        </div>

        <input type="submit" name="Rentar" value="Rentar Auto" class="buttom">
        <p>Esperamos que puedas resolver todos tus problemas<p>
        <p>¿Deseas Volver?<a class="link" href="index0.html">Volver al Inicio</a></p>
      </div>
    </form>

    <?php
      include("php/ConexionReserva.php");
     ?>

  </body>
</html>>
