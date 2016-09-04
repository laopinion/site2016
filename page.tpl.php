<?php include("pautas/notas.php"); ?>
<div id="head_desktop"><?php include("header_n.tpl.php"); ?></div>
<div id="head_movil"><?php include("header_movil.tpl.php"); ?></div>
<!--TABS -->
<?php if (!empty($tabs['#primary'])): ?><div id="tabs"><?php print render($tabs); ?></div><?php endif; ?>
<!--FIN TABS -->
<div id="container">
<!--URGENTE--><?php $view = views_get_view('aperturas'); print $view->preview('block_8'); ?><!--FIN URGENTE-->
  <section id="seccion">
    <div id="seccion_content">
      <div class="content"><?php print render($page['content']); ?></div>
    </div>
  </section> <!-- /#seccion -->
</div> <!-- /#container -->
