<!DOCTYPE html>

<html>
	<head>...</head>

            <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
            <script src="../mensajes_alertas_js/mensajes.js"></script>
	<BODY>
		<?php
			require 'FuncionesBD.php';
			require '../ControladorSession.php'

			if (isset($_POST['btnLogin'])) {
				$correo = $_POST['txtUserName'];
				$password = $_POST['txtPassword'];
			
				if (array($correo,$password) == validarUsuario($correo)) 
				{
				
					echo '<script> bienvenido();</script>' ;
					
				}
				else
				{
					echo '<script> alert("Error al regresar");</script>' ;	
				}
				
							
			}
		?>	
	</BODY>	
</html>