<!DOCTYPE html>
<html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Registrate en ZIPCAR</title>
    <meta name="viewport" content="width=device-width, user-scalable=yes initial-scale=1.0
    , maximun-scale=3.0, minimun-scale=1.0">
    <script src="https://kit.fontawesome.com/5869d7f10a.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/registro.css">
  </head>
  <body>
    <form class="formulario" method="post">
      <h1>Registrate</h1>
      <div class="contenedor">
        <div class="input-contenedor">
          <i class="fas fa-user icon"></i>
          <input type="text" name="nombre" placeholder="Nombre Completo">
        </div>

        <div class="input-contenedor">
          <i class="fas fa-id-card icon"></i>
          <input type="number" name="ID" placeholder="Identificacion">
        </div>

        <div class="input-contenedor">
          <i class="fas fa-phone-alt icon"></i>
          <input type="number"  name="Telefono" placeholder="Telefono">
        </div>

        <div class="input-contenedor">
          <i class="fas fa-envelope icon"></i>
          <input type="email" name="correo" placeholder="Correo">
        </div>

        <div class="input-contenedor">
          <i class="fas fa-key icon"></i>
          <input type="password" name="contraseña" placeholder="Contraseña">
        </div>

        <input type="submit" name="register" value="Registrate" class="buttom">
        <p>Al Registrate aceptas nuestras politicas y condiciones de uso<p>
        <p>¿Ya tienes una cuenta?<a class="link" href="Login.html">Iniciar Seccion</a></p>
        <p>¿Seguir explorando la pagina?<a class="link" href="index.html">Volver al inicio</a></p>
      </div>
    </form>

    <?php
      include("php/ConexionRegistrar.php");
     ?>

  </body>
</html>>
