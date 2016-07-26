<section id="economia">
      <div class="content">
        <?php if (!empty($tabs['#primary'])): ?><div id="tabs"><?php print render($tabs); ?></div><?php endif; ?>
        <!--ANUNCIO 1000x30--><div class="p1000x30"><?php // $block =block_load('block',39); $output = drupal_render(_block_get_renderable_array(_block_render_blocks(array($block)))); print $output; ?></div><!--FIN 1.ANUNCIO 1000x30-->
        <!--Seccion--><?php $taxonomy_menu_block = block_load('taxonomy_menu_block','1'); print drupal_render(_block_get_renderable_array(_block_render_blocks(array($taxonomy_menu_block))));?><!--FIN seccion-->
        <?php $block =block_load('block',74); $output = drupal_render(_block_get_renderable_array(_block_render_blocks(array($block)))); print $output; ?>
        <div class="izq">
          <!--Destacada--><?php $view = views_get_view('s_general'); print $view->preview('block'); ?><!--FIN Destacada-->
          <!--Lista--><?php $view = views_get_view('s_general'); print $view->preview('block_2'); ?><!--FIN Lista-->
        </div>
        <div class="der">
          <!--Derecha--><?php $view = views_get_view('s_general'); print $view->preview('block_1'); ?><!--FIN Derecha-->
          <!--ANUNCIO 300x250--><div class="pauta p300x250" style="float:left"><h2 class="anuncio_txt">Publicidad</h2><div class="info"><?php $block =block_load('block',49); $output = drupal_render(_block_get_renderable_array(_block_render_blocks(array($block)))); print $output; ?></div></div><!--FIN ANUNCIO 300x250-->
        </div> <!--Fin der-->
        <div class="mid" style="border-top: 2px solid #B4B7BB"><!--Seguir leyendo-->          
          <!--Centro--><?php $view = views_get_view('s_general'); print $view->preview('block_5'); ?><!--FIN Centro-->
          <div class="divisor"></div>
          <!--ANUNCIO 300x250--><div class="pauta movil p300x250" style="margin-top: 35px;float:left"><h2 class="anuncio_txt">Publicidad</h2><div class="info"><?php $block =block_load('block',49); $output = drupal_render(_block_get_renderable_array(_block_render_blocks(array($block)))); print $output; ?></div></div><!--FIN ANUNCIO 300x250-->
        </div><!--Fin Seguir leyendo--> 
        <!--ANUNCIO 728x90--><div class="pauta desktop p728x90" style="margin: 0 135px 15px 135px;"><h2 class="anuncio_txt">Publicidad</h2><div class="info"><?php $block =block_load('block',49); $output = drupal_render(_block_get_renderable_array(_block_render_blocks(array($block)))); print $output; ?></div></div><!--FIN ANUNCIO 728x90-->
        <div class="mid" style="border: none;"><!--Mas noticias-->            
          <!--Centro--><?php $view = views_get_view('s_general'); print $view->preview('block_4'); ?><!--FIN Centro-->
        </div><!--Mas noticias--> 
      </div><!-- Fin content--> 
</section> <!-- /#seccion -->

