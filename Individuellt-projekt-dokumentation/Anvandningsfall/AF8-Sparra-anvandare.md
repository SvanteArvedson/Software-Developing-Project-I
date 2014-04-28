# AF8 - Spärra användare
Senast uppdaterad 28/4 2014 klo 15:30 av Svante Arvedson

Administratören spärrar ett användarkonto. Systemet sparar ändringarna.

## Primär aktör
* Administratören

## Sekundär aktör
* Systemet

## Förkrav
* Administratören har utförst [DF1 - Logga in](DF1-Logga-in.md)

## Efterkrav
* Användarens konto ska vara spärrat

## Huvudscenario
* 1 - **AF8** startar när administratören vill spärra ett konto
* 2 - Systemet visar en lista med alla användarkonto
* 3 - Administratören väljer att spärra ett användarkonto
* 4 - Systemet spärrar användarkontot

## Alternativscenario
* 4a - Ett fel inträffar när systemet spärra kontot
	* 1 - Systemet visar ett felmeddelande
    * 2 - *Gå tillbaka till punkt 2*