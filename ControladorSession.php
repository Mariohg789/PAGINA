<!DOCTYPE html>

<html>
	<head>...</head>
<BODY>
    <?php
    function iniciarSesion($pSesion)
    {
        session_start();
        $_SESSION['SesionActiva'] = $pSesion;
        return $_SESSION['SesionActiva'];
    }

    function cerrarSesion()
    {
        session_destroy();
    }

    ?>

</BODY>
</html>