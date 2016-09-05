<?php include("pautas/secciones.php"); ?>
<div id="head_desktop"><?php include("header.tpl.php"); ?></div>
<div id="head_movil"><?php include("header_movil.tpl.php"); ?></div>
<!--ANUNCIO 1000x50 Flotante--><div class="pauta flotante"><?php include("pautas/S_flotante.php"); ?></div><!--FIN ANUNCIO 1000x50 Flotante-->
<!--ANUNCIO Layer--><?php include("pautas/S_layer.php"); ?></div><!--FIN ANUNCIO Layer-->
<section id="caricaturas">
    <div class="izq">
    <!--ANUNCIO 1000x90--><div class="pauta p1000x90" style="display: none"><?php include("pautas/S_1000x90.php"); ?></div><!--FIN ANUNCIO 1000x90-->
      <?php if (!empty($tabs['#primary'])): ?><div id="tabs"><?php print render($tabs); ?></div><?php endif; ?>
      <!--Seccion--><?php $taxonomy_menu_block = block_load('taxonomy_menu_block','1'); $taxtmprender = _block_render_blocks(array($taxonomy_menu_block)); $taxtmprender2 = _block_get_renderable_array($taxtmprender); print drupal_render($taxtmprender2); ?><!--FIN seccion-->
       <?php include("compartir.tpl.php"); ?>
       <?php // include("recomendada.tpl.php"); ?>
       <?php // include("recomendada_movil.tpl.php"); ?>
       <div class="contenido">
        <!--Editorial--><?php print EjecutarViewCache('opinion','block_6','hora');?><!--FIN Editorial--> 
        <!--Caricaturas--><?php print EjecutarViewCache('opinion','block_7','hora');?><!--FIN Caricaturas-->
       </div>
    </div><!--Fin izquierda-->
    <div class="der">
      <!--Columnistas Destacado--><?php print EjecutarViewCache('opinion','block_4','hora');?><!--FIN Columnistas Destacado-->
      <?php print EjecutarViewCache('recientes','block','mediano');?><!--FIN Noticias Recientes-->
       <!--ANUNCIO 300x250--><div class="pauta p300x250" style="float:left"><h2 class="anuncio_txt">Publicidad</h2><div class="info"><?php include("pautas/S_300x250_1.php"); ?></div></div><!--FIN ANUNCIO 300x250-->
      <!--Noticias Recientes-->
      <!--Noticias Recientes--><?php print EjecutarViewCache('recientes','block_1','mediano');?><!--FIN Noticias Recientes-->   
      <!--Juegos--><div class="juegos"><a href="http://juegos.laopinion.com.co/"><img src="<?php print base_path(); ?>sites/default/themes/op/images/juegos.jpg"></a></div><!--FIN Juegos-->
    </div> <!--Fin derecha-->
</section><!--Fin caricaturas-->