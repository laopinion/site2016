<section id="plebiscito">
	<?php
	   list ($nacionalvsi, $nacionalpsi, $nacionalvno, $nacionalpno, $nulosv, $nulosp, $sufragantesv, $sufragantesp, $cucutavsi, $cucutapsi, $cucutavno, $cucutapno, $patiosvsi, $patiospsi, $patiosvno, $patiospno, $rosariovsi, $rosariopsi, $rosariovno, $rosariopno, $ocanavsi, $ocanapsi, $ocanavno, $ocanapno, $pamplonavsi, $pamplonapsi, $pamplonavno, $pamplonapno, $nortevsi, $nortepsi, $nortevno, $nortepno) = plebiscito_output();
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
		      		<span>Número de votos: </span><?php print $nacionalvsi; ?>
				</div>
		    </div>
			<h2 class="no">NO</h2>
		    <div class="nacionalpno">
				<div class="porcentaje">	
		      		<?php print $nacionalpno; ?>
				</div>
				<div class="valor">	
		      		<span>Número de votos: </span><?php print $nacionalvno; ?>
				</div>
		    </div>
		</div>
		    <h3>Nivel nacional</h3>
		    <div class="nulosysufraga">
			    <div class="nulos">
					<div class="porcentaje">	
			      		<?php print $nulosp; ?>
					</div>
					<div class="valor">	
			      		<span>Número de votos: </span><?php print $nulosv; ?>
					</div>
			    </div>
			    <div class="sufragantes">
					<div class="porcentaje">	
			      		<?php print $sufragantesp; ?>
					</div>
					<div class="valor">	
			      		<span>Número de votos: </span><?php print $sufragantesv; ?>
					</div>
			    </div>		
		    </div>
	</div>

	<div class="der">
		<h3>Municipios de Norte de Santander</h3>
		<section class="colum1">
			<div class="cucuta">
				<h2 class="si">SI</h2>
				<div class="cucutapsi">
					<div class="porcentaje">	
			      		<?php print $cucutapsi; ?>
					</div>
					<div class="valor">	
			      		<span>Número de votos: </span><?php print $cucutavsi; ?>
					</div>
			    </div>
				<h2 class="no">NO</h2>
			    <div class="cucutapno">
					<div class="porcentaje">	
			      		<?php print $cucutapno; ?>
					</div>
					<div class="valor">	
			      		<span>Número de votos: </span><?php print $cucutavno; ?>
					</div>
			    </div>
			</div>

			<div class="rosario">
				<h2 class="si">SI</h2>
				<div class="rosariopsi">
					<div class="porcentaje">	
			      		<?php print $rosariopsi; ?>
					</div>
					<div class="valor">	
			      		<span>Número de votos: </span><?php print $rosariovsi; ?>
					</div>
			    </div>
				<h2 class="no">NO</h2>
			    <div class="rosariopno">
					<div class="porcentaje">	
			      		<?php print $rosariopno; ?>
					</div>
					<div class="valor">	
			      		<span>Número de votos: </span><?php print $rosariovno; ?>
					</div>
			    </div>
			</div>

			<div class="pamplona">
				<h2 class="si">SI</h2>
				<div class="pamplonapsi">
					<div class="porcentaje">	
			      		<?php print $pamplonapsi; ?>
					</div>
					<div class="valor">	
			      		<span>Número de votos: </span><?php print $pamplonavsi; ?>
					</div>
			    </div>
				<h2 class="no">NO</h2>
			    <div class="pamplonapno">
					<div class="porcentaje">	
			      		<?php print $pamplonapno; ?>
					</div>
					<div class="valor">	
			      		<span>Número de votos: </span><?php print $pamplonavno; ?>
					</div>
			    </div>
			</div>
		</section>

		<section class="colum2">
			<div class="patios">
				<h2 class="si">SI</h2>
				<div class="patiospsi">
					<div class="porcentaje">	
			      		<?php print $patiospsi; ?>
					</div>
					<div class="valor">	
			      		<span>Número de votos: </span><?php print $patiosvsi; ?>
					</div>
			    </div>
				<h2 class="no">NO</h2>
			    <div class="patiospno">
					<div class="porcentaje">	
			      		<?php print $patiospno; ?>
					</div>
					<div class="valor">	
			      		<span>Número de votos: </span><?php print $patiosvno; ?>
					</div>
			    </div>
			</div>

			<div class="ocana">
				<h2 class="si">SI</h2>
				<div class="ocanapsi">
					<div class="porcentaje">	
			      		<?php print $ocanapsi; ?>
					</div>
					<div class="valor">	
			      		<span>Número de votos: </span><?php print $ocanavsi; ?>
					</div>
			    </div>
				<h2 class="no">NO</h2>
			    <div class="ocanapno">
					<div class="porcentaje">	
			      		<?php print $ocanapno; ?>
					</div>
					<div class="valor">	
			      		<span>Número de votos: </span><?php print $ocanavno; ?>
					</div>
			    </div>
			</div>

			<div class="norte">
				<h2 class="si">SI</h2>
				<div class="nortepsi">
					<div class="porcentaje">	
			      		<?php print $nortepsi; ?>
					</div>
					<div class="valor">	
			      		<span>Número de votos: </span><?php print $nortevsi; ?>
					</div>
			    </div>
				<h2 class="no">NO</h2>
			    <div class="nortepno">
					<div class="porcentaje">	
			      		<?php print $nortepno; ?>
					</div>
					<div class="valor">	
			      		<span>Número de votos: </span><?php print $nortevno; ?>
					</div>
			    </div>
			</div>
		</section>


	</div>
</section>
