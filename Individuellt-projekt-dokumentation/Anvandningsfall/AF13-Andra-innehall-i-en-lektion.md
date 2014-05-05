# AF13 - Ändra innehåll i en lektion
Senast uppdaterad 5/5 2014 klo 23:30 av Svante Arvedson

Administratören ändrar innehållet i en lektion. Systemet sparar ändringarna.

## Primär aktör
* Administratören

## Sekundär aktör
* Systemet

## Förkrav
* Administratören har utfört [DF1 - Logga in](DF1-Logga-in.md)

## Efterkrav
* Ändringarna i lektionsinnehållet ska ha sparats

## Huvudscenario
* 1 - **AF13** startar när administratören vill ändra innehåll i en lektion
* 2 - Systemet visar alla lektioner
* 3 - Administratören väljer en lektion
* 4 - Systemet visar innehållet i lektionen
* 5 - Administratören väljer att ändra innehållet
* 6 - Systemet visar ett formulär för ändring av innehåll
* 7 - Administratören ändrar innehållet och väljer att spara ändringarna
* 8 - Systemet sparar ändringarna


## Alternativscenario
* 2a - Det finns inga lektioner
    * 1 - Systemet visar ett meddelande om att det inte finns några sparade lektioner
* 7a - Administratören fyller i formuläret felaktigt
    * 1 - Systemet visar ett felmeddelande
    * 2 - *Gå tillbaka till punkt 6*
* 8a - Ett fel inträffar när systemet ska spara ändringarna
	* 1 - Systemet visar ett felmeddelande
    * 2 - *Gå tillbaka till punkt 6*