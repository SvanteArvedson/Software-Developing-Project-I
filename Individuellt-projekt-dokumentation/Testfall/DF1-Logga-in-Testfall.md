# DF1 - Logga in Testfall
Senast uppdaterad 25/4 2014 klo 13:30 av Svante Arvedson

Testfall f�r [DF1](/../Anvandningsfall/DF1-Logga-in.md). Anv�ndaren loggar in i systemet.

## F�rkrav
Inga f�rkrav.

## Testfall
### Testfall A - Lyckat inloggningsf�rs�k
* 1 - Anv�ndaren anger skriver in URLen f�r startsidan
* 2 - Systemet visar inloggningsformul�ret
* 3 - Anv�ndaren anger anv�ndarnamnet "test1" och l�senordet "Test1"
* 4 - Systemet visar startsidan igen med rubriken "V�lkommen Test1!"

### Testfall B - Inloggningsf�rs�k med fel l�senord
* 1 - Anv�ndaren anger skriver in URLen f�r startsidan
* 2 - Systemet visar inloggningsformul�ret
* 3 - Anv�ndaren anger anv�ndarnamnet "test1" och l�senordet "abcdabcdabcd"
* 4 - Systemet visar formul�ret igen med felmeddelanden "Felaktigt anv�narnamn eller l�senord"

### Testfall C - Inloggningsf�rs�k med tomma inputf�lt
* 1 - Anv�ndaren anger skriver in URLen f�r startsidan
* 2 - Systemet visar inloggningsformul�ret
* 3 - Anv�ndaren skickar formul�ret med tomma f�lt
* 4 - Systemet visar formul�ret igen med felmeddelanden "F�lten f�r ej vara tomma"

### Testfall D - Inloggningsf�rs�k med f�r l�nga str�ngar som input
* 1 - Anv�ndaren anger skriver in URLen f�r startsidan
* 2 - Systemet visar inloggningsformul�ret
* 3 - Anv�ndaren anger anv�ndarnamnet "abcdabcdabcdabcdabcdabcdabcd" och l�senordet "abcdabcdabcd"
* 4 - Systemet visar formul�ret igen med felmeddelanden "Anv�ndarnamnet f�r inte vara l�ngre �n 25 tecken" och "L�senordet f�r inte vara l�ngre �n 8 tecken"

### Testfall E - Inloggningsf�rs�k med fel l�senord (test om funktionen �r case sensitive)
* 1 - Anv�ndaren anger skriver in URLen f�r startsidan
* 2 - Systemet visar inloggningsformul�ret
* 3 - Anv�ndaren anger anv�ndarnamnet "test1" och l�senordet "Test1"
* 4 - Systemet visar formul�ret igen med felmeddelanden "Felaktigt anv�narnamn eller l�senord"