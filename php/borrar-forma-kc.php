<?php
// Inicializamos nuestras variables
$i=1; //contador de línea que se está leyendo
$numlinea = 2; //línea que se desea borrar
$aux = array();
 
// Abrimos el archivo
$archivo = fopen('data.json','r');
 
// Hacemos un ciclo y vamos recogiendo linea por linea del archivo.
while ($linea = fgets($archivo))
{
 
  if ($i != $numlinea)  // Si la linea que deseamos eliminar no es esta 
  {
    $aux[] = $linea; // La agregamos a nuestra variable auxiliar
  }
 
  // Incrementamos nuestro contador de lineas
  $i++;
}
 
// Cerramos el archivo.
fclose($archivo);
 
// Convertimos el arreglo(array) en una cadena de texto (string) para guardarlo.
$aux = implode($aux, '');
 
// Reemplazamos el contenido del archivo con la cadena de texto (sin la linea eliminada)
file_put_contents('data.json', $aux);
?>