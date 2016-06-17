<!--Contenido-->
<div id="columna">
  <!--ANUNCIO 1000x30--><div class="pauta p1000x30"><?php $block =block_load('block',57); $output = drupal_render(_block_get_renderable_array(_block_render_blocks(array($block)))); print $output; ?></div><!--FIN ANUNCIO 1000x30-->
  <!--Seccion--><?php $taxonomy_menu_block = block_load('taxonomy_menu_block','1'); print drupal_render(_block_get_renderable_array(_block_render_blocks(array($taxonomy_menu_block))));?><!--FIN seccion-->
  <div class="izq">
       <?php include("compartir.tpl.php"); ?>
       <?php include("recomendada.tpl.php"); ?>
       <?php include("recomendada_movil.tpl.php"); ?>
       
    <div class="contenido">
      <div class="autor">
                <?php 
                //Nombre y foto columnista
                $sql_columnista=db_query("SELECT a.nid, a.title AS columnista, e.uri
                FROM node AS a, field_data_field_imagen d, file_managed e
                WHERE a.nid=d.entity_id
                AND d.field_imagen_fid=e.fid
                AND a.nid in (select field_columnista_nid from field_data_field_columnista b, node c where b.entity_id=".$node->nid." and c.nid=b.entity_id)")->fetchObject();

                $columnista = $sql_columnista->columnista;
                $id_columnista = $sql_columnista->nid;
                $foto = substr($sql_columnista->uri,8);

                If($foto!=""){
                   print "<div class='foto'><img src='".base_path()."sites/default/files".$foto."' width='110' height='120' /></div>";   
                }   
                ?>
                <?php If($id_columnista!=""){ ?>
                   <div class="columnista"><span>Por:</span> <?php print $columnista; ?></div>
                <?php } ?>
      </div>  

      <?php 
      print "<div class=fecha>".render($content['field_fecha_de_publicacion'])."</div>";
      print "<h2 class=titulo>".$title."</h2>";
      ?>

      <?php
      if (!empty($content['field_tags'])){ 
        print "<div class=etiquetas><span>Temas - </span>".render($content['field_tags'])."</div>";
        }
      print "<div class=texto>".render($content['body'])."</div>"; ?>
    
    </div>
    

    <!--ANUNCIO 468x60--><div class="pauta p468x60"><h2 class="anuncio_txt">Publicidad</h2><div class="info"><?php $block =block_load('block',34); $output = drupal_render(_block_get_renderable_array(_block_render_blocks(array($block)))); print $output; ?></div></div><!--FIN ANUNCIO 468x60-->
    <div class="comentarios">
      <h2>Comentarios</h2>
      <div class="linea"></div>
      <div class="bloque">
        <?php $DisqusBlock = block_load('disqus', 'disqus_comments');     
        $DisqusBlockOutput = drupal_render(_block_get_renderable_array(_block_render_blocks(array($DisqusBlock))));       
        print $DisqusBlockOutput; ?>
      </div>
    </div>
  </div><!--FIN Izquierda-->
  <div class="der">
    <!--ANUNCIO 300x600--><div class="pauta p300x600"><h2 class="anuncio_txt">Publicidad</h2><div class="info"><?php $block =block_load('block',67); $output = drupal_render(_block_get_renderable_array(_block_render_blocks(array($block)))); print $output; ?></div></div><!--FIN 1.ANUNCIO 300x250-->
    <!--Tema del día--><?php $view = views_get_view('sidebar'); print $view->preview('block'); ?><!--FIN Tema del día-->
    <!--ANUNCIO 300x100--><div class="pauta p300x100"><h2 class="anuncio_txt">Publicidad</h2><div class="info"><?php $block =block_load('block',54); $output = drupal_render(_block_get_renderable_array(_block_render_blocks(array($block)))); print $output; ?></div></div><!--FIN 1.ANUNCIO 300x100-->
    <!-- Twitter --> <?php $block =block_load('block',63); $output = drupal_render(_block_get_renderable_array(_block_render_blocks(array($block)))); print $output; ?> <!--FIN Twitter -->  
    <!--Suscripciones--><?php $block =block_load('block',65); $output = drupal_render(_block_get_renderable_array(_block_render_blocks(array($block)))); print $output; ?><!--FIN Suscripciones-->
    <!--ANUNCIO 300x100--><div class="pauta p300x100"><h2 class="anuncio_txt">Publicidad</h2><div class="info"><?php $block =block_load('block',56); $output = drupal_render(_block_get_renderable_array(_block_render_blocks(array($block)))); print $output; ?></div></div><!--FIN 1.ANUNCIO 300x100-->
  </div><!--FIN Derecha-->
</div>
<!--Fin Contenido-->