# AF11 - Radera tråd från forumet
Senast uppdaterad 28/4 2014 klo 15:45 av Svante Arvedson

Administratören raderar en tråd från formumet. Systemet raderar tråden.

## Primär aktör
* Administratören

## Sekundär aktör
* Systemet

## Förkrav
* Administratören har utfört [DF1 - Logga in](DF1-Logga-in.md)

## Efterkrav
* Forumtråden ska vara raderad

## Huvudscenario
* 1 - **AF11** startar när administratören vill radera en tråd från forumet
* 2 - Systemet visar alla kategorier i forumet
* 3 - Administratören väljer en kategori
* 4 - Systemet visar alla aktiva trådar i kategorin
* 5 - Administratören väljer att radera en tråd
* 8 - Systemet raderar den valda tråden

## Alternativscenario
* 8a - Ett fel inträffar när systemet ska radera tråden
	* 1 - Systemet visar ett felmeddelande
    * 2 - *Gå tillbaka till punkt 4*