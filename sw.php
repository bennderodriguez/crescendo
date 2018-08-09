<!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

</head>
<body>

<p id="demo"></p>
<?php

// NAME
if (empty($_GET["venta"])) {
    $venta = '*';
} else {
    $venta = $_GET["venta"];
}
?>
<script>
$(document).ready(function(){
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
	  var serverRequest = this.responseText;
	  var JSON = serverRequest.replace("},]", "}]");
	  
      //document.getElementById("demo").innerHTML = '{"data" : '+ JSON + '}';
      document.getElementById("demo").innerHTML = JSON ;
    }else{
      document.getElementById("demo").innerHTML = "Cargando Contenido...";
	}
  };
  xhttp.open("GET", "http://focus.acceso.crescloud.com/cgi-bwp/expert/Check3.bwp?cVenta2=<?php echo $venta ?>", true);
  xhttp.send();
});
</script>
 
</body>
</html>
