<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
<script type="text/javascript">if(typeof jQuery==='undefined'){document.write(unescape("<scri"+"pt src='<?php print base_path(); ?>sites/default/themes/datilera/js/jquery-1.8.2.min.js' type='text/javascript'></scri"+"pt>"));}</script>
<link href="<?php print base_path(); ?>sites/default/themes/op/css/style.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="<?php print base_path(); ?>sites/default/themes/op/js/general.js"></script>
<script type="text/javascript" src="<?php print base_path(); ?>sites/default/themes/op/js/especiales.js"></script>

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
      <div id="copa_america_home">
        <div class="header">
          <div class="left"></div>
          <div class="logocopa"><a href="<?php print base_path(); ?>copa-america-2015">Copa América</a></div>
          <div class="paises">
            <div class="chile pais"><a href="<?php print base_path(); ?>copa-america-2015">Chile</a></div>
            <div class="mexico pais"><a href="<?php print base_path(); ?>copa-america-2015">Mexico</a></div>
            <div class="ecuador pais"><a href="<?php print base_path(); ?>copa-america-2015">Ecuador</a></div>
            <div class="bolivia pais"><a href="<?php print base_path(); ?>copa-america-2015">Bolivia</a></div>
            <div class="argentina pais"><a href="<?php print base_path(); ?>copa-america-2015">Argentina</a></div>
            <div class="uruguay pais"><a href="<?php print base_path(); ?>copa-america-2015">Uruguay</a></div>
            <div class="paraguay pais"><a href="<?php print base_path(); ?>copa-america-2015">Paraguay</a></div>
            <div class="jamaica pais"><a href="<?php print base_path(); ?>copa-america-2015">Jamaica</a></div>
            <div class="brasil pais"><a href="<?php print base_path(); ?>copa-america-2015">Brasil</a></div>
            <div class="colombia pais"><a href="<?php print base_path(); ?>copa-america-2015">Colombia</a></div>
            <div class="peru pais"><a href="<?php print base_path(); ?>copa-america-2015">Peru</a></div>
            <div class="venezuela pais"><a href="<?php print base_path(); ?>copa-america-2015">Venezuela</a></div>
          </div>
          <div class="right"></div>
        </div>
        <div class="contenido">
          <!--Destacada ESPECIAL--><?php $view = views_get_view('copa_america'); print $view->preview('block_4'); ?><!--FIN Destacada ESPECIAL-->
          <!--Script Pauta nota--><?php $block =block_load('block',72); $output = drupal_render(_block_get_renderable_array(_block_render_blocks(array($block)))); print $output; ?><!--Fin Script Pauta Home-->    
          <!--Dos notas ESPECIAL--><div class="dos"><?php $view = views_get_view('copa_america'); print $view->preview('block_5'); ?></div><!--FIN Dos notas ESPECIAL-->
        </div>
      </div>  
      <div class="izquierda">
        <!--Destacada--><?php $view = views_get_view('copa_america'); print $view->preview('block'); ?><!--FIN Destacada-->
        <div class="linea"></div>
        <!--Lista--><?php $view = views_get_view('copa_america'); print $view->preview('block_1'); ?><!--FIN Lista-->
        <!--Otros--><?php // $view = views_get_view('copa_america'); print $view->preview('block_2'); ?><!--FIN Otros-->
      </div>
      <div class="derecha">
          <div id="sidebar">
            <?php include("sidebar.tpl.php"); ?>
          </div> <!-- /#sidebar -->
          <div id="sidebar_movil">
            <?php include("sidebar_movil.tpl.php"); ?>
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
