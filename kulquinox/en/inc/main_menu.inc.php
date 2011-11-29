				<div id="main_menu">
					<ul class="menu_items">
<?php
switch ($current) {
	case('Program'):
?>
						<li class="button active"><a href="../pages/program_index.php">PROGRAM</a></li>
						<li class="button"><a href="../pages/om_kulquinox.php">ABOUT KULQUINOX</a></li>
						<li class="button"><a href="../pages/galleri/host_2011.php">GALLERY</a></li>
						<li class="button"><a href="../pages/info_index.php">USEFULL INFO</a></li>
<?php					
	break;
	case('About Kulquinox'):
?>
						<li class="button"><a href="../pages/program_index.php">PROGRAM</a></li>
						<li class="button active"><a href="../pages/om_kulquinox.php">ABOUT KULQUINOX</a></li>
						<li class="button"><a href="../pages/galleri/host_2011.php">GALLERY</a></li>
						<li class="button"><a href="../pages/info_index.php">USEFULL INFO</a></li>
<?php					
	break;
	case('Gallery'):
		if ($folder == '2') {
?>
						<li class="button"><a href="../../pages/program_index.php">PROGRAM</a></li>
						<li class="button"><a href="../../pages/om_kulquinox.php">ABOUT KULQUINOX</a></li>
						<li class="button active"><a href="../../pages/galleri/host_2011.php">GALLERY</a></li>
						<li class="button"><a href="../../pages/info_index.php">USEFULL INFO</a></li>
<?php
	}	else {
	?>
						<li class="button"><a href="../pages/program_index.php">PROGRAM</a></li>
						<li class="button"><a href="../pages/om_kulquinox.php">ABOUT KULQUINOX</a></li>
						<li class="button active"><a href="../pages/galleri/host_2011.php">GALLERY</a></li>
						<li class="button"><a href="../pages/info_index.php">USEFULL INFO</a></li>

	<?php
		}
	break;
	case('Usefull info'):
?>
						<li class="button"><a href="./program_index.php">PROGRAM</a></li>
						<li class="button"><a href="./om_kulquinox.php">ABOUT KULQUINOX</a></li>
						<li class="button"><a href="./galleri/host_2011.php">GALLERY</a></li>
						<li class="button active"><a href="./info_index.php">USEFULL INFO</a></li>
<?php					
	break;
	case('Artists'):
		if ($folder == '3') {
?>
						<li class="button active"><a href="../../program_index.php">PROGRAM</a></li>
						<li class="button"><a href="../../om_kulquinox.php">ABOUT KULQUINOX</a></li>
						<li class="button"><a href="../../galleri/host_2011.php">GALLERY</a></li>
						<li class="button"><a href="../../info_index.php">USEFULL INFO</a></li>
<?php
		} else {
?>
						<li class="button active"><a href="../program_index.php">PROGRAM</a></li>
						<li class="button"><a href="../om_kulquinox.php">ABOUT KULQUINOX</a></li>
						<li class="button"><a href="../galleri/host_2011.php">GALLERY</a></li>
						<li class="button"><a href="../info_index.php">USEFULL INFO</a></li>
<?php
		}
	break;
	case('Film'):
	case('Theater'):
	case('Exhibition'):
	case('Schedule'):
?>
						<li class="button active"><a href="../program_index.php">PROGRAM</a></li>
						<li class="button"><a href="../om_kulquinox.php">ABOUT KULQUINOX</a></li>
						<li class="button"><a href="../galleri/host_2011.php">GALLERY</a></li>
						<li class="button"><a href="../info_index.php">USEFULL INFO</a></li>
<?php
	break;
	case('Sitemap'):
?>
						<li class="button"><a href="./program_index.php">PROGRAM</a></li>
						<li class="button"><a href="./om_kulquinox.php">ABOUT KULQUINOX</a></li>
						<li class="button"><a href="../pages/galleri/host_2011.php">GALLERY</a></li>
						<li class="button"><a href="./info_index.php">USEFULL INFO</a></li>
<?php
	break;
	case('Sponsors'):
?>
						<li class="button"><a href="./program_index.php">PROGRAM</a></li>
						<li class="button"><a href="./om_kulquinox.php">ABOUT KULQUINOX</a></li>
						<li class="button"><a href="../pages/galleri/host_2011.php">GALLERY</a></li>
						<li class="button"><a href="./info_index.php">USEFULL INFO</a></li>						
<?php
	break;
	case('Contact'):
?>
						<li class="button"><a href="./program_index.php">PROGRAM</a></li>
						<li class="button"><a href="./om_kulquinox.php">ABOUT KULQUINOX</a></li>
						<li class="button"><a href="./galleri/host_2011.php">GALLERY</a></li>
						<li class="button"><a href="./info_index.php">USEFULL INFO</a></li>						
<?php
	break;
	default:
?>
						<li class="button"><a href="./pages/program_index.php">PROGRAM</a></li>
						<li class="button"><a href="./pages/om_kulquinox.php">ABOUT KULQUINOX</a></li>
						<li class="button"><a href="./pages/galleri/host_2011.php">GALLERY</a></li>
						<li class="button"><a href="./pages/info_index.php">USEFULL INFO</a></li>
<?php
	break;
}
?>
					</ul>					
				</div><!-- END OF #main_menu -->