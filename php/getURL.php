<?php

// NAME
if (empty($_GET["venta"])) {
    $venta = '*';
} else {
    $venta = $_GET["venta"];
}

echo file_get_contents('http://focus.acceso.crescloud.com/cgi-bwp/BI2/Menu/FocusLab/Berna/Check3.bwp?cVenta2=004341');