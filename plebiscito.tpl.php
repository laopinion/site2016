<section id="plebiscito">
	<?php
	   list ($nacionalvsi, $nacionalpsi, $nacionalvno, $nacionalpno, $nulosn, $sufragantesv, $sufragantesp, $cucutavsi, $cucutapsi, $cucutavno, $cucutapno, $patiosvsi, $patiospsi, $patiosvno, $patiospno, $rosariovsi, $rosariopsi, $rosariovno, $rosariopno, $ocanavsi, $ocanapsi, $ocanavno, $ocanapno, $pamplonavsi, $pamplonapsi, $pamplonavno, $pamplonapno, $nortevsi, $nortepsi, $nortevno, $nortepno) = plebiscito_output();
	?>
	<div class="izq">
		<div class="titulo">
			<div class="logo"></div>
		</div>
		<div class="nacional">			
			<h2 class="si">SI</h2>
			<div class="nacionalpsi">
				<div class="porcentaje">	
		      		<?php print $nacionalpsi; ?>
				</div>
				<div class="valor">	
		      		<span>Numero de Votos: </span><?php print $nacionalvsi; ?>
				</div>
		    </div>
			<h2 class="no">NO</h2>
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

	<div class="der">
		<div class="nacionalpsi">
			<div class="porcentaje">	
	      		<?php print $nacionalpsi; ?>
			</div>
			<div class="valor">	
	      		<?php print $nacionalvsi; ?>
			</div>
	    </div>

	    <div class="nacionalpno">
			<div class="porcentaje">	
	      		<?php print $nacionalpno; ?>
			</div>
			<div class="valor">	
	      		<?php print $nacionalvno; ?>
			</div>
	    </div>
	</div>
</section>
