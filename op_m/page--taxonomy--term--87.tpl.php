<?php include("pautas/secciones.php"); ?>
<div id="head_desktop"><?php include("header.tpl.php"); ?></div>
<div id="head_movil"><?php include("header_movil.tpl.php"); ?></div>
<!--ANUNCIO 1000x50 Flotante--><div class="pauta flotante"><?php include("pautas/S_flotante.php"); ?></div><!--FIN ANUNCIO 1000x50 Flotante-->
<!--ANUNCIO Layer--><?php include("pautas/S_layer.php"); ?></div><!--FIN ANUNCIO Layer-->
<section id="especiales">
	<div class="title">
		<div class="logo"></div>
	</div>
	<div class="container">
		<div class="destacada">
			<?php print EjecutarViewCacheArg('especiales','block','q'.$_GET["q"],'corto'); ?>
		</div>
		<div class="notas">
			<?php print EjecutarViewCacheArg('especiales','block_1','q'.$_GET["q"],'corto'); ?>
		</div>
	</div>
	<div class="galerias">
		<div class="btn-izq"></div>
		<h2>FOTO GALERÍAS Y VIDEOS</h2>
		<?php print EjecutarViewCacheArg('especiales','block_3','q'.$_GET["q"],'corto'); ?>
		<?php print EjecutarViewCacheArg('especiales','block_4','q'.$_GET["q"],'corto'); ?>
		<div class="btn-der"></div>
	</div>
	<div class="container">
		<div class="notas-relacionadas">
			<h2>NOTAS RELACIONADAS</h2>
			<?php print EjecutarViewCacheArg('especiales','block_2','q'.$_GET["q"],'corto'); ?>
		</div>
	</div>
</section>