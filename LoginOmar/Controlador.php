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
				
					echo '<script> alert("Bienvenido");</script>' ;
					echo "<META HTTP-EQUIV = 'REFRESH' CONTENT='0 ; URL= ../Menu Principal/Index.html'>";
					session_start();
					$_SESSION["SessionActiva"] = $_POST['txtUser'];
					
				}
				else
				{
					echo '<script> alert("Error al regresar");</script>' ;
					echo "<META HTTP-EQUIV = 'REFRESH' CONTENT='0 ; URL= ../Menu Principal/Index.html'>" ;	
				}
				
							
			}
		?>	
	</BODY>	
</html>