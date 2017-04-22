<?php include("pautas/clickio_inarticle.php"); ?>
<div class="notas_header">
    <!--ANUNCIO 728x90--><div class="pauta p728x90n"><?php include("pautas/N_728x90.php"); ?></div><!--FIN ANUNCIO 728x90-->
</div>
<!--ANUNCIO 1000x50 Flotante--><div class="pauta flotante"><?php include("pautas/N_flotante.php"); ?></div><!--FIN ANUNCIO 1000x50 Flotante-->
<!--ANUNCIO Layer--><?php include("pautas/N_layer.php"); ?><!--FIN ANUNCIO Layer-->
<!--Contenido-->
<div id="nota" class="url-principal" data-urlp="">
  <!--ANUNCIO 1000x90--><div class="pauta p1000x90_nota" style="display: none"><?php include("pautas/N_1000x90.php"); ?></div><!--FIN ANUNCIO 1000x90-->
  <!--ANUNCIO MOVIL 320x50--><div class="pauta_movil fijo"><?php include("pautas/Nm_320x50_4.php"); ?></div><!--FIN ANUNCIO 320x50-->
  <div class="izq">
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
      <?php // include("pautas/N_intext_1.php"); ?>
      <?php include("pautas/intext_embimedia.php"); ?>
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
    <!--ANUNCIO 300x250--><div class="pauta p300x250" style="float:left"><h2 class="anuncio_txt">Publicidad</h2><div class="info"><?php include("pautas/clickio300x250.php"); ?></div></div><!--FIN ANUNCIO 300x250-->
    <!--ANUNCIO MOVIL 320x50--><div class="pauta_movil p300x250"><?php include("pautas/Nm_320x50_3.php"); ?></div><!--FIN ANUNCIO 320x50-->
    <div class="mas_notas"><!--Más notas-->
      <div class="mas_notas"><h2><div class="color"></div>+ NOTAS</h2><div class="linea"></div></div><?php $view = views_get_view('detalle'); print $view->preview('block_5'); ?>
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
  </div>
  <!-- Scroll infinito  -->

  <section ng-app="app" id="scroll-infinito">
    <div ng-controller="controlador">
      <div class="view">
        <div infinite-scroll='article.nextPage()' infinite-scroll-disabled='article.busy' infinite-scroll-distance='1'>
        <article  ng-controller="contrUrl" class="angular-article">
          <div ng-repeat='dato in article.items' class="li" style="margin-bottom: 100px; float: left;">
            <div class="izq">
              <div class="compartir_table">
                <!--COMPARTIR-->
                <div class="compartirbarra">
                    <ul class="redes_sociales">
                      <li class="fb"><a class="st_facebook_large" href="#" onclick="window.open('https://www.facebook.com/sharer/sharer.php?u=www.laopinion.com.co<?php print $node_url ?>&amp;title=<?php print $title ?>', 'facebook-share-dialog', 'width=626,height=436'); return false;"></a></li>
                      <li class="tw"><a class="st_twitter_large" href="https://twitter.com/intent/tweet?original_referer=http://www.laopinion.com.co<?php print $node_url ?>&amp;text=<?php print $title ?>&amp;tw_p=tweetbutton&amp;url=http://www.laopinion.com.co<?php print $node_url ?>"></a></li>
                      <li class="go"><a class="st_googleplus_large" href="#" onclick="window.open('https://plus.google.com/share?url=www.laopinion.com.co<?php print $node_url ?>', 'Google +','width=626,height=436'); return false;"></a></li>
                      <li class="pin"><a class="st_pinterest_large" href="#" onclick="window.open('http://pinterest.com/pin/create/button/?url=www.laopinion.com.co<?php print $node_url ?>', 'Pinterest','width=626,height=436'); return false;"></a></li>
                      <li class="wp"><a class="st_whatsapp_large" <a href="whatsapp://send?text=<?php print "http://www.laopinion.com.co/".drupal_lookup_path('alias',"node/".$node->nid); ?>" data-action="share/whatsapp/share" rel="nofollow" >Compartir en WhatsApp</a></li>
                    </ul>
                </div><!--FIN COMPARTIR-->
              </div>
             <!-- div id="id" class="{{dato.nid}}" > 
              <a ng-href='{{dato.field_ruta}}' class="ruta" ui-sref="article" style="display: none;">{{dato.field_ruta}}</a>
             </div> -->
              <div class="contenido" in-view="changeUrl(dato.field_ruta, $index, $inview)">
                <div class="color"></div>
                  <div ng-bind-html="dato.seccion" class="seccion"></div>
                  <div class="sep"> - </div>
                  <div ng-bind-html="dato.fecha" class="fecha"></div>
                  <h2 ng-bind-html="dato.title" class="titulo"></h2>
                  <div ng-bind-html="dato.summary" class="resumen"></div>

                  <div class="barra table">
                    <div class="etiquetas">
                      <span>Temas - </span>
                      <aside ng-bind-html="dato.temas"></aside>
                    </div>
                  </div>

                  <div class="foto">
                    <aside ng-bind-html="dato.foto"></aside>
                    <div class="pie"> 
                      <div class="descripcion"></div>
                      <div class="credito"><span> /  Foto:</span></div>
                    </div>

                    <div class="barra desktop">
                      <div class="etiquetas">
                        <span>Temas - </span>
                        <aside ng-bind-html="dato.temas"></aside>
                      </div>

                      <!--COMPARTIR-->
                      <div class="compartirbarra">
                          <ul class="redes_sociales">
                            <li class="fb"><a class="st_facebook_large" href="#" onclick="window.open('https://www.facebook.com/sharer/sharer.php?u=www.laopinion.com.co<?php print $node_url ?>&amp;title=<?php print $title ?>', 'facebook-share-dialog', 'width=626,height=436'); return false;"></a></li>
                            <li class="tw"><a class="st_twitter_large" href="https://twitter.com/intent/tweet?original_referer=http://www.laopinion.com.co<?php print $node_url ?>&amp;text=<?php print $title ?>&amp;tw_p=tweetbutton&amp;url=http://www.laopinion.com.co<?php print $node_url ?>"></a></li>
                            <li class="go"><a class="st_googleplus_large" href="#" onclick="window.open('https://plus.google.com/share?url=www.laopinion.com.co<?php print $node_url ?>', 'Google +','width=626,height=436'); return false;"></a></li>
                            <li class="pin"><a class="st_pinterest_large" href="#" onclick="window.open('http://pinterest.com/pin/create/button/?url=www.laopinion.com.co<?php print $node_url ?>', 'Pinterest','width=626,height=436'); return false;"></a></li>
                            <li class="wp"><a class="st_whatsapp_large" <a href="whatsapp://send?text=<?php print "http://www.laopinion.com.co/".drupal_lookup_path('alias',"node/".$node->nid); ?>" data-action="share/whatsapp/share" rel="nofollow" >Compartir en WhatsApp</a></li>
                          </ul>
                      </div><!--FIN COMPARTIR-->
                    </div>
                  </div>

                  <div ng-bind-html="dato.body" class="texto">
                    <?php //include("pautas/intext_embimedia.php"); ?>
                  </div>
                  <div class="autor">
                    <aside ng-bind-html="dato.autor"></aside>
                    <!-- <aside ng-bind-html="dato.text"></aside> -->
                    <!-- <aside ng-bind-html="dato.field_autor"></aside> -->
                  </div>
                  <meta content="{{dato.field_ruta}}">

                <!-- <script async src="http://icarus-wings.admanmedia.com/intext/intext_vast.js?pmu=ed9c414a;pmb=247b8ee9;size=600x338;visibility=50" data-adm-player="intext"></script> -->
                <!-- <adsense ad-client="ca-pub-ed9c414a" ad-slot="247b8ee9" inline-style="display:inline-block;width:728px;height:90px" ad-format="auto"></adsense> -->
                <!--formulario--><div id="newsletter"><?php $block = module_invoke('webform', 'block_view', 'newsletter-118209');print render($block['content']); ?></div><!--FIN formulario-->
              </div>
              <!--ANUNCIO 300x250--><div class="pauta p300x250"><h2 class="anuncio_txt">Publicidad</h2><div class="info"> <aside></aside></div></div><!--FIN ANUNCIO 300x250-->
              <!--ANUNCIO MOVIL 320x50--><div class="pauta_movil p300x250"><?php //include("pautas/Nm_320x50_2.php"); ?></div><!--FIN ANUNCIO 320x50-->
              <!-- <div pautap></div> -->
              <div class="pauta p300x250">
                <div class="info">
                  <adsense ad-client="ca-pub-3083367533294626" ad-slot="9717777394" inline-style="display:inline-block;width:300px;height:250px" ad-format="auto"></adsense>
                </div>
              </div>
            </div><!--Fin izq-->
          </div>

<!-- 
  <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
Anuncios_1 
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-3083367533294626"
     data-ad-slot="9717777394"
     data-ad-format="auto"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>-->
          
        </article>      
          <div ng-show='article.busy' style="float: left;">Loading data...</div>
        </div>
      </div>
    </div> 
  </section>

</div>
<!--Fin Contenido-->
