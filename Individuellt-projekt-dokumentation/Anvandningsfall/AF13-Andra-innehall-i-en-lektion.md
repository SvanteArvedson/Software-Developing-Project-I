# AF13 - �ndra inneh�ll i en lektion
Senast uppdaterad 5/5 2014 klo 23:30 av Svante Arvedson

Administrat�ren �ndrar inneh�llet i en lektion. Systemet sparar �ndringarna.

## Prim�r akt�r
* Administrat�ren

## Sekund�r akt�r
* Systemet

## F�rkrav
* Administrat�ren har utf�rt [DF1 - Logga in](DF1-Logga-in.md)

## Efterkrav
* �ndringarna i lektionsinneh�llet ska ha sparats

## Huvudscenario
* 1 - **AF13** startar n�r administrat�ren vill �ndra inneh�ll i en lektion
* 2 - Systemet visar alla lektioner
* 3 - Administrat�ren v�ljer en lektion
* 4 - Systemet visar inneh�llet i lektionen
* 5 - Administrat�ren v�ljer att �ndra inneh�llet
* 6 - Systemet visar ett formul�r f�r �ndring av inneh�ll
* 7 - Administrat�ren �ndrar inneh�llet och v�ljer att spara �ndringarna
* 8 - Systemet sparar �ndringarna


## Alternativscenario
* 2a - Det finns inga lektioner
    * 1 - Systemet visar ett meddelande om att det inte finns n�gra sparade lektioner
* 7a - Administrat�ren fyller i formul�ret felaktigt
    * 1 - Systemet visar ett felmeddelande
    * 2 - *G� tillbaka till punkt 6*
* 8a - Ett fel intr�ffar n�r systemet ska spara �ndringarna
	* 1 - Systemet visar ett felmeddelande
    * 2 - *G� tillbaka till punkt 6*