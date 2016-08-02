<section id="videos">
    <div class="content">
      <!--Seccion--><?php $taxonomy_menu_block = block_load('taxonomy_menu_block','1'); print drupal_render(_block_get_renderable_array(_block_render_blocks(array($taxonomy_menu_block))));?><!--FIN seccion-->
      <?php $view = views_get_view('multimedia'); print $view->preview('block_0'); ?>
    </div>
</section>