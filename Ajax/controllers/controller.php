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


							if(preg_match('/^[a-zA-Z0-9]+$/', $_POST["usuarioRegistro"]) &&
			   					preg_match('/^[^0-9][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[@][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{2,4}$/', $_POST["emailRegistro"])){
								# code...
										// $encriptar = crypt($_POST["passwordRegistro"], '$2a$07$asxx54ahjppf45sd87a5a4dDDGsystemdev$');
										$datosController = array('usuario' =>$_POST['usuarioRegistro'] ,
																							 'email' =>$_POST['emailRegistro']);

										$respuesta = Datos::registroUsuarioModel($datosController, "usuario");
										if ($respuesta == "success"){
											/*****************************PARAMETROS DEL CORREO*********************************************/
											include("sendMail.php");
											require_once "vendor/autoload.php";
											$encriptarEmail = crypt($_POST["emailRegistro"], '$2a$07$asxx54ahjppf45sd87a5a4dDDGsystemdev$');

											 $message = "Hi ".$_POST['usuarioRegistro']." Por favor haz click aqui para activar tu cuenta:
                        http://www.wimixsolutions.com/verify.php?email=".$encriptarEmail." ";


												$to       =   $_POST['emailRegistro'];
												$subject  =   "Registrarse | Verificacion";
												// $message  =   "hello <i>how are you.</i>";
												$name     =   $_POST['usuarioRegistro'];
												$mailsend =   sendmail($to,$subject,$message,$name);
												if($mailsend==1){
													echo '<h2>email sent.</h2>';
												}
												else{
													echo '<h2>Hay problemas con el correo.</h2>';
												}
												/************************************************************************************/
												header("location:ok");

										}

										else {

												header("location:index.php");
												echo "ERror";
										}
							}

				}

	}



		#VALIDAR USUARIO EXISTENTE
		#-----------------------------------------------------------------------------------------
		public function validarUsuarioController($validarUsuario){

					$datosController = $validarUsuario;

					$respuesta = Datos::validarUsuarioModel($datosController, "usuario");
					if (count($respuesta["username"]) > 0){
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

					$respuesta = Datos::validarEmailModel($datosController, "usuario");
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
