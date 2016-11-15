<!DOCTYPE html>
<!--[if lt IE 7]> <html class="ie6 ie" lang="<?php print $language->language; ?>" dir="<?php print $language->dir; ?>"> <![endif]-->
<!--[if IE 7]>    <html class="ie7 ie" lang="<?php print $language->language; ?>" dir="<?php print $language->dir; ?>"> <![endif]-->
<!--[if IE 8]>    <html class="ie8 ie" lang="<?php print $language->language; ?>" dir="<?php print $language->dir; ?>"> <![endif]-->
<!--[if gt IE 8]> <!--> <html class="" lang="<?php print $language->language; ?>" dir="<?php print $language->dir; ?>"> <!--<![endif]-->
<head>
  <?php print $head; ?>
  <!-- Set the viewport width to device width for mobile -->
<script src="<?php print base_path(); ?>sites/default/themes/op/js/add2homeScreen.js" charset="utf-8"></script>
<script type="text/javascript" src="<?php print base_path(); ?>sites/default/themes/op/js/taboola.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
<script type="text/javascript">if(typeof jQuery==='undefined'){document.write(unescape("<scri"+"pt src='<?php print base_path(); ?>sites/default/themes/op/js/jquery-1.8.2.min.js' type='text/javascript'></scri"+"pt>"));}</script>
<!--<script src="https://cdn.rawgit.com/kottenator/jquery-circle-progress/1.2.0/dist/circle-progress.js"></script>-->
<script type="text/javascript" src="<?php print base_path(); ?>sites/default/themes/op/js/general.js"></script>
<link rel="stylesheet" type="text/css" href="<?php print base_path(); ?>sites/default/themes/op/css/add2homeScreen.css"/>
<link href="<?php print base_path(); ?>sites/default/themes/op/css/style.css" rel="stylesheet" type="text/css"/>


<title><?php print $head_title; ?> | Cúcuta, Norte de Santander</title>
<meta property="fb:pages" content="110045065716092" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" >
<meta name="robots" content="index, follow">
<meta name="keywords" content="noticias,periódico,información,prensa,colombia,colombian,economía,internacional,cultura,deportes,entretenimiento,clasificados,salud,la opinion cúcuta,paz,investigación,actualidad,news"  />
<meta charset="utf-8">
<meta itemprop="genre" content="News" />
<meta itemprop="inLanguage" content="es-ES" />
<meta property="og:locale:alternate" content="es_CO" />
<meta property="og:locale" content="es_CO" />
<link rel="canonical" href="http://www.laopinion.com.co"/>
<link rel="image_src" href="http://www.laopinion.com.co/sites/default/themes/op/images/compartir.jpg"/>

<meta name="ROBOTS" content="FOLLOW">
<meta name="author" content="Diario la Opinión" />
<meta name="google" content="notranslate" />
<meta name="geo.region" content="CO" />
<meta name="geo.placename" content="Colombia" />
<meta name="language" content="spanish" />
<!-- Schema.org markup for Google+ -->
<meta itemprop="name" content="Principales noticias de Cúcuta, Norte de santander y la frontera con Venezuela - La Opinión" />
<meta itemprop="description" name="description" content="Principales noticias de Cúcuta, Norte de santander y la frontera entre Colombia y Venezuela: Últimas noticias en Cúcuta, frontera, economía, deportes, política y tecnología. Manténgase informado sobre las noticias de Cúcuta, Norte de Santander y la frontera con Venezuela en laopinion.com.co"/>

<meta itemprop="image" content="http://www.laopinion.com.co/sites/default/themes/op/images/compartir.jpg" />
<meta name="twitter:image" content="http://www.laopinion.com.co/sites/default/themes/op/images/compartir.jpg"/>

     <!--Icono precomposed-->
      <link rel="apple-touch-icon-precomposed" href="<?php print base_path(); ?>sites/default/themes/op/images/icon/touch-icon-iphone.png"/>
      <link rel="apple-touch-icon-precomposed" sizes="76x76" href="<?php print base_path(); ?>sites/default/themes/op/images/icon/touch-icon-ipad.png"/>
      <link rel="apple-touch-icon-precomposed" sizes="120x120" href="<?php print base_path(); ?>sites/default/themes/op/images/icon/touch-icon-iphone-retina.png"/>
      <link rel="apple-touch-icon-precomposed" sizes="152x152" href="<?php print base_path(); ?>sites/default/themes/op/images/icon/touch-icon-ipad-retina.png"/>
      <link rel="apple-touch-icon-precomposed" sizes="180x180" href="<?php print base_path(); ?>sites/default/themes/op/images/icon/touch-icon-iphone-6-plus.png"/>
     <!--FIN Icono precomposed-->

  <?php print $styles; ?>
  <?php print $scripts; ?>
  <!-- IE Fix for HTML5 Tags -->
  <!--[if lt IE 9]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->
<script type="text/javascript">
  var addToHomeConfig = {
    autostart: false,
  };
</script>

<script type="text/javascript">
  function loaded () {
  if ( window.location.hash.match('ATHS') ) return;
  addToHome.show();
  window.location.hash = '#ATHS';
  }
  window.addEventListener('load', loaded, false);
</script>
<meta name="fechaprint" content="<?php print date('m/d/Y h:i:s a', time()); ?>" />
<?php include_once("lemonnet.php") ?>


</head>

<body class="<?php print $classes; ?>" <?php print $attributes;?>>
  <?php // include_once("admanmedia.php") ?>
  <?php include_once("analyticstracking.php") ?>
  <?php include_once("io.php") ?>

  <?php print $page_top; ?>
  <div class="centerContent borderContent">
  <?php print $page; ?>
  <?php print $page_bottom; ?>
  <?php include_once("dataexpandtracking.php") ?>
  <?php include_once("hotwordstracking.php") ?>
    <div id="footer_desktop"><?php include("footer.tpl.php"); ?></div>
    <div id="footer_movil"><?php include("footer_movil.tpl.php"); ?></div>
  </div>
  <!-- Google SEO Structured Data -->
  <script type="application/ld+json">{
    "@context" : "http://schema.org",
    "@type" : "Organization",
    "name" : "Diario La Opinión",
    "url" : "http://www.laopinion.com.co ",
    "logo": "http://www.laopinion.com.co/sites/default/themes/op/images/logo150x150.jpg",
    "alternateName" : "La Opinión, Noticias y de Cúcuta y Colombia",
    "sameAs" : [
      "https://www.facebook.com/laopinioncucuta",
      "https://twitter.com/laopinioncucuta",
      "https://www.youtube.com/user/WEBLAOPINION",
      "https://www.instagram.com/laopinioncucuta"
    ]
  }
  </script>
  <!-- END - Google SEO Structured Data -->
</body>
</html>