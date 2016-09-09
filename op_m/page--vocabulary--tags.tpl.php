<section id="tags">
      <div class="content">
       <?php if (!empty($tabs['#primary'])): ?><div id="tabs"><?php print render($tabs); ?></div><?php endif; ?>
       <h4><span>Temas -</span><?php print render($title); ?></h4>
       <?php print render($page['content']); ?>
       <?php $view = views_get_view('tags'); print $view->preview('block_1'); ?>
      </div><!-- Fin content--> 
</section> <!-- /#seccion -->
