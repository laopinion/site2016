<div id="head_desktop"><?php include("header.tpl.php"); ?></div>
<div id="head_movil"><?php include("header_movil.tpl.php"); ?></div>
<section id="participacion">
      <div class="content">
        <?php if (!empty($tabs['#primary'])): ?><div id="tabs"><?php print render($tabs); ?></div><?php endif; ?>
        <!--ANUNCIO 1000x30--><div class="p1000x30"><?php // $block =block_load('block',39); $output = drupal_render(_block_get_renderable_array(_block_render_blocks(array($block)))); print $output; ?></div><!--FIN 1.ANUNCIO 1000x30-->
        <!--Seccion--><?php $taxonomy_menu_block = block_load('taxonomy_menu_block','1'); print drupal_render(_block_get_renderable_array(_block_render_blocks(array($taxonomy_menu_block))));?><!--FIN seccion-->
        <!--Centro--><?php $view = views_get_view('s_general'); print $view->preview('block_3'); ?><!--FIN Centro-->
        <!--Multimedia--><?php $view = views_get_view('s_general_sub'); print $view->preview('block_21'); ?><!--FIN Multimedia-->
        <div class="izq">
         <!--denuncia--><?php $block = module_invoke('webform', 'block_view', 'client-block-134');print render($block['content']); ?><!--FIN denuncia-->
        </div>
        <div class="der">
          <!--Edicion impresa--><?php $view = views_get_view('sidebar'); print $view->preview('block_4'); ?><!--FIN Edicion impresa-->
        <!--Suscribcion--><div class="suscripcion"><a href="<?php print base_path(); ?>suscripciones"><img src="<?php print base_path(); ?>sites/default/themes/op/images/suscripcion2.jpg"></a></div><!--FIN Suscribcion-->
        <!--Clasificados--><div class="clasificados"><a href="http://clasificados.laopinion.com.co/"><img src="<?php print base_path(); ?>sites/default/themes/op/images/clasificados.jpg"></a></div><!--FIN Clasificados-->
           <!--Juegos--><div class="juegos"><a href="http://juegos.laopinion.com.co/"><img src="<?php print base_path(); ?>sites/default/themes/op/images/juegos.jpg"></a></div><!--FIN Juegos-->
        </div>
      </div><!-- Fin content--> 
</section> <!-- /#seccion -->
