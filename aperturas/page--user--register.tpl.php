<section id="registrar">
      <div class="content">
      <!-- <?php //if (!empty($tabs['#primary'])): ?><div id="tabs"><?php //print render($tabs); ?></div><?php //endif; ?> -->
        <h2>Crear cuenta</h2>
        <div class="registrar"></div>
        <div id="registrar_user">
          <?php print(drupal_render(drupal_get_form('user_register_form')));?>
        </div>
        <!--Fin Contenido-->
      </div><!-- Fin content--> 
</section> <!-- /#seccion -->