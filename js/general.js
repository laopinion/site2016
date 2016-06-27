$(document).ready(function(){
                    
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
    if(seccion == "Deportes" || seccion == "Cúcuta deportivo" || seccion == "Fútbol" || seccion == "+ deportes" || seccion == "Copa américa 2016" || seccion == "Copa américa 2016"){
      $(".view-principal.view-display-id-block .nota .seccion .color").css({background:"#3FA6F2"}); 
    }else
    if(seccion == "Entretenimiento" || seccion == "Actividad Social" || seccion == "Tecnología" || seccion == "Cultura" || seccion == "Tendencias" || seccion == "Viral" || seccion == "Vida y salud"){
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
      if(seccionL == "Actualidad" || seccionL == "Economía" || seccionL == "Poítica" || seccionL == "Colombia" || seccionL == "Venezuela" || seccionL == "Mundo"){
        $(this).find(".nota .seccion .color").css({background:"#3D9E04"}); 
      }else
      if(seccionL == "Opinión" || seccionL == "Editorial" || seccionL == "Columnistas" || seccionL == "Caricaturas"){
        $(this).find(".nota .seccion .color").css({background:"#BFD63E"}); 
      }else
      if(seccionL == "Deportes" || seccionL == "Cúcuta Deportivo" || seccionL == "Fútbol" || seccionL == "+ deportes" || seccionL == "Copa América 2015" || seccionL == "Copa América 2016"){
        $(this).find(".nota .seccion .color").css({background:"#3FA6F2"}); 
      }else
      if(seccionL == "Entretenimiento" || seccionL == "Actividad social" || seccionL == "Tecnología" || seccionL == "Cultura" || seccionL == "Cultura" || seccionL == "Tendencias" || seccionL == "Viral" || seccionL == "Vida y salud"){
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
      if(seccionL == "Actualidad" || seccionL == "Economía" || seccionL == "Poítica" || seccionL == "Colombia" || seccionL == "Venezuela" || seccionL == "Mundo"){
        $(this).find(".nota .seccion .color").css({background:"#3D9E04"}); 
      }else
      if(seccionL == "Opinión" || seccionL == "Editorial" || seccionL == "Columnistas" || seccionL == "Caricaturas"){
        $(this).find(".nota .seccion .color").css({background:"#BFD63E"}); 
      }else
      if(seccionL == "Deportes" || seccionL == "Cúcuta Deportivo" || seccionL == "Fútbol" || seccionL == "+ deportes" || seccionL == "Copa América 2015" || seccionL == "Copa América 2016"){
        $(this).find(".nota .seccion .color").css({background:"#3FA6F2"}); 
      }else
      if(seccionL == "Entretenimiento" || seccionL == "Actividad social" || seccionL == "Tecnología" || seccionL == "Cultura" || seccionL == "Cultura" || seccionL == "Tendencias" || seccionL == "Viral" || seccionL == "Vida y salud"){
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
      if(seccionL == "Actualidad" || seccionL == "Economía" || seccionL == "Poítica" || seccionL == "Colombia" || seccionL == "Venezuela" || seccionL == "Mundo"){
        $(this).find(".nota .seccion .color").css({background:"#3D9E04"}); 
      }else
      if(seccionL == "Opinión" || seccionL == "Editorial" || seccionL == "Columnistas" || seccionL == "Caricaturas"){
        $(this).find(".nota .seccion .color").css({background:"#BFD63E"}); 
      }else
      if(seccionL == "Deportes" || seccionL == "Cúcuta Deportivo" || seccionL == "Fútbol" || seccionL == "+ deportes" || seccionL == "Copa América 2015" || seccionL == "Copa América 2016"){
        $(this).find(".nota .seccion .color").css({background:"#3FA6F2"}); 
      }else
      if(seccionL == "Entretenimiento" || seccionL == "Actividad social" || seccionL == "Tecnología" || seccionL == "Cultura" || seccionL == "Cultura" || seccionL == "Tendencias" || seccionL == "Viral" || seccionL == "Vida y salud"){
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
      if(seccionL == "Actualidad" || seccionL == "Economía" || seccionL == "Poítica" || seccionL == "Colombia" || seccionL == "Venezuela" || seccionL == "Mundo"){
        $(this).find(".nota .seccion .color").css({background:"#3D9E04"}); 
      }else
      if(seccionL == "Opinión" || seccionL == "Editorial" || seccionL == "Columnistas" || seccionL == "Caricaturas"){
        $(this).find(".nota .seccion .color").css({background:"#BFD63E"}); 
      }else
      if(seccionL == "Deportes" || seccionL == "Cúcuta Deportivo" || seccionL == "Fútbol" || seccionL == "+ deportes" || seccionL == "Copa América 2015" || seccionL == "Copa América 2016"){
        $(this).find(".nota .seccion .color").css({background:"#3FA6F2"}); 
      }else
      if(seccionL == "Entretenimiento" || seccionL == "Actividad social" || seccionL == "Tecnología" || seccionL == "Cultura" || seccionL == "Cultura" || seccionL == "Tendencias" || seccionL == "Viral" || seccionL == "Vida y salud"){
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
      if(seccionL == "Actualidad" || seccionL == "Economía" || seccionL == "Poítica" || seccionL == "Colombia" || seccionL == "Venezuela" || seccionL == "Mundo"){
        $(this).find(".nota .seccion .color").css({background:"#3D9E04"}); 
      }else
      if(seccionL == "Opinión" || seccionL == "Editorial" || seccionL == "Columnistas" || seccionL == "Caricaturas"){
        $(this).find(".nota .seccion .color").css({background:"#BFD63E"}); 
      }else
      if(seccionL == "Deportes" || seccionL == "Cúcuta Deportivo" || seccionL == "Fútbol" || seccionL == "+ deportes" || seccionL == "Copa América 2015" || seccionL == "Copa América 2016"){
        $(this).find(".nota .seccion .color").css({background:"#3FA6F2"}); 
      }else
      if(seccionL == "Entretenimiento" || seccionL == "Actividad social" || seccionL == "Tecnología" || seccionL == "Cultura" || seccionL == "Cultura" || seccionL == "Tendencias" || seccionL == "Viral" || seccionL == "Vida y salud"){
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
      }
    });

//VIDEOS
      var fila = ".view-id-principal.view-display-id-block_9 .views-row-";
      var titulo = $(".view-id-principal.view-display-id-block_9 .video .titulo").text();
      var idYoutube = $(fila + "1" + " .video .id").text();
      var autoPlay = 0;
      $(".view-id-principal.view-display-id-block_9 .views-row").addClass("inactive");
      //GlobalFunctions
      function limpiar(valFila){ $(fila + valFila + ".inactive" + " .video").css({opacity:"0.9"});}
      function llenar(valFila){$(fila + valFila + ".inactive" + " .video").css({opacity:"1", left:"0"});}
      function videoContent(valIdYoutube, valAutoPlay, titulo){
        $(".view-id-principal.view-display-id-block_9 .frame_video").empty().append("<iframe width=685 height=500px src=http://www.youtube.com/embed/" + valIdYoutube + "?showinfo=0&autohide=0&autoplay=" + valAutoPlay + " frameborder=0 allowfullscreen></iframe>");
        $(".view-id-principal.view-display-id-block_9 .titulo_video").empty().append(titulo);
        $(".view-id-principal.view-display-id-block_9 .views-row").addClass("inactive");
      }
      
      //LoadVideo
      llenar(1);
      videoContent(idYoutube, 0);
      //OverFunction
      $(fila + "1.inactive").mouseover(function(){llenar(1);});$(fila + "1.inactive").mouseleave(function(){limpiar(1);});
      $(fila + "2.inactive").mouseover(function(){llenar(2);});$(fila + "2.inactive").mouseleave(function(){limpiar(2);});
      $(fila + "3.inactive").mouseover(function(){llenar(3);});$(fila + "3.inactive").mouseleave(function(){limpiar(3);});
      $(fila + "4.inactive").mouseover(function(){llenar(4);});$(fila + "4.inactive").mouseleave(function(){limpiar(4);});
      //ClickFunction
      $(fila + "1").click(function(){idYoutube = $(fila + "1" + " .video .id").text();videoContent(idYoutube, 1);$(fila + "1").removeClass("inactive");limpiar(2);limpiar(3);limpiar(4);});
      $(fila + "2").click(function(){idYoutube = $(fila + "2" + " .video .id").text();videoContent(idYoutube, 1);$(fila + "2").removeClass("inactive");limpiar(1);limpiar(3);limpiar(4);});
      $(fila + "3").click(function(){idYoutube = $(fila + "3" + " .video .id").text();videoContent(idYoutube, 1);$(fila + "3").removeClass("inactive");limpiar(1);limpiar(2);limpiar(4);});
      $(fila + "4").click(function(){idYoutube = $(fila + "4" + " .video .id").text();videoContent(idYoutube, 1);$(fila + "4").removeClass("inactive");limpiar(1);limpiar(2);limpiar(3);});
      $(".view-id-principal.view-display-id-block_9 .views-row-1").removeClass("inactive");
//PAGINADOR VIDEOS
      var contentV = ".view-id-principal.view-display-id-block_9 .view-content";
      function cambiarV(itemV){$(".videos .pagerV li").css({background:"#333"});$(".videos .pagerV .itemV" + itemV).css({background:"#333"});}
      $(".videos .pagerV .itemV1").click(function(){$(contentV).css({left:"0px"});cambiarV(1);});
      $(".videos .pagerV .itemV2").click(function(){$(contentV).css({left:"-305px"});cambiarV(2);});
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
      if(seccionL == "Actualidad" || seccionL == "Economía" || seccionL == "Poítica" || seccionL == "Colombia" || seccionL == "Venezuela" || seccionL == "Mundo"){
        $(this).find(".video .seccion .color").css({background:"#3D9E04"}); 
      }else
      if(seccionL == "Opinión" || seccionL == "Editorial" || seccionL == "Columnistas" || seccionL == "Caricaturas"){
        $(this).find(".video .seccion .color").css({background:"#BFD63E"}); 
      }else
      if(seccionL == "Deportes" || seccionL == "Cúcuta Deportivo" || seccionL == "Fútbol" || seccionL == "+ deportes" || seccionL == "Copa América 2015" || seccionL == "Copa América 2016"){
        $(this).find(".video .seccion .color").css({background:"#3FA6F2"}); 
      }else
      if(seccionL == "Entretenimiento" || seccionL == "Actividad social" || seccionL == "Tecnología" || seccionL == "Cultura" || seccionL == "Cultura" || seccionL == "Tendencias" || seccionL == "Viral" || seccionL == "Vida y salud"){
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
      if(seccionL == "Actualidad" || seccionL == "Economía" || seccionL == "Poítica" || seccionL == "Colombia" || seccionL == "Venezuela" || seccionL == "Mundo"){
        $(this).find(".galeria .info .seccion .color").css({background:"#3D9E04"}); 
      }else
      if(seccionL == "Opinión" || seccionL == "Editorial" || seccionL == "Columnistas" || seccionL == "Caricaturas"){
        $(this).find(".galeria .info .seccion .color").css({background:"#BFD63E"}); 
      }else
      if(seccionL == "Deportes" || seccionL == "Cúcuta Deportivo" || seccionL == "Fútbol" || seccionL == "+ deportes" || seccionL == "Copa América 2015" || seccionL == "Copa América 2016"){
        $(this).find(".galeria .info .seccion .color").css({background:"#3FA6F2"}); 
      }else
      if(seccionL == "Entretenimiento" || seccionL == "Actividad social" || seccionL == "Tecnología" || seccionL == "Cultura" || seccionL == "Cultura" || seccionL == "Tendencias" || seccionL == "Viral" || seccionL == "Vida y salud"){
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
      $(".view-principal.view-display-id-block_10 .control_right").click(function(){$(contentG).css({left:"-325px"});cambiarG(2);});
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
      if(seccionL == "Actualidad" || seccionL == "Economía" || seccionL == "Poítica" || seccionL == "Colombia" || seccionL == "Venezuela" || seccionL == "Mundo"){
        $(this).find(".podcast .info .seccion .color").css({background:"#3D9E04"}); 
      }else
      if(seccionL == "Opinión" || seccionL == "Editorial" || seccionL == "Columnistas" || seccionL == "Caricaturas"){
        $(this).find(".podcast .info .seccion .color").css({background:"#BFD63E"}); 
      }else
      if(seccionL == "Deportes" || seccionL == "Cúcuta Deportivo" || seccionL == "Fútbol" || seccionL == "+ deportes" || seccionL == "Copa América 2015" || seccionL == "Copa América 2016"){
        $(this).find(".podcast .info .seccion .color").css({background:"#3FA6F2"}); 
      }else
      if(seccionL == "Entretenimiento" || seccionL == "Actividad social" || seccionL == "Tecnología" || seccionL == "Cultura" || seccionL == "Cultura" || seccionL == "Tendencias" || seccionL == "Viral" || seccionL == "Vida y salud"){
        $(this).find(".podcast .info .seccion .color").css({background:"#8B7AB5"}); 
      }else
      if(seccionL == "Participación" || seccionL == "Reportero ciudadano" || seccionL == "Así opinan"){
        $(this).find(".podcast .info .seccion .color").css({background:"#C60B77"}); 
      }
    });
//FIN COLOR
//PAGINADOR PODCAST
      var contentP = ".view-principal.view-display-id-block_11 .view-content";
      function cambiarP(itemP){$(".view-principal.view-display-id-block_11 .control").css({opacity:"0.8"});$(".view-principal.view-display-id-block_11 .control" + itemP).css({background:"#f2f2f2"});}
      $(".view-principal.view-display-id-block_11 .control_left").click(function(){$(contentP).css({left:"20px"});cambiarP(1);});
      $(".view-principal.view-display-id-block_11 .control_right").click(function(){$(contentP).css({left:"-325px"});cambiarP(2);});
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
      if(seccionL == "Actualidad" || seccionL == "Economía" || seccionL == "Poítica" || seccionL == "Colombia" || seccionL == "Venezuela" || seccionL == "Mundo"){
        $(this).find(".infografia .seccion .color").css({background:"#3D9E04"}); 
      }else
      if(seccionL == "Opinión" || seccionL == "Editorial" || seccionL == "Columnistas" || seccionL == "Caricaturas"){
        $(this).find(".infografia .seccion .color").css({background:"#BFD63E"}); 
      }else
      if(seccionL == "Deportes" || seccionL == "Cúcuta Deportivo" || seccionL == "Fútbol" || seccionL == "+ deportes" || seccionL == "Copa América 2015" || seccionL == "Copa América 2016"){
        $(this).find(".infografia .seccion .color").css({background:"#3FA6F2"}); 
      }else
      if(seccionL == "Entretenimiento" || seccionL == "Actividad social" || seccionL == "Tecnología" || seccionL == "Cultura" || seccionL == "Cultura" || seccionL == "Tendencias" || seccionL == "Viral" || seccionL == "Vida y salud"){
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
  if(seccion == "Deportes" || seccion == "Cúcuta deportivo" || seccion == "Fútbol" || seccion == "+ deportes" || seccion == "Copa américa 2016" || seccion == "Copa américa 2016"){
    $(".contenido .color").css({background:"#3FA6F2"}); 
  }else
  if(seccion == "Entretenimiento" || seccion == "Actividad Social" || seccion == "Tecnología" || seccion == "Cultura" || seccion == "Tendencias" || seccion == "Viral" || seccion == "Vida y salud"){
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
    if(seccionL == "Actualidad" || seccionL == "Economía" || seccionL == "Poítica" || seccionL == "Colombia" || seccionL == "Venezuela" || seccionL == "Mundo"){
      $(this).find(".nota .seccion .color").css({background:"#3D9E04"}); 
    }else
    if(seccionL == "Opinión" || seccionL == "Editorial" || seccionL == "Columnistas" || seccionL == "Caricaturas"){
      $(this).find(".nota .seccion .color").css({background:"#BFD63E"}); 
    }else
    if(seccionL == "Deportes" || seccionL == "Cúcuta Deportivo" || seccionL == "Fútbol" || seccionL == "+ deportes" || seccionL == "Copa América 2015" || seccionL == "Copa América 2016"){
      $(this).find(".nota .seccion .color").css({background:"#3FA6F2"}); 
    }else
    if(seccionL == "Entretenimiento" || seccionL == "Actividad social" || seccionL == "Tecnología" || seccionL == "Cultura" || seccionL == "Cultura" || seccionL == "Tendencias" || seccionL == "Viral" || seccionL == "Vida y salud"){
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
    if(seccionL == "Actualidad" || seccionL == "Economía" || seccionL == "Poítica" || seccionL == "Colombia" || seccionL == "Venezuela" || seccionL == "Mundo"){
      $(this).find(".field-content .seccion .color").css({background:"#3D9E04"}); 
    }else
    if(seccionL == "Opinión" || seccionL == "Editorial" || seccionL == "Columnistas" || seccionL == "Caricaturas"){
      $(this).find(".field-content .seccion .color").css({background:"#BFD63E"}); 
    }else
    if(seccionL == "Deportes" || seccionL == "Cúcuta Deportivo" || seccionL == "Fútbol" || seccionL == "+ deportes" || seccionL == "Copa América 2015" || seccionL == "Copa América 2016"){
      $(this).find(".field-content .seccion .color").css({background:"#3FA6F2"}); 
    }else
    if(seccionL == "Entretenimiento" || seccionL == "Actividad social" || seccionL == "Tecnología" || seccionL == "Cultura" || seccionL == "Cultura" || seccionL == "Tendencias" || seccionL == "Viral" || seccionL == "Vida y salud"){
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
    if(seccionL == "Actualidad" || seccionL == "Economía" || seccionL == "Poítica" || seccionL == "Colombia" || seccionL == "Venezuela" || seccionL == "Mundo"){
      $(this).find(".field-content .seccion .color").css({background:"#3D9E04"}); 
    }else
    if(seccionL == "Opinión" || seccionL == "Editorial" || seccionL == "Columnistas" || seccionL == "Caricaturas"){
      $(this).find(".field-content .seccion .color").css({background:"#BFD63E"}); 
    }else
    if(seccionL == "Deportes" || seccionL == "Cúcuta Deportivo" || seccionL == "Fútbol" || seccionL == "+ deportes" || seccionL == "Copa América 2015" || seccionL == "Copa América 2016"){
      $(this).find(".field-content .seccion .color").css({background:"#3FA6F2"}); 
    }else
    if(seccionL == "Entretenimiento" || seccionL == "Actividad social" || seccionL == "Tecnología" || seccionL == "Cultura" || seccionL == "Cultura" || seccionL == "Tendencias" || seccionL == "Viral" || seccionL == "Vida y salud"){
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
    if(seccionL == "Actualidad" || seccionL == "Economía" || seccionL == "Poítica" || seccionL == "Colombia" || seccionL == "Venezuela" || seccionL == "Mundo"){
      $(this).find(".field-content .seccion .color").css({background:"#3D9E04"}); 
    }else
    if(seccionL == "Opinión" || seccionL == "Editorial" || seccionL == "Columnistas" || seccionL == "Caricaturas"){
      $(this).find(".field-content .seccion .color").css({background:"#BFD63E"}); 
    }else
    if(seccionL == "Deportes" || seccionL == "Cúcuta Deportivo" || seccionL == "Fútbol" || seccionL == "+ deportes" || seccionL == "Copa América 2015" || seccionL == "Copa América 2016"){
      $(this).find(".field-content .seccion .color").css({background:"#3FA6F2"}); 
    }else
    if(seccionL == "Entretenimiento" || seccionL == "Actividad social" || seccionL == "Tecnología" || seccionL == "Cultura" || seccionL == "Cultura" || seccionL == "Tendencias" || seccionL == "Viral" || seccionL == "Vida y salud"){
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
  var id = $(".contenido .video_id .field-name-field-video-id .field-item").html();
  var plataforma = $(".contenido .plataforma .field-name-field-plataforma .field-item").html();
  var youtubeplayer = "<iframe id=frame-video width=1006 height500 src=http://www.youtube.com/embed/" + id + "?hl=es&fs=1&rel=0&showinfo=0 frameborder=0 allowfullscreen></iframe>";
  var facebookplayer = "<div class=fb-video data-href=https://www.facebook.com/" + id + "/ data-width=1006 data-show-text=false><blockquote cite=https://www.facebook.com/" + id + "/ class=fb-xfbml-parse-ignore><a href=https://www.facebook.com/" + id + "/></a></blockquote></div>";
  var vineplayer = "<iframe src=https://vine.co/v/" + id + "/embed/simple width=1006 height=500 frameborder=0></iframe>";
  var instagramplayer = "<blockquote class=instagram-media data-instgrm-captioned data-instgrm-version=7 style= background:#FFF; border:0; border-radius:3px; box-shadow:0 0 1px 0 rgba(0,0,0,0.5),0 1px 10px 0 rgba(0,0,0,0.15); margin: 1px; max-width:658px; padding:0; width:99.375%; width:-webkit-calc(100% - 2px); width:calc(100% - 2px);><div style=padding:8px;> <div style= background:#F8F8F8; line-height:0; margin-top:40px; padding:28.125% 0; text-align:center; width:100%;> <div style= background:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACwAAAAsCAMAAAApWqozAAAABGdBTUEAALGPC/xhBQAAAAFzUkdCAK7OHOkAAAAMUExURczMzPf399fX1+bm5mzY9AMAAADiSURBVDjLvZXbEsMgCES5/P8/t9FuRVCRmU73JWlzosgSIIZURCjo/ad+EQJJB4Hv8BFt+IDpQoCx1wjOSBFhh2XssxEIYn3ulI/6MNReE07UIWJEv8UEOWDS88LY97kqyTliJKKtuYBbruAyVh5wOHiXmpi5we58Ek028czwyuQdLKPG1Bkb4NnM+VeAnfHqn1k4+GPT6uGQcvu2h2OVuIf/gWUFyy8OWEpdyZSa3aVCqpVoVvzZZ2VTnn2wU8qzVjDDetO90GSy9mVLqtgYSy231MxrY6I2gGqjrTY0L8fxCxfCBbhWrsYYAAAAAElFTkSuQmCC); display:block; height:44px; margin:0 auto -44px; position:relative; top:-22px; width:44px;></div></div> <p style= margin:8px 0 0 0; padding:0 4px;> <a href=https://www.instagram.com/p/" + id + "/ style= color:#000; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:normal; line-height:17px; text-decoration:none; word-wrap:break-word; target=_blank>Te enseñamos a preparar las tajadas de maduro de otra manera. Mira la receta completa en nuestro portal.</a></p> <p style= color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; line-height:17px; margin-bottom:0; margin-top:8px; overflow:hidden; padding:8px 0 7px; text-align:center; text-overflow:ellipsis; white-space:nowrap;>Un vídeo publicado por Deléitese Gastronomia (@deleitese_co) el <time style= font-family:Arial,sans-serif; font-size:14px; line-height:17px; datetime=2016-06-19T20:43:02+00:00>19 de Jun de 2016 a la(s) 1:43 PDT</time></p></div></blockquote>";

  if(plataforma == "YouTube"){
    $('.video-player').append(youtubeplayer);
  }else
  if(plataforma == "Facebook"){
    $('.video-player').append(facebookplayer);
  }else
  if(plataforma == "Vine"){
    $('.video-player').append(vineplayer);
  }else
  if(plataforma == "Instagram"){
    $('.video-player').append(instagramplayer);
  }
//Fin script video

/*Botones de caricaturas*/
$("#seccion .izq .contenido .caricaturas .paginador .item1").click(function(argument) {
  $("#seccion .izq .contenido .caricaturas .otras").css({top:"0px"})
  $("#seccion .izq .contenido .caricaturas .otras .view-opinion").css({height:"350px"})
});

$("#seccion .izq .contenido .caricaturas .paginador .item2").click(function(argument) {
  $("#seccion .izq .contenido .caricaturas .otras").css({top:"-190px"})
  $("#seccion .izq .contenido .caricaturas .otras .view-opinion").css({height:"550px"})
});
/*Fin boton de caricaturas*/



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