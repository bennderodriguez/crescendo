<?php include 'headers.php'; ?>

<div class="container">
	<div class="row">
		<div class="col-sm-12">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script>
		$(document).ready(function(){
		$("#div1").load("http://focus.acceso.crescloud.com/cgi-bwp/BI2/CWService.bwp?cTabla=Vend&cCampos=Vendedor,nombre");
		});
		</script>
		<div id="div1"><h2>Let jQuery AJAX Change This Text</h2></div>
		</div>
	</div>
</div>
<?php include 'footer.php'; ?>