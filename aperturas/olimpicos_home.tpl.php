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
    <div class="content">
    <!--Destacada--><?php $view = views_get_view('olimpicos_home'); print $view->preview('block'); ?><!--FIN Destacada-->
    <span class="boton_izq"></span>
    <!--Lista de notas--><?php $view = views_get_view('olimpicos_home'); print $view->preview('block_1'); ?><!--FIN lista notas-->
    <span class="boton_der"></span>      
    </div>
  </article>    
</seccion>
<!--FIN JUEGOS OLIMPICOS-->