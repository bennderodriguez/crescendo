<?php
/*echo '
{"data" : [{"Producto" : "8541", "Descripcion" : "GELATINA FRESA AGUA 120 GRS (50)", "Cantidad" : " 1", "Precio" : " 395.00", "Porcentaje" : " 0.00", "Importe" : " 395.00","Neto" : " 395.00"},{"Producto" : "8553", "Descripcion" : "GELATINA UVA 120 GRS (50)", "Cantidad" : " 1", "Precio" : " 395.00", "Porcentaje" : " 0.00", "Importe" : " 395.00","Neto" : " 395.00"},{"Producto" : "8552", "Descripcion" : "GELATINA PIÑA 140 GRS (50)", "Cantidad" : " 1", "Precio" : " 395.00", "Porcentaje" : " 0.00", "Importe" : " 395.00","Neto" : " 395.00"},{"Producto" : "13309", "Descripcion" : "VELAD FRESCA LISO (20)", "Cantidad" : " 1", "Precio" : " 189.66", "Porcentaje" : " 0.00", "Importe" : " 189.66","Neto" : " 189.66"},{"Producto" : "13398", "Descripcion" : "VELAD IMAGEN SN J TADEO PARAF(12)", "Cantidad" : " 1", "Precio" : " 215.52", "Porcentaje" : " 0.00", "Importe" : " 215.52","Neto" : " 215.52"},{"Producto" : "13399", "Descripcion" : "VELAD IMAGEN VIRGEN GPE PARAF(12", "Cantidad" : " 1", "Precio" : " 215.52", "Porcentaje" : " 0.00", "Importe" : " 215.52","Neto" : " 215.52"},{"Producto" : "13401", "Descripcion" : "VELAD IMAGEN SAG CORAZON PARAF (12", "Cantidad" : " 1", "Precio" : " 215.52", "Porcentaje" : " 0.00", "Importe" : " 215.52","Neto" : " 215.52"}] }
';*/

// Iremos leyendo línea a línea del fichero.txt hasta llegar al fin (feof($fp))

// fichero.txt tienen que estar en la misma carpeta que el fichero php

// fichero.txt es un archivo de texto normal creado con notepad, por ejemplo.

//include 'borrar-forma-kc.php';

$fp = fopen("data.json", "r");

echo '{"data" : ';
while(!feof($fp)) {

$linea = fgets($fp);

echo $linea ;

}

echo '}';
fclose($fp);

?>