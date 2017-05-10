<?php
require_once "conexion.php";
class prueba extends Conexion{

  public function proceso()
  {
        $idTipoCodigo = 1;
        $tabla = "codigos";

        date_default_timezone_set('America/Managua');
        $fecha = date("Y-m-d H:i:s");
        $dias = 5;
        $usuarios = 2;
        $cadena = $fecha."".$dias."".$usuarios;
        $codigo = crypt($cadena, '$2a$07$asxx54ahjppf45sd87a5a4dDDGsystemdev$');


        $stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(codigo, idTipoCodigo) VALUES
        (:codigo,:idTipoCodigo)");

        $stmt -> bindParam(":codigo", $codigo, PDO::PARAM_STR);
        $stmt -> bindParam(":idTipoCodigo", $idTipoCodigo, PDO::PARAM_INT);
        // $stmt -> bindParam(":email", $datosModel["email"], PDO::PARAM_STR);

        if ($stmt -> execute()) {
          # code...
          return "success";
          // echo "Insertado";
          }
        else {
          return "Error";
          // echo "Fail";
            }

        $stmt -> close();
    }
  }

  $prueba2 =  new prueba();
  if ($prueba2::proceso() == "success") {
    # code...
    echo "triunfo";
  }
  else {
    echo "fail";

  }
?>
