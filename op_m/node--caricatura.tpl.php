<div class="notas_header">
    <!--ANUNCIO 728x90--><div class="pauta p728x90n"><?php include("pautas/dfp/N_728x90.php"); ?></div><!--FIN ANUNCIO 728x90-->
</div>
<!--ANUNCIO 1000x50 Flotante--><div class="pauta flotante"><?php include("pautas/dfp/N_flotante.php"); ?></div><!--FIN ANUNCIO 1000x50 Flotante-->
<!--ANUNCIO Layer--><?php include("pautas/dfp/N_layer.php"); ?><!--FIN ANUNCIO Layer-->
<!--Contenido-->
<section id="caricatura">
  <!--ANUNCIO MOVIL 320x50--><div class="pauta_movil p320x50"><?php include("pautas/dfp/Nm_320x50_1.php"); ?></div><!--FIN ANUNCIO 320x50-->
   <div class="izq">
      <?php if (!empty($tabs['#primary'])): ?><div id="tabs"><?php print render($tabs); ?></div><?php endif; ?>
      <!--Seccion--><?php $taxonomy_menu_block = block_load('taxonomy_menu_block','1'); $taxtmprender = _block_render_blocks(array($taxonomy_menu_block)); $taxtmprender2 = _block_get_renderable_array($taxtmprender); print drupal_render($taxtmprender2); ?><!--FIN seccion-->
       <?php include("compartir.tpl.php"); ?>
       <?php // include("recomendada.tpl.php"); ?>
       <?php // include("recomendada_movil.tpl.php"); ?>
       <div class="contenido">
        <!--Editorial--><?php print EjecutarViewCache('opinion','block_6','mediano'); ?><!--FIN Editorial-->
        <div class="caricatura_principal">
          <?php print render($content['field_imagen']);?>
        <?php include("pautas/teads.php"); ?>
        <?php include("pautas/adman_intext.php"); ?>
        <!--formulario--><div id="newsletter"><?php $block = module_invoke('webform', 'block_view', 'newsletter-118209');print render($block['content']); ?></div><!--FIN formulario-->
       </div>
       <!--ANUNCIO 300x250--><div class="pauta p300x250"><h2 class="anuncio_txt">Publicidad</h2><div class="info"><?php include("pautas/dfp/N_300x250_6.php"); ?></div></div><!--FIN ANUNCIO 300x250-->
       <!--ANUNCIO MOVIL 320x50--><div class="pauta_movil p300x250"><?php include("pautas/dfp/Nm_300x250"); ?></div><!--FIN ANUNCIO 320x50-->
        <div class="comentarios">
          <!-- <div class="linea"></div> -->
          <div class="color"></div><h2>Comentarios</h2>
          <div class="bloque"><?php include("disqus.php"); ?></div>
        </div>
        <div class="mas_caricaturas">
          <div class="color"></div><h2>Más caricaturas</h2>
          <div class="paginador">
            <div class="item1 item">1</div>
            <div class="item2 item">2</div>
          </div>
          <div class="otras">  
          <!--Caricaturas--><?php print EjecutarViewCache('opinion','block_7','mediano'); ?><!--FIN Caricaturas-->
          </div>
        </div>
       </div>
       <!--ANUNCIO 300x250--><div class="pauta p300x250"><h2 class="anuncio_txt">Publicidad</h2><div class="info"><?php include("pautas/clickio300x250.php"); ?></div></div><!--FIN ANUNCIO 300x250-->
       <!--ANUNCIO MOVIL 320x50--><div class="pauta_movil p300x250"><?php include("pautas/dfp/Nm_320x50_3.php"); ?></div><!--FIN ANUNCIO 320x50-->
    </div><!--Fin izquierda-->
    <div class="der">
      <!--Columnistas destacados--><?php print EjecutarViewCache('opinion','block_4','mediano'); ?><!--FIN Columnistas destacados-->
      <!--ANUNCIO 300x250--><div class="pauta p300x250"><h2 class="anuncio_txt">Publicidad</h2><div class="info"><?php include("pautas/clickio300x250.php"); ?></div></div><!--FIN ANUNCIO 300x250-->
      <!--Noticias Recientes--><?php print EjecutarViewCacheArg('recientes','block','q','mediano'); ?><!--FIN Noticias Recientes-->
      <!--ANUNCIO 300x250--><div class="pauta p300x250"><h2 class="anuncio_txt">Publicidad</h2><div class="info"><?php include("pautas/dfp/N_300x250_1.php"); ?></div></div><!--FIN ANUNCIO 300x250-->
      <!--Noticias Recientes--><?php print EjecutarViewCacheArg('recientes','block_1','q','mediano'); ?><!--FIN Noticias Recientes-->   
      <!--ANUNCIO 300x250--><div class="pauta p300x250"><h2 class="anuncio_txt">Publicidad</h2><div class="info"><?php include("pautas/dfp/N_300x250_2.php"); ?></div></div><!--FIN ANUNCIO 300x250-->
      <!--Noticias Recientes--><?php print EjecutarViewCacheArg('recientes','block_2','q','mediano'); ?><!--FIN Noticias Recientes-->  
      <!--ANUNCIO 300x600--><div class="pauta p300x600" style="float:left"><h2 class="anuncio_txt">Publicidad</h2><div class="info"><?php include("pautas/dfp/N_300x600.php"); ?></div></div><!--FIN ANUNCIO 300x600-->
      <!--Inicio Suscripciones--> 
      <div class="suscripciones">
        <a href="<?php print base_path(); ?>suscripciones"><img src="<?php print base_path(); ?>sites/default/themes/op/images/suscripcion.png" alt="suscripciones"></a>
      </div><!--FIN Suscripciones-->
      <!--ANUNCIO ADMAN--><?php include("pautas/adman_inbanner.php"); ?><!--FIN ANUNCIO ADMAN-->    
      <!--ANUNCIO 300x250--><div class="pauta p300x250"><h2 class="anuncio_txt">Publicidad</h2><div class="info"><?php include("pautas/dfp/N_300x250_3.php"); ?></div></div><!--FIN ANUNCIO 300x250-->
      <!--Noticias Recientes--><?php print EjecutarViewCacheArg('recientes','block_5','q','mediano'); ?><!--FIN Noticias Recientes-->
      <!--ANUNCIO 300x600--><div class="pauta p300x600"><h2 class="anuncio_txt">Publicidad</h2><div class="info"><?php include("pautas/dfp/N_300x250_4.php"); ?></div></div><!--FIN ANUNCIO 300x600-->
      <!--Noticias Recientes--><?php print EjecutarViewCacheArg('recientes','block_6','q','mediano'); ?><!--FIN Noticias Recientes-->
      <!--ANUNCIO 300x250--><div class="pauta p300x250"><h2 class="anuncio_txt">Publicidad</h2><div class="info"><?php include("pautas/dfp/N_300x250_5.php"); ?></div></div><!--FIN ANUNCIO 300x250-->
    </div><!--FIN Derecha-->
</section>
<!--Fin Contenido-->
