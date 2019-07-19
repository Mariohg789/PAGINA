<html>
   <head><title>Reservacion</title></head>
   
    <link rel="stylesheet" href="masterR.css"></head>
   
      <!--Menu-->
      <body class="hidden">
      <?php
            if (!isset($_SESSION["SessionActiva"])) {
                if($_SESSION["SessionActiva"]!= 1)
                header("Location:../Menu Principal/index.html");
            }
       ?>
        <div class="centrado" id="onload">
            <div class="lds-facebook"><div></div><div></div><div></div></div>
        </div>
        <header>
            <nav id="nav" class="nav1">
                <div class="contenedor-nav">
                    <div class="logo">
                        <img src="img/logo.png" alt="">
                    </div>
                    <div class="enlaces" id="enlaces">
                        <a href="#" id="enlace-inicio" class="btn-header">Login</a>
                        <a href="#" id="enlace-equipo" class="btn-header">Registrarse</a>
                        <a href="#" id="enlace-servicio" class="btn-header">Servicios</a>
                        <a href="#" id="enlace-trabajo" class="btn-header">Trabajos</a>
                        <a href="#" id="enlace-contacto" class="btn-header">Contacto</a>
                    </div>
                    <div class="icono" id="open">
                        <span>&#9776;</span>
                    </div>
                </div>
            </nav>
<!--Imagenes -->
      

<div id="avatar">
<img src="img/paq1.jpg">
<p>Descripcion</p>
</div>
<br>
<div id="avatar">
    <img src="img/paq2.jpg">
    <p>Descripcion</p>
</div>
<!--Contenido-->
      <div class="Registro">
        <h1>Reservacion</h1>
        <form name="Registro" method="post">
            <label for="HoraReserva">Seleccione la fecha</label>
            <br>
            <input type="date" name="dia">
            <br>
            <br>
          <label for="HoraReserva">Seleccione la hora</label>
          <br>
          <input type="time" name="hora">
          <br>
          <br>
          <input type="submit" name="Continuar" value="Continuar">
          <input type="submit" name="Regresar" value="Regresar">
        </form>
      </div>
   </body>
</html>							