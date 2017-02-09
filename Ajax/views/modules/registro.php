<h1>REGISTRO DE USUARIO</h1>

<form method="post" onsubmit="return validarRegistro()">

	<label for="usuarioRegistro">Usuario <span></span></label>
	<input type="text" placeholder="Max 6 caracteres" maxlength="6" name="usuarioRegistro" id="usuarioRegistro" required>

	<label for="passwordRegistro">Password</label>
	<input type="password" placeholder="Minimo 6 caracteres, incluya numero(s) y una mayuscula" name="passwordRegistro" id="passwordRegistro"
		pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}" required>

	<label for="emailRegistro">Email</label>
	<input type="email" placeholder="Ingrese un email valido" name="emailRegistro" id="emailRegistro" required>

	<p style="text-align:center"><input type="checkbox" id="terminos"><a href="#">Acepta Terminos y condiciones </a></p>

	<input type="submit" value="Enviar">

</form>

<?php

	$registro = new MvcController();
	$registro -> registroUsuarioController();

	if (isset($_GET["action"])) {

			if ($_GET["action"] == "ok") {
				# code...
				echo "Registro exitoso";
			}
	}

 ?>
