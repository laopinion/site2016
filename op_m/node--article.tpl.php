<?php include("pautas/clickio_inarticle.php"); ?>
<div class="notas_header">
    <!--ANUNCIO 728x90--><div class="pauta p728x90n"><?php include("pautas/N_728x90.php"); ?></div><!--FIN ANUNCIO 728x90-->
</div>
<!--ANUNCIO 1000x50 Flotante--><div class="pauta flotante"><?php include("pautas/N_flotante.php"); ?></div><!--FIN ANUNCIO 1000x50 Flotante-->
<!--ANUNCIO Layer--><?php include("pautas/N_layer.php"); ?><!--FIN ANUNCIO Layer-->
<!--Contenido-->
<div id="nota">
  <!--ANUNCIO 1000x90--><div class="pauta p1000x90_nota" style="display: none"><?php include("pautas/N_1000x90.php"); ?></div><!--FIN ANUNCIO 1000x90-->
  <!--ANUNCIO MOVIL 320x50--><div class="pauta_movil fijo"><?php include("pautas/Nm_320x50_4.php"); ?></div><!--FIN ANUNCIO 320x50-->
  <div class="izq">
    <!--ANUNCIO MOVIL 320x50--><div class="pauta_movil p320x50"><?php include("pautas/Nm_320x50_1.php"); ?></div><!--FIN ANUNCIO 320x50-->
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
      print "<div class=foto>";
      print render($content['field_portada']);
      if(render($content['field_portada'][0]['#item']['alt'])){
        print "<div class=pie>";
        print "<div class=descripcion>".render($content['field_portada'][0]['#item']['title'])."</div>";
        print "<div class=credito><span>  /  Foto:   </span>".render($content['field_portada'][0]['#item']['alt'])."</div>";
        print "</div>";
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
      }
      print "</div>";
      ?>
      <div class="texto">
      <?php include("pautas/N_intext_1.php"); ?>
      <?php print render($content['body']); ?>
      </div>
      <?php
      print "<div class=autor>".render($content['field_autor'])."</div>";           
      ?>
      <script src="http://icarus-wings.admanmedia.com/intext/intext_vast.js?pmu=ed9c414a;pmb=247b8ee9;size=600x338;visibility=50"data-adm-player="intext"></script>
      <!--formulario--><div id="newsletter"><?php $block = module_invoke('webform', 'block_view', 'newsletter-118209');print render($block['content']); ?></div><!--FIN formulario-->
    </div>    
    <!--ANUNCIO 300x250--><div class="pauta p300x250"><h2 class="anuncio_txt">Publicidad</h2><div class="info"><?php include("pautas/N_468x60.php"); ?></div></div><!--FIN ANUNCIO 300x250-->
    <!--ANUNCIO MOVIL 320x50--><div class="pauta_movil p300x250"><?php include("pautas/Nm_320x50_2.php"); ?></div><!--FIN ANUNCIO 320x50-->
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
      <div class="bloque"><?php include("disqus.php"); ?></div>
    </div>
    <!--ANUNCIO 300x250--><div class="pauta p300x250"><h2 class="anuncio_txt">Publicidad</h2><div class="info"><?php include("pautas/lemonnet_1.php"); ?></div></div><!--FIN ANUNCIO 300x250-->
    <!--ANUNCIO MOVIL 320x50--><div class="pauta_movil p300x250"><?php include("pautas/Nm_320x50_3.php"); ?></div><!--FIN ANUNCIO 320x50-->
    <div class="mas_notas"><!--Más notas-->
      <div class="mas_notas"><h2><div class="color"></div>+ NOTAS</h2><div class="linea"></div></div><?php print EjecutarViewCache('detalle','block_5','mediano'); ?>
    </div><!--FIN Más notas-->
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
    <!--Noticias Recientes--><?php print EjecutarViewCacheArg('recientes','block','q'.$_GET["q"],'mediano'); ?><!--FIN Noticias Recientes-->
    <!--ANUNCIO 300x250--><div class="pauta p300x250"><h2 class="anuncio_txt">Publicidad</h2><div class="info"><?php include("pautas/N_300x250_1.php"); ?></div></div><!--FIN ANUNCIO 300x250-->
    <!--Noticias Recientes--><?php print EjecutarViewCacheArg('recientes','block_1','q'.$_GET["q"],'mediano'); ?><!--FIN Noticias Recientes-->   
    <!--ANUNCIO 300x250--><div class="pauta p300x250"><h2 class="anuncio_txt">Publicidad</h2><div class="info"><?php include("pautas/N_300x250_2.php"); ?></div></div><!--FIN ANUNCIO 300x250-->
    <!--Noticias Recientes--><?php print EjecutarViewCacheArg('recientes','block_2','q'.$_GET["q"],'mediano'); ?><!--FIN Noticias Recientes-->  
    <!--ANUNCIO 300x600--><div class="pauta p300x600" style="float:left"><h2 class="anuncio_txt">Publicidad</h2><div class="info"><?php include("pautas/N_300x600.php"); ?></div></div><!--FIN ANUNCIO 300x600-->
    <!--Inicio Suscripciones--> 
    <div class="suscripciones">
      <a href="<?php print base_path(); ?>suscripciones"><img src="<?php print base_path(); ?>sites/default/themes/op/images/suscripcion.png" alt="suscripciones"></a>
    </div><!--FIN Suscripciones-->
    <!--ANUNCIO ADMAN--><?php include("pautas/adman_inbanner.php"); ?><!--FIN ANUNCIO ADMAN-->    
    <!--Juegos--><div class="juegos"><a href="http://juegos.laopinion.com.co/"><img src="<?php print base_path(); ?>sites/default/themes/op/images/juegos_n.jpg"></a></div><!--FIN Juegos-->
    <!--ANUNCIO 300x250--><div class="pauta p300x250" style="float:left"><h2 class="anuncio_txt">Publicidad</h2><div class="info"><?php include("pautas/clickio300x250.php"); ?></div></div><!--FIN ANUNCIO 300x250-->
    <!--Noticias Recientes--><?php print EjecutarViewCacheArg('recientes','block_5','q'.$_GET["q"],'mediano'); ?><!--FIN Noticias Recientes-->
    <!--ANUNCIO 300x600--><div class="pauta p300x600"><h2 class="anuncio_txt">Publicidad</h2><div class="info"><?php include("pautas/lemonnet_2.php"); ?></div></div><!--FIN ANUNCIO 300x600-->
    <!--Noticias Recientes--><?php print EjecutarViewCacheArg('recientes','block_6','q'.$_GET["q"],'mediano'); ?><!--FIN Noticias Recientes-->
    <!--Urbanidad--><!--<img src="<?php // print base_path(); ?>sites/default/files/ads/2016/09/urbanidad.gif">--><!--FIN Urbanidad-->
    <!--Mundo Infantil--><img src="<?php print base_path(); ?>sites/default/files/ads/2016/10/mundoinfantil.gif"><!--FIN Mundo Infantil-->
  </div><!--FIN Derecha-->
  <!--Noticias recientes footer-->
  <div class="recientes_footer">
    <div class="titulo"><div class="color"></div><h2>ULTIMAS NOTICIAS</h2></div>
  </div>
  <div class="notas_footer">
    <!--Noticias Recientes--><?php print EjecutarViewCacheArg('recientes','block_3','q'.$_GET["q"],'corto'); ?><!--FIN Noticias Recientes-->
  </div><!--Fin Noticias recientes footer-->
  <hr>
  <!--Multimedia footer-->
  <div class="multimedia_recientes_footer">
    <div class="titulo"><div class="color"></div><h2>MULTIMEDIA</h2></div>
  </div>
  <div class="multimedia_footer">  
   <!--GALERIAS--><div class="galerias"></div><?php print EjecutarViewCacheArg('recientes','block_4','q'.$_GET["q"],'mediano'); ?><!--FIN GALERIAS-->
  </div>
  <!--FIN Multimedia footer-->
  <hr>
  <div class="center">
        <div class="productos"><div class="color"></div><a href="<?php print base_path(); ?>productos">Productos La Opinión</a></div><?php include_once("productos.php") ?>
  </div>
</div>
<!--Fin Contenido-->