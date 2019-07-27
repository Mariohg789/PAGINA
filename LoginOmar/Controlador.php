<!DOCTYPE html>

<html>
	<head>...</head>

            <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
            <script src="../mensajes_alertas_js/mensajes.js"></script>
	<BODY>
		<?php
			require 'FuncionesBD.php';
			require '../ControladorSession.php';

			if(isset($_POST['btnLogin'])) {
				$correo = $_POST['txtUserName'];
				$password = $_POST['txtPassword'];
			
				if(password_verify($password,validarUsuario($correo))) 
				{
					$correoValidado=buscarCorreo($correo);
					$sesion=iniciarSesion($correoValidado);
					echo '<script> bienvenido();</script>' ;
		
					
				}
				else
				{
					echo '<script> erroLogin();</script>';	
				}
				
							
			}
		?>	
	</BODY>	
</html>