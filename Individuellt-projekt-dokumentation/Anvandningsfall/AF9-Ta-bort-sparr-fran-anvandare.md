# AF9 - Ta bort sp�rr fr�n anv�ndare
Senast uppdaterad 28/4 2014 klo 15:30 av Svante Arvedson

Administrat�ren tar bort en sp�rr fr�n en anv�ndare. Systemet sparar �ndringarna.

## Prim�r akt�r
* Administrat�ren

## Sekund�r akt�r
* Systemet

## F�rkrav
* Administrat�ren har utf�rt [DF1 - Logga in](DF1-Logga-in.md)

## Efterkrav
* Anv�ndarens konto ska vara sp�rrat

## Huvudscenario
* 1 - **AF9** startar n�r administrat�ren vill ta bort en sp�rr fr�n ett konto
* 2 - Systemet visar en lista med alla anv�ndarkonto
* 3 - Administrat�ren v�ljer att ta bort en sp�rr fr�n ett anv�ndarkonto
* 4 - Systemet tar bort sp�rren fr�n anv�ndarkontot

## Alternativscenario
* 4a - Ett fel intr�ffar n�r systemet tar bort sp�rren fr�n kontot
	* 1 - Systemet visar ett felmeddelande
    * 2 - *G� tillbaka till punkt 2*