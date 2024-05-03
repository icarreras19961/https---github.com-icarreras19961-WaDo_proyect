<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>WaDo</title>
  <link rel="stylesheet" href="css/style.css" />
</head>
<!--
======================
PROYECTO WaDo Menorca
======================
@author Ivan Carreras Perez
@Version 0.1
-->

<body>
  <!--Header-->
  <!--
    Un header de toda la vida donde saldra para iniciar sesion y registrarse y se podra ver las actividads
-->
  <header>
    <div id="header_logo">
      <img class="logo" src="/Proyecto_wado/img/icono.png" alt="">
    </div>

    <div id="header_botones">
      <button>Register</button><button>Sign in</button>
    </div>
  </header>
  <!--Cuerpo-->
  <!--
    Aqui es donde ira el mapa y justo debajo las propuestas de actividades separadas en 2 
  - Las que propone la app 
  - Las que son empresas que proporcionan el servicio
-->
  <main>
    <div id="mapa">
      <!--La imagen sustituye al mapa de google maps es solo para hacerse a la idea de como quedara-->
      <img src="https://map.viamichelin.com/map/carte?map=viamichelin&z=10&lat=40.00127&lon=4.04087&width=550&height=382&format=png&version=latest&layer=background&debug_pattern=.*" alt="" />
    </div>
    <div id="filtros" class="whiteBoard-filtros">
      <?php
      include($_SERVER['DOCUMENT_ROOT'] . '/Proyecto_WaDo/FORMS/form_filter_activities_select.php');
      ?>
    </div>
    <hr />
    <div id="propuestas">
      <div class="whiteBoard">
        <h1>
          Actividades
        </h1>
        <hr />
        <div id="actividad"></div>
      </div>
      <div class="whiteBoard">
        <h1>
          Servicios
        </h1>
        <hr />
        <div id="servicio">

        </div>
      </div>
    </div>
  </main>
  <footer>Un footer muy currado</footer>
  <!--
    Consulta ajax para cuando el cliente recargue la pagina que se carguen las actividades que ofrece la web
  -->
  <script src="/proyecto_wado/js/ajax/ajax_actividades_select.js"></script>
  <script src="/proyecto_wado/js/ajax/ajax_servicio_select.js"></script>

</body>

</html>