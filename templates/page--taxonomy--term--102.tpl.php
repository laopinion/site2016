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
    <!--FIN PAUTAS INVISIBLES-->

    <!--Pauta barra flotante--><div class="pauta barraflotante"><?php // $block =block_load('block',35); $output = drupal_render(_block_get_renderable_array(_block_render_blocks(array($block)))); print $output; ?></div>

    <?php // print render($page['header']); ?>
    <?php include("header.tpl.php"); ?>
  </header> <!-- /#header -->
  <div class="header_elecciones"><div class="logo_elecciones"></div></div>
  <section id="seccion">
    <div id="seccion_content">
      <?php if (!empty($tabs['#primary'])): ?><div id="tabs"><?php print render($tabs); ?></div><?php endif; ?>
      <!--ANUNCIO 1000x30--><div class="p1000x30"><?php // $block =block_load('block',39); $output = drupal_render(_block_get_renderable_array(_block_render_blocks(array($block)))); print $output; ?></div><!--FIN 1.ANUNCIO 1000x30-->
      <!--Seccion--><?php $taxonomy_menu_block = block_load('taxonomy_menu_block','1'); print drupal_render(_block_get_renderable_array(_block_render_blocks(array($taxonomy_menu_block))));?><!--FIN seccion-->
      <div class="izquierda">
        <!--Destacada--><?php // $view = views_get_view('secciones_generales'); print $view->preview('block'); ?><!--FIN Destacada-->
        <!--<div class="linea"></div>-->
        <!--Lista--><?php $view = views_get_view('secciones_especiales'); print $view->preview('block_11'); ?><!--FIN Lista-->
      </div>
      <div class="derecha">
          <div id="sidebar">
            <!--Candidatos--><?php $view = views_get_view('secciones_especiales'); print $view->preview('block_12'); ?><!--FIN Candidatos-->
            <!--Gobernacion--><?php $view = views_get_view('secciones_especiales'); print $view->preview('block_13'); ?><!--FIN Gobernacion-->
          </div> <!-- /#sidebar -->
          <div id="sidebar_movil">
            <!--Candidatos--><?php $view = views_get_view('secciones_especiales'); print $view->preview('block_12'); ?><!--FIN Candidatos-->
            <!--Gobernacion--><?php $view = views_get_view('secciones_especiales'); print $view->preview('block_13'); ?><!--FIN Gobernacion-->
          </div> <!-- /#sidebar movil-->
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
