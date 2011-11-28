				<div id="main_menu">
					<ul class="menu_items">
<?php
switch ($current) {
	case('Program'):
?>
						<li class="button active"><a href="../pages/program_index.php">PROGRAM</a></li>
						<li class="button"><a href="../pages/om_kulquinox.php">OM KULQUINOX</a></li>
						<li class="button"><a href="../pages/galleri/host_2011.php">GALLERI</a></li>
						<li class="button"><a href="../pages/info_index.php">NYTTIG INFO</a></li>
						<li class="button"><a href="../pages/kontakt.php">KONTAKT</a></li>
<?php					
	break;
	case('Om Kulquinox'):
?>
						<li class="button"><a href="../pages/program_index.php">PROGRAM</a></li>
						<li class="button active"><a href="../pages/om_kulquinox.php">OM KULQUINOX</a></li>
						<li class="button"><a href="../pages/galleri/host_2011.php">GALLERI</a></li>
						<li class="button"><a href="../pages/info_index.php">NYTTIG INFO</a></li>
						<li class="button"><a href="../pages/kontakt.php">KONTAKT</a></li>
<?php					
	break;
	case('Galleri'):
		if ($folder == '2') {
?>
						<li class="button"><a href="../../pages/program_index.php">PROGRAM</a></li>
						<li class="button"><a href="../../pages/om_kulquinox.php">OM KULQUINOX</a></li>
						<li class="button active"><a href="../../pages/galleri/host_2011.php">GALLERI</a></li>
						<li class="button"><a href="../../pages/info_index.php">NYTTIG INFO</a></li>
						<li class="button"><a href="../../pages/kontakt.php">KONTAKT</a></li>
<?php
	}	else {
	?>
						<li class="button"><a href="../pages/program_index.php">PROGRAM</a></li>
						<li class="button"><a href="../pages/om_kulquinox.php">OM KULQUINOX</a></li>
						<li class="button active"><a href="../pages/galleri/host_2011.php">GALLERI</a></li>
						<li class="button"><a href="../pages/info_index.php">NYTTIG INFO</a></li>
						<li class="button"><a href="../pages/kontakt.php">KONTAKT</a></li>
	<?php
		}
	break;
	case('Nyttig informasjon'):
?>
						<li class="button"><a href="../pages/program_index.php">PROGRAM</a></li>
						<li class="button"><a href="../pages/om_kulquinox.php">OM KULQUINOX</a></li>
						<li class="button"><a href="../pages/galleri/host_2011.php">GALLERI</a></li>
						<li class="button active"><a href="../pages/info_index.php">NYTTIG INFO</a></li>
						<li class="button"><a href="../pages/kontakt.php">KONTAKT</a></li>
<?php					
	break;
	case('Kontakt'):
?>
						<li class="button"><a href="../pages/program_index.php">PROGRAM</a></li>
						<li class="button"><a href="../pages/om_kulquinox.php">OM KULQUINOX</a></li>
						<li class="button"><a href="../pages/galleri/host_2011.php">GALLERI</a></li>
						<li class="button"><a href="../pages/info_index.php">NYTTIG INFO</a></li>
						<li class="button active"><a href="../pages/kontakt.php">KONTAKT</a></li>
<?php
	break;
	case('Artister'):
		if ($folder == '3') {
?>
						<li class="button active"><a href="../../program_index.php">PROGRAM</a></li>
						<li class="button"><a href="../../om_kulquinox.php">OM KULQUINOX</a></li>
						<li class="button"><a href="../../galleri/host_2011.php">GALLERI</a></li>
						<li class="button"><a href="../../info_index.php">NYTTIG INFO</a></li>
						<li class="button"><a href="../../kontakt.php">KONTAKT</a></li>
<?php
		} else {
?>
						<li class="button active"><a href="../program_index.php">PROGRAM</a></li>
						<li class="button"><a href="../om_kulquinox.php">OM KULQUINOX</a></li>
						<li class="button"><a href="../galleri/host_2011.php">GALLERI</a></li>
						<li class="button"><a href="../info_index.php">NYTTIG INFO</a></li>
						<li class="button"><a href="../kontakt.php">KONTAKT</a></li>
<?php
		}
	break;
	case('Film'):
	case('Teater'):
	case('Utstilling'):
	case('Tidsskjema'):
?>
						<li class="button active"><a href="../program_index.php">PROGRAM</a></li>
						<li class="button"><a href="../om_kulquinox.php">OM KULQUINOX</a></li>
						<li class="button"><a href="../galleri/host_2011.php">GALLERI</a></li>
						<li class="button"><a href="../info_index.php">NYTTIG INFO</a></li>
						<li class="button"><a href="../kontakt.php">KONTAKT</a></li>
<?php
	break;
	case('Sitemap'):
?>
						<li class="button"><a href="./program_index.php">PROGRAM</a></li>
						<li class="button"><a href="./om_kulquinox.php">OM KULQUINOX</a></li>
						<li class="button"><a href="../pages/galleri/host_2011.php">GALLERI</a></li>
						<li class="button"><a href="./info_index.php">NYTTIG INFO</a></li>
						<li class="button"><a href="./kontakt.php">KONTAKT</a></li>
<?php
	break;
	default:
?>
						<li class="button"><a href="./pages/program_index.php">PROGRAM</a></li>
						<li class="button"><a href="./pages/om_kulquinox.php">OM KULQUINOX</a></li>
						<li class="button"><a href="../pages/galleri/host_2011.php">GALLERI</a></li>
						<li class="button"><a href="./pages/info_index.php">NYTTIG INFO</a></li>
						<li class="button"><a href="./pages/kontakt.php">KONTAKT</a></li>
<?php
	break;
}
?>
					</ul>					
				</div><!-- END OF #main_menu -->