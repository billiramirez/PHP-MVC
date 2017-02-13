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
            $stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(usuario, password, email) VALUES
           (:usuario,:password,:email)");

            $stmt -> bindParam(":usuario", $datosModel["usuario"], PDO::PARAM_STR);
            $stmt -> bindParam(":password", $datosModel["password"], PDO::PARAM_STR);
            $stmt -> bindParam(":email", $datosModel["email"], PDO::PARAM_STR);

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

          $stmt = Conexion::conectar()->prepare("SELECT usuario FROM $tabla WHERE usuario = :usuario");
          $stmt->bindParam(":usuario", $datosModel, PDO::PARAM_STR);
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
