<?php

  function GenerateRandomString($length) {
      $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
      $charactersLength = strlen($characters);
      $randomString = '';
      for ($i = 0; $i < $length; $i++) {
          $randomString .= $characters[rand(0, $charactersLength - 1)];
      }
      return $randomString;
  }
    $accountId = "564188";
    $merchantId = "561677";
    $referenceCode = GenerateRandomString(8);
    $apiKey = "s7rVA73TjpE2R7p8SpJ0cFizTj";
    $currency = "COP";
    $amount = "42000";
    $stringToHash = "$apiKey~$merchantId~$referenceCode~$amount~$currency";
    $signature = md5($stringToHash);
    $url = "https://gateway.payulatam.com/ppp-web-gateway";
    $responUrl = "http://www.laopinion.com.co/gracias-por-suscribirse-la-opinion";
?>

<section id="suscripciones">
  <div class="content">
    <section class="titulo"><h2>Suscripciones</h2></section>
    <section class="logos">
      <div class="izq">
        <img src="<?php print base_path(); ?>sites/default/themes/op/images/suscripcion_izq.jpg" alt="Suscripción" width="420">
      </div>
      <div class="der suscrip_desktop">
        <div class="logo_1"></div>
        <div class="logo_2"></div>
        <div class="logo_3"></div>
        <article class="suscrip_desktop">
          <p id="p1">Por ser suscriptor se le obsequia una publicación de una foto social en grupo para el día de sus cumpleaños y además obtiene un 15% de descuento en avisos sociales.</p>
          <p id="p2">En optativos, se les da un descuento dependiendo de la promoción; y eventos se obsequian boletas o se hacen descuentos especiales.</p>
          <p id="p3">Le llegara el servicio del periódico, adicional con todos los fascículos e insertos antes de las 6am a su casa u oficina.</p>
        </article>
      </div>
    </section><!--Fin logos-->
    <section class="meses suscrip_desktop">
      <div class="info">        
        <div class="tiempo" id="1a">
          <h2>1</h2>
          <div class="descripcion">
            <span><strong><aside>Año</aside>$299.000</strong> <br><p>A pagar por adquirir la suscripción</p></span>
          </div>
        </div>
        <span class="diario">$828 Ejemplar diario con la suscripción</span>
      </div>
      <div class="info">
        <div class="tiempo" id="6m">
          <h2>6</h2>
          <div class="descripcion">
            <span><strong><aside>Meses</aside>$190.000</strong> <br><p>A pagar por adquirir la suscripción</p></span>
          </div>
        </div>
        <span class="diario">$1.056 Ejemplar diario con la suscripción</span>
      </div>
      <div class="info"> 
        <div class="tiempo" id="3m">
          <h2>3</h2>
          <div class="descripcion">
            <span><strong><aside>Meses</aside>$110.000</strong> <br><p>A pagar por adquirir la suscripción</p></span>
          </div>
        </div>
        <span class="diario">$1.222 Ejemplar diario con la suscripción</span>
      </div>
      <div class="info">
        <div class="tiempo" id="1m">
           <h2>1</h2>
          <div class="descripcion">
            <span><strong><aside>Meses</aside>$42.000</strong> <br><p>A pagar por adquirir la suscripción</p></span>
          </div>
        </div>      
        <span class="diario">$1.400 Ejemplar diario con la suscripción</span>
      </div>
      <div class="info_ps">
        <p>Valor diario del periódico: De Lunes a Sábados:$1.500 y los Domingos:$2.800.</p>
      </div>
    </section><!--Fin meses-->
    <section class="suscrip_movil">
      <section class="iconos">
        <div class="logo_1"></div>
        <div class="logo_2"></div>
        <div class="logo_3"></div>
      </section>
        <article>
          <p id="p1">Por ser suscriptor se le obsequia una publicación de una foto social en grupo para el día de sus cumpleaños y además obtiene un 15% de descuento en avisos sociales.</p>
          <p id="p2">En optativos, se les da un descuento dependiendo de la promoción; y eventos se obsequian boletas o se hacen descuentos especiales.</p>
          <p id="p3">Le llegara el servicio del periódico, adicional con todos los fascículos e insertos antes de las 6am a su casa u oficina.</p>
        </article>
        <section class="mes">
          <section class="cuadro">
            <div class="info">        
              <div class="tiempo" id="1a">
                <h2>1</h2>
                <div class="descripcion">
                  <span><strong><aside>Año</aside>$299.000</strong> <br><p>A pagar por adquirir la suscripción</p></span>
                </div>
              </div>
              <span class="diario">$828 Ejemplar diario con la suscripción</span>
            </div>
          </section>
          <section class="cuadro">
            <div class="info">
              <div class="tiempo" id="6m">
                <h2>6</h2>
                <div class="descripcion">
                  <span><strong><aside>Meses</aside>$190.000</strong> <br><p>A pagar por adquirir la suscripción</p></span>
                </div>
              </div>
              <span class="diario">$1.056 Ejemplar diario con la suscripción</span>
            </div>
          </section>
        </section>
        <hr> 
        <section class="iconos">
          <div class="logo_2"></div>
          <div class="logo_3"></div>
        </section>
        <article>
          <p id="p1">Por ser suscriptor se le obsequia una publicación de una foto social en grupo para el día de sus cumpleaños y además obtiene un 15% de descuento en avisos sociales.</p>
          <p id="p3">Le llegara el servicio del periódico, adicional con todos los fascículos e insertos antes de las 6am a su casa u oficina.</p>
        </article>
        <section class="mes">
        <section class="cuadro">
            <div class="info"> 
              <div class="tiempo" id="3m">
                <h2>3</h2>
                <div class="descripcion">
                  <span><strong><aside>Meses</aside>$110.000</strong> <br><p>A pagar por adquirir la suscripción</p></span>
                </div>
              </div>
              <span class="diario">$1.222 Ejemplar diario con la suscripción</span>
            </div>
        </section>
        </section>
        <hr>
        <section class="iconos">
          <div class="logo_3"></div>
        </section>
        <article>
          <p id="p3">Le llegara el servicio del periódico, adicional con todos los fascículos e insertos antes de las 6am a su casa u oficina.</p>
        </article>
        <section class="mes">
          <section class="cuadro">
              <div class="info">
                <div class="tiempo" id="1m">
                   <h2>1</h2>
                  <div class="descripcion">
                    <span><strong><aside>Meses</aside>$42.000</strong> <br><p>A pagar por adquirir la suscripción</p></span>
                  </div>
                </div>      
                <span class="diario">$1.400 Ejemplar diario con la suscripción</span>
              </div>
          </section>
        </section>
    </section>
    <hr>  
    <section id="formulario">
      <h2>Formulario para suscripciones</h2>
      <!-- Falta codigo php -->
      <form method="post" action="<?=$url?>">
          <input name="merchantId"    type="hidden"  value="<?=$merchantId?>"   >
          <input name="accountId"     type="hidden"  value="<?=$accountId ?>" >
          <input id="description" name="description" type="hidden"  value="Suscripción por 1 mes"  >
          <input id="referenceCode" name="referenceCode" type="hidden"  value="<?=$referenceCode?>" >
          <input id="amount" name="amount" type="hidden"  value="<?=$amount?>">
          <input name="tax"           type="hidden"  value="0"  >
          <input name="taxReturnBase" type="hidden"  value="0" >
          <input name="currency"      type="hidden"  value="<?=$currency?>">
          <input id="signature" name="signature" type="hidden"  value="<?=$signature?>"  >
          <!--Tenes en cuenta que este input test se usa para pruebas en = 1 y en = 0 para producción-->
          <input name="test" type="hidden"  value="0" >
          <input id="payerFullName" type="hidden" name="payerFullName" value="">
          <!-- <input name="responseUrl"    type="hidden"  value="" >
          <input name="confirmationUrl"    type="hidden"  value="" > -->
          <div class="formulario">
              <div class="form-item">
                  <label for="nombres">Nombres</label>
                  <input id="nombres" type="text" name="nombres" class="form-text">
              </div>
              <div class="form-item">
                  <label for="apellidos">Apellidos</label>
                  <input id="apellidos" type="text" name="apellidos" class="form-text">
              </div>
              <div class="form-item">
                  <label for="cedula">Cédula de ciudadanía</label>
                  <input id="cedula" type="text" name="payerDocument" class="form-text">
              </div>
              <div class="form-item">
                  <label for="telefono">Teléfono (celular)</label>
                  <input type="text" name="mobilePhone" class="form-text" required>
              </div>
              <div class="form-item">
                  <label for="correo">Correo electrónico</label>
                  <input type="email" name="buyerEmail" class="form-text" required>
              </div>
              <!-- //////// -->
              <div class="form-item">
                  <label for="dirección">Dirección de correspondencia</label>
                  <input type="text" name="billingAddress" class="form-text" required>
              </div>
              <div class="form-item">
                  <label for="envio">Dirección de envío del ejemplar</label>
                  <input type="text" name="shippingAddress" class="form-text">
              </div>
              <div class="form-item">
                  <label for="ciudad">Ciudad de entrega del ejemplar</label>
                  <input type="text"  name="shippingCity" class="form-text" required>
              </div>
              <input type="hidden" name="shippingCountry" value="CO">
              <!-- //////// -->
              <div class="form-item">
                  <label for="suscripcion">Tipo de suscripción</label>
                  <select id="opciones_suscripcion">
                      <option value="1 mes">1 mes</option>
                      <option value="3 meses">3 meses</option>
                      <option value="6 meses">6 meses</option>
                      <option value="1 ano">1 año</option>
                  </select>
              </div>
              <div class="form-actions">
                  <input class="submit" name="Submit" type="submit"  value="Pagar" >
              </div>
              <div class="texto">
                <p>PRINCIPAL: Av. 4#16-12 La Playa.</p>
                <p>ATALAYA: Av. 0# 1-36 Lt. 2 Comuneros Tel: 5794646.</p>
                <a class="logo_tel" href="tel:5829999"></a>
                <a class="logo_wp" href="tel:3184156086"></a>
              </div>
          </div>
      </form>
      <img class="formas_pago" src="<?php print base_path(); ?>sites/default/themes/op/images/formas-pago.png" alt="Formas de pago">
    </section><!--Fin formulario-->
    <section id="mas_info">
          <h2>LO HACEMOS MÁS FÁCIL</h2>
      <div class="info">
        <div class="texto">Débito automático</div>
        <div class="circulo"></div>
        <div class="centro">
          <div class="texto">Pagos no Tarjetas débito presenciales</div>
          <div class="circulo_2"></div>
          <div class="texto">Tarjetas débito presenciales y crédito</div>
        </div>
        <div class="circulo_3"></div>
        <div class="texto desktop">Domicilio para efectivo y tarjetas</div>
      </div>
    </section>
  </div><!-- Fin content--> 
