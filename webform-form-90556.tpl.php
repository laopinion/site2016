
<style>
.links{display: none;}
</style>
      <?php if (!empty($tabs['#primary'])): ?><div id="tabs"><?php print render($tabs); ?></div><?php endif; ?>
      
        <!--<div class="content"><?php // print render($page['content']); ?></div> -->

        <div id="contactenos">
          <h2>Contáctenos</h2>
          <div class="arriba">
            <div class="leyenda">Contáctenos para dudas, sugerencias, problemas, comentarios, o simplemente para comunicarse con el equipo de Laopinión.com.co.</div>
            <div class="info"> <!-- INFO -->
              <div class="item item1">
                <div class="logo_o"></div>
                <div class="dir">Av. 4 Nro. 16 - 12 La Playa</div>
                <div class="ciudad">Cúcuta - Colombia</div>
              </div>
              <div class="item item2">
                <div class="tel"></div>
                <div class="pbx">Teléfono (+57) (7) 5829999</div>
                <div class="fax">Fax (+57) (7) 5831502</div>
              </div>
              <div class="item item3">
                <ul class="redes-sociales">
                    <li class="facebook"><a href="https://www.facebook.com/laopinioncucuta" target="_blank" style="border:0px;">Facebook</a></li>
                    <li class="twitter"><a href="https://www.twitter.com/opinionweb" target="_blank" style="border:0px;">Twitter</a></li>
                    <li class="instagram"><a href="https://www.instagram.com/laopinioncucuta" target="_blank" style="border:0px;">Instagram</a></li>
                    <li class="youtube"><a href="https://www.youtube.com/user/WEBLAOPINION" target="_blank" style="border:0px;">Youtube</a></li>
                </ul>
              </div>
            </div> <!-- INFO -->
          </div> 
          <div class="abajo">
            <h3>Escríbanos</h3>
              <div class="logo_o"></div>
              <div class="formulario">
                  <?php
                  print drupal_render($form['submitted']);
                  print drupal_render_children($form);
                  ?> 
              </div>    
          </div>
        </div>          
