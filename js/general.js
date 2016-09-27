$(document).ready(function(){
      
   $( "#search .informacion .opciones .fechas .form-item-from-date label.edit-from-date" ).replaceWith( "Desde" );
   $( "#search .informacion .opciones .fechas .form-item-to-date label.edit-to-date" ).replaceWith( "Hasta" );
                  
   $(window).scroll(function() {
   var scrolled = $(window).scrollTop();           
    $('.slide').css({'background-position' : '50% '+ (-(scrolled / 5)) + 'px'});
    $('.buena_mesa').css({'background-position' : '50% '+ (-(scrolled / 5)) + 'px'});
    $('.cronograma').css({'background-position' : '50% '+ (-(scrolled / 30)) + 'px'});
    $('.seccion_bm').css({'background-position' : '50% '+ (-(scrolled / 5)) + 'px'});
    $('.seccion_pe').css({'background-position' : '50% '+ (-(scrolled / 5)) + 'px'});
    $('.seccion_ln').css({'background-position' : '50% '+ (-(scrolled / 5)) + 'px'});
    $('.seccion_re').css({'background-position' : '50% '+ (-(scrolled / 5)) + 'px'});
    $('.seccion_di').css({'background-position' : '50% '+ (-(scrolled / 5)) + 'px'});
    $('.seccion_cm').css({'background-position' : '50% '+ (-(scrolled / 5)) + 'px'});
    $('#establecimiento .foto img').css({'background-position' : '50% '+ (-(scrolled / 5)) + 'px'});
    $('#personaje .branding img').css({'background-position' : '50% '+ (-(scrolled / 5)) + 'px'});
    
    if(scrolled >= "50"){
      $("#logo_home").css({opacity:"0"});
      $("#seccion .head").css({opacity:"0"});
    }else{
      $("#logo_home").css({opacity:"1"});
      $("#seccion .head").css({opacity:"1"});
    }


    //COMPARTIR 
    window_y = $(window).scrollTop(); // VALOR QUE SE HA MOVIDO DEL SCROLL
    scroll_critical = parseInt($(".compartir").height()); // VALOR DE TU DIV
      if (window_y > scroll_critical) { // SI EL SCROLL HA SUPERADO EL ALTO DE TU DIV
        $(".compartir").css({display:"block"});
        $(".compartir .fb").css({transition:"all 0.2s ease"});
        $(".compartir .tw").css({transition:"all 0.4s ease"});
        $(".compartir .go").css({transition:"all 0.6s ease"});
        $(".compartir .pin").css({transition:"all 0.8s ease"});
        $(".compartir .wp").css({transition:"all 1s ease"});
        $(".compartir .fb").css({transform: "translate(30px, 0px)"});
        $(".compartir .tw").css({transform: "translate(30px, 0px)"});
        $(".compartir .go").css({transform: "translate(30px, 0px)"});
        $(".compartir .pin").css({transform: "translate(30px, 0px)"});
        $(".compartir .wp").css({transform: "translate(30px, 0px)"});
      } else {
        /*$(".compartir").css({display:"none"});*/
        $(".compartir .fb").css({transition:"all 1s ease"});
        $(".compartir .tw").css({transition:"all 0.8s ease"});
        $(".compartir .go").css({transition:"all 0.6s ease"});
        $(".compartir .pin").css({transition:"all 0.4s ease"});
        $(".compartir .wp").css({transition:"all 0.2s ease"});
        $(".compartir .fb").css({transform: "translate(-30px, 0px)"});
        $(".compartir .tw").css({transform: "translate(-30px, 0px)"});
        $(".compartir .go").css({transform: "translate(-30px, 0px)"});
        $(".compartir .pin").css({transform: "translate(-30px, 0px)"});
        $(".compartir .wp").css({transform: "translate(-30px, 0px)"});
      }
    //FIN COMPARTIR
   }); // window scroll Ends


//DESTACADA
    var tipo = $(".view-principal.view-display-id-block .nota .tipo").html();
    var seccion = $(".view-principal.view-display-id-block .views-row-1 .nota .seccion .color").html();
    if(tipo == "Artículo"){
      $(".view-principal.view-display-id-block .nota .icon_galeria").css({display:"none"}); 
      $(".view-principal.view-display-id-block .nota .icon_video").css({display:"none"});
      $(".view-principal.view-display-id-block .nota .galeria").css({display:"none"}); 
      $(".view-principal.view-display-id-block .nota .video").css({display:"none"}); 
      $(".view-principal.view-display-id-block .nota .foto").css({display:"block"});
        }else
    if(tipo == "Galería de imagenes"){
      $(".view-principal.view-display-id-block .nota .icon_galeria").css({display:"block"});
      $(".view-principal.view-display-id-block .nota .icon_video").css({display:"none"});
      $(".view-principal.view-display-id-block .nota .galeria").css({display:"block"});
      $(".view-principal.view-display-id-block .nota .foto").css({display:"none"});
        }else 
    if(tipo == "Video"){
      $(".view-principal.view-display-id-block .nota .video").css({display:"block"});
      $(".view-principal.view-display-id-block .nota .icon_video").css({display:"block"});
      $(".view-principal.view-display-id-block .nota .icon_galeria").css({display:"none"});
      $(".view-principal.view-display-id-block .nota .galeria").css({display:"none"});
      $(".view-principal.view-display-id-block .nota .foto").css({display:"none"});
        }else 
    if(tipo == "Podcast"){
      $(".view-principal.view-display-id-block .nota .podcast").css({display:"block"});
      $(".view-principal.view-display-id-block .nota .icon_podcast").css({display:"block"});
      $(".view-principal.view-display-id-block .nota .video").css({display:"none"});
      $(".view-principal.view-display-id-block .nota .icon_video").css({display:"none"});
      $(".view-principal.view-display-id-block .nota .icon_galeria").css({display:"none"});
      $(".view-principal.view-display-id-block .nota .galeria").css({display:"none"});
      $(".view-principal.view-display-id-block .nota .foto").css({display:"none"});
        }else 
    if(tipo == "Infografía"){
      $(".view-principal.view-display-id-block .nota .video").css({display:"none"});
      $(".view-principal.view-display-id-block .nota .icon_video").css({display:"none"});
      $(".view-principal.view-display-id-block .nota .icon_galeria").css({display:"none"});
      $(".view-principal.view-display-id-block .nota .galeria").css({display:"none"});
      $(".view-principal.view-display-id-block .nota .icon_podcast").css({display:"none"});
      $(".view-principal.view-display-id-block .nota .podcast").css({display:"none"});
      $(".view-principal.view-display-id-block .nota .foto").css({display:"block"});
    }
  //COLOR SECCION
    if(seccion == "Cúcuta" || seccion == "Memorias" || seccion == "Por los barrios"){
      $(".view-principal.view-display-id-block .nota .seccion .color").css({background:"#BA2025"}); 
    }else
    if(seccion == "Región" || seccion == "Pamplona" || seccion == "Ocaña"){
      $(".view-principal.view-display-id-block .nota .seccion .color").css({background:"#F9D821"}); 
    }else
    if(seccion == "Judicial"){
      $(".view-principal.view-display-id-block .nota .seccion .color").css({background:"#F87917"}); 
    }else
    if(seccion == "Frontera"){
      $(".view-principal.view-display-id-block .nota .seccion .color").css({background:"#89C33F"}); 
    }else
    if(seccion == "Actualidad" || seccion == "Economía" || seccion == "Política" || seccion == "Colombia" || seccion == "Venezuela" || seccion == "Mundo"){
      $(".view-principal.view-display-id-block .nota .seccion .color").css({background:"#3D9E04"}); 
    }else
    if(seccion == "Opinión" || seccion == "Editorial" || seccion == "Columnistas" || seccion == "Caricatura"){
      $(".view-principal.view-display-id-block .nota .seccion .color").css({background:"#BFD63E"}); 
    }else
    if(seccion == "Deportes" || seccion == "Cúcuta deportivo" || seccion == "Fútbol" || seccion == "+ Deportes" || seccion == "Copa américa 2016" || seccion == "Copa américa 2016"){
      $(".view-principal.view-display-id-block .nota .seccion .color").css({background:"#3FA6F2"}); 
    }else
    if(seccion == "Entretenimiento" || seccion == "Actividad Social" || seccion == "Tecnología" || seccion == "Cultura" || seccion == "Tendencias" || seccion == "Viral" || seccion == "Vida y salud" || seccion == "Zona verde"){
      $(".view-principal.view-display-id-block .nota .seccion .color").css({background:"#8B7AB5"}); 
    }else
    if(seccion == "Participación" || seccion == "Así opinan" || seccion == "Reportero ciudadano"){
      $(".view-principal.view-display-id-block .nota .seccion .color").css({background:"#C60B77"}); 
    }
  //FIN COLOR SECCION
//FIN DESTACADA

//LISTA
      $(".view-principal.view-display-id-block_1 .views-row").each(function(){
      var ContentTypeL = $(this).find(".tipo").html();
      if(ContentTypeL == "Galería de imagenes"){
        $(this).find(".icon_galeria").css("display","block");
        $(this).find(".galeria").css("display","block");
        $(this).find(".icon_video").css("display","none");
        $(this).find(".video").css("display","none");
        $(this).find(".podcast").css("display","none");
        $(this).find(".icon_podcast").css("display","none");
        $(this).find(".foto").css("display","none");
      }else if(ContentTypeL == "Video"){
        $(this).find(".icon_video").css("display","block");
        $(this).find(".video").css("display","block");
        $(this).find(".icon_galeria").css("display","none");
        $(this).find(".galeria").css("display","none");
        $(this).find(".podcast").css("display","none");
        $(this).find(".icon_podcast").css("display","none");
        $(this).find(".foto").css("display","none");
      }else if(ContentTypeL == "Podcast"){
        $(this).find(".podcast").css("display","block");
        $(this).find(".icon_podcast").css("display","block");
        $(this).find(".icon_video").css("display","none");
        $(this).find(".video").css("display","none");
        $(this).find(".icon_galeria").css("display","none");
        $(this).find(".galeria").css("display","none");
        $(this).find(".foto").css("display","none");
      }else if(ContentTypeL == "Artículo"){
        $(this).find(".icon_video").css("display","none");
        $(this).find(".video").css("display","none");
        $(this).find(".icon_galeria").css("display","none");
        $(this).find(".galeria").css("display","none");
        $(this).find(".icon_podcast").css("display","none");
        $(this).find(".podcast").css("display","none");
        $(this).find(".foto").css("display","block");
      }else if(ContentTypeL == "Infografía"){
        $(this).find(".icon_video").css("display","none");
        $(this).find(".video").css("display","none");
        $(this).find(".icon_galeria").css("display","none");
        $(this).find(".galeria").css("display","none");
        $(this).find(".icon_podcast").css("display","none");
        $(this).find(".podcast").css("display","none");
        $(this).find(".foto").css("display","block");
      }
    });
    //COLOR
    $(".view-principal.view-display-id-block_1 .views-row").each(function(){
      var seccionL = $(this).find(".nota .seccion .color").html();
      if(seccionL == "Cúcuta" || seccionL == "Memorias" || seccionL == "Por los barrios"){
        $(this).find(".nota .seccion .color").css({background:"#BA2025"}); 
      }else
      if(seccionL == "Región" || seccionL == "Pamplona" || seccionL == "Ocaña"){
        $(this).find(".nota .seccion .color").css({background:"#F9D821"}); 
      }else
      if(seccionL == "Judicial"){
        $(this).find(".nota .seccion .color").css({background:"#F87917"}); 
      }else
      if(seccionL == "Frontera"){
        $(this).find(".nota .seccion .color").css({background:"#89C33F"}); 
      }else
      if(seccionL == "Actualidad" || seccionL == "Economía" || seccionL == "Política" || seccionL == "Colombia" || seccionL == "Venezuela" || seccionL == "Mundo"){
        $(this).find(".nota .seccion .color").css({background:"#3D9E04"}); 
      }else
      if(seccionL == "Opinión" || seccionL == "Editorial" || seccionL == "Columnistas" || seccionL == "Caricaturas"){
        $(this).find(".nota .seccion .color").css({background:"#BFD63E"}); 
      }else
      if(seccionL == "Deportes" || seccionL == "Cúcuta Deportivo" || seccionL == "Fútbol" || seccionL == "+ Deportes" || seccionL == "Copa América 2015" || seccionL == "Copa América 2016"){
        $(this).find(".nota .seccion .color").css({background:"#3FA6F2"}); 
      }else
      if(seccionL == "Entretenimiento" || seccionL == "Actividad social" || seccionL == "Tecnología" || seccionL == "Cultura" || seccionL == "Cultura" || seccionL == "Tendencias" || seccionL == "Viral" || seccionL == "Vida y salud" || seccion == "Zona verde"){
        $(this).find(".nota .seccion .color").css({background:"#8B7AB5"}); 
      }else
      if(seccionL == "Participación" || seccionL == "Reportero ciudadano" || seccionL == "Así opinan"){
        $(this).find(".nota .seccion .color").css({background:"#C60B77"}); 
      }
    });
    //FIN COLOR
//FIN LISTA

//LISTA 2
      $(".view-principal.view-display-id-block_2 .views-row").each(function(){
      var ContentTypeL = $(this).find(".tipo").html();
      if(ContentTypeL == "Galería de imagenes"){
        $(this).find(".icon_galeria").css("display","block");
        $(this).find(".galeria").css("display","block");
        $(this).find(".icon_video").css("display","none");
        $(this).find(".video").css("display","none");
        $(this).find(".icon_podcast").css("display","none");
        $(this).find(".podcast").css("display","none");
        $(this).find(".foto").css("display","none");
      }else if(ContentTypeL == "Video"){
        $(this).find(".icon_video").css("display","block");
        $(this).find(".video").css("display","block");
        $(this).find(".icon_galeria").css("display","none");
        $(this).find(".galeria").css("display","none");
        $(this).find(".icon_podcast").css("display","none");
        $(this).find(".podcast").css("display","none");
        $(this).find(".foto").css("display","none");
      }else if(ContentTypeL == "Podcast"){
        $(this).find(".icon_podcast").css("display","block");
        $(this).find(".podcast").css("display","block");
        $(this).find(".icon_video").css("display","none");
        $(this).find(".video").css("display","none");
        $(this).find(".icon_galeria").css("display","none");
        $(this).find(".galeria").css("display","none");
        $(this).find(".foto").css("display","none");
      }else if(ContentTypeL == "Artículo"){
        $(this).find(".icon_video").css("display","none");
        $(this).find(".video").css("display","none");
        $(this).find(".icon_galeria").css("display","none");
        $(this).find(".galeria").css("display","none");
        $(this).find(".foto").css("display","block");
      }else if(ContentTypeL == "Infografía"){
        $(this).find(".icon_video").css("display","none");
        $(this).find(".video").css("display","none");
        $(this).find(".icon_galeria").css("display","none");
        $(this).find(".galeria").css("display","none");
        $(this).find(".icon_podcast").css("display","none");
        $(this).find(".podcast").css("display","none");
        $(this).find(".foto").css("display","block");
      }
    });
    //COLOR
    $(".view-principal.view-display-id-block_2 .views-row").each(function(){
      var seccionL = $(this).find(".nota .seccion .color").html();
      if(seccionL == "Cúcuta" || seccionL == "Memorias" || seccionL == "Por los barrios"){
        $(this).find(".nota .seccion .color").css({background:"#BA2025"}); 
      }else
      if(seccionL == "Región" || seccionL == "Pamplona" || seccionL == "Ocaña"){
        $(this).find(".nota .seccion .color").css({background:"#F9D821"}); 
      }else
      if(seccionL == "Judicial"){
        $(this).find(".nota .seccion .color").css({background:"#F87917"}); 
      }else
      if(seccionL == "Frontera"){
        $(this).find(".nota .seccion .color").css({background:"#89C33F"}); 
      }else
      if(seccionL == "Actualidad" || seccionL == "Economía" || seccionL == "Política" || seccionL == "Colombia" || seccionL == "Venezuela" || seccionL == "Mundo"){
        $(this).find(".nota .seccion .color").css({background:"#3D9E04"}); 
      }else
      if(seccionL == "Opinión" || seccionL == "Editorial" || seccionL == "Columnistas" || seccionL == "Caricaturas"){
        $(this).find(".nota .seccion .color").css({background:"#BFD63E"}); 
      }else
      if(seccionL == "Deportes" || seccionL == "Cúcuta Deportivo" || seccionL == "Fútbol" || seccionL == "+ Deportes" || seccionL == "Copa América 2015" || seccionL == "Copa América 2016"){
        $(this).find(".nota .seccion .color").css({background:"#3FA6F2"}); 
      }else
      if(seccionL == "Entretenimiento" || seccionL == "Actividad social" || seccionL == "Tecnología" || seccionL == "Cultura" || seccionL == "Cultura" || seccionL == "Tendencias" || seccionL == "Viral" || seccionL == "Vida y salud" || seccion == "Zona verde"){
        $(this).find(".nota .seccion .color").css({background:"#8B7AB5"}); 
      }else
      if(seccionL == "Participación" || seccionL == "Reportero ciudadano" || seccionL == "Así opinan"){
        $(this).find(".nota .seccion .color").css({background:"#C60B77"}); 
      }
    });
    //FIN COLOR
//FIN LISTA 2

//LISTA 3
      $(".view-principal.view-display-id-block_3 .views-row").each(function(){
      var ContentTypeL = $(this).find(".tipo").html();
      if(ContentTypeL == "Galería de imagenes"){
        $(this).find(".icon_galeria").css("display","block");
        $(this).find(".galeria").css("display","block");
        $(this).find(".icon_video").css("display","none");
        $(this).find(".video").css("display","none");
        $(this).find(".icon_podcast").css("display","none");
        $(this).find(".podcast").css("display","none");
        $(this).find(".foto").css("display","none");
      }else if(ContentTypeL == "Video"){
        $(this).find(".icon_video").css("display","block");
        $(this).find(".video").css("display","block");
        $(this).find(".icon_galeria").css("display","none");
        $(this).find(".galeria").css("display","none");
        $(this).find(".icon_podcast").css("display","none");
        $(this).find(".podcast").css("display","none");
        $(this).find(".foto").css("display","none");
      }else if(ContentTypeL == "Podcast"){
        $(this).find(".icon_podcast").css("display","block");
        $(this).find(".podcast").css("display","block");
        $(this).find(".icon_video").css("display","none");
        $(this).find(".video").css("display","none");
        $(this).find(".icon_galeria").css("display","none");
        $(this).find(".galeria").css("display","none");
        $(this).find(".foto").css("display","none");
      }else if(ContentTypeL == "Artículo"){
        $(this).find(".icon_video").css("display","none");
        $(this).find(".video").css("display","none");
        $(this).find(".icon_galeria").css("display","none");
        $(this).find(".galeria").css("display","none");
        $(this).find(".icon_podcast").css("display","none");
        $(this).find(".podcast").css("display","none");
        $(this).find(".foto").css("display","block");
      }else if(ContentTypeL == "Infografía"){
        $(this).find(".icon_video").css("display","none");
        $(this).find(".video").css("display","none");
        $(this).find(".icon_galeria").css("display","none");
        $(this).find(".galeria").css("display","none");
        $(this).find(".icon_podcast").css("display","none");
        $(this).find(".podcast").css("display","none");
        $(this).find(".foto").css("display","block");
      }
    });
    //COLOR
    $(".view-principal.view-display-id-block_3 .views-row").each(function(){
      var seccionL = $(this).find(".nota .seccion .color").html();
      if(seccionL == "Cúcuta" || seccionL == "Memorias" || seccionL == "Por los barrios"){
        $(this).find(".nota .seccion .color").css({background:"#BA2025"}); 
      }else
      if(seccionL == "Región" || seccionL == "Pamplona" || seccionL == "Ocaña"){
        $(this).find(".nota .seccion .color").css({background:"#F9D821"}); 
      }else
      if(seccionL == "Judicial"){
        $(this).find(".nota .seccion .color").css({background:"#F87917"}); 
      }else
      if(seccionL == "Frontera"){
        $(this).find(".nota .seccion .color").css({background:"#89C33F"}); 
      }else
      if(seccionL == "Actualidad" || seccionL == "Economía" || seccionL == "Política" || seccionL == "Colombia" || seccionL == "Venezuela" || seccionL == "Mundo"){
        $(this).find(".nota .seccion .color").css({background:"#3D9E04"}); 
      }else
      if(seccionL == "Opinión" || seccionL == "Editorial" || seccionL == "Columnistas" || seccionL == "Caricaturas"){
        $(this).find(".nota .seccion .color").css({background:"#BFD63E"}); 
      }else
      if(seccionL == "Deportes" || seccionL == "Cúcuta Deportivo" || seccionL == "Fútbol" || seccionL == "+ Deportes" || seccionL == "Copa América 2015" || seccionL == "Copa América 2016"){
        $(this).find(".nota .seccion .color").css({background:"#3FA6F2"}); 
      }else
      if(seccionL == "Entretenimiento" || seccionL == "Actividad social" || seccionL == "Tecnología" || seccionL == "Cultura" || seccionL == "Cultura" || seccionL == "Tendencias" || seccionL == "Viral" || seccionL == "Vida y salud" || seccion == "Zona verde"){
        $(this).find(".nota .seccion .color").css({background:"#8B7AB5"}); 
      }else
      if(seccionL == "Participación" || seccionL == "Reportero ciudadano" || seccionL == "Así opinan"){
        $(this).find(".nota .seccion .color").css({background:"#C60B77"}); 
      }
    });
    //FIN COLOR
//FIN LISTA 3

//COLUMNA
      $(".view-principal.view-display-id-block_4 .views-row").each(function(){
      var ContentTypeL = $(this).find(".tipo").html();
      if(ContentTypeL == "Galería de imagenes"){
        $(this).find(".icon_galeria").css("display","block");
        $(this).find(".galeria").css("display","block");
        $(this).find(".icon_video").css("display","none");
        $(this).find(".video").css("display","none");
        $(this).find(".icon_podcast").css("display","none");
        $(this).find(".podcast").css("display","none");
        $(this).find(".foto").css("display","none");
      }else if(ContentTypeL == "Video"){
        $(this).find(".icon_video").css("display","block");
        $(this).find(".video").css("display","block");
        $(this).find(".icon_galeria").css("display","none");
        $(this).find(".galeria").css("display","none");
        $(this).find(".icon_podcast").css("display","none");
        $(this).find(".podcast").css("display","none");
        $(this).find(".foto").css("display","none");
      }else if(ContentTypeL == "Podcast"){
        $(this).find(".icon_podcast").css("display","block");
        $(this).find(".podcast").css("display","block");
        $(this).find(".icon_video").css("display","none");
        $(this).find(".video").css("display","none");
        $(this).find(".icon_galeria").css("display","none");
        $(this).find(".galeria").css("display","none");
        $(this).find(".foto").css("display","none");
      }else if(ContentTypeL == "Artículo"){
        $(this).find(".icon_video").css("display","none");
        $(this).find(".video").css("display","none");
        $(this).find(".icon_galeria").css("display","none");
        $(this).find(".galeria").css("display","none");
        $(this).find(".icon_podcast").css("display","none");
        $(this).find(".podcast").css("display","none");
        $(this).find(".foto").css("display","block");
      }else if(ContentTypeL == "Infografía"){
        $(this).find(".icon_video").css("display","none");
        $(this).find(".video").css("display","none");
        $(this).find(".icon_galeria").css("display","none");
        $(this).find(".galeria").css("display","none");
        $(this).find(".icon_podcast").css("display","none");
        $(this).find(".podcast").css("display","none");
        $(this).find(".foto").css("display","block");
      }
    });
    //Lista
    $(".view-principal.view-display-id-block_6 .views-row").each(function(){
      var ContentTypeL = $(this).find(".tipo").html();
      if(ContentTypeL == "Galería de imagenes"){
        $(this).find(".icon_galeria").css("display","block");
        $(this).find(".galeria").css("display","block");
        $(this).find(".icon_video").css("display","none");
        $(this).find(".video").css("display","none");
        $(this).find(".icon_podcast").css("display","none");
        $(this).find(".podcast").css("display","none");
        $(this).find(".foto").css("display","none");
      }else if(ContentTypeL == "Video"){
        $(this).find(".icon_video").css("display","block");
        $(this).find(".video").css("display","block");
        $(this).find(".icon_galeria").css("display","none");
        $(this).find(".galeria").css("display","none");
        $(this).find(".icon_podcast").css("display","none");
        $(this).find(".podcast").css("display","none");
        $(this).find(".foto").css("display","none");
      }else if(ContentTypeL == "Podcast"){
        $(this).find(".icon_podcast").css("display","block");
        $(this).find(".podcast").css("display","block");
        $(this).find(".icon_video").css("display","none");
        $(this).find(".video").css("display","none");
        $(this).find(".icon_galeria").css("display","none");
        $(this).find(".galeria").css("display","none");
        $(this).find(".foto").css("display","none");
      }else if(ContentTypeL == "Artículo"){
        $(this).find(".icon_video").css("display","none");
        $(this).find(".video").css("display","none");
        $(this).find(".icon_galeria").css("display","none");
        $(this).find(".galeria").css("display","none");
        $(this).find(".icon_podcast").css("display","none");
        $(this).find(".podcast").css("display","none");
        $(this).find(".foto").css("display","block");
      }else if(ContentTypeL == "Infografía"){
        $(this).find(".icon_video").css("display","none");
        $(this).find(".video").css("display","none");
        $(this).find(".icon_galeria").css("display","none");
        $(this).find(".galeria").css("display","none");
        $(this).find(".icon_podcast").css("display","none");
        $(this).find(".podcast").css("display","none");
        $(this).find(".foto").css("display","block");
      }
    });

    //COLOR
    $(".view-principal.view-display-id-block_4 .views-row").each(function(){
      var seccionL = $(this).find(".nota .seccion .color").html();
      if(seccionL == "Cúcuta" || seccionL == "Memorias" || seccionL == "Por los barrios"){
        $(this).find(".nota .seccion .color").css({background:"#BA2025"}); 
      }else
      if(seccionL == "Región" || seccionL == "Pamplona" || seccionL == "Ocaña"){
        $(this).find(".nota .seccion .color").css({background:"#F9D821"}); 
      }else
      if(seccionL == "Judicial"){
        $(this).find(".nota .seccion .color").css({background:"#F87917"}); 
      }else
      if(seccionL == "Frontera"){
        $(this).find(".nota .seccion .color").css({background:"#89C33F"}); 
      }else
      if(seccionL == "Actualidad" || seccionL == "Economía" || seccionL == "Política" || seccionL == "Colombia" || seccionL == "Venezuela" || seccionL == "Mundo"){
        $(this).find(".nota .seccion .color").css({background:"#3D9E04"}); 
      }else
      if(seccionL == "Opinión" || seccionL == "Editorial" || seccionL == "Columnistas" || seccionL == "Caricaturas"){
        $(this).find(".nota .seccion .color").css({background:"#BFD63E"}); 
      }else
      if(seccionL == "Deportes" || seccionL == "Cúcuta Deportivo" || seccionL == "Fútbol" || seccionL == "+ Deportes" || seccionL == "Copa América 2015" || seccionL == "Copa América 2016"){
        $(this).find(".nota .seccion .color").css({background:"#3FA6F2"}); 
      }else
      if(seccionL == "Entretenimiento" || seccionL == "Actividad social" || seccionL == "Tecnología" || seccionL == "Cultura" || seccionL == "Cultura" || seccionL == "Tendencias" || seccionL == "Viral" || seccionL == "Vida y salud" || seccion == "Zona verde"){
        $(this).find(".nota .seccion .color").css({background:"#8B7AB5"}); 
      }else
      if(seccionL == "Participación" || seccionL == "Reportero ciudadano" || seccionL == "Así opinan"){
        $(this).find(".nota .seccion .color").css({background:"#C60B77"}); 
      }
    });
    //FIN COLOR
//FIN COLUMNA
//COLUMNA 2
      $(".view-principal.view-display-id-block_5 .views-row").each(function(){
      var ContentTypeL = $(this).find(".tipo").html();
      if(ContentTypeL == "Galería de imagenes"){
        $(this).find(".icon_galeria").css("display","block");
        $(this).find(".galeria").css("display","block");
        $(this).find(".icon_video").css("display","none");
        $(this).find(".video").css("display","none");
        $(this).find(".icon_podcast").css("display","none");
        $(this).find(".podcast").css("display","none");
        $(this).find(".foto").css("display","none");
      }else if(ContentTypeL == "Video"){
        $(this).find(".icon_video").css("display","block");
        $(this).find(".video").css("display","block");
        $(this).find(".icon_galeria").css("display","none");
        $(this).find(".galeria").css("display","none");
        $(this).find(".icon_podcast").css("display","none");
        $(this).find(".podcast").css("display","none");
        $(this).find(".foto").css("display","none");
      }else if(ContentTypeL == "Podcast"){
        $(this).find(".icon_podcast").css("display","block");
        $(this).find(".podcast").css("display","block");
        $(this).find(".icon_video").css("display","none");
        $(this).find(".video").css("display","none");
        $(this).find(".icon_galeria").css("display","none");
        $(this).find(".galeria").css("display","none");
        $(this).find(".foto").css("display","none");
      }else if(ContentTypeL == "Artículo"){
        $(this).find(".icon_video").css("display","none");
        $(this).find(".video").css("display","none");
        $(this).find(".icon_galeria").css("display","none");
        $(this).find(".galeria").css("display","none");
        $(this).find(".icon_podcast").css("display","none");
        $(this).find(".podcast").css("display","none");
        $(this).find(".foto").css("display","block");
      }else if(ContentTypeL == "Infografía"){
        $(this).find(".icon_video").css("display","none");
        $(this).find(".video").css("display","none");
        $(this).find(".icon_galeria").css("display","none");
        $(this).find(".galeria").css("display","none");
        $(this).find(".icon_podcast").css("display","none");
        $(this).find(".podcast").css("display","none");
        $(this).find(".foto").css("display","block");
      }
    });
    //COLOR
    $(".view-principal.view-display-id-block_5 .views-row").each(function(){
      var seccionL = $(this).find(".nota .seccion .color").html();
      if(seccionL == "Cúcuta" || seccionL == "Memorias" || seccionL == "Por los barrios"){
        $(this).find(".nota .seccion .color").css({background:"#BA2025"}); 
      }else
      if(seccionL == "Región" || seccionL == "Pamplona" || seccionL == "Ocaña"){
        $(this).find(".nota .seccion .color").css({background:"#F9D821"}); 
      }else
      if(seccionL == "Judicial"){
        $(this).find(".nota .seccion .color").css({background:"#F87917"}); 
      }else
      if(seccionL == "Frontera"){
        $(this).find(".nota .seccion .color").css({background:"#89C33F"}); 
      }else
      if(seccionL == "Actualidad" || seccionL == "Economía" || seccionL == "Política" || seccionL == "Colombia" || seccionL == "Venezuela" || seccionL == "Mundo"){
        $(this).find(".nota .seccion .color").css({background:"#3D9E04"}); 
      }else
      if(seccionL == "Opinión" || seccionL == "Editorial" || seccionL == "Columnistas" || seccionL == "Caricaturas"){
        $(this).find(".nota .seccion .color").css({background:"#BFD63E"}); 
      }else
      if(seccionL == "Deportes" || seccionL == "Cúcuta Deportivo" || seccionL == "Fútbol" || seccionL == "+ Deportes" || seccionL == "Copa América 2015" || seccionL == "Copa América 2016"){
        $(this).find(".nota .seccion .color").css({background:"#3FA6F2"}); 
      }else
      if(seccionL == "Entretenimiento" || seccionL == "Actividad social" || seccionL == "Tecnología" || seccionL == "Cultura" || seccionL == "Cultura" || seccionL == "Tendencias" || seccionL == "Viral" || seccionL == "Vida y salud" || seccion == "Zona verde"){
        $(this).find(".nota .seccion .color").css({background:"#8B7AB5"}); 
      }else
      if(seccionL == "Participación" || seccionL == "Reportero ciudadano" || seccionL == "Así opinan"){
        $(this).find(".nota .seccion .color").css({background:"#C60B77"}); 
      }
    });
    //FIN COLOR
//FIN COLUMNA 2

//SIDEBAR LO+
      $(".view-side.view-display-id-block .views-row").each(function(){
      var ContentTypeL = $(this).find(".tipo").html();
      if(ContentTypeL == "Galería de imagenes"){
        $(this).find(".icon_galeria").css("display","block");
        $(this).find(".galeria").css("display","block");
        $(this).find(".icon_video").css("display","none");
        $(this).find(".video").css("display","none");
        $(this).find(".icon_podcast").css("display","none");
        $(this).find(".podcast").css("display","none");
        $(this).find(".foto").css("display","none");
      }else if(ContentTypeL == "Video"){
        $(this).find(".icon_video").css("display","block");
        $(this).find(".video").css("display","block");
        $(this).find(".icon_galeria").css("display","none");
        $(this).find(".galeria").css("display","none");
        $(this).find(".icon_podcast").css("display","none");
        $(this).find(".podcast").css("display","none");
        $(this).find(".foto").css("display","none");
      }else if(ContentTypeL == "Podcast"){
        $(this).find(".icon_podcast").css("display","block");
        $(this).find(".podcast").css("display","block");
        $(this).find(".icon_video").css("display","none");
        $(this).find(".video").css("display","none");
        $(this).find(".icon_galeria").css("display","none");
        $(this).find(".galeria").css("display","none");
        $(this).find(".foto").css("display","none");
      }else if(ContentTypeL == "Artículo"){
        $(this).find(".icon_video").css("display","none");
        $(this).find(".video").css("display","none");
        $(this).find(".icon_galeria").css("display","none");
        $(this).find(".galeria").css("display","none");
        $(this).find(".icon_podcast").css("display","none");
        $(this).find(".podcast").css("display","none");
        $(this).find(".foto").css("display","block");
      }else if(ContentTypeL == "Infografía"){
        $(this).find(".icon_video").css("display","none");
        $(this).find(".video").css("display","none");
        $(this).find(".icon_galeria").css("display","none");
        $(this).find(".galeria").css("display","none");
        $(this).find(".icon_podcast").css("display","none");
        $(this).find(".podcast").css("display","none");
        $(this).find(".foto").css("display","block");
      }
    });
//SIDEBAR LO+ otros
      $(".view-side.view-display-id-block_1 .views-row").each(function(){
      var ContentTypeL = $(this).find(".tipo").html();
      if(ContentTypeL == "Galería de imagenes"){
        $(this).find(".icon_galeria").css("display","block");
        $(this).find(".galeria").css("display","block");
        $(this).find(".icon_video").css("display","none");
        $(this).find(".video").css("display","none");
        $(this).find(".icon_podcast").css("display","none");
        $(this).find(".podcast").css("display","none");
        $(this).find(".foto").css("display","none");
      }else if(ContentTypeL == "Video"){
        $(this).find(".icon_video").css("display","block");
        $(this).find(".video").css("display","block");
        $(this).find(".icon_galeria").css("display","none");
        $(this).find(".galeria").css("display","none");
        $(this).find(".icon_podcast").css("display","none");
        $(this).find(".podcast").css("display","none");
        $(this).find(".foto").css("display","none");
      }else if(ContentTypeL == "Podcast"){
        $(this).find(".icon_podcast").css("display","block");
        $(this).find(".podcast").css("display","block");
        $(this).find(".icon_video").css("display","none");
        $(this).find(".video").css("display","none");
        $(this).find(".icon_galeria").css("display","none");
        $(this).find(".galeria").css("display","none");
        $(this).find(".foto").css("display","none");
      }else if(ContentTypeL == "Artículo"){
        $(this).find(".icon_video").css("display","none");
        $(this).find(".video").css("display","none");
        $(this).find(".icon_galeria").css("display","none");
        $(this).find(".galeria").css("display","none");
        $(this).find(".icon_podcast").css("display","none");
        $(this).find(".podcast").css("display","none");
        $(this).find(".foto").css("display","block");
      }else if(ContentTypeL == "Infografía"){
        $(this).find(".icon_video").css("display","none");
        $(this).find(".video").css("display","none");
        $(this).find(".icon_galeria").css("display","none");
        $(this).find(".galeria").css("display","none");
        $(this).find(".icon_podcast").css("display","none");
        $(this).find(".podcast").css("display","none");
        $(this).find(".foto").css("display","block");
      }
    });
//TEMA DEL DIA
      $(".view-side.view-display-id-block_2 .views-row").each(function(){
      var ContentTypeL = $(this).find(".tipo").html();
      if(ContentTypeL == "Galería de imagenes"){
        $(this).find(".icon_galeria").css("display","block");
        $(this).find(".galeria").css("display","block");
        $(this).find(".icon_video").css("display","none");
        $(this).find(".video").css("display","none");
        $(this).find(".icon_podcast").css("display","none");
        $(this).find(".podcast").css("display","none");
        $(this).find(".foto").css("display","none");
      }else if(ContentTypeL == "Video"){
        $(this).find(".icon_video").css("display","block");
        $(this).find(".video").css("display","block");
        $(this).find(".icon_galeria").css("display","none");
        $(this).find(".galeria").css("display","none");
        $(this).find(".icon_podcast").css("display","none");
        $(this).find(".podcast").css("display","none");
        $(this).find(".foto").css("display","none");
      }else if(ContentTypeL == "Podcast"){
        $(this).find(".icon_podcast").css("display","block");
        $(this).find(".podcast").css("display","block");
        $(this).find(".icon_video").css("display","none");
        $(this).find(".video").css("display","none");
        $(this).find(".icon_galeria").css("display","none");
        $(this).find(".galeria").css("display","none");
        $(this).find(".foto").css("display","none");
      }else if(ContentTypeL == "Artículo"){
        $(this).find(".icon_video").css("display","none");
        $(this).find(".video").css("display","none");
        $(this).find(".icon_galeria").css("display","none");
        $(this).find(".galeria").css("display","none");
        $(this).find(".icon_podcast").css("display","none");
        $(this).find(".podcast").css("display","none");
        $(this).find(".foto").css("display","block");
      }else if(ContentTypeL == "Infografía"){
        $(this).find(".icon_video").css("display","none");
        $(this).find(".video").css("display","none");
        $(this).find(".icon_galeria").css("display","none");
        $(this).find(".galeria").css("display","none");
        $(this).find(".icon_podcast").css("display","none");
        $(this).find(".podcast").css("display","none");
        $(this).find(".foto").css("display","block");
      }
    });

//VIDEOS
  var contador = 0;
  var valAutoPlay = 0;
  var principal = 0;
  var fila = ".view-id-principal.view-display-id-block_9 .views-row-";
  $(".view-id-principal.view-display-id-block_9 .views-row").each(function(){
    var plataforma = $(this).find(".plataforma").html();
    if(principal == 0){
      if(plataforma == "YouTube"){ 
        var idYoutube = $(this).find(".id").html();
        var youtubeplayer = "<iframe class=iframeyoutube width=685 height=500px src=http://www.youtube.com/embed/" + idYoutube + "?showinfo=0&autohide=0&autoplay=" + valAutoPlay + " frameborder=0 allowfullscreen></iframe>";
        $(".view-id-principal.view-display-id-block_9 .view-header .frame_video").html(youtubeplayer);
        principal++;
      }else if(plataforma == "Facebook"){
        var idfacebook = $(this).find(".id").html();
        var facebookplayer = "<div class=fb-video data-href=https://www.facebook.com/" + idfacebook + "/ data-width=685 data-show-text=false><blockquote cite=https://www.facebook.com/" + idfacebook + "/ class=fb-xfbml-parse-ignore><a href=https://www.facebook.com/" + idfacebook + "/></a></blockquote></div>";
        $(".view-id-principal.view-display-id-block_9 .view-header .frame_video").html(facebookplayer);
        principal++;
      }else if(plataforma == "Vine"){
        var idvine = $(this).find(".id").html();
        var vineplayer = "<div class=vineplayer> <iframe class=iframevine src=https://vine.co/v/" + idvine + "/embed/simple width=1006 height=500 frameborder=0></iframe></div>";
        $(".view-id-principal.view-display-id-block_9 .view-header .frame_video").html(vineplayer);
        principal++;
      }else if(plataforma == "Instagram"){
        var idinstagram = $(this).find(".id").html();
        var instagramplayer = "<div class=instagramplayer><iframe class=instagram-media allowtransparency=true frameborder=0 height=710 scrolling=no src=//instagram.com/p/"+idinstagram+"/embed/ width=612></div>";        $(".view-id-principal.view-display-id-block_9 .view-header .frame_video").html(instagramplayer);
        principal++;
      }else if(plataforma == "Twitter"){
        var idtwitter = $(this).find(".id").html();
        var twitterplayer = "<div class=twitterplayer> <iframe class=iframetwitter frameborder=0 width=680 height=450px src=https://twitter.com/i/cards/tfw/v1/" + idtwitter + "></iframe></div>";
        $(".view-id-principal.view-display-id-block_9 .view-header .frame_video").html(twitterplayer);
        principal++;
      }
    }

    if(plataforma == "YouTube"){ 
      contador++;
      var id = $(this).find(".id").html();
      var youtubeplayer = "<div class=youtubeplayer> <iframe class=iframeyoutube width=685 height=500px src=http://www.youtube.com/embed/" + id + "?showinfo=0&autohide=0&autoplay=" + valAutoPlay + " frameborder=0 allowfullscreen></iframe></div>";
      $(".view-id-principal.view-display-id-block_9 .views-row-"+contador).append(youtubeplayer);
    }else if(plataforma == "Facebook"){
      contador++;
      var id = $(this).find(".id").html();
      var facebookplayer = "<div class=fbplayer> <div class=fb-video data-href=https://www.facebook.com/" + id + "/ data-width=685 data-show-text=false><blockquote cite=https://www.facebook.com/" + id + "/ class=fb-xfbml-parse-ignore><a href=https://www.facebook.com/" + id + "/></a></blockquote></div>";
      $(".view-id-principal.view-display-id-block_9 .views-row-"+contador).append(facebookplayer); 
    }else if(plataforma == "Vine"){
      contador++;
      var idvine = $(this).find(".id").html();
      var vineplayer = "<div class=vineplayer> <iframe class=iframevine src=https://vine.co/v/" + idvine + "/embed/simple width=1006 height=500 frameborder=0></iframe></div>";
      $(".view-id-principal.view-display-id-block_9 .views-row-"+contador).append(vineplayer);
    }else if(plataforma == "Instagram"){
      contador++;
      var idinstagram = $(this).find(".id").html();
      var instagramplayer = "<div class=instagramplayer><iframe class=instagram-media allowtransparency=true frameborder=0 height=710 scrolling=no src=//instagram.com/p/"+idinstagram+"/embed/ width=612></div>";
      $(".view-id-principal.view-display-id-block_9 .views-row-"+contador).append(instagramplayer);
    }else if(plataforma == "Twitter"){
      contador++;
      var idtwitter = $(this).find(".id").html();
      var twitterplayer = "<div class=twitterplayer> <iframe class=iframetwitter frameborder=0 margin-top: 20px margin-left: 15px  width=680 height=450px src=https://twitter.com/i/cards/tfw/v1/" + idtwitter + "></iframe></div>";
      $(".view-id-principal.view-display-id-block_9 .views-row-"+contador).append(twitterplayer);
    }
  });

  $(fila + "1").click(function(){
    var youtubeplayer = $(this).find(".youtubeplayer").html();
    var facebookplayer = $(this).find(".fbplayer").html(); 
    var vineplayer = $(this).find(".vineplayer").html();
    var instagramplayer = $(this).find(".instagramplayer").html();
    var twitterplayer = $(this).find(".twitterplayer").html();
    $(".view-id-principal.view-display-id-block_9 .view-header .frame_video").html(youtubeplayer);
    $(".view-id-principal.view-display-id-block_9 .view-header .frame_video").html(facebookplayer);
    $(".view-id-principal.view-display-id-block_9 .view-header .frame_video").html(vineplayer);
    $(".view-id-principal.view-display-id-block_9 .view-header .frame_video").html(instagramplayer);
    $(".view-id-principal.view-display-id-block_9 .view-header .frame_video").html(twitterplayer);
  });
  $(fila + "2").click(function(){
    var youtubeplayer = $(this).find(".youtubeplayer").html();
    var facebookplayer = $(this).find(".fbplayer").html();
    var vineplayer = $(this).find(".vineplayer").html();
    var instagramplayer = $(this).find(".instagramplayer").html();
    var twitterplayer = $(this).find(".twitterplayer").html();
    $(".view-id-principal.view-display-id-block_9 .view-header .frame_video").html(youtubeplayer);
    $(".view-id-principal.view-display-id-block_9 .view-header .frame_video").html(facebookplayer);
    $(".view-id-principal.view-display-id-block_9 .view-header .frame_video").html(vineplayer);
    $(".view-id-principal.view-display-id-block_9 .view-header .frame_video").html(instagramplayer);
    $(".view-id-principal.view-display-id-block_9 .view-header .frame_video").html(twitterplayer);
  });
  $(fila + "3").click(function(){
    var youtubeplayer = $(this).find(".youtubeplayer").html();
    var facebookplayer = $(this).find(".fbplayer").html();
    var vineplayer = $(this).find(".vineplayer").html();
    var instagramplayer = $(this).find(".instagramplayer").html();
    var twitterplayer = $(this).find(".twitterplayer").html();
    $(".view-id-principal.view-display-id-block_9 .view-header .frame_video").html(youtubeplayer);
    $(".view-id-principal.view-display-id-block_9 .view-header .frame_video").html(facebookplayer);
    $(".view-id-principal.view-display-id-block_9 .view-header .frame_video").html(vineplayer);
    $(".view-id-principal.view-display-id-block_9 .view-header .frame_video").html(instagramplayer);
    $(".view-id-principal.view-display-id-block_9 .view-header .frame_video").html(twitterplayer);
  });
  $(fila + "4").click(function(){
    var youtubeplayer = $(this).find(".youtubeplayer").html();
    var facebookplayer = $(this).find(".fbplayer").html();
    var vineplayer = $(this).find(".vineplayer").html();
    var instagramplayer = $(this).find(".instagramplayer").html();
    var twitterplayer = $(this).find(".twitterplayer").html();
    $(".view-id-principal.view-display-id-block_9 .view-header .frame_video").html(youtubeplayer);
    $(".view-id-principal.view-display-id-block_9 .view-header .frame_video").html(facebookplayer);
    $(".view-id-principal.view-display-id-block_9 .view-header .frame_video").html(vineplayer);
    $(".view-id-principal.view-display-id-block_9 .view-header .frame_video").html(instagramplayer);
    $(".view-id-principal.view-display-id-block_9 .view-header .frame_video").html(twitterplayer);
  });
  $(fila + "5").click(function(){
    var youtubeplayer = $(this).find(".youtubeplayer").html();
    var facebookplayer = $(this).find(".fbplayer").html();
    var vineplayer = $(this).find(".vineplayer").html();
    var instagramplayer = $(this).find(".instagramplayer").html();
    var twitterplayer = $(this).find(".twitterplayer").html();
    $(".view-id-principal.view-display-id-block_9 .view-header .frame_video").html(youtubeplayer);
    $(".view-id-principal.view-display-id-block_9 .view-header .frame_video").html(facebookplayer);
    $(".view-id-principal.view-display-id-block_9 .view-header .frame_video").html(vineplayer);
    $(".view-id-principal.view-display-id-block_9 .view-header .frame_video").html(instagramplayer);
    $(".view-id-principal.view-display-id-block_9 .view-header .frame_video").html(twitterplayer);
  });
   
//COLOR
    $(".view-principal.view-display-id-block_9 .views-row").each(function(){
      var seccionL = $(this).find(".video .seccion .color").html();
      if(seccionL == "Cúcuta" || seccionL == "Memorias" || seccionL == "Por los barrios"){
        $(this).find(".video .seccion .color").css({background:"#BA2025"}); 
      }else
      if(seccionL == "Región" || seccionL == "Pamplona" || seccionL == "Ocaña"){
        $(this).find(".video .seccion .color").css({background:"#F9D821"}); 
      }else
      if(seccionL == "Judicial"){
        $(this).find(".video .seccion .color").css({background:"#F87917"}); 
      }else
      if(seccionL == "Frontera"){
        $(this).find(".video .seccion .color").css({background:"#89C33F"}); 
      }else
      if(seccionL == "Actualidad" || seccionL == "Economía" || seccionL == "Política" || seccionL == "Colombia" || seccionL == "Venezuela" || seccionL == "Mundo"){
        $(this).find(".video .seccion .color").css({background:"#3D9E04"}); 
      }else
      if(seccionL == "Opinión" || seccionL == "Editorial" || seccionL == "Columnistas" || seccionL == "Caricaturas"){
        $(this).find(".video .seccion .color").css({background:"#BFD63E"}); 
      }else
      if(seccionL == "Deportes" || seccionL == "Cúcuta Deportivo" || seccionL == "Fútbol" || seccionL == "+ Deportes" || seccionL == "Copa América 2015" || seccionL == "Copa América 2016"){
        $(this).find(".video .seccion .color").css({background:"#3FA6F2"}); 
      }else
      if(seccionL == "Entretenimiento" || seccionL == "Actividad social" || seccionL == "Tecnología" || seccionL == "Cultura" || seccionL == "Cultura" || seccionL == "Tendencias" || seccionL == "Viral" || seccionL == "Vida y salud" || seccion == "Zona verde"){
        $(this).find(".video .seccion .color").css({background:"#8B7AB5"}); 
      }else
      if(seccionL == "Participación" || seccionL == "Reportero ciudadano" || seccionL == "Así opinan"){
        $(this).find(".video .seccion .color").css({background:"#C60B77"}); 
      }
    });
//FIN COLOR
//FIN VIDEOS

//GALERIAS
//COLOR
    $(".view-principal.view-display-id-block_10 .views-row").each(function(){
      var seccionL = $(this).find(".galeria .info .seccion .color").html();
      if(seccionL == "Cúcuta" || seccionL == "Memorias" || seccionL == "Por los barrios"){
        $(this).find(".galeria .info .seccion .color").css({background:"#BA2025"}); 
      }else
      if(seccionL == "Región" || seccionL == "Pamplona" || seccionL == "Ocaña"){
        $(this).find(".galeria .info .seccion .color").css({background:"#F9D821"}); 
      }else
      if(seccionL == "Judicial"){
        $(this).find(".galeria .info .seccion .color").css({background:"#F87917"}); 
      }else
      if(seccionL == "Frontera"){
        $(this).find(".galeria .info .seccion .color").css({background:"#89C33F"}); 
      }else
      if(seccionL == "Actualidad" || seccionL == "Economía" || seccionL == "Política" || seccionL == "Colombia" || seccionL == "Venezuela" || seccionL == "Mundo"){
        $(this).find(".galeria .info .seccion .color").css({background:"#3D9E04"}); 
      }else
      if(seccionL == "Opinión" || seccionL == "Editorial" || seccionL == "Columnistas" || seccionL == "Caricaturas"){
        $(this).find(".galeria .info .seccion .color").css({background:"#BFD63E"}); 
      }else
      if(seccionL == "Deportes" || seccionL == "Cúcuta Deportivo" || seccionL == "Fútbol" || seccionL == "+ Deportes" || seccionL == "Copa América 2015" || seccionL == "Copa América 2016"){
        $(this).find(".galeria .info .seccion .color").css({background:"#3FA6F2"}); 
      }else
      if(seccionL == "Entretenimiento" || seccionL == "Actividad social" || seccionL == "Tecnología" || seccionL == "Cultura" || seccionL == "Cultura" || seccionL == "Tendencias" || seccionL == "Viral" || seccionL == "Vida y salud" || seccion == "Zona verde"){
        $(this).find(".galeria .info .seccion .color").css({background:"#8B7AB5"}); 
      }else
      if(seccionL == "Participación" || seccionL == "Reportero ciudadano" || seccionL == "Así opinan"){
        $(this).find(".galeria .info .seccion .color").css({background:"#C60B77"}); 
      }
    });
//FIN COLOR
//PAGINADOR GALERIAS
      var contentG = ".view-principal.view-display-id-block_10 .view-content";
      function cambiarG(itemG){$(".view-principal.view-display-id-block_10 .control").css({opacity:"0.8"});$(".view-principal.view-display-id-block_10 .control" + itemG).css({background:"#f2f2f2"});}
      $(".view-principal.view-display-id-block_10 .control_left").click(function(){$(contentG).css({left:"20px"});cambiarG(1);});
      $(".view-principal.view-display-id-block_10 .control_right").click(function(){$(contentG).css({left:"-775px"});cambiarG(2);});
//FIN GALERIAS

//PODCAST
//COLOR
    $(".view-principal.view-display-id-block_11 .views-row").each(function(){
      var seccionL = $(this).find(".podcast .info .seccion .color").html();
      if(seccionL == "Cúcuta" || seccionL == "Memorias" || seccionL == "Por los barrios"){
        $(this).find(".podcast .info .seccion .color").css({background:"#BA2025"}); 
      }else
      if(seccionL == "Región" || seccionL == "Pamplona" || seccionL == "Ocaña"){
        $(this).find(".podcast .info .seccion .color").css({background:"#F9D821"}); 
      }else
      if(seccionL == "Judicial"){
        $(this).find(".podcast .info .seccion .color").css({background:"#F87917"}); 
      }else
      if(seccionL == "Frontera"){
        $(this).find(".podcast .info .seccion .color").css({background:"#89C33F"}); 
      }else
      if(seccionL == "Actualidad" || seccionL == "Economía" || seccionL == "Política" || seccionL == "Colombia" || seccionL == "Venezuela" || seccionL == "Mundo"){
        $(this).find(".podcast .info .seccion .color").css({background:"#3D9E04"}); 
      }else
      if(seccionL == "Opinión" || seccionL == "Editorial" || seccionL == "Columnistas" || seccionL == "Caricaturas"){
        $(this).find(".podcast .info .seccion .color").css({background:"#BFD63E"}); 
      }else
      if(seccionL == "Deportes" || seccionL == "Cúcuta Deportivo" || seccionL == "Fútbol" || seccionL == "+ Deportes" || seccionL == "Copa América 2015" || seccionL == "Copa América 2016"){
        $(this).find(".podcast .info .seccion .color").css({background:"#3FA6F2"}); 
      }else
      if(seccionL == "Entretenimiento" || seccionL == "Actividad social" || seccionL == "Tecnología" || seccionL == "Cultura" || seccionL == "Cultura" || seccionL == "Tendencias" || seccionL == "Viral" || seccionL == "Vida y salud" || seccion == "Zona verde"){
        $(this).find(".podcast .info .seccion .color").css({background:"#8B7AB5"}); 
      }else
      if(seccionL == "Participación" || seccionL == "Reportero ciudadano" || seccionL == "Así opinan"){
        $(this).find(".podcast .info .seccion .color").css({background:"#C60B77"}); 
      }
    });
//FIN COLOR
//PAGINADOR PODCAST
      var contentA = ".view-principal.view-display-id-block_11 .view-content";
      function cambiarA(itemA){$(".view-principal.view-display-id-block_11 .control").css({opacity:"0.8"});$(".view-principal.view-display-id-block_11 .control" + itemA).css({background:"#f2f2f2"});}
      $(".view-principal.view-display-id-block_11 .control_left").click(function(){$(contentA).css({left:"20px"});cambiarA(1);});
      $(".view-principal.view-display-id-block_11 .control_right").click(function(){$(contentA).css({left:"-775px"});cambiarA(2);});
//FIN PODCAST


//INFOGRAFIAS
//COLOR
    $(".view-principal.view-display-id-block_15 .views-row").each(function(){
      var seccionL = $(this).find(".infografia .seccion .color").html();
      if(seccionL == "Cúcuta" || seccionL == "Memorias" || seccionL == "Por los barrios"){
        $(this).find(".infografia .seccion .color").css({background:"#BA2025"}); 
      }else
      if(seccionL == "Región" || seccionL == "Pamplona" || seccionL == "Ocaña"){
        $(this).find(".infografia .seccion .color").css({background:"#F9D821"}); 
      }else
      if(seccionL == "Judicial"){
        $(this).find(".infografia .seccion .color").css({background:"#F87917"}); 
      }else
      if(seccionL == "Frontera"){
        $(this).find(".infografia .seccion .color").css({background:"#89C33F"}); 
      }else
      if(seccionL == "Actualidad" || seccionL == "Economía" || seccionL == "Política" || seccionL == "Colombia" || seccionL == "Venezuela" || seccionL == "Mundo"){
        $(this).find(".infografia .seccion .color").css({background:"#3D9E04"}); 
      }else
      if(seccionL == "Opinión" || seccionL == "Editorial" || seccionL == "Columnistas" || seccionL == "Caricaturas"){
        $(this).find(".infografia .seccion .color").css({background:"#BFD63E"}); 
      }else
      if(seccionL == "Deportes" || seccionL == "Cúcuta Deportivo" || seccionL == "Fútbol" || seccionL == "+ Deportes" || seccionL == "Copa América 2015" || seccionL == "Copa América 2016"){
        $(this).find(".infografia .seccion .color").css({background:"#3FA6F2"}); 
      }else
      if(seccionL == "Entretenimiento" || seccionL == "Actividad social" || seccionL == "Tecnología" || seccionL == "Cultura" || seccionL == "Cultura" || seccionL == "Tendencias" || seccionL == "Viral" || seccionL == "Vida y salud" || seccion == "Zona verde"){
        $(this).find(".infografia .seccion .color").css({background:"#8B7AB5"}); 
      }else
      if(seccionL == "Participación" || seccionL == "Reportero ciudadano" || seccionL == "Así opinan"){
        $(this).find(".infografia .seccion .color").css({background:"#C60B77"}); 
      }
    });
//FIN COLOR
//FIN INFOGRAFIAS

//PAGINADOR PRODUCTOS
      var contentP = ".product-content .content";
      function cambiarP(itemP){$(".product-content .control").css({opacity:"0.8"});$(".product-content .control" + itemP).css({background:"#f2f2f2"});}
      $(".product-content .control_left").click(function(){$(contentP).css({left:"20px"});cambiarP(1);});
      $(".product-content .control_right").click(function(){$(contentP).css({left:"-130px"});cambiarP(2);});
//FIN PODCAST

//FIN HOME




//NOTAS
  
  //COLOR SECCION
  var seccion = $(".contenido .seccion a").html();
  if(seccion == "Cúcuta" || seccion == "Memorias" || seccion == "Por los barrios"){
    $(".contenido .color").css({background:"#BA2025"}); 
  }else
  if(seccion == "Región" || seccion == "Pamplona" || seccion == "Ocaña"){
    $(".contenido .color").css({background:"#F9D821"}); 
  }else
  if(seccion == "Judicial"){
    $(".contenido .color").css({background:"#F87917"}); 
  }else
  if(seccion == "Frontera"){
    $(".contenido .color").css({background:"#89C33F"}); 
  }else
  if(seccion == "Actualidad" || seccion == "Economía" || seccion == "Política" || seccion == "Colombia" || seccion == "Venezuela" || seccion == "Mundo"){
    $(".contenido .color").css({background:"#3D9E04"}); 
  }else
  if(seccion == "Opinión" || seccion == "Editorial" || seccion == "Columnistas" || seccion == "Caricatura"){
    $(".contenido .color").css({background:"#BFD63E"}); 
  }else
  if(seccion == "Deportes" || seccion == "Cúcuta deportivo" || seccion == "Fútbol" || seccion == "+ Deportes" || seccion == "Copa américa 2016" || seccion == "Copa américa 2016"){
    $(".contenido .color").css({background:"#3FA6F2"}); 
  }else
  if(seccion == "Entretenimiento" || seccion == "Actividad Social" || seccion == "Tecnología" || seccion == "Cultura" || seccion == "Tendencias" || seccion == "Viral" || seccion == "Vida y salud" || seccion == "Zona verde"){
    $(".contenido .color").css({background:"#8B7AB5"}); 
  }else
  if(seccion == "Participación" || seccion == "Así opinan" || seccion == "Reportero ciudadano"){
    $(".contenido .color").css({background:"#C60B77"}); 
  }
  //FIN COLOR SECCION

//Iconos notas recientes lado derecho
  $(".vista-recientes .views-row").each(function(){
      var ContentTypeL = $(this).find(".tipo").html();
      if(ContentTypeL == "Galería de imagenes"){
        $(this).find(".icon_galeria").css("display","block");
        $(this).find(".galeria").css("display","block");
        $(this).find(".icon_video").css("display","none");
        $(this).find(".video").css("display","none");
        $(this).find(".icon_podcast").css("display","none");
        $(this).find(".podcast").css("display","none");
        $(this).find(".foto").css("display","none");
      }else if(ContentTypeL == "Video"){
        $(this).find(".icon_video").css("display","block");
        $(this).find(".video").css("display","block");
        $(this).find(".icon_galeria").css("display","none");
        $(this).find(".galeria").css("display","none");
        $(this).find(".icon_podcast").css("display","none");
        $(this).find(".podcast").css("display","none");
        $(this).find(".foto").css("display","none");
      }else if(ContentTypeL == "Podcast"){
        $(this).find(".icon_podcast").css("display","block");
        $(this).find(".podcast").css("display","block");
        $(this).find(".icon_video").css("display","none");
        $(this).find(".video").css("display","none");
        $(this).find(".icon_galeria").css("display","none");
        $(this).find(".galeria").css("display","none");
        $(this).find(".foto").css("display","none");
      }else if(ContentTypeL == "Artículo"){
        $(this).find(".icon_video").css("display","none");
        $(this).find(".video").css("display","none");
        $(this).find(".icon_galeria").css("display","none");
        $(this).find(".galeria").css("display","none");
        $(this).find(".icon_podcast").css("display","none");
        $(this).find(".podcast").css("display","none");
        $(this).find(".foto").css("display","block");
      }else if(ContentTypeL == "Infografía"){
        $(this).find(".icon_video").css("display","none");
        $(this).find(".video").css("display","none");
        $(this).find(".icon_galeria").css("display","none");
        $(this).find(".galeria").css("display","none");
        $(this).find(".icon_podcast").css("display","none");
        $(this).find(".podcast").css("display","none");
        $(this).find(".foto").css("display","block");
      }
  });
//Fin iconos notas recientes

//NOTAS INFERIORES
  $(".vista-recientes-footer .views-row").each(function(){
      var ContentTypeL = $(this).find(".tipo").html();
      if(ContentTypeL == "Galería de imagenes"){
        $(this).find(".icon_galeria").css("display","block");
        $(this).find(".galeria").css("display","block");
        $(this).find(".icon_video").css("display","none");
        $(this).find(".video").css("display","none");
        $(this).find(".icon_podcast").css("display","none");
        $(this).find(".podcast").css("display","none");
        $(this).find(".foto").css("display","none");
      }else if(ContentTypeL == "Video"){
        $(this).find(".icon_video").css("display","block");
        $(this).find(".video").css("display","block");
        $(this).find(".icon_galeria").css("display","none");
        $(this).find(".galeria").css("display","none");
        $(this).find(".icon_podcast").css("display","none");
        $(this).find(".podcast").css("display","none");
        $(this).find(".foto").css("display","none");
      }else if(ContentTypeL == "Podcast"){
        $(this).find(".icon_podcast").css("display","block");
        $(this).find(".podcast").css("display","block");
        $(this).find(".icon_video").css("display","none");
        $(this).find(".video").css("display","none");
        $(this).find(".icon_galeria").css("display","none");
        $(this).find(".galeria").css("display","none");
        $(this).find(".foto").css("display","none");
      }else if(ContentTypeL == "Artículo"){
        $(this).find(".icon_video").css("display","none");
        $(this).find(".video").css("display","none");
        $(this).find(".icon_galeria").css("display","none");
        $(this).find(".galeria").css("display","none");
        $(this).find(".icon_podcast").css("display","none");
        $(this).find(".podcast").css("display","none");
        $(this).find(".foto").css("display","block");
      }else if(ContentTypeL == "Infografía"){
        $(this).find(".icon_video").css("display","none");
        $(this).find(".video").css("display","none");
        $(this).find(".icon_galeria").css("display","none");
        $(this).find(".galeria").css("display","none");
        $(this).find(".icon_podcast").css("display","none");
        $(this).find(".podcast").css("display","none");
        $(this).find(".foto").css("display","block");
      }
  });
  //COLOR
  $(".vista-recientes-footer .views-row").each(function(){
    var seccionL = $(this).find(".nota .seccion a").html();
    if(seccionL == "Cúcuta" || seccionL == "Memorias" || seccionL == "Por los barrios"){
      $(this).find(".nota .seccion .color").css({background:"#BA2025"}); 
    }else
    if(seccionL == "Región" || seccionL == "Pamplona" || seccionL == "Ocaña"){
      $(this).find(".nota .seccion .color").css({background:"#F9D821"}); 
    }else
    if(seccionL == "Judicial"){
      $(this).find(".nota .seccion .color").css({background:"#F87917"}); 
    }else
    if(seccionL == "Frontera"){
      $(this).find(".nota .seccion .color").css({background:"#89C33F"}); 
    }else
    if(seccionL == "Actualidad" || seccionL == "Economía" || seccionL == "Política" || seccionL == "Colombia" || seccionL == "Venezuela" || seccionL == "Mundo"){
      $(this).find(".nota .seccion .color").css({background:"#3D9E04"}); 
    }else
    if(seccionL == "Opinión" || seccionL == "Editorial" || seccionL == "Columnistas" || seccionL == "Caricaturas"){
      $(this).find(".nota .seccion .color").css({background:"#BFD63E"}); 
    }else
    if(seccionL == "Deportes" || seccionL == "Cúcuta Deportivo" || seccionL == "Fútbol" || seccionL == "+ Deportes" || seccionL == "Copa América 2015" || seccionL == "Copa América 2016"){
      $(this).find(".nota .seccion .color").css({background:"#3FA6F2"}); 
    }else
    if(seccionL == "Entretenimiento" || seccionL == "Actividad social" || seccionL == "Tecnología" || seccionL == "Cultura" || seccionL == "Cultura" || seccionL == "Tendencias" || seccionL == "Viral" || seccionL == "Vida y salud" || seccion == "Zona verde"){
      $(this).find(".nota .seccion .color").css({background:"#8B7AB5"}); 
    }else
    if(seccionL == "Participación" || seccionL == "Reportero ciudadano" || seccionL == "Así opinan"){
      $(this).find(".nota .seccion .color").css({background:"#C60B77"}); 
    }
  });
  //FIN COLOR
//NOTAS MULTIMEDIA
  $(".view-display-id-block_4 .views-row").each(function(){
      var ContentTypeL = $(this).find(".tipo").html();
      if(ContentTypeL == "Galería de imagenes"){
        $(this).find(".galeria .icon_galeria").css("display","block");
        $(this).find(".galeria .galeria").css("display","block");
        $(this).find(".galeria .icon_video").css("display","none");
        $(this).find(".galeria .video").css("display","none");
        $(this).find(".galeria .icon_podcast").css("display","none");
        $(this).find(".galeria .podcast").css("display","none");
        $(this).find(".galeria .foto").css("display","none");
      }else if(ContentTypeL == "Video"){
        $(this).find(".galeria .icon_video").css("display","block");
        $(this).find(".galeria .video").css("display","block");
        $(this).find(".galeria .icon_galeria").css("display","none");
        $(this).find(".galeria .galeria").css("display","none");
        $(this).find(".galeria .icon_podcast").css("display","none");
        $(this).find(".galeria .podcast").css("display","none");
        $(this).find(".galeria .foto").css("display","none");
      }else if(ContentTypeL == "Podcast"){
        $(this).find(".galeria .icon_podcast").css("display","block");
        $(this).find(".galeria .podcast").css("display","block");
        $(this).find(".galeria .icon_video").css("display","none");
        $(this).find(".galeria .video").css("display","none");
        $(this).find(".galeria .icon_galeria").css("display","none");
        $(this).find(".galeria .galeria").css("display","none");
        $(this).find(".galeria .foto").css("display","none");
      }else if(ContentTypeL == "Infografía"){
        $(this).find(".icon_video").css("display","none");
        $(this).find(".video").css("display","none");
        $(this).find(".icon_galeria").css("display","none");
        $(this).find(".galeria").css("display","none");
        $(this).find(".icon_podcast").css("display","none");
        $(this).find(".podcast").css("display","none");
        $(this).find(".foto").css("display","block");
      }
  });
//COLOR
  $(".view-display-id-block_4 .views-row").each(function(){
    var seccionL = $(this).find(".field-content .seccion a").html();
    if(seccionL == "Cúcuta" || seccionL == "Memorias" || seccionL == "Por los barrios"){
      $(this).find(".field-content .seccion .color").css({background:"#BA2025"}); 
    }else
    if(seccionL == "Región" || seccionL == "Pamplona" || seccionL == "Ocaña"){
      $(this).find(".field-content .seccion .color").css({background:"#F9D821"}); 
    }else
    if(seccionL == "Judicial"){
      $(this).find(".field-content .seccion .color").css({background:"#F87917"}); 
    }else
    if(seccionL == "Frontera"){
      $(this).find(".field-content .seccion .color").css({background:"#89C33F"}); 
    }else
    if(seccionL == "Actualidad" || seccionL == "Economía" || seccionL == "Política" || seccionL == "Colombia" || seccionL == "Venezuela" || seccionL == "Mundo"){
      $(this).find(".field-content .seccion .color").css({background:"#3D9E04"}); 
    }else
    if(seccionL == "Opinión" || seccionL == "Editorial" || seccionL == "Columnistas" || seccionL == "Caricaturas"){
      $(this).find(".field-content .seccion .color").css({background:"#BFD63E"}); 
    }else
    if(seccionL == "Deportes" || seccionL == "Cúcuta Deportivo" || seccionL == "Fútbol" || seccionL == "+ Deportes" || seccionL == "Copa América 2015" || seccionL == "Copa América 2016"){
      $(this).find(".field-content .seccion .color").css({background:"#3FA6F2"}); 
    }else
    if(seccionL == "Entretenimiento" || seccionL == "Actividad social" || seccionL == "Tecnología" || seccionL == "Cultura" || seccionL == "Cultura" || seccionL == "Tendencias" || seccionL == "Viral" || seccionL == "Vida y salud" || seccion == "Zona verde"){
      $(this).find(".field-content .seccion .color").css({background:"#8B7AB5"}); 
    }else
    if(seccionL == "Participación" || seccionL == "Reportero ciudadano" || seccionL == "Así opinan"){
      $(this).find(".field-content .seccion .color").css({background:"#C60B77"}); 
    }
  });
  //FIN COLOR
//PAGINADOR MULTIMEDIA
      var contentM = ".view-recientes.view-display-id-block_4 .view-content";
      function cambiarM(itemM){$(".view-recientes.view-display-id-block_10 .control").css({opacity:"0.8"});$(".view-recientes.view-display-id-block_4 .control" + itemM).css({background:"#f2f2f2"});}
      $(".view-recientes.view-display-id-block_4 .control_left").click(function(){$(contentM).css({left:"20px"});cambiarM(1);});
      $(".view-recientes.view-display-id-block_4 .control_right").click(function(){$(contentM).css({left:"-1115px"});cambiarM(2);});
//FIN MULTIMEDIA
//FIN NOTAS MULTIMEDIA

//FIN NOTAS



// SIDEBAR
  //COLOR
  $(".vista-recientes .views-row").each(function(){
    var seccionL = $(this).find(".field-content .seccion a").html();
    if(seccionL == "Cúcuta" || seccionL == "Memorias" || seccionL == "Por los barrios"){
      $(this).find(".field-content .seccion .color").css({background:"#BA2025"}); 
    }else
    if(seccionL == "Región" || seccionL == "Pamplona" || seccionL == "Ocaña"){
      $(this).find(".field-content .seccion .color").css({background:"#F9D821"}); 
    }else
    if(seccionL == "Judicial"){
      $(this).find(".field-content .seccion .color").css({background:"#F87917"}); 
    }else
    if(seccionL == "Frontera"){
      $(this).find(".field-content .seccion .color").css({background:"#89C33F"}); 
    }else
    if(seccionL == "Actualidad" || seccionL == "Economía" || seccionL == "Política" || seccionL == "Colombia" || seccionL == "Venezuela" || seccionL == "Mundo"){
      $(this).find(".field-content .seccion .color").css({background:"#3D9E04"}); 
    }else
    if(seccionL == "Opinión" || seccionL == "Editorial" || seccionL == "Columnistas" || seccionL == "Caricaturas"){
      $(this).find(".field-content .seccion .color").css({background:"#BFD63E"}); 
    }else
    if(seccionL == "Deportes" || seccionL == "Cúcuta Deportivo" || seccionL == "Fútbol" || seccionL == "+ Deportes" || seccionL == "Copa América 2015" || seccionL == "Copa América 2016"){
      $(this).find(".field-content .seccion .color").css({background:"#3FA6F2"}); 
    }else
    if(seccionL == "Entretenimiento" || seccionL == "Actividad social" || seccionL == "Tecnología" || seccionL == "Cultura" || seccionL == "Cultura" || seccionL == "Tendencias" || seccionL == "Viral" || seccionL == "Vida y salud" || seccion == "Zona verde"){
      $(this).find(".field-content .seccion .color").css({background:"#8B7AB5"}); 
    }else
    if(seccionL == "Participación" || seccionL == "Reportero ciudadano" || seccionL == "Así opinan"){
      $(this).find(".field-content .seccion .color").css({background:"#C60B77"}); 
    }
  });
  //FIN COLOR

//FIN SIDEBAR

//COLOR MAS GALERIAS
  $(".view-id-detalle .views-row").each(function(){
    var seccionL = $(this).find(".field-content .seccion a").html();
    if(seccionL == "Cúcuta" || seccionL == "Memorias" || seccionL == "Por los barrios"){
      $(this).find(".field-content .seccion .color").css({background:"#BA2025"}); 
    }else
    if(seccionL == "Región" || seccionL == "Pamplona" || seccionL == "Ocaña"){
      $(this).find(".field-content .seccion .color").css({background:"#F9D821"}); 
    }else
    if(seccionL == "Judicial"){
      $(this).find(".field-content .seccion .color").css({background:"#F87917"}); 
    }else
    if(seccionL == "Frontera"){
      $(this).find(".field-content .seccion .color").css({background:"#89C33F"}); 
    }else
    if(seccionL == "Actualidad" || seccionL == "Economía" || seccionL == "Política" || seccionL == "Colombia" || seccionL == "Venezuela" || seccionL == "Mundo"){
      $(this).find(".field-content .seccion .color").css({background:"#3D9E04"}); 
    }else
    if(seccionL == "Opinión" || seccionL == "Editorial" || seccionL == "Columnistas" || seccionL == "Caricaturas"){
      $(this).find(".field-content .seccion .color").css({background:"#BFD63E"}); 
    }else
    if(seccionL == "Deportes" || seccionL == "Cúcuta Deportivo" || seccionL == "Fútbol" || seccionL == "+ Deportes" || seccionL == "Copa América 2015" || seccionL == "Copa América 2016"){
      $(this).find(".field-content .seccion .color").css({background:"#3FA6F2"}); 
    }else
    if(seccionL == "Entretenimiento" || seccionL == "Actividad social" || seccionL == "Tecnología" || seccionL == "Cultura" || seccionL == "Cultura" || seccionL == "Tendencias" || seccionL == "Viral" || seccionL == "Vida y salud" || seccion == "Zona verde"){
      $(this).find(".field-content .seccion .color").css({background:"#8B7AB5"}); 
    }else
    if(seccionL == "Participación" || seccionL == "Reportero ciudadano" || seccionL == "Así opinan"){
      $(this).find(".field-content .seccion .color").css({background:"#C60B77"}); 
    }
  });
  //FIN COLOR MAS GALERIAS

//Script player podcast
 var id = $(".contenido .audio_id .field-name-field-podcast-id .field-item").html();
 var audioplayer = "<iframe width=720px height=250 scrolling=no frameborder=no src=https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/" + id + "&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false&amp;visual=true></iframe>";
 $('#podcast .audio-player').append(audioplayer);
//Fin script player podcast

//Script player videos-->
  var id = $("#video .cen .contenido .video_id .field-name-field-video-id .field-item").html();
  var plataforma = $("#video .cen .contenido .plataforma .field-name-field-plataforma .field-item").html();
  var youtubeplayer = "<iframe id=frame-video width=1006 height500 src=http://www.youtube.com/embed/" + id + "?hl=es&fs=1&rel=0&showinfo=0 frameborder=0 allowfullscreen></iframe>";
  var facebookplayer = "<div class=fb-video data-href=https://www.facebook.com/" + id + "/ data-width=1006 data-show-text=false><blockquote cite=https://www.facebook.com/" + id + "/ class=fb-xfbml-parse-ignore><a href=https://www.facebook.com/" + id + "/></a></blockquote></div>";
  var vineplayer = "<iframe src=https://vine.co/v/" + id + "/embed/simple width=1006 height=500 frameborder=0></iframe>";
  var instagramplayer = "<blockquote class=instagram-media data-instgrm-captioned data-instgrm-version=7 style= background:#FFF; border:0; border-radius:3px; box-shadow:0 0 1px 0 rgba(0,0,0,0.5),0 1px 10px 0 rgba(0,0,0,0.15); margin: 1px; max-width:658px; padding:0; width:99.375%; width:-webkit-calc(100% - 2px); width:calc(100% - 2px);><div style=padding:8px;> <div style= background:#F8F8F8; line-height:0; margin-top:40px; padding:28.125% 0; text-align:center; width:100%;> <div style= background:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACwAAAAsCAMAAAApWqozAAAABGdBTUEAALGPC/xhBQAAAAFzUkdCAK7OHOkAAAAMUExURczMzPf399fX1+bm5mzY9AMAAADiSURBVDjLvZXbEsMgCES5/P8/t9FuRVCRmU73JWlzosgSIIZURCjo/ad+EQJJB4Hv8BFt+IDpQoCx1wjOSBFhh2XssxEIYn3ulI/6MNReE07UIWJEv8UEOWDS88LY97kqyTliJKKtuYBbruAyVh5wOHiXmpi5we58Ek028czwyuQdLKPG1Bkb4NnM+VeAnfHqn1k4+GPT6uGQcvu2h2OVuIf/gWUFyy8OWEpdyZSa3aVCqpVoVvzZZ2VTnn2wU8qzVjDDetO90GSy9mVLqtgYSy231MxrY6I2gGqjrTY0L8fxCxfCBbhWrsYYAAAAAElFTkSuQmCC); display:block; height:44px; margin:0 auto -44px; position:relative; top:-22px; width:44px;></div></div> <p style= margin:8px 0 0 0; padding:0 4px;> <a href=https://www.instagram.com/p/" + id + "/ style= color:#000; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:normal; line-height:17px; text-decoration:none; word-wrap:break-word; target=_blank>Te enseñamos a preparar las tajadas de maduro de otra manera. Mira la receta completa en nuestro portal.</a></p> <p style= color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; line-height:17px; margin-bottom:0; margin-top:8px; overflow:hidden; padding:8px 0 7px; text-align:center; text-overflow:ellipsis; white-space:nowrap;>Un vídeo publicado por Deléitese Gastronomia (@deleitese_co) el <time style= font-family:Arial,sans-serif; font-size:14px; line-height:17px; datetime=2016-06-19T20:43:02+00:00>19 de Jun de 2016 a la(s) 1:43 PDT</time></p></div></blockquote>";
  var twitterplayer = "<iframe src=https://twitter.com/i/cards/tfw/v1/"+ id + " width=1006 height=610 frameborder=0></iframe>";

  if(plataforma == "YouTube"){
    $('#video .cen  .contenido .video-player').append(youtubeplayer);
     $('#video .cen .contenido .video-instagram').css("display", "none");
  }else
  if(plataforma == "Facebook"){
    $('#video .cen .contenido .video-player').append(facebookplayer);
     $('#video .cen .contenido .video-instagram').css("display", "none");
  }else
  if(plataforma == "Vine"){
    $('#video .cen .contenido .video-player').append(vineplayer);
     $('#video .cen .contenido .video-instagram').css("display", "none");
  }else
  if(plataforma == "Instagram"){
    $('#video .cen .contenido .video-player').css('display', 'none');
    $('#video .cen .contenido .video-instagram').append(instagramplayer);
  }else
  if(plataforma == "Twitter"){
    $('#video .cen .contenido .video-twitter').append(twitterplayer);
     $('#video .cen .contenido .video-player').css("display", "none");
  }
//Fin script video
//player miniatura
  $(window).scroll(function() {
   var scrolled = $(window).scrollTop();           
    $(".dev").empty().append(scrolled);

    if(scrolled >= "950"){
      $("#video .cen .contenido .video-player iframe").addClass("miniplayer");
      $("#video .cen .contenido .video-player").css({height:"550px"});
      $("#video .cen .contenido .video-twitter iframe").addClass("miniplayer");
      $("#video .cen .contenido .video-twitter").css({height:"610px"});
     }else{
     $("#video .cen .contenido .video-player iframe").removeClass("miniplayer");
     $("#video .cen .contenido .video-player").css({height:"auto"});
     $("#video .cen .contenido .video-twitter iframe").removeClass("miniplayer");
     $("#video .cen .contenido .video-twitter").css({height:"auto"});
     }
  });    


//FIN player miniatura
/*Botones de caricaturas*/
$("#opinion .izq .contenido .caricaturas .paginador .item1").click(function(argument) {
  $("#opinion .izq .contenido .caricaturas .otras").css({top:"0px"})
});

$("#opinion .izq .contenido .caricaturas .paginador .item2").click(function(argument) {
  $("#opinion .izq .contenido .caricaturas .otras").css({top:"-190px"})
});
//----------------------------------------------------------------
$("#caricatura .izq .contenido .mas_caricaturas .paginador .item1").click(function(argument) {
  $("#caricatura .izq .contenido .mas_caricaturas .view-opinion").css({top:"0px"})
});

$("#caricatura .izq .contenido .mas_caricaturas .paginador .item2").click(function(argument) {
  $("#caricatura .izq .contenido .mas_caricaturas .view-opinion").css({top:"-778px"})
  
});
/*Fin boton de caricaturas*/


//COLOR DE LAS SECCIONES
    $(".view-id-s_general .views-row").each(function(){
      var seccionL = $(this).find(".nota .seccion .color").html();
      if(seccionL == "Cúcuta" || seccionL == "Memorias" || seccionL == "Por los barrios"){
        $(this).find(".nota .seccion .color").css({background:"#BA2025"}); 
      }else
      if(seccionL == "Región" || seccionL == "Pamplona" || seccionL == "Ocaña"){
        $(this).find(".nota .seccion .color").css({background:"#F9D821"}); 
      }else
      if(seccionL == "Judicial"){
        $(this).find(".nota .seccion .color").css({background:"#F87917"}); 
      }else
      if(seccionL == "Frontera"){
        $(this).find(".nota .seccion .color").css({background:"#89C33F"}); 
      }else
      if(seccionL == "Actualidad" || seccionL == "Economía" || seccionL == "Política" || seccionL == "Colombia" || seccionL == "Venezuela" || seccionL == "Mundo"){
        $(this).find(".nota .seccion .color").css({background:"#3D9E04"}); 
      }else
      if(seccionL == "Opinión" || seccionL == "Editorial" || seccionL == "Columnistas" || seccionL == "Caricaturas"){
        $(this).find(".nota .seccion .color").css({background:"#BFD63E"}); 
      }else
      if(seccionL == "Deportes" || seccionL == "Cúcuta Deportivo" || seccionL == "Fútbol" || seccionL == "+ Deportes" || seccionL == "Copa América 2015" || seccionL == "Copa América 2016"){
        $(this).find(".nota .seccion .color").css({background:"#3FA6F2"}); 
      }else
      if(seccionL == "Entretenimiento" || seccionL == "Actividad social" || seccionL == "Tecnología" || seccionL == "Cultura" || seccionL == "Cultura" || seccionL == "Tendencias" || seccionL == "Viral" || seccionL == "Vida y salud" || seccion == "Zona verde"){
        $(this).find(".nota .seccion .color").css({background:"#8B7AB5"}); 
      }else
      if(seccionL == "Participación" || seccionL == "Reportero ciudadano" || seccionL == "Así opinan"){
        $(this).find(".nota .seccion .color").css({background:"#C60B77"}); 
      }
    });
/*-----------------------------------------------------------------------------*/
    $(".view-id-s_general_sub .views-row").each(function(){
      var seccionL = $(this).find(".nota .seccion a").html();
      if(seccionL == "Cúcuta" || seccionL == "Memorias" || seccionL == "Por los barrios"){
        $(this).find(".nota .seccion a").css({color:"#BA2025"}); 
      }else
      if(seccionL == "Región" || seccionL == "Pamplona" || seccionL == "Ocaña"){
        $(this).find(".nota .seccion a").css({color:"#F9D821"}); 
      }else
      if(seccionL == "Judicial"){
        $(this).find(".nota .seccion a").css({color:"#F87917"}); 
      }else
      if(seccionL == "Frontera"){
        $(this).find(".nota .seccion a").css({color:"#89C33F"}); 
      }else
      if(seccionL == "Actualidad" || seccionL == "Economía" || seccionL == "Política" || seccionL == "Colombia" || seccionL == "Venezuela" || seccionL == "Mundo"){
        $(this).find(".nota .seccion a").css({color:"#3D9E04"}); 
      }else
      if(seccionL == "Opinión" || seccionL == "Editorial" || seccionL == "Columnistas" || seccionL == "Caricaturas"){
        $(this).find(".nota .seccion a").css({color:"#BFD63E"}); 
      }else
      if(seccionL == "Deportes" || seccionL == "Cúcuta Deportivo" || seccionL == "Fútbol" || seccionL == "+ Deportes" || seccionL == "Copa América 2015" || seccionL == "Copa América 2016"){
        $(this).find(".nota .seccion a").css({color:"#3FA6F2"}); 
      }else
      if(seccionL == "Entretenimiento" || seccionL == "Actividad social" || seccionL == "Tecnología" || seccionL == "Cultura" || seccionL == "Cultura" || seccionL == "Tendencias" || seccionL == "Viral" || seccionL == "Vida y salud" || seccion == "Zona verde"){
        $(this).find(".nota .seccion a").css({color:"#8B7AB5"}); 
      }else
      if(seccionL == "Participación" || seccionL == "Reportero ciudadano" || seccionL == "Así opinan"){
        $(this).find(".nota .seccion a").css({color:"#C60B77"}); 
      }
    });

    var nomSeccion = $("#secciones .izq .view-display-id-block .nota .seccion .color").text();
    if(nomSeccion == "Cúcuta" || nomSeccion == "Memorias" || nomSeccion == "Por los barrios"){
        $(".mid .view-header .subseccion .color").css({background:"#BA2025"}); 
    }else
    if(nomSeccion == "Región" || nomSeccion == "Pamplona" || nomSeccion == "Ocaña"){
      $(".mid .view-header .subseccion .color").css({background:"#F9D821"}); 
    }else
    if(nomSeccion == "Judicial"){
      $(".mid .view-header .subseccion .color").css({background:"#F87917"}); 
    }else
    if(nomSeccion == "Frontera"){
      $(".mid .view-header .subseccion .color").css({background:"#89C33F"}); 
    }else
    if(nomSeccion == "Actualidad" || nomSeccion == "Economía" || nomSeccion == "Política" || nomSeccion == "Colombia" || nomSeccion == "Venezuela" || nomSeccion == "Mundo"){
      $(".mid .view-header .subseccion .color").css({background:"#3D9E04"}); 
    }else
    if(nomSeccion == "Opinión" || nomSeccion == "Editorial" || nomSeccion == "Columnistas" || nomSeccion == "Caricaturas"){
      $(".mid .view-header .subseccion .color").css({background:"#BFD63E"}); 
    }else
    if(nomSeccion == "Deportes" || nomSeccion == "Cúcuta Deportivo" || nomSeccion == "Fútbol" || nomSeccion == "+ Deportes" || nomSeccion == "Copa América 2015" || nomSeccion == "Copa América 2016"){
      $(".mid .view-header .subseccion .color").css({background:"#3FA6F2"}); 
    }else
    if(nomSeccion == "Entretenimiento" || nomSeccion == "Actividad social" || nomSeccion == "Tecnología" || nomSeccion == "Cultura" || nomSeccion == "Cultura" || nomSeccion == "Tendencias" || nomSeccion == "Viral" || nomSeccion == "Vida y salud" || seccion == "Zona verde"){
      $(".mid .view-header .subseccion .color").css({background:"#8B7AB5"}); 
    }else
    if(nomSeccion == "Participación" || nomSeccion == "Reportero ciudadano" || nomSeccion == "Así opinan"){
      $(".mid .view-header .subseccion .color").css({background:"#C60B77"}); 
    }
//FIN COLOR SECCIONES


//COLOR DE LA SECCION DE TAGS
    $("#tags .content  .view-tags.view-id-tags .views-row").each(function(){
      var seccionT = $(this).find(".nota .seccion .color").html();
      if(seccionT == "Cúcuta" || seccionT == "Memorias" || seccionT == "Por los barrios"){
        $(this).find(".nota .seccion .color").css({background:"#BA2025"}); 
      }else
      if(seccionT == "Región" || seccionT == "Pamplona" || seccionT == "Ocaña"){
        $(this).find(".nota .seccion .color").css({background:"#F9D821"}); 
      }else
      if(seccionT == "Judicial"){
        $(this).find(".nota .seccion .color").css({background:"#F87917"}); 
      }else
      if(seccionT == "Frontera"){
        $(this).find(".nota .seccion .color").css({background:"#89C33F"}); 
      }else
      if(seccionT == "Actualidad" || seccionT == "Economía" || seccionT == "Política" || seccionT == "Colombia" || seccionT == "Venezuela" || seccionT == "Mundo"){
        $(this).find(".nota .seccion .color").css({background:"#3D9E04"}); 
      }else
      if(seccionT == "Opinión" || seccionT == "Editorial" || seccionT == "Columnistas" || seccionT == "Caricaturas"){
        $(this).find(".nota .seccion .color").css({background:"#BFD63E"}); 
      }else
      if(seccionT == "Deportes" || seccionT == "Cúcuta Deportivo" || seccionT == "Fútbol" || seccionT == "+ Deportes" || seccionT == "Copa América 2015" || seccionT == "Copa América 2016"){
        $(this).find(".nota .seccion .color").css({background:"#3FA6F2"}); 
      }else
      if(seccionT == "Entretenimiento" || seccionT == "Actividad social" || seccionT == "Tecnología" || seccionT == "Cultura" || seccionT == "Cultura" || seccionT == "Tendencias" || seccionT == "Viral" || seccionT == "Vida y salud" || seccion == "Zona verde"){
        $(this).find(".nota .seccion .color").css({background:"#8B7AB5"}); 
      }else
      if(seccionT == "Participación" || seccionT == "Reportero ciudadano" || seccionT == "Así opinan"){
        $(this).find(".nota .seccion .color").css({background:"#C60B77"}); 
      }
    });
/*-----------------------------------------------------------------------------*/
//FIN COLOR SECCION TAGS

//NOTAS SECCION TAGS
  $("#tags .content .view-tags.view-id-tags .views-row").each(function(){
      var ContentTypeL = $(this).find(".nota .tipo").html();
      if(ContentTypeL == "Galería de imagenes"){
        $(this).find(".nota .icon_galeria").css("display","block");
        $(this).find(".nota .galeria").css("display","block");
        $(this).find(".nota .icon_video").css("display","none");
        $(this).find(".nota .video").css("display","none");
        $(this).find(".nota .icon_podcast").css("display","none");
        $(this).find(".nota .podcast").css("display","none");
        $(this).find(".nota .foto").css("display","none");
      }else if(ContentTypeL == "Video"){
        $(this).find(".nota .icon_video").css("display","block");
        $(this).find(".nota .video").css("display","block");
        $(this).find(".nota .icon_galeria").css("display","none");
        $(this).find(".nota .galeria").css("display","none");
        $(this).find(".nota .icon_podcast").css("display","none");
        $(this).find(".nota .podcast").css("display","none");
        $(this).find(".nota .foto").css("display","none");
      }else if(ContentTypeL == "Podcast"){
        $(this).find(".nota .icon_podcast").css("display","block");
        $(this).find(".nota .podcast").css("display","block");
        $(this).find(".nota .icon_video").css("display","none");
        $(this).find(".nota .video").css("display","none");
        $(this).find(".nota .icon_galeria").css("display","none");
        $(this).find(".nota .galeria").css("display","none");
        $(this).find(".nota .foto").css("display","none");
      }else if(ContentTypeL == "Infografía"){
        $(this).find(".icon_video").css("display","none");
        $(this).find(".video").css("display","none");
        $(this).find(".icon_galeria").css("display","none");
        $(this).find(".galeria").css("display","none");
        $(this).find(".icon_podcast").css("display","none");
        $(this).find(".podcast").css("display","none");
        $(this).find(".foto").css("display","block");
      }
  });
//FIN NOTAS SECCION TAGS

//COlOR MULTIMEDIA

  //Inicio videos
  $("#videos .content  .view-display-id-block_0 .views-row").each(function(){
      var seccionT = $(this).find(".nota .seccion .color").html();
      if(seccionT == "Cúcuta" || seccionT == "Memorias" || seccionT == "Por los barrios"){
        $(this).find(".nota .seccion .color").css({background:"#BA2025"}); 
      }else
      if(seccionT == "Región" || seccionT == "Pamplona" || seccionT == "Ocaña"){
        $(this).find(".nota .seccion .color").css({background:"#F9D821"}); 
      }else
      if(seccionT == "Judicial"){
        $(this).find(".nota .seccion .color").css({background:"#F87917"}); 
      }else
      if(seccionT == "Frontera"){
        $(this).find(".nota .seccion .color").css({background:"#89C33F"}); 
      }else
      if(seccionT == "Actualidad" || seccionT == "Economía" || seccionT == "Política" || seccionT == "Colombia" || seccionT == "Venezuela" || seccionT == "Mundo"){
        $(this).find(".nota .seccion .color").css({background:"#3D9E04"}); 
      }else
      if(seccionT == "Opinión" || seccionT == "Editorial" || seccionT == "Columnistas" || seccionT == "Caricaturas"){
        $(this).find(".nota .seccion .color").css({background:"#BFD63E"}); 
      }else
      if(seccionT == "Deportes" || seccionT == "Cúcuta Deportivo" || seccionT == "Fútbol" || seccionT == "+ Deportes" || seccionT == "Copa América 2015" || seccionT == "Copa América 2016"){
        $(this).find(".nota .seccion .color").css({background:"#3FA6F2"}); 
      }else
      if(seccionT == "Entretenimiento" || seccionT == "Actividad social" || seccionT == "Tecnología" || seccionT == "Cultura" || seccionT == "Cultura" || seccionT == "Tendencias" || seccionT == "Viral" || seccionT == "Vida y salud" || seccion == "Zona verde"){
        $(this).find(".nota .seccion .color").css({background:"#8B7AB5"}); 
      }else
      if(seccionT == "Participación" || seccionT == "Reportero ciudadano" || seccionT == "Así opinan"){
        $(this).find(".nota .seccion .color").css({background:"#C60B77"}); 
      }
    });

  $("#videos .content .view-display-id-block_0 .views-row").each(function(){
        $(this).find(".nota .icon_video").css("display","block");
  });//FIn videos

  //Inicio podcast
  $("#podcasts .content  .view-display-id-block_1 .views-row").each(function(){
      var seccionT = $(this).find(".nota .seccion .color").html();
      if(seccionT == "Cúcuta" || seccionT == "Memorias" || seccionT == "Por los barrios"){
        $(this).find(".nota .seccion .color").css({background:"#BA2025"}); 
      }else
      if(seccionT == "Región" || seccionT == "Pamplona" || seccionT == "Ocaña"){
        $(this).find(".nota .seccion .color").css({background:"#F9D821"}); 
      }else
      if(seccionT == "Judicial"){
        $(this).find(".nota .seccion .color").css({background:"#F87917"}); 
      }else
      if(seccionT == "Frontera"){
        $(this).find(".nota .seccion .color").css({background:"#89C33F"}); 
      }else
      if(seccionT == "Actualidad" || seccionT == "Economía" || seccionT == "Política" || seccionT == "Colombia" || seccionT == "Venezuela" || seccionT == "Mundo"){
        $(this).find(".nota .seccion .color").css({background:"#3D9E04"}); 
      }else
      if(seccionT == "Opinión" || seccionT == "Editorial" || seccionT == "Columnistas" || seccionT == "Caricaturas"){
        $(this).find(".nota .seccion .color").css({background:"#BFD63E"}); 
      }else
      if(seccionT == "Deportes" || seccionT == "Cúcuta Deportivo" || seccionT == "Fútbol" || seccionT == "+ Deportes" || seccionT == "Copa América 2015" || seccionT == "Copa América 2016"){
        $(this).find(".nota .seccion .color").css({background:"#3FA6F2"}); 
      }else
      if(seccionT == "Entretenimiento" || seccionT == "Actividad social" || seccionT == "Tecnología" || seccionT == "Cultura" || seccionT == "Cultura" || seccionT == "Tendencias" || seccionT == "Viral" || seccionT == "Vida y salud" || seccion == "Zona verde"){
        $(this).find(".nota .seccion .color").css({background:"#8B7AB5"}); 
      }else
      if(seccionT == "Participación" || seccionT == "Reportero ciudadano" || seccionT == "Así opinan"){
        $(this).find(".nota .seccion .color").css({background:"#C60B77"}); 
      }
    });

  $("#podcasts .content .view-display-id-block_1 .views-row").each(function(){
        $(this).find(".nota .icon_podcast").css("display","block");
  });//FIn podcast

  //Inicio galerias
  $("#galerias .content  .view-display-id-block_2 .views-row").each(function(){
      var seccionT = $(this).find(".nota .seccion .color").html();
      if(seccionT == "Cúcuta" || seccionT == "Memorias" || seccionT == "Por los barrios"){
        $(this).find(".nota .seccion .color").css({background:"#BA2025"}); 
      }else
      if(seccionT == "Región" || seccionT == "Pamplona" || seccionT == "Ocaña"){
        $(this).find(".nota .seccion .color").css({background:"#F9D821"}); 
      }else
      if(seccionT == "Judicial"){
        $(this).find(".nota .seccion .color").css({background:"#F87917"}); 
      }else
      if(seccionT == "Frontera"){
        $(this).find(".nota .seccion .color").css({background:"#89C33F"}); 
      }else
      if(seccionT == "Actualidad" || seccionT == "Economía" || seccionT == "Política" || seccionT == "Colombia" || seccionT == "Venezuela" || seccionT == "Mundo"){
        $(this).find(".nota .seccion .color").css({background:"#3D9E04"}); 
      }else
      if(seccionT == "Opinión" || seccionT == "Editorial" || seccionT == "Columnistas" || seccionT == "Caricaturas"){
        $(this).find(".nota .seccion .color").css({background:"#BFD63E"}); 
      }else
      if(seccionT == "Deportes" || seccionT == "Cúcuta Deportivo" || seccionT == "Fútbol" || seccionT == "+ Deportes" || seccionT == "Copa América 2015" || seccionT == "Copa América 2016"){
        $(this).find(".nota .seccion .color").css({background:"#3FA6F2"}); 
      }else
      if(seccionT == "Entretenimiento" || seccionT == "Actividad social" || seccionT == "Tecnología" || seccionT == "Cultura" || seccionT == "Cultura" || seccionT == "Tendencias" || seccionT == "Viral" || seccionT == "Vida y salud" || seccion == "Zona verde"){
        $(this).find(".nota .seccion .color").css({background:"#8B7AB5"}); 
      }else
      if(seccionT == "Participación" || seccionT == "Reportero ciudadano" || seccionT == "Así opinan"){
        $(this).find(".nota .seccion .color").css({background:"#C60B77"}); 
      }
    });

  $("#galerias .content .view-display-id-block_2 .views-row").each(function(){
        $(this).find(".nota .icon_galeria").css("display","block");
  });//FIn galerias

  //Inicio infografias
  $("#infografias .content  .view-display-id-block_3 .views-row").each(function(){
      var seccionT = $(this).find(".nota .seccion .color").html();
      if(seccionT == "Cúcuta" || seccionT == "Memorias" || seccionT == "Por los barrios"){
        $(this).find(".nota .seccion .color").css({background:"#BA2025"}); 
      }else
      if(seccionT == "Región" || seccionT == "Pamplona" || seccionT == "Ocaña"){
        $(this).find(".nota .seccion .color").css({background:"#F9D821"}); 
      }else
      if(seccionT == "Judicial"){
        $(this).find(".nota .seccion .color").css({background:"#F87917"}); 
      }else
      if(seccionT == "Frontera"){
        $(this).find(".nota .seccion .color").css({background:"#89C33F"}); 
      }else
      if(seccionT == "Actualidad" || seccionT == "Economía" || seccionT == "Política" || seccionT == "Colombia" || seccionT == "Venezuela" || seccionT == "Mundo"){
        $(this).find(".nota .seccion .color").css({background:"#3D9E04"}); 
      }else
      if(seccionT == "Opinión" || seccionT == "Editorial" || seccionT == "Columnistas" || seccionT == "Caricaturas"){
        $(this).find(".nota .seccion .color").css({background:"#BFD63E"}); 
      }else
      if(seccionT == "Deportes" || seccionT == "Cúcuta Deportivo" || seccionT == "Fútbol" || seccionT == "+ Deportes" || seccionT == "Copa América 2015" || seccionT == "Copa América 2016"){
        $(this).find(".nota .seccion .color").css({background:"#3FA6F2"}); 
      }else
      if(seccionT == "Entretenimiento" || seccionT == "Actividad social" || seccionT == "Tecnología" || seccionT == "Cultura" || seccionT == "Cultura" || seccionT == "Tendencias" || seccionT == "Viral" || seccionT == "Vida y salud" || seccion == "Zona verde"){
        $(this).find(".nota .seccion .color").css({background:"#8B7AB5"}); 
      }else
      if(seccionT == "Participación" || seccionT == "Reportero ciudadano" || seccionT == "Así opinan"){
        $(this).find(".nota .seccion .color").css({background:"#C60B77"}); 
      }
    });//Fin Infografias

   //Inicio seccion multimedia
  $("#multimedia .content  .view-display-id-block_4 .views-row").each(function(){
      var seccionT = $(this).find(".nota .seccion .color").html();
      if(seccionT == "Cúcuta" || seccionT == "Memorias" || seccionT == "Por los barrios"){
        $(this).find(".nota .seccion .color").css({background:"#BA2025"}); 
      }else
      if(seccionT == "Región" || seccionT == "Pamplona" || seccionT == "Ocaña"){
        $(this).find(".nota .seccion .color").css({background:"#F9D821"}); 
      }else
      if(seccionT == "Judicial"){
        $(this).find(".nota .seccion .color").css({background:"#F87917"}); 
      }else
      if(seccionT == "Frontera"){
        $(this).find(".nota .seccion .color").css({background:"#89C33F"}); 
      }else
      if(seccionT == "Actualidad" || seccionT == "Economía" || seccionT == "Política" || seccionT == "Colombia" || seccionT == "Venezuela" || seccionT == "Mundo"){
        $(this).find(".nota .seccion .color").css({background:"#3D9E04"}); 
      }else
      if(seccionT == "Opinión" || seccionT == "Editorial" || seccionT == "Columnistas" || seccionT == "Caricaturas"){
        $(this).find(".nota .seccion .color").css({background:"#BFD63E"}); 
      }else
      if(seccionT == "Deportes" || seccionT == "Cúcuta Deportivo" || seccionT == "Fútbol" || seccionT == "+ Deportes" || seccionT == "Copa América 2015" || seccionT == "Copa América 2016"){
        $(this).find(".nota .seccion .color").css({background:"#3FA6F2"}); 
      }else
      if(seccionT == "Entretenimiento" || seccionT == "Actividad social" || seccionT == "Tecnología" || seccionT == "Cultura" || seccionT == "Cultura" || seccionT == "Tendencias" || seccionT == "Viral" || seccionT == "Vida y salud" || seccion == "Zona verde"){
        $(this).find(".nota .seccion .color").css({background:"#8B7AB5"}); 
      }else
      if(seccionT == "Participación" || seccionT == "Reportero ciudadano" || seccionT == "Así opinan"){
        $(this).find(".nota .seccion .color").css({background:"#C60B77"}); 
      }
    });

  $("#multimedia .content .view-display-id-block_4 .views-row").each(function(){
      var ContentTypeL = $(this).find(".nota .tipo").html();
      if(ContentTypeL == "Galería de imagenes"){
        $(this).find(".nota .icon_galeria").css("display","block");
        $(this).find(".nota .galeria").css("display","block");
        $(this).find(".nota .icon_video").css("display","none");
        $(this).find(".nota .video").css("display","none");
        $(this).find(".nota .icon_podcast").css("display","none");
        $(this).find(".nota .podcast").css("display","none");
        $(this).find(".nota .foto").css("display","none");
      }else if(ContentTypeL == "Video"){
        $(this).find(".nota .icon_video").css("display","block");
        $(this).find(".nota .video").css("display","block");
        $(this).find(".nota .icon_galeria").css("display","none");
        $(this).find(".nota .galeria").css("display","none");
        $(this).find(".nota .icon_podcast").css("display","none");
        $(this).find(".nota .podcast").css("display","none");
        $(this).find(".nota .foto").css("display","none");
      }else if(ContentTypeL == "Podcast"){
        $(this).find(".nota .icon_podcast").css("display","block");
        $(this).find(".nota .podcast").css("display","block");
        $(this).find(".nota .icon_video").css("display","none");
        $(this).find(".nota .video").css("display","none");
        $(this).find(".nota .icon_galeria").css("display","none");
        $(this).find(".nota .galeria").css("display","none");
        $(this).find(".nota .foto").css("display","none");
      }else if(ContentTypeL == "Infografía"){
        $(this).find(".icon_video").css("display","none");
        $(this).find(".video").css("display","none");
        $(this).find(".icon_galeria").css("display","none");
        $(this).find(".galeria").css("display","none");
        $(this).find(".icon_podcast").css("display","none");
        $(this).find(".podcast").css("display","none");
        $(this).find(".foto").css("display","block");
      }
  });//FIn seccion multimedia

//FIN COLOR MULTIMEDIA


/*Validacion si existe submenu*/
if($("#secciones .menu_seccion .submenu ul li").length == 0 ){
  $("#secciones .menu_seccion .submenu").css("height","0");
}
/*Fin validacion*/

/*ICONOS DE LAS SECCIONES*/
//DESTACADA SECCIÓN
    var tipoS = $(".view-id-s_general.view-display-id-block .nota .tipo").html();
    if(tipoS == "Artículo"){
      $(".view-id-s_general.view-display-id-block .nota .icon_galeria").css({display:"none"}); 
      $(".view-id-s_general.view-display-id-block .nota .icon_video").css({display:"none"});
      $(".view-id-s_general.view-display-id-block .nota .galeria").css({display:"none"}); 
      $(".view-id-s_general.view-display-id-block .nota .video").css({display:"none"}); 
      $(".view-id-s_general.view-display-id-block .nota .foto").css({display:"block"});
        }else
    if(tipoS == "Galería de imagenes"){
      $(".view-id-s_general.view-display-id-block .nota .icon_galeria").css({display:"block"});
      $(".view-id-s_general.view-display-id-block .nota .icon_video").css({display:"none"});
      $(".view-id-s_general.view-display-id-block .nota .galeria").css({display:"block"});
      $(".view-id-s_general.view-display-id-block .nota .foto").css({display:"none"});
        }else 
    if(tipoS == "Video"){
      $(".view-id-s_general.view-display-id-block .nota .video").css({display:"block"});
      $(".view-id-s_general.view-display-id-block .nota .icon_video").css({display:"block"});
      $(".view-id-s_general.view-display-id-block .nota .icon_galeria").css({display:"none"});
      $(".view-id-s_general.view-display-id-block .nota .galeria").css({display:"none"});
      $(".view-id-s_general.view-display-id-block .nota .foto").css({display:"none"});
        }else 
    if(tipoS == "Podcast"){
      $(".view-id-s_general.view-display-id-block .nota .podcast").css({display:"block"});
      $(".view-id-s_general.view-display-id-block .nota .icon_podcast").css({display:"block"});
      $(".view-id-s_general.view-display-id-block .nota .video").css({display:"none"});
      $(".view-id-s_general.view-display-id-block .nota .icon_video").css({display:"none"});
      $(".view-id-s_general.view-display-id-block .nota .icon_galeria").css({display:"none"});
      $(".view-id-s_general.view-display-id-block .nota .galeria").css({display:"none"});
      $(".view-id-s_general.view-display-id-block .nota .foto").css({display:"none"});
        }else 
    if(tipoS == "Infografía"){
      $(".view-id-s_general.view-display-id-block .nota .video").css({display:"none"});
      $(".view-id-s_general.view-display-id-block .nota .icon_video").css({display:"none"});
      $(".view-id-s_general.view-display-id-block .nota .icon_galeria").css({display:"none"});
      $(".view-id-s_general.view-display-id-block .nota .galeria").css({display:"none"});
      $(".view-id-s_general.view-display-id-block .nota .icon_podcast").css({display:"none"});
      $(".view-id-s_general.view-display-id-block .nota .podcast").css({display:"none"});
      $(".view-id-s_general.view-display-id-block .nota .foto").css({display:"block"});
    }


//Notas lado derecho secciones 
$(".view-id-s_general.view-display-id-block_1 .views-row").each(function(){
      var ContentTypeL = $(this).find(".tipo").html();
      if(ContentTypeL == "Galería de imagenes"){
        $(this).find(".nota .icon_galeria").css("display","block");
        $(this).find(".nota .galeria").css("display","block");
        $(this).find(".nota .icon_video").css("display","none");
        $(this).find(".nota .video").css("display","none");
        $(this).find(".nota .icon_podcast").css("display","none");
        $(this).find(".nota .podcast").css("display","none");
        $(this).find(".nota .foto").css("display","none");
      }else if(ContentTypeL == "Video"){
        $(this).find(".nota .icon_video").css("display","block");
        $(this).find(".nota .video").css("display","block");
        $(this).find(".nota .icon_galeria").css("display","none");
        $(this).find(".nota .galeria").css("display","none");
        $(this).find(".nota .icon_podcast").css("display","none");
        $(this).find(".nota .podcast").css("display","none");
        $(this).find(".nota .foto").css("display","none");
      }else if(ContentTypeL == "Podcast"){
        $(this).find(".nota .icon_podcast").css("display","block");
        $(this).find(".nota .podcast").css("display","block");
        $(this).find(".nota .icon_video").css("display","none");
        $(this).find(".nota .video").css("display","none");
        $(this).find(".nota .icon_galeria").css("display","none");
        $(this).find(".nota .galeria").css("display","none");
        $(this).find(".nota .foto").css("display","none");
      }else if(ContentTypeL == "Infografía"){
        $(this).find(".icon_video").css("display","none");
        $(this).find(".video").css("display","none");
        $(this).find(".icon_galeria").css("display","none");
        $(this).find(".galeria").css("display","none");
        $(this).find(".icon_podcast").css("display","none");
        $(this).find(".podcast").css("display","none");
        $(this).find(".foto").css("display","block");
      }
  });
//Fin notas lado derecho secciones
//2 notas horizontales despues de la destacada
$(".view-id-s_general.view-display-id-block_2 .views-row").each(function(){
      var ContentTypeL = $(this).find(".tipo").html();
      if(ContentTypeL == "Galería de imagenes"){
        $(this).find(".nota .icon_galeria").css("display","block");
        $(this).find(".nota .galeria").css("display","block");
        $(this).find(".nota .icon_video").css("display","none");
        $(this).find(".nota .video").css("display","none");
        $(this).find(".nota .icon_podcast").css("display","none");
        $(this).find(".nota .podcast").css("display","none");
        $(this).find(".nota .foto").css("display","none");
      }else if(ContentTypeL == "Video"){
        $(this).find(".nota .icon_video").css("display","block");
        $(this).find(".nota .video").css("display","block");
        $(this).find(".nota .icon_galeria").css("display","none");
        $(this).find(".nota .galeria").css("display","none");
        $(this).find(".nota .icon_podcast").css("display","none");
        $(this).find(".nota .podcast").css("display","none");
        $(this).find(".nota .foto").css("display","none");
      }else if(ContentTypeL == "Podcast"){
        $(this).find(".nota .icon_podcast").css("display","block");
        $(this).find(".nota .podcast").css("display","block");
        $(this).find(".nota .icon_video").css("display","none");
        $(this).find(".nota .video").css("display","none");
        $(this).find(".nota .icon_galeria").css("display","none");
        $(this).find(".nota .galeria").css("display","none");
        $(this).find(".nota .foto").css("display","none");
      }else if(ContentTypeL == "Infografía"){
        $(this).find(".icon_video").css("display","none");
        $(this).find(".video").css("display","none");
        $(this).find(".icon_galeria").css("display","none");
        $(this).find(".galeria").css("display","none");
        $(this).find(".icon_podcast").css("display","none");
        $(this).find(".podcast").css("display","none");
        $(this).find(".foto").css("display","block");
      }
  });
//Fin 2 notas horizontales despues de la destacada
//Mas noticias
$(".view-id-s_general.view-display-id-block_4 .views-row").each(function(){
      var ContentTypeL = $(this).find(".tipo").html();
      if(ContentTypeL == "Galería de imagenes"){
        $(this).find(".nota .icon_galeria").css("display","block");
        $(this).find(".nota .galeria").css("display","block");
        $(this).find(".nota .icon_video").css("display","none");
        $(this).find(".nota .video").css("display","none");
        $(this).find(".nota .icon_podcast").css("display","none");
        $(this).find(".nota .podcast").css("display","none");
        $(this).find(".nota .foto").css("display","none");
      }else if(ContentTypeL == "Video"){
        $(this).find(".nota .icon_video").css("display","block");
        $(this).find(".nota .video").css("display","block");
        $(this).find(".nota .icon_galeria").css("display","none");
        $(this).find(".nota .galeria").css("display","none");
        $(this).find(".nota .icon_podcast").css("display","none");
        $(this).find(".nota .podcast").css("display","none");
        $(this).find(".nota .foto").css("display","none");
      }else if(ContentTypeL == "Podcast"){
        $(this).find(".nota .icon_podcast").css("display","block");
        $(this).find(".nota .podcast").css("display","block");
        $(this).find(".nota .icon_video").css("display","none");
        $(this).find(".nota .video").css("display","none");
        $(this).find(".nota .icon_galeria").css("display","none");
        $(this).find(".nota .galeria").css("display","none");
        $(this).find(".nota .foto").css("display","none");
      }else if(ContentTypeL == "Infografía"){
        $(this).find(".icon_video").css("display","none");
        $(this).find(".video").css("display","none");
        $(this).find(".icon_galeria").css("display","none");
        $(this).find(".galeria").css("display","none");
        $(this).find(".icon_podcast").css("display","none");
        $(this).find(".podcast").css("display","none");
        $(this).find(".foto").css("display","block");
      }
  });
//Fin noticias
//notas horizontales por los barrios
$(".view-id-s_general_sub.view-display-id-block_2 .views-row").each(function(){
      var ContentTypeL = $(this).find(".tipo").html();
      if(ContentTypeL == "Galería de imagenes"){
        $(this).find(".nota .icon_galeria").css("display","block");
        $(this).find(".nota .galeria").css("display","block");
        $(this).find(".nota .icon_video").css("display","none");
        $(this).find(".nota .video").css("display","none");
        $(this).find(".nota .icon_podcast").css("display","none");
        $(this).find(".nota .podcast").css("display","none");
        $(this).find(".nota .foto").css("display","none");
      }else if(ContentTypeL == "Video"){
        $(this).find(".nota .icon_video").css("display","block");
        $(this).find(".nota .video").css("display","block");
        $(this).find(".nota .icon_galeria").css("display","none");
        $(this).find(".nota .galeria").css("display","none");
        $(this).find(".nota .icon_podcast").css("display","none");
        $(this).find(".nota .podcast").css("display","none");
        $(this).find(".nota .foto").css("display","none");
      }else if(ContentTypeL == "Podcast"){
        $(this).find(".nota .icon_podcast").css("display","block");
        $(this).find(".nota .podcast").css("display","block");
        $(this).find(".nota .icon_video").css("display","none");
        $(this).find(".nota .video").css("display","none");
        $(this).find(".nota .icon_galeria").css("display","none");
        $(this).find(".nota .galeria").css("display","none");
        $(this).find(".nota .foto").css("display","none");
      }else if(ContentTypeL == "Infografía"){
        $(this).find(".icon_video").css("display","none");
        $(this).find(".video").css("display","none");
        $(this).find(".icon_galeria").css("display","none");
        $(this).find(".galeria").css("display","none");
        $(this).find(".icon_podcast").css("display","none");
        $(this).find(".podcast").css("display","none");
        $(this).find(".foto").css("display","block");
      }
});
//Fin notas horizontales por los barrios
//notas horizontales ocaña
$(".view-id-s_general_sub.view-display-id-block_1 .views-row").each(function(){
      var ContentTypeL = $(this).find(".tipo").html();
      if(ContentTypeL == "Galería de imagenes"){
        $(this).find(".nota .icon_galeria").css("display","block");
        $(this).find(".nota .galeria").css("display","block");
        $(this).find(".nota .icon_video").css("display","none");
        $(this).find(".nota .video").css("display","none");
        $(this).find(".nota .icon_podcast").css("display","none");
        $(this).find(".nota .podcast").css("display","none");
        $(this).find(".nota .foto").css("display","none");
      }else if(ContentTypeL == "Video"){
        $(this).find(".nota .icon_video").css("display","block");
        $(this).find(".nota .video").css("display","block");
        $(this).find(".nota .icon_galeria").css("display","none");
        $(this).find(".nota .galeria").css("display","none");
        $(this).find(".nota .icon_podcast").css("display","none");
        $(this).find(".nota .podcast").css("display","none");
        $(this).find(".nota .foto").css("display","none");
      }else if(ContentTypeL == "Podcast"){
        $(this).find(".nota .icon_podcast").css("display","block");
        $(this).find(".nota .podcast").css("display","block");
        $(this).find(".nota .icon_video").css("display","none");
        $(this).find(".nota .video").css("display","none");
        $(this).find(".nota .icon_galeria").css("display","none");
        $(this).find(".nota .galeria").css("display","none");
        $(this).find(".nota .foto").css("display","none");
      }else if(ContentTypeL == "Infografía"){
        $(this).find(".icon_video").css("display","none");
        $(this).find(".video").css("display","none");
        $(this).find(".icon_galeria").css("display","none");
        $(this).find(".galeria").css("display","none");
        $(this).find(".icon_podcast").css("display","none");
        $(this).find(".podcast").css("display","none");
        $(this).find(".foto").css("display","block");
      }
});
//Fin notas horizontales ocaña
//notas horizontales pamplona
$(".view-id-s_general_sub.view-display-id-block_3 .views-row").each(function(){
      var ContentTypeL = $(this).find(".tipo").html();
      if(ContentTypeL == "Galería de imagenes"){
        $(this).find(".nota .icon_galeria").css("display","block");
        $(this).find(".nota .galeria").css("display","block");
        $(this).find(".nota .icon_video").css("display","none");
        $(this).find(".nota .video").css("display","none");
        $(this).find(".nota .icon_podcast").css("display","none");
        $(this).find(".nota .podcast").css("display","none");
        $(this).find(".nota .foto").css("display","none");
      }else if(ContentTypeL == "Video"){
        $(this).find(".nota .icon_video").css("display","block");
        $(this).find(".nota .video").css("display","block");
        $(this).find(".nota .icon_galeria").css("display","none");
        $(this).find(".nota .galeria").css("display","none");
        $(this).find(".nota .icon_podcast").css("display","none");
        $(this).find(".nota .podcast").css("display","none");
        $(this).find(".nota .foto").css("display","none");
      }else if(ContentTypeL == "Podcast"){
        $(this).find(".nota .icon_podcast").css("display","block");
        $(this).find(".nota .podcast").css("display","block");
        $(this).find(".nota .icon_video").css("display","none");
        $(this).find(".nota .video").css("display","none");
        $(this).find(".nota .icon_galeria").css("display","none");
        $(this).find(".nota .galeria").css("display","none");
        $(this).find(".nota .foto").css("display","none");
      }else if(ContentTypeL == "Infografía"){
        $(this).find(".icon_video").css("display","none");
        $(this).find(".video").css("display","none");
        $(this).find(".icon_galeria").css("display","none");
        $(this).find(".galeria").css("display","none");
        $(this).find(".icon_podcast").css("display","none");
        $(this).find(".podcast").css("display","none");
        $(this).find(".foto").css("display","block");
      }
});
//Fin notas horizontales pamplona
//notas horizontales region
$(".view-id-s_general_sub.view-display-id-block_4 .views-row").each(function(){
      var ContentTypeL = $(this).find(".tipo").html();
      if(ContentTypeL == "Galería de imagenes"){
        $(this).find(".nota .icon_galeria").css("display","block");
        $(this).find(".nota .galeria").css("display","block");
        $(this).find(".nota .icon_video").css("display","none");
        $(this).find(".nota .video").css("display","none");
        $(this).find(".nota .icon_podcast").css("display","none");
        $(this).find(".nota .podcast").css("display","none");
        $(this).find(".nota .foto").css("display","none");
      }else if(ContentTypeL == "Video"){
        $(this).find(".nota .icon_video").css("display","block");
        $(this).find(".nota .video").css("display","block");
        $(this).find(".nota .icon_galeria").css("display","none");
        $(this).find(".nota .galeria").css("display","none");
        $(this).find(".nota .icon_podcast").css("display","none");
        $(this).find(".nota .podcast").css("display","none");
        $(this).find(".nota .foto").css("display","none");
      }else if(ContentTypeL == "Podcast"){
        $(this).find(".nota .icon_podcast").css("display","block");
        $(this).find(".nota .podcast").css("display","block");
        $(this).find(".nota .icon_video").css("display","none");
        $(this).find(".nota .video").css("display","none");
        $(this).find(".nota .icon_galeria").css("display","none");
        $(this).find(".nota .galeria").css("display","none");
        $(this).find(".nota .foto").css("display","none");
      }else if(ContentTypeL == "Infografía"){
        $(this).find(".icon_video").css("display","none");
        $(this).find(".video").css("display","none");
        $(this).find(".icon_galeria").css("display","none");
        $(this).find(".galeria").css("display","none");
        $(this).find(".icon_podcast").css("display","none");
        $(this).find(".podcast").css("display","none");
        $(this).find(".foto").css("display","block");
      }
});
//Fin notas horizontales region
//notas horizontales Economia
$(".view-id-s_general_sub.view-display-id-block_7 .views-row").each(function(){
      var ContentTypeL = $(this).find(".tipo").html();
      if(ContentTypeL == "Galería de imagenes"){
        $(this).find(".nota .icon_galeria").css("display","block");
        $(this).find(".nota .galeria").css("display","block");
        $(this).find(".nota .icon_video").css("display","none");
        $(this).find(".nota .video").css("display","none");
        $(this).find(".nota .icon_podcast").css("display","none");
        $(this).find(".nota .podcast").css("display","none");
        $(this).find(".nota .foto").css("display","none");
      }else if(ContentTypeL == "Video"){
        $(this).find(".nota .icon_video").css("display","block");
        $(this).find(".nota .video").css("display","block");
        $(this).find(".nota .icon_galeria").css("display","none");
        $(this).find(".nota .galeria").css("display","none");
        $(this).find(".nota .icon_podcast").css("display","none");
        $(this).find(".nota .podcast").css("display","none");
        $(this).find(".nota .foto").css("display","none");
      }else if(ContentTypeL == "Podcast"){
        $(this).find(".nota .icon_podcast").css("display","block");
        $(this).find(".nota .podcast").css("display","block");
        $(this).find(".nota .icon_video").css("display","none");
        $(this).find(".nota .video").css("display","none");
        $(this).find(".nota .icon_galeria").css("display","none");
        $(this).find(".nota .galeria").css("display","none");
        $(this).find(".nota .foto").css("display","none");
      }else if(ContentTypeL == "Infografía"){
        $(this).find(".icon_video").css("display","none");
        $(this).find(".video").css("display","none");
        $(this).find(".icon_galeria").css("display","none");
        $(this).find(".galeria").css("display","none");
        $(this).find(".icon_podcast").css("display","none");
        $(this).find(".podcast").css("display","none");
        $(this).find(".foto").css("display","block");
      }
});
//Fin notas horizontales Economia
//notas horizontales Politíca
$(".view-id-s_general_sub.view-display-id-block_8 .views-row").each(function(){
      var ContentTypeL = $(this).find(".tipo").html();
      if(ContentTypeL == "Galería de imagenes"){
        $(this).find(".nota .icon_galeria").css("display","block");
        $(this).find(".nota .galeria").css("display","block");
        $(this).find(".nota .icon_video").css("display","none");
        $(this).find(".nota .video").css("display","none");
        $(this).find(".nota .icon_podcast").css("display","none");
        $(this).find(".nota .podcast").css("display","none");
        $(this).find(".nota .foto").css("display","none");
      }else if(ContentTypeL == "Video"){
        $(this).find(".nota .icon_video").css("display","block");
        $(this).find(".nota .video").css("display","block");
        $(this).find(".nota .icon_galeria").css("display","none");
        $(this).find(".nota .galeria").css("display","none");
        $(this).find(".nota .icon_podcast").css("display","none");
        $(this).find(".nota .podcast").css("display","none");
        $(this).find(".nota .foto").css("display","none");
      }else if(ContentTypeL == "Podcast"){
        $(this).find(".nota .icon_podcast").css("display","block");
        $(this).find(".nota .podcast").css("display","block");
        $(this).find(".nota .icon_video").css("display","none");
        $(this).find(".nota .video").css("display","none");
        $(this).find(".nota .icon_galeria").css("display","none");
        $(this).find(".nota .galeria").css("display","none");
        $(this).find(".nota .foto").css("display","none");
      }else if(ContentTypeL == "Infografía"){
        $(this).find(".icon_video").css("display","none");
        $(this).find(".video").css("display","none");
        $(this).find(".icon_galeria").css("display","none");
        $(this).find(".galeria").css("display","none");
        $(this).find(".icon_podcast").css("display","none");
        $(this).find(".podcast").css("display","none");
        $(this).find(".foto").css("display","block");
      }
});
//Fin notas horizontales Politíca
//notas horizontales Colombia
$(".view-id-s_general_sub.view-display-id-block_9 .views-row").each(function(){
      var ContentTypeL = $(this).find(".tipo").html();
      if(ContentTypeL == "Galería de imagenes"){
        $(this).find(".nota .icon_galeria").css("display","block");
        $(this).find(".nota .galeria").css("display","block");
        $(this).find(".nota .icon_video").css("display","none");
        $(this).find(".nota .video").css("display","none");
        $(this).find(".nota .icon_podcast").css("display","none");
        $(this).find(".nota .podcast").css("display","none");
        $(this).find(".nota .foto").css("display","none");
      }else if(ContentTypeL == "Video"){
        $(this).find(".nota .icon_video").css("display","block");
        $(this).find(".nota .video").css("display","block");
        $(this).find(".nota .icon_galeria").css("display","none");
        $(this).find(".nota .galeria").css("display","none");
        $(this).find(".nota .icon_podcast").css("display","none");
        $(this).find(".nota .podcast").css("display","none");
        $(this).find(".nota .foto").css("display","none");
      }else if(ContentTypeL == "Podcast"){
        $(this).find(".nota .icon_podcast").css("display","block");
        $(this).find(".nota .podcast").css("display","block");
        $(this).find(".nota .icon_video").css("display","none");
        $(this).find(".nota .video").css("display","none");
        $(this).find(".nota .icon_galeria").css("display","none");
        $(this).find(".nota .galeria").css("display","none");
        $(this).find(".nota .foto").css("display","none");
      }else if(ContentTypeL == "Infografía"){
        $(this).find(".icon_video").css("display","none");
        $(this).find(".video").css("display","none");
        $(this).find(".icon_galeria").css("display","none");
        $(this).find(".galeria").css("display","none");
        $(this).find(".icon_podcast").css("display","none");
        $(this).find(".podcast").css("display","none");
        $(this).find(".foto").css("display","block");
      }
});
//Fin notas horizontales Colombia
//notas horizontales Venezuela
$(".view-id-s_general_sub.view-display-id-block_10 .views-row").each(function(){
      var ContentTypeL = $(this).find(".tipo").html();
      if(ContentTypeL == "Galería de imagenes"){
        $(this).find(".nota .icon_galeria").css("display","block");
        $(this).find(".nota .galeria").css("display","block");
        $(this).find(".nota .icon_video").css("display","none");
        $(this).find(".nota .video").css("display","none");
        $(this).find(".nota .icon_podcast").css("display","none");
        $(this).find(".nota .podcast").css("display","none");
        $(this).find(".nota .foto").css("display","none");
      }else if(ContentTypeL == "Video"){
        $(this).find(".nota .icon_video").css("display","block");
        $(this).find(".nota .video").css("display","block");
        $(this).find(".nota .icon_galeria").css("display","none");
        $(this).find(".nota .galeria").css("display","none");
        $(this).find(".nota .icon_podcast").css("display","none");
        $(this).find(".nota .podcast").css("display","none");
        $(this).find(".nota .foto").css("display","none");
      }else if(ContentTypeL == "Podcast"){
        $(this).find(".nota .icon_podcast").css("display","block");
        $(this).find(".nota .podcast").css("display","block");
        $(this).find(".nota .icon_video").css("display","none");
        $(this).find(".nota .video").css("display","none");
        $(this).find(".nota .icon_galeria").css("display","none");
        $(this).find(".nota .galeria").css("display","none");
        $(this).find(".nota .foto").css("display","none");
      }else if(ContentTypeL == "Infografía"){
        $(this).find(".icon_video").css("display","none");
        $(this).find(".video").css("display","none");
        $(this).find(".icon_galeria").css("display","none");
        $(this).find(".galeria").css("display","none");
        $(this).find(".icon_podcast").css("display","none");
        $(this).find(".podcast").css("display","none");
        $(this).find(".foto").css("display","block");
      }
});
//Fin notas horizontales Venezuela
//notas horizontales Mundo
$(".view-id-s_general_sub.view-display-id-block_11 .views-row").each(function(){
      var ContentTypeL = $(this).find(".tipo").html();
      if(ContentTypeL == "Galería de imagenes"){
        $(this).find(".nota .icon_galeria").css("display","block");
        $(this).find(".nota .galeria").css("display","block");
        $(this).find(".nota .icon_video").css("display","none");
        $(this).find(".nota .video").css("display","none");
        $(this).find(".nota .icon_podcast").css("display","none");
        $(this).find(".nota .podcast").css("display","none");
        $(this).find(".nota .foto").css("display","none");
      }else if(ContentTypeL == "Video"){
        $(this).find(".nota .icon_video").css("display","block");
        $(this).find(".nota .video").css("display","block");
        $(this).find(".nota .icon_galeria").css("display","none");
        $(this).find(".nota .galeria").css("display","none");
        $(this).find(".nota .icon_podcast").css("display","none");
        $(this).find(".nota .podcast").css("display","none");
        $(this).find(".nota .foto").css("display","none");
      }else if(ContentTypeL == "Podcast"){
        $(this).find(".nota .icon_podcast").css("display","block");
        $(this).find(".nota .podcast").css("display","block");
        $(this).find(".nota .icon_video").css("display","none");
        $(this).find(".nota .video").css("display","none");
        $(this).find(".nota .icon_galeria").css("display","none");
        $(this).find(".nota .galeria").css("display","none");
        $(this).find(".nota .foto").css("display","none");
      }else if(ContentTypeL == "Infografía"){
        $(this).find(".icon_video").css("display","none");
        $(this).find(".video").css("display","none");
        $(this).find(".icon_galeria").css("display","none");
        $(this).find(".galeria").css("display","none");
        $(this).find(".icon_podcast").css("display","none");
        $(this).find(".podcast").css("display","none");
        $(this).find(".foto").css("display","block");
      }
});
//Fin notas horizontales Mundo
//notas horizontales Cúcuta deportivo
$(".view-id-s_general_sub.view-display-id-block_12 .views-row").each(function(){
      var ContentTypeL = $(this).find(".tipo").html();
      if(ContentTypeL == "Galería de imagenes"){
        $(this).find(".nota .icon_galeria").css("display","block");
        $(this).find(".nota .galeria").css("display","block");
        $(this).find(".nota .icon_video").css("display","none");
        $(this).find(".nota .video").css("display","none");
        $(this).find(".nota .icon_podcast").css("display","none");
        $(this).find(".nota .podcast").css("display","none");
        $(this).find(".nota .foto").css("display","none");
      }else if(ContentTypeL == "Video"){
        $(this).find(".nota .icon_video").css("display","block");
        $(this).find(".nota .video").css("display","block");
        $(this).find(".nota .icon_galeria").css("display","none");
        $(this).find(".nota .galeria").css("display","none");
        $(this).find(".nota .icon_podcast").css("display","none");
        $(this).find(".nota .podcast").css("display","none");
        $(this).find(".nota .foto").css("display","none");
      }else if(ContentTypeL == "Podcast"){
        $(this).find(".nota .icon_podcast").css("display","block");
        $(this).find(".nota .podcast").css("display","block");
        $(this).find(".nota .icon_video").css("display","none");
        $(this).find(".nota .video").css("display","none");
        $(this).find(".nota .icon_galeria").css("display","none");
        $(this).find(".nota .galeria").css("display","none");
        $(this).find(".nota .foto").css("display","none");
      }else if(ContentTypeL == "Infografía"){
        $(this).find(".icon_video").css("display","none");
        $(this).find(".video").css("display","none");
        $(this).find(".icon_galeria").css("display","none");
        $(this).find(".galeria").css("display","none");
        $(this).find(".icon_podcast").css("display","none");
        $(this).find(".podcast").css("display","none");
        $(this).find(".foto").css("display","block");
      }
});
//Fin notas horizontales Cúcuta deportivo
//notas horizontales Futbol
$(".view-id-s_general_sub.view-display-id-block_13 .views-row").each(function(){
      var ContentTypeL = $(this).find(".tipo").html();
      if(ContentTypeL == "Galería de imagenes"){
        $(this).find(".nota .icon_galeria").css("display","block");
        $(this).find(".nota .galeria").css("display","block");
        $(this).find(".nota .icon_video").css("display","none");
        $(this).find(".nota .video").css("display","none");
        $(this).find(".nota .icon_podcast").css("display","none");
        $(this).find(".nota .podcast").css("display","none");
        $(this).find(".nota .foto").css("display","none");
      }else if(ContentTypeL == "Video"){
        $(this).find(".nota .icon_video").css("display","block");
        $(this).find(".nota .video").css("display","block");
        $(this).find(".nota .icon_galeria").css("display","none");
        $(this).find(".nota .galeria").css("display","none");
        $(this).find(".nota .icon_podcast").css("display","none");
        $(this).find(".nota .podcast").css("display","none");
        $(this).find(".nota .foto").css("display","none");
      }else if(ContentTypeL == "Podcast"){
        $(this).find(".nota .icon_podcast").css("display","block");
        $(this).find(".nota .podcast").css("display","block");
        $(this).find(".nota .icon_video").css("display","none");
        $(this).find(".nota .video").css("display","none");
        $(this).find(".nota .icon_galeria").css("display","none");
        $(this).find(".nota .galeria").css("display","none");
        $(this).find(".nota .foto").css("display","none");
      }else if(ContentTypeL == "Infografía"){
        $(this).find(".icon_video").css("display","none");
        $(this).find(".video").css("display","none");
        $(this).find(".icon_galeria").css("display","none");
        $(this).find(".galeria").css("display","none");
        $(this).find(".icon_podcast").css("display","none");
        $(this).find(".podcast").css("display","none");
        $(this).find(".foto").css("display","block");
      }
});
//Fin notas horizontales Futbol
//notas horizontales Mas deportes
$(".view-id-s_general_sub.view-display-id-block_14 .views-row").each(function(){
      var ContentTypeL = $(this).find(".tipo").html();
      if(ContentTypeL == "Galería de imagenes"){
        $(this).find(".nota .icon_galeria").css("display","block");
        $(this).find(".nota .galeria").css("display","block");
        $(this).find(".nota .icon_video").css("display","none");
        $(this).find(".nota .video").css("display","none");
        $(this).find(".nota .icon_podcast").css("display","none");
        $(this).find(".nota .podcast").css("display","none");
        $(this).find(".nota .foto").css("display","none");
      }else if(ContentTypeL == "Video"){
        $(this).find(".nota .icon_video").css("display","block");
        $(this).find(".nota .video").css("display","block");
        $(this).find(".nota .icon_galeria").css("display","none");
        $(this).find(".nota .galeria").css("display","none");
        $(this).find(".nota .icon_podcast").css("display","none");
        $(this).find(".nota .podcast").css("display","none");
        $(this).find(".nota .foto").css("display","none");
      }else if(ContentTypeL == "Podcast"){
        $(this).find(".nota .icon_podcast").css("display","block");
        $(this).find(".nota .podcast").css("display","block");
        $(this).find(".nota .icon_video").css("display","none");
        $(this).find(".nota .video").css("display","none");
        $(this).find(".nota .icon_galeria").css("display","none");
        $(this).find(".nota .galeria").css("display","none");
        $(this).find(".nota .foto").css("display","none");
      }else if(ContentTypeL == "Infografía"){
        $(this).find(".icon_video").css("display","none");
        $(this).find(".video").css("display","none");
        $(this).find(".icon_galeria").css("display","none");
        $(this).find(".galeria").css("display","none");
        $(this).find(".icon_podcast").css("display","none");
        $(this).find(".podcast").css("display","none");
        $(this).find(".foto").css("display","block");
      }
});
//Fin notas horizontales Mas deportes
//notas horizontales Mas Actividad social
$(".view-id-s_general_sub.view-display-id-block_15 .views-row").each(function(){
      var ContentTypeL = $(this).find(".tipo").html();
      if(ContentTypeL == "Galería de imagenes"){
        $(this).find(".nota .icon_galeria").css("display","block");
        $(this).find(".nota .galeria").css("display","block");
        $(this).find(".nota .icon_video").css("display","none");
        $(this).find(".nota .video").css("display","none");
        $(this).find(".nota .icon_podcast").css("display","none");
        $(this).find(".nota .podcast").css("display","none");
        $(this).find(".nota .foto").css("display","none");
      }else if(ContentTypeL == "Video"){
        $(this).find(".nota .icon_video").css("display","block");
        $(this).find(".nota .video").css("display","block");
        $(this).find(".nota .icon_galeria").css("display","none");
        $(this).find(".nota .galeria").css("display","none");
        $(this).find(".nota .icon_podcast").css("display","none");
        $(this).find(".nota .podcast").css("display","none");
        $(this).find(".nota .foto").css("display","none");
      }else if(ContentTypeL == "Podcast"){
        $(this).find(".nota .icon_podcast").css("display","block");
        $(this).find(".nota .podcast").css("display","block");
        $(this).find(".nota .icon_video").css("display","none");
        $(this).find(".nota .video").css("display","none");
        $(this).find(".nota .icon_galeria").css("display","none");
        $(this).find(".nota .galeria").css("display","none");
        $(this).find(".nota .foto").css("display","none");
      }else if(ContentTypeL == "Infografía"){
        $(this).find(".icon_video").css("display","none");
        $(this).find(".video").css("display","none");
        $(this).find(".icon_galeria").css("display","none");
        $(this).find(".galeria").css("display","none");
        $(this).find(".icon_podcast").css("display","none");
        $(this).find(".podcast").css("display","none");
        $(this).find(".foto").css("display","block");
      }
});
//Fin notas horizontales Mas Actividad social
//notas horizontales Mas Tecnologia
$(".view-id-s_general_sub.view-display-id-block_16 .views-row").each(function(){
      var ContentTypeL = $(this).find(".tipo").html();
      if(ContentTypeL == "Galería de imagenes"){
        $(this).find(".nota .icon_galeria").css("display","block");
        $(this).find(".nota .galeria").css("display","block");
        $(this).find(".nota .icon_video").css("display","none");
        $(this).find(".nota .video").css("display","none");
        $(this).find(".nota .icon_podcast").css("display","none");
        $(this).find(".nota .podcast").css("display","none");
        $(this).find(".nota .foto").css("display","none");
      }else if(ContentTypeL == "Video"){
        $(this).find(".nota .icon_video").css("display","block");
        $(this).find(".nota .video").css("display","block");
        $(this).find(".nota .icon_galeria").css("display","none");
        $(this).find(".nota .galeria").css("display","none");
        $(this).find(".nota .icon_podcast").css("display","none");
        $(this).find(".nota .podcast").css("display","none");
        $(this).find(".nota .foto").css("display","none");
      }else if(ContentTypeL == "Podcast"){
        $(this).find(".nota .icon_podcast").css("display","block");
        $(this).find(".nota .podcast").css("display","block");
        $(this).find(".nota .icon_video").css("display","none");
        $(this).find(".nota .video").css("display","none");
        $(this).find(".nota .icon_galeria").css("display","none");
        $(this).find(".nota .galeria").css("display","none");
        $(this).find(".nota .foto").css("display","none");
      }else if(ContentTypeL == "Infografía"){
        $(this).find(".icon_video").css("display","none");
        $(this).find(".video").css("display","none");
        $(this).find(".icon_galeria").css("display","none");
        $(this).find(".galeria").css("display","none");
        $(this).find(".icon_podcast").css("display","none");
        $(this).find(".podcast").css("display","none");
        $(this).find(".foto").css("display","block");
      }
});
//Fin notas horizontales Mas Tecnologia
//notas horizontales Mas Cultura
$(".view-id-s_general_sub.view-display-id-block_17 .views-row").each(function(){
      var ContentTypeL = $(this).find(".tipo").html();
      if(ContentTypeL == "Galería de imagenes"){
        $(this).find(".nota .icon_galeria").css("display","block");
        $(this).find(".nota .galeria").css("display","block");
        $(this).find(".nota .icon_video").css("display","none");
        $(this).find(".nota .video").css("display","none");
        $(this).find(".nota .icon_podcast").css("display","none");
        $(this).find(".nota .podcast").css("display","none");
        $(this).find(".nota .foto").css("display","none");
      }else if(ContentTypeL == "Video"){
        $(this).find(".nota .icon_video").css("display","block");
        $(this).find(".nota .video").css("display","block");
        $(this).find(".nota .icon_galeria").css("display","none");
        $(this).find(".nota .galeria").css("display","none");
        $(this).find(".nota .icon_podcast").css("display","none");
        $(this).find(".nota .podcast").css("display","none");
        $(this).find(".nota .foto").css("display","none");
      }else if(ContentTypeL == "Podcast"){
        $(this).find(".nota .icon_podcast").css("display","block");
        $(this).find(".nota .podcast").css("display","block");
        $(this).find(".nota .icon_video").css("display","none");
        $(this).find(".nota .video").css("display","none");
        $(this).find(".nota .icon_galeria").css("display","none");
        $(this).find(".nota .galeria").css("display","none");
        $(this).find(".nota .foto").css("display","none");
      }else if(ContentTypeL == "Infografía"){
        $(this).find(".icon_video").css("display","none");
        $(this).find(".video").css("display","none");
        $(this).find(".icon_galeria").css("display","none");
        $(this).find(".galeria").css("display","none");
        $(this).find(".icon_podcast").css("display","none");
        $(this).find(".podcast").css("display","none");
        $(this).find(".foto").css("display","block");
      }
});
//Fin notas horizontales Mas Cultura
//notas horizontales Mas Tendencias
$(".view-id-s_general_sub.view-display-id-block_18 .views-row").each(function(){
      var ContentTypeL = $(this).find(".tipo").html();
      if(ContentTypeL == "Galería de imagenes"){
        $(this).find(".nota .icon_galeria").css("display","block");
        $(this).find(".nota .galeria").css("display","block");
        $(this).find(".nota .icon_video").css("display","none");
        $(this).find(".nota .video").css("display","none");
        $(this).find(".nota .icon_podcast").css("display","none");
        $(this).find(".nota .podcast").css("display","none");
        $(this).find(".nota .foto").css("display","none");
      }else if(ContentTypeL == "Video"){
        $(this).find(".nota .icon_video").css("display","block");
        $(this).find(".nota .video").css("display","block");
        $(this).find(".nota .icon_galeria").css("display","none");
        $(this).find(".nota .galeria").css("display","none");
        $(this).find(".nota .icon_podcast").css("display","none");
        $(this).find(".nota .podcast").css("display","none");
        $(this).find(".nota .foto").css("display","none");
      }else if(ContentTypeL == "Podcast"){
        $(this).find(".nota .icon_podcast").css("display","block");
        $(this).find(".nota .podcast").css("display","block");
        $(this).find(".nota .icon_video").css("display","none");
        $(this).find(".nota .video").css("display","none");
        $(this).find(".nota .icon_galeria").css("display","none");
        $(this).find(".nota .galeria").css("display","none");
        $(this).find(".nota .foto").css("display","none");
      }else if(ContentTypeL == "Infografía"){
        $(this).find(".icon_video").css("display","none");
        $(this).find(".video").css("display","none");
        $(this).find(".icon_galeria").css("display","none");
        $(this).find(".galeria").css("display","none");
        $(this).find(".icon_podcast").css("display","none");
        $(this).find(".podcast").css("display","none");
        $(this).find(".foto").css("display","block");
      }
});
//Fin notas horizontales Mas Tendencias
//notas horizontales Mas Viral
$(".view-id-s_general_sub.view-display-id-block_19 .views-row").each(function(){
      var ContentTypeL = $(this).find(".tipo").html();
      if(ContentTypeL == "Galería de imagenes"){
        $(this).find(".nota .icon_galeria").css("display","block");
        $(this).find(".nota .galeria").css("display","block");
        $(this).find(".nota .icon_video").css("display","none");
        $(this).find(".nota .video").css("display","none");
        $(this).find(".nota .icon_podcast").css("display","none");
        $(this).find(".nota .podcast").css("display","none");
        $(this).find(".nota .foto").css("display","none");
      }else if(ContentTypeL == "Video"){
        $(this).find(".nota .icon_video").css("display","block");
        $(this).find(".nota .video").css("display","block");
        $(this).find(".nota .icon_galeria").css("display","none");
        $(this).find(".nota .galeria").css("display","none");
        $(this).find(".nota .icon_podcast").css("display","none");
        $(this).find(".nota .podcast").css("display","none");
        $(this).find(".nota .foto").css("display","none");
      }else if(ContentTypeL == "Podcast"){
        $(this).find(".nota .icon_podcast").css("display","block");
        $(this).find(".nota .podcast").css("display","block");
        $(this).find(".nota .icon_video").css("display","none");
        $(this).find(".nota .video").css("display","none");
        $(this).find(".nota .icon_galeria").css("display","none");
        $(this).find(".nota .galeria").css("display","none");
        $(this).find(".nota .foto").css("display","none");
      }else if(ContentTypeL == "Infografía"){
        $(this).find(".icon_video").css("display","none");
        $(this).find(".video").css("display","none");
        $(this).find(".icon_galeria").css("display","none");
        $(this).find(".galeria").css("display","none");
        $(this).find(".icon_podcast").css("display","none");
        $(this).find(".podcast").css("display","none");
        $(this).find(".foto").css("display","block");
      }
});
//Fin notas horizontales Mas Viral
//notas horizontales Mas Vida y Salud
$(".view-id-s_general_sub.view-display-id-block_20 .views-row").each(function(){
      var ContentTypeL = $(this).find(".tipo").html();
      if(ContentTypeL == "Galería de imagenes"){
        $(this).find(".nota .icon_galeria").css("display","block");
        $(this).find(".nota .galeria").css("display","block");
        $(this).find(".nota .icon_video").css("display","none");
        $(this).find(".nota .video").css("display","none");
        $(this).find(".nota .icon_podcast").css("display","none");
        $(this).find(".nota .podcast").css("display","none");
        $(this).find(".nota .foto").css("display","none");
      }else if(ContentTypeL == "Video"){
        $(this).find(".nota .icon_video").css("display","block");
        $(this).find(".nota .video").css("display","block");
        $(this).find(".nota .icon_galeria").css("display","none");
        $(this).find(".nota .galeria").css("display","none");
        $(this).find(".nota .icon_podcast").css("display","none");
        $(this).find(".nota .podcast").css("display","none");
        $(this).find(".nota .foto").css("display","none");
      }else if(ContentTypeL == "Podcast"){
        $(this).find(".nota .icon_podcast").css("display","block");
        $(this).find(".nota .podcast").css("display","block");
        $(this).find(".nota .icon_video").css("display","none");
        $(this).find(".nota .video").css("display","none");
        $(this).find(".nota .icon_galeria").css("display","none");
        $(this).find(".nota .galeria").css("display","none");
        $(this).find(".nota .foto").css("display","none");
      }else if(ContentTypeL == "Infografía"){
        $(this).find(".icon_video").css("display","none");
        $(this).find(".video").css("display","none");
        $(this).find(".icon_galeria").css("display","none");
        $(this).find(".galeria").css("display","none");
        $(this).find(".icon_podcast").css("display","none");
        $(this).find(".podcast").css("display","none");
        $(this).find(".foto").css("display","block");
      }
});
//Fin notas horizontales Mas Vida y Salud
/*FIN ICONOS DE LAS SECCIONES*/

/*APERTURAS*/
  var tipo = $(".view-aperturas.view-id-aperturas.view-display-id-block .views-row").find(".tipo").html();
  
  if(tipo == "Artículo"){
    $(".view-aperturas.view-id-aperturas.view-display-id-block .views-row .nota .icon_galeria").css({display:"none"}); 
    $(".view-aperturas.view-id-aperturas.view-display-id-block .views-row .nota .icon_video").css({display:"none"});
    $(".view-aperturas.view-id-aperturas.view-display-id-block .views-row .nota .galeria").css({display:"none"}); 
    $(".view-aperturas.view-id-aperturas.view-display-id-block .views-row .nota .video").css({display:"none"}); 
    $(".view-aperturas.view-id-aperturas.view-display-id-block .views-row .nota .foto").css({display:"block"});
      }else
  if(tipo == "Galería de imagenes"){
    $(".view-aperturas.view-id-aperturas.view-display-id-block .views-row .nota .icon_galeria").css({display:"block"});
    $(".view-aperturas.view-id-aperturas.view-display-id-block .views-row .nota .icon_video").css({display:"none"});
    $(".view-aperturas.view-id-aperturas.view-display-id-block .views-row .nota .galeria").css({display:"block"});
    $(".view-aperturas.view-id-aperturas.view-display-id-block .views-row .nota .foto").css({display:"none"});
      }else 
  if(tipo == "Video"){
    $(".view-aperturas.view-id-aperturas.view-display-id-block .views-row .nota .video").css({display:"block"});
    $(".view-aperturas.view-id-aperturas.view-display-id-block .views-row .nota .icon_video").css({display:"block"});
    $(".view-aperturas.view-id-aperturas.view-display-id-block .views-row .nota .icon_galeria").css({display:"none"});
    $(".view-aperturas.view-id-aperturas.view-display-id-block .views-row .nota .galeria").css({display:"none"});
    $(".view-aperturas.view-id-aperturas.view-display-id-block .views-row .nota .foto").css({display:"none"});
      }else 
  if(tipo == "Podcast"){
    $(".view-aperturas.view-id-aperturas.view-display-id-block .views-row .nota .podcast").css({display:"block"});
    $(".view-aperturas.view-id-aperturas.view-display-id-block .views-row .nota .icon_podcast").css({display:"block"});
    $(".view-aperturas.view-id-aperturas.view-display-id-block .views-row .nota .video").css({display:"none"});
    $(".view-aperturas.view-id-aperturas.view-display-id-block .views-row .nota .icon_video").css({display:"none"});
    $(".view-aperturas.view-id-aperturas.view-display-id-block .views-row .nota .icon_galeria").css({display:"none"});
    $(".view-aperturas.view-id-aperturas.view-display-id-block .views-row .nota .galeria").css({display:"none"});
    $(".view-aperturas.view-id-aperturas.view-display-id-block .views-row .nota .foto").css({display:"none"});
      }

 $(".view-aperturas.view-id-aperturas.view-display-id-block_1 .views-row").each(function(){
      var ContentTypeL = $(this).find(".tipo").html();
      if(ContentTypeL == "Galería de imagenes"){
        $(this).find(".icon_galeria").css("display","block");
        $(this).find(".galeria").css("display","block");
        $(this).find(".icon_video").css("display","none");
        $(this).find(".video").css("display","none");
        $(this).find(".podcast").css("display","none");
        $(this).find(".icon_podcast").css("display","none");
        $(this).find(".foto").css("display","none");
      }else if(ContentTypeL == "Video"){
        $(this).find(".icon_video").css("display","block");
        $(this).find(".video").css("display","block");
        $(this).find(".icon_galeria").css("display","none");
        $(this).find(".galeria").css("display","none");
        $(this).find(".podcast").css("display","none");
        $(this).find(".icon_podcast").css("display","none");
        $(this).find(".foto").css("display","none");
      }else if(ContentTypeL == "Podcast"){
        $(this).find(".podcast").css("display","block");
        $(this).find(".icon_podcast").css("display","block");
        $(this).find(".icon_video").css("display","none");
        $(this).find(".video").css("display","none");
        $(this).find(".icon_galeria").css("display","none");
        $(this).find(".galeria").css("display","none");
        $(this).find(".foto").css("display","none");
      }else if(ContentTypeL == "Artículo"){
        $(this).find(".icon_video").css("display","none");
        $(this).find(".video").css("display","none");
        $(this).find(".icon_galeria").css("display","none");
        $(this).find(".galeria").css("display","none");
        $(this).find(".icon_podcast").css("display","none");
        $(this).find(".podcast").css("display","none");
        $(this).find(".foto").css("display","block");
      }else if(ContentTypeL == "Infografía"){
        $(this).find(".icon_video").css("display","none");
        $(this).find(".video").css("display","none");
        $(this).find(".icon_galeria").css("display","none");
        $(this).find(".galeria").css("display","none");
        $(this).find(".icon_podcast").css("display","none");
        $(this).find(".podcast").css("display","none");
        $(this).find(".foto").css("display","block");
      }
  });

 var tipo = $(".view-aperturas.view-id-aperturas.view-display-id-block_3 .views-row").find(".tipo").html();
  
  if(tipo == "Artículo"){
    $(".view-aperturas.view-id-aperturas.view-display-id-block_3 .views-row .nota .icon_galeria").css({display:"none"}); 
    $(".view-aperturas.view-id-aperturas.view-display-id-block_3 .views-row .nota .icon_video").css({display:"none"});
    $(".view-aperturas.view-id-aperturas.view-display-id-block_3 .views-row .nota .galeria").css({display:"none"}); 
    $(".view-aperturas.view-id-aperturas.view-display-id-block_3 .views-row .nota .video").css({display:"none"}); 
    $(".view-aperturas.view-id-aperturas.view-display-id-block_3 .views-row .nota .foto").css({display:"block"});
      }else
  if(tipo == "Galería de imagenes"){
    $(".view-aperturas.view-id-aperturas.view-display-id-block_3 .views-row .nota .icon_galeria").css({display:"block"});
    $(".view-aperturas.view-id-aperturas.view-display-id-block_3 .views-row .nota .icon_video").css({display:"none"});
    $(".view-aperturas.view-id-aperturas.view-display-id-block_3 .views-row .nota .galeria").css({display:"block"});
    $(".view-aperturas.view-id-aperturas.view-display-id-block_3 .views-row .nota .foto").css({display:"none"});
      }else 
  if(tipo == "Video"){
    $(".view-aperturas.view-id-aperturas.view-display-id-block_3 .views-row .nota .video").css({display:"block"});
    $(".view-aperturas.view-id-aperturas.view-display-id-block_3 .views-row .nota .icon_video").css({display:"block"});
    $(".view-aperturas.view-id-aperturas.view-display-id-block_3 .views-row .nota .icon_galeria").css({display:"none"});
    $(".view-aperturas.view-id-aperturas.view-display-id-block_3 .views-row .nota .galeria").css({display:"none"});
    $(".view-aperturas.view-id-aperturas.view-display-id-block_3 .views-row .nota .foto").css({display:"none"});
      }else 
  if(tipo == "Podcast"){
    $(".view-aperturas.view-id-aperturas.view-display-id-block_3 .views-row .nota .podcast").css({display:"block"});
    $(".view-aperturas.view-id-aperturas.view-display-id-block_3 .views-row .nota .icon_podcast").css({display:"block"});
    $(".view-aperturas.view-id-aperturas.view-display-id-block_3 .views-row .nota .video").css({display:"none"});
    $(".view-aperturas.view-id-aperturas.view-display-id-block_3 .views-row .nota .icon_video").css({display:"none"});
    $(".view-aperturas.view-id-aperturas.view-display-id-block_3 .views-row .nota .icon_galeria").css({display:"none"});
    $(".view-aperturas.view-id-aperturas.view-display-id-block_3 .views-row .nota .galeria").css({display:"none"});
    $(".view-aperturas.view-id-aperturas.view-display-id-block_3 .views-row .nota .foto").css({display:"none"});
      }

  $(".view-aperturas.view-id-aperturas.view-display-id-block_2 .views-row").each(function(){
      var ContentTypeL = $(this).find(".tipo").html();
      if(ContentTypeL == "Galería de imagenes"){
        $(this).find(".icon_galeria").css("display","block");
        $(this).find(".galeria").css("display","block");
        $(this).find(".icon_video").css("display","none");
        $(this).find(".video").css("display","none");
        $(this).find(".podcast").css("display","none");
        $(this).find(".icon_podcast").css("display","none");
        $(this).find(".foto").css("display","none");
      }else if(ContentTypeL == "Video"){
        $(this).find(".icon_video").css("display","block");
        $(this).find(".video").css("display","block");
        $(this).find(".icon_galeria").css("display","none");
        $(this).find(".galeria").css("display","none");
        $(this).find(".podcast").css("display","none");
        $(this).find(".icon_podcast").css("display","none");
        $(this).find(".foto").css("display","none");
      }else if(ContentTypeL == "Podcast"){
        $(this).find(".podcast").css("display","block");
        $(this).find(".icon_podcast").css("display","block");
        $(this).find(".icon_video").css("display","none");
        $(this).find(".video").css("display","none");
        $(this).find(".icon_galeria").css("display","none");
        $(this).find(".galeria").css("display","none");
        $(this).find(".foto").css("display","none");
      }else if(ContentTypeL == "Artículo"){
        $(this).find(".icon_video").css("display","none");
        $(this).find(".video").css("display","none");
        $(this).find(".icon_galeria").css("display","none");
        $(this).find(".galeria").css("display","none");
        $(this).find(".icon_podcast").css("display","none");
        $(this).find(".podcast").css("display","none");
        $(this).find(".foto").css("display","block");
      }else if(ContentTypeL == "Infografía"){
        $(this).find(".icon_video").css("display","none");
        $(this).find(".video").css("display","none");
        $(this).find(".icon_galeria").css("display","none");
        $(this).find(".galeria").css("display","none");
        $(this).find(".icon_podcast").css("display","none");
        $(this).find(".podcast").css("display","none");
        $(this).find(".foto").css("display","block");
      }
  });

  var tipo = $(".view-aperturas.view-id-aperturas.view-display-id-block_5 .views-row").find(".tipo").html();
  
  if(tipo == "Artículo"){
    $(".view-aperturas.view-id-aperturas.view-display-id-block_5 .views-row .nota .icon_galeria").css({display:"none"}); 
    $(".view-aperturas.view-id-aperturas.view-display-id-block_5 .views-row .nota .icon_video").css({display:"none"});
    $(".view-aperturas.view-id-aperturas.view-display-id-block_5 .views-row .nota .galeria").css({display:"none"}); 
    $(".view-aperturas.view-id-aperturas.view-display-id-block_5 .views-row .nota .video").css({display:"none"}); 
    $(".view-aperturas.view-id-aperturas.view-display-id-block_5 .views-row .nota .foto").css({display:"block"});
      }else
  if(tipo == "Galería de imagenes"){
    $(".view-aperturas.view-id-aperturas.view-display-id-block_5 .views-row .nota .icon_galeria").css({display:"block"});
    $(".view-aperturas.view-id-aperturas.view-display-id-block_5 .views-row .nota .icon_video").css({display:"none"});
    $(".view-aperturas.view-id-aperturas.view-display-id-block_5 .views-row .nota .galeria").css({display:"block"});
    $(".view-aperturas.view-id-aperturas.view-display-id-block_5 .views-row .nota .foto").css({display:"none"});
      }else 
  if(tipo == "Video"){
    $(".view-aperturas.view-id-aperturas.view-display-id-block_5 .views-row .nota .video").css({display:"block"});
    $(".view-aperturas.view-id-aperturas.view-display-id-block_5 .views-row .nota .icon_video").css({display:"block"});
    $(".view-aperturas.view-id-aperturas.view-display-id-block_5 .views-row .nota .icon_galeria").css({display:"none"});
    $(".view-aperturas.view-id-aperturas.view-display-id-block_5 .views-row .nota .galeria").css({display:"none"});
    $(".view-aperturas.view-id-aperturas.view-display-id-block_5 .views-row .nota .foto").css({display:"none"});
      }else 
  if(tipo == "Podcast"){
    $(".view-aperturas.view-id-aperturas.view-display-id-block_5 .views-row .nota .podcast").css({display:"block"});
    $(".view-aperturas.view-id-aperturas.view-display-id-block_5 .views-row .nota .icon_podcast").css({display:"block"});
    $(".view-aperturas.view-id-aperturas.view-display-id-block_5 .views-row .nota .video").css({display:"none"});
    $(".view-aperturas.view-id-aperturas.view-display-id-block_5 .views-row .nota .icon_video").css({display:"none"});
    $(".view-aperturas.view-id-aperturas.view-display-id-block_5 .views-row .nota .icon_galeria").css({display:"none"});
    $(".view-aperturas.view-id-aperturas.view-display-id-block_5 .views-row .nota .galeria").css({display:"none"});
    $(".view-aperturas.view-id-aperturas.view-display-id-block_5 .views-row .nota .foto").css({display:"none"});
      }

/*Fin Aperturas*/

/*Seccion de especiales*/
  $("#especiales .destacada .view-especiales.view-id-especiales.view-display-id-block .views-row").each(function(){
      var seccionT = $(this).find(".info .nota .head .seccion a").html();
      if(seccionT == "Cúcuta" || seccionT == "Memorias" || seccionT == "Por los barrios"){
        $(this).find(".info .nota .head .seccion a").css({color:"#BA2025"}); 
      }else
      if(seccionT == "Región" || seccionT == "Pamplona" || seccionT == "Ocaña"){
        $(this).find(".info .nota .head .seccion a").css({color:"#F9D821"}); 
      }else
      if(seccionT == "Judicial"){
        $(this).find(".info .nota .head .seccion a").css({color:"#F87917"}); 
      }else
      if(seccionT == "Frontera"){
        $(this).find(".info .nota .head .seccion a").css({color:"#89C33F"}); 
      }else
      if(seccionT == "Actualidad" || seccionT == "Economía" || seccionT == "Política" || seccionT == "Colombia" || seccionT == "Venezuela" || seccionT == "Mundo"){
        $(this).find(".info .nota .head .seccion a").css({color:"#3D9E04"}); 
      }else
      if(seccionT == "Opinión" || seccionT == "Editorial" || seccionT == "Columnistas" || seccionT == "Caricaturas"){
        $(this).find(".info .nota .head .seccion a").css({color:"#BFD63E"}); 
      }else
      if(seccionT == "Deportes" || seccionT == "Cúcuta Deportivo" || seccionT == "Fútbol" || seccionT == "+ Deportes" || seccionT == "Copa América 2015" || seccionT == "Copa América 2016"){
        $(this).find(".info .nota .head .seccion a").css({color:"#3FA6F2"}); 
      }else
      if(seccionT == "Entretenimiento" || seccionT == "Actividad social" || seccionT == "Tecnología" || seccionT == "Cultura" || seccionT == "Cultura" || seccionT == "Tendencias" || seccionT == "Viral" || seccionT == "Vida y salud" || seccion == "Zona verde"){
        $(this).find(".info .nota .head .seccion a").css({color:"#8B7AB5"}); 
      }else
      if(seccionT == "Participación" || seccionT == "Reportero ciudadano" || seccionT == "Así opinan"){
        $(this).find(".info .nota .head .seccion a").css({color:"#C60B77"}); 
      }
    });

  $("#especiales .notas .view-especiales.view-id-especiales.view-display-id-block_1 .views-row").each(function(){
      var seccionT = $(this).find(".info .nota .head .seccion a").html();
      if(seccionT == "Cúcuta" || seccionT == "Memorias" || seccionT == "Por los barrios"){
        $(this).find(".info .nota .head .seccion a").css({color:"#BA2025"}); 
      }else
      if(seccionT == "Región" || seccionT == "Pamplona" || seccionT == "Ocaña"){
        $(this).find(".info .nota .head .seccion a").css({color:"#F9D821"}); 
      }else
      if(seccionT == "Judicial"){
        $(this).find(".info .nota .head .seccion a").css({color:"#F87917"}); 
      }else
      if(seccionT == "Frontera"){
        $(this).find(".info .nota .head .seccion a").css({color:"#89C33F"}); 
      }else
      if(seccionT == "Actualidad" || seccionT == "Economía" || seccionT == "Política" || seccionT == "Colombia" || seccionT == "Venezuela" || seccionT == "Mundo"){
        $(this).find(".info .nota .head .seccion a").css({color:"#3D9E04"}); 
      }else
      if(seccionT == "Opinión" || seccionT == "Editorial" || seccionT == "Columnistas" || seccionT == "Caricaturas"){
        $(this).find(".info .nota .head .seccion a").css({color:"#BFD63E"}); 
      }else
      if(seccionT == "Deportes" || seccionT == "Cúcuta Deportivo" || seccionT == "Fútbol" || seccionT == "+ Deportes" || seccionT == "Copa América 2015" || seccionT == "Copa América 2016"){
        $(this).find(".info .nota .head .seccion a").css({color:"#3FA6F2"}); 
      }else
      if(seccionT == "Entretenimiento" || seccionT == "Actividad social" || seccionT == "Tecnología" || seccionT == "Cultura" || seccionT == "Cultura" || seccionT == "Tendencias" || seccionT == "Viral" || seccionT == "Vida y salud" || seccion == "Zona verde"){
        $(this).find(".info .nota .head .seccion a").css({color:"#8B7AB5"}); 
      }else
      if(seccionT == "Participación" || seccionT == "Reportero ciudadano" || seccionT == "Así opinan"){
        $(this).find(".info .nota .head .seccion a").css({color:"#C60B77"}); 
      }
    });

  var tipo = $("#especiales .destacada .view-especiales.view-id-especiales.view-display-id-block .views-row").find(".tipo").html();
  
  if(tipo == "Artículo"){
    $(".view-especiales.view-id-especiales.view-display-id-block .views-row .info .icon_galeria").css({display:"none"}); 
    $(".view-especiales.view-id-especiales.view-display-id-block .views-row .info .icon_video").css({display:"none"});
    $(".view-especiales.view-id-especiales.view-display-id-block .views-row .info .galeria").css({display:"none"}); 
    $(".view-especiales.view-id-especiales.view-display-id-block .views-row .info .video").css({display:"none"}); 
    $(".view-especiales.view-id-especiales.view-display-id-block .views-row .info .foto").css({display:"block"});
      }else
  if(tipo == "Galería de imagenes"){
    $(".view-especiales.view-id-especiales.view-display-id-block .views-row .info .icon_galeria").css({display:"block"});
    $(".view-especiales.view-id-especiales.view-display-id-block .views-row .info .icon_video").css({display:"none"});
    $(".view-especiales.view-id-especiales.view-display-id-block .views-row .info .galeria").css({display:"block"});
    $(".view-especiales.view-id-especiales.view-display-id-block .views-row .info .foto").css({display:"none"});
      }else 
  if(tipo == "Video"){
    $(".view-especiales.view-id-especiales.view-display-id-block .views-row .info .video").css({display:"block"});
    $(".view-especiales.view-id-especiales.view-display-id-block .views-row .info .icon_video").css({display:"block"});
    $(".view-especiales.view-id-especiales.view-display-id-block .views-row .info .icon_galeria").css({display:"none"});
    $(".view-especiales.view-id-especiales.view-display-id-block .views-row .info .galeria").css({display:"none"});
    $(".view-especiales.view-id-especiales.view-display-id-block .views-row .info .foto").css({display:"none"});
      }else 
  if(tipo == "Podcast"){
    $(".view-especiales.view-id-especiales.view-display-id-block .views-row .info .podcast").css({display:"block"});
    $(".view-especiales.view-id-especiales.view-display-id-block .views-row .info .icon_podcast").css({display:"block"});
    $(".view-especiales.view-id-especiales.view-display-id-block .views-row .info .video").css({display:"none"});
    $(".view-especiales.view-id-especiales.view-display-id-block .views-row .info .icon_video").css({display:"none"});
    $(".view-especiales.view-id-especiales.view-display-id-block .views-row .info .icon_galeria").css({display:"none"});
    $(".view-especiales.view-id-especiales.view-display-id-block .views-row .info .galeria").css({display:"none"});
    $(".view-especiales.view-id-especiales.view-display-id-block .views-row .info .foto").css({display:"none"});
      }

    $(".view-especiales.view-id-especiales.view-display-id-block_1 .views-row").each(function(){
      var ContentTypeL = $(this).find(".tipo").html();
      if(ContentTypeL == "Galería de imagenes"){
        $(this).find(".icon_galeria").css("display","block");
        $(this).find(".galeria").css("display","block");
        $(this).find(".icon_video").css("display","none");
        $(this).find(".video").css("display","none");
        $(this).find(".podcast").css("display","none");
        $(this).find(".icon_podcast").css("display","none");
        $(this).find(".foto").css("display","none");
      }else if(ContentTypeL == "Video"){
        $(this).find(".icon_video").css("display","block");
        $(this).find(".video").css("display","block");
        $(this).find(".icon_galeria").css("display","none");
        $(this).find(".galeria").css("display","none");
        $(this).find(".podcast").css("display","none");
        $(this).find(".icon_podcast").css("display","none");
        $(this).find(".foto").css("display","none");
      }else if(ContentTypeL == "Podcast"){
        $(this).find(".podcast").css("display","block");
        $(this).find(".icon_podcast").css("display","block");
        $(this).find(".icon_video").css("display","none");
        $(this).find(".video").css("display","none");
        $(this).find(".icon_galeria").css("display","none");
        $(this).find(".galeria").css("display","none");
        $(this).find(".foto").css("display","none");
      }else if(ContentTypeL == "Artículo"){
        $(this).find(".icon_video").css("display","none");
        $(this).find(".video").css("display","none");
        $(this).find(".icon_galeria").css("display","none");
        $(this).find(".galeria").css("display","none");
        $(this).find(".icon_podcast").css("display","none");
        $(this).find(".podcast").css("display","none");
        $(this).find(".foto").css("display","block");
      }else if(ContentTypeL == "Infografía"){
        $(this).find(".icon_video").css("display","none");
        $(this).find(".video").css("display","none");
        $(this).find(".icon_galeria").css("display","none");
        $(this).find(".galeria").css("display","none");
        $(this).find(".icon_podcast").css("display","none");
        $(this).find(".podcast").css("display","none");
        $(this).find(".foto").css("display","block");
      }
  });

  $(".view-especiales.view-id-especiales.view-display-id-block_2 .views-row").each(function(){
      var ContentTypeL = $(this).find(".tipo").html();
      if(ContentTypeL == "Galería de imagenes"){
        $(this).find(".icon_galeria").css("display","block");
        $(this).find(".galeria").css("display","block");
        $(this).find(".icon_video").css("display","none");
        $(this).find(".video").css("display","none");
        $(this).find(".podcast").css("display","none");
        $(this).find(".icon_podcast").css("display","none");
        $(this).find(".foto").css("display","none");
      }else if(ContentTypeL == "Video"){
        $(this).find(".icon_video").css("display","block");
        $(this).find(".video").css("display","block");
        $(this).find(".icon_galeria").css("display","none");
        $(this).find(".galeria").css("display","none");
        $(this).find(".podcast").css("display","none");
        $(this).find(".icon_podcast").css("display","none");
        $(this).find(".foto").css("display","none");
      }else if(ContentTypeL == "Podcast"){
        $(this).find(".podcast").css("display","block");
        $(this).find(".icon_podcast").css("display","block");
        $(this).find(".icon_video").css("display","none");
        $(this).find(".video").css("display","none");
        $(this).find(".icon_galeria").css("display","none");
        $(this).find(".galeria").css("display","none");
        $(this).find(".foto").css("display","none");
      }else if(ContentTypeL == "Artículo"){
        $(this).find(".icon_video").css("display","none");
        $(this).find(".video").css("display","none");
        $(this).find(".icon_galeria").css("display","none");
        $(this).find(".galeria").css("display","none");
        $(this).find(".icon_podcast").css("display","none");
        $(this).find(".podcast").css("display","none");
        $(this).find(".foto").css("display","block");
      }else if(ContentTypeL == "Infografía"){
        $(this).find(".icon_video").css("display","none");
        $(this).find(".video").css("display","none");
        $(this).find(".icon_galeria").css("display","none");
        $(this).find(".galeria").css("display","none");
        $(this).find(".icon_podcast").css("display","none");
        $(this).find(".podcast").css("display","none");
        $(this).find(".foto").css("display","block");
      }
  });

  $("#especiales .notas-relacionadas .view-especiales.view-id-especiales.view-display-id-block_2 .views-row").each(function(){
      var seccionT = $(this).find(".info .nota .head .seccion a").html();
      if(seccionT == "Cúcuta" || seccionT == "Memorias" || seccionT == "Por los barrios"){
        $(this).find(".info .nota .head .seccion a").css({color:"#BA2025"}); 
      }else
      if(seccionT == "Región" || seccionT == "Pamplona" || seccionT == "Ocaña"){
        $(this).find(".info .nota .head .seccion a").css({color:"#F9D821"}); 
      }else
      if(seccionT == "Judicial"){
        $(this).find(".info .nota .head .seccion a").css({color:"#F87917"}); 
      }else
      if(seccionT == "Frontera"){
        $(this).find(".info .nota .head .seccion a").css({color:"#89C33F"}); 
      }else
      if(seccionT == "Actualidad" || seccionT == "Economía" || seccionT == "Política" || seccionT == "Colombia" || seccionT == "Venezuela" || seccionT == "Mundo"){
        $(this).find(".info .nota .head .seccion a").css({color:"#3D9E04"}); 
      }else
      if(seccionT == "Opinión" || seccionT == "Editorial" || seccionT == "Columnistas" || seccionT == "Caricaturas"){
        $(this).find(".info .nota .head .seccion a").css({color:"#BFD63E"}); 
      }else
      if(seccionT == "Deportes" || seccionT == "Cúcuta Deportivo" || seccionT == "Fútbol" || seccionT == "+ Deportes" || seccionT == "Copa América 2015" || seccionT == "Copa América 2016"){
        $(this).find(".info .nota .head .seccion a").css({color:"#3FA6F2"}); 
      }else
      if(seccionT == "Entretenimiento" || seccionT == "Actividad social" || seccionT == "Tecnología" || seccionT == "Cultura" || seccionT == "Cultura" || seccionT == "Tendencias" || seccionT == "Viral" || seccionT == "Vida y salud" || seccion == "Zona verde"){
        $(this).find(".info .nota .head .seccion a").css({color:"#8B7AB5"}); 
      }else
      if(seccionT == "Participación" || seccionT == "Reportero ciudadano" || seccionT == "Así opinan"){
        $(this).find(".info .nota .head .seccion a").css({color:"#C60B77"}); 
      }
    });

  $(".view-especiales.view-id-especiales.view-display-id-block_4 .views-row").each(function(){
      var ContentTypeL = $(this).find(".tipo").html();
      if(ContentTypeL == "Galería de imagenes"){
        $(this).find(".icon_galeria").css("display","block");
        $(this).find(".galeria").css("display","block");
        $(this).find(".icon_video").css("display","none");
        $(this).find(".video").css("display","none");
        $(this).find(".podcast").css("display","none");
        $(this).find(".icon_podcast").css("display","none");
        $(this).find(".foto").css("display","none");
      }else if(ContentTypeL == "Video"){
        $(this).find(".icon_video").css("display","block");
        $(this).find(".video").css("display","block");
        $(this).find(".icon_galeria").css("display","none");
        $(this).find(".galeria").css("display","none");
        $(this).find(".podcast").css("display","none");
        $(this).find(".icon_podcast").css("display","none");
        $(this).find(".foto").css("display","none");
      }else if(ContentTypeL == "Podcast"){
        $(this).find(".podcast").css("display","block");
        $(this).find(".icon_podcast").css("display","block");
        $(this).find(".icon_video").css("display","none");
        $(this).find(".video").css("display","none");
        $(this).find(".icon_galeria").css("display","none");
        $(this).find(".galeria").css("display","none");
        $(this).find(".foto").css("display","none");
      }else if(ContentTypeL == "Artículo"){
        $(this).find(".icon_video").css("display","none");
        $(this).find(".video").css("display","none");
        $(this).find(".icon_galeria").css("display","none");
        $(this).find(".galeria").css("display","none");
        $(this).find(".icon_podcast").css("display","none");
        $(this).find(".podcast").css("display","none");
        $(this).find(".foto").css("display","block");
      }else if(ContentTypeL == "Infografía"){
        $(this).find(".icon_video").css("display","none");
        $(this).find(".video").css("display","none");
        $(this).find(".icon_galeria").css("display","none");
        $(this).find(".galeria").css("display","none");
        $(this).find(".icon_podcast").css("display","none");
        $(this).find(".podcast").css("display","none");
        $(this).find(".foto").css("display","block");
      }
  });

  $(".view-especiales.view-id-especiales.view-display-id-block_5 .views-row").each(function(){
      var ContentTypeE = $(this).find(".tipo").html();
      if(ContentTypeE == "Galería de imagenes"){
        $(this).find(".icon_galeria").css("display","block");
        $(this).find(".galeria").css("display","block");
        $(this).find(".icon_video").css("display","none");
        $(this).find(".video").css("display","none");
        $(this).find(".podcast").css("display","none");
        $(this).find(".icon_podcast").css("display","none");
        $(this).find(".foto").css("display","none");
      }else if(ContentTypeE == "Video"){
        $(this).find(".icon_video").css("display","block");
        $(this).find(".video").css("display","block");
        $(this).find(".icon_galeria").css("display","none");
        $(this).find(".galeria").css("display","none");
        $(this).find(".podcast").css("display","none");
        $(this).find(".icon_podcast").css("display","none");
        $(this).find(".foto").css("display","none");
      }else if(ContentTypeE == "Podcast"){
        $(this).find(".podcast").css("display","block");
        $(this).find(".icon_podcast").css("display","block");
        $(this).find(".icon_video").css("display","none");
        $(this).find(".video").css("display","none");
        $(this).find(".icon_galeria").css("display","none");
        $(this).find(".galeria").css("display","none");
        $(this).find(".foto").css("display","none");
      }else if(ContentTypeE == "Artículo"){
        $(this).find(".icon_video").css("display","none");
        $(this).find(".video").css("display","none");
        $(this).find(".icon_galeria").css("display","none");
        $(this).find(".galeria").css("display","none");
        $(this).find(".icon_podcast").css("display","none");
        $(this).find(".podcast").css("display","none");
        $(this).find(".foto").css("display","block");
      }else if(ContentTypeE == "Infografía"){
        $(this).find(".icon_video").css("display","none");
        $(this).find(".video").css("display","none");
        $(this).find(".icon_galeria").css("display","none");
        $(this).find(".galeria").css("display","none");
        $(this).find(".podcast").css("display","none");
        $(this).find(".icon_podcast").css("display","none");
        $(this).find(".foto").css("display","block");
      }
  });

  $(".view-especiales.view-id-especiales.view-display-id-block_3 .views-row").each(function(){
      var ContentTypeL = $(this).find(".tipo").html();
      if(ContentTypeL == "Galería de imagenes"){
        $(this).find(".icon_galeria").css("display","block");
        $(this).find(".galeria").css("display","block");
        $(this).find(".icon_video").css("display","none");
        $(this).find(".video").css("display","none");
        $(this).find(".podcast").css("display","none");
        $(this).find(".icon_podcast").css("display","none");
        $(this).find(".foto").css("display","none");
      }else if(ContentTypeL == "Video"){
        $(this).find(".icon_video").css("display","block");
        $(this).find(".video").css("display","block");
        $(this).find(".icon_galeria").css("display","none");
        $(this).find(".galeria").css("display","none");
        $(this).find(".podcast").css("display","none");
        $(this).find(".icon_podcast").css("display","none");
        $(this).find(".foto").css("display","none");
      }else if(ContentTypeL == "Podcast"){
        $(this).find(".podcast").css("display","block");
        $(this).find(".icon_podcast").css("display","block");
        $(this).find(".icon_video").css("display","none");
        $(this).find(".video").css("display","none");
        $(this).find(".icon_galeria").css("display","none");
        $(this).find(".galeria").css("display","none");
        $(this).find(".foto").css("display","none");
      }else if(ContentTypeL == "Artículo"){
        $(this).find(".icon_video").css("display","none");
        $(this).find(".video").css("display","none");
        $(this).find(".icon_galeria").css("display","none");
        $(this).find(".galeria").css("display","none");
        $(this).find(".icon_podcast").css("display","none");
        $(this).find(".podcast").css("display","none");
        $(this).find(".foto").css("display","block");
      }else if(ContentTypeL == "Infografía"){
        $(this).find(".icon_video").css("display","none");
        $(this).find(".video").css("display","none");
        $(this).find(".icon_galeria").css("display","none");
        $(this).find(".galeria").css("display","none");
        $(this).find(".icon_podcast").css("display","none");
        $(this).find(".podcast").css("display","none");
        $(this).find(".foto").css("display","block");
      }
  });

  $("#especiales .view-especiales.view-id-especiales.view-display-id-block_3 .views-row").each(function(){
      var seccionT = $(this).find(".info .nota .head .seccion a").html();
      if(seccionT == "Cúcuta" || seccionT == "Memorias" || seccionT == "Por los barrios"){
        $(this).find(".info .nota .head .seccion a").css({color:"#BA2025"}); 
      }else
      if(seccionT == "Región" || seccionT == "Pamplona" || seccionT == "Ocaña"){
        $(this).find(".info .nota .head .seccion a").css({color:"#F9D821"}); 
      }else
      if(seccionT == "Judicial"){
        $(this).find(".info .nota .head .seccion a").css({color:"#F87917"}); 
      }else
      if(seccionT == "Frontera"){
        $(this).find(".info .nota .head .seccion a").css({color:"#89C33F"}); 
      }else
      if(seccionT == "Actualidad" || seccionT == "Economía" || seccionT == "Política" || seccionT == "Colombia" || seccionT == "Venezuela" || seccionT == "Mundo"){
        $(this).find(".info .nota .head .seccion a").css({color:"#3D9E04"}); 
      }else
      if(seccionT == "Opinión" || seccionT == "Editorial" || seccionT == "Columnistas" || seccionT == "Caricaturas"){
        $(this).find(".info .nota .head .seccion a").css({color:"#BFD63E"}); 
      }else
      if(seccionT == "Deportes" || seccionT == "Cúcuta Deportivo" || seccionT == "Fútbol" || seccionT == "+ Deportes" || seccionT == "Copa América 2015" || seccionT == "Copa América 2016"){
        $(this).find(".info .nota .head .seccion a").css({color:"#3FA6F2"}); 
      }else
      if(seccionT == "Entretenimiento" || seccionT == "Actividad social" || seccionT == "Tecnología" || seccionT == "Cultura" || seccionT == "Cultura" || seccionT == "Tendencias" || seccionT == "Viral" || seccionT == "Vida y salud" || seccion == "Zona verde"){
        $(this).find(".info .nota .head .seccion a").css({color:"#8B7AB5"}); 
      }else
      if(seccionT == "Participación" || seccionT == "Reportero ciudadano" || seccionT == "Así opinan"){
        $(this).find(".info .nota .head .seccion a").css({color:"#C60B77"}); 
      }
  });

  $("#especiales .view-especiales.view-id-especiales.view-display-id-block_4 .views-row").each(function(){
      var seccionT = $(this).find(".info .nota .head .seccion a").html();
      if(seccionT == "Cúcuta" || seccionT == "Memorias" || seccionT == "Por los barrios"){
        $(this).find(".info .nota .head .seccion a").css({color:"#BA2025"}); 
      }else
      if(seccionT == "Región" || seccionT == "Pamplona" || seccionT == "Ocaña"){
        $(this).find(".info .nota .head .seccion a").css({color:"#F9D821"}); 
      }else
      if(seccionT == "Judicial"){
        $(this).find(".info .nota .head .seccion a").css({color:"#F87917"}); 
      }else
      if(seccionT == "Frontera"){
        $(this).find(".info .nota .head .seccion a").css({color:"#89C33F"}); 
      }else
      if(seccionT == "Actualidad" || seccionT == "Economía" || seccionT == "Política" || seccionT == "Colombia" || seccionT == "Venezuela" || seccionT == "Mundo"){
        $(this).find(".info .nota .head .seccion a").css({color:"#3D9E04"}); 
      }else
      if(seccionT == "Opinión" || seccionT == "Editorial" || seccionT == "Columnistas" || seccionT == "Caricaturas"){
        $(this).find(".info .nota .head .seccion a").css({color:"#BFD63E"}); 
      }else
      if(seccionT == "Deportes" || seccionT == "Cúcuta Deportivo" || seccionT == "Fútbol" || seccionT == "+ Deportes" || seccionT == "Copa América 2015" || seccionT == "Copa América 2016"){
        $(this).find(".info .nota .head .seccion a").css({color:"#3FA6F2"}); 
      }else
      if(seccionT == "Entretenimiento" || seccionT == "Actividad social" || seccionT == "Tecnología" || seccionT == "Cultura" || seccionT == "Cultura" || seccionT == "Tendencias" || seccionT == "Viral" || seccionT == "Vida y salud" || seccion == "Zona verde"){
        $(this).find(".info .nota .head .seccion a").css({color:"#8B7AB5"}); 
      }else
      if(seccionT == "Participación" || seccionT == "Reportero ciudadano" || seccionT == "Así opinan"){
        $(this).find(".info .nota .head .seccion a").css({color:"#C60B77"}); 
      }
  });

  var click = 0;
  $('.galerias .btn-izq').click(function(){
    click++;
    if(click == 4){
      $('.galerias .view-especiales.view-id-especiales.view-display-id-block_3 .view-content .views-row').css("left", "0px");
      click = 0;
    }else{
      if(click == 1){
        $('.galerias .view-especiales.view-id-especiales.view-display-id-block_3 .view-content .views-row').css("left", "-1025px");
        click++;
      }else{
        var valor = $('.galerias .view-especiales.view-id-especiales.view-display-id-block_3 .view-content .views-row').attr("style");
        valor = valor.substring(6, 11);
        valor = parseInt(valor);
        valor = valor - 1035;
        $('.galerias .view-especiales.view-id-especiales.view-display-id-block_3 .view-content .views-row').css("left", valor);
      }
    }
  });

  $('.galerias .btn-der').click(function(){
    click++;
    if(click == 4){
      $('.galerias .view-especiales.view-id-especiales.view-display-id-block_3 .view-content .views-row').css("left", "0px");
      click = 0;
    }else{
      if(click == 1){
        $('.galerias .view-especiales.view-id-especiales.view-display-id-block_3 .view-content .views-row').css("left", "-1025px");
        click++;
      }else{
        var valor = $('.galerias .view-especiales.view-id-especiales.view-display-id-block_3 .view-content .views-row').attr("style");
        valor = valor.substring(6, 11);
        valor = parseInt(valor);
        valor = valor - 1035;
        $('.galerias .view-especiales.view-id-especiales.view-display-id-block_3 .view-content .views-row').css("left", valor);
      }
    }
  });
  var c = 0;
  $("header .top_n #menup_n .menu_p #iconos .lupa").click(function(){
      if(c == 0){
        $("header section").css("top", "56px");
        c++;
      }else{
        $("header section").css("top", "-23px");
        c = 0;
      }
  });



    //MENU MOVIL
    swmenu = 0;
    $(".icon_menu").click(function(){
    swmenu = 1;
        $(".menu").css({left:"0px"});
        $(".icon_close").css({display:"block"});
        $(".icon_menu").css({display:"none"});
    });

    $(".icon_close").click(function(){
    swmenu = 0;
        $(".menu").css({left:"-100%"});
        $(".icon_menu").css({display:"block"});
        $(".icon_close").css({display:"none"});
    });
    //FIN MENU MOVIL

}); 