</section> <!-- /#seccion -->
     
<script>
  $(".meses .info #1a").hover(
    function() {
      $(".logos .der .logo_1").fadeTo("slow", 1);
      $(".logos .der .logo_3").fadeTo("slow", 1);      
      $(".logos .der #p1").fadeIn(1000, function(){
        $(".logos .der #p1").text("Por ser suscriptor se le obsequia una publicación de una foto social en grupo para el día de sus cumpleaños y además obtiene un 15% de descuento en avisos sociales.");
      });
      $(".logos .der #p2").fadeIn(1000, function(){
        $(".logos .der #p2").text("En optativos, se les da un descuento dependiendo de la promoción; y eventos se obsequian boletas o se hacen descuentos especiales.");
      });
      $(".logos .der #p3").fadeIn(1000, function(){
        $(".logos .der #p3").text("Le llegara el servicio del periódico, adicional con todos los fascículos e insertos antes de las 6am a su casa u oficina.");
      });
    }, function() {
      //$( this ).removeClass( "hover" );
    }
  );
  $(".meses .info #6m").hover(
    function() {
      $(".logos .der .logo_1").fadeTo("slow", 1);      
      $(".logos .der .logo_3").fadeTo("slow", 1);      
      $(".logos .der #p1").fadeIn(1000, function(){
        $(".logos .der #p1").text("Por ser suscriptor se le obsequia una publicación de una foto social en grupo para el día de sus cumpleaños y además obtiene un 15% de descuento en avisos sociales.");
      });
      $(".logos .der #p2").fadeIn(1000, function(){
        $(".logos .der #p2").text("En optativos, se les da un descuento dependiendo de la promoción; y eventos se obsequian boletas o se hacen descuentos especiales.");
      });
      $(".logos .der #p3").fadeIn(1000, function(){
        $(".logos .der #p3").text("Le llegara el servicio del periódico, adicional con todos los fascículos e insertos antes de las 6am a su casa u oficina.");
      });
    }, function() {
      //$( this ).removeClass( "hover" );
    }
  );
  $(".meses .info #3m").hover(
    function() {
      $(".logos .der .logo_1").fadeTo("slow", 0);
      $(".logos .der .logo_3").fadeTo("slow", 1);
      $(".logos .der #p1").fadeIn(1000, function(){
        $(".logos .der #p1").text("Por ser suscriptor se le obsequia una publicación de una foto social en grupo para el día de sus cumpleaños y además obtiene un 15% de descuento en avisos sociales.");
      });
      $(".logos .der #p3").fadeOut(1000);
      $(".logos .der #p2").fadeIn(1000, function(){
        $(".logos .der #p2").text("Le llegara el servicio del periódico, adicional con todos los fascículos e insertos antes de las 6am a su casa u oficina.");
      });
    }, function() {
      //$( this ).removeClass( "hover" );
    }
  );
  $(".meses .info #1m").hover(
    function() {
      $(".logos .der .logo_1").fadeTo("slow", 0);
      $(".logos .der .logo_3").fadeTo("slow", 0);
      $(".logos .der #p1").fadeIn(1000, function(){
        $(".logos .der #p1").text("Le llegara el servicio del periódico, adicional con todos los fascículos e insertos antes de las 6am a su casa u oficina.");
      });
      $(".logos .der #p2").fadeOut(1000);
      $(".logos .der #p3").fadeOut(1000);
    }, function() {
      //$( this ).removeClass( "hover" );
    }
  );

  /*Formulario*/
  $("select#opciones_suscripcion").change(function(){
        var opcion = $(this).val();
        if (opcion == "3 meses"){
            $("#amount").val('110000');
            $("#description").val('Suscripción por 3 meses');
            ajax('110000');
        }else if(opcion == "6 meses"){
            $("#amount").val('190000');
            $("#description").val('Suscripción por 6 meses');
            ajax('190000');
        }else if(opcion == "1 ano"){
            $("#amount").val('299000');
            $("#description").val('Suscripción por 1 año');
            ajax('290000');
        }else if(opcion == "1 mes"){
            $("#amount").val('42000');
            $("#description").val('Suscripción por 1 mes');
            ajax('42000')
        }
    });

    function ajax(amount){
        var nuevoAmount = amount;
        $.ajax({
            type: "POST",
            url: "http://www.laopinion.com.co/sites/default/themes/op/funcion.php",
            data: {"amount": nuevoAmount},
            success: function(data){
                separador = " ", // un espacio en blanco
                limite    = 2,
                arreglo = data.split(separador, limite);
                $("#signature").val(arreglo[0]);
                $("#referenceCode").val(arreglo[1]);
            },
            error: function(){
                alert('Error!');
            }
        });
    }
    /*Captura del nombre y apellido*/
    $(".submit").click(function(){
        nombres = $("#nombres").val();
        apellidos = $("#apellidos").val();
        $("#payerFullName").val(nombres+" "+apellidos);
    });

</script>