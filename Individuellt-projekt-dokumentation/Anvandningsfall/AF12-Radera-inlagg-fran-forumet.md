# AF12 - Radera inlägg från forumet
Senast uppdaterad 28/4 2014 klo 15:45 av Svante Arvedson

Administratören raderar ett inlägg från forumet. Systemet raderar inlägget.

## Primär aktör
* Administratören

## Sekundär aktör
* Systemet

## Förkrav
* Administratören har utfört [DF1 - Logga in](DF1-Logga-in.md)

## Efterkrav
* Forumtråden ska vara raderad

## Huvudscenario
* 1 - **AF12** startar när administratören vill radera ett inlägg i forumet
* 2 - Systemet visar alla kategorier i forumet
* 3 - Administratören väljer en kategori
* 4 - Systemet visar alla aktiva trådar i kategorin
* 5 - Administratören väljer en tråd
* 6 - Systemet visar den valda tråden
* 7 - Administratören väljer att radera ett inlägg
* 8 - Systemet raderar inlägget


## Alternativscenario
* 8a - Ett fel inträffar när systemet ska radera tråden
	* 1 - Systemet visar ett felmeddelande
    * 2 - *Gå tillbaka till punkt 7*