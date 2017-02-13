<?php
  /**
   *
   */
  class Conexion{

    public function conectar(){
        $link = new PDO("mysql:host=localhost;dbname=dbregistrar","root","");
        return $link;
    }
  }
  $a = new Conexion();
  $a -> conectar();


 ?>
