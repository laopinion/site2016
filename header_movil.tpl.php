<!--Contenido HEADER-->
<?php // include("menuS_movil.tpl.php"); ?>
	<div id="hamburger">
		<span class="izq_arriba"></span>
		<span class="der_arriba"></span>
		<span></span>
		<span></span>
		<span class="izq_abajo"></span>
		<span class="der_abajo"></span>
	</div>
	<div id="logo">
		<h1><a class="logo" href="<?php print base_path(); ?>"></a></h1>
	</div>
<!--Menú Principal-->
<?php //include("menuPmovil.tpl.php"); ?>
<?php //include("OtromenuMovil.tpl.php"); ?>
<!--Fin Menú Principal--> 

<!--FIN Contenido HEADER-->

<script>
	$(document).ready(function(){
		$('#hamburger').click(function(){
			$(this).toggleClass('open');
		});
	});
</script>
