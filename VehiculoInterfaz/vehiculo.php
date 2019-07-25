<html>
<head><title>Registro Vehiculo</title></head>
<link rel="stylesheet" href="master.css"></head>
<body>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Página web completa</title>
        <link rel="stylesheet" href="master.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU"
            crossorigin="anonymous">
    </head>  
    <?php
        session_start();
        if (!isset($_SESSION["SesionActiva"])) {
           
            header("Location: ../Menu Principal/Index.html"); 
            
        }
    ?>
    <header>
        <nav id="nav" class="nav1">
            <div class="contenedor-nav">
                <div class="logo">
                    <a href="../Menu Principal/Index.html"><img src="img/logo.png" alt=""></a>
                </div>
                <div class="enlaces" id="enlaces">
                    <a href="../LoginOmar/Login.html" id="enlace-inicio" class="btn-header">Login</a>
                    <a href="../RegistroUsuario/Registro.html" id="enlace-equipo" class="btn-header">Registrarse</a>
                    <a href="../Servicios/servicios.html" id="enlace-servicio" class="btn-header">Servicios</a>
                    <a href="#" id="enlace-trabajo" class="btn-header">Trabajos</a>
                    <a href="#" id="enlace-contacto" class="btn-header">Contacto</a>
                </div>
                <div class="icono" id="open">
                    <span>&#9776;</span>
                </div>
            </div>
        </nav>
    <div class = "GifCarro">
        <img class="avatar" src="img/Carro.gif" alt="imagen">    
    </div>
<div class="Vehiculo">
<form name="Vehiculo" method="post">
<label for="Serie">Numero de serie</label>
<input type="text" name="txtNumeroSerie" placeholder="JHLRD7787********">
<br>
<label for="Modelo">Modelo del Vehiculo</label>
<input type="text" name="txtModelo" placeholder="Example">
<br>
<label for="Año">Anio</label>
<input type="text" name="txtAnio" placeholder="2019">
<br>
<label for="Marca">Marca</label>
<input type="text" name="txtMarca" placeholder="Audi">
<br>
<label for="Version">Version</label>
<input type="text" name="txtVersion" placeholder="ETC">
<br>
<label for="Placa">Numero de placas</label>
<input type="text" name="txtPlacas" placeholder="ADJ85">
<br>
<input type="submit" name="btnAgregarVehiculo" value="Ingresar Vehiculo">
</form>
</div>
</body>
</html>
