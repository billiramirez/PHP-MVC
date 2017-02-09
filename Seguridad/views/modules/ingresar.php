<h1>INGRESAR</h1>

	<form method="post">

		<input type="text" placeholder="Usuario" name="usuarioIngreso" required>

		<input type="password" placeholder="Contraseña" name="passwordIngreso" required>

		<input type="submit" value="Enviar">

	</form>

	<?php
	$ingreso = new MvcController();
	$ingreso -> ingresoUsuarioController();

		if (isset($_GET["action"])) {

				if ($_GET["action"] == "fallo") {
					# code...
					echo "Fallo al Ingresar";
				}
				if ($_GET["action"] == "fallo3intentos") {
					# code...
					echo "Ha fallado 3 veces para ingresar, favor llenar el captcha";
				}
		}

	 ?>
