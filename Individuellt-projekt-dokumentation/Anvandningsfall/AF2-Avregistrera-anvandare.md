# AF2 - Avregistrera användare
Senast uppdaterad 20/4 2014 klo 23:45 av Svante Arvedson

Användaren avregistrerar sig från systemet. Systemet tar bort användarens konto.

## Primär aktör
* Användare

## Sekundär aktör
* Systemet

## Förkrav
* Användaren har utfört [DF1 - Logga in](DF1-Logga-in.md)

## Efterkrav
* Användarens konto ska vara raderat

## Huvudscenario
* 1 - **AF2** startar när användaren vill ta bort sitt konto
* 2 - Systemet visar användarens kontouppgifter
* 3 - Användaren väljer att radera kontot
* 4 - Systemet ber om användarens lösenord
* 5 - Användaren skriver in lösenordet
* 6 - Systemet raderar kontot

## Alternativscenario
* 5a - Användaren anger fel lösenord
	* 1 - Systemet visar ett felmeddelande
	* 2 - *Gå tillbaka till punkt 4*
* 6a - Ett fel inträffar när systemet ska radera kontot
	* 1 - Systemet visar ett felmeddelande