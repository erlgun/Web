<div class="spacing"></div>

<div id="menu">
	<?php
	// Add new underpages here
	switch ($current) {
		case('Om Kulquinox'):
		case('Galleri'):
		case('Nyttig informasjon'):
		case('Kontakt'):
			include '../inc/main_menu.inc.php';
		break;
		case('Program'):
			include '../inc/main_menu.inc.php';
			include '../inc/programmenu.inc.php';
		break;
		case('Artister'):
		case('Film'):
		case('Teater'):
		case('Utstilling'):
		case('Tidsskjema'):
			include '../../inc/main_menu.inc.php';
			include '../../inc/programmenu.inc.php';
		break;
		case('Forsiden'):
			include './inc/main_menu.inc.php';
		break;
	}
	?>
</div> <!-- END OF #menu -->
<div class="spacing"></div>
<div id="content">