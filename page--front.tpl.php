  <section class="detailContent">
      <div id="home">
      	<div id="content">
		    <div class="left">
		      	<div class="izq">
		      		<!--Destacada--><?php $view = views_get_view('principal'); print $view->preview('block'); ?><!--FIN Destacada-->
		      		<!--Lista--><?php $view = views_get_view('principal'); print $view->preview('block_1'); ?><!--FIN Lista-->
		      		<!--ANUNCIO 300x250--><div class="pauta p300x250" style="float:left"><h2 class="anuncio_txt">Publicidad</h2><div class="info"><?php $block =block_load('block',49); $output = drupal_render(_block_get_renderable_array(_block_render_blocks(array($block)))); print $output; ?></div></div><!--FIN 1.ANUNCIO 300x250-->
		      		<!--Lista 2--><?php $view = views_get_view('principal'); print $view->preview('block_2'); ?><!--FIN Lista 2-->
		      	</div>
		      	<div class="cen">
		      		<!--Deportes--><div class="deportes"><div class="color"></div><a href="<?php print base_path(); ?>deportes">Deportes</a></div><?php $view = views_get_view('principal'); print $view->preview('block_6'); ?><!--FIN Deportes-->
		      		<!--ANUNCIO 300x250--><div class="pauta p300x250" style="float:left"><h2 class="anuncio_txt">Publicidad</h2><div class="info"><?php $block =block_load('block',49); $output = drupal_render(_block_get_renderable_array(_block_render_blocks(array($block)))); print $output; ?></div></div><!--FIN 1.ANUNCIO 300x250-->
					<!--Economía--><div class="economia"><div class="color"></div><a href="<?php print base_path(); ?>economia">Economía</a></div><div id="indicadores"><h2>Indicadores</h2><div class="info"><?php $tmp = op_indicadores_home(); print $tmp; ?></div><div class="patrocinio"><span>Patrocinado por</span><div class="pauta p88x31"><a href="http://megacambio.blogspot.com/" target="_blank"><img src="<?php print base_path(); ?>sites/default/files/ads/megacambio.png"> </a></div></div></div><?php $view = views_get_view('principal'); print $view->preview('block_8'); ?><!--FIN Economía-->
		      		<!--Cúcuta--><div class="cucuta"><div class="color"></div><a href="<?php print base_path(); ?>cucuta">Cúcuta</a></div><?php $view = views_get_view('principal'); print $view->preview('block_7'); ?><!--FIN Cúcuta-->
		      		<!--Columna--><?php $view = views_get_view('principal'); print $view->preview('block_4'); ?><!--FIN Columna-->
		      	</div>
		      	<div class="mid">	      		
		      		<!--Lista 3--><?php $view = views_get_view('principal'); print $view->preview('block_3'); ?><!--FIN Lista 3-->
		      		<!--Columna 2--><?php $view = views_get_view('principal'); print $view->preview('block_5'); ?><!--FIN Columna 2-->
	      		</div>
		    </div>
	      	
	      	<div class="right">	      		
		      	<!--ANUNCIO 300x250--><div class="pauta p300x250" style="float:left"><h2 class="anuncio_txt">Publicidad</h2><div class="info"><?php $block =block_load('block',49); $output = drupal_render(_block_get_renderable_array(_block_render_blocks(array($block)))); print $output; ?></div></div><!--FIN 1.ANUNCIO 300x250-->
		      	<!--Lo+ destacada--><div class="lo"><div class="mas">Lo<span>+</span></div></div><?php $view = views_get_view('side'); print $view->preview('block'); ?><!--FIN Lo+ destacada-->
		      	<!--Lo+ otros--><?php $view = views_get_view('side'); print $view->preview('block_1'); ?><!--FIN Lo+ otros-->
		      	<!--ANUNCIO 300x250--><div class="pauta p300x250" style="float:left"><h2 class="anuncio_txt">Publicidad</h2><div class="info"><?php $block =block_load('block',49); $output = drupal_render(_block_get_renderable_array(_block_render_blocks(array($block)))); print $output; ?></div></div><!--FIN 1.ANUNCIO 300x250-->
				<!--ANUNCIO 300x250--><div class="pauta p300x250" style="float:left"><h2 class="anuncio_txt">Publicidad</h2><div class="info"><?php $block =block_load('block',49); $output = drupal_render(_block_get_renderable_array(_block_render_blocks(array($block)))); print $output; ?></div></div><!--FIN 1.ANUNCIO 300x250-->
				<!--Tema del dia--><div class="tema"><div class="color"></div>Tema del dia</a></div><?php $view = views_get_view('side'); print $view->preview('block_2'); ?><!--FIN Tema del dia-->
				<!--Deléitese--><div class="deleitese"><a href="http://www.deleitese.co" target="_blank">Deléitese</a></div><?php $view = views_get_view('side'); print $view->preview('block_3'); ?><!--FIN Deléitese-->
				<!--ANUNCIO 300x600--><div class="pauta p300x600" style="float:left"><h2 class="anuncio_txt">Publicidad</h2><div class="info"><?php $block =block_load('block',49); $output = drupal_render(_block_get_renderable_array(_block_render_blocks(array($block)))); print $output; ?></div></div><!--FIN 1.ANUNCIO 300x600-->
				<!--Revista La O--><div class="revista"><a href="http://www.revistalao.co" target="_blank">Revista La Ó</a></div><?php $view = views_get_view('side'); print $view->preview('block_4'); ?><!--FIN Revista La O-->
	      	</div>
	      	<div class="center">
	      		<?php include("zonacomercial.tpl.php"); ?>
	      		<!--VIDEOS--><?php $view = views_get_view('principal'); print $view->preview('block_9'); ?><!--FIN VIDEOS-->
	      		<!--GALERIAS--><div class="galerias"><div class="color"></div><a href="<?php print base_path(); ?>galerias">Galerías</a></div><?php $view = views_get_view('principal'); print $view->preview('block_10'); ?><!--FIN GALERIAS-->
	      	</div>
	      	<div class="left">
	      		<!--PODCAST--><div class="podcasts"><div class="color"></div><a href="<?php print base_path(); ?>podcast">Podcast</a></div><?php $view = views_get_view('principal'); print $view->preview('block_11'); ?><!--FIN PODCAST-->
	      		<div class="izq">
	      			<!--FOTONOTICIAS--><div class="foto_noticias"><div class="color"></div><a class="fotos" href="<?php print base_path(); ?>foto-noticias">Fotonoticias</a><?php $view = views_get_view('principal'); print $view->preview('block_14'); ?></div><!--FIN FOTO NOTICIAS-->
				</div>
				<div class="cen">
					<!--TRAILERS--><div class="trailers"><div class="color"></div><a class="cine" href="<?php print base_path(); ?>cine">Cine</a>
	      			<?php $view = views_get_view('principal'); print $view->preview('block_12'); ?>
	      			<?php $view = views_get_view('principal'); print $view->preview('block_13'); ?>
	      			</div>
	      			<!--FIN TRAILERS-->
				</div>
				<div class="mid">
					<!--INFOGRAFIAS--><div class="infografias"><div class="color"></div><a class="infogra" href="<?php print base_path(); ?>infografias">Infografías</a><?php $view = views_get_view('principal'); print $view->preview('block_15'); ?></div><!--FIN INFOGRAFIAS-->
				</div>	
	      	</div>
	      	<div class="right">
				<!--Opinión--><div class="opinion"><div class="color"></div><a href="<?php print base_path(); ?>opinion">Opinión</a></div><?php $view = views_get_view('side'); print $view->preview('block_7'); ?>
				<!--Columnistas--><?php $view = views_get_view('side'); print $view->preview('block_8'); ?><!--FIN Columnistas--><!--FIN Opinión-->
				<!--Actividad social--><div class="actividad"><div class="color"></div>Actividad social</a></div><?php $view = views_get_view('side'); print $view->preview('block_5'); ?><!--FIN Actividad social-->
				<!--Participacion--><div class="participacion"><div class="color"></div>Así opinan</a></div><?php $view = views_get_view('side'); print $view->preview('block_6'); ?><!--FIN Participacion-->
			</div> 
			<div class="center">
				<div class="productos"><div class="color"></div><a href="<?php print base_path(); ?>productos">Productos La Opinión</a></div><?php include_once("productos.php") ?>
				<!--PORTADA--><?php $view = views_get_view('principal'); print $view->preview('block_16'); ?><!--FIN PORTADA-->
				<div class="servicios"><div class="color"></div><a href="<?php print base_path(); ?>servicios">Servicios</a></div><?php include_once("servicios.php") ?>
			</div>	
		</div>
      </div> 
  </section>