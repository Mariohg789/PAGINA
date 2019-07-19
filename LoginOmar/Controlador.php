<!DOCTYPE html>

<html>
	<head>...</head>

            <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
            <script src="../mensajes_alertas_js/mensajes.js"></script>
	<BODY>
		<?php
			require 'FuncionesBD.php';


			if (isset($_POST['btnLogin'])) {
				$correo = $_POST['txtUserName'];
				$password = $_POST['txtPassword'];
			
				if (array($correo,$password) == validarUsuario($correo)) 
				{
				
					echo '<script> bienvenido();</script>' ;
					session_start();
					$_SESSION["SessionActiva"] = buscarId($_POST['txtUserName']);
					
				}
				else
				{
					echo '<script> erroLogin();</script>' ;	
				}
				
							
			}
		?>	
	</BODY>	
</html>