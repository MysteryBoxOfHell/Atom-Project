<!DOCTYPE html>
<html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Reportes ZIPCAR</title>
    <meta name="viewport" content="width=device-width, user-scalable=yes initial-scale=1.0
    , maximun-scale=3.0, minimun-scale=1.0">
    <script src="https://kit.fontawesome.com/5869d7f10a.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/reporte.css">
  </head>
  <body>
    <form class="formulario"  method="post">
      <h1>Reporte</h1>
      <div class="contenedor">
        <div class="input-contenedor">
          <i class="fas fa-user icon"></i>
          <input type="number" name="ID" placeholder="Identificacion">
        </div>

        <div class="input-contenedor">
          <i class="fas fa-car-side icon"></i>
          <input type="text" name="marca" placeholder="Marca del auto">
        </div>

        <div class="input-contenedor">
          <i class="fas fa-file-invoice icon"></i>
          <input type="text" name="modelo" placeholder="Modelo del Auto">
        </div>
        <!--
        <div class="input-contenedor">
          <i class="fas fa-car-side icon"></i>
            <select class="box">
              <option>Chevrolet</option>
              <option>BMW</option>
              <option>Honda</option>
              <option>Mazda</option>
              <option>Renault</option>
            </select>
        </div>

        <div class="input-contenedor">
          <i class="fas fa-file-invoice icon"></i>
            <select class="box">
              <option>Accidente</option>
              <option>Falla del auto</option>
            </select>
        </div>
        -->

        <div class="input-contenedor">
          <i class="fas fa-envelope icon"></i>
          <input type="email" name="correo" placeholder="Correo">
        </div>

        <div class="input-contenedor">
          <i class="fas fa-car-crash icon"></i>
          <input type="text" name="mensaje" placeholder="Mensaje de reporte">
        </div>

        <div class="input-contenedor">
          <i class="fas fa-directions icon"></i>
          <input type="text" name="Direccion" placeholder="Direccion">
        </div>
        <input type="submit" value="Enviar Reporte" name="reporte" class="buttom">
        <p>Todos sus reclamos son tomados en cuenta<p>
        <p>¿Deseas Volver?<a class="link" href="index0.html">Volver al Inicio</a></p>
      </div>
    </form>

    <?php
      include("php/ConexionReportar.php");
     ?>

  </body>
</html>>
