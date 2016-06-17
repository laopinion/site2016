<!-- Piano TRACKING -->
<?php
 if(menu_get_object()!=NULL);
 {
  $node = menu_get_object();//trae los datos del nodo
  if ($node && $node->nid) {
   if ($node->type=="article") {
    $terminotax = field_view_field('node', $node, 'field_seccion');
    $seccion =   $terminotax['#items'][0]['taxonomy_term']->name;
   } 
   else{
    $seccion = $node->type;
   }
   $autor=$node->name;
   $fecha=date("Y-m-d",$node->created)."T".date("H:i:s",$node->created);
   $campotag = field_view_field('node', $node, 'field_tags');
   $c=0;   $tags="";
   foreach ($campotag['#items'] as $campos){
    $tags=$tags.($campotag['#items'][$c]['taxonomy_term']->name).", ";
    $c++;
   }
   $tags=substr($tags,0,-2);// quita la coma y el espacio final
   /*echo "<br>Autor: ".$autor; 
   echo "<br>Fecha: ".$fecha;
   echo "<br>Sección: ".$seccion;
   echo "<br> Tags: ".$tags;*/
   ?>
   <script type="text/javascript">
    tp = window["tp"] || [];
    tp.push(["setAid", "yZbvvMnWiT"]);
    tp.push(["setContentCreated", "<?php echo $fecha;?>"]);
    tp.push(["setContentAuthor", "<?php echo $autor;?>"]);
    tp.push(["setContentSection", "<?php echo $seccion;?>"]);
    tp.push(["init", function() {
          tp.main.pageTrack({ 
                url: window.location.href, 
                tags: "<?php echo $tags;?>" // You can also use array object here 
          }); 
     }]);
    (function(src){var a=document.createElement("script");a.type = "text/javascript";a.async=true;a.src=src;var b=document.getElementsByTagName("script")[0];b.parentNode.insertBefore(a, b)})("//cdn.tinypass.com/api/tinypass.min.js"); 
   </script>
<?php
  }else{ 
   //$fecha=date("Y-m-d")."T".date("H:i:s");
   $seccion=$_GET['q'];
   $urlalias=drupal_lookup_path('alias',$seccion);//esta asignacion no funciona, pero en sección queda el nombre correcto
   echo " <!-- date: ".$fecha;
   echo " path: ".$urlalias;
   echo " seccion: ".$seccion." --> "; ?>
    <script type="text/javascript">
    tp = window["tp"] || [];
    tp.push(["setAid", "yZbvvMnWiT"]);
    <?php
    if ($seccion!='node'&&$urlalias!='node'){?>
    tp.push(["setContentSection", "<?php 
     if ($urlalias==''){
      echo $seccion;
     }else{
      echo $urlalias;
     }?>"]);
    <?php
    }?>
    (function(src){var a=document.createElement("script");a.type = "text/javascript";a.async=true;a.src=src;var b=document.getElementsByTagName("script")[0];b.parentNode.insertBefore(a, b)})("//cdn.tinypass.com/api/tinypass.min.js"); 
   </script> 
<?php
  }
 }
?>
<!-- FIN Piano TRACKING -->