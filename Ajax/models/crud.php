<?php
require_once "conexion.php";
    /**
     *
     */
    class Datos extends Conexion{

      #REGISTRO DE USUARIOS
      /*******************************************************/
      public function registroUsuarioModel($datosModel, $tabla)
      {
        # code...
            date_default_timezone_set('America/Managua');
            $login_date = date("Y/m/d");


            $stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(username, email, login_date ) VALUES
           (:username,:email,:login_date)");

            $stmt -> bindParam(":username", $datosModel["usuario"], PDO::PARAM_STR);
            $stmt -> bindParam(":email", $datosModel["email"], PDO::PARAM_STR);
            $stmt -> bindParam(":login_date", $login_date, PDO::PARAM_STR);


            if ($stmt ->  execute()) {
              # code...
              return "success";
            }
            else {
              return "Error";
            }

            $stmt -> close();

      }


        #Validar Usuario EXISTENTE
        #===============================================================================
        public function validarUsuarioModel($datosModel,$tabla){

          $stmt = Conexion::conectar()->prepare("SELECT username FROM $tabla WHERE username = :username");
          $stmt->bindParam(":username", $datosModel, PDO::PARAM_STR);
          $stmt->execute();

          return $stmt->fetch();

          $stmt->close();

        }

        #Validar email EXISTENTE
        #===============================================================================
        public function validarEmailModel($datosModel,$tabla){

          $stmt = Conexion::conectar()->prepare("SELECT email FROM $tabla WHERE email = :email");
          $stmt->bindParam(":email", $datosModel, PDO::PARAM_STR);
          $stmt->execute();

          return $stmt->fetch();

          $stmt->close();

        }




    }


 ?>
