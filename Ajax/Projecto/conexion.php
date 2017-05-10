<?php
  /**
   *
   */
  class Conexion{

    public function conectar(){
        $link = new PDO("mysql:host=localhost;dbname=codigosdb","root","");
        return $link;
    }
  }
  $a = new Conexion();
  $a -> conectar();


 ?>
