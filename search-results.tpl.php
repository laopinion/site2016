<?php

/**
 * @file
 * Default theme implementation for displaying search results.
 *
 * This template collects each invocation of theme_search_result(). This and
 * the child template are dependent to one another sharing the markup for
 * definition lists.
 *
 * Note that modules may implement their own search type and theme function
 * completely bypassing this template.
 *
 * Available variables:
 * - $search_results: All results as it is rendered through
 *   search-result.tpl.php
 * - $module: The machine-readable name of the module (tab) being searched, such
 *   as "node" or "user".
 *
 *
 * @see template_preprocess_search_results()
 *
 * @ingroup themeable
 */
?>
<div id="search">
	<div class="busquedas">
		<div class="head">
			<h2>Resultados para </h2>
			<ul class="tags">
			    <li class="first notas item <?php echo (arg(0)=='search'&&arg(1)=='site')?'active':''; ?>"><a href="/search/site"><span>Notas</span> (<?php echo ReturnCountResultsApacheSolr('article'); ?>)</a></li>
			    <li class="galerias item <?php echo (arg(0)=='search'&&arg(1)=='site')?'active':''; ?>"><a href="/search/site"><span>Galerías</span> (<?php echo ReturnCountResultsApacheSolr('galeria_imagenes'); ?>)</a></li>
			    <li class="videos item <?php echo (arg(0)=='search'&&arg(1)=='site')?'active':''; ?>"><a href="/search/site"><span>Videos</span> (<?php echo ReturnCountResultsApacheSolr('video'); ?>)</a></li>
			    <li class="podcast item <?php echo (arg(0)=='search'&&arg(1)=='site')?'active':''; ?>"><a href="/search/site"><span>Podcast</span> (<?php echo ReturnCountResultsApacheSolr('podcast'); ?>)</a></li>
			    <li class="columna item <?php echo (arg(0)=='search'&&arg(1)=='site')?'active':''; ?>"><a href="/search/site"><span>Columnas de opinión</span> (<?php echo ReturnCountResultsApacheSolr('columna_de_opinion'); ?>)</a></li>
			    <li class="caricatura item <?php echo (arg(0)=='search'&&arg(1)=='site')?'active':''; ?>"><a href="/search/site"><span>Caricaturas</span> (<?php echo ReturnCountResultsApacheSolr('caricatura'); ?>)</a></li>
			    <li class="infografia item <?php echo (arg(0)=='search'&&arg(1)=='site')?'active':''; ?>"><a href="/search/site"><span>Infografias</span> (<?php echo ReturnCountResultsApacheSolr('infografias'); ?>)</a></li>
			</ul>
		</div>
	</div>
	<div class="informacion">
		<!--Búsqueda--><Div class="busqueda"><div class="formulario_busqueda"><h3>Nueva búsqueda</h3><?php $bloque_busqueda = module_invoke('search', 'block_view', 'search'); print render($bloque_busqueda);?></div></div><!--Fin Búsqueda-->
		<div class="opciones">	
		<h3>Filtrar por</h3>
		<!--Fechas--><Div class="fechas"><h3>Rango de fechas</h3><?php $bloque_fechas = module_invoke('apachesolr_custom_date_filter', 'block_view', 'apachesolr_custom_date_filter'); print render($bloque_fechas); ?></div><!--FIN Fechas-->
		<!--Publicacion--><Div class="publicacion"><h3>Fecha</h3><?php $bloque_publicacion = module_invoke('facetapi', 'block_view', 'ihDFvfwDSSlY14r5v23VTwEtRyRfOewN'); print render($bloque_publicacion); ?></div><!--FIN Publicacion-->
		<!--Secciones--><Div class="secciones"><h3>Sección</h3><?php $bloque_seccion = module_invoke('facetapi', 'block_view', 'p5onnhDtycllLuW9bGmBsheectObQVwR'); print render($bloque_seccion); ?></div><!--FIN secciones-->
		</div>
		<div class="resultados">
			<!--RESULTADOS-->
			<?php if ($search_results): ?>
			  <!--<h2><?php // print t('Search results');?></h2>-->
			  <ol class="search-results <?php print $module; ?>-results">
			    <?php print $search_results; ?>
			  </ol>
			  <?php print $pager; ?>
			<?php else : ?>
			  <h2><?php print t('La búsqueda no obtuvo ningún resultado');?></h2>
			  <?php print search_help('search#noresults', drupal_help_arg()); ?>
			<?php endif; ?>
			<!--FIN RESULTADOS-->
		</div>
	</div>