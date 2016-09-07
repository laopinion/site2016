<div class="notas_header">
    <!--ANUNCIO 728x90--><div class="pauta p728x90n"><?php include("pautas/N_728x90.php"); ?></div><!--FIN ANUNCIO 728x90-->
</div>
<!--ANUNCIO 1000x50 Flotante--><div class="pauta flotante"><?php include("pautas/N_flotante.php"); ?></div><!--FIN ANUNCIO 1000x50 Flotante-->
<!--ANUNCIO Layer--><?php include("pautas/N_layer.php"); ?><!--FIN ANUNCIO Layer-->
<!--Contenido-->
<section id="caricatura">
  <!--ANUNCIO MOVIL 320x50--><div class="pauta_movil p320x50"><?php include("pautas/Nm_320x50_1.php"); ?></div><!--FIN ANUNCIO 320x50-->
   <div class="izq">
      <?php if (!empty($tabs['#primary'])): ?><div id="tabs"><?php print render($tabs); ?></div><?php endif; ?>
      <!--Seccion--><?php $taxonomy_menu_block = block_load('taxonomy_menu_block','1'); print drupal_render(_block_get_renderable_array(_block_render_blocks(array($taxonomy_menu_block))));?><!--FIN seccion-->
       <?php include("compartir.tpl.php"); ?>
       <?php //include("recomendada.tpl.php"); ?>
       <?php //include("recomendada_movil.tpl.php"); ?>
       <div class="contenido">
        <!--Editorial--><?php $view = views_get_view('opinion'); print $view->preview('block_6'); ?><!--FIN Editorial-->
        <div class="caricatura_principal">
          <?php print render($content['field_imagen']);?>
        <!--formulario--><div id="newsletter"><?php $block = module_invoke('webform', 'block_view', 'newsletter-90577');print render($block['content']); ?></div><!--FIN formulario-->
       </div>
       <!--ANUNCIO 300x250--><div class="pauta p300x250"><h2 class="anuncio_txt">Publicidad</h2><div class="info"><?php include("pautas/N_468x60.php"); ?></div></div><!--FIN ANUNCIO 300x250-->
       <!--ANUNCIO MOVIL 320x50--><div class="pauta_movil p300x250"><?php include("pautas/Nm_320x50_2.php"); ?></div><!--FIN ANUNCIO 320x50-->
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
          <!--Caricaturas--><?php $view = views_get_view('opinion'); print $view->preview('block_7'); ?><!--FIN Caricaturas-->
          </div>
        </div>
       </div>
       <!--ANUNCIO 300x250--><div class="pauta p300x250"><h2 class="anuncio_txt">Publicidad</h2><div class="info"><?php include("pautas/lemonnet_1.php"); ?></div></div><!--FIN ANUNCIO 300x250-->
       <!--ANUNCIO MOVIL 320x50--><div class="pauta_movil p300x250"><?php include("pautas/Nm_320x50_3.php"); ?></div><!--FIN ANUNCIO 320x50-->
    </div><!--Fin izquierda-->
    <div class="der">
      <!--Columnistas Destacado--><?php $view = views_get_view('opinion'); print $view->preview('block_4'); ?><!--FIN Columnistas Destacado-->
      <!--ANUNCIO 300x250--><div class="pauta p300x250"><h2 class="anuncio_txt">Publicidad</h2><div class="info"><?php include("pautas/clickio300x250.php"); ?></div></div><!--FIN ANUNCIO 300x250-->
      <!--Noticias Recientes--><?php $view = views_get_view('recientes'); print $view->preview('block'); ?><!--FIN Noticias Recientes-->
      <!--ANUNCIO 300x250--><div class="pauta p300x250"><h2 class="anuncio_txt">Publicidad</h2><div class="info"><?php include("pautas/N_300x250_1.php"); ?></div></div><!--FIN ANUNCIO 300x250-->
      <!--ANUNCIO 300x250--><div class="pauta p300x250"><h2 class="anuncio_txt">Publicidad</h2><div class="info"><?php include("pautas/N_300x250_2.php"); ?></div></div><!--FIN ANUNCIO 300x250-->
      <!--Noticias Recientes--><?php $view = views_get_view('recientes'); print $view->preview('block_1'); ?><!--FIN Noticias Recientes-->   
      <!--ANUNCIO 300x600--><div class="pauta p300x250" style="float:left"><h2 class="anuncio_txt">Publicidad</h2><div class="info"><?php include("pautas/N_300x600.php"); ?></div></div><!--FIN ANUNCIO 300x250-->
      <!--Noticias Recientes--><?php $view = views_get_view('recientes'); print $view->preview('block_2'); ?><!--FIN Noticias Recientes-->  
      <!--ANUNCIO 300x250--><div class="pauta p300x250" style="float:left"><h2 class="anuncio_txt">Publicidad</h2><div class="info"><?php include("pautas/clickio300x250.php"); ?></div></div><!--FIN ANUNCIO 300x250-->
      <!--Inicio Suscripciones--> 
      <div class="suscripciones">
        <a href="<?php print base_path(); ?>suscripciones"><img src="<?php print base_path(); ?>sites/default/themes/op/images/suscripcion.png" alt="suscripciones"></a>
      </div><!--FIN Suscripciones-->
      <!--Juegos--><div class="juegos"><a href="http://juegos.laopinion.com.co/"><img src="<?php print base_path(); ?>sites/default/themes/op/images/juegos.jpg"></a></div><!--FIN Juegos-->
      <!--ANUNCIO 300x250--><div class="pauta p300x250"><h2 class="anuncio_txt">Publicidad</h2><div class="info"><?php include("pautas/lemonnet_2.php"); ?></div></div><!--FIN ANUNCIO 300x250-->
      <!--ANUNCIO 300x250--><div class="pauta p300x250"><h2 class="anuncio_txt">Publicidad</h2><div class="info"><?php include("pautas/adman_inbanner.php"); ?></div></div><!--FIN ANUNCIO 300x250-->
    </div><!--FIN Derecha-->
</section>
<!--Fin Contenido-->
