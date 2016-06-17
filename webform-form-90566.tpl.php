<style>
.links{display: none;}
</style>
      <?php if (!empty($tabs['#primary'])): ?><div id="tabs"><?php print render($tabs); ?></div><?php endif; ?>
      
        <!--<div class="content"><?php // print render($page['content']); ?></div> -->

        <div id="optativos">
          <h2>Optativos</h2>
          
          <div class="info">
              <div class="izquierda">
                <!--Optativos vigentes--><?php $block =block_load('block',77); $output = drupal_render(_block_get_renderable_array(_block_render_blocks(array($block)))); print $output; ?><!--Fin Optativos vigentes-->
              </div>
              <div class="derecha">
                <h3>Solicite su producto</h3>
                <div class="formulario">
                    <?php
                    print drupal_render($form['submitted']);
                    print drupal_render_children($form);
                    ?> 
                </div>
                <div class="llame">
                  <div class="ya">Llama ya</div>
                  <div class="num">5829999 ext. 110</div>
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
                <div class="final">ADEMÁS: Entrega a primera hora de la mañana.</div>
              </div>
          </div>          
