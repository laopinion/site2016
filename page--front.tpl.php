<?php include("pautas/home.php"); ?>
<?php include("pautas/clickio_fixed.php"); ?>
<div class="pautas_header">
    <!--ANUNCIO 728x90--><div class="pauta p728x90"><h2 class="anuncio_txt">Publicidad</h2><div class="info"></div><?php include("pautas/H_728x90.php"); ?></div><!--FIN 1.ANUNCIO 728x90-->
    <!--ANUNCIO 220x90--><div class="pauta p220x90"><h2 class="anuncio_txt">Publicidad</h2><div class="info"></div><?php include("pautas/H_220x90.php"); ?></div><!--FIN 2.ANUNCIO 220x90-->
</div>
<div id="head_desktop"><?php include("header.tpl.php"); ?></div>
<div id="head_movil"><?php include("header_movil.tpl.php"); ?></div>
<!--ANUNCIO 1000x50 Flotante--><div class="pauta flotante"><?php //include("pautas/H_flotante.php"); ?></div><!--FIN ANUNCIO 1000x50 Flotante-->
<!--ANUNCIO MOVIL 320x50--><div class="pauta_movil fijo"><?php //include("pautas/Hm_320x50_4.php"); ?></div><!--FIN ANUNCIO 320x50-->
<!--ANUNCIO Layer--><?php include("pautas/H_layer.php"); ?></div><!--FIN ANUNCIO Layer-->
<div id= "oreja_div"></div>
<?php include("laterales.tpl.php"); ?>
  <section class="detailContent">
      <div id="home">
      	<div id="content">
      		<?php include("plebiscito.tpl.php"); ?>

      		
		</div>
      </div> 
  </section>

  <!-- Script FACEBOOK player -->
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v2.6";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<!-- FIN Script FACEBOOK player -->
<!-- Script INSTAGRAM player -->
<script async defer src=//platform.instagram.com/en_US/embeds.js></script>
<!-- FIN Script INSTAGRAM player -->
<!-- Script VINE player -->
<script src=https://platform.vine.co/static/scripts/embed.js></script>
<!-- FIN Script VINE player -->