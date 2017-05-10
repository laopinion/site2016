<!--Contenido HEADER-->
<div id="hamburger">
	<span class="izq_arriba"></span>
	<span class="der_arriba"></span>
	<span></span>
	<span></span>
	<span class="izq_abajo"></span>
	<span class="der_abajo"></span>
</div>
<div id="logo">
	<h1><a class="logo" href="<?php print base_path(); ?>"></a></h1>
</div>
<!--Menú Principal-->
<section id="menu_movil">
	<div class="seccion">
		<!--BÚSQUEDA--><?php $bloque_busqueda = module_invoke('search', 'block_view', 'search'); print render($bloque_busqueda);?><!--FIN BÚSQUEDA-->
		<ul class="iconos">
			<li><a href="http://clasificados.laopinion.com.co/"><span id="clasif"></span>Clasificados</a></li>
			<li><a href="<?php print base_path(); ?>user"><span id="ingreso"></span>Ingreso</a></li>
			<li><a href="<?php print base_path(); ?>contactenos"><span id="contac"></span>Contáctenos</a></li>
			<li><a href="<?php print base_path(); ?>suscripciones"><span id="suscrip"></span>Suscripciones</a></li>
		</ul>
		<div class="redes_sociales table">
			<ul>
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
		</div>
	</div>
	<div class="seccion">
		<ul class="bloque cucuta">
			<span></span><div class="linea"></div>
		 	<li><a href="<?php print base_path(); ?>cucuta">Cúcuta</a></li>
		 	<li><a href="<?php print base_path(); ?>por-los-barrios">Por los barrios</a></li>
		 	<li><a href="<?php print base_path(); ?>memorias">Memorias</a></li>
        </ul>
        <ul class="bloque region">
        	<span></span><div class="linea"></div>
        	<li><a href="<?php print base_path(); ?>Region">Region</a></li>
            <li><a href="<?php print base_path(); ?>ocana">ocaña</a></li>
            <li><a href="<?php print base_path(); ?>pamplona">pamplona</a></li> 
        </ul>
        <ul class="bloque judicial table">
			<span></span>
			<li><a href="<?php print base_path(); ?>judicial">Judicial</a></li> 
		</ul>
		<ul class="bloque frontera table">
			<span></span>
			<li><a href="<?php print base_path(); ?>frontera">Frontera</a></li>
		</ul>		
		<ul class="bloque participacion table">
			<span></span>
			<li><a href="<?php print base_path(); ?>participacion">Participación</a></li>
		</ul>
	</div>
	<div class="seccion movil">
		<ul class="bloque judicial">
			<span></span>
			<li><a href="<?php print base_path(); ?>judicial">Judicial</a></li> 
		</ul>
		<ul class="bloque frontera">
			<span></span>
			<li><a href="<?php print base_path(); ?>frontera">Frontera</a></li>
		</ul>
	</div>
	<div class="seccion border">
		<ul class="bloque actualidad">
			<span></span><div class="linea"></div>
			<li><a href="<?php print base_path(); ?>actualidad">Actualidad</a></li>
			<li><a href="<?php print base_path(); ?>economia">Economía</a></li>
            <li><a href="<?php print base_path(); ?>politica">Política</a></li> 
            <li><a href="<?php print base_path(); ?>colombia">Colombia</a></li>
            <li><a href="<?php print base_path(); ?>venezuela">Venezuela</a></li>
            <li><a href="<?php print base_path(); ?>mundo">Mundo</a></li> 
            <li><a href="<?php print base_path(); ?>historicos">Históricos</a></li> 
		</ul>
		<ul class="bloque opinion">
			<span></span><div class="linea"></div>
			<li><a href="<?php print base_path(); ?>opinion">Opinión</a></li>
			<li><a href="<?php print base_path(); ?>editorial">Editorial</a></li>
            <li><a href="<?php print base_path(); ?>columnistas">Columnistas</a></li>
            <li><a href="<?php print base_path(); ?>caricaturas">Caricaturas</a></li>
		</ul>
		<ul class="bloque deportes table">
			<span></span><div class="linea"></div>
			<li><a href="<?php print base_path(); ?>deportes">Deportes</a></li> 
			<li><a href="<?php print base_path(); ?>cucuta-deportivo">Cúcuta deportivo</a></li> 
            <li><a href="<?php print base_path(); ?>futbol">Futbol</a></li>
            <li><a href="<?php print base_path(); ?>mas-deportes">+ deportes</a></li>
            <li><a href="#opcion4">Juegos olímpicos</a></li>
		</ul>
		<ul class="bloque tendencias table">
			<span></span><div class="linea"></div>
			<li><a href="<?php print base_path(); ?>tendencias">Tendencias</a></li>
			<li><a href="<?php print base_path(); ?>actividad-social">Actividad social</a></li>
            <li><a href="<?php print base_path(); ?>tecnologia">Tecnología</a></li>
            <li><a href="<?php print base_path(); ?>cultura">Cultura</a></li> 
            <li><a href="<?php print base_path(); ?>entretenimiento">Entretenimiento</a></li>
            <li><a href="<?php print base_path(); ?>viral">Viral</a></li> 
            <li><a href="<?php print base_path(); ?>vida-y-salud">Vida y salud</a></li>
            <li><a href="<?php print base_path(); ?>zona-verde">Zona verde</a></li> 
		</ul>
		<ul class="bloque servicios table">
			<span></span>
			<li><a href="<?php print base_path(); ?>servicios">Servicios</a></li>
		</ul>
	</div>
	<div class="seccion movil">
		<ul class="bloque deportes">
			<span></span><div class="linea"></div>
			<li><a href="<?php print base_path(); ?>deportes">Deportes</a></li> 
			<li><a href="<?php print base_path(); ?>cucuta-deportivo">Cúcuta deportivo</a></li> 
            <li><a href="<?php print base_path(); ?>futbol">Futbol</a></li>
            <li><a href="<?php print base_path(); ?>mas-deportes">+ deportes</a></li>
            <li><a href="#opcion4">Juegos olímpicos</a></li>
		</ul>
		<ul class="bloque tendencias">
			<span></span><div class="linea"></div>
			<li><a href="<?php print base_path(); ?>tendencias">Tendencias</a></li>
			<li><a href="<?php print base_path(); ?>actividad-social">Actividad social</a></li>
            <li><a href="<?php print base_path(); ?>tecnologia">Tecnología</a></li>
            <li><a href="<?php print base_path(); ?>cultura">Cultura</a></li> 
            <li><a href="<?php print base_path(); ?>entretenimiento">Entretenimiento</a></li>
            <li><a href="<?php print base_path(); ?>viral">Viral</a></li> 
            <li><a href="<?php print base_path(); ?>vida-y-salud">Vida y salud</a></li>
            <li><a href="<?php print base_path(); ?>zona-verde">Zona verde</a></li> 
		</ul>
	</div>
	<div class="seccion movil" style="border: none;">
		<ul class="bloque servicios">
			<span></span>
			<li><a href="<?php print base_path(); ?>servicios">Servicios</a></li>
		</ul>
		<ul class="bloque participacion">
			<span></span>
			<li><a href="<?php print base_path(); ?>participacion">Participación</a></li>
		</ul>
	</div>
	<div class="redes_sociales movil">
		<ul>
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
	</div>
</section><!--Fin menu movil-->
<!--Fin Menú Principal--> 

<!--FIN Contenido HEADER-->

<script>
	$(document).ready(function(){
		$('#hamburger').click(function(){
			$(this).toggleClass('open');
		});
		$('#hamburger').click(function(){
			$('#menu_movil').toggleClass('desplegar');
		});
	});
</script>
