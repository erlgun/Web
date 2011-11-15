<div id="menu">
	<ul class="menuitems">
<!-- Her henter PHP opp variabelen $current og tester den på hvert case, kjører ut korresponderende HTML-kode og hopper til slutten av switch statementet. Slik får vi highlightet menyvalg. Om ingen er valgt, går den automatisk på default. Merk at PHP kan både slutte og starte flere ganger i samme statement. -->
	<?php
		switch ($current) {
		case('Program'):
	?>
		<li class="button active"><a href="../pages/program.php">PROGRAM</a></li>
		<li class="button"><a href="../pages/om_festivalen.php">OM FESTIVALEN</a></li>
		<li class="button"><a href="../pages/galleri.php">GALLERI</a></li>
		<li class="button"><a href="../pages/nyttig_info.php">NYTTIG INFO</a></li>
		<li class="button"><a href="../pages/kontakt.php">KONTAKT</a></li>
	<?php
		break;
		case('Om festivalen'):
	?>
		<li class="button"><a href="../pages/program.php">PROGRAM</a></li>
		<li class="button active"><a href="../pages/om_festivalen.php">OM FESTIVALEN</a></li>
		<li class="button"><a href="../pages/galleri.php">GALLERI</a></li>
		<li class="button"><a href="../pages/nyttig_info.php">NYTTIG INFO</a></li>
		<li class="button"><a href="../pages/kontakt.php">KONTAKT</a></li>
	<?php
		break;
		case('Galleri'):
	?>
		<li class="button"><a href="../pages/program.php">PROGRAM</a></li>
		<li class="button"><a href="../pages/om_festivalen.php">OM FESTIVALEN</a></li>
		<li class="button active"><a href="../pages/galleri.php">GALLERI</a></li>
		<li class="button"><a href="../pages/nyttig_info.php">NYTTIG INFO</a></li>
		<li class="button"><a href="../pages/kontakt.php">KONTAKT</a></li>
	<?php
		break;
		case('Nyttig informasjon'):
	?>
		<li class="button"><a href="../pages/program.php">PROGRAM</a></li>
		<li class="button"><a href="../pages/om_festivalen.php">OM FESTIVALEN</a></li>
		<li class="button"><a href="../pages/galleri.php">GALLERI</a></li>
		<li class="button active"><a href="../pages/nyttig_info.php">NYTTIG INFO</a></li>
		<li class="button"><a href="../pages/kontakt.php">KONTAKT</a></li>
	<?php
		break;
		case('Kontakt'):
	?>
		<li class="button"><a href="../pages/program.php">PROGRAM</a></li>
		<li class="button"><a href="../pages/om_festivalen.php">OM FESTIVALEN</a></li>
		<li class="button"><a href="../pages/galleri.php">GALLERI</a></li>
		<li class="button"><a href="../pages/nyttig_info.php">NYTTIG INFO</a></li>
		<li class="button active"><a href="../pages/kontakt.php">KONTAKT</a></li>
	<?php
		break;
		case('Artister'):
		case('Film'):
		case('Teater'):
		case('Utstilling'):
		case('Tidsskjema'):
	?>
		<li class="button active"><a href="../program.php">PROGRAM</a></li>
		<li class="button"><a href="../om_festivalen.php">OM FESTIVALEN</a></li>
		<li class="button"><a href="../galleri.php">GALLERI</a></li>
		<li class="button"><a href="../nyttig_info.php">NYTTIG INFO</a></li>
		<li class="button"><a href="../kontakt.php">KONTAKT</a></li>
	<?php
		break;
		default:
	?>
		<li class="button"><a href="./pages/program.php">PROGRAM</a></li>
		<li class="button"><a href="./pages/om_festivalen.php">OM FESTIVALEN</a></li>
		<li class="button"><a href="./pages/galleri.php">GALLERI</a></li>
		<li class="button"><a href="./pages/nyttig_info.php">NYTTIG INFO</a></li>
		<li class="button"><a href="./pages/kontakt.php">KONTAKT</a></li>
	<?php
		break;
	}
	?>
	</ul>
</div><!-- END OF #menu -->
<div id="content">