<script>
  $(function() {
    comercio = $("#economia .seccion_economia_otros .item_comercio .costo_de_vida .item_puesto .indicador span").text();
    c = 0;
    $("#economia .seccion_economia_otros .item_comercio .costo_de_vida .item_puesto .indicador span").text(c);

    empleo_1 = $("#economia .seccion_economia_otros .item_empleo .empleo_1 .item_puesto .indicador span").text();
    c2 = 0;
    $("#economia .seccion_economia_otros .item_empleo .empleo_1 .item_puesto .indicador span").text(c2);

    empleo_2 = $("#economia .seccion_economia_otros .item_empleo .empleo_2 .item_puesto .indicador span").text();
    c3 = 0;
    $("#economia .seccion_economia_otros .item_empleo .empleo_2 .item_puesto .indicador span").text(c3);

    setTimeout(function(){inicio()},4000);
    function inicio() {
      var numero = setInterval(cuenta,100);
      function cuenta(){
        if(c <= comercio){
          $("#economia .seccion_economia_otros .item_comercio .costo_de_vida .item_puesto .indicador span").text(c);
          c++;
        }
      }
      var numero2 = setInterval(cuenta2,100);
      function cuenta2(){
        if(c2 <= empleo_1){
          $("#economia .seccion_economia_otros .item_empleo .empleo_1 .item_puesto .indicador span").text(c2);
          c2++;
        }
      }
      var numero3 = setInterval(cuenta3,100);
      function cuenta3(){
        if(c3 <= empleo_2){
          $("#economia .seccion_economia_otros .item_empleo .empleo_2 .item_puesto .indicador span").text(c3);
          c3++;
        }
      }

      if(empleo_1 == 2){
        $("#economia .seccion_economia_otros .item_empleo .empleo_1 .item_puesto .indicador").css({left: "-2px"});
      }else if(empleo_1 == 3){
        $("#economia .seccion_economia_otros .item_empleo .empleo_1 .item_puesto .indicador").css({left: "8px"});
      }else if(empleo_1 == 4){
        $("#economia .seccion_economia_otros .item_empleo .empleo_1 .item_puesto .indicador").css({left: "18px"})
      }else if(empleo_1 == 5){
        $("#economia .seccion_economia_otros .item_empleo .empleo_1 .item_puesto .indicador").css({left: "28px"});
      }else if(empleo_1 == 6){
        $("#economia .seccion_economia_otros .item_empleo .empleo_1 .item_puesto .indicador").css({left: "38px"});
      }else if(empleo_1 == 7){
        $("#economia .seccion_economia_otros .item_empleo .empleo_1 .item_puesto .indicador").css({left: "48px"});
      }else if(empleo_1 == 8){
        $("#economia .seccion_economia_otros .item_empleo .empleo_1 .item_puesto .indicador").css({left: "58px"});
      }else if(empleo_1 == 9){
        $("#economia .seccion_economia_otros .item_empleo .empleo_1 .item_puesto .indicador").css({left: "68px"});
      }else if(empleo_1 == 10){
        $("#economia .seccion_economia_otros .item_empleo .empleo_1 .item_puesto .indicador").css({left: "78px"});
      }else if(empleo_1 == 11){
        $("#economia .seccion_economia_otros .item_empleo .empleo_1 .item_puesto .indicador").css({left: "88px"});
      }else if(empleo_1 == 12){
        $("#economia .seccion_economia_otros .item_empleo .empleo_1 .item_puesto .indicador").css({left: "98px"});
      }else if(empleo_1 == 13){
        $("#economia .seccion_economia_otros .item_empleo .empleo_1 .item_puesto .indicador").css({left: "108px"});
      }else if(empleo_1 == 14){
        $("#economia .seccion_economia_otros .item_empleo .empleo_1 .item_puesto .indicador").css({left: "118px"});
      }else if(empleo_1 == 15){
        $("#economia .seccion_economia_otros .item_empleo .empleo_1 .item_puesto .indicador").css({left: "128px"});
      }else if(empleo_1 == 16){
        $("#economia .seccion_economia_otros .item_empleo .empleo_1 .item_puesto .indicador").css({left: "138px"});
      }else if(empleo_1 == 17){
        $("#economia .seccion_economia_otros .item_empleo .empleo_1 .item_puesto .indicador").css({left: "148px"});
      }else if(empleo_1 == 18){
        $("#economia .seccion_economia_otros .item_empleo .empleo_1 .item_puesto .indicador").css({left: "158px"});
      }else if(empleo_1 == 19){
        $("#economia .seccion_economia_otros .item_empleo .empleo_1 .item_puesto .indicador").css({left: "168px"});
      }else if(empleo_1 == 20){
        $("#economia .seccion_economia_otros .item_empleo .empleo_1 .item_puesto .indicador").css({left: "178px"});
      }else if(empleo_1 == 21){
        $("#economia .seccion_economia_otros .item_empleo .empleo_1 .item_puesto .indicador").css({left: "188px"});
      }else if(empleo_1 == 22){
        $("#economia .seccion_economia_otros .item_empleo .empleo_1 .item_puesto .indicador").css({left: "198px"});
      }else if(empleo_1 == 23){
        $("#economia .seccion_economia_otros .item_empleo .empleo_1 .item_puesto .indicador").css({left: "208px"});
      }

      if(empleo_2 == 2){
        $("#economia .seccion_economia_otros .item_empleo .empleo_2 .item_puesto .indicador").css({left: "-2px"});
      }else if(empleo_2 == 3){
        $("#economia .seccion_economia_otros .item_empleo .empleo_2 .item_puesto .indicador").css({left: "8px"});
      }else if(empleo_2 == 4){
        $("#economia .seccion_economia_otros .item_empleo .empleo_2 .item_puesto .indicador").css({left: "18px"})
      }else if(empleo_2 == 5){
        $("#economia .seccion_economia_otros .item_empleo .empleo_2 .item_puesto .indicador").css({left: "28px"});
      }else if(empleo_2 == 6){
        $("#economia .seccion_economia_otros .item_empleo .empleo_2 .item_puesto .indicador").css({left: "38px"});
      }else if(empleo_2 == 7){
        $("#economia .seccion_economia_otros .item_empleo .empleo_2 .item_puesto .indicador").css({left: "48px"});
      }else if(empleo_2 == 8){
        $("#economia .seccion_economia_otros .item_empleo .empleo_2 .item_puesto .indicador").css({left: "58px"});
      }else if(empleo_2 == 9){
        $("#economia .seccion_economia_otros .item_empleo .empleo_2 .item_puesto .indicador").css({left: "68px"});
      }else if(empleo_2 == 10){
        $("#economia .seccion_economia_otros .item_empleo .empleo_2 .item_puesto .indicador").css({left: "78px"});
      }else if(empleo_2 == 11){
        $("#economia .seccion_economia_otros .item_empleo .empleo_2 .item_puesto .indicador").css({left: "88px"});
      }else if(empleo_2 == 12){
        $("#economia .seccion_economia_otros .item_empleo .empleo_2 .item_puesto .indicador").css({left: "98px"});
      }else if(empleo_2 == 13){
        $("#economia .seccion_economia_otros .item_empleo .empleo_2 .item_puesto .indicador").css({left: "108px"});
      }else if(empleo_2 == 14){
        $("#economia .seccion_economia_otros .item_empleo .empleo_2 .item_puesto .indicador").css({left: "118px"});
      }else if(empleo_2 == 15){
        $("#economia .seccion_economia_otros .item_empleo .empleo_2 .item_puesto .indicador").css({left: "128px"});
      }else if(empleo_2 == 16){
        $("#economia .seccion_economia_otros .item_empleo .empleo_2 .item_puesto .indicador").css({left: "138px"});
      }else if(empleo_2 == 17){
        $("#economia .seccion_economia_otros .item_empleo .empleo_2 .item_puesto .indicador").css({left: "148px"});
      }else if(empleo_2 == 18){
        $("#economia .seccion_economia_otros .item_empleo .empleo_2 .item_puesto .indicador").css({left: "158px"});
      }else if(empleo_2 == 19){
        $("#economia .seccion_economia_otros .item_empleo .empleo_2 .item_puesto .indicador").css({left: "168px"});
      }else if(empleo_2 == 20){
        $("#economia .seccion_economia_otros .item_empleo .empleo_2 .item_puesto .indicador").css({left: "178px"});
      }else if(empleo_2 == 21){
        $("#economia .seccion_economia_otros .item_empleo .empleo_2 .item_puesto .indicador").css({left: "188px"});
      }else if(empleo_2 == 22){
        $("#economia .seccion_economia_otros .item_empleo .empleo_2 .item_puesto .indicador").css({left: "198px"});
      }else if(empleo_2 == 23){
        $("#economia .seccion_economia_otros .item_empleo .empleo_2 .item_puesto .indicador").css({left: "208px"});
      }

      if(comercio == 2){
        $("#economia .seccion_economia_otros .item_comercio .costo_de_vida .item_puesto .indicador").css({left: "-2px"});
      }else if(comercio == 3){
        $("#economia .seccion_economia_otros .item_comercio .costo_de_vida .item_puesto .indicador").css({left: "8px"});
      }else if(comercio == 4){
        $("#economia .seccion_economia_otros .item_comercio .costo_de_vida .item_puesto .indicador").css({left: "18px"});
      }else if(comercio == 5){
        $("#economia .seccion_economia_otros .item_comercio .costo_de_vida .item_puesto .indicador").css({left: "28px"});
      }else if(comercio == 6){
        $("#economia .seccion_economia_otros .item_comercio .costo_de_vida .item_puesto .indicador").css({left: "38px"});
      }else if(comercio == 7){
        $("#economia .seccion_economia_otros .item_comercio .costo_de_vida .item_puesto .indicador").css({left: "48px"});
      }else if(comercio == 8){
        $("#economia .seccion_economia_otros .item_comercio .costo_de_vida .item_puesto .indicador").css({left: "58px"});
      }else if(comercio == 9){
        $("#economia .seccion_economia_otros .item_comercio .costo_de_vida .item_puesto .indicador").css({left: "68px"});
      }else if(comercio == 10){
        $("#economia .seccion_economia_otros .item_comercio .costo_de_vida .item_puesto .indicador").css({left: "78px"});
      }else if(comercio == 11){
        $("#economia .seccion_economia_otros .item_comercio .costo_de_vida .item_puesto .indicador").css({left: "88px"});
      }else if(comercio == 12){
        $("#economia .seccion_economia_otros .item_comercio .costo_de_vida .item_puesto .indicador").css({left: "98px"});
      }else if(comercio == 13){
        $("#economia .seccion_economia_otros .item_comercio .costo_de_vida .item_puesto .indicador").css({left: "108px"});
      }else if(comercio == 14){
        $("#economia .seccion_economia_otros .item_comercio .costo_de_vida .item_puesto .indicador").css({left: "118px"});
      }else if(comercio == 15){
        $("#economia .seccion_economia_otros .item_comercio .costo_de_vida .item_puesto .indicador").css({left: "128px"});
      }else if(comercio == 16){
        $("#economia .seccion_economia_otros .item_comercio .costo_de_vida .item_puesto .indicador").css({left: "138px"});
      }else if(comercio == 17){
        $("#economia .seccion_economia_otros .item_comercio .costo_de_vida .item_puesto .indicador").css({left: "148px"});
      }else if(comercio == 18){
        $("#economia .seccion_economia_otros .item_comercio .costo_de_vida .item_puesto .indicador").css({left: "158px"});
      }else if(comercio == 19){
        $("#economia .seccion_economia_otros .item_comercio .costo_de_vida .item_puesto .indicador").css({left: "168px"});
      }else if(comercio == 20){
        $("#economia .seccion_economia_otros .item_comercio .costo_de_vida .item_puesto .indicador").css({left: "178px"});
      }else if(comercio == 21){
        $("#economia .seccion_economia_otros .item_comercio .costo_de_vida .item_puesto .indicador").css({left: "188px"});
      }else if(comercio == 22){
        $("#economia .seccion_economia_otros .item_comercio .costo_de_vida .item_puesto .indicador").css({left: "198px"});
      }else if(comercio == 23){
        $("#economia .seccion_economia_otros .item_comercio .costo_de_vida .item_puesto .indicador").css({left: "208px"});
      }
    }//fin funcion
  });
</script>