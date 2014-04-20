# AF5 - Skriv ett inlägg i forumet
Senast uppdaterad 20/4 2014 klo 23:30 av Svante Arvedson

Användaren skriver ett inlägg i en tråd i formumet. Systemet sparar inlägget.

## Primär aktör
* Användare

## Sekundär aktör
* Systemet

## Förkrav
* Användaren har utförst [DF1 - Logga in](DF1-Logga-in.md)

## Efterkrav
* Ett inlägg ska ha ha sparats i en forumtråd

## Huvudscenario
* 1 - **AF5** startar när användaren vill skriva ett nytt inlägg i forumet
* 2 - Systemet visar alla kategorier i forumet
* 3 - Användaren väljer en kategori
* 4 - Systemet visar alla aktiva trådar i kategorin
* 5 - Användaren väljer en tråd
* 6 - Systemet visar den valda tråden
* 7 - Användaren skriver och skickar inlägget
* 8 - Systemet sparar inlägget och visar den valda tråden inklusive det nya inlägget

## Alternativscenario
* 5a - Användaren skapar en ny tråd
	* 1 - Systemet visar ett formulär för att skapa en ny tråd
	* 2 - Användaren fyller i och skickar formuläret
	* 3 - Systemet sparar och visar den nya tråden
* 7a - Användaren fyller i formuläret fel
	* 1 - Systemet visar ett felmeddelande
	* 2 - *Gå tillbaka till punkt 7*
* 8a - Ett fel inträffar när systemet ska spara inlägget
	* 1 - Systemet visar ett felmeddelande