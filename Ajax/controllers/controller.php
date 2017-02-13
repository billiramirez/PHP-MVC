<?php

class MvcController{

	#LLAMADA A LA PLANTILLA
	#-------------------------------------

			public function pagina(){

				include "views/template.php";

			}

	#ENLACES
	#-------------------------------------

	public function enlacesPaginasController(){

					if(isset( $_GET['action'])){

							$enlaces = $_GET['action'];

					}

				else{

					$enlaces = "index";
				}

		$respuesta = Paginas::enlacesPaginasModel($enlaces);

		include $respuesta;

	}


	#Registro de Usuarios
	/********************************************************************/
	public function registroUsuarioController(){

				if (isset($_POST['usuarioRegistro'])) {
							# code...
							if(preg_match('/^[a-zA-Z0-9]+$/', $_POST["usuarioRegistro"]) &&
			   					preg_match('/^[a-zA-Z0-9]+$/', $_POST["passwordRegistro"]) &&
			   					preg_match('/^[^0-9][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[@][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{2,4}$/', $_POST["emailRegistro"])){
								# code...
										$encriptar = crypt($_POST["passwordRegistro"], '$2a$07$asxx54ahjppf45sd87a5a4dDDGsystemdev$');
										$datosController = array('usuario' =>$_POST['usuarioRegistro'] ,
																							 'password' =>$encriptar,
																							 'email' =>$_POST['emailRegistro']);

										$respuesta = Datos::registroUsuarioModel($datosController, "usuarios");
										if ($respuesta == "success") {
												header("location:ok");
										}

										else {
												header("location:index.php");
										}
							}

				}

	}



		#VALIDAR USUARIO EXISTENTE
		#-----------------------------------------------------------------------------------------
		public function validarUsuarioController($validarUsuario){

					$datosController = $validarUsuario;

					$respuesta = Datos::validarUsuarioModel($datosController, "usuarios");
					if (count($respuesta["usuario"]) > 0){
						# code...
						echo 0;
					}
					else {
						echo 1;
					}

		}

		#VALIDAR email EXISTENTE
		#-----------------------------------------------------------------------------------------
		public function validarEmailController($validarEmail){

					$datosController = $validarEmail;

					$respuesta = Datos::validarEmailModel($datosController, "usuarios");
					if (count($respuesta["email"]) > 0){
						# code...
						echo 0;
					}
					else {
						echo 1;
					}

		}

}

?>
