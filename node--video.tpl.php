<!--VIDEO-->
 <div class="notas_header">
    <!--ANUNCIO 728x90--><div class="pauta p728x90n"><?php include("pautas/N_728x90.php"); ?></div><!--FIN ANUNCIO 728x90-->
</div>
<!--ANUNCIO 1000x50 Flotante--><div class="pauta flotante"><?php include("pautas/N_flotante.php"); ?></div><!--FIN ANUNCIO 1000x50 Flotante-->
<!--ANUNCIO Layer--><?php include("pautas/N_layer.php"); ?><!--FIN ANUNCIO Layer-->
<div id="video">
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
       <!--Resumen--><?php $view = views_get_view('detalle'); print $view->preview('block_2'); ?><!--FIN Resumen-->
      <?php
      print "<div class=video_id>".render($content['field_video_id'])."</div>";
      print "<div class=plataforma>".render($content['field_plataforma'])."</div>";
      print "<div class=video-player></div>";
      print "<div class=video-instagram></div>";
      print "<div class=video-twitter></div>";
      ?>
    </div><!--Fin contenido-->
  </div>    
      <div class="izq">
        <?php
         $tipo_video = render(field_view_field('node', $node, 'field_tipo_de_video', array('label'=>'hidden')));
         
        print "<div class=barra>";
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

        if(stristr($tipo_video, "Trailer")){
            print "<div class=poster>".render(field_view_field('node', $node, 'field_poster', array('label'=>'hidden')))."</div>";
            print "<div class=info_trailer>
              <div class=info>
                <h4>Estreno</h4>
                <h3>".render(field_view_field('node', $node, 'field_estreno', array('label'=>'hidden')))."</h3>

                <h4>Director</h4>
                <h3>".render(field_view_field('node', $node, 'field_director', array('label'=>'hidden')))."</h3>
                <h4>Sinopsis</h4>
                <div>".render($content['body'])."</div>
              </div>
            </div>";
        }else{
          ?>
          <div class="texto">
          <?php print render($content['body']); ?>
          </div>
          <?php
        }
        print "<div class=autor>".render($content['field_autor'])."</div>";?>
        <div class="author" id="idAutor" style="display:none"></div> 
        <?php include("pautas/teads.php"); ?>
        <?php include("pautas/adman_intext.php"); ?>
        <!--formulario--><div id="newsletter"><?php $block = module_invoke('webform', 'block_view', 'newsletter-118209');print render($block['content']); ?></div><!--FIN formulario-->
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
        <!--ANUNCIO 300x250--><div class="pauta p300x250"><h2 class="anuncio_txt">Publicidad</h2><div class="info"><?php include("pautas/N_468x60.php"); ?></div></div><!--FIN ANUNCIO 300x250-->
        <!--ANUNCIO MOVIL 320x50--><div class="pauta_movil p300x250"><?php include("pautas/Nm_320x50_2.php"); ?></div><!--FIN ANUNCIO 320x50-->
        <div class="comentarios">
          <div class="linea"></div>
          <div class="color"></div><h2>Comentarios</h2>
          <div class="bloque"><?php include("disqus.php"); ?></div>
        </div>
         <!--ANUNCIO 300x250--><div class="pauta p300x250" style="float:left"><h2 class="anuncio_txt">Publicidad</h2><div class="info"><?php include("pautas/clickio300x250.php"); ?></div></div><!--FIN ANUNCIO 300x250-->
         <!--ANUNCIO MOVIL 320x50--><div class="pauta_movil p300x250"><?php include("pautas/Nm_320x50_3.php"); ?></div><!--FIN ANUNCIO 320x50-->
        <div class="mas_videos"><!--Más videos-->
          <div class="mas_videos"><h2><div class="color"></div>+ VIDEOS</h2><div class="linea"></div></div><?php $view = views_get_view('detalle'); print $view->preview('block_1'); ?>
        </div><!--FIN Más videos-->
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
      </div><!--FIN Izquierda-->
      <div class="der">
        <!--ANUNCIO 300x250--><div class="pauta p300x250"><h2 class="anuncio_txt">Publicidad</h2><div class="info"><?php include("pautas/clickio300x250.php"); ?></div></div><!--FIN ANUNCIO 300x250-->
        <!--Noticias Recientes--><?php $view = views_get_view('recientes'); print $view->preview('block'); ?><!--FIN Noticias Recientes-->
        <!--ANUNCIO 300x250--><div class="pauta p300x250"><h2 class="anuncio_txt">Publicidad</h2><div class="info"><?php include("pautas/N_300x250_1.php"); ?></div></div><!--FIN ANUNCIO 300x250-->
        <!--Noticias Recientes--><?php $view = views_get_view('recientes'); print $view->preview('block_1'); ?><!--FIN Noticias Recientes-->   
        <!--ANUNCIO 300x250--><div class="pauta p300x250"><h2 class="anuncio_txt">Publicidad</h2><div class="info"><?php include("pautas/embimedia_1.php"); ?></div></div><!--FIN ANUNCIO 300x250-->
        <!--Noticias Recientes--><?php $view = views_get_view('recientes'); print $view->preview('block_2'); ?><!--FIN Noticias Recientes-->  
        <!--ANUNCIO 300x600--><div class="pauta p300x600" style="float:left"><h2 class="anuncio_txt">Publicidad</h2><div class="info"><?php include("pautas/N_300x600.php"); ?></div></div><!--FIN ANUNCIO 300x600-->
        <!--Inicio Suscripciones--> 
        <div class="suscripciones">
          <a href="<?php print base_path(); ?>suscripciones"><img src="<?php print base_path(); ?>sites/default/themes/op/images/suscripcion.png" alt="suscripciones"></a>
        </div><!--FIN Suscripciones-->
        <!--ANUNCIO ADMAN--><?php include("pautas/adman_inbanner.php"); ?><!--FIN ANUNCIO ADMAN-->
        <!--ANUNCIO 300x250--><div class="pauta p300x250"><h2 class="anuncio_txt">Publicidad</h2><div class="info"><?php include("pautas/N_300x250_2.php"); ?></div></div><!--FIN ANUNCIO 300x250-->
        <!--ANUNCIO 300x250--><div class="pauta p300x250" style="float:left"><h2 class="anuncio_txt">Publicidad</h2><div class="info"><?php include("pautas/clickio300x250.php"); ?></div></div><!--FIN ANUNCIO 300x250-->
        <!--Noticias Recientes--><?php $view = views_get_view('recientes'); print $view->preview('block_5'); ?><!--FIN Noticias Recientes-->
        <!--ANUNCIO 300x600--><div class="pauta p300x600"><h2 class="anuncio_txt">Publicidad</h2><div class="info"><?php include("pautas/lemonnet_2.php"); ?></div></div><!--FIN ANUNCIO 300x600-->
        <!--Noticias Recientes--><?php $view = views_get_view('recientes'); print $view->preview('block_6'); ?><!--FIN Noticias Recientes-->
        <!--Mundo Infantil--><img src="<?php print base_path(); ?>sites/default/files/ads/2016/10/mundoinfantil.gif"><!--FIN Mundo Infantil-->
      </div><!--FIN Derecha-->
    <!--Fin Contenido-->
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
      <div class="center"><!--Inicio Productos la opinion-->
        <div class="productos"><div class="color"></div><a href="<?php print base_path(); ?>productos">Productos La Opinión</a></div><?php include_once("productos.php") ?>
      </div><!--Fin Productos la opinion-->
</div><!--Fin Video-->

<!-- Script FACEBOOK player -->
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v2.6";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<!-- FIN Script FACEBOOK player -->
<!-- Script INSTAGRAM player -->
<script async defer src=//platform.instagram.com/en_US/embeds.js></script>
<!-- FIN Script INSTAGRAM player -->
<!-- Script VINE player -->
<script src=https://platform.vine.co/static/scripts/embed.js></script>
<!-- FIN Script VINE player -->