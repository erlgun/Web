<?php
$current = 'Midtveisrapport';
include '../inc/headerup.inc.php';
include '../inc/sidebar.inc.php';
?>
<h2>Midtveisrapport</h2>
<h3>Innhold</h3>
<table class="indextable">
	<tr>
		<td>1</td>
		<td><a href="#1skisse">Skisse til ferdig nettsted</a></td>
	</tr>
	<tr>
		<td>2</td>
		<td><a href="#2krav">Beskrivelse over krav</a></td>
	</tr>
	<tr>
		<td>2.1</td>
		<td><a href="#21krav">Teknologi</a></td>
	</tr>
	<tr>
		<td>2.2</td>
		<td><a href="#22krav">Standarder</a></td>
	</tr>
	<tr>
		<td>2.3</td>
		<td><a href="#23krav">Funksjonalitet</a></td>
	</tr>
	<tr>
		<td>2.4</td>
		<td><a href="#24krav">Hvordan sikre brukervennlighet og universell utforming</a></td>
	</tr>
	<tr>
		<td>3</td>
		<td><a href="#3designvalg">Begrunnelse for designvalg</a></td>
	</tr>
	<tr>
		<td>4</td>
		<td><a href="#4evaluering">Evaluering</a></td>
	</tr>
	<tr>
		<td>4.1</td>
		<td><a href="#41evaluering">Hvordan har samarbeidet i gruppa gått?</a></td>
	</tr>
	<tr>
		<td>4.2</td>
		<td><a href="#42evaluering">Hvordan har vi lykkes i å følge fremdriftsplanen?</a></td>
	</tr>
	<tr>
		<td>4.3</td>
		<td><a href="#43evaluering">Har det dukket opp noe spesielt underveis i prosjektet som har påvirket fremdriften, og hvordan har vi eventuelt håndtert dette?</a></td>
	</tr>
	<tr>
		<td>5</td>
		<td><a href="#5individuellerapporter">Individuelle rapporter</a></td>
	</tr>
	<tr>
		<td>6</td>
		<td><a href="#6skissesluttrapport">Skisse til sluttraport</a></td>
	</tr>
</table>
	<h3 id="1skisse">1 Skisse til ferdig nettsted</h3>
	<p>
		Vi har tegnet skisser til det ferdige nettstedet og skrevet et nettstedskart for hånd. Disse er pakket inn i en .zip-fil. <a href="../docs/skisser.zip">Skisser til ferdig nettsted</a>.
	</p>
	<h3 id="2krav">2 Beskrivelse over krav</h3>
		<h4 id="21krav">2.1 Teknologi:</h4>
		<ul>
			<li>HTML</li>
			<li>CSS</li>
			<li>PHP</li>
		</ul>
		<h4 id="22krav">2.2 Standarder:</h4>
		<ul>
			<li>HTML5</li>
			<li>CSS 2.1</li>
			<li>WCAG AA</li>
		</ul>
		<h4 id="23krav">2.3 Funksjonalitet</h4>
		<p>
			Fordi vi har en spredt brukergruppe ønsker vi å holde funksjonaliteten til et grunnleggende nivå. Et enkelt menysystem. En programside med kort informasjon om innslagene. Et galleri med bilder fra tidligere festivaler. Skjema for å sende inn spørsmål til festivalens kontaktpersoner. Det skal være mulig å navigere seg gjennom et sidekart. 
		</p>
	<h4 id="24krav">2.4 Hvordan sikre brukervennlighet og universell utforming</h4>
	<ul>
		<li>Det skal være åpenbart hva siden handler om</li>
		<li>Ha stor nok skrift og som er skalerbar</li>
		<li>Riktig kontrast mellom skrift og bakgrunn</li>
		<li>Vi skal ta hensyn til lesemønsteret på web (F-mønsteret)</li>
		<li>Overskrifter og lenker er meningsbærende</li>
		<li>Den viktigste informasjonen skal stå øverst</li>
		<li>Ha mye luft i teksten</li>
		<li>Dele opp innholdet fornuftig med H-tagger</li>
		<li>Overskrifter og lenker er meningsbærende</li>
		<li>Enkel navigasjon på siden, 3 klikk regelen</li>
		<li>Brukeren skal være klar over hvor på siden han/hun er</li>
		<li>Brukeren skal vite hvor linkene går</li>
		<li>Følge HTML-standarder</li>
	</ul>
	<p>
		Ved å følge disse punktene mener vi at vi vil sikre brukervennlighet/universell utforming.
	</p>
<h3 id="3designvalg">3 Begrunnelse for designvalg</h3>
<p>
	Målgruppen for festivalen er meget stor. Derfor har det vært viktig å holde et enkelt design som alle kan forstå og navigere i. Oversiktlige menyer som alltid viser hvor på nettsiden man er et godt tiltak for appelere til en slik brukergruppe. Menyene skal fungere i forskjellige skriftstørrelser, noe som gjør det mulig for brukere med dårligere syn å navigere nettsiden. Med en implementering av WCAG AA vil vi dekke behovene for brukere med nedsatt funksjonalitet.
