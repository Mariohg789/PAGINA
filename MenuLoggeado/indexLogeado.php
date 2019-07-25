<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Página web completa</title>
    <link rel="stylesheet" href="estilosLogeado.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU"
        crossorigin="anonymous">
</head>

    <?php
        session_start();
        if (!isset($_SESSION["SesionActiva"])) {
           
            header("Location: ../Menu Principal/Index.html"); 
        }
        
    ?>

<body class="hidden">
    <div class="centrado" id="onload">
        <div class="lds-facebook"><div></div><div></div><div></div></div>
    </div>
    <header>
        <nav id="nav" class="nav1">
            <div class="contenedor-nav">
                <div class="logo">
                    <img src="img/logo.png" alt="">
                </div>
                <div class="textoHeader">
                    <div class="dropdown">
                            <button class="dropbtn"><img src = 'img/usuario.png'></button>
                            <div class = "dropdown-content">
                                <a href="../VehiculoInterfaz/vehiculo.php">Vehiculo</a>
                                <a href="">Modificar Cuenta</a>
                                <a href="">Cerrar Sesion</a>

                            </div>
                    </div>
                </div>
               
                </div>
                <div class="icono" id="open">
                    <span>&#9776;</span>
                </div>
            </div>
        </nav>
        <div class="textos">
            <h1>Marvan Mechanics</h1>
            <h2>Servicios Postventa</h2>
        </div>
    </header>
    <main>
        <section class="team contenedor" id="equipo">
            <h3>Experiencia Nissan</h3>
            <p class="after">No te arrepentiras</p>
            <div class="card">
                <div class="content-card">
                    <div class="people">
                        <a href="https://nissan.com.mx/configurador/" target="_blank"><img src="img/Nissan1.jpg" alt=""></a>  
                    </div>
                    <div class="texto-team">
                        <h4>¿Quieres estrenar un Nissan?</h4>
                        <p>Click en la imagen</p>
                    </div>
                </div>
                <div class="content-card">
                    <div class="people">
                        <a href="https://nissan.com.mx/midnight-edition/" target="_blank"><img src="img/Nissan2.jpg" alt=""></a>
                    </div>
                    <div class="texto-team">
                        <h4>¿Ya conoces la nueva Midnight Edition de Nissan?</h4>
                        <p>Atreveté a verla!</p>
                    </div>
                </div>
                <div class="content-card">
                    <div class="people">
                        <a href="https://www.nissan.com.mx/configurador/prueba-de-manejo/" target="_blank"><img src="img/Nissan3.jpg" alt=""></a>
                    </div>
                    <div class="texto-team">
                        <h4>Quieres probar uno de nuestros coches?</h4>
                        <p>Agenda tu cita hoy mismo</p>
                    </div>
                </div>
            </div>
        </section>
        <section class="about" id="servicio">
            <div class="contenedor">
                <h3>Nuestros servicios-postventa</h3>
                <p class="after">Siempre mejorando para ti</p>
                <div class="servicios">                   
                    <div class="caja-servicios">
                        <a href="servicios.html"><img src="img/responsive.png" alt=""></a>
                        <h4>Conoces nuestros servicios-postventa?</h4>
                        <p>Agenda HOY mismo</p>
                    </div>

                </div>
            </div>
        </section>
        
    </main>
    <footer id="contacto">
        <div class="footer contenedor">
            <div class="marca-logo">
                <img src="img/logo.png" alt="">
            </div>
            <div class="iconos">
                <a href="https://www.youtube.com/user/NissanMx1"><i class="fab fa-youtube"></i></a>
                <a href="https://www.facebook.com/nissanmx/?ref=br_rs"><i class="fab fa-facebook-square"></i></a>
                <a href="https://github.com/MDGALNAREZ/PAGINA"><i class="fab fa-github"></i></a>
            </div>
            <p>Tienes preguntas? Contactanos</p>
        </div>

    </footer>
    <script src="js/jquery.js"></script>
    <script src="js/main.js"></script>
    <script src="js/filtro.js"></script>
</body>
</html>