<?php

  #codigo imperativo

  $automovil1 = (object)["marca"=>"toyota","modelo"=>"Corolla"];
  $automovil2 = (object)["marca"=>"Hyundai","modelo"=>"Accent Vision"];

  function mostrar($automovil){
    echo "<p>Hola soy un $automovil->marca, modelo $automovil->modelo</p>";
  }

  mostrar($automovil1);
 ?>
