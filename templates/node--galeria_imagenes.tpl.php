<?php include("yuhuads.php"); ?>
<script type="text/javascript" src="<?php print base_path(); ?>sites/default/themes/op/js/jquery-1.8.2.min.js"></script>
<script type="text/javascript" src="<?php print base_path(); ?>sites/default/themes/op/js/jssor.js"></script>
<script type="text/javascript" src="<?php print base_path(); ?>sites/default/themes/op/js/jssor.slider.js"></script>
    <script>
        jQuery(document).ready(function ($) {
            var _SlideshowTransitions = [
            //Fade in L
                {$Duration: 1200, x: 0.3, $During: { $Left: [0.3, 0.7] }, $Easing: { $Left: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2 }
            //Fade out R
                , { $Duration: 1200, x: -0.3, $SlideOut: true, $Easing: { $Left: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2 }
            //Fade in R
                , { $Duration: 1200, x: -0.3, $During: { $Left: [0.3, 0.7] }, $Easing: { $Left: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2 }
            //Fade out L
                , { $Duration: 1200, x: 0.3, $SlideOut: true, $Easing: { $Left: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2 }
            //Fade in T
                , { $Duration: 1200, y: 0.3, $During: { $Top: [0.3, 0.7] }, $Easing: { $Top: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2, $Outside: true }
            //Fade out B
                , { $Duration: 1200, y: -0.3, $SlideOut: true, $Easing: { $Top: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2, $Outside: true }
            //Fade in B
                , { $Duration: 1200, y: -0.3, $During: { $Top: [0.3, 0.7] }, $Easing: { $Top: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2 }
            //Fade out T
                , { $Duration: 1200, y: 0.3, $SlideOut: true, $Easing: { $Top: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2 }
            //Fade in LR
                , { $Duration: 1200, x: 0.3, $Cols: 2, $During: { $Left: [0.3, 0.7] }, $ChessMode: { $Column: 3 }, $Easing: { $Left: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2, $Outside: true }
            //Fade out LR
                , { $Duration: 1200, x: 0.3, $Cols: 2, $SlideOut: true, $ChessMode: { $Column: 3 }, $Easing: { $Left: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2, $Outside: true }
            //Fade in TB
                , { $Duration: 1200, y: 0.3, $Rows: 2, $During: { $Top: [0.3, 0.7] }, $ChessMode: { $Row: 12 }, $Easing: { $Top: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2 }
            //Fade out TB
                , { $Duration: 1200, y: 0.3, $Rows: 2, $SlideOut: true, $ChessMode: { $Row: 12 }, $Easing: { $Top: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2 }
            //Fade in LR Chess
                , { $Duration: 1200, y: 0.3, $Cols: 2, $During: { $Top: [0.3, 0.7] }, $ChessMode: { $Column: 12 }, $Easing: { $Top: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2, $Outside: true }
            //Fade out LR Chess
                , { $Duration: 1200, y: -0.3, $Cols: 2, $SlideOut: true, $ChessMode: { $Column: 12 }, $Easing: { $Top: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2 }
            //Fade in TB Chess
                , { $Duration: 1200, x: 0.3, $Rows: 2, $During: { $Left: [0.3, 0.7] }, $ChessMode: { $Row: 3 }, $Easing: { $Left: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2, $Outside: true }
            //Fade out TB Chess
                , { $Duration: 1200, x: -0.3, $Rows: 2, $SlideOut: true, $ChessMode: { $Row: 3 }, $Easing: { $Left: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2 }
            //Fade in Corners
                , { $Duration: 1200, x: 0.3, y: 0.3, $Cols: 2, $Rows: 2, $During: { $Left: [0.3, 0.7], $Top: [0.3, 0.7] }, $ChessMode: { $Column: 3, $Row: 12 }, $Easing: { $Left: $JssorEasing$.$EaseInCubic, $Top: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2, $Outside: true }
            //Fade out Corners
                , { $Duration: 1200, x: 0.3, y: 0.3, $Cols: 2, $Rows: 2, $During: { $Left: [0.3, 0.7], $Top: [0.3, 0.7] }, $SlideOut: true, $ChessMode: { $Column: 3, $Row: 12 }, $Easing: { $Left: $JssorEasing$.$EaseInCubic, $Top: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2, $Outside: true }
            //Fade Clip in H
                , { $Duration: 1200, $Delay: 20, $Clip: 3, $Assembly: 260, $Easing: { $Clip: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2 }
            //Fade Clip out H
                , { $Duration: 1200, $Delay: 20, $Clip: 3, $SlideOut: true, $Assembly: 260, $Easing: { $Clip: $JssorEasing$.$EaseOutCubic, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2 }
            //Fade Clip in V
                , { $Duration: 1200, $Delay: 20, $Clip: 12, $Assembly: 260, $Easing: { $Clip: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2 }
            //Fade Clip out V
                , { $Duration: 1200, $Delay: 20, $Clip: 12, $SlideOut: true, $Assembly: 260, $Easing: { $Clip: $JssorEasing$.$EaseOutCubic, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2 }
                ];

            var options = {
                $AutoPlay: true,                                    //[Optional] Whether to auto play, to enable slideshow, this option must be set to true, default value is false
                $AutoPlayInterval: 4000,                            //[Optional] Interval (in milliseconds) to go for next slide since the previous stopped if the slider is auto playing, default value is 3000
                $PauseOnHover: 1,                                //[Optional] Whether to pause when mouse over if a slider is auto playing, 0 no pause, 1 pause for desktop, 2 pause for touch device, 3 pause for desktop and touch device, 4 freeze for desktop, 8 freeze for touch device, 12 freeze for desktop and touch device, default value is 1

                $DragOrientation: 3,                                //[Optional] Orientation to drag slide, 0 no drag, 1 horizental, 2 vertical, 3 either, default value is 1 (Note that the $DragOrientation should be the same as $PlayOrientation when $DisplayPieces is greater than 1, or parking position is not 0)
                $ArrowKeyNavigation: true,                    //[Optional] Allows keyboard (arrow key) navigation or not, default value is false
                $SlideDuration: 800,                                //Specifies default duration (swipe) for slide in milliseconds

                $SlideshowOptions: {                                //[Optional] Options to specify and enable slideshow or not
                    $Class: $JssorSlideshowRunner$,                 //[Required] Class to create instance of slideshow
                    $Transitions: _SlideshowTransitions,            //[Required] An array of slideshow transitions to play slideshow
                    $TransitionsOrder: 1,                           //[Optional] The way to choose transition to play slide, 1 Sequence, 0 Random
                    $ShowLink: true                                    //[Optional] Whether to bring slide link on top of the slider when slideshow is running, default value is false
                },

                $ArrowNavigatorOptions: {                       //[Optional] Options to specify and enable arrow navigator or not
                    $Class: $JssorArrowNavigator$,              //[Requried] Class to create arrow navigator instance
                    $ChanceToShow: 2                               //[Required] 0 Never, 1 Mouse Over, 2 Always
                },

                $ThumbnailNavigatorOptions: {                       //[Optional] Options to specify and enable thumbnail navigator or not
                    $Class: $JssorThumbnailNavigator$,              //[Required] Class to create thumbnail navigator instance
                    $ChanceToShow: 2,                               //[Required] 0 Never, 1 Mouse Over, 2 Always

                    $ActionMode: 1,                                 //[Optional] 0 None, 1 act by click, 2 act by mouse hover, 3 both, default value is 1
                    $SpacingX: 8,                                   //[Optional] Horizontal space between each thumbnail in pixel, default value is 0
                    $DisplayPieces: 10,                             //[Optional] Number of pieces to display, default value is 1
                    $ParkingPosition: 480                          //[Optional] The offset position to park thumbnail
                }
            };

            var jssor_slider1 = new $JssorSlider$("slider", options);
            //responsive code begin
            //you can remove responsive code if you don't want the slider scales while window resizes
            function ScaleSlider() {
                var parentWidth = jssor_slider1.$Elmt.parentNode.clientWidth;
                if (parentWidth)
                    jssor_slider1.$ScaleWidth(Math.max(Math.min(parentWidth, 960), 540));
                else
                    window.setTimeout(ScaleSlider, 30);
            }
            ScaleSlider();

            $(window).bind("load", ScaleSlider);
            $(window).bind("resize", ScaleSlider);
            $(window).bind("orientationchange", ScaleSlider);
            //responsive code end
        });
    </script>
<!--Contenido-->
<div id="galeria">
    <!--ANUNCIO 1000x30--><div class="pauta p1000x30"><?php $block =block_load('block',57); $output = drupal_render(_block_get_renderable_array(_block_render_blocks(array($block)))); print $output; ?></div><!--FIN ANUNCIO 1000x30-->
    <!--Seccion--><?php $taxonomy_menu_block = block_load('taxonomy_menu_block','1'); print drupal_render(_block_get_renderable_array(_block_render_blocks(array($taxonomy_menu_block))));?><!--FIN seccion-->

       <?php include("compartir.tpl.php"); ?>
       <?php include("recomendada.tpl.php"); ?>
       <?php include("recomendada_movil.tpl.php"); ?>

    <div class="contenido">
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
      ?>  
  <!-- INICIO SLIDER -->
      <div id="slider"style="position: relative; top: 0px; left: -20px; width: 960px;
            height: 660px; background: #333; overflow: hidden;">

            <!-- Loading Screen -->
            <div u="loading" style="position: absolute; top: 0px; left: 0px;">
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


            <div u="slides" style="cursor: move; position: absolute; left: 0px; top: 0px; width: 960px; height: 540px; overflow: hidden;">
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
                            <img u=image src='".base_path()."sites/default/files".$foto."' alt='".render($content['field_imagenes'][$i]['#item']['alt'])."' width='960' height='540'/>
                            <img u=image src='".base_path()."sites/default/files".$foto."' alt='".render($content['field_imagenes'][$i]['#item']['alt'])."' width='960' height='540'/>
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

                .pie{width:620px; height:auto; color:#fff; position: absolute; bottom:0; font-size:12px; background:rgba(0,0,0,0.5); padding:5px 10px;
                    .descripcion{float:left; width:540px;position: relative}
                    .credito{float:left; position: relative; width:140px; text-align:left; margin-left:5px;
                        span{float:left; position: relative;width:35px;}
                        }
                    }
                .jssora05l, .jssora05r {
                    transition:all 0.2s ease;
                    display: block;
                    position: absolute;
                    /* size of arrow element */
                    width: 40px;
                    height: 40px;
                    cursor: pointer;
                    background: url(../sites/default/themes/op/images/iconos/controles_galeria.svg) -9px -6px/95px auto no-repeat;
                    overflow: hidden;
                }
                /**/
                .jssora05l {background-position: -8px -5px }
                .jssora05r { background-position: -48px -6px; }
                .jssora05l:hover { background-position: -8px -50px; }
                .jssora05r:hover { background-position: -48px -50px; }
                .jssora05l.jssora05ldn { background-position: -8px -5px; transition:all 0.2s ease;}
                .jssora05r.jssora05rdn { background-position: -48px -6px; transition:all 0.2s ease;}
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
                    width: 960px;
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
        <?php print "<div class=texto>".render($content['body'])."</div>"; ?>
    </div><!-- FIN Contenido -->
    
    <div class="izq">
       <div class="comentarios">
          <h2>Comentarios</h2>
          <div class="linea"></div>
          <div class="bloque">
            <?php $DisqusBlock = block_load('disqus', 'disqus_comments');     
            $DisqusBlockOutput = drupal_render(_block_get_renderable_array(_block_render_blocks(array($DisqusBlock))));       
            print $DisqusBlockOutput; ?>
          </div>
        </div>

        <div class="mas_galerias">
        <!--Más galerias--><div class="mas_galerias"><h2>Más galerias</h2><div class="linea"></div></div><?php $view = views_get_view('detalles'); print $view->preview('block_6'); ?><!--FIN Más galerias-->
        </div>    
    </div>  

    <div class="der">
        <!--ANUNCIO 300x250--><div class="pauta p300x600"><h2 class="anuncio_txt">Publicidad</h2><div class="info"><?php $block =block_load('block',67); $output = drupal_render(_block_get_renderable_array(_block_render_blocks(array($block)))); print $output; ?></div></div><!--FIN 1.ANUNCIO 300x250-->
        <!--Suscripciones--><?php $block =block_load('block',65); $output = drupal_render(_block_get_renderable_array(_block_render_blocks(array($block)))); print $output; ?><!--FIN Suscripciones-->
    </div><!--FIN Derecha-->

  </div>  
</div>
<!--Fin Contenido-->