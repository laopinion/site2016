<!--Contenido HEADER-->
<?php // include("menuS_movil.tpl.php"); ?>
<!--Menu icono--><div id="menu_icon"></div><!--FIN Menu Icono-->
<!--LOGO--><?php $block =block_load('block',1); $output = drupal_render(_block_get_renderable_array(_block_render_blocks(array($block)))); print $output; ?><!--FIN LOGO-->
<!--Otros icono--><div id="otros_icon"></div><!--FIN Otros icono-->
<!--FECHA--><?php // $block =block_load('block',60); $output = drupal_render(_block_get_renderable_array(_block_render_blocks(array($block)))); print $output; ?><!--FIN FECHA-->

<!--Menú Principal-->
<?php include("menuPmovil.tpl.php"); ?>
<?php include("OtromenuMovil.tpl.php"); ?>
<!--Fin Menú Principal--> 

<!--FIN Contenido HEADER-->
