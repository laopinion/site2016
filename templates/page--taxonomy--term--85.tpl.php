<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
<script type="text/javascript">if(typeof jQuery==='undefined'){document.write(unescape("<scri"+"pt src='<?php print base_path(); ?>sites/default/themes/datilera/js/jquery-1.8.2.min.js' type='text/javascript'></scri"+"pt>"));}</script>
<link href="<?php print base_path(); ?>sites/default/themes/op/css/style.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="<?php print base_path(); ?>sites/default/themes/op/js/general.js"></script>

<div id="seccion">
  <div id="seccion_content">
    <div class="izq">
        <?php if (!empty($tabs['#primary'])): ?><div id="tabs"><?php print render($tabs); ?></div><?php endif; ?>
        <!--ANUNCIO 1000x30--><div class="p1000x30"><?php  $block =block_load('block',39); $output = drupal_render(_block_get_renderable_array(_block_render_blocks(array($block)))); print $output; ?></div><!--FIN 1.ANUNCIO 1000x30-->
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
           <!--ANUNCIO 300x250--><div class="pauta p300x250"><h2 class="anuncio_txt">Publicidad</h2><div class="info"><?php $block =block_load('block',53); $output = drupal_render(_block_get_renderable_array(_block_render_blocks(array($block)))); print $output; ?></div></div><!--FIN 1.ANUNCIO 300x250-->
          <!--Noticias Recientes-->
          <!--Noticias Recientes--><?php $view = views_get_view('recientes'); print $view->preview('block_1'); ?><!--FIN Noticias Recientes-->   
          <!--Juegos--><div class="juegos"><a href="http://juegos.laopinion.com.co/"><img src="<?php print base_path(); ?>sites/default/themes/op/images/juegos.jpg"></a></div><!--FIN Juegos-->
        </div> <!--Fin derecha-->
      <div id="footer_movil">
        <?php include("footer_movil.tpl.php"); ?>
      </div> <!-- /#footer -->  
      <footer id="footer">
          <?php //include("footer.tpl.php"); ?>
          <?php // print render($page['footer']) ?>
      </footer> <!-- /#footer -->
    </div><!--Fin container seccion-->
</div><!--Fin seccion-->
