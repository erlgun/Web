<?php
$active[$current] = ' active';
?>
						<a href="<?php if($current=='Forsiden'){echo '.';}else{echo '..';} ?>/index.php" class="constantlink <?php echo $active[Forsiden] ?>">Forsiden</a>
						<a href=".<?php if($current=='Forsiden'){echo '/pages';}else{echo '';} ?>/prosjektbeskrivelse.php" class="constantlink <?php echo $active[Prosjektbeskrivelse] ?>">Prosjektbeskrivelse</a>
						<a href=".<?php if($current=='Forsiden'){echo '/pages';}else{echo '';} ?>/samarbeidsavtale.php" class="constantlink <?php echo $active[Samarbeidsavtale] ?>">Samarbeidsavtale</a>
						<a href=".<?php if($current=='Forsiden'){echo '/pages';}else{echo '';} ?>/ansvarskart.php" class="constantlink <?php echo $active[Ansvarskart] ?>">Ansvarskart</a>
						<a href=".<?php if($current=='Forsiden'){echo '/pages';}else{echo '';} ?>/aktivitetsplan.php" class="constantlink <?php echo $active[Aktivitetsplan] ?>">Aktivitetsplan</a>
						<a href=".<?php if($current=='Forsiden'){echo '/pages';}else{echo '';} ?>/milepael.php" class="constantlink <?php echo $active[Milepælsplan] ?>">Milepælsplan</a>
						<a href=".<?php if($current=='Forsiden'){echo '/pages';}else{echo '';} ?>/risikoplan.php" class="constantlink <?php echo $active[Risikoplan] ?>">Risikoplan</a>
						<a href=".<?php if($current=='Forsiden'){echo '/pages';}else{echo '';} ?>/referater.php" class="constantlink <?php echo $active[Møtereferater] ?>">Møtereferater</a>
						<a href=".<?php if($current=='Forsiden'){echo '/pages';}else{echo '';} ?>/gruppemedlemmer.php" class="constantlink <?php echo $active[Gruppemedlemmer] ?>">Gruppemedlemmer</a>
						<a href=".<?php if($current=='Forsiden'){echo '/pages';}else{echo '';} ?>/midtveisrapport.php" class="constantlink <?php echo $active[Midtveisrapport] ?>">Midtveisrapport</a>
						<a href=".<?php if($current=='Forsiden'){echo '/pages';}else{echo '';} ?>/sluttrapport.php" class="constantlink <?php echo $active[Sluttrapport] ?>">Sluttrapport</a>
						<a href="http://student.iu.hio.no/~s180339/kulquinox/" class="constantlink <?php echo $active[Produktsiden] ?>">Produktsiden</a>
						</div>
					<div id="content">
