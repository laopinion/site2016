<!--Contenido-->
    <div class="notas_header">
    <!--ANUNCIO 728x90--><div class="pauta p728x90n"><?php include("pautas/clickio728x90.php"); ?></div><!--FIN ANUNCIO 728x90-->
    </div>
    <!--ANUNCIO 1000x50 Flotante--><div class="pauta flotante"><?php include("pautas/N_flotante.php"); ?></div><!--FIN ANUNCIO 1000x50 Flotante-->
    <!--ANUNCIO Layer--><?php include("pautas/N_layer.php"); ?><!--FIN ANUNCIO Layer-->
<div id="pagina">
    <div class="cen">
      <!--ANUNCIO MOVIL 320x50--><div class="pauta_movil p320x50"><?php include("pautas/Nm_320x50_1.php"); ?></div><!--FIN ANUNCIO 320x50-->
      <div class="contenido">
          <?php 
            print "<h2 class=titulo>".$title."</h2>";
          ?>
          <div class="texto">
            <?php include("pautas/N_intext_1.php"); ?>
            <?php print render($content['body']); ?>
          </div>
      </div>  
        <?php include("pautas/adman_intext.php"); ?>
       <!--ANUNCIO 300x250--><div class="pauta p300x250"><h2 class="anuncio_txt">Publicidad</h2><div class="info"><?php include("pautas/N_468x60.php"); ?></div></div><!--FIN ANUNCIO 300x250-->
       <!--ANUNCIO MOVIL 320x50--><div class="pauta_movil p300x250"><?php include("pautas/Nm_320x50_2.php"); ?></div><!--FIN ANUNCIO 320x50-->
        <?php include("taboola.php"); ?>
        <!--Noticias recientes footer-->
      <div class="recientes_footer">
        <div class="titulo"><div class="color"></div><h2>ULTIMAS NOTICIAS</h2></div>
      </div>
      <div class="notas_footer">
        <!--Noticias Recientes--><?php print EjecutarViewCacheArg('recientes','block_3','q'.$_GET["q"],'corto'); ?><!--FIN Noticias Recientes-->
      </div><!--Fin Noticias recientes footer-->
      <hr>
      <!--Multimedia footer-->
      <div class="multimedia_recientes_footer">
        <div class="titulo"><div class="color"></div><h2>MULTIMEDIA</h2></div>
      </div>
      <div class="multimedia_footer">   
       <!--GALERIAS--><div class="galerias"></div><?php print EjecutarViewCacheArg('recientes','block_4','q'.$_GET["q"],'mediano'); ?><!--FIN GALERIAS-->
      </div>
      <!--FIN Multimedia footer-->
      <hr>
      <div class="center">
        <div class="productos"><div class="color"></div><a href="<?php print base_path(); ?>productos">Productos La Opinión</a></div><?php include_once("productos.php") ?>
      </div><!--Fin Productos la opinion-->
    </div>  
</div> 