# AF10 - Radera användare
Senast uppdaterad 28/4 2014 klo 15:30 av Svante Arvedson

Administratören raderar ett användarkonto från systemet. Systemet sparar ändringarna.

## Primär aktör
* Administratören

## Sekundär aktör
* Systemet

## Förkrav
* Administratören har utfört [DF1 - Logga in](DF1-Logga-in.md)

## Efterkrav
* Användarens konto ska vara spärrat

## Huvudscenario
* 1 - **AF10** startar när administratören vill radera ett användarkonto
* 2 - Systemet visar en lista med alla användarkonto
* 3 - Administratören väljer att radera ett användarkonto
* 4 - Systemet raderar användarkontot

## Alternativscenario
* 4a - Ett fel inträffar när systemet raderar kontot
	* 1 - Systemet visar ett felmeddelande
    * 2 - *Gå tillbaka till punkt 2*