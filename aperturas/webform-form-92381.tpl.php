<style>
.links{display: none;}
</style>
      <?php if (!empty($tabs['#primary'])): ?><div id="tabs"><?php print render($tabs); ?></div><?php endif; ?>
      
        <!--<div class="content"><?php // print render($page['content']); ?></div> -->

        <div id="suscripciones">
          <h2>Suscripciones</h2>
          
          <div class="info">
              <div class="izquierda">
              
              </div>
              <div class="derecha">
                <h3>Formulario para suscripciones</h3>
                <div class="rollo"></div>
                <div class="leyenda">La información que necesita <span>a primera hora de la mañana</span></div>
                <div class="formulario">
                    <?php
                    print drupal_render($form['submitted']);
                    print drupal_render_children($form);
                    ?> 
                </div>    
              </div>
              <div class="bottom">
                <h4>Lo hacemos más fácil</h4>
                <div class="items">
                    <div class="item item1"><span>Débito automático</span></div>  
                    <div class="item item2"><span>Pagos no Tarjetas débito presenciales</span></div>
                    <div class="item item3"><span>Tarjetas débito presenciales y crédito</span></div>
                    <div class="item item4"><span>Domicilio para efectivo y tarjetas</span></div>
                </div>
                <div class="final">ADEMÁS: Fotografía social el día de cumpleaños - Descuento de 15% en otros sociales - Entrega a primera hora de la mañana.</div>
              </div>
          </div>          
