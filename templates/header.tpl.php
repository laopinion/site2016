<script type="text/javascript" src="<?php print base_path(); ?>sites/default/themes/op/js/jquery.simpleWeather.min.js"></script>
<script type="text/javascript" src="<?php print base_path(); ?>sites/default/themes/op/js/tweet.js"></script>
<script type="text/javascript" src="<?php print base_path(); ?>sites/default/themes/op/js/taboola.js"></script>
<!--HEADER TEMPLATE-->
<script type="text/javascript">
(function($) {
   $(document).ready(function(){
		//LOGIN
		var switch_login = 1;
		$(".menu-superior .ingreso").click(function(){
			if(switch_login == 1){
				$(".login_block").css({opacity:"1", height:"223px"});
				switch_login = 0;
			}else if(switch_login == 0){
				$(".login_block").css({opacity:"0", height:"0px"});
				switch_login = 1;
			}
		})
		//FIN LOGIN
	});
})(jQuery);
</script>
<!-- <div class="dev"></div> -->
<!--Contenido HEADER-->
<div class="botonup"></div>
<?php include("menuS.tpl.php"); ?>
 
<div id="header_content">
	<div class="in">
	<!--Login--><?php print"<div class='login_block'><div class=flecha></div><div class='titulo'>Inicio de sesión</div><div class=logoicon></div>".(drupal_render(drupal_get_form('user_login_block')))."</div>"; ?><!--Fin Login-->
 	<!--LOGO--><?php $block =block_load('block',1); $output = drupal_render(_block_get_renderable_array(_block_render_blocks(array($block)))); print $output; ?><!--FIN LOGO-->
	<!--BÚSQUEDA--><div class="buscador"><?php $bloque_busqueda = module_invoke('search', 'block_view', 'search'); print render($bloque_busqueda);?></div><!--FIN BÚSQUEDA-->
	<!--FECHA--><?php $block =block_load('block',60); $output = drupal_render(_block_get_renderable_array(_block_render_blocks(array($block)))); print $output; ?><!--FIN FECHA-->
	</div>
</div>
<!--Menú Principal-->
<?php include("menuP.tpl.php"); ?>
<!--Fin Menú Principal--> 

<!--FIN Contenido HEADER-->
