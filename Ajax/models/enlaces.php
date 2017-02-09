<?php

class Paginas{

	public function enlacesPaginasModel($enlaces){


		if($enlaces == "ingresar" || $enlaces == "usuarios" || $enlaces == "editar" || $enlaces == "salir"){

			$module =  "views/modules/".$enlaces.".php";

		}

		else if($enlaces == "index"){

			$module =  "views/modules/registro.php";

		}
		else if($enlaces == "ok"){

			$module =  "views/modules/registro.php";

		}
		else if($enlaces == "fallo"){ //Si la variable action retorna "fallo" redirigir a ingresar.php

			$module =  "views/modules/ingresar.php";

		}
		else if($enlaces == "fallo3intentos"){ //Si la variable action retorna "fallo" redirigir a ingresar.php

			$module =  "views/modules/ingresar.php";

		}
		else if($enlaces == "cambio"){

			$module =  "views/modules/usuarios.php";

		}


		else{

			$module =  "views/modules/registro.php";

		}

		return $module;

	}

}

?>
