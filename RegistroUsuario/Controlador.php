<!DOCTYPE html>

<html>
	<head>...</head>
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
            <script src="../mensajes_alertas_js/mensajes.js"></script>
	<BODY>
		<?php
			require 'FuncionesBD.php';
			if (isset($_POST['btnRegistrar'])) {
			$nombre = $_POST['txtNombre'];
			$apellido = $_POST['txtApellido'];
			$contrasena = $_POST['txtContrasena'];
			$contrasenaEncriptada = password_hash($contrasena,PASSWORD_DEFAULT);
			$direccion = $_POST['txtDireccion'];
			$telefono = $_POST['txtTelefono'];
			$correo = $_POST['txtCorreo'];
			$estado = $_POST['txtEstado'];
			$status = "Activo";
			

			if (validarUsuarioCorreo($correo) != $correo) 
			{
<<<<<<< HEAD
				insertarUsuario($nombre,$apellido,$contrasena,$direccion,$correo,$telefono,$estado,$status);
				echo'<script>resgitroCliente();</script>';
=======
				insertarUsuario($nombre,$apellido,$contrasenaEncriptada,$direccion,$correo,$telefono,$estado,$status);
>>>>>>> ba8b44e58268f2e63f967627a8d294e2a22b4596
			}
			else
			{
				echo '<script>errorCliente();</script>';
				
			}
			
			
		}
		?>	
	</BODY>	
</html>