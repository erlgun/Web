
				<div id="under_menu">
					<ul class="menu_items">
<?php
switch ($current) {
case('Artists'):
	if ($folder == '3') {
?>
						<li class="active button"><a href="../../events/artists_index.php">ARTISTS</a></li>
						<li class="button"><a href="../../events/film.php">FILM</a></li>
						<li class="button"><a href="../../events/theater.php">THEATER</a></li>
						<li class="button"><a href="../../events/exhibition.php">EXHIBITION</a></li>
						<li class="button"><a href="../../events/schedule.php">SCHEDULE</a></li>
<?php
	} else {
?>
						<li class="active button"><a href="../events/artists_index.php">ARTISTS</a></li>
						<li class="button"><a href="../events/film.php">FILM</a></li>
						<li class="button"><a href="../events/theater.php">THEATER</a></li>
						<li class="button"><a href="../events/exhibition.php">EXHIBITION</a></li>
						<li class="button"><a href="../events/schedule.php">SCHEDULE</a></li>
<?php
	}
	break;
	case('Film'):
?>
						<li class="button"><a href="../events/artists_index.php">ARTISTS</a></li>
						<li class="active button"><a href="../events/film.php">FILM</a></li>
						<li class="button"><a href="../events/theater.php">THEATER</a></li>
						<li class="button"><a href="../events/exhibition.php">EXHIBITION</a></li>
						<li class="button"><a href="../events/schedule.php">SCHEDULE</a></li>
<?php
	break;
	case('Theater'):
?>
						<li class="button"><a href="../events/artists_index.php">ARTISTS</a></li>
						<li class="button"><a href="../events/film.php">FILM</a></li>
						<li class="active button"><a href="../events/theater.php">THEATER</a></li>
						<li class="button"><a href="../events/exhibition.php">EXHIBITION</a></li>
						<li class="button"><a href="../events/schedule.php">SCHEDULE</a></li>
<?php
	break;
	case('Exhibition'):
?>
						<li class="button"><a href="../events/artists_index.php">ARTISTS</a></li>
						<li class="button"><a href="../events/film.php">FILM</a></li>
						<li class="button"><a href="../events/theater.php">THEATER</a></li>
						<li class="active button"><a href="../events/exhibition.php">EXHIBITION</a></li>
						<li class="button"><a href="../events/schedule.php">SCHEDULE</a></li>
<?php
	break;
	case('Schedule'):
?>
						<li class="button"><a href="../events/artists_index.php">ARTISTS</a></li>
						<li class="button"><a href="../events/film.php">FILM</a></li>
						<li class="button"><a href="../events/theater.php">THEATER</a></li>
						<li class="button"><a href="../events/exhibition.php">EXHIBITION</a></li>
						<li class="active button"><a href="../events/schedule.php">SCHEDULE</a></li>
<?php
	break;
	default:
?>
						<li class="button"><a href="./events/artists_index.php">ARTISTS</a></li>
						<li class="button"><a href="./events/film.php">FILM</a></li>
						<li class="button"><a href="./events/theater.php">THEATER</a></li>
						<li class="button"><a href="./events/exhibition.php">EXHIBITION</a></li>
						<li class="button"><a href="./events/schedule.php">SCHEDULE</a></li>
<?php
	break;
}
?>
					</ul>
				</div> <!-- END OF #program_menu -->