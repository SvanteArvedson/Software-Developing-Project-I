# AF7 - Redigera användarprofil
Senast uppdaterad 20/4 2014 klo 00:00 av Svante Arvedson

Användaren redigerar uppgifter i sitt användarkonto. Systemet sparar ändringarna.

## Primär aktör
* Användare

## Sekundär aktör
* Systemet

## Förkrav
* Användaren har utförst [DF1 - Logga in](DF1-Logga-in.md)

## Efterkrav
* Ändringarna i användarens kontouppgifter ska ha sparats

## Huvudscenario
* 1 - **AF7** startar när användaren vill ändra sina kontouppgifter
* 2 - Systemet visar användarens kontouppgifter
* 3 - Användaren ändrar sina kontouppgifter
* 4 - Systemet ber om användarens lösenord
* 5 - Användaren anger lösenord
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