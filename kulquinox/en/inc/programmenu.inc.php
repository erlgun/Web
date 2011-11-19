<div id="programMenu">
	<ul class="menuItems">
		<?php
		switch ($current) {
			case('Artister'):
		?>
		<li class="active button"><a href="../program/artister">ARTISTER</a></li>
		<li class="button"><a href="../program/film">FILM</a></li>
		<li class="button"><a href="../program/teater">TEATER</a></li>
		<li class="button"><a href="../program/utstilling">UTSTILLING</a></li>
		<li class="button"><a href="../program/tidsskjema">TIDSSKJEMA</a></li>
		<?php
			break;
			case('Film'):
		?>
		<li class="button"><a href="../program/artister">ARTISTER</a></li>
		<li class="active button"><a href="../program/film">FILM</a></li>
		<li class="button"><a href="../program/teater">TEATER</a></li>
		<li class="button"><a href="../program/utstilling">UTSTILLING</a></li>
		<li class="button"><a href="../program/tidsskjema">TIDSSKJEMA</a></li>
		<?php
			break;
			case('Teater'):
		?>
		<li class="button"><a href="../program/artister">ARTISTER</a></li>
		<li class="button"><a href="../program/film">FILM</a></li>
		<li class="active button"><a href="../program/teater">TEATER</a></li>
		<li class="button"><a href="../program/utstilling">UTSTILLING</a></li>
		<li class="button"><a href="../program/tidsskjema">TIDSSKJEMA</a></li>
		<?php
			break;
			case('Utstilling'):
		?>
		<li class="button"><a href="../program/artister">ARTISTER</a></li>
		<li class="button"><a href="../program/film">FILM</a></li>
		<li class="button"><a href="../program/teater">TEATER</a></li>
		<li class="active button"><a href="../program/utstilling">UTSTILLING</a></li>
		<li class="button"><a href="../program/tidsskjema">TIDSSKJEMA</a></li>
		<?php
			break;
			case('Tidsskjema'):
		?>
		<li class="button"><a href="../program/artister">ARTISTER</a></li>
		<li class="button"><a href="../program/film">FILM</a></li>
		<li class="button"><a href="../program/teater">TEATER</a></li>
		<li class="button"><a href="../program/utstilling">UTSTILLING</a></li>
		<li class="active button"><a href="../program/tidsskjema">TIDSSKJEMA</a></li>
		<?php
			break;
			default:
		?>
		<li class="button"><a href="./program/artister">ARTISTER</a></li>
		<li class="button"><a href="./program/film">FILM</a></li>
		<li class="button"><a href="./program/teater">TEATER</a></li>
		<li class="button"><a href="./program/utstilling">UTSTILLING</a></li>
		<li class="button"><a href="./program/tidsskjema">TIDSSKJEMA</a></li>
		<?php
			break;
		}
		?>
	</ul>
</div> <!-- END OF #programmenu -->