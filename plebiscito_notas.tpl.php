<section id="plebiscito_notas">
	<?php
	   list ($nacionalvsi, $nacionalpsi, $nacionalvno, $nacionalpno, $nulosn, $sufragantesv, $sufragantesp) = plebiscito_output();
	?>
	<div class="triangulo"></div>
		<div class="box">	
			<div class="titulo">
				<div class="logo"></div>
			</div>
			<div class="nacional">			
				<h4 class="si">SI</h4>
				<div class="nacionalpsi">
					<div class="porcentaje">	
			      		<?php print $nacionalpsi; ?>
					</div>
					<div class="valor">	
			      		<span>Numero de Votos: </span><?php print $nacionalvsi; ?>
					</div>
			    </div>
				<h4 class="no">NO</h4>
			    <div class="nacionalpno">
					<div class="porcentaje">	
			      		<?php print $nacionalpno; ?>
					</div>
					<div class="valor">	
			      		<span>Numero de Votos: </span><?php print $nacionalvno; ?>
					</div>
			    </div>			
			</div>
		</div>
</section>