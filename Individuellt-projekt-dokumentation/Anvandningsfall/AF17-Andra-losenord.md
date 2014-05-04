# AF7 - Ändra lösenord
Senast uppdaterad 4/5 2014 klo 12:00 av Svante Arvedson

Användaren ändrar sitt lösenord. Systemet sparar ändringarna.

## Primär aktör
* Användare

## Sekundär aktör
* Systemet

## Förkrav
* Användaren har utförst [DF1 - Logga in](DF1-Logga-in.md)

## Efterkrav
* Det nya lösenordet ska ha sparats

## Huvudscenario
* 1 - **AF17** startar när användaren vill ändra sitt lösenord
* 2 - Systemet visar ett fomulär för byte av lösenord
* 3 - Användaren skriver in sitt nya lösenord
* 4 - Systemet ber om användarens nuvarande lösenord
* 5 - Användaren anger nuvarande lösenord
* 6 - Systemet sparar ändringarna

## Alternativscenario
* 3a - Användaren fyller i fälten felaktigt
	* 1 - Systemet visar ett felmeddelande
	* 2 - *Gå tillbaka till punkt 3*
* 5a - Användaren anger fel lösenord
	* 1 - Systemet visar ett felmeddelande
	* 2 - *Gå tillbaka till punkt 3*
* 6a - Ett fel inträffar när systemet ska spara ändringarna
	* 1 - Systemet visar ett felmeddelande