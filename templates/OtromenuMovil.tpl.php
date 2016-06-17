<div id="otromenu-movil">
	<div class="back"></div>
    	<ul class="otromenu">
			<li class="clasificados"><span></span><a href="http://clasificados.laopinion.com.co" style="border:0px;">Clasificados</a></li>
      		<li class="estado_tiempo"><!--CLIMA--><?php $block =block_load('block',21); $output = drupal_render(_block_get_renderable_array(_block_render_blocks(array($block)))); print $output; ?><!--FIN CLIMA--></li>
          	<li class="picoyplaca"><!--PICO Y PLACA--><?php $block =block_load('block',61); $output = drupal_render(_block_get_renderable_array(_block_render_blocks(array($block)))); print $output; ?><!--FIN PICO Y PLACA--></li>
      		<li class="ingreso"><span>Ingreso</span>
      			<!--Login--><?php print"<div class='login_block'><div class=logoicon></div><div class='titulo'>Inicio de sesión</div>".(drupal_render(drupal_get_form('user_login_block')))."</div>"; ?><!--Fin Login-->
      		</li>  
      		<li class="suscripciones"><span></span><a href="<?php print base_path(); ?>suscripciones">Suscripciones</a></li>
      		<li class="contacto"><span></span><a href="<?php print base_path(); ?>contactenos">Contáctenos</a></li>  	

      	</ul>
</div>