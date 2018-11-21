<?php

include_once 'soporte.php';

class blue_ray extends soporte{

  private $duracion;


  function __construct($tit, $num, $precio, $duracion){

    parent::__construct($tit, $num, $precio);

    $this->duracion = $duracion;

  }


  public function imprime_caracteristicas(){

    echo "Película en BlueRay:<br>";

    parent::imprime_caracteristicas();

    echo "<br>Duración: " . $this->duracion;

  }

}
