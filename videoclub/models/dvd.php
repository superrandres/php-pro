<?php

class dvd extends soporte{

  public $idiomas_disponibles;

  private $formato_pantalla;


  function __construct($tit, $num, $precio, $idiomas, $pantalla){

    parent::__construct($tit,$num,$precio);

    $this->idiomas_disponibles = $idiomas;

    $this->formato_pantalla = $pantalla;

  }


  public function imprime_caracteristicas(){

    echo "Película en DVD:<br>";

    parent::imprime_caracteristicas();

    echo "<br>" . $this->idiomas_disponibles;

  }

}