</p>
<p>
	Vi har også lagt vekt på et solid menysystem. Det vil være en hovedmeny som alltid er tilgjengelig, det vil også legge seg ekstra menyer under hovedmenyen for undersider hvor et slikt behov er tilstede, f.eks. programsiden. Relevant informasjon skal alltid være idéellt et, maksimum to klikk unna, dette er viktig så potensielt besøkende til festivalen ikke går seg vill i sidene og mister interessen. Vi vil begrense bruk av scrolling og holde artiklene korte og konsise. Det skal være mulig å navigere lenker ved hjelp av Tab-knappen. Foruten gallerisiden bør ikke sidene inneholde videoer. Forsiden spesielt følger en F-struktur i forhold til viktig innhold. Derfor deler vi den inn i to vertikale div-elementer med nyheter til venstre. Vi ønsker å beholde fargene til den gamle logoen for å beholde gjenkjennelsesfaktoren.
</p>
<h3 id="4evaluering">4 Evaluering</h3>
<h4 id="41evaluering">4.1 Hvordan har samarbeidet i gruppa gått?</h4>
<p>
	Samarbeidet har gått greit. Vi har satt opp faste gruppemøter som passer for alle og vi har brukt Dropbox til dokumentene i prosjektet.
</p>
<p>
	I tillegg til dette har vi en samarbeidsavtale som med faste rammer. Denne har alle signert under.
</p>
<p>
	På møtene diskuterer vi fremdriften siden sist møte og eventuelle justeringer vi må gjøre for å holde oss til tidsskjema, og hva som skal jobbes med til neste møte.
</p>
<p>
	Videre blir det jobbet i grupper på to om de viktigste oppgavene. Slik sikrer vi at ansvarsfordelingen blir balansert og arbeidet blir effektivt. Gruppen fokuserer også på god interaksjon i mellom medlemmer så samarbeidet blir på topp.
</p>
<h4 id="42evaluering">4.2 Hvordan har vi lykkes med å følge fremdriftsplanen?</h4>
<p>
	Vi har hatt en litt vanskelig start, hvor mye tid har gått med på å lære oss korrekt prosjektplanlegging. Det har ført til at vi i ettertid har måttet rette opp arbeid som igjen har forskjøvet fremdriftsplanen. Selv om det har ført til tidsmessige ulemper ser vi at et godt fundament vil hjelpe oss å arbeide effektivt videre.
</p>
<p>
	Som ett resultat av det har vi ikke fått på plass en ordentlig fremdriftsplan før uke 43.
</p>
<h4 id="43evaluering">4.3 Har det dukket opp noe spesielt underveis i prosjektet som har påvirket fremdriften, og hvordan har vi eventuelt håndtert dette?</h4>
<p>
	Det har vært to større hindere underveis. Det første at Leveranse 1 hadde store mangler i henhold til oppgavebeskrivelsen. Vi håndterte dette ved å sette opp hastemøter og ha en klarere fordeling av ansvar for innholdet i første leveranse.
</p>
<p>
	Det andre hinderet var endring av prosjektet under arbeidet med Leveranse 2. Nicolai har jobbet som frivillig på en liten kulturfestival i Sandvika og har sett et stort behov for en ny webløsning for festivalen. Han foreslo derfor å endre prosjektet vårt til dette. Dette ble gruppen med på.
</p>
<p>
	Vi vurderte fordeler og ulemper ved å bytte prosjekt til neste møte, og vedtok dette ved gruppemøte 28.10.11.
</p>
<p>
	Det er en stor motivasjonsfaktor å utvikle for web når man må ta hensyn til at produktet kan bli brukt av folk, istedenfor å ende opp med en "død" nettside som kun har fungert som et eksempel på webutvikling. Denne motivasjonsfaktoren har veid opp for det ekstra arbeidet.
</p>
<h3 id="5individuellerapporter">5 Individuelle rapporter</h3>
<ul>
	<li><a href="http://www.stud.hio.no/~s141169/rapport.html">Martin Johan Grini</a></li>
	<li><a href="http://student.iu.hio.no/~s180489/rapport.html">Mathias Groven</a></li>
	<li><a href="http://student.iu.hio.no/~s180339/Webprosjekt/Oblig1/individuellrapport.html">Nicolai Grøndahl</a></li>
	<li><a href="http://www.stud.hio.no/~s181807/Rapport.html">Erlend Gunnesen</a></li>
</ul>
<h3 id="6skissesluttrapport">6 Skisse til sluttrapport</h3>
<p>
	Skissen til sluttrapporten kan lastes ned som .pdf-dokument. <a href="../docs/skisse_til_sluttrapport.pdf">Skisse til sluttrapport</a>.
</p>

<?php
include '../inc/footer.inc.php';
?>