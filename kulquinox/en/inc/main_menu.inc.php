<div id="mainMenu">
	<ul class="menuItems">
<!-- Her henter PHP opp variabelen $current og tester den på hvert case, kjører ut korresponderende HTML-kode og hopper til slutten av switch statementet. Slik får vi highlightet menyvalg. Om ingen er valgt, går den automatisk på default. Merk at PHP kan både slutte og starte flere ganger i samme statement. -->
		<?php
			switch ($current) {
			case('Program'):
		?>
		<li class="button active"><a href="../pages/program_index">PROGRAM</a></li>
		<li class="button"><a href="../pages/om_kulquinox">OM KULQUINOX</a></li>
		<li class="button"><a href="../pages/galleri">GALLERI</a></li>
		<li class="button"><a href="../pages/info_index">NYTTIG INFO</a></li>
		<li class="button"><a href="../pages/kontakt">KONTAKT</a></li>
		<?php
			break;
			case('Om Kulquinox'):
		?>
		<li class="button"><a href="../pages/program_index">PROGRAM</a></li>
		<li class="button active"><a href="../pages/om_kulquinox">OM KULQUINOX</a></li>
		<li class="button"><a href="../pages/galleri">GALLERI</a></li>
		<li class="button"><a href="../pages/info_index">NYTTIG INFO</a></li>
		<li class="button"><a href="../pages/kontakt">KONTAKT</a></li>
		<?php
			break;
			case('Galleri'):
		?>
		<li class="button"><a href="../pages/program_index">PROGRAM</a></li>
		<li class="button"><a href="../pages/om_kulquinox">OM KULQUINOX</a></li>
		<li class="button active"><a href="../pages/galleri">GALLERI</a></li>
		<li class="button"><a href="../pages/info_index">NYTTIG INFO</a></li>
		<li class="button"><a href="../pages/kontakt">KONTAKT</a></li>
		<?php
			break;
			case('Nyttig informasjon'):
		?>
		<li class="button"><a href="../pages/program_index">PROGRAM</a></li>
		<li class="button"><a href="../pages/om_kulquinox">OM KULQUINOX</a></li>
		<li class="button"><a href="../pages/galleri">GALLERI</a></li>
		<li class="button active"><a href="../pages/info_index">NYTTIG INFO</a></li>
		<li class="button"><a href="../pages/kontakt">KONTAKT</a></li>
		<?php
			break;
			case('Kontakt'):
		?>
		<li class="button"><a href="../pages/program_index">PROGRAM</a></li>
		<li class="button"><a href="../pages/om_kulquinox">OM KULQUINOX</a></li>
		<li class="button"><a href="../pages/galleri">GALLERI</a></li>
		<li class="button"><a href="../pages/info_index">NYTTIG INFO</a></li>
		<li class="button active"><a href="../pages/kontakt">KONTAKT</a></li>
		<?php
			break;
			case('Artister'):
			case('Film'):
			case('Teater'):
			case('Utstilling'):
			case('Tidsskjema'):
		?>
		<li class="button active"><a href="../program_index">PROGRAM</a></li>
		<li class="button"><a href="../om_kulquinox">OM KULQUINOX</a></li>
		<li class="button"><a href="../galleri">GALLERI</a></li>
		<li class="button"><a href="../info_index">NYTTIG INFO</a></li>
		<li class="button"><a href="../kontakt">KONTAKT</a></li>
		<?php
			break;
			default:
		?>
		<li class="button"><a href="./pages/program_index">PROGRAM</a></li>
		<li class="button"><a href="./pages/om_kulquinox">OM KULQUINOX</a></li>
		<li class="button"><a href="./pages/galleri">GALLERI</a></li>
		<li class="button"><a href="./pages/info_index">NYTTIG INFO</a></li>
		<li class="button"><a href="./pages/kontakt">KONTAKT</a></li>
		<?php
			break;
		}
		?>
	</ul>
</div><!-- END OF #mainMenu -->