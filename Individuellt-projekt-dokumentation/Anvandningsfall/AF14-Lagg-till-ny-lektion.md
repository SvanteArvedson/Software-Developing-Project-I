# AF14 - L�gg till ny lektion
Senast uppdaterad 6/5 2014 klo 00: av Svante Arvedson

Administrat�ren l�gger till en ny lektion i systemet. Systemet sparar �ndringarna.

## Prim�r akt�r
* Administrat�ren

## Sekund�r akt�r
* Systemet

## F�rkrav
* Administrat�ren har utf�rt [DF1 - Logga in](DF1-Logga-in.md)

## Efterkrav
* Den nya lektionen och tillh�rande test ska ha sparats

## Huvudscenario
* 1 - **AF14** startar n�r administrat�ren vill l�gga till en ny lektion
* 2 - Systemet visar alla lektioner
* 3 - Administrat�ren v�ljer att skapa en ny lektion
* 4 - Systemet visar ett formul�r f�r att skapa en ny lektion och tillh�rande test
* 5 - Administrat�ren fyller i formul�ret
* 6 - Systemet sparar den nya lektionen

## Alternativscenario
* 2a - Det finns inga lektioner
    * 1 - Systemet visar ett meddelande om att det inte finns n�gra sparade lektioner
* 5a - Administrat�ren fyller i formul�ret felaktigt
    * 1 - Systemet visar ett felmeddelande
    * 2 - *G� tillbaka till punkt 4*
* 6a - Ett fel intr�ffar n�r systemet ska spara den nya lektionen
	* 1 - Systemet visar ett felmeddelande
    * 2 - *G� tillbaka till punkt 4*