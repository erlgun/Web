<div id="programmenu">
	<ul class="programmenuitems">
<?php
switch ($current) {
	case('Artists'):
?>
		<li class="active button"><a href="../events/artister.php">ARTISTS</a></li>
		<li class="button"><a href="../events/film.php">FILM</a></li>
		<li class="button"><a href="../events/theater.php">THEATER</a></li>
		<li class="button"><a href="../events/exhibition.php">EXHIBITION</a></li>
		<li class="button"><a href="../events/schedule.php">TIDSSKJEMA</a></li>
<?php
	break;
	case('Film'):
?>
		<li class="button"><a href="../events/artister.php">ARTISTS</a></li>
		<li class="active button"><a href="../events/film.php">FILM</a></li>
		<li class="button"><a href="../events/theater.php">THEATER</a></li>
		<li class="button"><a href="../events/exhibition.php">EXHIBITION</a></li>
		<li class="button"><a href="../events/schedule.php">TIDSSKJEMA</a></li>
<?php
	break;
	case('Theater'):
?>
		<li class="button"><a href="../events/artister.php">ARTISTS</a></li>
		<li class="button"><a href="../events/film.php">FILM</a></li>
		<li class="active button"><a href="../events/theater.php">THEATER</a></li>
		<li class="button"><a href="../events/exhibition.php">EXHIBITION</a></li>
		<li class="button"><a href="../events/schedule.php">TIDSSKJEMA</a></li>
<?php
	break;
	case('Exhibition'):
?>
		<li class="button"><a href="../events/artister.php">ARTISTS</a></li>
		<li class="button"><a href="../events/film.php">FILM</a></li>
		<li class="button"><a href="../events/theater.php">THEATER</a></li>
		<li class="active button"><a href="../events/exhibition.php">EXHIBITION</a></li>
		<li class="button"><a href="../events/schedule.php">TIDSSKJEMA</a></li>
<?php
	break;
	case('Schedule'):
?>
		<li class="button"><a href="../events/artister.php">ARTISTS</a></li>
		<li class="button"><a href="../events/film.php">FILM</a></li>
		<li class="button"><a href="../events/theater.php">THEATER</a></li>
		<li class="button"><a href="../events/exhibition.php">EXHIBITION</a></li>
		<li class="active button"><a href="../events/schedule.php">TIDSSKJEMA</a></li>
<?php
	break;
	default:
?>
		<li class="button"><a href="./events/artister.php">ARTISTS</a></li>
		<li class="button"><a href="./events/film.php">FILM</a></li>
		<li class="button"><a href="./events/theater.php">THEATER</a></li>
		<li class="button"><a href="./events/exhibition.php">EXHIBITION</a></li>
		<li class="button"><a href="./events/schedule.php">TIDSSKJEMA</a></li>
<?php
	break;
}
?>


	</ul>
</div> <!-- END OF #programmenu -->