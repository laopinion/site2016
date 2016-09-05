<div class="notas_header">
    <!--ANUNCIO 728x90--><div class="pauta p728x90n"><?php include("pautas/N_728x90.php"); ?></div><!--FIN ANUNCIO 728x90-->
</div>
<!--ANUNCIO 1000x50 Flotante--><div class="pauta flotante"><?php include("pautas/N_flotante.php"); ?></div><!--FIN ANUNCIO 1000x50 Flotante-->
<!--ANUNCIO Layer--><?php include("pautas/N_layer.php"); ?><!--FIN ANUNCIO Layer-->
<!--Contenido-->
<section id="caricatura">
  <!--ANUNCIO MOVIL 320x50--><div class="pauta_movil p320x50"><?php include("pautas/Nm_320x50_1.php"); ?></div><!--FIN ANUNCIO 320x50-->
   <div class="izq">
      <?php if (!empty($tabs['#primary'])): ?><div id="tabs"><?php print render($tabs); ?></div><?php endif; ?>
      <!--Seccion--><?php $taxonomy_menu_block = block_load('taxonomy_menu_block','1'); $taxtmprender = _block_render_blocks(array($taxonomy_menu_block)); $taxtmprender2 = _block_get_renderable_array($taxtmprender); print drupal_render($taxtmprender2); ?><!--FIN seccion-->
       <?php include("compartir.tpl.php"); ?>
       <?php include("recomendada.tpl.php"); ?>
       <?php include("recomendada_movil.tpl.php"); ?>
       <div class="contenido">
        <!--Editorial--><?php print EjecutarViewCache('opinion','block_6','mediano'); ?><!--FIN Editorial-->
        <div class="caricatura_principal">
          <?php print render($content['field_imagen']);?>
        <!--formulario--><div id="newsletter"><?php $block = module_invoke('webform', 'block_view', 'newsletter-90577');print render($block['content']); ?></div><!--FIN formulario-->
       </div>
       <!--ANUNCIO 300x250--><div class="pauta p300x250"><h2 class="anuncio_txt">Publicidad</h2><div class="info"><?php include("pautas/N_300x250_4.php"); ?></div></div><!--FIN ANUNCIO 300x250-->
       <!--ANUNCIO MOVIL 320x50--><div class="pauta_movil p320x50"><?php include("pautas/Nm_320x50_2.php"); ?></div><!--FIN ANUNCIO 320x50-->
        <div class="comentarios">
          <!-- <div class="linea"></div> -->
          <div class="color"></div><h2>Comentarios</h2>
          <div class="bloque"><?php include("disqus.php"); ?></div>
        </div>
        <div class="mas_caricaturas">
          <div class="color"></div><h2>Más caricaturas</h2>
          <div class="paginador">
            <div class="item1 item">1</div>
            <div class="item2 item">2</div>
          </div>
          <div class="otras">  
          <!--Caricaturas--><?php print EjecutarViewCache('opinion','block_7','mediano'); ?><!--FIN Caricaturas-->
          </div>
        </div>
       </div>
       <!--ANUNCIO 300x250--><div class="pauta p300x250"><h2 class="anuncio_txt">Publicidad</h2><div class="info"><?php include("pautas/N_300x250_5.php"); ?></div></div><!--FIN ANUNCIO 300x250-->
       <!--ANUNCIO MOVIL 320x50--><div class="pauta_movil p320x50"><?php include("pautas/Nm_320x50_3.php"); ?></div><!--FIN ANUNCIO 320x50-->
    </div><!--Fin izquierda-->
    <div class="der">
      <!--ANUNCIO 300x250--><div class="pauta p300x250"><h2 class="anuncio_txt">Publicidad</h2><div class="info"><?php include("pautas/clickio300x250.php"); ?></div></div><!--FIN ANUNCIO 300x250-->
      <!--Columnistas destacados--><?php print EjecutarViewCache('opinion','block_4','mediano'); ?><!--FIN Columnistas destacados-->
      <!--Noticias Recientes--><?php print EjecutarViewCache('recientes','block','mediano'); ?><!--FIN Noticias Recientes-->
      <!--ANUNCIO 300x250--><div class="pauta p300x250"><h2 class="anuncio_txt">Publicidad</h2><div class="info"><?php include("pautas/N_300x250_1.php"); ?></div></div><!--FIN ANUNCIO 300x250-->
      <!--Noticias Recientes--><?php print EjecutarViewCache('recientes','block_1','mediano'); ?><!--FIN Noticias Recientes-->   
      <!--Juegos<div class="juegos"><?php include("juegos.tpl.php"); ?></div>-->
      <!--ANUNCIO 300x250--><div class="pauta p300x250"><h2 class="anuncio_txt">Publicidad</h2><div class="info"><?php include("pautas/N_300x250_2.php"); ?></div></div><!--FIN ANUNCIO 300x250-->
      <!--Noticias Recientes--><?php print EjecutarViewCache('recientes','block_2','mediano'); ?><!--FIN Noticias Recientes-->  
    </div><!--FIN Derecha-->
</section>
<!--Fin Contenido-->
