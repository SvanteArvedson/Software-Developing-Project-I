# AF3 - Läs en lektion och gör tillhörande test
Senast uppdaterad 10/4 2014 klo 13:00 av Svante Arvedson

Användare loggar in i systemt och läser en lektion. När användaren har läst 
lektionen så vill hen göra ett tillhörande test. Systemet skapar ett test och 
användaren gör testet. Systemet sparar testresultatet.

## Primär aktör
* Användare

## Sekundär aktör
* Systemet

## Förkrav
* Användaren har gjort [DF1 - Logga in](DF1-Logga-in.md).

## Efterkrav
* Systemet har sparat testresultatet
* Användaren har fått feedback

## Huvudscenario
* 1 - AF3 startar när en användare vill se en lektion
* 2 - Systemet visar den valda lektionen
* 3 - Användaren läser lektionen och vill göra tillhörande test
* 4 - Systemet visar tillhörande test
* 5 - Användaren gör testet
* 6 - Systemet rättar testet, sparar resultatet och ger feedback

## Alternativscenario
* 2a - Ett fel intfäffar när lektionen ska visas
	* 1 - Systemet visar ett felmeddelande
* 2b - Den valda lektionen finns inte
	* 1 - Systemet visar ett felmeddelande
* 4a - Ett fel intfäffar när testet ska visas
	* 1 - Systemet visar ett felmeddelande
	* 2 - *Gå tillbaka till punkt 2*
* 6a - Ett fel infräffar när systemet bearbetar det gjorda testet
	* 1 - Systemet visar ett felmeddelande
	* 2 - *Gå tillbaka till punkt 2*