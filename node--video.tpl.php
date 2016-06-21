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

<!-- Script player -->
<script>
jQuery (function($){
  $(document).ready(function(){
    var id = $(".contenido .video_id .field-name-field-video-id .field-item").html();
    var plataforma = $(".contenido .plataforma .field-name-field-plataforma .field-item").html();
    var youtubeplayer = "<iframe id=frame-video width=1006 height500 src=http://www.youtube.com/embed/" + id + "?hl=es&fs=1&rel=0&showinfo=0 frameborder=0 allowfullscreen></iframe>";
    var facebookplayer = "<div class=fb-video data-href=https://www.facebook.com/" + id + "/ data-width=1006 data-show-text=false><blockquote cite=https://www.facebook.com/" + id + "/ class=fb-xfbml-parse-ignore><a href=https://www.facebook.com/" + id + "/></a></blockquote></div>";
    var vineplayer = "<iframe src=https://vine.co/v/" + id + "/embed/simple width=1006 height=500 frameborder=0></iframe>";
    var instagramplayer = "<blockquote class=instagram-media data-instgrm-captioned data-instgrm-version=7 style= background:#FFF; border:0; border-radius:3px; box-shadow:0 0 1px 0 rgba(0,0,0,0.5),0 1px 10px 0 rgba(0,0,0,0.15); margin: 1px; max-width:658px; padding:0; width:99.375%; width:-webkit-calc(100% - 2px); width:calc(100% - 2px);><div style=padding:8px;> <div style= background:#F8F8F8; line-height:0; margin-top:40px; padding:28.125% 0; text-align:center; width:100%;> <div style= background:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACwAAAAsCAMAAAApWqozAAAABGdBTUEAALGPC/xhBQAAAAFzUkdCAK7OHOkAAAAMUExURczMzPf399fX1+bm5mzY9AMAAADiSURBVDjLvZXbEsMgCES5/P8/t9FuRVCRmU73JWlzosgSIIZURCjo/ad+EQJJB4Hv8BFt+IDpQoCx1wjOSBFhh2XssxEIYn3ulI/6MNReE07UIWJEv8UEOWDS88LY97kqyTliJKKtuYBbruAyVh5wOHiXmpi5we58Ek028czwyuQdLKPG1Bkb4NnM+VeAnfHqn1k4+GPT6uGQcvu2h2OVuIf/gWUFyy8OWEpdyZSa3aVCqpVoVvzZZ2VTnn2wU8qzVjDDetO90GSy9mVLqtgYSy231MxrY6I2gGqjrTY0L8fxCxfCBbhWrsYYAAAAAElFTkSuQmCC); display:block; height:44px; margin:0 auto -44px; position:relative; top:-22px; width:44px;></div></div> <p style= margin:8px 0 0 0; padding:0 4px;> <a href=https://www.instagram.com/p/" + id + "/ style= color:#000; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:normal; line-height:17px; text-decoration:none; word-wrap:break-word; target=_blank>Te enseñamos a preparar las tajadas de maduro de otra manera. Mira la receta completa en nuestro portal.</a></p> <p style= color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; line-height:17px; margin-bottom:0; margin-top:8px; overflow:hidden; padding:8px 0 7px; text-align:center; text-overflow:ellipsis; white-space:nowrap;>Un vídeo publicado por Deléitese Gastronomia (@deleitese_co) el <time style= font-family:Arial,sans-serif; font-size:14px; line-height:17px; datetime=2016-06-19T20:43:02+00:00>19 de Jun de 2016 a la(s) 1:43 PDT</time></p></div></blockquote>";
    //var instagramplayer = "<blockquote class=instagram-media data-instgrm-captioned data-instgrm-version=7 <div style=width:100%;> </div> <p<a href=https://www.instagram.com/p/" + id + "/ </p></blockquote>";


    if(plataforma == "YouTube"){
      $('.video-player').append(youtubeplayer);
    }else
    if(plataforma == "Facebook"){
      $('.video-player').append(facebookplayer);
    }else
    if(plataforma == "Vine"){
      $('.video-player').append(vineplayer);
    }else
    if(plataforma == "Instagram"){
      $('.video-player').append(instagramplayer);
    }
  });
});
</script>
<!-- FIN Script player -->

