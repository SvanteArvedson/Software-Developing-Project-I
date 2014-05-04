# AF7 - Redigera anv�ndarprofil
Senast uppdaterad 20/4 2014 klo 00:00 av Svante Arvedson

Anv�ndaren redigerar uppgifter i sitt anv�ndarkonto. Systemet sparar �ndringarna.

## Prim�r akt�r
* Anv�ndare

## Sekund�r akt�r
* Systemet

## F�rkrav
* Anv�ndaren har utf�rst [DF1 - Logga in](DF1-Logga-in.md)

## Efterkrav
* �ndringarna i anv�ndarens kontouppgifter ska ha sparats

## Huvudscenario
* 1 - **AF7** startar n�r anv�ndaren vill �ndra sina kontouppgifter
* 2 - Systemet visar anv�ndarens kontouppgifter
* 3 - Anv�ndaren �ndrar sina kontouppgifter
* 4 - Systemet ber om anv�ndarens l�senord
* 5 - Anv�ndaren anger l�senord
* 6 - Systemet sparar �ndringarna

## Alternativscenario
* 3a - Anv�ndaren fyller i f�lten felaktigt
	* 1 - Systemet visar ett felmeddelande
	* 2 - *G� tillbaka till punkt 3*
* 5a - Anv�ndaren anger fel l�senord
	* 1 - Systemet visar ett felmeddelande
	* 2 - *G� tillbaka till punkt 3*
* 6a - Ett fel intr�ffar n�r systemet ska spara �ndringarna
	* 1 - Systemet visar ett felmeddelande