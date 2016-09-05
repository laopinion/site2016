<section id="error_404">
	<div class="container">
		<h1>404</h1>
		<p>Página no encontrada</p>
	</div>
	<img class="img" src="<?php print base_path(); ?>sites/default/themes/op/images/404-Imagen.png" alt="logo-404">
	<!-- <div class="img"></div> -->
	<div class="descripcion">
		<p>Parece que ha abido un error con la página que estabas buscando. <br>
			Es posible que la entrada haya sido eliminada o que la dirección no exista.</p>
	</div>
	<h4>Tal vez te pueda intesar</h4>
	<article class="notas">
		<div class="divisor"></div>
		<?php $view = views_get_view('404'); print $view->preview('block'); ?>
	</article>
</section>