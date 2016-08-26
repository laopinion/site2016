<div id="head_desktop"><?php include("header.tpl.php"); ?></div>
<div id="head_movil"><?php include("header_movil.tpl.php"); ?></div>
<!--TABS -->
<?php if (!empty($tabs['#primary'])): ?><div id="tabs"><?php print render($tabs); ?></div><?php endif; ?>
<!--FIN TABS -->
<div id="container">
  <section id="seccion">
    <div id="seccion_content">
      <div class="content"><?php print render($page['content']); ?></div>
    </div>
  </section> <!-- /#seccion -->
</div> <!-- /#container -->
