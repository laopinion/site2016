<section id="cucuta">
      <div class="content">
        <?php if (!empty($tabs['#primary'])): ?><div id="tabs"><?php print render($tabs); ?></div><?php endif; ?>
        <!--ANUNCIO 1000x30--><div class="p1000x30"><?php // $block =block_load('block',39); $output = drupal_render(_block_get_renderable_array(_block_render_blocks(array($block)))); print $output; ?></div><!--FIN 1.ANUNCIO 1000x30-->
        <!--Seccion--><?php $taxonomy_menu_block = block_load('taxonomy_menu_block','1'); print drupal_render(_block_get_renderable_array(_block_render_blocks(array($taxonomy_menu_block))));?><!--FIN seccion-->
        <div class="izq">
          <!--Destacada--><?php $view = views_get_view('s_general'); print $view->preview('block'); ?><!--FIN Destacada-->
          <!--Lista--><?php $view = views_get_view('s_general'); print $view->preview('block_2'); ?><!--FIN Lista-->
        </div>
        <div class="der">
          <!--Derecha--><?php $view = views_get_view('s_general'); print $view->preview('block_1'); ?><!--FIN Derecha-->
          <!--ANUNCIO 300x250--><div class="pauta p300x250" style="float:left"><h2 class="anuncio_txt">Publicidad</h2><div class="info"><?php $block =block_load('block',49); $output = drupal_render(_block_get_renderable_array(_block_render_blocks(array($block)))); print $output; ?></div></div><!--FIN ANUNCIO 300x250-->
        </div>
        <div class="mid">           
          <!--Por los barrios--><?php $view = views_get_view('s_general_sub'); print $view->preview('block_2'); ?><!--FIN Por los barrios-->
        </div>
        <!--ANUNCIO 728x90--><div class="pauta p728x90" style="margin:0px 135px 15px 135px"><h2 class="anuncio_txt">Publicidad</h2><div class="info"><?php $block =block_load('block',49); $output = drupal_render(_block_get_renderable_array(_block_render_blocks(array($block)))); print $output; ?></div></div><!--FIN ANUNCIO 728x90-->
        <div class="mid">           
          <!--Memorias--><?php $view = views_get_view('s_general_sub'); print $view->preview('block_6'); ?><!--FIN Memorias-->
        </div>
        <div class="mid"><!--Seguir leyendo-->         
          <!--Centro--><?php $view = views_get_view('s_general'); print $view->preview('block_5'); ?><!--FIN Centro-->
          <div class="divisor"></div>
          <!--ANUNCIO 300x250--><div class="pauta pauta_lateral p300x250" style="margin-top: 35px;float:left"><h2 class="anuncio_txt">Publicidad</h2><div class="info"><?php $block =block_load('block',49); $output = drupal_render(_block_get_renderable_array(_block_render_blocks(array($block)))); print $output; ?></div></div><!--FIN ANUNCIO 300x250-->
        </div><!--Fin Seguir leyendo--> 
        <div class="mid" style="border: none;"> <!--Mas noticias-->        
          <!--Centro--><?php $view = views_get_view('s_general'); print $view->preview('block_4'); ?><!--FIN Centro-->
        </div><!--Fin Mas noticias-->
      </div>  
</section> <!-- /#seccion -->