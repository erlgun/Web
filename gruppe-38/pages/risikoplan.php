<?php
$current = 'Risikoplan';
include '../inc/headerup.inc.php';
include '../inc/sidebar.inc.php';
?>
<h2>Risikoskala for gruppe 38:</h2>
<p>
	Vi har rangert risiko etter følgende skala:
</p>
<ul>
	<li>1: lite sannsynlig</li>
	<li>2: middels sannsynlig</li>
	<li>3: sannsynlig</li>
	
</ul>

<table class="risiko">
	<tr>
		<th>Scenario</th><th>Risiko</th>
	</tr>
	<tr>
		<td>Sykdom</td><td>3</td>
	</tr>
	<tr>
		<td>Manglende oppmøte</td><td>1</td>
	</tr>
	<tr>
		<td>Medlem som slutter</td><td>1</td>
	</tr>
	<tr>
		<td>Ikke holde avtaler</td><td>1</td>
	</tr>
	<tr>
		<td>Uenigheter i gruppen</td><td>1</td>
	</tr>
	<tr>
		<td>Tap av data:</td><td>2</td>
	</tr>
</table>
<h3>Sykdom</h3>
<p>
    Faren for sykdom der et gruppemedlem ikke kan bidra er alltid til stede.
</p>
<p>
    <strong>Tiltak:</strong> Omfordele oppgaver. Holde kontakt via Skype, telefon og/eller e-post.
</p>

<h3>Manglende oppmøte</h3>
<p>
    Manglende oppmøte hindrer fremgang i prosjektet, i tillegg til at vi ikke får diskutert arbeidet vi har gjort.
</p>
<p>
    <strong>Tiltak:</strong> Gjenntatt manglende oppmøte vil føre til ekskludering fra gruppen i følge <a href="./samarbeidsavtale.php">samarbeidsavtalen</a>.
</p>

<h3>Medlem som slutter i Web-prosjekt</h3>
<p>
	Anser vi som lavt da alle har et høyt ambisjonsnivå. 
</p>
<p><strong>Tiltak:</strong> Skulle en person slutte, må vi ha omfordele arbeidet og skrive ansvarskartet på nytt.</p>

<h3>Ikke holde avtaler</h3>
<p>
    Å ikke holde avtaler vil gå ut over andre medlemmene i gruppen og til slutt produktet vi skal utvikle i fellesskap.
</p>
<p>
    <strong>Tiltak</strong>: Vi har en <a href="samarbeidsavtale.php">samarbeidsavtale</a> som sier at man kan bli ekskludert hvis man ikke holder avtaler.
</p>
<h3>Uenigheter i gruppen</h3>
<p>
    Det kan oppstå uenigheter i gruppen da vi kan ha forskjellig oppfatning av hvordan vi vil utforme sluttproduktet.
</p>
<p>
    <strong>Tiltak:</strong> Skulle det oppstå uenigheter vil vi diskutere problemstillingen mellom gruppemedlemmene og komme frem til den beste løsningen i fellesskap.
</p>
<h3>Tap av data</h3>
<p>
    Tap av data vil ha store konsekvenser og vil forsinke arbeidet og i verste fall må vi starte på nytt. Sannsynligheten for at alle data relatert til prosjektet går tapt er tilnærmet lik null, allikevel har vi tiltak for å unngå de minste tap av data.
</p>
<p>
    <strong>Tiltak:</strong> Vi lagrer alt på Dropbox. Alle har backup på sine personlige datamaskiner.
</p>

<?php
include '../inc/footer.inc.php';
?>