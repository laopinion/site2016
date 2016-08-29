<div id="head_desktop"><?php include("header.tpl.php"); ?></div>
<div id="head_movil"><?php include("header_movil.tpl.php"); ?></div>
<section id="especiales">
	<div class="logo"></div>
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