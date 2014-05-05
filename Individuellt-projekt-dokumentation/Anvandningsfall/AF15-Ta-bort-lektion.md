# AF15 - Ta bort lektion
Senast uppdaterad 6/5 2014 klo 00:00 av Svante Arvedson

Administrat�ren tar bort en lektion fr�n systemet. Systemet sparar �ndringen.

## Prim�r akt�r
* Administrat�ren

## Sekund�r akt�r
* Systemet

## F�rkrav
* Administrat�ren har utf�rt [DF1 - Logga in](DF1-Logga-in.md)

## Efterkrav
* Den valda lektionen och tillh�rande test ska ha raderats

## Huvudscenario
* 1 - **AF15** startar n�r administrat�ren vill radera en lektion
* 2 - Systemet visar alla lektioner
* 3 - Administrat�ren v�ljer att radera en lektion
* 4 - Systemet ber om en bekr�ftelse p� att lektionen ska raderas
* 5 - Administrat�ren bekr�ftar att lektionenska raderas
* 6 - Systemet raderar den valda lektionen

## Alternativscenario
* 2a - Det finns inga lektioner
    * 1 - Systemet visar ett meddelande om att det inte finns n�gra sparade lektioner
* 5a - Administrat�ren bekr�ftar inte att lektionen ska raderas
    * 1 - Systemet avbryter raderingen och gr tillbaka till listan med alla lektioner
* 6a - Ett fel intr�ffar n�r systemet ska radera lektionen
	* 1 - Systemet visar ett felmeddelande
    * 2 - *G� tillbaka till punkt 2*