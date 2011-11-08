<?php
$current = 'Ansvarskart';
include '../inc/headerup.inc.php';
include '../inc/sidebar.inc.php';
?>
<h2>Ansvarskart</h2>

<table>
    <tr>
        <th>Person</th><th>Hovedansvar</th><th>Delansvar</th>
    </tr>
    <tr>
        <td>Nicolai</td><td>struktur, PHP, validering</td><td>design, tilrettelegging sos. medier, rettskrivning, HTML</td>
    </tr>
    <tr>
        <td>Martin</td><td>søkemotoroptimalisering, universell utforming, rettskrivning</td><td>milepæler og aktivitetsplan, WCAG, HTML</td>
    </tr>
    <tr>
        <td>Erlend</td><td>milepælsplan og aktivitetsplan, git, plattformoptimalisering</td><td>PHP, søkemotoroptimalisering, validering, HTML</td>
    </tr>
    <tr>
        <td>Mathias</td><td>WCAG, design</td><td>struktur, universell utforming, HTML, plattformoptimalisering</td>
    </tr>
</table>

<h3>Struktur</h3>
<p>
    Sette opp struktur og konvensjoner for hvordan HTML-dokuementene skal kodes. Her ligger også ansvar for stilark.
</p>

<h3>Validering</h3>
<p>
    Sørge for at sidene validerer i henhold til HTML5-standarden.
</p>

<h3>Søkemotoroptimalisering</h3>
<p>
    Tilrettelegge for søkemotorene
</p>
<h3>PHP</h3>
<p>
    Ansvar for koding av PHP.
</p>

<h3>WCAG</h3>
<p>
    Sørge for at siden følger WCAG sine standarder
</p>

<h3>Design</h3>
<p>
    Ansvar for designet av det ferdige produktet
</p>
  
<h3>GIT</h3>
<p>
    Opprette en GIT repository og gi de andre innføring i GIT
</p>        
    
<h3>Universell utforming</h3>
<p>
   Universell utforming av nettstedet, så det er tilrettelagt for så mange som mulig
</p>
<h3>Plattformoptimalisering</h3>
<p>
   Sørge for at siden ser lik ut for alle OS og browsere. Skal også gjøre en vurdering om vi har tid til å opptimalisere for smart telefon
</p>

<?php
include '../inc/footer.inc.php';
?>