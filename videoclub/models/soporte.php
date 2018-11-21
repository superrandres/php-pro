<?php
define('IVA', '14');


class soporte {

  public $titulo;
  protected $numero;
  private $precio;

  function __construct($tit, $num, $precio) {
    $this->titulo = $tit;
    $this->numero = $num;
    $this->precio = $precio;
  }


  public function dame_precio_sin_iva() {
    return $this->precio;
  }

  public function dame_precio_con_iva() {
    return $this->precio * (1 + IVA/100);
  }

  public function dame_numero_identificacion() {
    return $this->numero;
  }

  public function imprime_caracteristicas() {
    echo $this->titulo;
    echo "<br />" . $this->precio . " (IVA no incluido)";
  }

  function imprime_caracteristicas() {
    echo "<p><b>Cliente " . $this->numero . ":</b> " . $this->nombre;
    echo "<br>Alquileres actuales: " . $this->num_soportes_alquilados;
  }

}
