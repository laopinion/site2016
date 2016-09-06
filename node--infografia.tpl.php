<!--Contenido-->
    <div class="notas_header">
    <!--ANUNCIO 728x90--><div class="pauta p728x90n"><?php include("pautas/N_728x90.php"); ?></div><!--FIN ANUNCIO 728x90-->
    </div>
    <!--ANUNCIO 1000x50 Flotante--><div class="pauta flotante"><?php include("pautas/N_flotante.php"); ?></div><!--FIN ANUNCIO 1000x50 Flotante-->
    <!--ANUNCIO Layer--><?php include("pautas/N_layer.php"); ?><!--FIN ANUNCIO Layer-->
<div id="infografia">
    <div class="cen">
    <!--ANUNCIO MOVIL 320x50--><div class="pauta_movil p320x50"><?php include("pautas/Nm_320x50_1.php"); ?></div><!--FIN ANUNCIO 320x50-->
      <!--Seccion--><?php $taxonomy_menu_block = block_load('taxonomy_menu_block','1'); print drupal_render(_block_get_renderable_array(_block_render_blocks(array($taxonomy_menu_block))));?><!--FIN seccion-->
      <div class="compartir_table">
        <?php include("compartirbarra.php"); ?>
      </div>
       <?php include("compartir.tpl.php"); ?>
       <?php //include("recomendada.tpl.php"); ?>
       <?php //include("recomendada_movil.tpl.php"); ?>
      <div class="contenido">
          <div class="color"></div>
          <?php 
            print "<div class=seccion>".render($content['field_seccion'])."</div>";
            print "<div class=sep> - </div>";
            print "<div class=fecha>".render($content['field_fecha_de_publicacion'])."</div>";
            print "<h2 class=titulo>".$title."</h2>";
          ?>
          <!--Resumen--><?php  $view = views_get_view('detalle'); print $view->preview('block_2'); ?><!--FIN Resumen-->

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
            print "<div class=texto>".render($content['body'])."</div>";
            print "<div class=autor>".render($content['field_autor'])."</div>"; 
        ?>
        <!--formulario-->
      <div id="newsletter"><?php $block = module_invoke('webform', 'block_view', 'newsletter-90577');print render($block['content']); ?></div><!--FIN formulario-->
    <!--ANUNCIO 300x250--><div class="pauta p300x250"><h2 class="anuncio_txt">Publicidad</h2><div class="info"><?php include("pautas/N_468x60.php"); ?></div></div><!--FIN ANUNCIO 300x250-->
    <!--ANUNCIO MOVIL 320x50--><div class="pauta_movil p320x50"><?php include("pautas/Nm_320x50_2.php"); ?></div><!--FIN ANUNCIO 320x50-->
    <div class="comentarios">
      <div class="linea"></div>
      <div class="color"></div><h2>Comentarios</h2>
      <div class="bloque"><?php include("disqus.php"); ?></div>
    </div>
    <!--ANUNCIO 300x250--><div class="pauta p300x250"><h2 class="anuncio_txt">Publicidad</h2><div class="info"><?php include("pautas/lemonnet_1.php"); ?></div></div><!--FIN ANUNCIO 300x250-->
    <!--ANUNCIO MOVIL 320x50--><div class="pauta_movil p320x50"><?php include("pautas/Nm_320x50_3.php"); ?></div><!--FIN ANUNCIO 320x50-->
        <div class="mas_infografias">
        <!--Más infografias--><div class="mas_infografias"><h2><div class="color"></div>+ INFOGRAFIAS</h2><div class="linea"></div></div><?php $view = views_get_view('detalle'); print $view->preview('block_3'); ?></div><!--FIN Más infografias-->
        <hr class="divisor_taboola">
        <!--TABOOLA-->
        <div id="taboola-below-article-thumbnails"></div>
          <script type="text/javascript">
            window._taboola = window._taboola || [];
            _taboola.push({
              mode: 'thumbnails-a',
              container: 'taboola-below-article-thumbnails',
              placement: 'Below Article Thumbnails',
              target_type: 'mix'
            });
          </script>
        <!--FIN TABOOLA-->
    </div> <!--Fin izquierdo-->
    <div class="der">
      <!--ANUNCIO 300x250--><div class="pauta p300x250"><h2 class="anuncio_txt">Publicidad</h2><div class="info"><?php include("pautas/clickio300x250.php"); ?></div></div><!--FIN ANUNCIO 300x250-->
      <!--Noticias Recientes--><?php $view = views_get_view('recientes'); print $view->preview('block'); ?><!--FIN Noticias Recientes-->
      <!--ANUNCIO 300x250--><div class="pauta p300x250"><h2 class="anuncio_txt">Publicidad</h2><div class="info"><?php include("pautas/N_300x250_1.php"); ?></div></div><!--FIN ANUNCIO 300x250-->
      <!--ANUNCIO 300x250--><div class="pauta p300x250"><h2 class="anuncio_txt">Publicidad</h2><div class="info"><?php include("pautas/N_300x250_2.php"); ?></div></div><!--FIN ANUNCIO 300x250-->
      <!--Noticias Recientes--><?php $view = views_get_view('recientes'); print $view->preview('block_1'); ?><!--FIN Noticias Recientes-->   
      <!--ANUNCIO 300x600--><div class="pauta p300x250" style="float:left"><h2 class="anuncio_txt">Publicidad</h2><div class="info"><?php include("pautas/N_300x600.php"); ?></div></div><!--FIN ANUNCIO 300x250-->
      <!--Noticias Recientes--><?php $view = views_get_view('recientes'); print $view->preview('block_2'); ?><!--FIN Noticias Recientes-->  
      <!--ANUNCIO 300x250--><div class="pauta p300x250" style="float:left"><h2 class="anuncio_txt">Publicidad</h2><div class="info"><?php include("pautas/clickio300x250.php"); ?></div></div><!--FIN ANUNCIO 300x250-->
      <!--Inicio Suscripciones--> 
      <div class="suscripciones">
        <a href="<?php print base_path(); ?>suscripciones"><img src="<?php print base_path(); ?>sites/default/themes/op/images/suscripcion.png" alt="suscripciones"></a>
      </div><!--FIN Suscripciones-->
      <!--Juegos--><div class="juegos"><a href="http://juegos.laopinion.com.co/"><img src="<?php print base_path(); ?>sites/default/themes/op/images/juegos.jpg"></a></div><!--FIN Juegos-->
      <!--ANUNCIO 300x250--><div class="pauta p300x250"><h2 class="anuncio_txt">Publicidad</h2><div class="info"><?php include("pautas/lemonnet_2.php"); ?></div></div><!--FIN ANUNCIO 300x250-->
      <!--ANUNCIO 300x250--><div class="pauta p300x250"><h2 class="anuncio_txt">Publicidad</h2><div class="info"><?php include("pautas/adman_inbanner.php"); ?></div></div><!--FIN ANUNCIO 300x250-->
    </div><!--FIN Derecha-->
    <!--Noticias recientes footer-->
      <div class="recientes_footer">
        <div class="titulo"><div class="color"></div><h2>ULTIMAS NOTICIAS</h2></div>
      </div>
      <div class="notas_footer">
        <!--Noticias Recientes--><?php $view = views_get_view('recientes'); print $view->preview('block_3'); ?><!--FIN Noticias Recientes-->
      </div><!--Fin Noticias recientes footer-->
      <hr>
      <!--Multimedia footer-->
      <div class="multimedia_recientes_footer">
        <div class="titulo"><div class="color"></div><h2>MULTIMEDIA</h2></div>
      </div>
      <div class="multimedia_footer">   
       <!--GALERIAS--><div class="galerias"></div><?php $view = views_get_view('recientes'); print $view->preview('block_4'); ?><!--FIN GALERIAS-->
      </div>
      <!--FIN Multimedia footer-->
      <hr>
      <div class="center">
        <div class="productos"><div class="color"></div><a href="<?php print base_path(); ?>productos">Productos La Opinión</a></div><?php include_once("productos.php") ?>
      </div><!--Fin Productos la opinion-->
</div> 
