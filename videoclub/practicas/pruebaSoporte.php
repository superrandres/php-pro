<?php

include '../models/soporte.php';

$soporte1 = new soporte("Los Intocables", 22, 3); 

echo "<b>" . $soporte1->titulo . "</b>"; 

echo "<br>Precio: " . $soporte1->dame_precio_sin_iva() . " USD"; 

echo "<br>Precio IVA incluido: " . $soporte1->dame_precio_con_iva() . " USD"; 