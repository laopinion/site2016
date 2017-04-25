<?php include("pautas/script_secciones.php"); ?>
<div class="pautas_header">
    <!--ANUNCIO 970x90--><div class="pauta p970x90"><div class="info"></div><?php include("pautas/dfp/S_970x90.php"); ?></div><!--FIN 1.ANUNCIO 970x90-->
</div>
<div id="head_desktop"><?php include("header.tpl.php"); ?></div>
<div id="head_movil"><?php include("header_movil.tpl.php"); ?></div>
<!--ANUNCIO 1000x50 Flotante--><div class="pauta flotante"><?php include("pautas/dfp/S_flotante.php"); ?></div><!--FIN ANUNCIO 1000x50 Flotante-->
<!--ANUNCIO Layer--><div class="layer"><?php include("pautas/dfp/S_layer.php"); ?></div><!--FIN ANUNCIO Layer-->
<section id="opinion">
    <div class="izq">
      <!--ANUNCIO 1000x90--><div class="pauta p1000x90" style="display: none"><?php include("pautas/dfp/S_1000x90.php"); ?></div><!--FIN ANUNCIO 1000x90-->
        <?php if (!empty($tabs['#primary'])): ?><div id="tabs"><?php print render($tabs); ?></div><?php endif; ?>
        <!--Seccion--><?php $taxonomy_menu_block = block_load('taxonomy_menu_block','1'); $taxtmprender = _block_render_blocks(array($taxonomy_menu_block)); $taxtmprender2 = _block_get_renderable_array($taxtmprender); print drupal_render($taxtmprender2); ?><!--FIN seccion-->
         <?php include("compartir.tpl.php"); ?>
         <?php //include("recomendada.tpl.php"); ?>
         <?php //include("recomendada_movil.tpl.php"); ?>
         <div class="contenido">
          <!--Editorial--><?php print EjecutarViewCache('opinion','block','hora'); ?><!--FIN Editorial--> 
          <!--Caricaturas-->
          <div class="caricaturas"><div class="color"></div><h2>Caricaturas</h2>
            <div class="cari">
              <!--Ultima caricatura--><?php print EjecutarViewCache('opinion','block_1','hora'); ?><!--FIN Ultima caricatura-->
              <!--Otras caricaturas-->
              <div class="otras">
                <?php print EjecutarViewCache('opinion','block_2','hora'); ?>
              </div><!--FIN Otras caricaturas-->
                <div class="paginador">
                  <div class="item1 item">1</div>
                  <div class="item2 item">2</div>
                </div>
            </div>
          </div><!--FIN Caricaturas-->
          <!--Columnistas--><?php print EjecutarViewCache('opinion','block_3','hora'); ?><!--FIN Columnistas-->
         </div>
    </div><!--Fin izquierda-->
    <div class="der">
      <!--Columnistas Destacado--><?php print EjecutarViewCache('opinion','block_4','hora');?><!--FIN Columnistas Destacado-->
      <!--ANUNCIO 300x250--><div class="pauta p300x250"><h2 class="anuncio_txt">Publicidad</h2><div class="info"><?php include("pautas/clickio300x250.php"); ?></div></div><!--FIN ANUNCIO 300x250-->
      <!--Noticias Recientes--><?php print EjecutarViewCache('recientes','block_7','mediano'); ?><!--FIN Noticias Recientes-->
      <!--ANUNCIO 300x250--><div class="pauta p300x250"><h2 class="anuncio_txt">Publicidad</h2><div class="info"><?php include("pautas/dfp/S_300x250_1.php"); ?></div></div><!--FIN ANUNCIO 300x250-->
      <!--Noticias Recientes--><?php print EjecutarViewCache('recientes','block_7','mediano'); ?><!--FIN Noticias Recientes-->   
      <!--ANUNCIO 300x250--><div class="pauta p300x250"><h2 class="anuncio_txt">Publicidad</h2><div class="info"><?php include("pautas/dfp/S_300x250_2.php"); ?></div></div><!--FIN ANUNCIO 300x250-->
    </div> <!--Fin derecha-->
</section><!--Fin opinion-->
