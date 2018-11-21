<?php
class cliente {

  public $nombre;
  private $numero;
  private $soportes_alquiladas;
  private $num_soportes_alquilados;
  private $max_alquiler_concurrente;

  function __construct($nombre, $numero, $max_alquiler_concurrente = 3) {
    $this->nombre=$nombre;
    $this->numero=$numero;
    $this->soportes_alquilados = [];
    $this->num_soportes_alquilados = 0;
    $this->max_alquiler_concurrente = $max_alquiler_concurrente;
    //inicializo las casillas del array de alquiler a "null"
    //un valor "null" quiere decir que el no hay alquiler en esa casilla
    for ($i = 0; $i < $max_alquiler_concurrente; $i++) {
      $this->soportes_alquilados[$i] = null;
    }
  }

  function dame_numero() {
    return $this->numero;
  }

  function tiene_alquilado($soporte){
    for ($i = 0; $i < $this->max_alquiler_concurrente; $i++) {
      if (!is_null($this->soportes_alquilados[$i])) {
        if($this->soportes_alquilados[$i]->dame_numero_identificacion() == $soporte->dame_numero_identificacion()) {
          return true;
        }
      }
    }
    //si estoy aquí es que no tiene alquilado ese soporte
    return false;
  }

  function alquila($soporte) {
    if ($this->tiene_alquilado($soporte)) {
      echo "<p>El cliente ya tiene alquilado el soporte <b>" . $soporte->titulo . "</b>";
    } elseif ($this->num_soportes_alquilados == $this->max_alquiler_concurrente) {
      echo "<p>Este cliente tiene " . $this->num_soportes_alquilados . " elementos alquilados. ";
      echo "No puede alquilar más en este videoclub hasta que no devuelva algo";
    } else {
      //miro en el array a ver donde tengo sitio para meter el soporte
      $cont = 0;
      while (!is_null($this->soportes_alquilados[$cont])){
        $cont++;
      }
      $this->soportes_alquilados[$cont] = $soporte;
      $this->num_soportes_alquilados++;
      echo "<p><b>Alquilado soporte a: </b>" . $this->nombre . "<br>";
      $soporte->imprime_caracteristicas();
    }
  }

  function devuelve($identificador_soporte) {
    if ($this->num_soportes_alquilados==0) {
      echo "<p>Este cliente no tiene alquilado ningún elemento";
      return false;
    }

    //recorro el array a ver si encuentro el soporte con identificador recibido
    for ($i=0;$i<$this->max_alquiler_concurrente;$i++) {
      if (!is_null($this->soportes_alquilados[$i])){
        if($this->soportes_alquilados[$i]->dame_numero_identificacion() == $identificador_soporte){
          echo "<p>Soporte devuelto: " . $identificador_soporte;
          echo " <b>" . $this->soportes_alquilados[$i]->titulo . "</b>";
          $this->soportes_alquilados[$i]=null;
          $this->num_soportes_alquilados--;
          return true;
        }
      }
    }

    //si estoy aqui es que el cliente no tiene ese soporte alquilado
    echo "<p>No se ha podido encontrar el soporte en los alquileres de este cliente";
    return false;
  }

  function lista_alquileres() {
    if ($this->num_soportes_alquilados==0) {
      echo "<p>Este cliente no tiene alquilado ningún elemento";
    } else {
      echo "<p><b>El cliente tiene " . $this->num_soportes_alquilados . " soportes alquilados</b>";

      //recorro el array para listar los elementos que tiene alquilados
      for ($i=0; $i<$this->max_alquiler_concurrente; $i++) {
        if (!is_null($this->soportes_alquilados[$i])) {
          echo "<p>";
          $this->soportes_alquilados[$i]->imprime_caracteristicas();
        }
      }
    }
  }

  function __destruct(){
    echo '<br />destruido: ' . $this->nombre;
  }

}