<!--Contenido-->
<div id="video">
    <!--Seccion--><?php $taxonomy_menu_block = block_load('taxonomy_menu_block','1'); print drupal_render(_block_get_renderable_array(_block_render_blocks(array($taxonomy_menu_block))));?><!--FIN seccion-->
       <?php include("compartir.tpl.php"); ?>
       <?php include("recomendada.tpl.php"); ?>
       <?php include("recomendada_movil.tpl.php"); ?>
    <div class="contenido">
      <div class="color"></div>
      <?php 
      print "<div class=seccion>".render($content['field_seccion'])."</div>";
      print "<div class=sep> - </div>";
      print "<div class=fecha>".render($content['field_fecha_de_publicacion'])."</div>";
      print "<h2 class=titulo>".$title."</h2>";
      ?>
      <!--Resumen--><?php $view = views_get_view('detalles'); print $view->preview('block_1'); ?><!--FIN Resumen-->
      <?php
      print "<div class=video_id>".render($content['field_video_id'])."</div>";
      print "<div class=plataforma>".render($content['field_plataforma'])."</div>";
      print "<div class=video-player></div>";
      print "<div class=miniatura>".render($content['field_imagen'])."</div>";
      ?> 
      <div class="izq">

        <?php
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
        print "<div class=texto>".render($content['body'])."</div>";
        print "<div class=autor>".render($content['field_autor'])."</div>";            
        ?>

        <div class="relacionadas">
           <?php
            if (!empty($content['field_contenidos_relacionados'])){ 
                print "<h2>Relacionadas</h2><div class=linea></div>
                <div class=item>".render($content['field_contenidos_relacionados'])."</div>";
              }
           ?>
        </div>

        <div class="comentarios">
          <div class="linea"></div>
          <div class="color"></div><h2>Comentarios</h2>
          <div class="bloque"><?php include("disqus.php"); ?></div>
        </div>
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
      <!--ANUNCIO 300x250--><div class="pauta p300x250"><h2 class="anuncio_txt">Publicidad</h2><div class="info"><?php $block =block_load('block',53); $output = drupal_render(_block_get_renderable_array(_block_render_blocks(array($block)))); print $output; ?></div></div><!--FIN 1.ANUNCIO 300x250-->
      <!--Tema del día--><?php $view = views_get_view('sidebar'); print $view->preview('block'); ?><!--FIN Tema del día-->
      <!--ANUNCIO 300x100--><div class="pauta p300x100"><h2 class="anuncio_txt">Publicidad</h2><div class="info"><?php $block =block_load('block',54); $output = drupal_render(_block_get_renderable_array(_block_render_blocks(array($block)))); print $output; ?></div></div><!--FIN 1.ANUNCIO 300x100-->
      <!-- + Leidas--><?php $view = views_get_view('sidebar'); print $view->preview('block_5'); ?><!--FIN + Leidas-->
      <!--ANUNCIO 300x100--><div class="pauta p300x100"><h2 class="anuncio_txt">Publicidad</h2><div class="info"><?php $block =block_load('block',55); $output = drupal_render(_block_get_renderable_array(_block_render_blocks(array($block)))); print $output; ?></div></div><!--FIN 1.ANUNCIO 300x100-->
      <!--Suscripciones--><?php $block =block_load('block',65); $output = drupal_render(_block_get_renderable_array(_block_render_blocks(array($block)))); print $output; ?><!--FIN Suscripciones-->
      <!-- Twitter --> <?php $block =block_load('block',63); $output = drupal_render(_block_get_renderable_array(_block_render_blocks(array($block)))); print $output; ?> <!--FIN Twitter -->  
      <!--ANUNCIO 300x100--><div class="pauta p300x100"><h2 class="anuncio_txt">Publicidad</h2><div class="info"><?php $block =block_load('block',56); $output = drupal_render(_block_get_renderable_array(_block_render_blocks(array($block)))); print $output; ?></div></div><!--FIN 1.ANUNCIO 300x100-->
      </div><!--FIN Derecha-->
</div>
<!--Fin Contenido-->