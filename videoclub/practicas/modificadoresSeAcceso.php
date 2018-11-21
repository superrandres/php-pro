<?php

include '../models/dado.php';

$mi_dado = new dado(); 


for ($i=0; $i < 30; $i++) { 

    $mi_dado->lanzar(); 

    echo '<br />Lanzamiento: ' . $mi_dado->puntos . ' puntos'; 

}