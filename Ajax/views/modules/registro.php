<h1>REGISTRO DE USUARIO</h1>

<form method="post" onsubmit="return validarRegistro()">

	<label for="usuarioRegistro">Usuario <span></span></label>
	<input type="text" placeholder="Max 10 caracteres" maxlength="10" name="usuarioRegistro" id="usuarioRegistro" required>

	<label for="emailRegistro">Email</label>
	<input type="email" placeholder="Ingrese un email valido" name="emailRegistro" id="emailRegistro" required>

	<input type="submit" value="Enviar">

</form>

<?php

	$registro = new MvcController();
	$registro -> registroUsuarioController();

	if (isset($_GET["action"])) {

			if ($_GET["action"] == "ok") {
				# code...
				echo "Has sido registrado correctamente, <br /> por favor da click en el link de activación que ha sido enviado a tu dirección de correo";
			}
	}

 ?>
