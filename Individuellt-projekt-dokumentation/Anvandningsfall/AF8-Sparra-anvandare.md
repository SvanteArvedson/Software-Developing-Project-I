# AF8 - Sp�rra anv�ndare
Senast uppdaterad 28/4 2014 klo 15:30 av Svante Arvedson

Administrat�ren sp�rrar ett anv�ndarkonto. Systemet sparar �ndringarna.

## Prim�r akt�r
* Administrat�ren

## Sekund�r akt�r
* Systemet

## F�rkrav
* Administrat�ren har utf�rst [DF1 - Logga in](DF1-Logga-in.md)

## Efterkrav
* Anv�ndarens konto ska vara sp�rrat

## Huvudscenario
* 1 - **AF8** startar n�r administrat�ren vill sp�rra ett konto
* 2 - Systemet visar en lista med alla anv�ndarkonto
* 3 - Administrat�ren v�ljer att sp�rra ett anv�ndarkonto
* 4 - Systemet sp�rrar anv�ndarkontot

## Alternativscenario
* 4a - Ett fel intr�ffar n�r systemet sp�rra kontot
	* 1 - Systemet visar ett felmeddelande
    * 2 - *G� tillbaka till punkt 2*