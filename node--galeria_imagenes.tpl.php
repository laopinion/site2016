<?php //include("yuhuads.php"); ?>
<script type="text/javascript" src="<?php print base_path(); ?>sites/default/themes/op/js/jquery-1.8.2.min.js"></script>
<script type="text/javascript" src="<?php print base_path(); ?>sites/default/themes/op/js/jssor.js"></script>
<script type="text/javascript" src="<?php print base_path(); ?>sites/default/themes/op/js/jssor.slider.js"></script>
<script type="text/javascript" src="<?php print base_path(); ?>sites/default/themes/op/js/galeria.js"></script>
    
<!--Contenido-->
<div id="galeria">
    <!--ANUNCIO 1000x30--><div class="pauta p1000x30"><?php $block =block_load('block',57); $output = drupal_render(_block_get_renderable_array(_block_render_blocks(array($block)))); print $output; ?></div><!--FIN ANUNCIO 1000x30-->
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
           <!--Resumen--><?php $view = views_get_view('detalle'); print $view->preview('block_2'); ?><!--FIN Resumen-->
          <?php        
          
          ?>  
      <!-- INICIO SLIDER -->
      <div id="slider" style="position: relative; top: 0px; left: 0px;width:1006px; height: 660px; background: #333; overflow: hidden;">
            <!-- Loading Screen -->
            <div u="loading" style="width: 1006px;position: absolute; top: 0px; left: 0px;">
                <div style="filter: alpha(opacity=70); opacity:0.7; position: absolute; display: block;
                    background-color: #333; top: 0px; left: 0px;width: 100%;height:100%;">
                </div>
                <div style="position: absolute; display: block;
                    top: 0px; left: 0px;width: 100%;height:100%;">
                </div>
                <div style="position: absolute; display: block;
                    top: 0px; left: 0px;width: 100%;height:100%;">
                </div>
            </div>

            <div u="slides" style="cursor: move; position: absolute; left: 0; top: 0; width: 1006px; height: 540px; overflow: hidden;">
                  <?php 
                    if (!empty($node->field_imagenes)) {   
                      $i=0;
                      foreach($node->field_imagenes['und'] as $imagen) {           
                        $foto = substr($content['field_imagenes'][$i]['#item']['uri'],8);
                        print "
                        <div>";
                        print "<div class=pie>";
                        print "<div class=descripcion>".render($content['field_imagenes'][$i]['#item']['title'])."</div>";
                        print "<div class=credito><span>  /  Foto:   </span>".render($content['field_imagenes'][$i]['#item']['alt'])."</div>";
                        print "</div>";
                        print "
                            <img u=image src='".base_path()."sites/default/files".$foto."' alt='".render($content['field_imagenes'][$i]['#item']['alt'])."' width='1006; height='540'/>
                            <img u=image src='".base_path()."sites/default/files".$foto."' alt='".render($content['field_imagenes'][$i]['#item']['alt'])."' width='1006; height='540'/>
                            <img u=thumb src='".base_path()."sites/default/files/styles/thumbnail/public".$foto."' alt='".render($content['field_imagenes'][$i]['#item']['alt'])."' width='120' height='80' />
                            </div>";
                          $i++;
                        }   
                    } 

                   ?> 
            </div>  
            <style>
                /* jssor slider arrow navigator skin 05 css */
                /*
                .jssora05l                  (normal)
                .jssora05r                  (normal)
                .jssora05l:hover            (normal mouseover)
                .jssora05r:hover            (normal mouseover)
                .jssora05l.jssora05ldn      (mousedown)
                .jssora05r.jssora05rdn      (mousedown)
                */
                .jssora05l, .jssora05r {
                    display: block;
                    position: absolute;
                    /* size of arrow element */
                    width: 40px;
                    height: 40px;
                    cursor: pointer;
                    background: url(../sites/default/themes/op/images/iconos/controles_galeria.svg) -9px -6px/138px auto no-repeat;
                    overflow: hidden;
                }
                /**/
                .jssora05l {background-position: -20px -18px; opacity: 0.7;     transform: translateX(-48px); transition: .3s;}
                .jssora05r { background-position: -80px -18px; opacity: 0.7;    transform: translateX(48px); transition: .3s;}
                .jssora05l:hover { opacity: 1;}
                .jssora05r:hover { opacity: 1;}
                #slider:hover .jssora05l{transform: translateX(0);}
                #slider:hover .jssora05r{transform: translateX(0);}
            </style>
            <!-- Arrow Left -->
            <span u="arrowleft" class="jssora05l" style="top: 230px; left: 8px;">
            </span>
            <!-- Arrow Right -->
            <span u="arrowright" class="jssora05r" style="top: 230px; right: 8px">
            </span>
            <!--#endregion Arrow Navigator Skin End -->
            <!--#region Thumbnail Navigator Skin Begin -->
            <!-- Help: http://www.jssor.com/development/slider-with-thumbnail-navigator-jquery.html -->
            <style>
                /* jssor slider thumbnail navigator skin 01 css */
                /*
                .jssort01 .p            (normal)
                .jssort01 .p:hover      (normal mouseover)
                .jssort01 .p.pav        (active)
                .jssort01 .p.pdn        (mousedown)
                */

                .jssort01 {
                    position: absolute;
                    /* size of thumbnail navigator container */
                    width: 1006px;
                    height: 100px;
                    top:550px;
                }

                    .jssort01 .p {
                        position: absolute;
                        top: 0;
                        left: 0;
                        width: 140px;
                        height: 100px;
                    }

                    .jssort01 .t {
                        position: absolute;
                        top: 0;
                        left: 0;
                        width: 100%;
                        height: 100%;
                        border: none;
                    }

                    .jssort01 .w {
                        position: absolute;
                        top: 0px;
                        left: 0px;
                        width: 100%;
                        height: 100%;
                    }

                    .jssort01 .c {
                        position: absolute;
                        top: 0px;
                        left: 0px;
                        width: 140px;
                        height: 100px;
                        margin: 0px 10px;
                        border: none;
                        /*border: #ccc 2px solid;*/
                        box-sizing: content-box;
                        /*background: url(../img/t01.png) -960px -960px no-repeat;*/
                        _background: none;
                    }

                    .jssort01 .pav .c {
                        top: 2px;
                        _top: 0px;
                        left: 2px;
                        _left: 0px;
                        width: 140px;
                        height: 100px;
                        border:none;
                        /*border: #ccc 0px solid;*/
                        _border: #ccc 2px solid;
                        background-position: 50% 50%;
                    }

                    .jssort01 .p:hover .c {
                        top: 0px;
                        left: 0px;
                        width: 140px;
                        margin: 0px 10px;
                        height: 100px;
                        border: none;
                        /*border: #ccc 1px solid;*/
                        background-position: 50% 50%;
                    }

                    .jssort01 .p.pdn .c {
                        background-position: 50% 50%;
                        width: 140px;
                        height: 100px;
                        margin: 0px 10px;
                        border: none;
                        /*border: #ccc 2px solid;*/
                        position: relative;
                        cursor: pointer;
                    }

                    * html .jssort01 .c, * html .jssort01 .pdn .c, * html .jssort01 .pav .c {
                        /* ie quirks mode adjust */
                        width /**/: 140px;
                        height /**/: 100px;
                    }
            </style>

            <!-- thumbnail navigator container -->
            <div u="thumbnavigator" class="jssort01" style="left: 0px; bottom: 0px;">
                <!-- Thumbnail Item Skin Begin -->
                <div u="slides" style="cursor: default;">
                    <div u="prototype" class="p">
                        <div class=w><div u="thumbnailtemplate" class="t"></div></div>
                        <div class=c></div>
                    </div>
                </div>
                <!-- Thumbnail Item Skin End -->
            </div>
            <!--#endregion Thumbnail Navigator Skin End -->
      </div>
        <!-- Jssor Slider End -->
        <!-- FIN SLIDER -->
    </div><!-- FIN Contenido -->    
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

       <div class="comentarios">
          <div class="linea"></div>
          <div class="color"></div><h2>Comentarios</h2>
          <div class="bloque">
            <?php include("disqus.php"); ?>
          </div>
        </div>
        <div class="mas_galerias">
        <!--Más galerias--><div class="mas_galerias"><h2><div class="color"></div>+ GALERIAS</h2><div class="linea"></div></div><?php $view = views_get_view('detalle'); print $view->preview('block'); ?>
        </div><!--FIN Más galerias-->
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
    </div> <!--Fin izquierdo-->

    <div class="der">
        <!--Noticias Recientes--><?php $view = views_get_view('recientes'); print $view->preview('block_1'); ?><!--FIN Noticias Recientes-->   
        <!--ANUNCIO 300x250--><div class="pauta p300x250"><h2 class="anuncio_txt">Publicidad</h2><div class="info"><?php $block =block_load('block',53); $output = drupal_render(_block_get_renderable_array(_block_render_blocks(array($block)))); print $output; ?></div></div><!--FIN 3.ANUNCIO 300x250-->
        <!--Noticias Recientes--><?php $view = views_get_view('recientes'); print $view->preview('block_2'); ?><!--FIN Noticias Recientes-->  
        <!--Inicio Suscripciones--> 
        <div class="suscripciones">
          <a href="<?php print base_path(); ?>suscripciones"><img src="<?php print base_path(); ?>sites/default/themes/op/images/suscripcion.png" alt="suscripciones"></a>
        </div><!--FIN Suscripciones-->
        <!--ANUNCIO 300x250--><div class="pauta p300x250"><h2 class="anuncio_txt">Publicidad</h2><div class="info"><?php $block =block_load('block',53); $output = drupal_render(_block_get_renderable_array(_block_render_blocks(array($block)))); print $output; ?></div></div><!--FIN 3.ANUNCIO 300x250-->
        <!--Juegos--><div class="juegos"><a href="http://juegos.laopinion.com.co/"><img src="<?php print base_path(); ?>sites/default/themes/op/images/juegos.jpg"></a></div><!--FIN Juegos-->
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
      </div><!--Fin Productos la opinion-->
</div> 
<!--Fin Contenido-->