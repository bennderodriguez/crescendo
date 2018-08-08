
<?php
include 'headerst.php';
echo '
<script>
function showHint() {
                
 var xmlhttp = new XMLHttpRequest();

 xmlhttp.onreadystatechange = function() {
 if (this.readyState == 4 && this.status == 200) {
        var text, parser, xmlDoc;
        
        //var custJSON = JSON.parse(xmlhttp.responseText);
        var custJSON = xmlhttp.responseText;
        myFunction(this.responseText); 
 }
};
';
echo '
var link = "";
link = "http://focus.acceso.crescloud.com/cgi-bwp/BI2/CWService.bwp?cTabla=Vend&cCampos=Vendedor,nombre";

alert(link);
xmlhttp.open("GET", link, true);
xmlhttp.send();
function myFunction(response) { 
        var out = response;
        /*
        var arr = JSON.parse(response); 
        var i; 
        var out = "";
        for(i = 0; i < arr.length; i++) { 
         out += "<tr><td>" +  
          "<a href=';
        echo "'";
        echo 'prov.php?PROVEEDOR=" + arr[i].id + 
              "&NOMBRE=" + arr[i].name + 
              "&CIUDAD=" + arr[i].ciudad + 
              "&CALLE="  + arr[i].calle + 
              "&ESTADO=" + arr[i].estado +
              "&CP="     + arr[i].cp + 
              "&TEL1="   + arr[i].tel1 + 
              "&TEL2="   + arr[i].tel2 + 
              "&TIPO="   + arr[i].tipo +
              "&DIAS="   + arr[i].dias + 
              "&CREDITO=" + arr[i].credito + 
              "&ALTA="    + arr[i].alta + 
              "&RFC="     + arr[i].rfc +
              "&SALDO="   + arr[i].saldo +
              
                  " ';
        echo "'";
        echo '>"  +
          arr[i].id  +  "</a>" +
           "</td><td>" +           arr[i].name + 
           "</td><td>" +           arr[i].calle +
           "</td><td>" +           arr[i].ciudad +
           "</td><td>" +           arr[i].estado +
           "</td></tr>";
        } 
        out += "</tbody></table></div>"; 
        */
        
        document.getElementById("example").innerHTML = out; 
} 
        
}
</script>    
';
echo '      <h1>Catalogo Proveedores</h1>
            <p>Informacion On Line </p> 
            <table class="table table-striped" id="example" >
                <thead>
                    <tr>
                        <th>Clave</th>
                        <th>Nombre</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>Clave</th>
                        <th>Nombre</th>
                    </tr>
                </tfoot>
                <tbody>
        <script>
                showHint();
        </script>

';
echo '
</tbody></table></div> 
<div class="container">
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
';
echo "
            $(document).ready(function () {
                $('#example').DataTable({
                    dom: 'Bfrtip',
                    buttons: [
                        'copyHtml5',
                        'excelHtml5',
                        'csvHtml5',
                        'pdfHtml5'
                    ]
                });
            });
        </script>
    </body>
</html>";

?>
