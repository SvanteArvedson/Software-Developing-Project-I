# AF7 - �ndra l�senord
Senast uppdaterad 4/5 2014 klo 12:00 av Svante Arvedson

Anv�ndaren �ndrar sitt l�senord. Systemet sparar �ndringarna.

## Prim�r akt�r
* Anv�ndare

## Sekund�r akt�r
* Systemet

## F�rkrav
* Anv�ndaren har utf�rst [DF1 - Logga in](DF1-Logga-in.md)

## Efterkrav
* Det nya l�senordet ska ha sparats

## Huvudscenario
* 1 - **AF17** startar n�r anv�ndaren vill �ndra sitt l�senord
* 2 - Systemet visar ett fomul�r f�r byte av l�senord
* 3 - Anv�ndaren skriver in sitt nya l�senord
* 4 - Systemet ber om anv�ndarens nuvarande l�senord
* 5 - Anv�ndaren anger nuvarande l�senord
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