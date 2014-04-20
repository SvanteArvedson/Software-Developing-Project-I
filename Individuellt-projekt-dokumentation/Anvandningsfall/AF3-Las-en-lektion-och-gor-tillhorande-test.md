# AF3 - L�s en lektion och g�r tillh�rande test
Senast uppdaterad 10/4 2014 klo 13:00 av Svante Arvedson

Anv�ndare loggar in i systemt och l�ser en lektion. N�r anv�ndaren har l�st 
lektionen s� vill hen g�ra ett tillh�rande test. Systemet skapar ett test och 
anv�ndaren g�r testet. Systemet sparar testresultatet.

## Prim�r akt�r
* Anv�ndare

## Sekund�r akt�r
* Systemet

## F�rkrav
* Anv�ndaren har gjort [DF1 - Logga in](DF1-Logga-in.md).

## Efterkrav
* Systemet har sparat testresultatet
* Anv�ndaren har f�tt feedback

## Huvudscenario
* 1 - AF3 startar n�r en anv�ndare vill se en lektion
* 2 - Systemet visar den valda lektionen
* 3 - Anv�ndaren l�ser lektionen och vill g�ra tillh�rande test
* 4 - Systemet visar tillh�rande test
* 5 - Anv�ndaren g�r testet
* 6 - Systemet r�ttar testet, sparar resultatet och ger feedback

## Alternativscenario
* 2a - Ett fel intf�ffar n�r lektionen ska visas
	* 1 - Systemet visar ett felmeddelande
* 2b - Den valda lektionen finns inte
	* 1 - Systemet visar ett felmeddelande
* 4a - Ett fel intf�ffar n�r testet ska visas
	* 1 - Systemet visar ett felmeddelande
	* 2 - *G� tillbaka till punkt 2*
* 6a - Ett fel infr�ffar n�r systemet bearbetar det gjorda testet
	* 1 - Systemet visar ett felmeddelande
	* 2 - *G� tillbaka till punkt 2*