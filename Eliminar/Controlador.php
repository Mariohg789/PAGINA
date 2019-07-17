<!DOCTYPE html>

<html>
	<head>...</head>

            
	<BODY>
		<?php
			require 'FuncionesBD.php';


			if (isset($_POST['btnAztualizarUsuario'])) {
				$id = $_POST['txtUserNameUpdate'];
				$estado = "Inactivo";
				if(actualizarEliminarUsuario($id,$estado)==1)
				{

				}
				
							
			}
		?>	
	</BODY>	
</html>