# AF14 - Lägg till ny lektion
Senast uppdaterad 6/5 2014 klo 00: av Svante Arvedson

Administratören lägger till en ny lektion i systemet. Systemet sparar ändringarna.

## Primär aktör
* Administratören

## Sekundär aktör
* Systemet

## Förkrav
* Administratören har utfört [DF1 - Logga in](DF1-Logga-in.md)

## Efterkrav
* Den nya lektionen och tillhörande test ska ha sparats

## Huvudscenario
* 1 - **AF14** startar när administratören vill lägga till en ny lektion
* 2 - Systemet visar alla lektioner
* 3 - Administratören väljer att skapa en ny lektion
* 4 - Systemet visar ett formulär för att skapa en ny lektion och tillhörande test
* 5 - Administratören fyller i formuläret
* 6 - Systemet sparar den nya lektionen

## Alternativscenario
* 2a - Det finns inga lektioner
    * 1 - Systemet visar ett meddelande om att det inte finns några sparade lektioner
* 5a - Administratören fyller i formuläret felaktigt
    * 1 - Systemet visar ett felmeddelande
    * 2 - *Gå tillbaka till punkt 4*
* 6a - Ett fel inträffar när systemet ska spara den nya lektionen
	* 1 - Systemet visar ett felmeddelande
    * 2 - *Gå tillbaka till punkt 4*