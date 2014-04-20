# AF5 - Skriv ett inl�gg i forumet
Senast uppdaterad 20/4 2014 klo 23:30 av Svante Arvedson

Anv�ndaren skriver ett inl�gg i en tr�d i formumet. Systemet sparar inl�gget.

## Prim�r akt�r
* Anv�ndare

## Sekund�r akt�r
* Systemet

## F�rkrav
* Anv�ndaren har utf�rst [DF1 - Logga in](DF1-Logga-in.md)

## Efterkrav
* Ett inl�gg ska ha ha sparats i en forumtr�d

## Huvudscenario
* 1 - **AF5** startar n�r anv�ndaren vill skriva ett nytt inl�gg i forumet
* 2 - Systemet visar alla kategorier i forumet
* 3 - Anv�ndaren v�ljer en kategori
* 4 - Systemet visar alla aktiva tr�dar i kategorin
* 5 - Anv�ndaren v�ljer en tr�d
* 6 - Systemet visar den valda tr�den
* 7 - Anv�ndaren skriver och skickar inl�gget
* 8 - Systemet sparar inl�gget och visar den valda tr�den inklusive det nya inl�gget

## Alternativscenario
* 5a - Anv�ndaren skapar en ny tr�d
	* 1 - Systemet visar ett formul�r f�r att skapa en ny tr�d
	* 2 - Anv�ndaren fyller i och skickar formul�ret
	* 3 - Systemet sparar och visar den nya tr�den
* 7a - Anv�ndaren fyller i formul�ret fel
	* 1 - Systemet visar ett felmeddelande
	* 2 - *G� tillbaka till punkt 7*
* 8a - Ett fel intr�ffar n�r systemet ska spara inl�gget
	* 1 - Systemet visar ett felmeddelande