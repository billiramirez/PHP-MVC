<?php

		session_start();
		if (!$_SESSION["validar"]) {
			# code...
			header("location:index.php?action=ingresar");
			exit();
		}


 ?>


<h1>USUARIOS</h1>

	<table border="1">

		<thead>

			<tr>
				<th>Usuario</th>
				<th>Contraseña</th>
				<th>Email</th>
				<th></th>
				<th></th>

			</tr>

		</thead>

		<tbody>

			<?php
			$vista = new MvcController();
			$vista -> vistaUsuariosController();
			$vista -> borrarUsuarioController();


		  ?>

		</tbody>

	</table>


	<?php

if(isset($_GET["action"])){

	if($_GET["action"] == "cambio"){

		echo "Cambio Exitoso";

	}

}

?>
