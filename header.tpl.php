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

<header>
	<div class="top">
		<!--MENU SUPERIOR-->
		<div class="msup">
			<div class="links">
			    <ul class="mizq">
			    	<li class="first"><a href="<?php print base_path(); ?>suscripciones" style="border:0px;">Suscripciones</a></li>
			    	<li><a href="<?php print base_path(); ?>optativos" style="border:0px;">Optativos</a></li>
			      <li class="border"><a href="<?php print base_path(); ?>contactenos">Contáctenos</a></li>
			    </ul>
			    <ul class="mder">
			    	<li class="clasificados_icon"><a href="http://clasificados.laopinion.com.co" style="border:0px;">Clasificados</a></li>
			        <li class="picoyplaca"><!--PICO Y PLACA--><?php $block =block_load('block',61); $output = drupal_render(_block_get_renderable_array(_block_render_blocks(array($block)))); print $output; ?><!--FIN PICO Y PLACA--></li>
			    	<li class="ingreso"><span>Ingreso</span></li>
					<li class="border registro"><a href="<?php print base_path(); ?>user/register" title="Registro">Regístrese</a></li>
			    </ul>
			</div>
		</div>
		<!--FIN MENU SUPERIOR-->
		<div class="center">		
			<!--FECHA--><?php $block =block_load('block',60); $output = drupal_render(_block_get_renderable_array(_block_render_blocks(array($block)))); print $output; ?><!--FIN FECHA-->			
			<div id="logo"><h1><a class="logo" href="<?php print base_path(); ?>"></a></h1></div>
		</div>
		<!--MENU PRINCIPAL-->
		<nav>
			<div id="menup"> 
			    <ul class="menu_p"> 
			        <li><a href="<?php print base_path(); ?>cucuta">Cúcuta</a></li>
			        <li class="divider"></li> 
			        <li class="dropdown region"><a href="<?php print base_path(); ?>region">Región</a> 
			            <ul> 
			                <li><span></span><a href="<?php print base_path(); ?>ocana">ocaña</a></li>
			                <hr> 
			                <li><span></span><a href="<?php print base_path(); ?>pamplona">pamplona</a></li> 
			            </ul> 
			        </li>
			        <li class="divider"></li>  
			        <li><a href="<?php print base_path(); ?>judicial">Judicial</a></li>
			        <li class="divider"></li>  
			        <li><a href="<?php print base_path(); ?>frontera">Frontera</a></li> 
			        <li class="divider"></li>
			        <li class="dropdown actualidad"><a href="<?php print base_path(); ?>actualidad">Actualidad</a> 
			            <ul> 
			                <li><span></span><a href="<?php print base_path(); ?>economia">Economía</a></li>
			                <hr> 
			                <li><span></span><a href="<?php print base_path(); ?>politica">Política</a></li> 
			                <hr>
			                <li><span></span><a href="<?php print base_path(); ?>colombia">Colombia</a></li>
			                <hr> 
			                <li><span></span><a href="<?php print base_path(); ?>venezuela">Venezuela</a></li>
			                <hr> 
			                <li class="dropdown_2"><span></span><a href="<?php print base_path(); ?>mundo">Mundo</a>
			                	
			                </li> 
			            </ul> 
			        </li>
			        <li class="divider"></li>
			        <li class="dropdown opinion"><a href="<?php print base_path(); ?>opinion">Opinión</a> 
			            <ul> 
			                <li><span></span><a href="<?php print base_path(); ?>editorial">Editorial</a></li><hr> 
			                <li><span></span><a href="<?php print base_path(); ?>columnistas">Columnistas</a></li><hr>
			                <li><span></span><a href="<?php print base_path(); ?>caricaturas">Caricaturas</a></li>
			            </ul> 
			        </li>
			        <li class="divider"></li>
			        <li class="dropdown deportes"><a href="<?php print base_path(); ?>deportes">Deportes</a> 
			            <ul> 
			                <li><span></span><a href="<?php print base_path(); ?>cucuta-deportivo">Cúcuta deportivo</a></li><hr> 
			                <li><span></span><a href="<?php print base_path(); ?>futbol">Futbol</a></li><hr>
			                <li><span></span><a href="<?php print base_path(); ?>mas-deportes">+ deportes</a></li>
			                <hr> 
			                <li><span></span><a href="#opcion4">Copa américa 2015</a></li>
			            </ul> 
			        </li>
			        <li class="divider"></li>
			        <li class="dropdown entretenimiento"><a href="<?php print base_path(); ?>entretenimiento">Entretenimiento</a> 
			            <ul> 
			                <li><span></span><a href="<?php print base_path(); ?>actividad-social">Actividad social</a></li>
			                <hr> 
			                <li><span></span><a href="<?php print base_path(); ?>tecnologia">Tecnología</a></li> 
			                <hr>
			                <li><span></span><a href="<?php print base_path(); ?>cultura">Cultura</a></li>
			                <hr> 
			                <li><span></span><a href="<?php print base_path(); ?>tendencias">Tendencias</a></li>
			                <hr> 
			                <li><span></span><a href="<?php print base_path(); ?>viral">Viral</a></li> 
			                <hr> 
			                <li><span></span><a href="<?php print base_path(); ?>vida-y-salud">Vida y salud</a></li> 
			            </ul> 
			        </li>
			        <li class="divider"></li>
			        <li><a href="<?php print base_path(); ?>servicios">Servicios</a></li>
			        <li class="divider"></li>
			        <li><a href="<?php print base_path(); ?>participacion">Participación</a></li>
					<ul id="redes_sociales">
						<li class="facebook">
							<a href="https://www.facebook.com/laopinioncucuta/" target="_blank"></a>							
						</li>
						<li class="twitter">
							<a href="https://www.twitter.com/laopinioncucuta/" target="_blank"></a>
						</li>
						<li class="instagram">
							<a href="https://www.instagram.com/laopinioncucuta/" target="_blank"></a>
						</li>
						<li class="youtube">
							<a href="https://www.youtube.com/user/WEBLAOPINION" target="_blank"></a>
						</li>
					</ul> 
			    </ul> 
			</div>
		</nav>
		<!--FIN MENU PRINCIPAL-->
	</div>
</header>


<!--Contenido HEADER-->
<div class="botonup"></div>
