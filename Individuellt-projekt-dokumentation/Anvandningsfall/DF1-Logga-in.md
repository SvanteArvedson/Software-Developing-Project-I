# DF1 - Logga in
Senast uppdaterad 10/4 2014 klo 12:00 av Svante Arvedson

Användaren loggar in i systemet.

## Primär aktör
* Användare

## Sekundär aktör
* Systemet

## Förkrav
Inga förkrav.

## Efterkrav
Användaren ska vara inloggad i systemet.

## Huvudscenario
* 1 - DF1 börjar när en användare vill logga in i systemet
* 2 - Systemet visar ett inloggningsformulär
* 3 - Användaren anger sitt användarnamn och sitt lösenord
* 4 - Systemet loggar in användaren och ger feedback

## Altervantivscenario
* 3a - Användaren anger felaktigt användarnamn eller lösenord
	* 1 - Systemet ger feedback och uppmanar användaren 
		på nytt skriva in sitt användarnamn och sitt lösenord
	* 2 - *Gå tillbaka till punkt 3*
* 3b - Användaren vill se en ledtråd
	* 1 - Systemet visar en ledtråd
	* 2 - *Gå tillbaka till punkt 3*
* 3c - Användaren har glömt sitt lösenord
	* 1 - Systemet skickar ett tillfälligt lösenord till användarens epostadress
	* 2 - *Gå tillbaka till punkt 3*