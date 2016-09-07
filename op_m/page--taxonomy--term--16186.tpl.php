<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title></title>
<meta name="description" content="">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="<?php print base_path(); ?>sites/default/themes/op/vyv/css/style.css">
<script src="<?php print base_path(); ?>sites/default/themes/op/vyv/js/jquery-1.10.min.js"></script>
<script src="<?php print base_path(); ?>sites/default/themes/op/vyv/js/jssor.js"></script>
<script src="<?php print base_path(); ?>sites/default/themes/op/vyv/js/jssor.slider.js"></script>
<!--SCRIPT SLIDES-->
<script>
        jQuery(document).ready(function ($) {
            var options = {
                $AutoPlay: true,                                    //[Optional] Whether to auto play, to enable slideshow, this option must be set to true, default value is false
                $AutoPlayInterval: 4000,                            //[Optional] Interval (in milliseconds) to go for next slide since the previous stopped if the slider is auto playing, default value is 3000
                $PauseOnHover: 1,                                   //[Optional] Whether to pause when mouse over if a slider is auto playing, 0 no pause, 1 pause for desktop, 2 pause for touch device, 3 pause for desktop and touch device, 4 freeze for desktop, 8 freeze for touch device, 12 freeze for desktop and touch device, default value is 1

                $ArrowKeyNavigation: true,   			            //[Optional] Allows keyboard (arrow key) navigation or not, default value is false
                $SlideDuration: 800,                                //[Optional] Specifies default duration (swipe) for slide in milliseconds, default value is 500
                $MinDragOffsetToSlide: 20,                          //[Optional] Minimum drag offset to trigger slide , default value is 20
                //$SlideWidth: 600,                                 //[Optional] Width of every slide in pixels, default value is width of 'slides' container
                //$SlideHeight: 300,                                //[Optional] Height of every slide in pixels, default value is height of 'slides' container
                $SlideSpacing: 0, 					                //[Optional] Space between each slide in pixels, default value is 0
                $DisplayPieces: 1,                                  //[Optional] Number of pieces to display (the slideshow would be disabled if the value is set to greater than 1), the default value is 1
                $ParkingPosition: 0,                                //[Optional] The offset position to park slide (this options applys only when slideshow disabled), default value is 0.
                $UISearchMode: 1,                                   //[Optional] The way (0 parellel, 1 recursive, default value is 1) to search UI components (slides container, loading screen, navigator container, arrow navigator container, thumbnail navigator container etc).
                $PlayOrientation: 1,                                //[Optional] Orientation to play slide (for auto play, navigation), 1 horizental, 2 vertical, 5 horizental reverse, 6 vertical reverse, default value is 1
                $DragOrientation: 1,                                //[Optional] Orientation to drag slide, 0 no drag, 1 horizental, 2 vertical, 3 either, default value is 1 (Note that the $DragOrientation should be the same as $PlayOrientation when $DisplayPieces is greater than 1, or parking position is not 0)

                $ArrowNavigatorOptions: {                       //[Optional] Options to specify and enable arrow navigator or not
                    $Class: $JssorArrowNavigator$,              //[Requried] Class to create arrow navigator instance
                    $ChanceToShow: 1,                               //[Required] 0 Never, 1 Mouse Over, 2 Always
                    $AutoCenter: 2,                                 //[Optional] Auto center arrows in parent container, 0 No, 1 Horizontal, 2 Vertical, 3 Both, default value is 0
                    $Steps: 1                                       //[Optional] Steps to go for each navigation request, default value is 1
                },

                $ThumbnailNavigatorOptions: {
                    $Class: $JssorThumbnailNavigator$,              //[Required] Class to create thumbnail navigator instance
                    $ChanceToShow: 2,                               //[Required] 0 Never, 1 Mouse Over, 2 Always

                    $ActionMode: 1,                                 //[Optional] 0 None, 1 act by click, 2 act by mouse hover, 3 both, default value is 1
                    $AutoCenter: 0,                                 //[Optional] Auto center thumbnail items in the thumbnail navigator container, 0 None, 1 Horizontal, 2 Vertical, 3 Both, default value is 3
                    $Lanes: 1,                                      //[Optional] Specify lanes to arrange thumbnails, default value is 1
                    $SpacingX: 3,                                   //[Optional] Horizontal space between each thumbnail in pixel, default value is 0
                    $SpacingY: 3,                                   //[Optional] Vertical space between each thumbnail in pixel, default value is 0
                    $DisplayPieces: 9,                              //[Optional] Number of pieces to display, default value is 1
                    $ParkingPosition: 260,                          //[Optional] The offset position to park thumbnail
                    $Orientation: 1,                                //[Optional] Orientation to arrange thumbnails, 1 horizental, 2 vertical, default value is 1
                    $DisableDrag: false                            //[Optional] Disable drag or not, default value is false
                }
            };

            var jssor_slider1 = new $JssorSlider$("slider1_container", options);

            //responsive code begin
            //you can remove responsive code if you don't want the slider scales while window resizes
            function ScaleSlider() {
                var bodyWidth = document.body.clientWidth;
                if (bodyWidth)
                    jssor_slider1.$ScaleWidth(Math.min(bodyWidth, 980));
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
<!--FIN SCRIPT SLIDES-->

<title>Viviendas y Valores</title>
</head>
<body data-spy="scroll" data-target="#navbar-example">
    <div id="container">
        <nav class="navbar">
			<a class="logo" href="http://www.viviendasyvalores.com.co" target="_blank"><img alt="Viviendas y Valores" src="<?php print base_path(); ?>sites/default/themes/op/vyv/img/logo.png"class="logo"></a>
        </nav>

        <div class="flexslider">
            <div style="position: relative; width: 100%; overflow: hidden;">
		        <div style="position: relative; left: 50%; width: 5000px; text-align: center; margin-left: -2500px;">
		            <!-- Jssor Slider Begin -->
		            <div id="slider1_container" style="position: relative; margin: 0 auto;
		                top: 0px; left: 0px; width: 1000px; height: 420px; ">
		                <!-- Loading Screen -->
		                <div u="loading" style="position: absolute; top: 0px; left: 0px;">
		                    <div style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block;
		                        top: 0px; left: 0px; width: 100%; height: 100%;">
		                    </div>
		                    <div style="position: absolute; display: block; background: url(../img/loading.gif) no-repeat center center;
		                        top: 0px; left: 0px; width: 100%; height: 100%;">
		                    </div>
		                </div>
		                <!-- Slides Container -->
		                <div u="slides" class="slide" style="cursor: move; position: absolute; left: 0px; top: 0px; width: 1000px;
		                    height: 420px; overflow: hidden;">
		                    <div>
		                        <div class="image" style="position: absolute; width: 1000px; height: 390px; top: 0px; left: 10px;
		                            text-align: left; line-height: 1.8em; font-size: 12px;">
		                            <br />
		                            <div class="info">
		                            	<div class="nombre">Asturias Imperial</div>
			                            <div class="resumen">Asturias Imperial, la vida con otro estilo. Un proyecto ubicado en el sector de nuevos Parques Residenciales sobre la avenida del rio</div>
			                            <div class="boton">
			                            	<a href="http://www.viviendasyvalores.com.co/intranetn/proygenu.php?proyecto=8" target="_blank">Ver proyecto</a>
										</div>
		                            </div>
		                        </div>
		                        <img src="<?php print base_path(); ?>sites/default/themes/op/vyv/img/asturias.jpg" style="position: absolute; top: 23px; left: 0px; width: 1000px; height: 390px;" />
		                    </div>
		                    <div>
		                        <div style="position: absolute; width: 1000px; height: 390px; top: 0px; left: 10px;
		                            text-align: left; line-height: 1.8em; font-size: 12px;">
		                            <br />
		                            <div class="info">
		                            	<div class="nombre">Zakura reserva campestre</div>
			                            <div class="resumen">Conformado por cuatro conjuntos residenciales: Green, Gold, Platino y Titanium</div>
			                            <div class="boton">
			                            	<a href="http://www.viviendasyvalores.com.co/intranetn/proygenu.php?proyecto=15" target="_blank">Ver proyecto</a>
										</div>
		                            </div>
		                        </div>
		                        <img src="<?php print base_path(); ?>sites/default/themes/op/vyv/img/zakura.jpg" style="position: absolute; top: 23px; left: 0px; width: 1000px; height: 390px;" />
		                    </div>
		                    <div>
		                        <div style="position: absolute; width: 1000px; height: 390px; top: 0px; left: 10px;
		                            text-align: left; line-height: 1.8em; font-size: 12px;">
		                            <br />
		                            <div class="info">
		                            	<div class="nombre">Puerto Madero Platino</div>
			                            <div class="resumen">Condominio Puerto Madero Platino, un proyecto ubicado contiguo a Condominio Puerto Madero entre El limonar y La Palestina con acceso por la avenida 10 vía los patios.</div>
			                            <div class="boton">
			                            	<a href="http://www.viviendasyvalores.com.co/intranetn/proygenu.php?proyecto=13" target="_blank">Ver proyecto</a>
										</div>
		                            </div>
		                        </div>
		                        <img src="<?php print base_path(); ?>sites/default/themes/op/vyv/img/puertomadero.jpg" style="position: absolute; top: 23px; left: 0px; width: 1000px; height: 390px;" />
		                    </div>
		                    <div>
		                        <div style="position: absolute; width: 1000px; height: 390px; top: 0px; left: 10px;
		                            text-align: left; line-height: 1.8em; font-size: 12px;">
		                            <br />
		                            <div class="info">
		                            	<div class="nombre">Callejas Reservado</div>
			                            <div class="resumen">Ubicado al oriente de la ciudad en el sector de Prados del Este, a pocos metros de la vía que comunica al puente La Gazapa.</div>
			                            <div class="boton">
			                            	<a href="http://www.viviendasyvalores.com.co/intranetn/proygenu.php?proyecto=18" target="_blank">Ver proyecto</a>
										</div>
		                            </div>
		                        </div>
		                        <img src="<?php print base_path(); ?>sites/default/themes/op/vyv/img/callejas.jpg" style="position: absolute; top: 23px; left: 0px; width: 1000px; height: 390px;" />
		                    </div>
		                </div>            
		            </div>
		    	</div>
		    </div>
		    
            <!-- Jssor Slider End -->
		    <span u="arrowleft" class="jssora07l" style="top: 45%; left: -50px;"></span>
			<span u="arrowright" class="jssora07r" style="top: 45%; right: -50px;"></span>      
	</div>
	<section class="container">
        <article class="txt">
        	<h2>VIVIENDAS Y VALORES S.A.</h2>
        	<p>Le brinda la mejor opción de vivienda con la seriedad, respaldo y seguridad que nos caracterizan en este importante mercado. Contamos con asesores capacitados para atenderles de la mejor manera.</p>
            <p>Si estas pensando en invertir en tu vivienda propia y aun no has conseguido la casa de tus sueños, esta es tu oportunidad.</p> 
		</article>
		<article class="form">
			<?php $block = module_invoke('webform', 'block_view', 'client-block-115228');print render($block['content']); ?>
		</article>
 	</section>
</body>
</html>