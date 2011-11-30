
				<div id="under_menu">
					<ul class="menu_items">
<?php
switch ($current) {
case('Artister'):
	if ($folder == '3') {
?>
						<li class="active button"><a href="../../plakaten/artister_index.php">ARTISTER</a></li>
						<li class="button"><a href="../../plakaten/film.php">FILM</a></li>
						<li class="button"><a href="../../plakaten/teater.php">TEATER</a></li>
						<li class="button"><a href="../../plakaten/utstilling.php">UTSTILLING</a></li>
						<li class="button"><a href="../../plakaten/programmet.php">PROGRAMMET</a></li>
<?php
	} else {
?>
						<li class="active button"><a href="../plakaten/artister_index.php">ARTISTER</a></li>
						<li class="button"><a href="../plakaten/film.php">FILM</a></li>
						<li class="button"><a href="../plakaten/teater.php">TEATER</a></li>
						<li class="button"><a href="../plakaten/utstilling.php">UTSTILLING</a></li>
						<li class="button"><a href="../plakaten/programmet.php">PROGRAMMET</a></li>
<?php
	}
	break;
	case('Film'):
?>
						<li class="button"><a href="../plakaten/artister_index.php">ARTISTER</a></li>
						<li class="active button"><a href="../plakaten/film.php">FILM</a></li>
						<li class="button"><a href="../plakaten/teater.php">TEATER</a></li>
						<li class="button"><a href="../plakaten/utstilling.php">UTSTILLING</a></li>
						<li class="button"><a href="../plakaten/programmet.php">PROGRAMMET</a></li>
<?php
	break;
	case('Teater'):
?>
						<li class="button"><a href="../plakaten/artister_index.php">ARTISTER</a></li>
						<li class="button"><a href="../plakaten/film.php">FILM</a></li>
						<li class="active button"><a href="../plakaten/teater.php">TEATER</a></li>
						<li class="button"><a href="../plakaten/utstilling.php">UTSTILLING</a></li>
						<li class="button"><a href="../plakaten/programmet.php">PROGRAMMET</a></li>
<?php
	break;
	case('Utstilling'):
?>
						<li class="button"><a href="../plakaten/artister_index.php">ARTISTER</a></li>
						<li class="button"><a href="../plakaten/film.php">FILM</a></li>
						<li class="button"><a href="../plakaten/teater.php">TEATER</a></li>
						<li class="active button"><a href="../plakaten/utstilling.php">UTSTILLING</a></li>
						<li class="button"><a href="../plakaten/programmet.php">PROGRAMMET</a></li>
<?php
	break;
	case('Programmet'):
?>
						<li class="button"><a href="../plakaten/artister_index.php">ARTISTER</a></li>
						<li class="button"><a href="../plakaten/film.php">FILM</a></li>
						<li class="button"><a href="../plakaten/teater.php">TEATER</a></li>
						<li class="button"><a href="../plakaten/utstilling.php">UTSTILLING</a></li>
						<li class="active button"><a href="../plakaten/programmet.php">PROGRAMMET</a></li>
<?php
	break;
	default:
?>
						<li class="button"><a href="./plakaten/artister_index.php">ARTISTER</a></li>
						<li class="button"><a href="./plakaten/film.php">FILM</a></li>
						<li class="button"><a href="./plakaten/teater.php">TEATER</a></li>
						<li class="button"><a href="./plakaten/utstilling.php">UTSTILLING</a></li>
						<li class="button"><a href="./plakaten/programmet.php">PROGRAMMET</a></li>
<?php
	break;
}
?>
					</ul>
				</div> <!-- END OF #program_menu -->