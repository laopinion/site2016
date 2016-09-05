<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>La frontera, un año después del cierre</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="normalize.css">
	<link rel="stylesheet" href="<?php print base_path(); ?>sites/default/themes/especiales/frontera/style.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>

	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" >
	<meta name="robots" content="index, follow">
	<meta name="keywords" content="especiales,frontera,cierre,venezuela,maduro,santos,san antonio,contrabando,fronteriza,paises hermanos,ureña,táchira,cúcuta,economía,estado de excepción,información,prensa,colombia,colombian,internacional,la opinion cúcuta,paz,investigación,actualidad,news" />
	<meta charset="utf-8">
	<meta itemprop="genre" content="News" />
	<meta itemprop="inLanguage" content="es-ES" />
	<meta property="og:locale:alternate" content="es_CO" />
	<meta property="og:locale" content="es_CO" />
	<link rel="canonical" href="http://www.laopinion.com.co">
	<link rel="image_src" href="http://www.laopinion.com.co/sites/default/themes/op/images/compartir.jpg" />

	<meta name="ROBOTS" content="FOLLOW">
	<meta name="author" content="Especiales - La Opinión" />
	<meta name="google" content="notranslate" />
	<meta name="geo.region" content="CO" />
	<meta name="geo.placename" content="Colombia" />
	<meta name="language" content="spanish" />
	<!-- Schema.org markup for Google+ -->
	<meta itemprop="name" content="Especiales del diario La Opinión" />
	<meta itemprop="description" name="description" content="Especiales noticiosos del diario La Opinión de Cúcuta, Norte de santander y la frontera entre Colombia y Venezuela especiales.laopinion.com.co"/>

	<meta itemprop="image" content="http://www.laopinion.com.co/sites/default/themes/op/images/compartir.jpg" />
	<meta name="twitter:image" content="http://www.laopinion.com.co/sites/default/themes/op/images/compartir.jpg"/>

