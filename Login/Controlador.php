<!DOCTYPE html>

<html>
	<head>...</head>

            <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
            <script src="../JS/mensajes.js"></script>
	<BODY>
		<?php
			require 'FuncionesBD.php';


			if (isset($_POST['btnLogin'])) {
				$correo = $_POST['txtUserName'];
				$password = $_POST['txtPassword'];
			
				if (array($correo,$password) == validarUsuario($correo)) 
				{
				
					echo '<script> bienvenido();</script>' ;
					
				}
				else
				{
					echo '<script> erroLogin();</script>' ;	
				}
				
							
			}
		?>	
	</BODY>	
</html>