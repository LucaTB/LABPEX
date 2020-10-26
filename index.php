<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset= "utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1">
    <title> LABPEX </title>
    <link rel="stylesheet" type="text/css" href="estilos.css"/>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400&display=swap" rel="stylesheet">
  </head>
  <body>

      <img class="imag" src="Imagenes/LOGO (solo).jpg" width="200" alt="LabPexCenur">

    <header>
      <input type="checkbox" id="btn-menu">
      <label for="btn-menu"> <img src="Imagenes/LOGO (solo).jpg" width="35" alt="">
      </label>

<nav class="menu">
<ul>
  <li><a href="LABNET">Home</a></li>
  <li><a href="">¿Cómo participar?</a></li>
  <li><a href="coord.html">Organización</a></li>
  <li><a href="equipos.html">Equipos</a></li>
  <li><a href="expes.html">Experimentos activos</a></li>
  <li><a href="sitios.html">Sitios de interés</a></li>

</header>
  <h1> <span class="texto-borde"> ¿Cómo participar? </span> </h1>
  
  <div class="box">
  <h2>Agende su experimento</h2>


  <form method="post">
    <input type="text" placeholder="Nombre" name="name" required="">
    <input type="email" placeholder="Email" name"email" required="">
    <input type="text" placeholder="Experimento del que desea participar" name"asunto" required="">
    <textarea placeholder="Mensaje (fecha y hora convenientes)" name="msg"></textarea>
    <input type="submit" name="enviar" value="Enviar">
  </form>

<script type="text/javascript"></script>
  <?php include ("correo.php");?>

  </div>

  <div class="boxI">
    <h3><b> ¿Cómo llegar? </b></h3>
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2025.1233092114594!2d-57.95943170259371!3d-31.39103393055695!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95addcd6fac77777%3A0xee093d61a3428b63!2sCentro%20Universitario%20Regional%20Litoral%20Norte%20Salto%20%7C%20Universidad%20de%20la%20Rep%C3%BAblica!5e0!3m2!1ses!2suy!4v1600196648600!5m2!1ses!2suy" width="400" height="300" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
</div>
  </body>
</html>
