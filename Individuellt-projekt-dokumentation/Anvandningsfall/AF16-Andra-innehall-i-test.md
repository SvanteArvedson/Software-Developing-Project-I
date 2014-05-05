# AF16 - �ndra inneh�ll i test
Senast uppdaterad 6/5 2014 klo 00:00 av Svante Arvedson

Administrat�ren �ndrar inneh�llet i ett test. Systemet sparar �ndringarna.

## Prim�r akt�r
* Administrat�ren

## Sekund�r akt�r
* Systemet

## F�rkrav
* Administrat�ren har utf�rt [DF1 - Logga in](DF1-Logga-in.md)

## Efterkrav
* �ndringarna i testet ska ha sparats

## Huvudscenario
* 1 - **AF16** startar n�r administrat�ren vill �ndra inneh�ll i ett test
* 2 - Systemet visar alla lektioner
* 3 - Administrat�ren v�ljer en lektion
* 4 - Systemet visar inneh�llet i lektionen
* 5 - Administrat�ren v�ljer att �ndra inneh�llet
* 6 - Systemet visar ett formul�r f�r �ndring av inneh�ll i lektionen och tillh�rande test
* 7 - Administrat�ren �ndrar inneh�llet i testet och v�ljer att spara �ndringarna
* 8 - Systemet sparar �ndringarna


## Alternativscenario
* 2a - Det finns inga lektioner
    * 1 - Systemet visar ett meddelande om att det inte finns n�gra sparade lektioner
    * 2 - Anv�ndningsfallet avbryts
* 7a - Administrat�ren fyller i formul�ret felaktigt
    * 1 - Systemet visar ett felmeddelande
    * 2 - *G� tillbaka till punkt 6*
* 8a - Ett fel intr�ffar n�r systemet ska spara �ndringarna
	* 1 - Systemet visar ett felmeddelande
    * 2 - *G� tillbaka till punkt 6*