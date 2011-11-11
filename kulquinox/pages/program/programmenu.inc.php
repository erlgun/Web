<div id="programmenu">
	<ul class="programmenuitems">
<?php
switch ($current) {
	case('Artister'):
?>
		<li class="active"><a href="../program/artister.php">Artister</a></li>
		<li><a href="../program/film.php">Film</a></li>
		<li><a href="../program/teater.php">Teater</a></li>
		<li><a href="../program/utstilling.php">Utstilling</a></li>
		<li><a href="../program/tidsskjema.php">Tidsskjema</a></li>
<?php
	break;
	case('Film'):
?>
		<li><a href="../program/artister.php">Artister</a></li>
		<li class="active"><a href="../program/film.php">Film</a></li>
		<li><a href="../program/teater.php">Teater</a></li>
		<li><a href="../program/utstilling.php">Utstilling</a></li>
		<li><a href="../program/tidsskjema.php">Tidsskjema</a></li>
<?php
	break;
	case('Teater'):
?>
		<li><a href="../program/artister.php">Artister</a></li>
		<li><a href="../program/film.php">Film</a></li>
		<li class="active"><a href="../program/teater.php">Teater</a></li>
		<li><a href="../program/utstilling.php">Utstilling</a></li>
		<li><a href="../program/tidsskjema.php">Tidsskjema</a></li>
<?php
	break;
	case('Utstilling'):
?>
		<li><a href="../program/artister.php">Artister</a></li>
		<li><a href="../program/film.php">Film</a></li>
		<li><a href="../program/teater.php">Teater</a></li>
		<li class="active"><a href="../program/utstilling.php">Utstilling</a></li>
		<li><a href="../program/tidsskjema.php">Tidsskjema</a></li>
<?php
	break;
	case('Tidsskjema'):
?>
		<li><a href="../program/artister.php">Artister</a></li>
		<li><a href="../program/film.php">Film</a></li>
		<li><a href="../program/teater.php">Teater</a></li>
		<li><a href="../program/utstilling.php">Utstilling</a></li>
		<li class="active"><a href="../program/tidsskjema.php">Tidsskjema</a></li>
<?php
	break;
	default:
?>
		<li><a href="./program/artister.php">Artister</a></li>
		<li><a href="./program/film.php">Film</a></li>
		<li><a href="./program/teater.php">Teater</a></li>
		<li><a href="./program/utstilling.php">Utstilling</a></li>
		<li><a href="./program/tidsskjema.php">Tidsskjema</a></li>
<?php
	break;
}
?>


	</ul>
</div> <!-- END OF #programmenu -->