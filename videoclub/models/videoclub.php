<?php

include 'cliente.php';

class videoclub {
  public $nombre;
  private $productos;
  private $num_productos;
  private $socios;
  private $num_socios;

  function __construct($nombre) {
    $this->nombre = $nombre;
    $this->productos = array();
    $this->num_productos = 0;
    $this->socios = array();
    $this->num_socios = 0;
  }

  private function incluir_producto($nuevo_producto) {
    $this->productos[$this->num_productos] = $nuevo_producto;
    echo "<p>Incluido soporte " . $this->num_productos;
    $this->num_productos++;
  }

  function incluir_dvd($tit,$precio,$idiomas,$pantalla) {
    $dvd_nuevo = new dvd($tit, $this->num_productos, $precio, $idiomas, $pantalla);
    $this->incluir_producto($dvd_nuevo);
  }

  function incluir_blue_ray($tit,$precio,$duracion) {
    $blue_ray_nueva = new blue_ray($tit, $this->num_productos, $precio, $duracion);
    $this->incluir_producto($blue_ray_nueva);
  }

  function incluir_juego($tit,$precio,$consola,$min_j,$max_j) {
    $juego_nuevo = new juego($tit, $this->num_productos, $precio, $consola, $min_j, $max_j);
    $this->incluir_producto($juego_nuevo);
  }

  function incluir_socio($nombre,$max_alquiler_concurrente=3) {
    $socio_nuevo = new cliente($nombre,$this->num_socios,$max_alquiler_concurrente);
    $this->socios[$this->num_socios]=$socio_nuevo;
    echo "<p>Incluido socio " . $this->num_socios;
    $this->num_socios++;
  }

  function listar_productos() {
    echo "<p>Listado de los " . $this->num_productos . " productos disponibles:";
    for ($i=0;$i<$this->num_productos;$i++) {
      echo "<p>";
      $this->productos[$i]->imprime_caracteristicas();
    }
  }

  function listar_socios() {
    echo "<p>Listado de $this->num_socios socios del videoclub:";
    for ($i=0;$i<$this->num_socios;$i++) {
      echo "<p>";
      $this->socios[$i]->imprime_caracteristicas();
    }
  }

  function alquila_a_socio($numero_socio,$numero_producto) {
    if (is_null($this->socios[$numero_socio])) {
      echo "<p>No existe ese socio";
    } elseif (is_null($this->productos[$numero_producto])) {
      echo "<p>No existe ese soporte";
    } else {
      $this->socios[$numero_socio]->alquila($this->productos[$numero_producto]);
    }
  }
}
