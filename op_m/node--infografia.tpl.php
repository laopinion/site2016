<!--Contenido-->
    <div class="notas_header">
    <!--ANUNCIO 728x90--><div class="pauta p728x90n"><?php include("pautas/clickio728x90.php"); ?></div><!--FIN ANUNCIO 728x90-->
    </div>
    <!--ANUNCIO 1000x50 Flotante--><div class="pauta flotante"><?php include("pautas/dfp/N_flotante.php"); ?></div><!--FIN ANUNCIO 1000x50 Flotante-->
    <!--ANUNCIO Layer--><?php include("pautas/dfp/N_layer.php"); ?><!--FIN ANUNCIO Layer-->
<div id="infografia">
    <div class="cen">
      <!--ANUNCIO MOVIL 320x50--><div class="pauta_movil p320x50"><?php include("pautas/dfp/Nm_320x50_1.php"); ?></div><!--FIN ANUNCIO 320x50-->
      <!--Seccion--><?php $taxonomy_menu_block = block_load('taxonomy_menu_block','1'); $taxtmprender = _block_render_blocks(array($taxonomy_menu_block)); $taxtmprender2 = _block_get_renderable_array($taxtmprender); print drupal_render($taxtmprender2); ?><!--FIN seccion-->
      <div class="compartir_table">
        <?php include("compartirbarra.php"); ?>
      </div>
       <?php include("compartir.tpl.php"); ?>
       <?php // include("recomendada.tpl.php"); ?>
       <?php // include("recomendada_movil.tpl.php"); ?>
      <div class="contenido">
          <div class="color"></div>
          <?php 
            print "<div class=seccion>".render($content['field_seccion'])."</div>";
            print "<div class=sep> - </div>";
            print "<div class=fecha>".render($content['field_fecha_de_publicacion'])."</div>";
            print "<h2 class=titulo>".$title."</h2>";
          ?>
          <!--Resumen--><?php print EjecutarViewCacheArg('detalle','block_2','q'.$_GET["q"],'corto'); ?><!--FIN Resumen-->

          <?php               
              print "<div class=infog>";
                print "<div class='barra table'>";
                if (!empty($content['field_tags'])){ 
                print "<div class=etiquetas><span>Temas - </span>";
                //render($content['field_tags'])
                if (!empty($node->field_tags)) { 
                  foreach($node->field_tags['und'] as $tag) {
                    print  '<a href="/'.drupal_lookup_path('alias', 'taxonomy/term/'.$tag['taxonomy_term']->tid).'">'.$tag['taxonomy_term']->name.'</a>';
                  }
                }
                  print "</div>";
                }
                print "</div>";
              print render($content['field_imagen']);
              print render($content['field_portada']);
              print "</div>";            
          ?>
      </div>
    </div>
    <!--Fin Contenido-->
    <div class="izq">
        <?php 
          print "<div class='barra desktop'>";
                if (!empty($content['field_tags'])){ 
                print "<div class=etiquetas><span>Temas - </span>";
                //render($content['field_tags'])
                if (!empty($node->field_tags)) { 
                  foreach($node->field_tags['und'] as $tag) {
                    print  '<a href="/'.drupal_lookup_path('alias', 'taxonomy/term/'.$tag['taxonomy_term']->tid).'">'.$tag['taxonomy_term']->name.'</a>';
                  }
                }
                  print "</div>";
                }
                include("compartirbarra.php");
            print "</div>";
            ?>
            <div class="texto">
            <?php print render($content['body']); ?>
            </div>
            <?php
            print "<div class=autor>".render($content['field_autor'])."</div>"; ?>
            <div class="io-hidden-author" id="idAutor" style="display:none"></div> 
        <?php include("pautas/teads.php"); ?>
        <?php include("pautas/adman_intext.php"); ?>
        <!--formulario--><div id="newsletter"><?php $block = module_invoke('webform', 'block_view', 'newsletter-118209');print render($block['content']); ?></div><!--FIN formulario-->
        <!--ANUNCIO 300x250--><div class="pauta p300x250"><h2 class="anuncio_txt">Publicidad</h2><div class="info"><?php include("pautas/dfp/N_300x250_6.php"); ?></div></div><!--FIN ANUNCIO 300x250-->
        <!--ANUNCIO MOVIL 300x250--><div class="pauta_movil p300x250"><?php include("pautas/dfp/Nm_300x250.php"); ?></div><!--FIN ANUNCIO 300x250-->
      <div class="relacionadas">
       <?php
        if (!empty($content['field_contenidos_relacionados'])){ 
            print "
            <div class=linea></div>
            <div class=color></div><h2>Notas relacionadas</h2>
            <div class=item>".render($content['field_contenidos_relacionados'])."</div>";
          }
       ?>
      </div>
       <div class="comentarios">
          <div class="linea"></div>
          <div class="color"></div><h2>Comentarios</h2>
          <div class="bloque">
            <?php include("disqus.php"); ?>
          </div>
        </div>
        <!--ANUNCIO 300x250--><div class="pauta p300x250"><h2 class="anuncio_txt">Publicidad</h2><div class="info"><?php include("pautas/clickio300x250.php"); ?></div></div><!--FIN ANUNCIO 300x250-->
        <!--ANUNCIO MOVIL 320x50--><div class="pauta_movil p300x250"><?php include("pautas/Nm_320x50_3.php"); ?></div><!--FIN ANUNCIO 320x50-->
        <div class="mas_infografias">
        <!--Más infografias--><div class="mas_infografias"><h2><div class="color"></div>+ INFOGRAFIAS</h2><div class="linea"></div></div><?php $view = views_get_view('detalle'); print $view->preview('block_3'); ?></div><!--FIN Más infografias-->
        <?php include("taboola.php"); ?>
    </div> <!--Fin izquierdo-->
    <div class="der">
      <!--ANUNCIO 300x250--><div class="pauta p300x250"><h2 class="anuncio_txt">Publicidad</h2><div class="info"><?php include("pautas/clickio300x250.php"); ?></div></div><!--FIN ANUNCIO 300x250-->
      <!--Noticias Recientes--><?php print EjecutarViewCacheArg('recientes','block','q','mediano'); ?><!--FIN Noticias Recientes-->
      <!--ANUNCIO 300x250--><div class="pauta p300x250"><h2 class="anuncio_txt">Publicidad</h2><div class="info"><?php include("pautas/dfp/N_300x250_1.php"); ?></div></div><!--FIN ANUNCIO 300x250-->
      <!--Noticias Recientes--><?php print EjecutarViewCacheArg('recientes','block_1','q','mediano'); ?><!--FIN Noticias Recientes-->   
      <!--ANUNCIO 300x250--><div class="pauta p300x250"><h2 class="anuncio_txt">Publicidad</h2><div class="info"><?php include("pautas/dfp/N_300x250_2.php"); ?></div></div><!--FIN ANUNCIO 300x250-->
      <!--Noticias Recientes--><?php print EjecutarViewCacheArg('recientes','block_2','q','mediano'); ?><!--FIN Noticias Recientes-->  
      <!--ANUNCIO 300x600--><div class="pauta p300x600" style="float:left"><h2 class="anuncio_txt">Publicidad</h2><div class="info"><?php include("pautas/dfp/N_300x600.php"); ?></div></div><!--FIN ANUNCIO 300x600-->
      <!--Inicio Suscripciones--> 
      <div class="suscripciones">
        <a href="<?php print base_path(); ?>suscripciones"><img src="<?php print base_path(); ?>sites/default/themes/op/images/suscripcion.png" alt="suscripciones"></a>
      </div><!--FIN Suscripciones-->
      <!--ANUNCIO ADMAN--><?php include("pautas/adman_inbanner.php"); ?><!--FIN ANUNCIO ADMAN-->    
      <!--ANUNCIO 300x250--><div class="pauta p300x250"><h2 class="anuncio_txt">Publicidad</h2><div class="info"><?php include("pautas/dfp/N_300x250_3.php"); ?></div></div><!--FIN ANUNCIO 300x250-->
      <!--Noticias Recientes--><?php print EjecutarViewCacheArg('recientes','block_5','q','mediano'); ?><!--FIN Noticias Recientes-->
      <!--ANUNCIO 300x600--><div class="pauta p300x600"><h2 class="anuncio_txt">Publicidad</h2><div class="info"><?php include("pautas/dfp/N_300x250_4.php"); ?></div></div><!--FIN ANUNCIO 300x600-->
      <!--Noticias Recientes--><?php print EjecutarViewCacheArg('recientes','block_6','q','mediano'); ?><!--FIN Noticias Recientes-->
      <!--ANUNCIO 300x250--><div class="pauta p300x250"><h2 class="anuncio_txt">Publicidad</h2><div class="info"><?php include("pautas/dfp/N_300x250_5.php"); ?></div></div><!--FIN ANUNCIO 300x250-->
    </div><!--FIN Derecha-->
    <!--Noticias recientes footer-->
      <div class="recientes_footer">
        <div class="titulo"><div class="color"></div><h2>ULTIMAS NOTICIAS</h2></div>
      </div>
      <div class="notas_footer">
        <!--Noticias Recientes--><?php print EjecutarViewCacheArg('recientes','block_3','q','corto'); ?><!--FIN Noticias Recientes-->
      </div><!--Fin Noticias recientes footer-->
      <hr>
      <!--Multimedia footer-->
      <div class="multimedia_recientes_footer">
        <div class="titulo"><div class="color"></div><h2>MULTIMEDIA</h2></div>
      </div>
      <div class="multimedia_footer">   
       <!--GALERIAS--><div class="galerias"></div><?php print EjecutarViewCacheArg('recientes','block_4','q','mediano'); ?><!--FIN GALERIAS-->
      </div>
      <!--FIN Multimedia footer-->
      <hr>
      <div class="center">
        <div class="productos"><div class="color"></div><a href="<?php print base_path(); ?>productos">Productos La Opinión</a></div><?php include_once("productos.php") ?>
      </div><!--Fin Productos la opinion-->
</div> 
