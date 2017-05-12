<?php include("pautas/script_secciones.php"); ?>
<?php include("pautas/clickio_fixed.php"); ?>
<div class="pautas_header">
    <!--ANUNCIO 970x90--><div class="pauta p970x90"><div class="info"></div><?php include("pautas/dfp/S_970x90.php"); ?></div><!--FIN 1.ANUNCIO 970x90-->
</div>
<div id="head_desktop"><?php include("header_n.tpl.php"); ?></div>
<div id="head_movil"><?php include("header_movil.tpl.php"); ?></div>
<!--ANUNCIO 1000x50 Flotante--><div class="pauta flotante"><?php include("pautas/dfp/S_flotante.php"); ?></div><!--FIN ANUNCIO 1000x50 Flotante-->
<!--ANUNCIO Layer--><div class="layer"><?php include("pautas/dfp/S_layer.php"); ?></div><!--FIN ANUNCIO Layer-->
<section id="especiales">
	
	<div class="title">
		<div class="hechos2016"></div>
	</div>
	
	<div class="container">
		<div class="destacada">
			<?php print EjecutarViewCacheArg('especiales','block','q'.$_GET["q"],'corto'); ?>
		</div>
		<div class="notas">
			<?php print EjecutarViewCacheArg('especiales','block_1','q'.$_GET["q"],'corto'); ?>
		</div>
	</div>
	<div class="pdf">
		<a href="<?php print base_path(); ?>especial-hechos-2016" target="_blank">PDF</a>
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