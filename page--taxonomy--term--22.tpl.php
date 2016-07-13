<section id="servicios">
      <div class="content">
        <?php if (!empty($tabs['#primary'])): ?><div id="tabs"><?php print render($tabs); ?></div><?php endif; ?>
        <!--ANUNCIO 1000x30--><div class="p1000x30"><?php // $block =block_load('block',39); $output = drupal_render(_block_get_renderable_array(_block_render_blocks(array($block)))); print $output; ?></div><!--FIN 1.ANUNCIO 1000x30-->
        <!--Seccion--><?php $taxonomy_menu_block = block_load('taxonomy_menu_block','1'); print drupal_render(_block_get_renderable_array(_block_render_blocks(array($taxonomy_menu_block))));?><!--FIN seccion-->
        <div class="izq">
           <!--Droguerias--><?php $block =block_load('block',69); $output = drupal_render(_block_get_renderable_array(_block_render_blocks(array($block)))); print $output; ?><!--Fin Droguerias-->
        <!--Notarias--><?php $block =block_load('block',70); $output = drupal_render(_block_get_renderable_array(_block_render_blocks(array($block)))); print $output; ?><!--Fin Notarias-->
        </div>
        <div class="der">
          
        </div>         
      </div><!-- Fin content--> 
</section> <!-- /#seccion -->