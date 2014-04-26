# DF1 - Logga in Testfall
Senast uppdaterad 25/4 2014 klo 13:30 av Svante Arvedson

Testfall för [DF1](/../Anvandningsfall/DF1-Logga-in.md). Användaren loggar in i systemet.

## Förkrav
Inga förkrav.

## Efterkrav
Användaren ska vara inloggad i systemet.

## Testfall
### Testfall A - Lyckat inloggningsförsök
* 1 - Användaren anger skriver in URLen för startsidan
* 2 - Systemet visar inloggningsformuläret
* 3 - Användaren anger användarnamnet "Test" och lösenordet "Test"
* 4 - Systemet visar startsidan igen med rubriken "Välkommen Test!"

### Testfall B - Inloggningsförsök med tomma inputfält
* 1 - Användaren anger skriver in URLen för startsidan
* 2 - Systemet visar inloggningsformuläret
* 3 - Användaren skickar formuläret med tomma fält
* 4 - Systemet visar formuläret igen med felmeddelanden "Fälten får ej vara tomma"

### Testfall C - Inloggningsförsök med för långa strängar som input
* 1 - Användaren anger skriver in URLen för startsidan
* 2 - Systemet visar inloggningsformuläret
* 3 - Användaren anger användarnamnet "abcdabcdabcdabcdabcdabcdabcd" och lösenordet "abcdabcdabcd"
* 4 - Systemet visar formuläret igen med felmeddelanden "Användarnamnet får inte vara längre än 25 tecken" och "Lösenordet får inte vara längre än 8 tecken"

### Testfall D - Inloggningsförsök med "<" och ">" i inputfälten
* 1 - Användaren anger skriver in URLen för startsidan
* 2 - Systemet visar inloggningsformuläret
* 3 - Användaren anger användarnamnet "`<br />`" och lösenordet "Test"
* 4 - Systemet visar formuläret igen med felmeddelandet "Ogiltig sträng i fältet för användarnamn"