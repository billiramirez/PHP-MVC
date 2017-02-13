<?php

class Paginas{

	public function enlacesPaginasModel($enlaces){


		if($enlaces == "ingresar"){

			$module =  "views/modules/".$enlaces.".php";

		}

		else if($enlaces == "index"){

			$module =  "views/modules/registro.php";

		}
		else if($enlaces == "ok"){

			$module =  "views/modules/registro.php";

		}
	
		else{

			$module =  "views/modules/registro.php";

		}

		return $module;

	}

}

?>
