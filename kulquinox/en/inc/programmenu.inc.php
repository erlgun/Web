<div id="programMenu">
	<ul class="menuItems">
		<?php
		switch ($current) {
			case('Artists'):
		?>
		<li class="active button"><a href="../program/artister">ARTISTS</a></li>
		<li class="button"><a href="../program/film">FILM</a></li>
		<li class="button"><a href="../program/teater">THEATER</a></li>
		<li class="button"><a href="../program/utstilling">EXHIBITION</a></li>
		<li class="button"><a href="../program/tidsskjema">TIDSSKJEMA</a></li>
		<?php
			break;
			case('Film'):
		?>
		<li class="button"><a href="../program/artister">ARTISTS</a></li>
		<li class="active button"><a href="../program/film">FILM</a></li>
		<li class="button"><a href="../program/teater">THEATER</a></li>
		<li class="button"><a href="../program/utstilling">EXHIBITION</a></li>
		<li class="button"><a href="../program/tidsskjema">TIDSSKJEMA</a></li>
		<?php
			break;
			case('Theater'):
		?>
		<li class="button"><a href="../program/artister">ARTISTS</a></li>
		<li class="button"><a href="../program/film">FILM</a></li>
		<li class="active button"><a href="../program/teater">THEATER</a></li>
		<li class="button"><a href="../program/utstilling">EXHIBITION</a></li>
		<li class="button"><a href="../program/tidsskjema">TIDSSKJEMA</a></li>
		<?php
			break;
			case('Exhibition'):
		?>
		<li class="button"><a href="../program/artister">ARTISTS</a></li>
		<li class="button"><a href="../program/film">FILM</a></li>
		<li class="button"><a href="../program/teater">THEATER</a></li>
		<li class="active button"><a href="../program/utstilling">EXHIBITION</a></li>
		<li class="button"><a href="../program/tidsskjema">TIDSSKJEMA</a></li>
		<?php
			break;
			case('Schedule'):
		?>
		<li class="button"><a href="../program/artister">ARTISTS</a></li>
		<li class="button"><a href="../program/film">FILM</a></li>
		<li class="button"><a href="../program/teater">THEATER</a></li>
		<li class="button"><a href="../program/utstilling">EXHIBITION</a></li>
		<li class="active button"><a href="../program/tidsskjema">TIDSSKJEMA</a></li>
		<?php
			break;
			default:
		?>
		<li class="button"><a href="./program/artister">ARTISTS</a></li>
		<li class="button"><a href="./program/film">FILM</a></li>
		<li class="button"><a href="./program/teater">THEATER</a></li>
		<li class="button"><a href="./program/utstilling">EXHIBITION</a></li>
		<li class="button"><a href="./program/tidsskjema">TIDSSKJEMA</a></li>
		<?php
			break;
		}
		?>
	</ul>
</div> <!-- END OF #programmenu -->