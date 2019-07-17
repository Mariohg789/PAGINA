<html>
    <head><title>Nissan LOGIN</title>
    <link rel="stylesheet" href="master.css"></head>
    <body>
        <?php
        require "FuncionesBD.php";
        $consulta=buscarId($_REQUEST['id']);
        $arrayAct=$consulta;

    ?>
        <div class="login-box">
            <img class="avatar" src="logo.jpg" alt="logo de Nissan">
            <h1>Eliminacion de Usuario</h1>
            <form action="Controlador.php" method="post">
                <!--Username-->
            <label for="idUserUpdate">Id de usuario</label> 
            <input type="text" placeholder="" name="txtIdUserUpdate" value="<?php echo $_REQUEST['id'];?>">
                  <!--Password-->
            <label for="">Nombre de usuario</label> 
            <input type="text" placeholder="" name="txtUserNameUpdate" value="<?php echo $arrayAct;?>">

            <input type="submit" value="Eliminar usuario" name="btnAztualizarUsuario">
            </form>
        </div>
    </body>
</html>