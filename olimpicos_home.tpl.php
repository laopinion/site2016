<!--JUEGOS OLIMPICOS-->
<seccion id="olimpicos_home">
  <article class="container">
    <div class="cintillo">
      <div class="logo_rio"></div>
      <div class="pestana">
        <a href="#">
          <div class="calendario"></div>
        </a>
        <span class="divisor"></span>
        <a href="#bandera">
          <div class="bandera"></div>
        </a>
      </div>
    </div><!--Fin cintillo -->
    <div class="contenido">
    <!--Destacada--><?php $view = views_get_view('olimpicos_home'); print $view->preview('block'); ?><!--FIN Destacada-->
    <!--Lista de notas--><?php $view = views_get_view('olimpicos_home'); print $view->preview('block_1'); ?><!--FIN lista notas-->      
    </div>
  </article>    
</seccion>
<!--FIN JUEGOS OLIMPICOS-->