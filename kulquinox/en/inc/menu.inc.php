				
			<div id="menu">
<?php
// Add new underpages here
switch ($current) {
	case('About Kulquinox'):
	case('Information'):
	case('Contact'):
	case('Sponsors'):
	case('Sitemap'):
		include '../inc/main_menu.inc.php';
	break;
	case('Events'):
		include '../inc/main_menu.inc.php';
		include '../inc/program_menu.inc.php';
	break;
	case('Artists'):
		if ($folder == '3') {
			include '../../../inc/main_menu.inc.php';
			include '../../../inc/program_menu.inc.php';
		} else {
			include '../../inc/main_menu.inc.php';
			include '../../inc/program_menu.inc.php';
		}
	break;
	case('Gallery'):
		if ($folder =='2') {
			include '../../inc/main_menu.inc.php';
		} else {
			include '../inc/main_menu.inc.php';
		}
	break;
	case('Film'):
	case('Theater'):
	case('Exhibition'):
	case('Schedule'):
		include '../../inc/main_menu.inc.php';
		include '../../inc/program_menu.inc.php';
	break;
	case('Front Page'):
		include './inc/main_menu.inc.php';
	break;
}
?>
					
			</div> <!-- END OF #menu -->
			<div id="content">