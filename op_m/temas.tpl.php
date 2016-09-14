<!--Temas del día-->      
<div id="temas-dia">
  <?php
    list ($tema_one, $tema_one_link, $tema_two, $tema_two_link, $tema_three, $tema_three_link, $tema_four, $tema_four_link, $tema_five, $tema_five_link) = temas_output();
  ?>
  <div class="titulo">Temas del día</div>
  <div class="figur-1"></div>
  <div class="tema"><a href="<?php print $tema_one_link; ?>"><?php print $tema_one; ?></a> </div>
  <div class="figur"></div>
  <div class="tema"><a href="<?php print $tema_two_link; ?>"><?php print $tema_two; ?></a> </div>
  <div class="figur"></div>
  <div class="tema"><a href="<?php print $tema_three_link; ?>"><?php print $tema_three; ?></a> </div>
  <div class="figur"></div>
  <div class="tema"><a href="<?php print $tema_four_link; ?>"><?php print $tema_four; ?></a> </div>
  <div class="figur"></div>
  <div class="tema"><a href="<?php print $tema_five_link; ?>"><?php print $tema_five; ?></a> </div>
  <div class="figur"></div>
</div>
<!--FIN Temas del día-->
