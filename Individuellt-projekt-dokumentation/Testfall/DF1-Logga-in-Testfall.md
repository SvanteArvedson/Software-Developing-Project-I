# DF1 - Logga in Testfall
Senast uppdaterad 25/4 2014 klo 13:30 av Svante Arvedson

Testfall f�r [DF1](/../Anvandningsfall/DF1-Logga-in.md). Anv�ndaren loggar in i systemet.

## F�rkrav
Inga f�rkrav.

## Efterkrav
Anv�ndaren ska vara inloggad i systemet.

## Testfall
### Testfall A - Lyckat inloggningsf�rs�k
* 1 - Anv�ndaren anger skriver in URLen f�r startsidan
* 2 - Systemet visar inloggningsformul�ret
* 3 - Anv�ndaren anger anv�ndarnamnet "Test" och l�senordet "Test"
* 4 - Systemet visar startsidan igen med rubriken "V�lkommen Test!"

### Testfall B - Inloggningsf�rs�k med tomma inputf�lt
* 1 - Anv�ndaren anger skriver in URLen f�r startsidan
* 2 - Systemet visar inloggningsformul�ret
* 3 - Anv�ndaren skickar formul�ret med tomma f�lt
* 4 - Systemet visar formul�ret igen med felmeddelanden "F�lten f�r ej vara tomma"

### Testfall C - Inloggningsf�rs�k med f�r l�nga str�ngar som input
* 1 - Anv�ndaren anger skriver in URLen f�r startsidan
* 2 - Systemet visar inloggningsformul�ret
* 3 - Anv�ndaren anger anv�ndarnamnet "abcdabcdabcdabcdabcdabcdabcd" och l�senordet "abcdabcdabcd"
* 4 - Systemet visar formul�ret igen med felmeddelanden "Anv�ndarnamnet f�r inte vara l�ngre �n 25 tecken" och "L�senordet f�r inte vara l�ngre �n 8 tecken"

### Testfall D - Inloggningsf�rs�k med "<" och ">" i inputf�lten
* 1 - Anv�ndaren anger skriver in URLen f�r startsidan
* 2 - Systemet visar inloggningsformul�ret
* 3 - Anv�ndaren anger anv�ndarnamnet "`<br />`" och l�senordet "Test"
* 4 - Systemet visar formul�ret igen med felmeddelandet "Ogiltig str�ng i f�ltet f�r anv�ndarnamn"