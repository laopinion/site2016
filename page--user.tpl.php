<section id="login">
      <div class="content">
      <?php if (!empty($tabs['#primary'])): ?><div id="tabs"><?php print render($tabs); ?></div><?php endif; ?>
        <h2>Inicio de Sesión</h2>
        <div class="login"></div>
        <div id="inicio_sesion">
          <?php
            $inicio = drupal_render(drupal_get_form('user_login_block'));
            print $inicio;
          ?>
        </div>
        <!--Fin Contenido-->
      </div><!-- Fin content--> 
</section> <!-- /#seccion -->