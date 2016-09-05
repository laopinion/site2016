<section id="contactenos">
      <div class="content">
        <div class="izq">
          <h1>Contáctenos</h1>
          <div class="gps">
            <div class="texto">
              <span>Diario La Opinión</span>
              Av. 4 Nro. 16 - 12 La Playa
              Cúcuta - Colombia
            </div>
          </div>
          <div class="tel">
            <div class="texto">
              <span>Teléfonos</span>
              (+57) 7 582.9999 <br>
              Fax (+57) 7 583.1502
            </div>
          </div>
          <div class="siganos">
            <h2>Siganos</h2>
            <a href="https://www.facebook.com/laopinioncucuta/" target="_blank">
              <div class="f"></div><span>laopinioncucuta</span>
            </a>
            <a href="https://www.twitter.com/laopinioncucuta/" target="_blank">
              <div class="t"></div><span>@laopinioncucuta</span>
            </a>
            <a href="https://www.instagram.com/laopinioncucuta/" target="_blank">
              <div class="i"></div><span>@laopinioncucuta</span>
            </a>
            <a href="https://www.youtube.com/user/WEBLAOPINION" target="_blank">
              <div class="y"></div><span>laopinioncucuta</span>
            </a>
          </div>
          <div class="formulario">
            <h2>Escríbanos</h2>
            <?php
              print drupal_render($form['submitted']);
              print drupal_render_children($form);
            ?>
          </div>
        </div>
        <div class="der">
        <!--Edicion impresa--><?php $view = views_get_view('sidebar'); print $view->preview('block_4'); ?><!--FIN Edicion impresa-->
        <!--Calendario tributario--><?php $view = views_get_view('sidebar'); print $view->preview('block_6'); ?><!--FIN Calendario triubtario-->
        <!--Suscribcion--><div class="suscripcion"><a href="<?php print base_path(); ?>suscripciones"><img src="<?php print base_path(); ?>sites/default/themes/op/images/suscripcion2.jpg"></a></div><!--FIN Suscribcion-->
        <!--Clasificados--><div class="clasificados"><a href="http://clasificados.laopinion.com.co/"><img src="<?php print base_path(); ?>sites/default/themes/op/images/clasificados.jpg"></a></div><!--FIN Clasificados-->
           <!--Juegos--><div class="juegos"><a href="http://juegos.laopinion.com.co/"><img src="<?php print base_path(); ?>sites/default/themes/op/images/juegos.jpg"></a></div><!--FIN Juegos-->
        </div>         
      </div><!-- Fin content--> 
</section> <!-- /#seccion -->