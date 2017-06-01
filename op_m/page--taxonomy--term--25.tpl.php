<?php include("pautas/script_secciones.php"); ?>
<?php include("pautas/clickio_fixed.php"); ?>
<div class="pautas_header">
    <!--ANUNCIO 970x90--><div class="pauta p970x90"><div class="info"></div><?php include("pautas/dfp/S_970x90.php"); ?></div><!--FIN 1.ANUNCIO 970x90-->
</div>
<div id="head_desktop"><?php include("header.tpl.php"); ?></div>
<div id="head_movil"><?php include("header_movil.tpl.php"); ?></div>
<!--ANUNCIO 1000x50 Flotante--><div class="pauta flotante"><?php include("pautas/dfp/S_flotante.php"); ?></div><!--FIN ANUNCIO 1000x50 Flotante-->
<!--ANUNCIO Layer--><div class="layer"><?php include("pautas/dfp/S_layer.php"); ?></div><!--FIN ANUNCIO Layer-->
<section id="galerias">
    <div class="content">
    <!--ANUNCIO 1000x90--><div class="pauta p1000x90" style="display: none"><?php include("pautas/dfp/S_1000x90.php"); ?></div><!--FIN ANUNCIO 1000x90-->
    <!--Seccion--><?php $taxonomy_menu_block = block_load('taxonomy_menu_block','1'); $taxtmprender = _block_render_blocks(array($taxonomy_menu_block)); $taxtmprender2 = _block_get_renderable_array($taxtmprender); print drupal_render($taxtmprender2); ?><!--FIN seccion-->
      <?php print EjecutarViewCache('multimedia','block_2','hora');?>
    </div>
</section>