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

      }

      #Ingreso DE USUARIOS
      /*******************************************************/

      public function ingresoUsuarioModel($datosModel, $tabla){

            $stmt = Conexion::conectar()->prepare("SELECT usuario, password FROM $tabla WHERE usuario = :usuario");
            $stmt -> bindParam(":usuario", $datosModel["usuario"], PDO::PARAM_STR);
            $stmt -> execute();

            return $stmt->fetch();

      }

      public function vistaUsuariosModel($tabla){

            $stmt = Conexion::conectar()->prepare("SELECT id, usuario, password, email FROM $tabla");
            $stmt -> execute();
            //fetchAll obtiene todas las filas
            return $stmt->fetchAll();

      }


    }


 ?>
