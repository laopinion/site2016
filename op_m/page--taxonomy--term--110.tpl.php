<?php include("pautas/secciones.php"); ?>
<div id="head_desktop"><?php include("header.tpl.php"); ?></div>
<div id="head_movil"><?php include("header_movil.tpl.php"); ?></div>
<!--ANUNCIO 1000x50 Flotante--><div class="pauta flotante"><?php include("pautas/S_flotante.php"); ?></div><!--FIN ANUNCIO 1000x50 Flotante-->
<!--ANUNCIO Layer--><?php include("pautas/S_layer.php"); ?></div><!--FIN ANUNCIO Layer-->
<section id="especiales">
	<div class="logo"></div>
	<div class="container">
		<div class="destacada">
			<?php print EjecutarViewCache('especiales','block','corto');?>
		</div>
		<div class="notas">
			<?php print EjecutarViewCache('especiales','block_1','corto');?>
		</div>
	</div>
	<div class="galerias">
		<div class="btn-izq"></div>
		<h2>FOTO GALERÍAS Y VIDEOS</h2>
		<?php print EjecutarViewCache('especiales','block_3','mediano');?>
		<?php print EjecutarViewCache('especiales','block_4','mediano');?>
		<div class="btn-der"></div>
	</div>
	<div class="container">
		<div class="notas-relacionadas">
			<h2>NOTAS RELACIONADAS</h2>
			<?php print EjecutarViewCache('especiales','block_2','mediano');?>
		</div>
	</div>
</section>