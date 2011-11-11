Praktiske GIT kommandoer

git pull
Første kommandoen du utfører når du skal begynne å jobbe. Oppdaterer mappen din på pc til å være lik den som ligger på githubben. Ikke utfør denne kommandoen hvis du jobber med filer da den vil overskrive alle endringer du har gjort lokalt på pcen. NB Må utføres i mappen du  jobber fra.

git status
Sjekker filene dine lokalt opp mot de som ligger på servern og ser hvilke filer du har gjort endringer i.

git add ‘filnavn’
Adder fil eller mappe du vil pushe til githubben. Hvis du skal adde flere filer må du altså utføre denne kommandoen flere ganger. Må utføres i mappen filen ligger eller bruke mappesti. Eks Git add /mappenavn/navnpåfil

git commit –m ‘skriv melding her’
Legger til en melding til alle filer/mapper du har addet som da gjerne skal være informativ om hva du har gjort. 

git push origin master
Pusher alle filene du har gjort endringer på til githubben. Hvis du ikke får lov til å kjøre en push har antagelig noen andre jobbet med andre filer og pushet dem etter du sist kjørte en pull. Du må da kjøre en fetch/merge.

git fetch upstream
Utføres når du ikke får lov til å kjøre en push. Henter alle endringer som har blitt gjort på githubben men overskriver ikke endringene du har gjort lokalt.

git merge upstream/master
Merger de filene du har hentet ned med fetch med filene du har lokalt på pcen. Du er nå oppdatert uten å ha overskrevet filene du har gjort endringer i. Du får nå lov til å kjøre en push. Hvis du fortsatt ikke får lov til å kjøre en push så har noen jobbet i samme filer som deg (Fy! Fy!) og dere får ta en nødtelefon til meg så får vi ordne opp i det. 

Denne filen ligger også som Word Doc i Dropboxen