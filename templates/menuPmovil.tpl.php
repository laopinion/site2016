<div id="menu-movil">
	<div class="cerrar"><span>Cerrar</span></div>
	<!--BÚSQUEDA--><div class="buscador"><?php $bloque_busqueda = module_invoke('search', 'block_view', 'search'); print render($bloque_busqueda);?></div><!--FIN BÚSQUEDA-->
    	<ul class="menup">
      		<li class="home"><a href="<?php print base_path(); ?>">Diario La Opinión | Cúcuta</a></li>
      		
      		<li class="cucuta dropdown"><a href="<?php print base_path(); ?>cucuta">Cúcuta</a><span></span></li>
					<ul class="mainsubmenu">
						<li><a href="<?php print base_path(); ?>por-los-barrios">Por los barrios</a></li>
						<li><a href="<?php print base_path(); ?>memorias">Memorias</a></li>
					</ul>
				

			<li class="region dropdown"><a href="<?php print base_path(); ?>region">Región</a></li>
					<ul class="mainsubmenu">
						<li><a href="<?php print base_path(); ?>ocana">Ocaña</a></li>
						<li><a href="<?php print base_path(); ?>pamplona">Pamplona</a></li>
					</ul>

      		<li class="judicial dropdown"><a href="<?php print base_path(); ?>judicial" style="border:0px;">Judicial</a></li>
      		<li class="frontera dropdown"><a href="<?php print base_path(); ?>frontera" style="border:0px;">Frontera</a></li>
			
			<li class="actualidad dropdown"><a href="<?php print base_path(); ?>actualidad">Actualidad</a></li>
					<ul class="mainsubmenu">
						<li><a href="<?php print base_path(); ?>economia">Economía</a></li>
						<li><a href="<?php print base_path(); ?>politica">Política</a></li>
						<li><a href="<?php print base_path(); ?>colombia">Colombia</a></li>
						<li><a href="<?php print base_path(); ?>venezuela">Venezuela</a></li>
						<li><a href="<?php print base_path(); ?>mundo">Mundo</a></li>
					</ul>
			
		
			<li class="opinion dropdown"><a href="<?php print base_path(); ?>opinion">opinión</a></li>
					<ul class="mainsubmenu">
						<li><a href="<?php print base_path(); ?>editorial">Editorial</a></li>
						<li><a href="<?php print base_path(); ?>columnistas">Columnistas</a></li>
						<li><a href="<?php print base_path(); ?>caricaturas">Caricaturas</a></li>
					</ul>

			<li class="deportes dropdown"><a href="<?php print base_path(); ?>deportes">Deportes</a></li>
					<ul class="mainsubmenu">
						<li><a href="<?php print base_path(); ?>cucuta-deportivo">Cúcuta Deportivo</a></li>
						<li><a href="<?php print base_path(); ?>futbol">Futbol</a></li>
						<li><a href="<?php print base_path(); ?>mas-deportes">+ deportes</a></li>
						<li><a href="<?php print base_path(); ?>copa-america-2015">Copa América 2015</a></li>
					</ul>
	
			<li class="entretenimiento dropdown"><a href="<?php print base_path(); ?>entretenimiento">Entretenimiento</a></li>
					<ul class="mainsubmenu">
						<li><a href="<?php print base_path(); ?>actividad-social">Actividad social</a></li>
						<li><a href="<?php print base_path(); ?>tecnologia">Tecnología</a></li>
						<li><a href="<?php print base_path(); ?>cultura">Cultura</a></li>
						<li><a href="<?php print base_path(); ?>tendencias">Tendencias</a></li>
						<li><a href="<?php print base_path(); ?>viral">Viral</a></li>
						<li><a href="<?php print base_path(); ?>vida-y-salud">Vida y salud</a></li>
					</ul>
			
			<li class="servicios dropdown"><a href="<?php print base_path(); ?>servicios" style="border:0px;">Servicios</a></li>
			<li class="participacion dropdown"><a href="<?php print base_path(); ?>participacion" style="border:0px;">Participación</a></li>
			<ul class="redes-sociales">
	      		<li class="facebook"><a href="https://www.facebook.com/laopinioncucuta" target="_blank" style="border:0px;">Facebook</a></li>
	      		<li class="twitter"><a href="https://www.twitter.com/laopinioncucuta" target="_blank" style="border:0px;">Twitter</a></li>
	      		<li class="instagram"><a href="https://www.instagram.com/laopinioncucuta" target="_blank" style="border:0px;">Instagram</a></li>
	      		<li class="youtube"><a href="https://www.youtube.com/user/WEBLAOPINION" target="_blank" style="border:0px;">Youtube</a></li>
	      	</ul>
    	</ul>
</div>