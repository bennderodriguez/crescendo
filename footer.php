      
        </div>

        <script>
        function openNav() {
            document.getElementById("mySidenav").style.width = "250px";
            document.getElementById("main").style.marginLeft = "250px";
        }

        function closeNav() {
            document.getElementById("mySidenav").style.width = "0";
            document.getElementById("main").style.marginLeft= "0";
        }
        </script>
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="asset/js/jquery-3.2.1.slim.min.js"></script>
        <script src="asset/js/popper.min.js"></script>
        <script src="asset/js/bootstrap.min.js"></script>

        <!-- JQuery Export datatable csv,excel pdf -->
        <script src="asset/js/jquery-1.12.4.js"></script>
        <script src="asset/js/jquery.dataTables.min.js"></script>
        <script src="asset/js/dataTables.buttons.min.js"></script>
        <script src="asset/js/jszip.min.js"></script>
        <script src="asset/js/pdfmake.min.js"></script>
        <script src="asset/js/vfs_fonts.js"></script>
        <script src="asset/js/buttons.html5.min.js"></script>
        <script type="text/javascript" src="asset/js/loader.js"></script>
        <script>
		function myFunction() {
			var xhttp = new XMLHttpRequest();
		  xhttp.onreadystatechange = function() {
			if (this.readyState == 4 && this.status == 200) {
			  var serverRequest = this.responseText;
			  //var array = '{"data" : ';
			  var array = serverRequest.replace("},]", "}]");
			  //array += '}';
			  console.log(array);
			  //document.getElementById("demo").innerHTML = array;
				$.ajax({
					type: "POST",
					url: "php/savejson.php",
					data: "jsonRespuestas=" + array,
					success: function (text) {
						if (text == "success") {
							document.getElementById("demo").innerHTML = "success";
						} else {
							document.getElementById("demo").innerHTML = "error";
						}
					}
				});
			}else{
			  document.getElementById("demo").innerHTML = "Cargando Contenido...";
			}
			
			return array; 
		  };
		  xhttp.open("GET", "http://focus.acceso.crescloud.com/cgi-bwp/expert/Check3.bwp?cVenta2=004339", true);
		  xhttp.send();
			             // The function returns the product of p1 and p2
		}

		$(document).ready(function() {
			myFunction();
			$('#example').DataTable( {
				"ajax": "php/productos.php",
				"columns": [
					{ "data": "Producto" },
					{ "data": "Descripcion" },
					{ "data": "Cantidad" },
					{ "data": "Precio" },
					{ "data": "Porcentaje" },
					{ "data": "Importe" },
					{ "data": "Neto" }
				]
			} );
		} );
		</script>
        
    </body>
</html>