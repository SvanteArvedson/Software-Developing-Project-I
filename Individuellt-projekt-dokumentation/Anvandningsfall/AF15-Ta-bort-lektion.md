# AF15 - Ta bort lektion
Senast uppdaterad 6/5 2014 klo 00:00 av Svante Arvedson

Administratören tar bort en lektion från systemet. Systemet sparar ändringen.

## Primär aktör
* Administratören

## Sekundär aktör
* Systemet

## Förkrav
* Administratören har utfört [DF1 - Logga in](DF1-Logga-in.md)

## Efterkrav
* Den valda lektionen och tillhörande test ska ha raderats

## Huvudscenario
* 1 - **AF15** startar när administratören vill radera en lektion
* 2 - Systemet visar alla lektioner
* 3 - Administratören väljer att radera en lektion
* 4 - Systemet ber om en bekräftelse på att lektionen ska raderas
* 5 - Administratören bekräftar att lektionenska raderas
* 6 - Systemet raderar den valda lektionen

## Alternativscenario
* 2a - Det finns inga lektioner
    * 1 - Systemet visar ett meddelande om att det inte finns några sparade lektioner
* 5a - Administratören bekräftar inte att lektionen ska raderas
    * 1 - Systemet avbryter raderingen och gr tillbaka till listan med alla lektioner
* 6a - Ett fel inträffar när systemet ska radera lektionen
	* 1 - Systemet visar ett felmeddelande
    * 2 - *Gå tillbaka till punkt 2*