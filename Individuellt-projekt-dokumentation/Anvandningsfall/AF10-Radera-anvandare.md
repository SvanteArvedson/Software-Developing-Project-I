# AF10 - Radera anv�ndare
Senast uppdaterad 28/4 2014 klo 15:30 av Svante Arvedson

Administrat�ren raderar ett anv�ndarkonto fr�n systemet. Systemet sparar �ndringarna.

## Prim�r akt�r
* Administrat�ren

## Sekund�r akt�r
* Systemet

## F�rkrav
* Administrat�ren har utf�rt [DF1 - Logga in](DF1-Logga-in.md)

## Efterkrav
* Anv�ndarens konto ska vara sp�rrat

## Huvudscenario
* 1 - **AF10** startar n�r administrat�ren vill radera ett anv�ndarkonto
* 2 - Systemet visar en lista med alla anv�ndarkonto
* 3 - Administrat�ren v�ljer att radera ett anv�ndarkonto
* 4 - Systemet raderar anv�ndarkontot

## Alternativscenario
* 4a - Ett fel intr�ffar n�r systemet raderar kontot
	* 1 - Systemet visar ett felmeddelande
    * 2 - *G� tillbaka till punkt 2*