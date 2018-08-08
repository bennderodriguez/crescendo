<?php header('Access-Control-Allow-Origin: *'); ?>
<?php
$errorMSG = "";
//echo $nameBL= "backlog" . date("Y-m-d h:i:sa") . ".json";
// tipomov
if (empty($_POST["jsonRespuestas"])) {
    $errorMSG = "jsonRespuestas is required ";
} else {
    $send_data = $_POST["jsonRespuestas"];
}
// redirect to success page
if ($errorMSG == "") {
    //echo "success";
    //save_data_json($send_data);
    save_data_json_backlog($send_data);
} else {
    if ($errorMSG == "") {
        echo "Something went wrong :(";
    } else {
        echo $errorMSG;
    }
}
/**
 * 
 * @param type $send_data
 * Cree save_data_json_backlog por que se atoran los datos
 * y aveces no se guardan
 */
function save_data_json_backlog($send_data) {
    //Si no existe Crea un archivo nuevo
    $NewJsonHistory = fopen("data.json", "w") or die("Unable to open file!");
    //Escribimos el contenido
    fwrite($NewJsonHistory, $send_data);
    fclose($NewJsonHistory);
    echo 'success';
}
function save_data_json($send_data) {
    $someJSON = $send_data;
    //echo $someJSON;
    $nombre_archivo = 'data.json';
    $contenido = $someJSON;
    try {
        // Primero vamos a asegurarnos de que el archivo existe y es escribible.
        if (is_writable($nombre_archivo)) {
            // En nuestro ejemplo estamos abriendo $nombre_archivo en modo de adición.
            // El puntero al archivo está al final del archivo
            // donde irá $contenido cuando usemos fwrite() sobre él.
            if (!$gestor = fopen($nombre_archivo, 'a')) {
                //echo "No se puede abrir el archivo ($nombre_archivo)";
                exit;
            }
            // Escribir $contenido a nuestro archivo abierto.
            //Sin truncar contenido previo
            if (fwrite($gestor, $contenido) === FALSE) {
                //echo "No se puede escribir en el archivo ($nombre_archivo)";
                //No existe el archivo
                exit;
            }
            //echo "Éxito, se escribió ($contenido) en el archivo ($nombre_archivo)";
            fclose($gestor);
        } else {
            //Si no existe Crea un archivo nuevo
            $NewJsonHistory = fopen("data.json", "w") or die("Unable to open file!");
            //Escribimos el contenido
            fwrite($NewJsonHistory, $someJSON);
            fclose($NewJsonHistory);
            //echo 'se creo archivo';
            echo "success";
        }
    } catch (Exception $exc) {
        echo $exc->getTraceAsString();
    }
    
}

include 'borrar-forma-kc.php';
?>