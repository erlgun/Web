				<div id="main_menu">
					<ul class="menu_items">
<?php
switch ($current) {
	case('På plakaten'):
?>
						<li class="button active"><a href="../pages/plakaten/artister_index.php">PÅ PLAKATEN</a></li>
						<li class="button"><a href="../pages/om_kulquinox.php">OM KULQUINOX</a></li>
						<li class="button"><a href="../pages/galleri/host_2011.php">GALLERI</a></li>
						<li class="button"><a href="../pages/info.php">NYTTIG INFO</a></li>
<?php					
	break;
	case('Om Kulquinox'):
?>
						<li class="button"><a href="../pages/plakaten/artister_index.php">PÅ PLAKATEN</a></li>
						<li class="button active"><a href="../pages/om_kulquinox.php">OM KULQUINOX</a></li>
						<li class="button"><a href="../pages/galleri/host_2011.php">GALLERI</a></li>
						<li class="button"><a href="../pages/info.php">NYTTIG INFO</a></li>
<?php					
	break;
	case('Galleri'):
		if ($folder == '2') {
?>
						<li class="button"><a href="../../pages/plakaten/artister_index.php">PÅ PLAKATEN</a></li>
						<li class="button"><a href="../../pages/om_kulquinox.php">OM KULQUINOX</a></li>
						<li class="button active"><a href="../../pages/galleri/host_2011.php">GALLERI</a></li>
						<li class="button"><a href="../../pages/info.php">NYTTIG INFO</a></li>
<?php
	}	else {
	?>
						<li class="button"><a href="../pages/plakaten/artister_index.php">PÅ PLAKATEN</a></li>
						<li class="button"><a href="../pages/om_kulquinox.php">OM KULQUINOX</a></li>
						<li class="button active"><a href="../pages/galleri/host_2011.php">GALLERI</a></li>
						<li class="button"><a href="../pages/info.php">NYTTIG INFO</a></li>
						<li class="button"><a href="../pages/kontakt.php">KONTAKT</a></li>
	<?php
		}
	break;
	case('Nyttig informasjon'):
?>
						<li class="button"><a href="../pages/plakaten/artister_index.php">PÅ PLAKATEN</a></li>
						<li class="button"><a href="../pages/om_kulquinox.php">OM KULQUINOX</a></li>
						<li class="button"><a href="../pages/galleri/host_2011.php">GALLERI</a></li>
						<li class="button active"><a href="../pages/info.php">NYTTIG INFO</a></li>
<?php					
	break;
	case('Artister'):
		if ($folder == '3') {
?>
						<li class="button active"><a href="../../plakaten/artister_index.php">PÅ PLAKATEN</a></li>
						<li class="button"><a href="../../om_kulquinox.php">OM KULQUINOX</a></li>
						<li class="button"><a href="../../galleri/host_2011.php">GALLERI</a></li>
						<li class="button"><a href="../../info.php">NYTTIG INFO</a></li>
<?php
		} else {
?>
						<li class="button active"><a href="../plakaten/artister_index.php">PÅ PLAKATEN</a></li>
						<li class="button"><a href="../om_kulquinox.php">OM KULQUINOX</a></li>
						<li class="button"><a href="../galleri/host_2011.php">GALLERI</a></li>
						<li class="button"><a href="../info.php">NYTTIG INFO</a></li>
<?php
		}
	break;
	case('Film'):
	case('Teater'):
	case('Utstilling'):
	case('Programmet'):
?>
						<li class="button active"><a href="../plakaten.php">PÅ PLAKATEN</a></li>
						<li class="button"><a href="../om_kulquinox.php">OM KULQUINOX</a></li>
						<li class="button"><a href="../galleri/host_2011.php">GALLERI</a></li>
						<li class="button"><a href="../info.php">NYTTIG INFO</a></li>
<?php
	break;
	case('Sidekart'):
?>
						<li class="button"><a href="./plakaten.php">PÅ PLAKATEN</a></li>
						<li class="button"><a href="./om_kulquinox.php">OM KULQUINOX</a></li>
						<li class="button"><a href="../pages/galleri/host_2011.php">GALLERI</a></li>
						<li class="button"><a href="./info.php">NYTTIG INFO</a></li>
<?php
	break;
	case('Samarbeidspartnere'):
?>
						<li class="button"><a href="./plakaten.php">PÅ PLAKATEN</a></li>
						<li class="button"><a href="./om_kulquinox.php">OM KULQUINOX</a></li>
						<li class="button"><a href="../pages/galleri/host_2011.php">GALLERI</a></li>
						<li class="button"><a href="./info.php">NYTTIG INFO</a></li>						
<?php
	break;
	case('Kontakt'):
?>
						<li class="button"><a href="./plakaten.php">PÅ PLAKATEN</a></li>
						<li class="button"><a href="./om_kulquinox.php">OM KULQUINOX</a></li>
						<li class="button"><a href="./galleri/host_2011.php">GALLERI</a></li>
						<li class="button"><a href="./info.php">NYTTIG INFO</a></li>						
<?php
	break;
	default:
?>
						<li class="button"><a href="./pages/plakaten/artister_index.php">PÅ PLAKATEN</a></li>
						<li class="button"><a href="./pages/om_kulquinox.php">OM KULQUINOX</a></li>
						<li class="button"><a href="./pages/galleri/host_2011.php">GALLERI</a></li>
						<li class="button"><a href="./pages/info.php">NYTTIG INFO</a></li>
<?php
	break;
}
?>
					</ul>					
				</div><!-- END OF #main_menu -->