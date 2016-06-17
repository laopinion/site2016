<!--Contenido-->
<div id="nota">
  <!--ANUNCIO 1000x30--><div class="pauta p1000x30"><?php $block =block_load('block',71); $output = drupal_render(_block_get_renderable_array(_block_render_blocks(array($block)))); print $output; ?></div><!--FIN ANUNCIO 1000x30-->
  <div class="especial_movil"><?php include("especiales/300.html"); ?></div>
  <!--Seccion--><?php $taxonomy_menu_block = block_load('taxonomy_menu_block','1'); print drupal_render(_block_get_renderable_array(_block_render_blocks(array($taxonomy_menu_block))));?><!--FIN seccion-->
  <div class="izq">
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
      if (!empty($content['field_tags'])){ 
        print "<div class=etiquetas><span>Temas - </span>".render($content['field_tags'])."</div>";
        }
      print "<div class=foto>";
      print render($content['field_portada']);
      if(render($content['field_portada'][0]['#item']['alt'])){
        print "<div class=pie>";
        print "<div class=descripcion>".render($content['field_portada'][0]['#item']['title'])."</div>";
        print "<div class=credito><span>  /  Foto:   </span>".render($content['field_portada'][0]['#item']['alt'])."</div>";
        print "</div>";
      }
      print "</div>";
      print "<div class=texto>".render($content['body'])."</div>";
      print "<div class=autor>".render($content['field_autor'])."</div>";            
      ?>
    </div>

    <div class="relacionadas">
     <?php
      if (!empty($content['field_contenidos_relacionados'])){ 
          print "<h2>Relacionadas</h2><div class=linea></div>
          <div class=item>".render($content['field_contenidos_relacionados'])."</div>";
        }
     ?>
    </div>

    <!--ANUNCIO 468x60--><div class="pauta p468x60"><h2 class="anuncio_txt">Publicidad</h2><div class="info"><?php $block =block_load('block',34); $output = drupal_render(_block_get_renderable_array(_block_render_blocks(array($block)))); print $output; ?></div></div><!--FIN ANUNCIO 468x60-->
    <div class="comentarios">
      <h2>Comentarios</h2>
      <div class="linea"></div>
      <div class="bloque">
            <?php include("disqus.tpl.php"); ?>
    <!--
        <?php // $DisqusBlock = block_load('disqus', 'disqus_comments');     
       // $DisqusBlockOutput = drupal_render(_block_get_renderable_array(_block_render_blocks(array($DisqusBlock))));       
      //  print $DisqusBlockOutput; ?>  -->
      </div>
    </div>

    <div class="seguir_leyendo">
      <!--Seguir leyendo--><?php $view = views_get_view('detalles'); print $view->preview('block_9'); ?><!--FIN Seguir leyendo-->
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
    </div>


  </div><!--FIN Izquierda-->
  <div class="der">
    <?php include("especiales/300.html"); ?>
    <div class="copa_america_detalle">
    <!--Copa america--><?php // $view = views_get_view('copa_america'); print $view->preview('block_6'); ?><!--FIN Copa america-->
    <!--Copa america--><?php // $view = views_get_view('copa_america'); print $view->preview('block_7'); ?><!--FIN Copa america-->
    </div>
    
    <!--ANUNCIO 300x250--><div class="pauta p300x250"><h2 class="anuncio_txt">Publicidad</h2><div class="info"><?php $block =block_load('block',53); $output = drupal_render(_block_get_renderable_array(_block_render_blocks(array($block)))); print $output; ?></div></div><!--FIN 1.ANUNCIO 300x250-->
    <!--Tema del día--><?php $view = views_get_view('sidebar'); print $view->preview('block'); ?><!--FIN Tema del día-->
    <!--Juegos--><div class="juegos"><?php include("juegos.tpl.php"); ?></div>
    <!--ANUNCIO 300x100--><div class="pauta p300x100"><h2 class="anuncio_txt">Publicidad</h2><div class="info"><?php $block =block_load('block',54); $output = drupal_render(_block_get_renderable_array(_block_render_blocks(array($block)))); print $output; ?></div></div><!--FIN 1.ANUNCIO 300x100-->
    <!-- + Leidas--><?php $view = views_get_view('sidebar'); print $view->preview('block_5'); ?><!--FIN + Leidas-->
    <!--ANUNCIO 300x100--><div class="pauta p300x100"><h2 class="anuncio_txt">Publicidad</h2><div class="info"><?php $block =block_load('block',55); $output = drupal_render(_block_get_renderable_array(_block_render_blocks(array($block)))); print $output; ?></div></div><!--FIN 1.ANUNCIO 300x100-->
    <!-- Twitter --> <?php $block =block_load('block',63); $output = drupal_render(_block_get_renderable_array(_block_render_blocks(array($block)))); print $output; ?> <!--FIN Twitter -->  
    <!--ANUNCIO 300x100--><div class="pauta p300x100"><h2 class="anuncio_txt">Publicidad</h2><div class="info"><?php $block =block_load('block',56); $output = drupal_render(_block_get_renderable_array(_block_render_blocks(array($block)))); print $output; ?></div></div><!--FIN 1.ANUNCIO 300x100-->
    <!--Suscripciones--><?php $block =block_load('block',65); $output = drupal_render(_block_get_renderable_array(_block_render_blocks(array($block)))); print $output; ?><!--FIN Suscripciones-->
    <!--Juegos--><div class="juegos"><a href="http://juegos.laopinion.com.co/"><img src="<?php print base_path(); ?>sites/default/themes/op/images/juegos.jpg"></a></div><!--FIN Juegos-->
  </div><!--FIN Derecha-->
</div>
<!--Fin Contenido-->