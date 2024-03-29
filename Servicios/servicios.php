<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Página web completa</title>
    <link rel="stylesheet" href="EstilosServicios.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU"
        crossorigin="anonymous">
</head>

<body class="hidden">
        <form action="Controlador.php" method="POST">
            <div class="centrado" id="onload">
                <div class="lds-facebook"><div></div><div></div><div></div></div>
            </div>
            <header>
                <nav id="nav" class="nav1">
                    <div class="contenedor-nav">
                        <div class="logo">
                            <a href="../Menu Principal/index.html"><img src="img/logo.png" alt=""></a> 
                        </div>
                        <div class="enlaces" id="enlaces">
                            <a href="../LoginOmar/Login.html" id="enlace-inicio" class="btn-header">Login</a>
                            <a href="../RegistroUsuario/Registro.html" id="enlace-equipo" class="btn-header">Registrarse</a>
                            <a href="#" id="enlace-trabajo" class="btn-header">Trabajos</a>
                            <a href="#" id="enlace-contacto" class="btn-header">Contacto</a>
                        </div>
                        <div class="icono" id="open">
                            <span>&#9776;</span>
                        </div>
                    </div>
                </nav>
                
                <section class="work contenedor" id="trabajo">
       
                    <div class="botones-work">
                    
                    </div>
                    <div class="galeria-work">
                        <div class="cont-work programacion">
                            <div class="img-work">
        
                                    <div class="hvrbox">
                                        <img src="img/cambioLlanta.jpg"  class="hvrbox-layer_bottom" >
                                        <div class="hvrbox-layer_top">
                                            <div class="hvrbox-text">
                                                El paquete Express contine los servicios: 
                                                Cambio de aceite y filtro, 
                                                Remplazo de focos exteriores, 
                                                Cambio de llantas.
                                            </div>
                                        </div>
                                    </div>
                        </div>
                            <div class="textos-work">
                                <h4>Paquete Express</h4>
                            </div>
                            <input type="button" value="Reservame" class = "botonLlanta" name="btnPaquete1" >
                            
                        </div>
                        <div class="cont-work programacion">
                            <div class="img-work">
                                    <div class="hvrbox">
                                        <img src="img/cambioAceite.jpg"  class="hvrbox-layer_bottom">
                                        <div class="hvrbox-layer_top">
                                            <div class="hvrbox-text">
                                                El paquete Diagnostico contine los servicios: 
                                                Diagnostico y cambio de batería, 
                                                Cambio fitro de aire y 
                                                Remplazo de plumas del limpia parabrisas.
                                            </div>
                                        </div>
                                    </div>
                            </div>
                            <div class="textos-work">
                                <h4>Paquete Diagnostico</h4>
                            </div>
                            <input type="button" value="Reservame" class = "botonLlanta">
                        </div>

                        <div class="cont-work programacion">
                            <div class="img-work">
                                    <div class="hvrbox">
                                        <img src="img/lavadoMotor.jpg"  class="hvrbox-layer_bottom">
                                        <div class="hvrbox-layer_top">
                                            <div class="hvrbox-text">
                                                El paquete Básico contine los servicios: 
                                                Cambio de llantas, 
                                                Remplazo de focos exteriores, 
                                                Cambio de llantas.
                                            </div>
                                        </div>
                                    </div>                
                            </div>
                            
                            <div class="textos-work">
                                <h4>Paquete Básico</h4>
                            </div>
                            <input type="button" value="Reservame" class = "botonLlanta">
                        </div>
                        <div class="cont-work diseño">
                            <div class="img-work">
                                    <div class="hvrbox">
                                        <img src="img/alineacion.jpg"  class="hvrbox-layer_bottom">
                                        <div class="hvrbox-layer_top">
                                            <div class="hvrbox-text">
                                                El paquete Premium contine los servicios: 
                                                Cambio de aceite, 
                                                Alineacion y balanceo y 
                                                Cambio de llantas, 
                                                Remplazo de plumas de limpia parabrisas y 
                                                Diagnostico y cambio de batería.
                                            </div>
                                        </div>
                                    </div>
                                                        
                            </div>
                            <div class="textos-work">
                                <h4>Paquete Premium</h4>
                            </div>
                            <input type="button" value="Reservame" class = "botonLlanta">
                        </div>
                        <div class="cont-work diseño">
                            <div class="img-work">
                                    <div class="hvrbox">
                                        <img src="img/balanceo.jpg"  class="hvrbox-layer_bottom">
                                        <div class="hvrbox-layer_top">
                                            <div class="hvrbox-text">Aqui va la descripcion que vam a extraer de la base de datos</div>
                                        </div>
                                    </div>        
                            </div>
                            <div class="textos-work">
                                <h4>Balanceo</h4>
                            </div>
                            <input type="button" value="Reservame" class = "botonLlanta">
                        </div>
                        <div class="cont-work diseño">
                            <div class="img-work">
                                        <div class="hvrbox">
                                            <img src="img/banda.jpg"  class="hvrbox-layer_bottom">
                                            <div class="hvrbox-layer_top">
                                                <div class="hvrbox-text">Aqui va la descripcion que vam a extraer de la base de datos</div>
                                            </div>
                                        </div>
                            
                            </div>
                            <div class="textos-work">
                                <h4>Cambio de banda</h4>
                            </div>
                            <input type="button" value="Reservame" class = "botonLlanta">
                        </div>
                        <div class="cont-work marketing">
                            <div class="img-work">
                                        <div class="hvrbox">
                                            <img src="img/frenos.jpg"  class="hvrbox-layer_bottom">
                                            <div class="hvrbox-layer_top">
                                                <div class="hvrbox-text">Aqui va la descripcion que vam a extraer de la base de datos</div>
                                            </div>
                                        </div>
                                
                            </div>
                            <div class="textos-work">
                                <h4>Reparacion de frenos</h4>
                            </div>
                            <input type="button" value="Reservame" class = "botonLlanta">
                        </div>
                        <div class="cont-work marketing">
                            <div class="img-work">
                                        <div class="hvrbox">
                                            <img src="img/reparacionLlanta.jpg"  class="hvrbox-layer_bottom">
                                            <div class="hvrbox-layer_top">
                                            <div class="hvrbox-text">Aqui va la descripcion que vam a extraer de la base de datos</div>
                                        </div>
                                        </div>
                                                                
                            </div>
                            <div class="textos-work">
                                <h4>Reparacion de llantas</h4>
                            </div>
                            <input type="button" value="Reservame" class = "botonLlanta">
                        </div>
                        <div class="cont-work marketing">
                            <div class="img-work">
                                        <div class="hvrbox">
                                            <img src="img/mofle.jpg"  class="hvrbox-layer_bottom">
                                            <div class="hvrbox-layer_top">
                                                <div class="hvrbox-text">Aqui va la descripcion que vam a extraer de la base de datos</div>
                                            </div>
                                        </div>
                            
                            </div>
                            <div class="textos-work">
                                <h4>Reparacion de mofle</h4>
                            </div>
                            <input type="button" value="Reservame" class = "botonLlanta">
                        </div>
                        <div class="cont-work marketing">
                                <div class="img-work">
                                        <div class="hvrbox">
                                                <img src="img/vidrio.jpg"  class="hvrbox-layer_bottom">
                                                <div class="hvrbox-layer_top">
                                                    <div class="hvrbox-text">Aqui va la descripcion que vam a extraer de la base de datos</div>
                                                </div>
                                            </div>
                                    
                                </div>
                                <div class="textos-work">
                                    <h4>Reparacion de vidrio</h4>
                                </div>
                                <input type="button" value="Reservame" class = "botonLlanta">
                            </div>
                        <div class="cont-work marketing">
                                <div class="img-work">
                                            <div class="hvrbox">
                                                <img src="img/pintura.jpg"  class="hvrbox-layer_bottom">
                                                <div class="hvrbox-layer_top">
                                                    <div class="hvrbox-text">Aqui va la descripcion que vam a extraer de la base de datos</div>
                                                </div>
                                            </div>
                                    </div>
                                    <div class="textos-work">
                                        <h4>Cambio pintura</h4>
                                    </div>
                                    <input type="button" value="Reservame" class = "botonLlanta">
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
                    <p>La pasión e innovación es lo que nos distingue del resto</p>
                </div>

            </footer>
            <script src="js/jquery.js"></script>
            <script src="js/main.js"></script>
            <script src="js/filtro.js"></script>
        </form>
    </body>
</html>