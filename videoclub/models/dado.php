<?php

class dado{

  public $puntos;


  function __construct(){

    srand((double)microtime() * 1000000);

  }


  public function lanzar(){

    $this->puntos = $randval = rand(1, 6);

  }

} 
