<?php include("pautas/secciones.php"); ?>
<div id="head_desktop"><?php include("header.tpl.php"); ?></div>
<div id="head_movil"><?php include("header_movil.tpl.php"); ?></div>
<!--ANUNCIO 1000x50 Flotante--><div class="pauta flotante"><?php include("pautas/S_flotante.php"); ?></div><!--FIN ANUNCIO 1000x50 Flotante-->
<!--ANUNCIO Layer--><?php include("pautas/S_layer.php"); ?></div><!--FIN ANUNCIO Layer-->
<section id="opinion">
    <div class="izq">
      <!--ANUNCIO 1000x90--><div class="pauta p1000x90" style="display: none"><?php include("pautas/S_1000x90.php"); ?></div><!--FIN ANUNCIO 1000x90-->
        <?php if (!empty($tabs['#primary'])): ?><div id="tabs"><?php print render($tabs); ?></div><?php endif; ?>
        <!--Seccion--><?php $taxonomy_menu_block = block_load('taxonomy_menu_block','1'); print drupal_render(_block_get_renderable_array(_block_render_blocks(array($taxonomy_menu_block))));?><!--FIN seccion-->
         <?php include("compartir.tpl.php"); ?>
         <?php include("recomendada.tpl.php"); ?>
         <?php include("recomendada_movil.tpl.php"); ?>
         <div class="contenido">
          <!--Editorial--><?php $view = views_get_view('opinion'); print $view->preview('block'); ?><!--FIN Editorial--> 
          <!--Caricaturas-->
          <div class="caricaturas"><div class="color"></div><h2>Caricaturas</h2>
            <div class="cari">
              <!--Ultima caricatura--><?php $view = views_get_view('opinion'); print $view->preview('block_1'); ?><!--FIN Ultima caricatura-->
              <!--Otras caricaturas-->
              <div class="otras">
                <?php $view = views_get_view('opinion'); print $view->preview('block_2'); ?>
              </div><!--FIN Otras caricaturas-->
                <div class="paginador">
                  <div class="item1 item">1</div>
                  <div class="item2 item">2</div>
                </div>
            </div>
          </div><!--FIN Caricaturas-->
          <!--Columnistas--><?php $view = views_get_view('opinion'); print $view->preview('block_3'); ?><!--FIN Columnistas-->
         </div>
        </div><!--Fin izquierda-->
        <div class="der">
          <!--Columnistas Destacado--><?php $view = views_get_view('opinion'); print $view->preview('block_4'); ?><!--FIN Columnistas Destacado-->
          <?php $view = views_get_view('recientes'); print $view->preview('block'); ?><!--FIN Noticias Recientes-->
          <!--Juegos<div class="juegos"><?php include("juegos.tpl.php"); ?></div>-->
          <!--ANUNCIO 300x250--><div class="pauta p300x250" style="float:left"><h2 class="anuncio_txt">Publicidad</h2><div class="info"><?php include("pautas/S_300x250_1.php"); ?></div></div><!--FIN ANUNCIO 300x250-->
          <!--Noticias Recientes-->
          <!--Noticias Recientes--><?php $view = views_get_view('recientes'); print $view->preview('block_1'); ?><!--FIN Noticias Recientes-->   
          <!--Juegos--><div class="juegos"><a href="http://juegos.laopinion.com.co/"><img src="<?php print base_path(); ?>sites/default/themes/op/images/juegos.jpg"></a></div><!--FIN Juegos-->
        </div> <!--Fin derecha-->
</section><!--Fin opinion-->
