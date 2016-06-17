<!--COMPARTIR-->
 <div class="compartir">
  <script>
  !function(d,s,id){
    var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';
    if(!d.getElementById(id)){
      js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";
      fjs.parentNode.insertBefore(js,fjs);
    }
  }(document,"script","twitter-wjs");
  </script>
  <ul class="redes_sociales">
    <li class="fb"><a class="st_facebook_large" href="#" onclick="window.open('https://www.facebook.com/sharer/sharer.php?u=www.laopinion.com.co<?php print $node_url ?>&amp;title=<?php print $title ?>', 'facebook-share-dialog', 'width=626,height=436'); return false;"></a></li>
    <li class="tw"><a class="st_twitter_large" href="https://twitter.com/intent/tweet?original_referer=http://www.laopinion.com.co<?php print $node_url ?>&amp;text=<?php print $title ?>&amp;tw_p=tweetbutton&amp;url=http://www.laopinion.com.co<?php print $node_url ?>"></a></li>
    <li class="go"><a class="st_googleplus_large" href="#" onclick="window.open('https://plus.google.com/share?url=www.laopinion.com.co<?php print $node_url ?>', 'Google +','width=626,height=436'); return false;"></a></li>
    <li class="pin"><a class="st_pinterest_large" href="#" onclick="window.open('http://pinterest.com/pin/create/button/?url=www.laopinion.com.co<?php print $node_url ?>', 'Pinterest','width=626,height=436'); return false;"></a></li>
    <li class="wp"><a class="st_whatsapp_large" <a href="whatsapp://send?text=<?php print "http://www.laopinion.com.co/".drupal_lookup_path('alias',"node/".$node->nid); ?>" data-action="share/whatsapp/share" rel="nofollow" >Compartir en WhatsApp</a></li>
  </ul>
</div><!--FIN COMPARTIR-->