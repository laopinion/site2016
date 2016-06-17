<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
<script type="text/javascript">if(typeof jQuery==='undefined'){document.write(unescape("<scri"+"pt src='<?php print base_path(); ?>sites/default/themes/datilera/js/jquery-1.8.2.min.js' type='text/javascript'></scri"+"pt>"));}</script>
<link href="<?php print base_path(); ?>sites/default/themes/op/css/style.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="<?php print base_path(); ?>sites/default/themes/op/js/general.js"></script>

<div id="container">

  <div id="header_movil">
    <?php include("header_movil.tpl.php"); ?>
  </div> <!-- /#header -->

  <header id="header">
    <!--PAUTAS INVISIBLES-->
    <!--Script Pauta sección--><?php $block =block_load('block',38); $output = drupal_render(_block_get_renderable_array(_block_render_blocks(array($block)))); print $output; ?><!--Fin Script Pauta Home-->
    <!--Script Pauta nota--><?php $block =block_load('block',48); $output = drupal_render(_block_get_renderable_array(_block_render_blocks(array($block)))); print $output; ?><!--Fin Script Pauta Home-->    
    <!--FIN PAUTAS INVISIBLES-->

    <!--Pauta barra flotante--><div class="pauta barraflotante"><?php // $block =block_load('block',35); $output = drupal_render(_block_get_renderable_array(_block_render_blocks(array($block)))); print $output; ?></div>
    <div class="pautas_header">
    <!--1.ANUNCIO 728x90--><div class="pauta p728x90"><h2 class="anuncio_txt">Publicidad</h2><div class="info"><?php $block =block_load('block',40); $output = drupal_render(_block_get_renderable_array(_block_render_blocks(array($block)))); print $output; ?></div></div><!--FIN 1.ANUNCIO 728x90-->
    <!--2.ANUNCIO 220x90--><div class="pauta p220x90"><h2 class="anuncio_txt">Publicidad</h2><div class="info"><?php $block =block_load('block',41); $output = drupal_render(_block_get_renderable_array(_block_render_blocks(array($block)))); print $output; ?></div></div><!--FIN 2.ANUNCIO 220x90-->
    </div>

    <?php // print render($page['header']); ?>
    <?php include("header.tpl.php"); ?>
  </header> <!-- /#header -->

  <section id="seccion">
    <div id="seccion_content">
      <?php if (!empty($tabs['#primary'])): ?><div id="tabs"><?php print render($tabs); ?></div><?php endif; ?>
      <!--ANUNCIO 1000x30--><div class="p1000x30"><?php // $block =block_load('block',39); $output = drupal_render(_block_get_renderable_array(_block_render_blocks(array($block)))); print $output; ?></div><!--FIN 1.ANUNCIO 1000x30-->
      <!--Seccion--><?php $taxonomy_menu_block = block_load('taxonomy_menu_block','1'); print drupal_render(_block_get_renderable_array(_block_render_blocks(array($taxonomy_menu_block))));?><!--FIN seccion-->
      <div class="izquierda">
        <!--Destacada--><?php $view = views_get_view('secciones_generales'); print $view->preview('block'); ?><!--FIN Destacada-->
        <div class="linea"></div>
        <!--Lista--><?php $view = views_get_view('secciones_generales'); print $view->preview('block_1'); ?><!--FIN Lista-->
        <!--Otros--><?php $view = views_get_view('secciones_generales'); print $view->preview('block_2'); ?><!--FIN Otros-->
        <!--Ocaña--><div class="ocana"><h2><a href="<?php print base_path(); ?>ocana">Ocaña</a></h2><div class="linea"></div></div><?php $view = views_get_view('secciones_especiales'); print $view->preview('block'); ?><!--FIN Ocaña-->
        <!--Pamplona--><div class="pamplona"><h2><a href="<?php print base_path(); ?>pamplona">Pamplona</a></h2><div class="linea"></div></div><?php $view = views_get_view('secciones_especiales'); print $view->preview('block_1'); ?><!--FIN Pamplona-->
      </div>
      <div class="derecha">
        <!--ANUNCIO 300x250--><div class="pauta p300x250"><h2 class="anuncio_txt">Publicidad</h2><div class="info"><?php $block =block_load('block',42); $output = drupal_render(_block_get_renderable_array(_block_render_blocks(array($block)))); print $output; ?></div></div><!--FIN 1.ANUNCIO 300x250-->
        <!--Tema del día--><?php $view = views_get_view('sidebar'); print $view->preview('block'); ?><!--FIN Tema del día-->
        <!--ANUNCIO 300x250--><div class="pauta p300x250"><h2 class="anuncio_txt">Publicidad</h2><div class="info"><?php $block =block_load('block',43); $output = drupal_render(_block_get_renderable_array(_block_render_blocks(array($block)))); print $output; ?></div></div><!--FIN 1.ANUNCIO 300x250-->
        <!-- + Leidas--><?php $view = views_get_view('sidebar'); print $view->preview('block_5'); ?><!--FIN + Leidas-->
        <!--ANUNCIO 300x100--><div class="pauta p300x100"><h2 class="anuncio_txt">Publicidad</h2><div class="info"><?php $block =block_load('block',44); $output = drupal_render(_block_get_renderable_array(_block_render_blocks(array($block)))); print $output; ?></div></div><!--FIN 1.ANUNCIO 300x100-->
        <!--Suscripciones--><?php $block =block_load('block',65); $output = drupal_render(_block_get_renderable_array(_block_render_blocks(array($block)))); print $output; ?><!--FIN Suscripciones-->
        <!--ANUNCIO 300x100--><div class="pauta p300x100"><h2 class="anuncio_txt">Publicidad</h2><div class="info"><?php $block =block_load('block',45); $output = drupal_render(_block_get_renderable_array(_block_render_blocks(array($block)))); print $output; ?></div></div><!--FIN 1.ANUNCIO 300x100-->
      </div>
      <div class="wide">
        <?php // print render($page['content']); ?> 
        <!--Más--><div class="seguir_region"><h2>Seguir leyendo</h2><div class="linea"></div></div><?php $view = views_get_view('secciones_generales'); print $view->preview('block_3'); ?><!--FIN Más-->
        <!-- <div id="content"><?php // print render($page['content']); ?></div> -->
      </div>
    </div>
  </section> <!-- /#seccion -->
  <div id="footer_movil">
    <?php include("footer_movil.tpl.php"); ?>
  </div> <!-- /#footer -->  
  <footer id="footer">
      <?php include("footer.tpl.php"); ?>
      <?php // print render($page['footer']) ?>
  </footer> <!-- /#footer -->  
</div> <!-- /#container -->
