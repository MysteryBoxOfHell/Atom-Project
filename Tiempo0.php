<!DOCTYPE html>
<html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Tu tiempo con tu ZIPCAR</title>
    <meta name="viewport" content="width=device-width, user-scalable=yes initial-scale=1.0
    , maximun-scale=3.0, minimun-scale=1.0">
    <script src="https://kit.fontawesome.com/5869d7f10a.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/tiempo.css">
  </head>
  <body>
    <form class="formulario" method="post">
      <h1>Buscar</h1>
      <div class="contenedor">
        <div class="input-contenedor">
          <i class="fas fa-user icon"></i>
          <input type="text" placeholder="Identificacion" name="ID">

        </div>
        <input type="submit" name="register" value="Buscar" class="buttom">
        <p>En esta seccion puede ver los dias habiles que tiene para usar el auto<p>
        <p>¿Deseas Volver?<a class="link" href="index0.html">Volver al Inicio</a></p>
      </div>
      <?php
        include("php/mostrar.php");
       ?>
    </form>




  </body>
</html>>
