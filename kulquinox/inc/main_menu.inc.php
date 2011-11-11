<div id="mainmenu">
	<ul class="menuitems">
<!-- Her henter PHP opp variabelen $current og tester den på hvert case, kjører ut korresponderende HTML-kode og hopper til slutten av switch statementet. Slik får vi highlightet menyvalg. Om ingen er valgt, går den automatisk på default. -->
<?php

switch ($current) {
	case('Program'):
?>
		<li class="active"><a href="../pages/program.php">Program</a></li>
		<li><a href="../pages/om_festivalen.php">Om festivalen</a></li>
		<li><a href="../pages/galleri.php">Galleri</a></li>
		<li><a href="../pages/nyttig_info.php">Nyttig info</a></li>
		<li><a href="../pages/kontakt.php">Kontakt</a></li>
<?php
	break;
	case('Om festivalen'):
?>
		<li><a href="../pages/program.php">Program</a></li>
		<li class="active"><a href="../pages/om_festivalen.php">Om festivalen</a></li>
		<li><a href="../pages/galleri.php">Galleri</a></li>
		<li><a href="../pages/nyttig_info.php">Nyttig info</a></li>
		<li><a href="../pages/kontakt.php">Kontakt</a></li>
<?php
	break;
	case('Galleri'):
?>
		<li><a href="../pages/program.php">Program</a></li>
		<li><a href="../pages/om_festivalen.php">Om festivalen</a></li>
		<li class="active"><a href="../pages/galleri.php">Galleri</a></li>
		<li><a href="../pages/nyttig_info.php">Nyttig info</a></li>
		<li><a href="../pages/kontakt.php">Kontakt</a></li>
<?php
	break;
	case('Nyttig informasjon'):
?>
		<li><a href="../pages/program.php">Program</a></li>
		<li><a href="../pages/om_festivalen.php">Om festivalen</a></li>
		<li><a href="../pages/galleri.php">Galleri</a></li>
		<li class="active"><a href="../pages/nyttig_info.php">Nyttig info</a></li>
		<li><a href="../pages/kontakt.php">Kontakt</a></li>
<?php
	break;
	case('Kontakt'):
?>
		<li><a href="../pages/program.php">Program</a></li>
		<li><a href="../pages/om_festivalen.php">Om festivalen</a></li>
		<li><a href="../pages/galleri.php">Galleri</a></li>
		<li><a href="../pages/nyttig_info.php">Nyttig info</a></li>
		<li class="active"><a href="../pages/kontakt.php">Kontakt</a></li>
<?php
	break;
	case('Artister'):
	case('Film'):
	case('Teater'):
	case('Utstilling'):
	case('Tidsskjema'):
?>
		<li class="active"><a href="../program.php">Program</a></li>
		<li><a href="../om_festivalen.php">Om festivalen</a></li>
		<li><a href="../galleri.php">Galleri</a></li>
		<li><a href="../nyttig_info.php">Nyttig info</a></li>
		<li><a href="../kontakt.php">Kontakt</a></li>
<?php
	break;
	default:
?>
		<li><a href="./pages/program.php">Program</a></li>
		<li><a href="./pages/om_festivalen.php">Om festivalen</a></li>
		<li><a href="./pages/galleri.php">Galleri</a></li>
		<li><a href="./pages/nyttig_info.php">Nyttig info</a></li>
		<li><a href="./pages/kontakt.php">Kontakt</a></li>
<?php
	break;
}
?>
	</ul>
</div><!-- END OF #mainmenu -->
<div id="content">