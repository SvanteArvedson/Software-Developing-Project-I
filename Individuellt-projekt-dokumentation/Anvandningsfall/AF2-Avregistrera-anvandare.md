# AF2 - Avregistrera anv�ndare
Senast uppdaterad 20/4 2014 klo 23:45 av Svante Arvedson

Anv�ndaren avregistrerar sig fr�n systemet. Systemet tar bort anv�ndarens konto.

## Prim�r akt�r
* Anv�ndare

## Sekund�r akt�r
* Systemet

## F�rkrav
* Anv�ndaren har utf�rt [DF1 - Logga in](DF1-Logga-in.md)

## Efterkrav
* Anv�ndarens konto ska vara raderat

## Huvudscenario
* 1 - **AF2** startar n�r anv�ndaren vill ta bort sitt konto
* 2 - Systemet visar anv�ndarens kontouppgifter
* 3 - Anv�ndaren v�ljer att radera kontot
* 4 - Systemet ber om anv�ndarens l�senord
* 5 - Anv�ndaren skriver in l�senordet
* 6 - Systemet raderar kontot

## Alternativscenario
* 5a - Anv�ndaren anger fel l�senord
	* 1 - Systemet visar ett felmeddelande
	* 2 - *G� tillbaka till punkt 4*
* 6a - Ett fel intr�ffar n�r systemet ska radera kontot
	* 1 - Systemet visar ett felmeddelande