</head>
<body>
	<script type="text/javascript" src="<?php print base_path(); ?>sites/default/themes/especiales/frontera/js/jssor.js"></script>
    <script type="text/javascript" src="<?php print base_path(); ?>sites/default/themes/especiales/frontera/js/jssor.slider.js"></script>

    
    <script>
    	jQuery(document).ready(function ($) {
    		var _CaptionTransitions = [];
            _CaptionTransitions["L"] = { $Duration: 900, x: 0.6, $Easing: { $Left: $JssorEasing$.$EaseInOutSine }, $Opacity: 2 };
            _CaptionTransitions["R"] = { $Duration: 900, x: -0.6, $Easing: { $Left: $JssorEasing$.$EaseInOutSine }, $Opacity: 2 };
            _CaptionTransitions["T"] = { $Duration: 900, y: 0.6, $Easing: { $Top: $JssorEasing$.$EaseInOutSine }, $Opacity: 2 };
            _CaptionTransitions["B"] = { $Duration: 900, y: -0.6, $Easing: { $Top: $JssorEasing$.$EaseInOutSine }, $Opacity: 2 };
            _CaptionTransitions["ZMF|10"] = { $Duration: 900, $Zoom: 11, $Easing: { $Zoom: $JssorEasing$.$EaseOutQuad, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2 };
            _CaptionTransitions["RTT|10"] = { $Duration: 900, $Zoom: 11, $Rotate: 1, $Easing: { $Zoom: $JssorEasing$.$EaseOutQuad, $Opacity: $JssorEasing$.$EaseLinear, $Rotate: $JssorEasing$.$EaseInExpo }, $Opacity: 2, $Round: { $Rotate: 0.8} };
            _CaptionTransitions["RTT|2"] = { $Duration: 900, $Zoom: 3, $Rotate: 1, $Easing: { $Zoom: $JssorEasing$.$EaseInQuad, $Opacity: $JssorEasing$.$EaseLinear, $Rotate: $JssorEasing$.$EaseInQuad }, $Opacity: 2, $Round: { $Rotate: 0.5} };
            _CaptionTransitions["RTTL|BR"] = { $Duration: 900, x: -0.6, y: -0.6, $Zoom: 11, $Rotate: 1, $Easing: { $Left: $JssorEasing$.$EaseInCubic, $Top: $JssorEasing$.$EaseInCubic, $Zoom: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseLinear, $Rotate: $JssorEasing$.$EaseInCubic }, $Opacity: 2, $Round: { $Rotate: 0.8} };
            _CaptionTransitions["CLIP|LR"] = { $Duration: 900, $Clip: 15, $Easing: { $Clip: $JssorEasing$.$EaseInOutCubic }, $Opacity: 2 };
            _CaptionTransitions["MCLIP|L"] = { $Duration: 900, $Clip: 1, $Move: true, $Easing: { $Clip: $JssorEasing$.$EaseInOutCubic} };
            _CaptionTransitions["MCLIP|R"] = { $Duration: 900, $Clip: 2, $Move: true, $Easing: { $Clip: $JssorEasing$.$EaseInOutCubic} };

            var options = {
                $FillMode: 2,                                       //[Optional] The way to fill image in slide, 0 stretch, 1 contain (keep aspect ratio and put all inside slide), 2 cover (keep aspect ratio and cover whole slide), 4 actual size, 5 contain for large image, actual size for small image, default value is 0
                $AutoPlay: false,                                    //[Optional] Whether to auto play, to enable slideshow, this option must be set to true, default value is false
                $AutoPlayInterval: 6000,                            //[Optional] Interval (in milliseconds) to go for next slide since the previous stopped if the slider is auto playing, default value is 3000
                $PauseOnHover: 1,                                   //[Optional] Whether to pause when mouse over if a slider is auto playing, 0 no pause, 1 pause for desktop, 2 pause for touch device, 3 pause for desktop and touch device, 4 freeze for desktop, 8 freeze for touch device, 12 freeze for desktop and touch device, default value is 1
                $ArrowKeyNavigation: true,   			            //[Optional] Allows keyboard (arrow key) navigation or not, default value is false
                $SlideEasing: $JssorEasing$.$EaseOutQuint,          //[Optional] Specifies easing for right to left animation, default value is $JssorEasing$.$EaseOutQuad
                $SlideDuration: 1200,                                //[Optional] Specifies default duration (swipe) for slide in milliseconds, default value is 500
                $MinDragOffsetToSlide: 20,                          //[Optional] Minimum drag offset to trigger slide , default value is 20
                //$SlideWidth: 600,                                 //[Optional] Width of every slide in pixels, default value is width of 'slides' container
                //$SlideHeight: 300,                                //[Optional] Height of every slide in pixels, default value is height of 'slides' container
                $SlideSpacing: 0, 					                //[Optional] Space between each slide in pixels, default value is 0
                $DisplayPieces: 1,                                  //[Optional] Number of pieces to display (the slideshow would be disabled if the value is set to greater than 1), the default value is 1
                $ParkingPosition: 0,                                //[Optional] The offset position to park slide (this options applys only when slideshow disabled), default value is 0.
                $UISearchMode: 1,                                   //[Optional] The way (0 parellel, 1 recursive, default value is 1) to search UI components (slides container, loading screen, navigator container, arrow navigator container, thumbnail navigator container etc).
                $PlayOrientation: 1,                                //[Optional] Orientation to play slide (for auto play, navigation), 1 horizental, 2 vertical, 5 horizental reverse, 6 vertical reverse, default value is 1
                $DragOrientation: 1,                                //[Optional] Orientation to drag slide, 0 no drag, 1 horizental, 2 vertical, 3 either, default value is 1 (Note that the $DragOrientation should be the same as $PlayOrientation when $DisplayPieces is greater than 1, or parking position is not 0)

                $CaptionSliderOptions: {                            //[Optional] Options which specifies how to animate caption
                    $Class: $JssorCaptionSlider$,                   //[Required] Class to create instance to animate caption
                    $CaptionTransitions: _CaptionTransitions,       //[Required] An array of caption transitions to play caption, see caption transition section at jssor slideshow transition builder
                    $PlayInMode: 1,                                 //[Optional] 0 None (no play), 1 Chain (goes after main slide), 3 Chain Flatten (goes after main slide and flatten all caption animations), default value is 1
                    $PlayOutMode: 3                                 //[Optional] 0 None (no play), 1 Chain (goes before main slide), 3 Chain Flatten (goes before main slide and flatten all caption animations), default value is 1
                },

                $BulletNavigatorOptions: {                                //[Optional] Options to specify and enable navigator or not
                    $Class: $JssorBulletNavigator$,                       //[Required] Class to create navigator instance
                    $ChanceToShow: 2,                               //[Required] 0 Never, 1 Mouse Over, 2 Always
                    $AutoCenter: 1,                                 //[Optional] Auto center navigator in parent container, 0 None, 1 Horizontal, 2 Vertical, 3 Both, default value is 0
                    $Steps: 1,                                      //[Optional] Steps to go for each navigation request, default value is 1
                    $Lanes: 1,                                      //[Optional] Specify lanes to arrange items, default value is 1
                    $SpacingX: 8,                                   //[Optional] Horizontal space between each item in pixel, default value is 0
                    $SpacingY: 8,                                   //[Optional] Vertical space between each item in pixel, default value is 0
                    $Orientation: 1                                 //[Optional] The orientation of the navigator, 1 horizontal, 2 vertical, default value is 1
                },

                $ArrowNavigatorOptions: {                       //[Optional] Options to specify and enable arrow navigator or not
                    $Class: $JssorArrowNavigator$,              //[Requried] Class to create arrow navigator instance
                    $ChanceToShow: 1,                               //[Required] 0 Never, 1 Mouse Over, 2 Always
                    $AutoCenter: 2,                                 //[Optional] Auto center arrows in parent container, 0 No, 1 Horizontal, 2 Vertical, 3 Both, default value is 0
                    $Steps: 1                                       //[Optional] Steps to go for each navigation request, default value is 1
                }
            };

            var jssor_slider1 = new $JssorSlider$("galeria1", options);
            var jssor_slider2 = new $JssorSlider$("galeria2", options);

            //responsive code begin
            //you can remove responsive code if you don't want the slider scales while window resizes
            function ScaleSlider() {
                var bodyWidth = document.body.clientWidth;
                var bodyWidth2 = document.body.clientWidth;
                if (bodyWidth)
                    jssor_slider1.$ScaleWidth(Math.min(bodyWidth, 1920));
                else
                    window.setTimeout(ScaleSlider, 30);

                if (bodyWidth2)
                    jssor_slider2.$ScaleWidth(Math.min(bodyWidth, 1920));
                else
                    window.setTimeout(ScaleSlider, 30);
            }
            ScaleSlider();

            $(window).bind("load", ScaleSlider);
            $(window).bind("resize", ScaleSlider);
            $(window).bind("orientationchange", ScaleSlider);
            //responsive code end
        });

//SCRIPT ANTERIOR
/*
        jssor_slider1_starter = function (containerId) {
            var options = {
                $DragOrientation: 3,                                //[Optional] Orientation to drag slide, 0 no drag, 1 horizental, 2 vertical, 3 either, default value is 1 (Note that the $DragOrientation should be the same as $PlayOrientation when $DisplayPieces is greater than 1, or parking position is not 0)
                $ArrowNavigatorOptions: {                       //[Optional] Options to specify and enable arrow navigator or not
                    $Class: $JssorArrowNavigator$,              //[Requried] Class to create arrow navigator instance
                    $ChanceToShow: 2,                               //[Required] 0 Never, 1 Mouse Over, 2 Always
                    $AutoCenter: 0,                                 //[Optional] Auto center arrows in parent container, 0 No, 1 Horizontal, 2 Vertical, 3 Both, default value is 0
                    $Steps: 1                                       //[Optional] Steps to go for each navigation request, default value is 1
                }
            };

            var jssor_slider1 = new $JssorSlider$(containerId, options);
        };
*/
    </script>


	<script>
        //SCRIPT GENERAL
		$(document).ready(function(){

			//scroll mas suave 
			$('#menup a[href^="#"]').on('click',function (e) {
			      e.preventDefault();

			      var target = this.hash,
			      $target = $(target);

			      $('html, body').stop().animate({
			          'scrollTop': $target.offset().top
			      }, 1000, 'swing', function () {
			          window.location.hash = target;
			      });
			});

			var altoTotal = $(window).height();
  			var anchoTotal = $(window).width();
  			var altoTitulo = (altoTotal - 78) / 2;
  			/*
  			$("#video iframe, #video object, #video embed").css({"width":anchoTotal , "height":( altoTotal+ (altoTotal*12/100) )});
			*/

  			$("#videos iframe, #videos object, #videos embed").css({"width":anchoTotal , "height":( altoTotal+ (altoTotal*12/100) )});
  		

			console.log("ready");
			$('#hamburger').click(function(){
				$(this).toggleClass('open');
				$('.logo_top').toggleClass('open');
				$('.redes-sociales').toggleClass('open');
			});
			$('#hamburger').click(function(){
				$('#menup').toggleClass('desplegar');
				$(this).toggleClass('desplegar');
				$('.logo_top').toggleClass('desplegar');
				$('.redes-sociales').toggleClass('desplegar');
			});
			$('#footer .bloque1 .redes-sociales .creditos').click(function(){
				$('#footer .bloque2').toggle("slow");
				$(this).toggleClass('down');
				var position = $("#footer").offset().top;
				$("html, body").animate({scrollTop:position+"px"});
			});

			var click = 0;
			$('#frases .btn-izq').click(function(){
				click++;
				if(click == 43){
					$('#frases .caja .bloque .frase').css("left", "0px");
					click = 0;
				}else{
					if(click == 1){
						$('#frases .caja .bloque .frase').css("left", "-1000px");
						click++;
					}else{
						var valor = $('#frases .caja .bloque .frase').attr("style");
						valor = valor.substring(6, 12);
						valor = parseInt(valor);
						valor = valor - 1000;
						$('#frases .caja .bloque .frase').css("left", valor);
					}
				}
			});

			$('#frases .btn-der').click(function(){
				click++;
				if(click == 43){
					$('#frases .caja .bloque .frase').css("left", "0px");
					click = 0;
				}else{
					if(click == 1){
						$('#frases .caja .bloque .frase').css("left", "-1000px");
						click++;
					}else{
						var valor = $('#frases .caja .bloque .frase').attr("style");
						valor = valor.substring(6, 12);
						valor = parseInt(valor);
						valor = valor - 1000;
						$('#frases .caja .bloque .frase').css("left", valor);
					}
				}
			});
			$("#notas .content .bloque.uno a").click(function(){
				$("#fondo-color").addClass("open");
				$("#historia-1").addClass("open");
				$('body').css('overflow','hidden');
			});

			$("#notas .content .bloque.dos a").click(function(){
				$("#fondo-color").addClass("open");
				$("#historia-2").addClass("open");
				$('body').css('overflow','hidden');
			});

			$("#notas .content .bloque.tres a").click(function(){
				$("#fondo-color").addClass("open");
				$("#historia-3").addClass("open");
				$('body').css('overflow','hidden');
			});

			$("#notas .content .bloque.cuatro a").click(function(){
				$("#fondo-color").addClass("open");
				$("#historia-4").addClass("open");
				$('body').css('overflow','hidden');
			});

			$("#notas .content .bloque.cinco a").click(function(){
				$("#fondo-color").addClass("open");
				$("#historia-5").addClass("open");
				$('body').css('overflow','hidden');
			});

			$("#fondo-color").click(function(){
				$(this).removeClass("open");
				$("#historia-1").removeClass("open");
				$("#historia-2").removeClass("open");
				$("#historia-3").removeClass("open");
				$("#historia-4").removeClass("open");
				$("#historia-5").removeClass("open");
				$('body').css('overflow-y','scroll');
			});			
		});
	</script>
	<header>
		<!--Contenido HEADER-->
		<div id="hamburger">
			<span></span>
			<span></span>
			<span></span>
			<span></span>
			<span></span>
			<span></span>
		</div>
		<ul class="logo_top">
			<li class="logo"><a href="http://www.laopinion.com.co/"></a></li>
		</ul>
		
		<!--Menú Principal-->
		<section id="menup">
			<div class="opciones">
				<ul class="iconos">
					<li id="icono-historias"><a href="#notas">Perspectivas de la separación</a></li>
					<hr>
					<li id="icono-videos"><a href="#videos">Lo vivido en un año de división</a></li>
					<hr>
					<li id="icono-galeria"><a href="#galerias">El cierre en imágenes</a></li>
					<hr>
					<li id="icono-grafico"><a href="#grafico">Gráfico de sectores económicos</a></li>
					<hr>
					<li id="icono-frases"><a href="#frases">Frases destacadas</a></li>
					<hr>
					<li id="icono-mapa"><a href="#mapa">Éxodo de patrias hermanas</a></li>
				</ul>				
			</div>
			<ul class="redes-sociales">
				<li class="f"><a href="https://www.facebook.com/laopinioncucuta"></a></li>
				<li class="t"><a href="https://twitter.com/laopinioncucuta"></a></li>
				<li class="i"><a href="https://www.instagram.com/laopinioncucuta/"></a></li>
				<li class="y"><a href="https://www.youtube.com/user/WEBLAOPINION"></a></li>
			</ul>
		</section><!--Fin menu-->
		<!--Fin Menú Principal--> 
	</header>

	<section id="fondo-color"></section>
	<div id="historia-1" class="historia">
		<div class="media">
			<img src="<?php print base_path(); ?>sites/default/themes/especiales/frontera/historias/paracos-2.jpg" alt="historia-1">
		</div>
		<h3>Las bandas criminales que Maduro llama paramilitares</h3>
		<article class="info">
			168 hombres armados integran el Clan del Golfo y Los Rastrojos, bandas criminales que hacen presencia a ambos lados de la frontera.
			<br><br>
			Desde el día que ordenó cerrar la frontera con Colombia, hoy hace un año, el presidente de Venezuela, Nicolás Maduro, ha argumentado que una de las razones que soportaba tal decisión era la presencia de grupos paramilitares en suelo venezolano. Sin mencionar un solo nombre, Maduro dijo que 100 de estos ‘paras’ habían sido capturados y otros 100 más muertos en operativos de la fuerza pública de ese país. Sin embargo, todo parece indicar que lo que para Maduro son ‘paras’, para las autoridades colombianas son bandas criminales que hacen presencia a ambos lados de la frontera.
			<br><br>
			Jhon Jairo Jácome Ramírez - jhon.jacome@laopinion.com.co
			<br><br>
			"Quiero expresar mi repudio, dolor, por este ataque, esta emboscada que hubo contra tres jóvenes soldados de nuestra patria, en San Antonio del Táchira. He estado siguiendo al detalle los sucesos y realmente es indignante y doloroso".
			<br><br>
			Con estas palabras, el presidente de Venezuela, Nicolás Maduro, rechazó el ataque del que fueron víctimas los tenientes Daniel Santaella y Alexis Rodríguez Arias, el cabo primero Miguel Núñez Martínez y el ciudadano Ramón Huelva, quienes, según dijo el gobernador del Táchira, José Gregorio Vielma Mora, se encontraban en una operación de inteligencia.
			<br><br>
			El ataque, ocurrido el 17 de agosto del año pasado, llevó a Maduro a ordenar el cierre durante 72 horas de la frontera. Luego, esas 72 horas se convertirían en un cierre indefinido que hoy completa un año. Un cierre que, además, llevó a la expulsión, deportación y retorno ‘voluntario’ de más de 22 mil colombianos que vivían en el estado Táchira y que, en algunos casos, fueron obligados por los militares venezolanos a salir de sus casas para luego demolerlas. 
			<br><br>
			Sobre el ataque a los militares, las informaciones ofrecidas por el gobierno venezolano apuntaban a una represalia de grupos paramilitares colombianos que operan en la frontera y que habían sufrido varios operativos en su contra, luego de que se redoblaran los controles en la zona para impedir el contrabando de combustible y productos básicos de la canasta familiar. 
			<br><br>
			Sin embargo, algunos medios internacionales, incluido El Nuevo Herald de Miami, afirmaron en sus páginas, citando fuentes de Inteligencia venezolanas, que “se trató de una pelea entre carteles, entre efectivos de la Guardia Nacional y del Ejército; y el ataque se produjo porque el civil (Ramón Huelva) que se encontraba en el carro les estaba dando la casa donde guardaban el cash (dinero en efectivo)”.
			<br><br>
			Independientemente de cuáles hayan sido las verdaderas razones del ataque contra los militares, este sirvió como excusa para que el presidente Maduro ordenara cerrar la frontera argumentando la necesidad de erradicar la presencia que los grupos paramilitares colombianos ejercen del lado venezolano. 
			<br><br>
			Sin embargo hoy, cuando se cumple un año del cierre, la realidad es que los grupos paramilitares que Maduro mencionaba como excusa, aún siguen haciendo presencia a lo largo de la frontera y utilizan el suelo venezolano para esconderse del asedio de las autoridades colombianas. 
			<br><br>
			<strong>‘Los Rastrojos’ del Puerto</strong>
			<br><br>
			El grupo armado ilegal que más presencia hace en suelo venezolano y cuyos integrantes son, en su gran mayoría, colombianos, son Los Rastrojos. De hecho, el último reducto que aún queda de esta banda criminal (bacrim) en el país, tiene como fortín la línea fronteriza desde Vigilancia (Puerto Santander) hasta Aguaclara (Cúcuta).
			<br><br> 
			Los 70 hombres que según las autoridades integran esta bacrim, son liderados por Wilfrido de Jesús Torres Gómez, alias Necoclí, un antioqueño nacido en el pueblo que le sirve de alias y que se cree se vinculó a este grupo armado desde 2009, cuando llegó por primera vez a Aguaclara. 
			<br><br>
			En el Puerto, Necoclí y sus hombres controlan el contrabando de combustible venezolano, para lo cual han construido sofisticados sistemas de extracción y traspaso de la gasolina desde el vecino país hasta fincas ubicadas del lado colombiano, a través de mangueras que sirven de ‘oleoducto’ transfronterizo. 
			<br><br>
			El poder de este grupo, cuyos hombres armados se ha podido comprobar que permanecen la mayor parte del tiempo del lado venezolano de la frontera, es tal, que hace un mes lograron paralizar por varias horas a Puerto Santander a través de una revuelta liderada por los contrabandistas que se resistían a un operativo de la Policía Fiscal y Aduanera (Polfa) en varios de los centros de acopio de gasolina de contrabando presentes en este municipio. 
			<br><br>
			De hecho, un grupo de hombres fuertemente armados pertenecientes a Los Rastrojos emboscó la caravana de la Policía a la altura de Aguaclara, cuando venía de regreso con la gasolina incautada, impactando varios vehículos con tiros de fusil y sosteniendo un enfrentamiento con la fuerza pública que se prolongó por más de 20 minutos.
			<br><br>
			También, en el último año, Los Rastrojos han liderado dos paros transportadores en el estado Táchira, como mecanismo de presión contra las autoridades venezolanas por el cierre de la frontera. 
			<br><br>
			Recientemente, Rubén Darío Muñoz Pineda, un presunto líder de Los Rastrojos en suelo venezolano, fue asesinado por sicarios en el barrio Francisco Rondón del municipio Boca de Grita (estado Táchira). A Muñoz le dispararon frente a su casa. 
			<br><br>
			Los Rastrojos, además de nutrir sus finanzas ilegales con el contrabando de gasolina, también se lucran en este sector con el cobro de extorsiones a los contrabandistas de todo tipo de productos venezolanos que utilizan las trochas de la zona, así como del tráfico de estupefacientes hacia el exterior utilizando rutas que atraviesan a Venezuela para salir al mar Caribe y de allí a Estados Unidos y Europa.
			<br><br> 
			Aunque este año han sido capturados 11 rastrojos, este grupo aún sigue teniendo un control armado de la zona, impidiendo, a sangre y fuego, el ingreso del Clan del Golfo al Puerto.
			<br><br>
			Por ‘Necoclí’, de quien se cree permanece gran parte del tiempo en territorio venezolano, moviéndose por las poblaciones de La Grita, El Guayabo, La Fría y García de Hevia, las autoridades ofrecen una recompensa de 150 millones de pesos. 
			<br><br>
			<strong>El Clan del Golfo, desde Juan Frío hasta Guaramito</strong>
			<br><br>
			Los Urabeños, que después pasaron a llamarse Clan Úsuga y ahora son conocidos como Clan del Golfo, son liderados en Norte de Santander por Freddy León Ortiz Roso, alias Walter, de 39 años.
			<br><br> 
			Este exparamilitar, que perteneció al Bloque Bananero de las Autodefensas Unidas de Colombia, al mando de Fredy Rendón Herrera (El Alemán), se cree que actualmente lidera a 98 hombres armados que controlan gran parte de la zona rural de Cúcuta, así como las comunas 7 y 8, donde se ubican las casas de lenocinio y la Terminal de Transporte.
			<br><br>
			Para las autoridades, el Clan del Golfo centra sus actividades criminales en la región en el contrabando, las extorsiones y el microtráfico. 
			<br><br>
			La mayoría de sus hombres se resguarda en la zona de frontera, sobre la línea que va desde la redoma de la cárcel hasta el corregimiento de Guaramito. Y es precisamente en este corregimiento, de la zona rural de Cúcuta, donde se han dado los más duros enfrentamientos contra Los Rastrojos, especialmente en la zona conocida como ‘Cuatro Esquinas’.
			<br><br> Allí, en el último año, se han registrado varios homicidios que las autoridades han relacionado con la guerra que libran estas dos bacrim por el control de la frontera. 
			<br><br>
			El Clan del Golfo, a pesar de que este año ha sufrido 56 capturas, es el que más terreno copa en la zona de frontera, pues sus integrantes se mueven también en Juan Frío y La Parada, corregimientos de Villa del Rosario por donde a diario cruzan productos de contrabando. 
			<br><br>
			Actualmente las autoridades colombianas centran sus esfuerzos en dar con el paradero de ‘Walter’ y ‘Bracktes’, su segundo en la organización. Por Ortiz Roso, las autoridades ofrecen una recompensa de 150 millones de pesos. 
			<br><br>
			<strong>‘La Niña’, el comandante de Ureña</strong>
			<br><br>
			Wilkin Alexander Roa, conocido como ‘La Niña’, se entregó a las autoridades colombianas en agosto del año pasado y desde el primer momento confesó ser el comandante del Bloque Frontera de una banda criminal, de la cual no especificó su nombre, dedicada al contrabando en el municipio Pedro María Ureña (estado Táchira- Venezuela). Al menos 10 hombres integrarían esta banda.
			<br><br>
			Si bien en un primer momento se dijo que la presión del presidente Nicolás Maduro y su Operación de Liberación del Pueblo (OLP), que busca ‘liberar a Venezuela del paramilitarismo’, lo habían llevado a entregarse, ‘La Niña’ dijo que nada de esto había tenido que ver y que su entrega obedecía a ‘las ganas de compartir con sus hijos y su familia’
			‘La Niña’ también confesó que desde hacía algún tiempo estaba viviendo cerca de la zona fronteriza, pero del lado colombiano, y que por eso no le había afectado el cierre de la misma. Finalmente sostuvo que los miembros de la organización que lideraba también huyeron de Ureña.
			Este grupo criminal que lideraba ‘La Niña’ es el único del que, hasta el momento, se ha tenido noticia de que operaba netamente desde el territorio venezolano, donde centraba sus acciones delictivas.
			<br><br>
			Y ha sido precisamente esa falta de información oficial, la que ha dificultado conocer con exactitud la realidad del paramilitarismo que tanto denunció en su momento el presidente Maduro.
			<br><br>
			Recién cerró la frontera el año pasado, el presidente venezolano dijo que la Operación de Liberación del Pueblo había dejado 100 personas detenidas y otro centenar más había muerto en enfrentamientos con las autoridades. Sin embargo, las identidades de los capturados y mucho menos las de los muertos, fueron dadas a conocer por el vecino país.
			<br><br> 
			Aún hoy, las acusaciones de Maduro contra supuestos paramilitares se han centrado en casos muy puntuales, como el prófugo exconcejal de Cúcuta, Julio Vélez, de quien dijo estaba detrás del asesinato del diputado oficialista Robert Serra. Y si bien Vélez es prófugo de la justicia colombiana, que le busca dentro del proceso que se sigue en su contra por la muerte de su esposa María Claudia Avendaño, nunca, hasta ahora, se ha conocido que se le siga un proceso en el país por nexos con el paramilitarismo.
		</article>
	</div>

	<div id="historia-2" class="historia">
		<div class="media">
			<img src="<?php print base_path(); ?>sites/default/themes/especiales/frontera/historias/sanantonio-2.jpg" alt="historia-2">
		</div>
		<h3>San Antonio y Ureña, de poblaciones concurridas a fantasmas</h3>
		<article class="info">
			Estas poblaciones vieron colapsar su estructura comercial y el aparato productivo industrial, ante la falta de compradores, insumos y hasta mano de obra calificada.
			<br><br>
			Al filo de la media noche del miércoles 19 de Agosto de 2015, el presidente venezolano Nicolás Maduro estableció un contacto telefónico con el canal VTV para anunciar que había ordenado el cierre de la frontera con Colombia por el estado Táchira, así como el despliegue de una Operación de Liberación del Pueblo (OLP) en la región, para detener a los autores materiales de una emboscada sufrida contra efectivos de la Fuerza Armada Nacional Bolivariana (FANB).
			<br><br>
			“He girado instrucciones de cerrar la frontera con Colombia, en San Antonio del Táchira y en Ureña, de manera inmediata por 72 horas. He dado órdenes precisas a la FANB. Pido el apoyo de todo el pueblo de Táchira, de San Antonio, de Ureña, de todas las regiones de nuestra amada frontera. E inmediatamente implementar una OLP especial hacia la frontera”, dijo el mandatario en esa oportunidad.
			<br><br>
			Hoy viernes 19 de agosto se cumple un año del intempestivo cierre de los pasos fronterizos por parte del gobierno venezolano, una decisión que tuvo fuertes repercusiones en la economía de las poblaciones de frontera, especialmente las de San Antonio y Ureña, que vieron colapsar su estructura comercial y el aparato productivo industrial, ante la falta de compradores, insumos y hasta mano de obra calificada.
			El cierre, que inicialmente se anunció por 72 horas en la frontera binacional del estado Táchira, se extendió a casi un año y abarcó los 2.219 kilómetros de los límites que comparten Colombia y Venezuela, desde la Península de La Guajira en el Zuliaa la Piedra del Cocuy en el río Negro del estado Amazonas.
			<br><br>
			<strong>Éxodo masivo</strong><br><br>
			Contrario a lo muchos piensan, el primer impacto del cierre fronterizo, no fue el económico, ese vino después. Las impresionantes imágenes de cientos de miles de colombianos expulsados por las autoridades venezolanas de los barrios Ezequiel Zamora, Hugo Chávez y Mi Pequeña Barinas dieron la vuelta al mundo; y a los expulsados se sumaron quienes para evitar perder sus enseres, se los echaron al hombro y cruzaron a pie el río Táchira, frontera natural que divide a ambas naciones.
			<br><br>
			Ello trajo como consecuencia, lazos rotos, nexos desvanecidos, familias separadas y unos asentamientos en los que, si bien es cierto reinaba la anarquía y la ilegalidad, ahora se había instaurado la desolación. Allí, decenas de precarias viviendas fueron marcadas y posteriormente derrumbadas.
			<br><br>
			Esta zona, mejor conocida como “La invasión” estuvo durante 10 meses militarizada; hace tan solo un mes que la Fuerza Armada Nacional Bolivariana, (FANB) levantó los campamentos y alcabalas móviles que se habían instalado desde agosto del año pasado y se marcharon. Ahora se puede entrar y salir del lugar sin ser requisado, ni mostrar documentos de identidad.
			<br><br>
			José Rodríguez, un colombiano representante de la junta comunal del sector II de “Mi pequeña Barinas”, dijo que han sido varias las personas que han regresado a la comunidad. Sin embargo, la crisis económica, de escasez y desabastecimiento que vive el país los han puesto de vuelta al departamento Norte de Santander.
			<br><br>
			Comercio: Quiebra el formal y florece el ilegal
			El hombre que sobrepasa los 60 años y se dedica a la reparación de vehículos, aseguró que el negocio del comercio ilegal en la frontera, “se lo quitaron de las manos a los civiles, al contrabandista pequeño que sobrevivía con el negocio, para apoderarse de él los duros del contrabando en la zona. Son los mismos que pasan mercancía por Guarumito, Puerto Santander, o por El Guayabo y por todas las zonas que limitan con Colombia. Por eso es que el cierre de la frontera ha sido el negocio de los grandes, de los duros”.
			<br><br>
			Mientras tanto, la Cámara de Comercio de San Antonio, denunció una y otra vez a lo largo de casi un año, la precaria situación en la que fueron colocados los comerciantes de la zona.
			<br><br>
			“Aproximadamente un 90% del comercio de San Antonio del Táchira y más del 80% de las industrias de Ureña se han visto forzadas a cerrar sus puertas, despedir a sus trabajadores y sus dueños se dedican ahora a otras actividades”, dijo José Rozo, expresidente de la organización.
			<br><br>
			En lo que respecta a la situación del comercio, explicó que el cierre de los pasos fronterizos trajo consigo el cese abrupto de los compradores colombianos y la pérdida de interés de los propios venezolanos en la zona de frontera. “San Antonio y Ureña se han convertido en pueblos fantasmas a lo largo de este último año. Pasamos de ser una de las fronteras más activas de América Latina a poblaciones de calles desiertas y santamarías cerradas”, dijo. La escasez en la zona es tal, que ya muchos comerciantes ni siquiera tienen mercancías para vender.
			<br><br>
			El transporte público, los taxistas y los transportistas de carga también dicen haberse visto seriamente afectados por el cierre de fronteras. Según Celestino Moreno, presidente del Sindicato de Transporte  Público en la Frontera, la situación afectó a unas 800 familias de transportistas, más de mil taxistas y unos 3 mil transportadores de carga pesada y carbón, quienes quedaron “prácticamente sin ingresos por casi un año”.
			<br><br>
			¿Frontera de Paz?
			Durante los más de 11 meses que ha durado el cierre fronterizo, el tema de seguridad se ha mantenido siempre presente; es por ello que las autoridades venezolanas movilizaron unos 3 mil efectivos militares de diferentes contingentes; las tropas llegaron por tierra e incluso por aire, desde diversos estados de Venezuela.
			<br><br>
			Sin embargo, ello no parece haber sido suficiente para devolver la tranquilidad a los habitantes de la zona fronteriza, quienes aseguran vivir bajo el temor que imponen las bandas criminales y los grupos paramilitares. Hace solo unos días el transporte fue paralizado por amenazas de “elementos al margen de la ley”, como los calificó el coronel Humberto Villamizar, máxima autoridad militar de la zona.
			<br><br>
			La extorsión, el cobro de vacuna y el sicariato están a la orden del día, y ello es especialmente evidente en sectores como Tienditas, del municipio Pedro María Ureña, cuyo alcalde, Alejandro “Tato” García, ha reconocido en más de una oportunidad la grave situación de inseguridad que reina en esta parte del territorio fronterizo.
			<br><br>
			<strong>¿Reapertura sin solución?</strong><br><br>
			“Los habitantes de la frontera lo que necesitan es inversión en todos los ámbitos, instrumentos de reactivación económica y social y no más controles, que en lo que hemos visto no han dado resultados positivos, por eso hoy vemos este escenario tan nefasto; si hubiese habido inversión y políticas bien plantadas hoy no estuviéramos hablando de cierre ni de nada de esto en la frontera binacional”, manifestó por su parte Germán Balza, habitante de San Antonio del Táchira.
			<br><br>
			“Aspirábamos una apertura definitiva y amplia para que nuestros pueblos se reencontraran, porque así como nosotros los venezolanos tenemos necesidades de ir a Cúcuta, los Colombianos tienen necesidades de venir aquí y así se reactiva el intercambio fronterizo y se vuelven a abrir los almacenes y las fábricas” agregó.
			<br><br>
			Para Daniel Aguilar, presidente de Fedecámaras Táchira, la reapertura, tal como está planteada, no constituye solución alguna para los empresarios, que continúan a la espera de que sea autorizado el paso comercial de mercancías, y la circulación de vehículos de carga de uno a otro lado de la línea binacional.
			<br><br>
			Según Aguilar, lo importante es que “el gobierno venezolano permita a los bodegueros, a los comerciantes pequeños y medianos, comprar productos alimenticios, para ser vendidos en Venezuela, pagando los impuestos correspondientes en las aduanas”.
			Reiteró la importancia de impulsar la Zona Estratégica Fronteriza, “que desde hace varios años y en reiteradas oportunidades ha intentado ponerse en marcha, y que hasta ahora no ha podido ser consolidada por parte del gobierno venezolano”.
			<br><br>
			Aguilar destacó que uno de los ámbitos que ha recibido con mayor fuerza el impacto negativo del cierre de fronteras ha sido el económico, por lo que para Fedecámaras Táchira, la reapertura de la frontera debe ir acompañada de estrategias que permitan la recuperación del comercio local y ello pasa por elevar en la zona las garantías de seguridad que devuelvan la tranquilidad a comerciantes, empresarios y compradores.
		</article>
	</div>

	<div id="historia-3" class="historia">
		<div class="media">
			<img src="<?php print base_path(); ?>sites/default/themes/especiales/frontera/historias/analisis-2.jpg" alt="historia-3">
		</div>
		<h3>El principio del fin</h3>
		<article class="info">
			Ronal Rodríguez
			<br><br>
			Profesor e investigador adscrito al Observatorio de Venezuela 
			de la Universidad del Rosario.
			<br><br>
			Venezuela atraviesa la peor crisis de su historia, pero el chavismo se mantendrá en el poder. Después de diecisiete años gobernando los destinos de Venezuela, el chavismo, hoy en cabezade Nicolás Maduro, no cuenta con la popularidad ni los votos de su padre político, pero ejercerá el poder de forma directa hasta el 2019 y será una fuerza política viva en las próximas décadas.Tres cosas explican la supervivencia en lo inmediato: La captura del aparato judicial; La relación de mutua dependencia con el aparato coercitivo legal e ilegal; Y finalmente,el clientelismo extorsivo.
			<br><br>
			Primero hay que abordar la supervivencia en el corto plazo. A pesar de los esfuerzos de la oposición por convocar a un referendo revocatorio, los herederos del comandante le torcerán el brazo a la institucionalidad para postergar el revocatorio hasta pasado el mes de enero de 2017.
			<br><br>
			El Gran Polo Patriótico, que reúne en pleno todas las fuerzas políticas que apoyan al chavismo, sabe que en el momento de ir a las urnas perderá como ocurrió en el pasado mes de diciembre, ante lo cual han empezado a trazar alternativas para el control de daños y han planteado una estrategia de dilación.
			<br><br> 
			Todo lo cual es posible por el control que tiene el Ejecutivo del Tribunal Supremo de Justicia -TSJ-, el cual emite sentencias obedeciendo líneas dictadas desde Miraflores.
			<br><br>
			El máximo órgano del poder judicial está supeditado a las interpretaciones maniqueas de la Constitución y las leyes que hacen los magistrados, en las cuales las acciones del oficialismo son constitucionales y las de la Oposición inconstitucionales, sin entrar a profundizar en la criminalización de los todos detractores o sus allegados. En otras palabras, la captura del aparato judicial.
			<br><br>
			Por otro lado, se ha vinculado a los diferentes cuerpos de seguridad del Estado con el ejercicio del gobierno: ministros, gobernadores, entre otros cargos que son ejercidos por funcionarios de origen militar o incluso en servicio. Lo cual ha generado una mutua dependencia entre el sector castrense y el oficialismo chavista, al punto que se puede afirmar que una parte importante de dicho oficialismo es compuesto por los cuerpos de seguridad del Estado. Es decir, los militares son chavismo. Así mismo se ha entregado parte del monopolio de la fuerza a los denominados “colectivos” quienes ejercen funciones de amedrentamiento de la sociedad, una especie de cuerpos paraestatales que actúan impunemente mientras usen las franelas rojas y tal como lo concibió Chávez son la primera línea de defensa de la Revolución. Tanto cuerpos de seguridad legales como los colectivos ilegales tienen claro que su supervivencia e influencia dependen de mantenerse como chavismo en el poder.
			<br><br>
			Y finalmente, bajo la egida de Maduro, se ha instrumentalizado el empobrecimiento del pueblo venezolano. En los años del derroche, Chávez direccionó los abundantes recursossobre los sectores populares más deprimidos granjeándose su apoyo, estrategia que se usó como fuente de incentivos electorales. Pero es el actual Presidente, quien logra instrumentalizar la escasez y las carencias económicas.
			<br><br>
			Se ha establecido una relación clientelar como la de Chávez, con la diferencia que lo poco que se reparte es bajo la extorción, solo serán beneficiarios aquellos que demuestren su lealtad al proyecto político, pero deben hacerloexplícito con militancia y obediencia, incluso con las malas decisiones.
			<br><br>
			Estos tres elementos conjugados mantienen al chavismo en el poder,pero tampoco resultan ser suficientes para eternizarlo. La Revolución Bolivariana se concibió como un proyecto político en el marco democrático de una América Latina que superaba las dictaduras, legitimado por constantes contiendas electorales,de un lado, mientras le torcía el brazo a la institucionalidad y al equilibrio de poderes por el otro. Chávez siempre se escudó en los resultados electorales para argüir que en Venezuela se vivía en democracia, incluso en los perores momentos como después del golpe de Estado del 2002 y el paro sabotaje que lo siguió, la respuesta fue buscar el apoyo en las urnas. Hoy sus herederos saben que podrán dilatar el referendo incluso aplazar las elecciones, pero es imposible escapar del veredicto de las urnas y la derrota es inminente. Lo que ayer salvo a Chávez hoy condena Maduro y al chavismo.
			<br><br>
			No obstante, tampoco se puede creer que es su fin, tres cosas también explican su posibilidad de permanecer en el tiempo: La exaltación de la figura de Chávez, se ha logrado escindir la figura del carismático líder del desastre económico y de seguridad que vive el país, su imagen es positiva a pesar de ser el responsable e implementar las medidas que han llevado a Venezuela la crisis, por mucho la peor de su historia.
			<br><br> 
			Pero aun así se le relaciona con la época de grandes gastos en política social y para muchos chavistas las cosas no abrían llegado a este punto si el comandante estuviera al mando.La segunda, el resultado de la activación política de amplios sectores sociales que ingresaron al panorama político venezolano por la ampliación de la participación y que no están dispuestos a renunciar al protagonismo que han adquirido, dichos sectores son la base del poder chavista, lo que se podría llamar chavismo duro. Fuerza política sobre la cual volverá algún líder del chavismo para relanzar el proyecto, en una especie de emulación del peronismo argentino. 
			<br><br>
			Y el tercer elemento paradójicamente, son los costos de la reconstrucción de Venezuela. Las fuerzas políticas que gobiernen Venezuela en el mediano plazo saben que reconstruir el país, su economía y su seguridad, conlleva un desgaste sobre el cual podrán volver los chavistas, así ellos sean los causantes para pescar en el descontento de la población.
			<br><br> 
			De la misma forma que en Colombia ya inició el posconflicto, sin que se haya firmado la paz, y sin que ello signifique el fin de la violencia, en Venezuela ya inició el postchavismo, sin que se haya logrado salir de la Revolución Bolivariana, y sin que ello signifique el final de la confrontación política.
		</article>
	</div>

	<div id="historia-4" class="historia">
		<div class="media">
			<img src="<?php print base_path(); ?>sites/default/themes/especiales/frontera/historias/contrabando-2.jpg" alt="historia-4">
		</div>
		<h3>El contrabando: antes y ahora</h3>
		<article class="info">
			$70.000 movía una estructura dedicada al contrabando de ganado y carne en canal en la frontera.
			<br><br>
			La frontera: antes y después
			<br><br>
			El contrabando, el paramilitarismo y la criminalidad fueron los argumentos que esgrimió el presidente Nicolás Maduro para cerrar la frontera entre Venezuela y Colombia.
			<br><br>
			Los graves problemas del corredor entre ambos países se convirtieron, tal vez sin querer, en una oportunidad de cambio que logró que el corredor binacional no sea el mismo desde el 19 de agosto de 2015.
			La venta de gasolina en las calles y la compra y venta de productos traídos de Venezuela, solía ser un trabajo pero con el cierre dejaron de serlo para definirse como lo que son: actividades ilícitas.
			Aunque los traficantes de combustible, alimentos y productos de la canasta básica venezolana desarrollan mecanismos y nuevas rutas para delinquir, la contundencia de las intervenciones de las autoridades les pone freno.
			<br><br>
			Al menos así lo refiere el General Gustavo Moreno, director de la Policía Fiscal y Aduanera (Polfa), enviado especial del presidente Juan Manuel Santos, y quien funge como líder de las operaciones que dejan varios resultados.
			<br><br>
			Hasta el momento, van 16 estructuras criminales totalmente desarticuladas en la línea de frontera y tres que son objeto de extinción de dominio, es decir, 19 casos en los que los lavadores de activos y controladores del negocio son realmente investigados.
			Así mismo, cayó una estructura dedicada al contrabando de ganado y carne en canal, con 12 personas capturadas que movían $70 mil millones anualmente.
			<br><br>
			Si bien Moreno reconoce que la lucha “que más se ve” es la callejera, contra pimpineros y contrabandistas menores, “en las trochas, el trabajo es integral y silencioso, y sabemos lo que está pasando”.
			Aunque el oficial afirma que su llegada obedece al cumplimiento de una orden presidencial, para los ciudadanos de La Parada, o Puerto Santander, una nueva fuerza de mando proveniente de Bogotá “es otra cosa, porque estos no cobran y sí van en serio”.
			<br><br>
			Es que como él mismo reconoce, “ha habido contubernio, no generalizado, en diversas autoridades” y relaciones de corrupción con la criminalidad desde las instituciones.
			<br><br>
			“Por parte de la Policía hay investigaciones y procesos de transparencia”, dice. “Hay listados de policías a los que se les pedirá el retiro, la aplicación de la medida discrecional, desvinculación y traslado”.
			<br><br>
			Esa es, afirma, una de las transformaciones de la frontera: la depuración de las instituciones del Gobierno, que incluyen a la Policía.
			<br><br>
			“Necesitamos sacar a quienes tengan siquiera un indicio de vínculos de favorecimiento al contrabando, narcotráfico o cualquier estructura criminal que sigue en esta zona”, asegura, sin titubear cuando reconoce que entre los uniformados de Cúcuta también hay ‘manzanas podridas’.
			<br><br>
			Actualmente, para acabar con esta relación entre autoridades policiales, civiles y contrabandistas se controlan varias líneas telefónicas con el sistema Puma (Plataforma Única de Monitoreo y Análisis), que permite interceptar llamadas y conversaciones vía chat.
			Según reveló, hay varias líneas “postuladas” en el sistema por su relación con integrantes de bandas criminales, y todos serán investigados disciplinaria y penalmente.
			<br><br>
			Además, hay una línea de trabajo con la oficina de transparencia de la Presidencia y la Fiscalía, entidades encargadas de vigilar las actuaciones de funcionarios públicos que han favorecido la comisión de delitos como el contrabando.
			<br><br>
			<strong>LAS MALAS COSTUMBRES</strong>
			<br><br>
			Antes del cierre de la frontera, los gobiernos locales avalaban la permanencia de pimpineros en las calles y permitían, sin vergüenza alguna, su despliegue en las avenidas, sin sanciones a quienes llenaban los tanques de sus carros en estos puestos ilegales.
			Pero ahora las condiciones son otras; “ninguna autoridad puede patentar la ilegalidad”.
			<br><br>
			Para Moreno es inconcebible que, hasta hace poco, se pensara en entregar carné a los pimpineros, sabiendo que estaban inmersos en una actividad ilegal penalizada, que contraviene la ley anticontrabando.
			“La costumbre no puede patentar y legalizar la informalidad que, a su vez, no puede ir de la mano de la criminalidad”, enfatiza. “¿Cómo dejamos que en lugares como La Parada oEl Escobal se permitiera eso?”.
			Con el cambio paulatino de la cultura de la ilegalidad, llegó también la organizaciónde espacios en los que campeaba el caos.
			<br><br>
			La Parada es uno de esos ejemplos, cuyo espacio público estuvo atiborrado de pimpineros y casetas, útiles para que los criminales se lucraran del pago de extorsiones, pero hoy está despejado.
			“Antes, cuando se entraba por Venezuela se veía personal de la Dian y Migración, pero no la Policía y menos las fuerzas militares”, comenta el General. “Hoy en día, esa presencia institucional es un reflejo de la recuperación de la soberanía, la autoridad y el orden”.
			<br><br>
			Además, ayuda que los expimpineros y habitantes de estas conflictivas zonas le huyan a la estigmatización y, sobre todo, a la persecución de las autoridades.
			<br><br>
			Aunque no ha sido fácil, se ha trabajado con los alcaldes “presos del miedo”, como el de Puerto Santander, Henry Valero, “que hoy tiene el respaldo real de una autoridad estable”, y aunque falta que otros se involucren más, la plataforma de seguridad, control migratorio, economía, e intervenciones sociales favorecerá esta integración.
			<br><br>
			“La responsabilidad política es grande y nadie puede amparar la ilegalidad, porque las autoridades elegidas legítimamente tiene la obligación de cumplir y hacer cumplir las normas; de lo contrario serán investigados”, advirtió. 
			<br><br>
			<strong>PUNTOS POR VENCER</strong>
			<br><br>
			Sectores como Guaramito, San Faustino, y algunos tramos de Tibú y Puerto Santander no serán descuidados, pese a que la mayoría de acciones militares se han desarrollado en el área metropolitana.
			Sin embargo, todavía queda un área estratégica para desmantelar parte del contrabando: el centro comercial Alejandría.
			<br><br>
			“Alejandría es, hoy en día, un sitio que alberga comerciantes buenos y malos, pero allí ya se han hecho allanamientos”, dijo. “En los locales donde haya contrabando habrá extinción de dominio”.
			<br><br>
			Si se logra que este centro comercial se formalice, erradique el contrabando, y comercialice productos colombianos, como ocurre en Puerto Santander, o La Parada, “tendríamos un ícono nacional que demuestre que sí se puede ser legal”.
			<br><br>
			Está pendiente también vencer el retorno de la corrupción cuando las autoridades foráneas se establezcan en otras zonas, pero la garantía que deja Moreno es la voluntad política, originada en la decisión presidencial y ratificada por la Gobernación.
			<br><br>
			“Soy un convencido de que en Cúcuta hay gente que no va a permitir que lo que se está haciendo decaiga”, agregó, señalando que a futuro “esperaría ver una Venezuela pujante, y una frontera viva y sana, en la que se respeten las normas”. 
			<br><br>
			Ese es el reto para evitar el retroceso hacia una relación binacional que no dejó más que decepciones y la evidencia de que ante el abandono del Estado cualquiera hace sus propias leyes.
			<br><br>
			<strong>Recuadro
			Datos de aquí y allá </strong>
			<br><br>
			* En Norte de Santander hay 51 trochas identificadas para el paso de contrabando. De ellas, 30 han sido reconocidas binacionalmente.
			<br><br>
			* Por orden del ministerio de Defensa, hay 33 trochas que tienen presencia del Ejército y la Policía Fiscal y Aduanera.
			<br><br>
			* Hasta el momento, en Norte de Santander se cuentan 23 pasos ilegales totalmente inhabilitados.
			<br><br>
			* La mayoría de las trochas están ubicadas entre los estados de Zulia y Táchira.
			<br><br>
			* El contrabando de gasolina movía, hasta el año anterior, más de 100 mil barriles diarios de petróleo.
			<br><br>
			* La zona de la frontera más preocupante para las autoridades es Táchira, debido a que allíhay tres disidencias del Clan Úsuga que reclaman derechos sobre las trochas.
			<br><br>
			* En julio de este año, la Fuerza Armada Nacional Bolivariana decomisó más de 31 mil litros de gasolina en el estado Zulia, mientras que la Guardia Costera de Venezuela ha retenido más de 19 mil litros de combustible.
			<br><br>
			* Para el cierre de la frontera, solo en Táchira, se contabilizó el ahorro de 60 millones de litros de gasolina.
			<br><br>
			*La lucha contra el contrabando deja, en Colombia, el decomiso de más de 149 mil millones de pesos de mercancía y productos de contrabando.
			* Desde mayo de 2014, Venezuela ha destruido más de 160 trochas en la zona de frontera del estado Táchira.
			<br><br>

			<strong>Encomillado: </strong>
			<br><br>
			La gente debe entender que lo que hace es un delito y no un mecanismo de subsistencia. Nadie puede vivir a punta de delitos”. General Gustavo Moreno, director de la Polfa.
		</article>
	</div>

	<div id="historia-5" class="historia">
		<div class="media">
			<img src="<?php print base_path(); ?>sites/default/themes/especiales/frontera/historias/rita-2.jpg" alt="historia-5">
		</div>
		<h3>Rita, una de las caras solidarias que dejó la crisis fronteriza</h3>
		<article class="info">
			200 deportados tuvieron un alimento diario durante 21 días por Rita Zoila González, una samaritana que se ganó el corazón de los connacionales que fueron expulsados por el gobierno de Venezuela en agosto de 2015.
			<br><br>
			La mujer recibió una casa por sus buenas acciones
			<br><br>
			Jennifer K. Rincón Peña - 
			Jennifer.rincon@laopinión.com.co
			<br><br>
			Una casa propia, 15 kilos menos, y cientos de amigos nuevos le dejó el cierre fronterizo a Rita Zoila González, una mujer que sacó a relucir su lado más humano y solidario hoy hace un año, cuando decenas de personas empezaron a hacer una parada en su casa tras haber sido expulsados del territorio venezolano.
			<br><br>
			Durante 21 días la ama de casa de 49 años se dedicó a atender, ayudar, y velar por la alimentación y el bienestar de los cientos de repatriados que se instalaron en el sector La Playita en La Parada luego de que el gobierno de Venezuela decretara el cierre de frontera.
			Al evocar los días en que le cedió su casa a los deportados, se levantó a las 4 a.m. a hacer tinto y decenas de arepas y se la pasó todo el día agachada  atizando un fogón y pelando verduras  para preparar una sopa para más de200 comensales, las lágrimas le brotan.
			<br><br>
			“Toda esta situación me dio muy duro y eso que no tenía familiares en Venezuela. Me la pasaba días enteros buscándole una explicación a lo que estaba pasando y no encontraba respuestas”, explicó González acongojada.  “A toda esa gente la sacaron o la hicieron salir a la fuerza acusándolos de paramilitares y no les importó dejar sin techo a miles de familias. Me ponía en el puesto de estas personas y no podía conciliar el sueño”.
			<br><br>
			Por esta razón, González, puso lo único que tenía para ayudar, su voluntad, su poder de convocatoria y un par de ollas viejas para brindarles un plato de comida a sus amigos los deportados.
			“Yo lo único que hice fue sacar mis ollas y Dios puso el resto”, explica con una gran sonrisa y recuerda que al finalizar el día terminada rendida y quemada por estar al sol todo el día.
			<br><br>
			A medida que pasaban los días llegaban más y más alimentos a su casa por lo que tuvo que habilitar una habilitación como despensa, y asegura que a sus pupilos no les faltó desayuno, almuerzo ni comida en el tiempo en que ella estuvo  detrás de los fogones.
			<br><br>
			En medio de todo el ajetreo González también tenía que lidiar con uno que otro avivato que quería beneficiarse de las ayudas para los deportados.
			<br><br>
			“No faltaba el avariento que quería venir a quitarle un plato de comida a quien realmente lo necesitaba. Y yo no tuve pelos en la lengua para defender a mi gente y cuidar las ayudas que la gente les daba”,  reiteró alzando un poco la voz.
			<br><br>
			Cuando  el gobierno nacional  habilitó  los albergues temporales, su trabajo acabó y megáfono en mano invitaba a sus nuevos amigos a tomar las ayudas que la Unidad Nacional para la Gestión del Riesgo de Desastres (Ungrd), para llevar los pocos enseres que les quedaron hasta sus sitios de origen. Cada vez que ayudaba a montar un trasteo a los camiones del Ungrd  la despedida terminaba en lágrimas.
			<br><br>
			<strong>¡Un premio  caído del cielo!</strong>
			<br><br>
			Aunque González aseguró que con  su labor no buscaba retribución alguna, el 23 de enero recibió una casa en el barrio Minuto de Dios de las manos del reconocido sacerdote Alberto Lineros, quién no solo se enteró de su labor social, sino que indagó más allá y se dio cuenta de que González vivía arrendada y tenía deudas pendientes con su arrendador.
			<br><br>
			“Me dijeron que usted tiene más problemas con la renta que don Ramón, y por eso queremos darle una casa”, fueron las palabras de Lineros.
			Ante el ofrecimiento del sacerdote, ella se negó rotundamente a aceptar la ayuda alegando que ella no era deportada y no merecía tal premio, sin embargo, Lineros le insistió y  logró convencerla de recibirla.
			Pese a que está a gusto en su nueva casa porque es cómoda y no tiene que volver a preocuparse por pagar arriendo  confiesa que extraña el calor humano de La Parada y si pudiera arrancaría su casa de la comuna 8 y se la llevaría hasta el corregimiento fronterizo para seguir rodeada de sus viejos vecinos.
			<br><br>
			Los fines de semana va a La Parada para ofrecer las rifas con las que subsiste. Ocasionalmente trabaja ocasionalmente en una bodega. 
			<br><br>
			<strong>Un año después</strong>
			<br><br>
			González asegura que su mayor satisfacción es encontrarse en la calle a aquellas personas que pasaron por su casa y saber que pese a las circunstancias siguen luchando para sacar a sus familias adelante.
			“En la calle la gente me saluda y me da las gracias y me cuentan que pasó con sus vidas después del paso por los albergues”, explicó.  “Unos se devolvieron para sus sitios de origen, otros otros se quedaron en la ciudad vendiendo agua en las calles o caramelos en las busetas, y otros tantos se fueron a trabajar en fincas”.
			<br><br>
			Finalmente, González o el ‘Ángel de los deportados’ como la bautizaron sus amigos los repatriados dijo que la mayor enseñanza que le dejó la crisis fronteriza fue que los milagros existen,  que la solidaridad de los colombianos es bastante fuerte, y que cuando el corazón es el que da las órdenes el cuerpo nunca sentirá peso, pues ella en los 21 días de trabajo voluntario nunca pensó en tirar la toalla.
		</article>
	</div>
	<div class="titulo-frontera">
		<img src="<?php print base_path(); ?>sites/default/themes/especiales/frontera/titulo.png" alt="Frontera">
	</div>
	<section id="notas">
		<div class="content">
		    <div class="bloque uno">
		    	<div class="left">
		    		<h2><a href="#historia1">Las bandas criminales que Maduro llama paramilitares</a></h2>
				    <!-- <div class="titulo">	
				      	Jhon Jairo Jácome
				    </div> -->
				    <div class="cuadro">
				    	<a href="#historia1">ver nota</a>
				    </div>
		    	</div>
		    	<div class="right">
				    <div class="foto">
				      	<a href="#historia1"><img src="<?php print base_path(); ?>sites/default/themes/especiales/frontera/historias/paracos-1.jpg"></a>
				    </div>	
		    	</div>
		    </div>

		    <div class="bloque dos">
		      <div class="left">
				    <div class="foto">
				      	<a href="#historia2"><img src="<?php print base_path(); ?>sites/default/themes/especiales/frontera/historias/sanantonio-1.jpg"></a>
				    </div>
		    	</div>
		    	<div class="right">
				    <h2><a href="#historia2">San Antonio y Ureña, de poblaciones concurridas a fantasmas</a></h2>
				    <!-- <div class="titulo">	
				      	Eilyn Cardozo
				    </div> -->
				    <div class="cuadro">
				    	<a href="#historia2">ver nota</a>
				    </div>
		    	</div>	
		    </div>

		    <div class="bloque tres">
		        <h2><a href="#historia3">El principio del fin</a></h2>
		       <div class="cuadro">
			    	<a href="#historia3">ver nota</a>
			    </div>	
			    <div class="titulo">	
				    Analista universidad del Rosario
				</div>
		    </div>

		    <div class="bloque cuatro">
		    	<div class="left">
		    		<h2><a href="#historia4">El contrabando: antes y ahora</a></h2>
				    <!-- <div class="titulo">	
				      	Helena Sánchez
				    </div> -->
				    <div class="cuadro">
				    	<a href="#historia4">ver nota</a>
				    </div>
		    	</div>
		    	<div class="right">
				    <div class="foto">
				      	<a href="#historia4"><img src="<?php print base_path(); ?>sites/default/themes/especiales/frontera/historias/contrabando-1.jpg"></a>
				    </div>	
		    	</div>
		    </div>

		    <div class="bloque cinco">
		      <div class="left">
				    <div class="foto">
				      	<a href="#historia5"><img src="<?php print base_path(); ?>sites/default/themes/especiales/frontera/historias/rita-1.jpg"></a>
				    </div>
		    	</div>
		    	<div class="right">
				    <h2><a href="#historia5">Rita, una de las caras solidarias que dejó la crisis fronteriza</a></h2>
				    <!-- <div class="titulo">	
				      	#
				    </div> -->
				    <div class="cuadro">
				    	<a href="#historia5">ver nota</a>
				    </div>
		    	</div>	
		    </div>

		    <div class="historia huno">
		      	<h3>Lorem ipsum dolor sit amet, consectetur adipiscing elit</h3>	
		      	<p>Sed ultrices felis eget fringilla convallis. Cras vel hendrerit ex. Mauris diam nibh, lobortis vitae dui et, sodales sollicitudin felis. Suspendisse vitae dolor arcu. Aliquam id elit vitae leo pharetra ultricies. Integer eget malesuada lorem. Duis mattis, quam vel facilisis scelerisque, turpis est malesuada ex, rutrum convallis tortor ante ac orci. Cras ut arcu luctus, eleifend velit vitae, pulvinar leo. Nulla eu turpis vehicula, sagittis ante a, auctor quam. Curabitur et sem vitae felis tempor venenatis sed quis dui. Etiam facilisis, est nec congue maximus, orci magna ornare ex, a mollis tellus quam vitae ante. Aliquam non quam accumsan, malesuada velit in, venenatis quam. Nam interdum nisl pellentesque nibh laoreet, sed aliquet dui elementum. Phasellus porta est lorem, non suscipit odio pellentesque vitae. Nullam eget felis diam. Donec non suscipit ipsum.</p>
				
				<iframe width="100%" height="315" src="https://www.youtube.com/embed/tYkn3MD4zMc" frameborder="0" allowfullscreen></iframe>

				<p>Interdum et malesuada fames ac ante ipsum primis in faucibus. Nam ut viverra est. Quisque cursus at diam nec rutrum. Integer ut gravida velit. Quisque venenatis eu ipsum nec vulputate. Sed tincidunt leo augue, sollicitudin pretium erat blandit id. Vivamus elementum rhoncus magna, luctus luctus turpis bibendum tincidunt. Nunc nisi mauris, efficitur a porta sed, tempor non sapien. In hac habitasse platea dictumst. Aenean at metus vitae neque vestibulum fringilla. Pellentesque pulvinar ipsum tortor, at pretium diam facilisis a. Maecenas varius eleifend urna in rhoncus. Suspendisse lacinia turpis ligula, id hendrerit lectus accumsan eget.</p>

				<p>Phasellus a efficitur justo. Aliquam vestibulum sapien lectus, malesuada efficitur ipsum pretium eget. Nam rutrum, justo vel convallis congue, diam augue ullamcorper urna, ut malesuada elit diam bibendum eros. Nullam vel posuere felis. Nunc eget lacinia elit. Duis turpis odio, convallis vel turpis eget, pellentesque lobortis orci. Curabitur venenatis libero vitae lectus accumsan viverra. Vestibulum euismod dolor ut cursus lobortis. Nulla tempus luctus sem, quis rhoncus leo cursus eget. Donec porta condimentum est. Pellentesque eu quam mattis, tristique augue rutrum, ullamcorper erat. Quisque vitae nisi ante.</p>

				<p>Proin quam sem, ullamcorper consequat augue a, aliquet feugiat est. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Fusce blandit enim vel ultricies pellentesque. Aenean sagittis dui nec metus tincidunt congue. Proin nec accumsan dui. Vestibulum quis tortor lectus. Vestibulum hendrerit, mi congue viverra placerat, ante dolor efficitur massa, non rutrum ex nisi nec elit. Proin non libero nisi. Interdum et malesuada fames ac ante ipsum primis in faucibus.</p>

				<p>Donec molestie massa sapien, eu euismod felis vulputate sit amet. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Suspendisse nec ante ipsum. Praesent ut nulla massa. Duis condimentum diam a leo congue elementum vehicula ultrices libero. Pellentesque cursus odio lacus. Phasellus sagittis aliquam velit, vel varius ante hendrerit eget. Suspendisse in ipsum purus. Pellentesque et libero sit amet ex pretium finibus.</p>
		    </div>
		    
		</div>
	</section>
	<section id="videos">
		<div class="content">
			<h2>El año en el que se separaron dos países hermanos</h2>
		</div>
		<div class="video">
			<iframe width="100%" height="750" src="https://www.youtube.com/embed/mxd6Tn3dHP4?autoplay=0&showinfo=0&autohide=1&color=white&controls=2" frameborder="0" allowfullscreen ></iframe>	
		</div>
	</section>	
	<section id="galerias">

		<div class="content">
			<h2>Lo vivido tras el cierre de frontera</h2>
		</div>
		<!--GALERIA 1-->
		<div id="galeria1" style="position: relative; margin: 0 auto;top: 0px; left: 0px; width: 1300px; height: 700px; overflow: hidden;">
        	<!-- Slides Container -->
	        <div data-u="slides" style="cursor: move; position: absolute; left: 0px; top: 0px; width: 1300px;height: 700px; overflow: hidden;">
	            <div>
	                <img data-u="image" src="<?php print base_path(); ?>sites/default/themes/especiales/frontera/galerias/uno/12.jpg" alt="" />
	                <div class="info">
	            		<div class="desc">Hasta animales como este cerdo, sufrieron el drama del cierre de frontera. Ayudados por sus dueños muchos cruzaron por el río Táchira.</div>
	            		<div class="autor">Foto: Juan Pablo Cohen</div>
	            	</div>
	            </div>
	            <div>
	                <img data-u="image" src="<?php print base_path(); ?>sites/default/themes/especiales/frontera/galerias/uno/01.jpg" alt="" />
	                <div class="info">
	            		<div class="desc">Incertidumbre después del cierre de frontera. Varios deportados miran los reportes noticiosos de los medios colombianos.</div>
	            		<div class="autor">Foto: Juan Pablo Cohen</div>
	            	</div>
	            </div>
	            <div>
	                <img data-u="image" src="<?php print base_path(); ?>sites/default/themes/especiales/frontera/galerias/uno/02.jpg" alt="" />
	                <div class="info">
	            		<div class="desc">Aspecto del cierre fronterizo en Puerto Santander. El flujo de contrabando de gasolina y el paso de personas por el río.</div>
	            		<div class="autor">Foto: Juan Pablo Cohen</div>
	            	</div>
	            </div>
	            <div>
	                <img data-u="image" src="<?php print base_path(); ?>sites/default/themes/especiales/frontera/galerias/uno/03.jpg" alt="" />
	                <div class="info">
	            		<div class="desc">Cientos de venezolanos hicieron largas filas en el consulado venezolano en Cúcuta esperando la autorización para retornar a su lugar de origen.</div>
	            		<div class="autor">Foto: Edinsson Figueroa</div>
	            	</div>
	            </div>
	            <div>
	                <img data-u="image" src="<?php print base_path(); ?>sites/default/themes/especiales/frontera/galerias/uno/04.jpg" alt="" />
	                <div class="info">
	            		<div class="desc">Durante varios días la gente se agolpó en la frontera esperando una oportunidad para poder cruzar.</div>
	            		<div class="autor">Foto: Juan Pablo Cohen</div>
	            	</div>
	            </div>
	            <div>
	                <img data-u="image" src="<?php print base_path(); ?>sites/default/themes/especiales/frontera/galerias/uno/05.jpg" alt="" />
	                <div class="info">
	            		<div class="desc">Autoridades custodiaron las vallas constantemente para impedir el paso de personas entre Colombia y Venezuela.</div>
	            		<div class="autor">Foto: Mario Caicedo</div>
	            	</div>
	            </div>
	            <div>
	                <img data-u="image" src="<?php print base_path(); ?>sites/default/themes/especiales/frontera/galerias/uno/06.jpg" alt="" />
	                <div class="info">
	            		<div class="desc">Miles de colombianos fueron deportados de Venezuela, lo que generó una crisis humanitaria que afectó directamente a Norte de Santander.</div>
	            		<div class="autor">Foto: Luis Alfredo Estévez</div>
	            	</div>
	            </div>
	            <div>
	                <img data-u="image" src="<?php print base_path(); ?>sites/default/themes/especiales/frontera/galerias/uno/07.jpg" alt="" />
	                <div class="info">
	            		<div class="desc">Las autoridades colombianas y venezolanas replantearon el paso de pacientes con medicamentos por los puentes Simón Bolívar y Francisco de Paula Santander.</div>
	            		<div class="autor">Foto: Luis Alfredo Estévez</div>
	            	</div>
	            </div>
	            <div>
	                <img data-u="image" src="<?php print base_path(); ?>sites/default/themes/especiales/frontera/galerias/uno/08.jpg" alt="" />
	                <div class="info">
	            		<div class="desc">El paso a estudiantes también fue permitido. Los niños empezaron a recibir las primeras atenciones de parte de las autoridades colombo-venezolanas y se amplió en dos horas el paso de personas.</div>
	            		<div class="autor">Foto: Rodrigo Sandoval</div>
	            	</div>
	            </div>
	            <div>
	                <img data-u="image" src="<?php print base_path(); ?>sites/default/themes/especiales/frontera/galerias/uno/09.jpg" alt="" />
	                <div class="info">
	            		<div class="desc">Encuentro de los obispos de Cúcuta y San Cristóbal, monseñor Víctor Manuel Ochoa y monseñor Mario del Valle Moronta en el puente internacional Simón Bolívar, donde reclamaron a los gobiernos de Colombia y Venezuela una pronta solución a la crisis.</div>
	            		<div class="autor">Foto: Mario Caicedo</div>
	            	</div>
	            </div>
	            <div>
	                <img data-u="image" src="<?php print base_path(); ?>sites/default/themes/especiales/frontera/galerias/uno/10.jpg" alt="" />
	                <div class="info">
	            		<div class="desc">Por decreto presidencial, la República Bolivariana de Venezuela cerró el 3 de diciembre de 2015, a las 6 de la tarde, el corredor humanitario que había sido habilitado después del cierre de frontera.</div>
	            		<div class="autor">Foto: Mario Caicedo</div>
	            	</div>
	            </div>
	            <div>
	                <img data-u="image" src="<?php print base_path(); ?>sites/default/themes/especiales/frontera/galerias/uno/11.jpg" alt="" />
	                <div class="info">
	            		<div class="desc">Paso masivo de venezolanos hacia Cúcuta en busca de productos de la canasta familiar.</div>
	            		<div class="autor">Foto: Juan Pablo Bayona</div>
	            	</div>
	            </div>
	            <div>
	                <img data-u="image" src="<?php print base_path(); ?>sites/default/themes/especiales/frontera/galerias/uno/20.jpg" alt="" />
	                <div class="info">
	            		<div class="desc">En la frontera hicieron presencia miembros de la Comisión Interamericana de Derechos Humanos (CIDH) para verificar las condiciones en que llegaron los repatriados.</div>
	            		<div class="autor">Foto: Juan Pablo Cohen</div>
	            	</div>
	            </div>
	            <div>
	                <img data-u="image" src="<?php print base_path(); ?>sites/default/themes/especiales/frontera/galerias/uno/13.jpg" alt="" />
	                <div class="info">
	            		<div class="desc">Esta imagen lograda en los días posteriores al cierre de frontera muestra las montañas de enseres al lado del río Táchira, traídas por los colombianos repatriados desde Venezuela.</div>
	            		<div class="autor">Foto: Juan Pablo Cohen</div>
	            	</div>
	            </div>
	            <div>
	                <img data-u="image" src="<?php print base_path(); ?>sites/default/themes/especiales/frontera/galerias/uno/14.jpg" alt="" />
	                <div class="info">
	            		<div class="desc">Autoridades colombianas y venezolanas custodiaron ambos lados de la frontera.</div>
	            		<div class="autor">Foto: Juan Pablo Cohen</div>
	            	</div>
	            </div>
	            <div>
	                <img data-u="image" src="<?php print base_path(); ?>sites/default/themes/especiales/frontera/galerias/uno/15.jpg" alt="" />
	                <div class="info">
	            		<div class="desc">El contrabando no cesó pese al cierre de frontera, esta imagen captada en La Parada lo demuestra.</div>
	            		<div class="autor">Foto: Juan Pablo Cohen</div>
	            	</div>
	            </div>
	            <div>
	                <img data-u="image" src="<?php print base_path(); ?>sites/default/themes/especiales/frontera/galerias/uno/16.jpg" alt="" />
	                <div class="info">
	            		<div class="desc">Tras el paso masivo de venezolanos con la apertura parcial de la frontera, decenas de buses colmaron su cupo con el traslado de los connacionales a Cúcuta.</div>
	            		<div class="autor">Foto: Juan Pablo Cohen</div>
	            	</div>
	            </div>
	            <div>
	                <img data-u="image" src="<?php print base_path(); ?>sites/default/themes/especiales/frontera/galerias/uno/17.jpg" alt="" />
	                <div class="info">
	            		<div class="desc">Miembros de la Defensa Civil monitorearon la apertura parcial del sábado 13 de agosto del 2016.</div>
	            		<div class="autor">Foto: Juan Pablo Cohen</div>
	            	</div>
	            </div>
	            <div>
	                <img data-u="image" src="<?php print base_path(); ?>sites/default/themes/especiales/frontera/galerias/uno/18.jpg" alt="" />
	                <div class="info">
	            		<div class="desc">Casi un año después del cierre, la alcabala de San Antonio volvió a ver el paso masivo de propios y turistas sin restricciones.</div>
	            		<div class="autor">Foto: Juan Pablo Cohen</div>
	            	</div>
	            </div>
	            <div>
	                <img data-u="image" src="<?php print base_path(); ?>sites/default/themes/especiales/frontera/galerias/uno/19.jpg" alt="" />
	                <div class="info">
	            		<div class="desc">Miembros de la Guardia Nacional Bolivariana (GNB) controlaron el paso de personas durante la apertura de la frontera.</div>
	            		<div class="autor">Foto: Juan Pablo Cohen</div>
	            	</div>
	            </div>
	        </div>
	        <!-- Arrow Left -->
	        <span u="arrowleft" class="jssora21l" style="top: 40%; left: 8px;"></span>
	        <!-- Arrow Right -->
	        <span u="arrowright" class="jssora21r" style="top: 40%; right: 8px;"></span>
	    </div>
        <!--FIN GALERIA 1-->

		<div class="content">
			<h2>Momentos inolvidables de frontera</h2>
		</div>
		<!--GALERIA 2-->
		<div id="galeria2" style="position: relative; margin: 0 auto;top: 0px; left: 0px; width: 1300px; height: 700px; overflow: hidden;">
        	<!-- Slides Container -->
	        <div data-u="slides" style="cursor: move; position: absolute; left: 0px; top: 0px; width: 1300px;height: 700px; overflow: hidden;">
	            <div>
	                <img data-u="image" src="<?php print base_path(); ?>sites/default/themes/especiales/frontera/galerias/dos/12.jpg" alt="" />
	                <div class="info">
	            		<div class="desc">Jornadas de vacunación en los albergues fueron motivo de dolor para unos y de aprendizaje para otros.</div>
	            		<div class="autor">Foto: Juan Pablo Cohen</div>
	            	</div>
	            </div>
	            <div>
	                <img data-u="image" src="<?php print base_path(); ?>sites/default/themes/especiales/frontera/galerias/dos/01.jpg" alt="" />
	                <div class="info">
	            		<div class="desc">Lenny Trinidad Mora, una teniente de las fuerzas militares venezolanas, recibió a su hija en el Puente Internacional Simón Bolívar, quince días después del cierre.</div>
	            		<div class="autor">Foto: Rodrigo Sandoval</div>
	            	</div>
	            </div>
	            <div>
	                <img data-u="image" src="<?php print base_path(); ?>sites/default/themes/especiales/frontera/galerias/dos/02.jpg" alt="" />
	                <div class="info">
	            		<div class="desc">Esta foto, que se volvió viral y se convirtió en el símbolo del cierre de la frontera refleja la inocencia de dos hermanas, separadas físicamente, pero unidas de corazón.</div>
	            		<div class="autor">Foto: Juan Pablo Cohen</div>
	            	</div>
	            </div>
	            <div>
	                <img data-u="image" src="<?php print base_path(); ?>sites/default/themes/especiales/frontera/galerias/dos/03.jpg" alt="" />
	                <div class="info">
	            		<div class="desc">Yanid Antonio Villa Arboleda, posa con el documento expedido por las autoridades venezolanas, y en el que se le reconoce como refugiado, frente a los pocos objetos que logró sacar de su vivienda y traer hasta La Parada.</div>
	            		<div class="autor">Foto: Edinsson Figueroa</div>
	            	</div>
	            </div>
	            <div>
	                <img data-u="image" src="<?php print base_path(); ?>sites/default/themes/especiales/frontera/galerias/dos/04.jpg" alt="" />
	                <div class="info">
	            		<div class="desc">Reencuentro de Brayan Rueda y Marcela Maldonado, con su pequeño hijo de un año de nacido en el puente internacional Simón Bolívar tras el cierre de la frontera entre Colombia y Venezuela.</div>
	            		<div class="autor">Foto: Jean Carlo Estupiñán</div>
	            	</div>
	            </div>
	            <div>
	            	<img data-u="image" src="<?php print base_path(); ?>sites/default/themes/especiales/frontera/galerias/dos/05.jpg" alt="" />
	            	<div class="info">
	            		<div class="desc">Este niño de apellidos Martínez Murillo es amante del rap y se encargó de devolver la alegria con su canto a las personas del albergue.</div>
	            		<div class="autor">Foto: Edinsson Figueroa</div>
	            	</div>
	            </div>
	            <div>
	                <img data-u="image" src="<?php print base_path(); ?>sites/default/themes/especiales/frontera/galerias/dos/06.jpg" alt="" />
	                <div class="info">
	            		<div class="desc">Duquesa, la perrita que se volvió famosa porque su dueño, un niño que fue deportado, decidió regresar a Venezuela por ella y no lo querían dejar pasar. Finalmente el reencuentro se dio. </div>
	            		<div class="autor">Foto: Juan Pablo Cohen</div>
	            	</div>
	            </div>
	            <div>
	                <img data-u="image" src="<?php print base_path(); ?>sites/default/themes/especiales/frontera/galerias/dos/07.jpg" alt="" />
	                <div class="info">
	            		<div class="desc">Los niños, los más afectados con el cierre pues aguantaron largas horas al sol, desolados y esperando su regreso.</div>
	            		<div class="autor">Foto: Juan Pablo Cohen</div>
	            	</div>
	            </div>
	            <div>
	                <img data-u="image" src="<?php print base_path(); ?>sites/default/themes/especiales/frontera/galerias/dos/08.jpg" alt="" />
	                <div class="info">
	            		<div class="desc">En esta foto se mezclan la frustración, la desesperación y el amor, pues esta mujer comparte lo que tiene para comer con sus mascotas, mientras llora al lado de lo que pudo sacar de Venezuela.</div>
	            		<div class="autor">Foto: Juan Pablo Cohen</div>
	            	</div>
	            </div>
	            <div>
	                <img data-u="image" src="<?php print base_path(); ?>sites/default/themes/especiales/frontera/galerias/dos/09.jpg" alt="" />
	                <div class="info">
	            		<div class="desc">En el albergue de Juan Frío los víveres se convirtieron en un lugar de juegos, para los más pequeños.</div>
	            		<div class="autor">Foto: Juan Pablo Cohen</div>
	            	</div>
	            </div>
	            <div>
	                <img data-u="image" src="<?php print base_path(); ?>sites/default/themes/especiales/frontera/galerias/dos/10.jpg" alt="" />
	                <div class="info">
	            		<div class="desc">Tras su visita a los albergues, Luis Almagro, secretario general de la OEA, abraza a dos deportados y juntos sonríen.</div>
	            		<div class="autor">Foto: Juan Pablo Cohen</div>
	            	</div>
	            </div>
	            <div>
	                <img data-u="image" src="<?php print base_path(); ?>sites/default/themes/especiales/frontera/galerias/dos/11.jpg" alt="" />
	                <div class="info">
	            		<div class="desc">La frialdad con la que este guardia venezolano revisa los papeles de una menor que le implora que le permita el paso fue motivo de rechazo por parte de la comunidad.</div>
	            		<div class="autor">Foto: Juan Pablo Cohen</div>
	            	</div>
	            </div>
	            <div>
	                <img data-u="image" src="<?php print base_path(); ?>sites/default/themes/especiales/frontera/galerias/dos/13.jpg" alt="" />
	                <div class="info">
	            		<div class="desc">A los niños no les importa el lugar donde tengan que comer, desde que esté rico, lo disfrutan sin mediar palabra.</div>
	            		<div class="autor">Foto: Juan Pablo Cohen</div>
	            	</div>
	            </div>
	            <div>
	                <img data-u="image" src="<?php print base_path(); ?>sites/default/themes/especiales/frontera/galerias/dos/14.jpg" alt="" />
	                <div class="info">
	            		<div class="desc">La alimentación fue motivo de sonrisas para estos pequeños, que vivieron de cerca el drama del cierre fronterizo.</div>
	            		<div class="autor">Foto: Juan Pablo Cohen</div>
	            	</div>
	            </div>
	            <div>
	                <img data-u="image" src="<?php print base_path(); ?>sites/default/themes/especiales/frontera/galerias/dos/15.jpg" alt="" />
	                <div class="info">
	            		<div class="desc">Visitar los supermercados en Cúcuta llenó de alegria a algunos y de esperanza a otros, ante la escasez en Venezuela.</div>
	            		<div class="autor">Foto: Juan Pablo Cohen</div>
	            	</div>
	            </div>
	            <div>
	                <img data-u="image" src="<?php print base_path(); ?>sites/default/themes/especiales/frontera/galerias/dos/16.jpg" alt="" />
	                <div class="info">
	            		<div class="desc">Visitar los supermercados en Cúcuta llenó de alegria a algunos y de esperanza a otros, ante la escasez en Venezuela.</div>
	            		<div class="autor">Foto: Juan Pablo Cohen</div>
	            	</div>
	            </div>
	            <div>
	                <img data-u="image" src="<?php print base_path(); ?>sites/default/themes/especiales/frontera/galerias/dos/17.jpg" alt="" />
	                <div class="info">
	            		<div class="desc">La noche del cierre dos deportados aguardaban pacientemente y mirando por una de las ventanas de Migración la frontera con la esperanza de que la situación mejorara pronto, como en otras ocasiones.</div>
	            		<div class="autor">Foto: Juan Pablo Cohen</div>
	            	</div>
	            </div>
	            <div>
	                <img data-u="image" src="<?php print base_path(); ?>sites/default/themes/especiales/frontera/galerias/dos/18.jpg" alt="" />
	                <div class="info">
	            		<div class="desc">Después de varios intentos fallidos para cruzar la frontera, estas monjitas lograron su cometido.</div>
	            		<div class="autor">Foto: Juan Pablo Cohen</div>
	            	</div>
	            </div>
	            <div>
	                <img data-u="image" src="<?php print base_path(); ?>sites/default/themes/especiales/frontera/galerias/dos/19.jpg" alt="" />
	                <div class="info">
	            		<div class="desc">Los resguardos improvisados días después del cierre fueron protagonistas en la travesía fronteriza de colombianos, que con sus cosas al hombro trataban de salvar lo conseguido en varios años.</div>
	            		<div class="autor">Foto: Juan Pablo Cohen</div>
	            	</div>
	            </div>
	            <div>
	                <img data-u="image" src="<?php print base_path(); ?>sites/default/themes/especiales/frontera/galerias/dos/20.jpg" alt="" />
	                <div class="info">
	            		<div class="desc">La desesperación de los colombianos días despues del cierre se reflejó en las trochas cuando intentaron salvar lo poco que tenían.</div>
	            		<div class="autor">Foto: Juan Pablo Cohen</div>
	            	</div>
	            </div>
	            <div>
	                <img data-u="image" src="<?php print base_path(); ?>sites/default/themes/especiales/frontera/galerias/dos/21.jpg" alt="" />
	                <div class="info">
	            		<div class="desc">Niños, jóvenes y adultos protegieron sus pertenencias pese a las inclemencias del clima.</div>
	            		<div class="autor">Foto: Juan Pablo Cohen</div>
	            	</div>
	            </div>
	            <div>
	                <img data-u="image" src="<?php print base_path(); ?>sites/default/themes/especiales/frontera/galerias/dos/22.jpg" alt="" />
	                <div class="info">
	            		<div class="desc">Con sus cosas al hombro, los repatriados trataban de salvar lo conseguido en varios años de vida en Venezuela.</div>
	            		<div class="autor">Foto: Juan Pablo Cohen</div>
	            	</div>
	            </div>
	            <div>
	                <img data-u="image" src="<?php print base_path(); ?>sites/default/themes/especiales/frontera/galerias/dos/23.jpg" alt="" />
	                <div class="info">
	            		<div class="desc">Francinet Cuervo Echeverry, un anciano de 101 años de edad que fue deportado desde Venezuela, luego, al ver la situación en Colombia, volvió voluntariamente a cruzar la frontera.</div>
	            		<div class="autor">Foto: Edinson Figueroa</div>
	            	</div>
	            </div>
	            <div>
	                <img data-u="image" src="<?php print base_path(); ?>sites/default/themes/especiales/frontera/galerias/dos/24.jpg" alt="" />
	                <div class="info">
	            		<div class="desc">Iván Enrique Bustos Sosa, el campesino que huyó de Venezuela y que intentó conseguir refugio con 11 vacas de su propiedad en Colombia.</div>
	            		<div class="autor">Foto: Mario Caicedo</div>
	            	</div>
	            </div>
	            <div>
	                <img data-u="image" src="<?php print base_path(); ?>sites/default/themes/especiales/frontera/galerias/dos/25.jpg" alt="" />
	                <div class="info">
	            		<div class="desc">La reapertura permitió a uno de nuestros fotografos registrar nuevamente la mirada de Bolivar, en este mural de San Antonio del Táchira.</div>
	            		<div class="autor">Foto: Juan Pablo Cohen</div>
	            	</div>
	            </div>
	        </div>
	        <!-- Arrow Left -->
	        <span u="arrowleft" class="jssora21l" style="top: 40%; left: 8px;"></span>
	        <!-- Arrow Right -->
	        <span u="arrowright" class="jssora21r" style="top: 40%; right: 8px;"></span>
	    </div>
        <!--FIN GALERIA 2-->
	</section>


	<section id="grafico">
		<div class="content">
			<h2>Los sectores económicos y el cierre de frontera</h2>
			<img src="<?php print base_path(); ?>sites/default/themes/especiales/frontera/grafico/tabla1000px.png">
		</div>
	</section>


	<!--VIDEO-->
	<section id="video">
		
		<iframe id="player" width="100%" height="100%" src="//www.youtube.com/embed/Qr85LclTOfM?modestbranding=1&rel=0&autoplay=1&loop=1&playlist=Qr85LclTOfM&autohide=1&showinfo=0&controls=0" frameborder="0" allowfullscreen></iframe>
		
		<!--
		<object width="847" height="499.7">
		    <param name="movie" value="http://www.youtube.com/embed/Qr85LclTOfM">
		    <param name="allowFullScreen" value="true">
		    <param name="allowscriptaccess" value="always">
		    <embed src="http://www.youtube.com/v/Qr85LclTOfM?version=2&amp;autoplay=1&amp;loop=1&amp;controls=0;" type=
		    "application/x-shockwave-flash" width="847" height="499.7" allowscriptaccess="always"
		    allowfullscreen="true">
	  	</object>
		-->  	
	</section>



	<section id="frases">
		<section class="caja">
			<section class="bloque">
				<div class="frase">
					<h2>“He dado instrucciones de cerrar la frontera con Colombia en San Antonio del Táchira y en Ureña de manera inmediata por 72 horas”</h2>
					<div class="info">
						<span class="autor">Nicolás Maduro</span>
						<span class="fecha">19 de agosto de 2015</span>
					</div>
				</div>
				<div class="frase">
					<h2>“No nos vamos a dejar intimidar y seguimos en esta franca batalla contra el contrabando, la guerra económica, donde nos quieren meter las bandas criminales y los paramilitares colombianos”</h2>
					<div class="info">
						<span class="autor">Almirante Remigio Ceballos Ichaso</span>
						<span class="fecha">20 de agosto de 2015</span>
					</div>
				</div>
				<div class="frase">
					<h2>“Quiero anunciar que, como parte de las medidas para restablecer el orden, la paz, la tranquilidad, la justicia y una frontera humana, he decidido activar un Estado de Excepción en el Táchira”</h2>
					<div class="info">
						<span class="autor">Nicolás Maduro</span>
						<span class="fecha">21 de agosto de 2015</span>
					</div>
				</div>
				<div class="frase">
					<h2>“Cerrar la frontera trae perjuicios de lado y lado. Hay mucha gente inocente, sobre todo niños que viven del otro lado de la frontera y se quedan sin colegio. Voy a ver si hablo con el presidente Maduro, a ver si podemos arreglar esta situación lo más rápido posible”</h2>
					<div class="info">
						<span class="autor">Juan Manuel Santos</span>
						<span class="fecha">22 de agosto de 2015</span>
					</div>
				</div>
				<div class="frase">
					<h2>“Vamos a dialogar con los deportados porque lo prioritario es atenderlos y exigir trato digno para ellos”</h2>
					<div class="info">
						<span class="autor">Juan Fernando Cristo</span>
						<span class="fecha">23 de agosto de 2015</span>
					</div>
				</div>
				<div class="frase">
					<h2>“Quiero reiterar que el camino del diálogo y la diplomacia es el más responsable y recomendable para aliviar la situación de nuestros compatriotas. No nos falta ni nos faltará firmeza para defender a todos nuestros connacionales”</h2>
					<div class="info">
						<span class="autor">Juan Manuel Santos</span>
						<span class="fecha">24 de agosto de 2015</span>
					</div>
				</div>
				<div class="frase">
					<h2>“En lo que es una prueba de política de xenofobia se marcan las casas donde habitan familias colombianas. ¡Indignante!"</h2>
					<div class="info">
						<span class="autor">Alejandro Ordóñez</span>
						<span class="fecha">24 de agosto de 2015</span>
					</div>
				</div>
				<div class="frase">
					<h2>“Yo no soy anticolombiano, soy antiparaco”</h2>
					<div class="info">
						<span class="autor">Nicolás Maduro</span>
						<span class="fecha">24 de agosto de 2015</span>
					</div>
				</div>
				<div class="frase">
					<h2>“La dictadura castro-chavista de Venezuela está dedicada a infundir odio contra el pueblo colombiano, llamando a nuestras mujeres prostitutas y a nuestros compatriotas paramilitares de Uribe”</h2>
					<div class="info">
						<span class="autor">Álvaro Uribe</span>
						<span class="fecha">24 de agosto de 2015</span>
					</div>
				</div>
				<div class="frase">
					<h2>“A Nicolás Maduro los están convirtiendo en el mayor antibolivariano de Latinoamérica…eso es lo que están haciendo Diosdado Cabello y sus asesores”</h2>
					<div class="info">
						<span class="autor">Donamaris Ramírez</span>
						<span class="fecha">24 de agosto de 2015</span>
					</div>
				</div>
				<div class="frase">
					<h2>“Bienvenidos a su patria, bienvenidos a Colombia, aquí los queremos a todos y los vamos a ayudar a que salgan adelante”</h2>
					<div class="info">
						<span class="autor">Juan Manuel Santos</span>
						<span class="fecha">26 de agosto de 2015</span>
					</div>
				</div>
				<div class="frase">
					<h2>“Hay toda una campaña comunicacional en nuestra contra”</h2>
					<div class="info">
						<span class="autor">José Gregorio Vielma Mora</span>
						<span class="fecha">28 de agosto de 2015</span>
					</div>
				</div>
				<div class="frase">
					<h2>“Hasta tanto no se acabe el ataque a la moneda venezolana no abriré la frontera hacia Colombia”</h2>
					<div class="info">
						<span class="autor">Nicolás Maduro</span>
						<span class="fecha">28 de agosto de 2015</span>
					</div>
				</div>
				<div class="frase">
					<h2>“Tenemos más de 30 años aguantando que desde Cúcuta se lleven los alimentos, la gasolina y la paz de los venezolanos”</h2>
					<div class="info">
						<span class="autor">Diosdado Cabello</span>
						<span class="fecha">28 de agosto de 2015</span>
					</div>
				</div>
				<div class="frase">
					<h2>“No busquen una solución, sino lo que siempre ha significado esta frontera: la reafirmación de un pueblo con dos apellidos”</h2>
					<div class="info">
						<span class="autor">Víctor Manuel Ochoa</span>
						<span class="fecha">28 de agosto de 2015</span>
					</div>
				</div>
				<div class="frase">
					<h2>“Hitler empezó acusando a los judíos de ser la fuente de todos los males. Venezuela acusa a los colombianos de ser la fuente de todos los males”</h2>
					<div class="info">
						<span class="autor">Álvaro Uribe</span>
						<span class="fecha">29 de agosto de 2015</span>
					</div>
				</div>
				<div class="frase">
					<h2>“A los colombianos no los van a tratar como si no tuvieran un país que los defienda”</h2>
					<div class="info">
						<span class="autor">María Ángela Holguín</span>
						<span class="fecha">3 de septiembre de 2015</span>
					</div>
				</div>
				<div class="frase">
					<h2>“Queremos interponer nuestros buenos oficios para que entre hermanos, entre naciones hermanas, dialogando se arregle cualquier problema”</h2>
					<div class="info">
						<span class="autor">Rafael Correa</span>
						<span class="fecha">5 de septiembre de 2015</span>
					</div>
				</div>
				<div class="frase">
					<h2>“Pedimos a Colombia la reubicación familiar y a Venezuela la más pronta solución a este problema”</h2>
					<div class="info">
						<span class="autor">Luis Almagro</span>
						<span class="fecha">5 de septiembre de 2015</span>
					</div>
				</div>
				<div class="frase">
					<h2>“Vamos a tener una economía independiente, una economía propia de la cual podamos subsistir a largo plazo”</h2>
					<div class="info">
						<span class="autor">Édgar Díaz</span>
						<span class="fecha">6 de septiembre de 2015</span>
					</div>
				</div>
				<div class="frase">
					<h2>“Desde el primer día de la crisis quise hablar con Maduro y no fue posible”</h2>
					<div class="info">
						<span class="autor">Juan Manuel Santos</span>
						<span class="fecha">7 de septiembre de 2015</span>
					</div>
				</div>
				<div class="frase">
					<h2>“Para nosotros es importante que las organizaciones de derechos humanos conozcan la magnitud de esta tragedia”</h2>
					<div class="info">
						<span class="autor">María Ángela Holguín</span>
						<span class="fecha">7 de septiembre de 2015</span>
					</div>
				</div>
				<div class="frase">
					<h2>“Hay que trabajar para abrir la frontera, no abrirla para después trabajar”</h2>
					<div class="info">
						<span class="autor">María Ángela Holguín</span>
						<span class="fecha">22 de septiembre de 2015</span>
					</div>
				</div>
				<div class="frase">
					<h2>“Pido que se investiguen a las autoridades venezolanas por crímenes de lesa humanidad y violaciones de derechos humanos”</h2>
					<div class="info">
						<span class="autor">Donamaris Ramírez</span>
						<span class="fecha">6 de octubre de 2015</span>
					</div>
				</div>
				<div class="frase">
					<h2>“Que se mantenga cerrada hasta que se termine de restituir toda la vida social, económica y la seguridad de cada palmo”</h2>
					<div class="info">
						<span class="autor">Nicolás Maduro</span>
						<span class="fecha">15 de enero de 2016</span>
					</div>
				</div>
				<div class="frase">
					<h2>“Antes de que se cerrara la frontera los venezolanos les exigían a nuestros ciudadanos pasaporte y es lo mismo que ahora en nuestro país exigimos para verificar su condición migratoria”</h2>
					<div class="info">
						<span class="autor">Christian Krüger Sarmiento</span>
						<span class="fecha">4 de marzo de 2016</span>
					</div>
				</div>
				<div class="frase">
					<h2>“Venezuela sigue luchando y quien mantiene cerrada la frontera, es Colombia”</h2>
					<div class="info">
						<span class="autor">José Gregorio Vielma Mora</span>
						<span class="fecha">6 de mayo de 2016</span>
					</div>
				</div>
				<div class="frase">
					<h2>“Somos pueblos hermanos con profundas raíces y relaciones. Ya está prácticamente listo el tercer puente internacional”</h2>
					<div class="info">
						<span class="autor">José Gregorio Vielma Mora</span>
						<span class="fecha">10 de mayo de 2016</span>
					</div>
				</div>
				<div class="frase">
					<h2>“El tiempo (del cierre) ya venció y debemos avanzar con un acuerdo binacional que dé como resultado la construcción de mejores condiciones para nuestros connacionales”</h2>
					<div class="info">
						<span class="autor">José Gregorio Vielma Mora</span>
						<span class="fecha">29  de junio de 2016</span>
					</div>
				</div>
				<div class="frase">
					<h2>“solo falta la reunión entre los presidentes de Colombia, Juan Manuel Santos,  y Nicolás Maduro, de Venezuela, para reabrir la frontera”</h2>
					<div class="info">
						<span class="autor">José Gregorio Vielma Mora</span>
						<span class="fecha">1 de julio 2016</span>
					</div>
				</div>
				<div class="frase">
					<h2>“Esperamos un trabajo en equipo para que se reactiven las relaciones comerciales”</h2>
					<div class="info">
						<span class="autor">William Villamizar</span>
						<span class="fecha">1 de julio 2016</span>
					</div>
				</div>
				<div class="frase">
					<h2>“Decidimos cruzar la frontera porque no tenemos alimentos y nuestros hijos están pasando hambre, hay mucha necesidad”</h2>
					<div class="info">
						<span class="autor">Venezolano</span>
						<span class="fecha">5 de julio de 2016</span>
					</div>
				</div>
				<div class="frase">
					<h2>“Si abrimos la frontera, y la vamos a abrir, tendremos que reforzar esas razones por las que no se ha abierto”</h2>
					<div class="info">
						<span class="autor">Juan Manuel Santos </span>
						<span class="fecha">6 de julio de 2016</span>
					</div>
				</div>
				<div class="frase">
					<h2>“El cierre de la frontera en materia de criminalidad no ha cambiado mucho en Cúcuta”</h2>
					<div class="info">
						<span class="autor">Jorge Fernando Perdomo</span>
						<span class="fecha">7 de julio de 2016</span>
					</div>
				</div>
				<div class="frase">
					<h2>“Les decimos que sí  les gusta tanto Colombia quédense a vivir allá, para que paguen salud y servicios públicos a altos costos”</h2>
					<div class="info">
						<span class="autor">José Gregorio Vielma Mora</span>
						<span class="fecha">8 de julio de 2016</span>
					</div>
				</div>
				<div class="frase">
					<h2>“Nos están matando de hambre….no queremos pasar necesidades”</h2>
					<div class="info">
						<span class="autor">Bryan Virgilio Muñoz</span>
						<span class="fecha">10 de julio de 2016</span>
					</div>
				</div>
				<div class="frase">
					<h2>“Más que compra, mucha gente fue a visitar a sus amigos, a divertirse en Colombia y en Venezuela…  aquí no hay hambre”</h2>
					<div class="info">
						<span class="autor">José Gregorio Vielma Mora</span>
						<span class="fecha">11 de julio de 2016</span>
					</div>
				</div>
				<div class="frase">
					<h2>“Nuestra posición sigue siendo colaborarle al pueblo venezolano”</h2>
					<div class="info">
						<span class="autor">Víctor Bautista</span>
						<span class="fecha">16 de julio de 2016</span>
					</div>
				</div>
				<div class="frase">
					<h2>“Régimen (de Nicolás Maduro) y quienes lo sostienen ignoran mar humano venezolanos que cruza a Colombia a buscar comida”</h2>
					<div class="info">
						<span class="autor">Henry Ramos Allup</span>
						<span class="fecha">17 de julio de 2016</span>
					</div>
				</div>
				<div class="frase">
					<h2>“Reconocemos que tenemos un problema alimentario en Venezuela”, José Gregorio Vielma Mora, gobernador del Táchira.
					“Reiteramos la necesidad de abrir la frontera, porque esta es una situación bastante tensionante y puede pasar algo en cualquier momento”
					</h2>
					<div class="info">
						<span class="autor">William Villamizar</span>
						<span class="fecha">18 de julio de 2016</span>
					</div>
				</div>
				<div class="frase">
					<h2>“Colombia es un país serio y ve esto como una ‘mamadera de gallo’, porque el gobernador (Vielma Mora) un día va para adelante y otro día para atrás con respecto a la reapertura de la frontera”</h2>
					<div class="info">
						<span class="autor">Alejandro ‘Tato’ García</span>
						<span class="fecha">18 de julio de 2016</span>
					</div>
				</div>
				<div class="frase">
					<h2>"Muy pronto vamos a abrir frontera, con el gobernador de Norte de Santander coincidimos en aplicar mecanismos de control en comercio binacional, además de sistematizar el sistema migratorio”</h2>
					<div class="info">
						<span class="autor">José Gregorio Vielma Mora</span>
						<span class="fecha">27 de julio de 2016</span>
					</div>
				</div>
				<div class="btn-izq"></div>
				<div class="btn-der"></div>
				<div class="cuadro-oculto"></div>
			</section>
		</section>
	</section>

	<footer id="footer">
		<section class="bloque1">
			<ul class="derechos">
				<li class="logo"><a href="http://www.laopinion.com.co/"></a></li>
				<li>-  Todos los Derechos Reservados.</li>
			</ul>
			<ul class="redes-sociales">
				<li class="f"><a href="https://www.facebook.com/laopinioncucuta"></a></li>
				<li class="t"><a href="https://twitter.com/laopinioncucuta"></a></li>
				<li class="i"><a href="https://www.instagram.com/laopinioncucuta/"></a></li>
				<li class="y"><a href="https://www.youtube.com/user/WEBLAOPINION"></a></li>
				<li class="creditos"></li>
			</ul>
		</section>
		<section class="bloque2">
			<ul>
				<li>Coordinación
					<ul>
						<li><a href="https://twitter.com/estcol" target="_blank">- Estefanía Colmenares</a></li>						
						<li><a href="https://twitter.com/karinajudex" target="_blank">- Karina Judex</a></li>
						<!-- <li><a href="https://twitter.com/" target="_blank">- Nombre Apellido</a></li> -->
					</ul>
				</li>
				<li>Fotógrafos
					<ul>
						<li><a href="https://twitter.com/juanpcohen" target="_blank">- Juan Pablo Cohen</a></li>
						<li><a href="https://twitter.com/jpbayonafoto" target="_blank">- Juan Pablo Bayona</a></li>
						<li><a href="https://twitter.com/rodericksac">- Rodrigo Sandoval</a></li>
					</ul>
				</li>
			</ul>
			<ul>
				<li>Reporteros
					<ul>
						<li><a href="https://twitter.com/helenasanchezt" target="_blank">- Helena Sanchez</a></li>
						<li><a href="https://twitter.com/jennifer_rincon" target="_blank">- Jennifer Rincon</a></li>
						<li><a href="https://twitter.com/jhonjacome" target="_blank">- Jhon Jacome</a></li>
						<li><a href="https://twitter.com/Eilyncardozo" target="_blank">- Eilyn Cardozo</a></li>
						<li><a href="https://twitter.com/najivy">- Najivy Benitez</a></li>
						<li><a href="https://twitter.com/leo_reportero">- Leonardo Oliveros</a></li>
					</ul>
				</li>
			</ul>
			<ul class="last">
				<li>Desarrollo Web
					<ul>
						<li><a href="https://twitter.com/mirandajhonatan" target="_blank">- Jonathan Miranda</a></li>
						<li><a href="https://twitter.com/jandrey15" target="_blank">- John Serrano</a></li>
					</ul>
				</li>
				<li>Diseño
					<ul>
						<li><a href="https://twitter.com/marioinsig" target="_blank">- Roberto Insignares</a></li>
					</ul>
				</li>
			</ul>
			<span>La Opinión - 2016</span>
		</section>
	</footer>
</body>
</html>