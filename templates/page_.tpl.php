<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
<script type="text/javascript">if(typeof jQuery==='undefined'){document.write(unescape("<scri"+"pt src='<?php print base_path(); ?>sites/default/themes/datilera/js/jquery-1.8.2.min.js' type='text/javascript'></scri"+"pt>"));}</script>
<link href="<?php print base_path(); ?>sites/default/themes/op/css/style.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="<?php print base_path(); ?>sites/default/themes/op/js/general.js"></script>

<div id="container">

  <header id="header">
    <!--PAUTAS INVISIBLES-->
    <!--Script Pauta Home--><?php $block =block_load('block',37); $output = drupal_render(_block_get_renderable_array(_block_render_blocks(array($block)))); print $output; ?><!--Fin Script Pauta Home-->
    <!--Pautas Invisibles-->
    <!--Pauta barra flotante--><div class="pauta barraflotante"><?php $block =block_load('block',35); $output = drupal_render(_block_get_renderable_array(_block_render_blocks(array($block)))); print $output; ?></div>
    <!--FIN PAUTAS INVISIBLES-->
    <div class="pautas_header">
    <!--1.ANUNCIO 728x90--><div class="pauta p728x90"><h2 class="anuncio_txt">Publicidad</h2><div class="info"><?php $block =block_load('block',30); $output = drupal_render(_block_get_renderable_array(_block_render_blocks(array($block)))); print $output; ?></div></div><!--FIN 1.ANUNCIO 728x90-->
    <!--2.ANUNCIO 220x90--><div class="pauta p220x90"><h2 class="anuncio_txt">Publicidad</h2><div class="info"><?php $block =block_load('block',31); $output = drupal_render(_block_get_renderable_array(_block_render_blocks(array($block)))); print $output; ?></div></div><!--FIN 2.ANUNCIO 220x90-->
    </div>
    <?php print render($page['header']); ?>
    <?php include("header.tpl.php"); ?>
  </header> <!-- /#header -->

  <section id="home">
    <div id="home_content">
      <div class="hleft"></div>
      <div class="hright"></div>
      <?php // print render($page['highlighted']); ?>
    </div><!-- /#content home-->
    </div><!-- /#left-->
    <aside id="sidebar"><?php print render($page['sidebar']); ?></aside>  <!-- /#sidebar -->
    <!-- <div id="content"><?php // print render($page['content']); ?></div> -->
  </section> <!-- /#main -->
  <footer id="footer">
      <?php include("footer.tpl.php"); ?>
      <?php // print render($page['footer']) ?>
  </footer> <!-- /#footer -->
  
</div> <!-- /#container -->
