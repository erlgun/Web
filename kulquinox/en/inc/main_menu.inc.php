				<div id="main_menu">
					<ul class="menu_items">
<?php
switch ($current) {
	case('Events'):
?>
						<li class="button active"><a href="../pages/program_index.php">EVENTS</a></li>
						<li class="button"><a href="../pages/about_kulquinox.php">ABOUT KULQUINOX</a></li>
						<li class="button"><a href="../pages/gallery/autumn_2011.php">GALLERY</a></li>
						<li class="button"><a href="../pages/info_index.php">INFORMATION</a></li>
<?php					
	break;
	case('About Kulquinox'):
?>
						<li class="button"><a href="../pages/program_index.php">EVENTS</a></li>
						<li class="button active"><a href="../pages/about_kulquinox.php">ABOUT KULQUINOX</a></li>
						<li class="button"><a href="../pages/gallery/autumn_2011.php">GALLERY</a></li>
						<li class="button"><a href="../pages/info_index.php">INFORMATION</a></li>
<?php					
	break;
	case('Gallery'):
		if ($folder == '2') {
?>
						<li class="button"><a href="../../pages/program_index.php">EVENTS</a></li>
						<li class="button"><a href="../../pages/about_kulquinox.php">ABOUT KULQUINOX</a></li>
						<li class="button active"><a href="../../pages/gallery/autumn_2011.php">GALLERY</a></li>
						<li class="button"><a href="../../pages/info_index.php">INFORMATION</a></li>
<?php
	}	else {
	?>
						<li class="button"><a href="../pages/program_index.php">EVENTS</a></li>
						<li class="button"><a href="../pages/about_kulquinox.php">ABOUT KULQUINOX</a></li>
						<li class="button active"><a href="../pages/gallery/autumn_2011.php">GALLERY</a></li>
						<li class="button"><a href="../pages/info_index.php">INFORMATION</a></li>
						<li class="button"><a href="../pages/contact.php">CONTACT</a></li>
	<?php
		}
	break;
	case('Information'):
?>
						<li class="button"><a href="../pages/program_index.php">EVENTS</a></li>
						<li class="button"><a href="../pages/about_kulquinox.php">ABOUT KULQUINOX</a></li>
						<li class="button"><a href="../pages/gallery/autumn_2011.php">GALLERY</a></li>
						<li class="button active"><a href="../pages/info_index.php">INFORMATION</a></li>
<?php					
	break;
	case('Artists'):
		if ($folder == '3') {
?>
						<li class="button active"><a href="../../program_index.php">EVENTS</a></li>
						<li class="button"><a href="../../about_kulquinox.php">ABOUT KULQUINOX</a></li>
						<li class="button"><a href="../../gallery/autumn_2011.php">GALLERY</a></li>
						<li class="button"><a href="../../info_index.php">INFORMATION</a></li>
<?php
		} else {
?>
						<li class="button active"><a href="../program_index.php">EVENTS</a></li>
						<li class="button"><a href="../about_kulquinox.php">ABOUT KULQUINOX</a></li>
						<li class="button"><a href="../gallery/autumn_2011.php">GALLERY</a></li>
						<li class="button"><a href="../info_index.php">INFORMATION</a></li>
<?php
		}
	break;
	case('Film'):
	case('Theater'):
	case('Exhibition'):
	case('Schedule'):
?>
						<li class="button active"><a href="../program_index.php">EVENTS</a></li>
						<li class="button"><a href="../about_kulquinox.php">ABOUT KULQUINOX</a></li>
						<li class="button"><a href="../gallery/autumn_2011.php">GALLERY</a></li>
						<li class="button"><a href="../info_index.php">INFORMATION</a></li>
<?php
	break;
	case('Sitemap'):
?>
						<li class="button"><a href="./program_index.php">EVENTS</a></li>
						<li class="button"><a href="./about_kulquinox.php">ABOUT KULQUINOX</a></li>
						<li class="button"><a href="../pages/gallery/autumn_2011.php">GALLERY</a></li>
						<li class="button"><a href="./info_index.php">INFORMATION</a></li>
<?php
	break;
	case('Sponsors'):
?>
						<li class="button"><a href="./program_index.php">EVENTS</a></li>
						<li class="button"><a href="./about_kulquinox.php">ABOUT KULQUINOX</a></li>
						<li class="button"><a href="../pages/gallery/autumn_2011.php">GALLERY</a></li>
						<li class="button"><a href="./info_index.php">INFORMATION</a></li>						
<?php
	break;
	case('Contact'):
?>
						<li class="button"><a href="./program_index.php">EVENTS</a></li>
						<li class="button"><a href="./about_kulquinox.php">ABOUT KULQUINOX</a></li>
						<li class="button"><a href="./gallery/autumn_2011.php">GALLERY</a></li>
						<li class="button"><a href="./info_index.php">INFORMATION</a></li>						
<?php
	break;
	default:
?>
						<li class="button"><a href="./pages/program_index.php">EVENTS</a></li>
						<li class="button"><a href="./pages/about_kulquinox.php">ABOUT KULQUINOX</a></li>
						<li class="button"><a href="./pages/gallery/autumn_2011.php">GALLERY</a></li>
						<li class="button"><a href="./pages/info_index.php">INFORMATION</a></li>
<?php
	break;
}
?>
					</ul>					
				</div><!-- END OF #main_menu -->