<?php

include '../models/blue_ray.php';

$pelicula = new blue_ray("Los Otros", 22, 4.5, "115 minutos"); 

echo "<b>" . $pelicula->titulo . "</b>"; 

echo "<br>Precio: " . $pelicula->dame_precio_sin_iva() . " USD"; 

echo "<br>Precio IVA incluido: " . $pelicula->dame_precio_con_iva() . " USD";