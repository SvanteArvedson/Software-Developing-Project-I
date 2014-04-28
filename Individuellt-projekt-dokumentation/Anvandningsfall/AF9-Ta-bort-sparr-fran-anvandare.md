# AF9 - Ta bort spärr från användare
Senast uppdaterad 28/4 2014 klo 15:30 av Svante Arvedson

Administratören tar bort en spärr från en användare. Systemet sparar ändringarna.

## Primär aktör
* Administratören

## Sekundär aktör
* Systemet

## Förkrav
* Administratören har utfört [DF1 - Logga in](DF1-Logga-in.md)

## Efterkrav
* Användarens konto ska vara spärrat

## Huvudscenario
* 1 - **AF9** startar när administratören vill ta bort en spärr från ett konto
* 2 - Systemet visar en lista med alla användarkonto
* 3 - Administratören väljer att ta bort en spärr från ett användarkonto
* 4 - Systemet tar bort spärren från användarkontot

## Alternativscenario
* 4a - Ett fel inträffar när systemet tar bort spärren från kontot
	* 1 - Systemet visar ett felmeddelande
    * 2 - *Gå tillbaka till punkt 2*