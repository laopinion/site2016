<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
<script type="text/javascript">if(typeof jQuery==='undefined'){document.write(unescape("<scri"+"pt src='<?php print base_path(); ?>sites/default/themes/datilera/js/jquery-1.8.2.min.js' type='text/javascript'></scri"+"pt>"));}</script>
<link href="<?php print base_path(); ?>sites/default/themes/op/css/style.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="<?php print base_path(); ?>sites/default/themes/op/js/general.js"></script>

<div id="container">

  <header id="header">
    <!--PAUTAS INVISIBLES-->
    <!--Script Pauta sección--><?php $block =block_load('block',38); $output = drupal_render(_block_get_renderable_array(_block_render_blocks(array($block)))); print $output; ?><!--Fin Script Pauta Home-->
    <!--Script Pauta nota--><?php $block =block_load('block',48); $output = drupal_render(_block_get_renderable_array(_block_render_blocks(array($block)))); print $output; ?><!--Fin Script Pauta Home-->    
    <!--FIN PAUTAS INVISIBLES-->
    <?php // print render($page['header']); ?>
    <?php include("header.tpl.php"); ?>
  </header> <!-- /#header -->

  <section id="seccion">
    <div id="seccion_content">
      <?php if (!empty($tabs['#primary'])): ?><div id="tabs"><?php print render($tabs); ?></div><?php endif; ?>
      
        <!--<div class="content"><?php // print render($page['content']); ?></div> -->
          <!--Contenido-->
        <div id="login">
          <h2>Iniciar Sesión</h2>
          <?php
          // split the username and password so we can put the form links were we want (they are in the "user-login-links" div bellow)
          print drupal_render($form['name']);
          print drupal_render($form['pass']);
          // render login button
          print drupal_render($form['form_build_id']);
          print drupal_render($form['form_id']);
          print drupal_render($form['actions']);
          ?>
        </div>
        <!--Fin Contenido-->
              
    </div>
  </section> <!-- /#seccion -->
  <footer id="footer">
      <?php include("footer.tpl.php"); ?>
      <?php // print render($page['footer']) ?>
  </footer> <!-- /#footer -->  
</div> <!-- /#container -->
