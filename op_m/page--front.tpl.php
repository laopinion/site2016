<?php include("pautas/home.php"); ?>
<div class="pautas_header">
    <!--ANUNCIO 728x90--><div class="pauta p728x90"><h2 class="anuncio_txt">Publicidad</h2><div class="info"></div><?php include("pautas/H_728x90.php"); ?></div><!--FIN 1.ANUNCIO 728x90-->
    <!--ANUNCIO 220x90--><div class="pauta p220x90"><h2 class="anuncio_txt">Publicidad</h2><div class="info"></div><?php include("pautas/H_220x90.php"); ?></div><!--FIN 2.ANUNCIO 220x90-->
</div>
<div id="head_desktop"><?php include("header.tpl.php"); ?></div>
<div id="head_movil"><?php include("header_movil.tpl.php"); ?></div>
<!--ANUNCIO 1000x50 Flotante--><div class="pauta flotante"><?php include("pautas/H_flotante.php"); ?></div><!--FIN ANUNCIO 1000x50 Flotante-->
<!--ANUNCIO MOVIL 320x50--><div class="pauta_movil fijo"><?php include("pautas/Hm_320x50_4.php"); ?></div><!--FIN ANUNCIO 320x50-->
<!--ANUNCIO Layer--><?php include("pautas/H_layer.php"); ?></div><!--FIN ANUNCIO Layer-->
<div id= "oreja_div"></div>
<?php include("pautas/laterales.tpl.php"); ?>
  <section class="detailContent">
      <div id="home">
      	<div id="content">
      		<?php include("aperturas.tpl.php"); ?>
		    <!--ANUNCIO MOVIL 320x50--><div class="pauta_movil p320x50"><?php include("pautas/Nm_320x50_1.php"); ?></div><!--FIN ANUNCIO 320x50-->
		    <!--ANUNCIO 1000x90--><div class="pauta p1000x90" style="display: none"><?php include("pautas/H_1000x90.php"); ?></div><!--FIN ANUNCIO 1000x90-->
		    <div class="left">
		      	<div class="izq">
		      		<!--Destacada--><?php print EjecutarViewCache('principal','block','corto'); ?><!--FIN Destacada-->
		      		<!--Lista--><?php print EjecutarViewCache('principal','block_1','corto'); ?><!--FIN Lista-->
		      		<!--ANUNCIO 300x250--><div class="pauta p300x250" style="float:left"><h2 class="anuncio_txt">Publicidad</h2><div class="info"><?php include("pautas/clickio300x250.php"); ?></div></div><!--FIN ANUNCIO 300x250-->
		      		<!--Lista 2--><?php print EjecutarViewCache('principal','block_2','corto'); ?><!--FIN Lista 2-->
		      	</div>
		      	<!--ANUNCIO MOVIL 320x50--><div class="pauta_movil p320x50"><?php include("pautas/Nm_320x50_2.php"); ?></div><!--FIN ANUNCIO 320x50-->
		      	<div class="cen">
		      		<!--Deportes--><div class="deportes"><div class="color"></div><a href="<?php print base_path(); ?>deportes">Deportes</a></div><?php print EjecutarViewCache('principal','block_6','corto'); ?><!--FIN Deportes-->
		      		<!--ANUNCIO 300x250--><div class="pauta p300x250" style="float:left"><h2 class="anuncio_txt">Publicidad</h2><div class="info"><?php include("pautas/H_300x250_3.php"); ?></div></div><!--FIN ANUNCIO 300x250-->
					<!--Economía--><div class="economia"><div class="color"></div><a href="<?php print base_path(); ?>economia">Economía</a></div><div id="indicadores"><h2>Indicadores</h2><div class="info"><?php $tmp = op_indicadores_home(); print $tmp; ?></div><div class="patrocinio"><span>Patrocinado por</span><div class="pauta p88x31"><a href="http://megacambio.blogspot.com/" target="_blank"><img src="<?php print base_path(); ?>sites/default/files/ads/megacambio.png"> </a></div></div></div><?php $view = views_get_view('principal'); print $view->preview('block_8'); ?><!--FIN Economía-->
		      		<!--Cúcuta--><div class="cucuta"><div class="color"></div><a href="<?php print base_path(); ?>cucuta">Cúcuta</a></div><?php print EjecutarViewCache('principal','block_7','corto'); ?><!--FIN Cúcuta-->
		      		<!--Columna--><?php print EjecutarViewCache('principal','block_4','corto'); ?><!--FIN Columna-->
		      	</div>
		      	<!--ANUNCIO MOVIL 320x50--><div class="pauta_movil p320x50"><?php include("pautas/Nm_320x50_3.php"); ?></div><!--FIN ANUNCIO 320x50-->
		      	<div class="mid">
		      		<!--ANUNCIO 600x90--><div class="pauta p600x90" style="float:left"><h2 class="anuncio_txt">Publicidad</h2><div class="info"></div></div><!--FIN ANUNCIO 600x90-->
		      		<!--Lista 3--><?php print EjecutarViewCache('principal','block_3','corto'); ?><!--FIN Lista 3-->
		      		<!--Columna 2--><?php print EjecutarViewCache('principal','block_5','corto'); ?><!--FIN Columna 2-->
	      		</div>
		    </div>
	      	<div class="right">      		
		      	<!--ANUNCIO 300x250--><div class="pauta p300x250" style="float:left"><h2 class="anuncio_txt">Publicidad</h2><div class="info"><?php include("pautas/clickio300x250.php"); ?></div></div><!--FIN ANUNCIO 300x250-->
		      	<!--Lo+ destacada--><div class="lo"><div class="mas">Lo<span>+</span></div></div><?php print EjecutarViewCache('side','block','corto'); ?><!--FIN Lo+ destacada-->
		      	<!--Lo+ otros--><?php print EjecutarViewCache('side','block_1','corto'); ?><!--FIN Lo+ otros-->
		      	<!--ANUNCIO 300x250--><div class="pauta p300x250" style="float:left"><h2 class="anuncio_txt">Publicidad</h2><div class="info"><?php include("pautas/H_300x250.php"); ?></div></div><!--FIN ANUNCIO 300x250-->
		      	<!--Tema del dia--><div class="tema"><div class="color"></div>Tema del dia</a></div><?php print EjecutarViewCache('side','block_2','mediano'); ?><!--FIN Tema del dia-->
				<!--ANUNCIO 300x250--><div class="pauta p300x250" style="float:left"><h2 class="anuncio_txt">Publicidad</h2><div class="info"><?php include("pautas/H_300x250_1.php"); ?></div></div><!--FIN ANUNCIO 300x250-->
				<!--Opinión--><div class="opinion"><div class="color"></div><a href="<?php print base_path(); ?>opinion">Opinión</a></div><?php print EjecutarViewCache('side','block_7','hora'); ?>
				<!--Columnistas--><?php print EjecutarViewCache('side','block_8','hora'); ?><!--FIN Columnistas--><!--FIN Opinión-->
				<!--ANUNCIO 300x600--><div class="pauta p300x600" style="float:left"><h2 class="anuncio_txt">Publicidad</h2><div class="info"><?php include("pautas/H_300x250_2.php"); ?></div></div><!--FIN ANUNCIO 300x600-->
				<!--Deléitese--><div class="deleitese"><a href="http://www.deleitese.co" target="_blank">Deléitese</a></div><?php print EjecutarViewCache('side','block_3','mediano'); ?><!--FIN Deléitese-->	
	      	</div>
	      	<div class="center">
	      		<?php include("zonacomercial.tpl.php"); ?>
	      		<!--VIDEOS--><?php print EjecutarViewCache('principal','block_9','mediano'); ?><!--FIN VIDEOS-->
	      		<!--GALERIAS--><div class="galerias"><div class="color"></div><a href="<?php print base_path(); ?>galerias">Galerías</a></div><?php print EjecutarViewCache('principal','block_10','mediano'); ?><!--FIN GALERIAS-->
	      		<!--PODCAST--><div class="podcasts"><div class="color"></div><a href="<?php print base_path(); ?>podcast">Podcast</a></div><?php print EjecutarViewCache('principal','block_11','mediano'); ?><!--FIN PODCAST-->
	      	</div>
	      	<div class="left">
	      		
	      		<div class="izq">
	      			<!--FOTONOTICIAS--><div class="foto_noticias"><div class="color"></div><a class="fotos" href="<?php print base_path(); ?>foto-noticias">Fotonoticias</a><?php print EjecutarViewCache('principal','block_14','mediano'); ?></div><!--FIN FOTO NOTICIAS-->
				</div>
				<div class="cen">
					<!--TRAILERS--><div class="trailers"><div class="color"></div><a class="cine" href="<?php print base_path(); ?>cine">Cine</a>
	      			<?php print EjecutarViewCache('principal','block_12','largo'); ?>
	      			<?php print EjecutarViewCache('principal','block_13','largo'); ?>
	      			</div>
	      			<!--FIN TRAILERS-->
				</div>
				<div class="mid">
					<!--INFOGRAFIAS--><div class="infografias"><div class="color"></div><a class="infogra" href="<?php print base_path(); ?>infografias">Infografías</a><?php print EjecutarViewCache('principal','block_15','hora'); ?></div><!--FIN INFOGRAFIAS-->
				</div>	
	      	</div>
	      	<div class="right">
	      		<!--Revista La O--><div class="revista"><a href="http://www.revistalao.co" target="_blank">Revista La Ó</a></div><?php print EjecutarViewCache('side','block_4','mediano'); ?><!--FIN Revista La O-->
				<!--Actividad social--><div class="actividad"><div class="color"></div>Actividad social</a></div><?php print EjecutarViewCache('side','block_5','hora'); ?><!--FIN Actividad social-->
			</div> 
			<div class="center">
				<div class="productos"><div class="color"></div><a href="<?php print base_path(); ?>productos">Productos La Opinión</a></div><?php include_once("productos.php") ?>
				<!--PORTADA--><?php print EjecutarViewCache('principal','block_16','hora'); ?><!--FIN PORTADA-->
				<div class="servicios"><div class="color"></div><a href="<?php print base_path(); ?>servicios">Servicios</a></div><?php include_once("servicios.php") ?>
			</div>	
		</div>
      </div> 
  </section>

  <!-- Script FACEBOOK player -->
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v2.6";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<!-- FIN Script FACEBOOK player -->
<!-- Script INSTAGRAM player -->
<script async defer src=//platform.instagram.com/en_US/embeds.js></script>
<!-- FIN Script INSTAGRAM player -->
<!-- Script VINE player -->
<script src=https://platform.vine.co/static/scripts/embed.js></script>
<!-- FIN Script VINE player -->