# DF1 - Logga in
Senast uppdaterad 10/4 2014 klo 12:00 av Svante Arvedson

Anv�ndaren loggar in i systemet.

## Prim�r akt�r
* Anv�ndare

## Sekund�r akt�r
* Systemet

## F�rkrav
Inga f�rkrav.

## Efterkrav
Anv�ndaren ska vara inloggad i systemet.

## Huvudscenario
* 1 - DF1 b�rjar n�r en anv�ndare vill logga in i systemet
* 2 - Systemet visar ett inloggningsformul�r
* 3 - Anv�ndaren anger sitt anv�ndarnamn och sitt l�senord
* 4 - Systemet loggar in anv�ndaren och ger feedback

## Altervantivscenario
* 3a - Anv�ndaren anger felaktigt anv�ndarnamn eller l�senord
	* 1 - Systemet ger feedback och uppmanar anv�ndaren 
		p� nytt skriva in sitt anv�ndarnamn och sitt l�senord
	* 2 - *G� tillbaka till punkt 3*
* 3b - Anv�ndaren vill se en ledtr�d
	* 1 - Systemet visar en ledtr�d
	* 2 - *G� tillbaka till punkt 3*
* 3c - Anv�ndaren har gl�mt sitt l�senord
	* 1 - Systemet skickar ett tillf�lligt l�senord till anv�ndarens epostadress
	* 2 - *G� tillbaka till punkt 3*