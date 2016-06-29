<!--Contenido-->
<section id="caricatura">
  <!--ANUNCIO 1000x30--><div class="pauta p1000x30"><?php $block =block_load('block',57); $output = drupal_render(_block_get_renderable_array(_block_render_blocks(array($block)))); print $output; ?></div><!--FIN ANUNCIO 1000x30-->
   <div class="izq">
      <?php if (!empty($tabs['#primary'])): ?><div id="tabs"><?php print render($tabs); ?></div><?php endif; ?>
      <!--ANUNCIO 1000x30--><div class="p1000x30"><?php  $block =block_load('block',39); $output = drupal_render(_block_get_renderable_array(_block_render_blocks(array($block)))); print $output; ?></div><!--FIN 1.ANUNCIO 1000x30-->
      <!--Seccion--><?php $taxonomy_menu_block = block_load('taxonomy_menu_block','1'); print drupal_render(_block_get_renderable_array(_block_render_blocks(array($taxonomy_menu_block))));?><!--FIN seccion-->
       <?php include("compartir.tpl.php"); ?>
       <?php include("recomendada.tpl.php"); ?>
       <?php include("recomendada_movil.tpl.php"); ?>
       <div class="contenido">
        <!--Editorial--><?php $view = views_get_view('opinion'); print $view->preview('block_6'); ?><!--FIN Editorial-->
        <div class="caricatura_principal">
          <?php print render($content['field_imagen']);?>
        </div>
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
    </div><!--Fin izquierda-->
    <div class="der">
      <!--Columnistas Destacado--><?php $view = views_get_view('opinion'); print $view->preview('block_4'); ?><!--FIN Columnistas Destacado-->
      <!--Noticias Recientes-->
      <?php $view = views_get_view('recientes'); print $view->preview('block'); ?><!--FIN Noticias Recientes-->
       <!--ANUNCIO 300x250--><div class="pauta p300x250"><h2 class="anuncio_txt">Publicidad</h2><div class="info"><?php $block =block_load('block',53); $output = drupal_render(_block_get_renderable_array(_block_render_blocks(array($block)))); print $output; ?></div></div><!--FIN 1.ANUNCIO 300x250-->
      <!--Noticias Recientes--><?php $view = views_get_view('recientes'); print $view->preview('block_1'); ?><!--FIN Noticias Recientes-->   
      <!--Juegos--><div class="juegos"><a href="http://juegos.laopinion.com.co/"><img src="<?php print base_path(); ?>sites/default/themes/op/images/juegos.jpg"></a></div><!--FIN Juegos-->
      <!--ANUNCIO 300x250--><div class="pauta p300x250"><h2 class="anuncio_txt">Publicidad</h2><div class="info"><?php $block =block_load('block',53); $output = drupal_render(_block_get_renderable_array(_block_render_blocks(array($block)))); print $output; ?></div></div><!--FIN 1.ANUNCIO 300x250-->
      <!--Noticias Recientes--><?php $view = views_get_view('recientes'); print $view->preview('block_2'); ?><!--FIN Noticias Recientes--> 
    </div> <!--Fin derecha-->
</section>
<!--Fin Contenido-->
