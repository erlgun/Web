				
			<div id="menu">
<?php
// Add new underpages here
switch ($current) {
	case('Om Kulquinox'):
	case('Nyttig informasjon'):
	case('Kontakt'):
	case('Samarbeidspartnere'):
	case('Sidekart'):
		include '../inc/main_menu.inc.php';
	break;
	case('På plakaten'):
		include '../inc/main_menu.inc.php';
		include '../inc/event_menu.inc.php';
	break;
	case('Artister'):
		if ($folder == '3') {
			include '../../../inc/main_menu.inc.php';
			include '../../../inc/event_menu.inc.php';
		} else {
			include '../../inc/main_menu.inc.php';
			include '../../inc/event_menu.inc.php';
		}
	break;
	case('Galleri'):
		if ($folder =='2') {
			include '../../inc/main_menu.inc.php';
		} else {
			include '../inc/main_menu.inc.php';
		}
	break;
	case('Film'):
	case('Teater'):
	case('Utstilling'):
	case('Programmet'):
		include '../../inc/main_menu.inc.php';
		include '../../inc/event_menu.inc.php';
	break;
	case('Forsiden'):
		include './inc/main_menu.inc.php';
	break;
}
?>
					
			</div> <!-- END OF #menu -->
			<div id="content">