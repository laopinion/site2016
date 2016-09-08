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
			<?php $view = views_get_view('especiales'); print $view->preview('block');?>
		</div>
		<div class="notas">
			<?php $view = views_get_view('especiales'); print $view->preview('block_1');?>
		</div>
	</div>
	<div class="galerias">
		<div class="btn-izq"></div>
		<h2>FOTO GALERÍAS Y VIDEOS</h2>
		<?php $view = views_get_view('especiales'); print $view->preview('block_3');?>
		<?php $view = views_get_view('especiales'); print $view->preview('block_4');?>
		<div class="btn-der"></div>
	</div>
	<div class="container">
		<div class="notas-relacionadas">
			<h2>NOTAS RELACIONADAS</h2>
			<?php $view = views_get_view('especiales'); print $view->preview('block_2');?>
		</div>
	</div>
</section>