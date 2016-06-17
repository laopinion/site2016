<div id="menu-superior">
  <div class="menus_content">
    	<ul class="menu-izquierdo">
      		<li><a href="<?php print base_path(); ?>suscripciones" style="border:0px;">Suscripciones</a></li>
      		<li><a href="<?php print base_path(); ?>optativos" style="border:0px;">Optativos</a></li>
          <li class="border"><a href="<?php print base_path(); ?>contactenos">Contáctenos</a></li>
    	</ul>
    	<ul class="menu-derecho">
      		<li class="clasificados_icon"><a href="http://clasificados.laopinion.com.co" style="border:0px;">Clasificados</a></li>
      		<li class="estado_tiempo"><!--CLIMA--><?php $block =block_load('block',21); $output = drupal_render(_block_get_renderable_array(_block_render_blocks(array($block)))); print $output; ?><!--FIN CLIMA--></li>
          <li class="picoyplaca"><!--PICO Y PLACA--><?php $block =block_load('block',61); $output = drupal_render(_block_get_renderable_array(_block_render_blocks(array($block)))); print $output; ?><!--FIN PICO Y PLACA--></li>
      		<li class="ingreso"><span>Ingreso</span></li>
			    <li class="border registro"><a href="<?php print base_path(); ?>user/register" title="Registro">Regístrese</a></li>
    	</ul>
		  <ul class="redes-sociales">
      		<li class="facebook"><a href="https://www.facebook.com/laopinioncucuta" target="_blank" style="border:0px;">Facebook</a></li>
      		<li class="twitter"><a href="https://www.twitter.com/laopinioncucuta" target="_blank" style="border:0px;">Twitter</a></li>
      		<li class="instagram"><a href="https://www.instagram.com/laopinioncucuta" target="_blank" style="border:0px;">Instagram</a></li>
      		<li class="youtube"><a href="https://www.youtube.com/user/WEBLAOPINION" target="_blank" style="border:0px;">Youtube</a></li>
      </ul>
  </div>
</div>
<div class="linea_menu"></div>