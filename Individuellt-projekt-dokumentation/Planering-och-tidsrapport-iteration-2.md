# Planering och tidsrapport iteration 2

### Analys av iteration 1
I iteration 1 hann jag inte så långt som jag hade planerat att göra av flera 
anledningar. Under den första dagen av iterationen upptäckte jag att mitt 
webbhotell inte stödde det ramverk som jag hade planerat att använda i 
projektet (Laravel), ramverket var skrivet i en PHP version som inte fanns 
på webbhotellet. Alltså fick jag hitta ett nytt ramverk som fungerade 
tillsammans med webbhotellet och jag valde Symfony version 1.2.12. Bytet 
innebar att jag fick börja om med instuderandet av ramverkets dokumentation, 
vilket förstås gav mig mer arbete. Nästa bakslag kom när jag skulle publicera 
min HelloWorld-applikation (test för att se att allt fungerar). Publiceringen 
fungerade inte och då felmeddelandena var avstängda fick jag debugga manuellt, 
och det tog lång tid. Jag hittade felet som hoppas kunna läsa det med min 
webbhost på tisdag efter påsk.

### Tidsrapport iteration 1
<table>
	<tr>
		<th>Krav</th>
		<th>Uppgift</th>
		<th>Status</th>
		<th>Skattad tid</th>
		<th>Verklig tid</th>
	</tr>
	<tr>
		<td></td>
		<td>Skriv användarfall, ytterligare ca 30% i fullformat</td>
		<td>Klart</td>
		<td>2</td>
		<td>1</td>
	</tr>
	<tr>
		<td></td>
		<td>Titta på föreläsning 5 i PHP-kursen</td>
		<td>Klart</td>
		<td>2</td>
		<td>2</td>
	</tr>
	<tr>
		<td></td>
		<td>Titta på föreläsning 6 i PHP-kursen</td>
		<td>Klart</td>
		<td>2</td>
		<td>2</td>
	</tr>
		<tr>
		<td></td>
		<td>Läs genom <i>strangberoende.md</i> och <i>codereview.md</i> som Emil har skrivit</td>
		<td>Klart</td>
		<td>1</td>
		<td>1</td>
	</tr>
	<tr>
		<td></td>
		<td>Installera Symfony 1.2.12 lokalt, undersök ramverket, läs genom de första delarna av dokumentationen</td>
		<td>Klart</td>
		<td>7</td>
		<td>8</td>
	</tr>
	<tr>
		<td></td>
		<td>Skriv en "Hello World"-applikation med Symfony</td>
		<td>Klart</td>
		<td>2</td>
		<td>2</td>
	</tr>
	<tr>
		<td></td>
		<td>Publicera "Hello World"-applikationen på webbhotellet</td>
		<td>Påbörjad</td>
		<td>1</td>
		<td>7</td>
	</tr>
	<tr>
		<td><a href="Anvandningsfall/DF1-Logga-in.md">DF1</a></td>
		<td>Implementera inloggningfunktionerna i min applikation</td>
		<td>Ej påbörjad</td>
		<td>3</td>
		<td></td>
	</tr>
	<tr>
		<td><a href="Anvandningsfall/DF2-Logga-ut.md">DF2</a></td>
		<td>Implementera utloggningsfunktionerna i min applikation</td>
		<td>Ej påbörjad</td>
		<td>3</td>
		<td></td>
	</tr>
	<tr>
		<td></td>
		<td></td>
		<td>Summa</td>
		<td>23</td>
		<td>23</td>
	</tr>
	<tr>
		<td></td>
		<td></td>
		<td>Tid sedan föregående iteration</td>
		<td></td>
		<td>37</td>
	</tr>
	<tr>
		<td></td>
		<td></td>
		<td>Tid totalt i projektet</td>
		<td></td>
		<td>60</td>
	</tr>
</table>

### Mål iteration 2
Målet med iteration 2 är att implementera in- och utloggningsdelarna i min 
applikation. Jag kommer i och med det också att påbörja arbetet med att designa 
användargränssnittet, exempelvis med val av färger. Jag kommer också att 
fortsätta att studera ramverket Symfony 1.2.12 och jag kommer att skriva fler 
av användarfallen i fullängd.

### Planering iteration 2
<table>
	<tr>
		<th>Krav</th>
		<th>Uppgift</th>
		<th>Status</th>
		<th>Skattad tid</th>
		<th>Verklig tid</th>
	</tr>
	<tr>
		<td></td>
		<td>Skriv användarfall, ytterligare ca 30% i fullformat</td>
		<td>Ej påbörjad</td>
		<td>1</td>
		<td></td>
	</tr>
	<tr>
		<td></td>
		<td>Läs genom del 3-11 av dokumentationen på <a href="http://symfony.com/legacy/doc/jobeet/1_2/en/01?orm=Propel">symfony.com</a></td>
		<td>Klart</td>
		<td>8</td>
		<td>6</td>
	</tr>
	<tr>
		<td></td>
		<td>Publicera "Hello World"-applikationen på webbhotellet</td>
		<td>Klart</td>
		<td>2</td>
		<td>1</td>
	</tr>
	<tr>
		<td></td>
		<td>Välj färgkarta för användargränssnittet</td>
		<td>Klart</td>
		<td>1</td>
		<td>1</td>
	</tr>
    <tr>
		<td></td>
		<td>Skriv layoutfilen för inloggningssidan</td>
		<td>Klart</td>
		<td>4</td>
		<td>4</td>
	</tr>
	<tr>
		<td><a href="Anvandningsfall/DF1-Logga-in.md">DF1</a></td>
		<td>Implementera inloggningfunktionerna i min applikation</td>
		<td>Klart</td>
		<td>4</td>
		<td>11</td>
	</tr>
	<tr>
		<td><a href="Anvandningsfall/DF2-Logga-ut.md">DF2</a></td>
		<td>Implementera utloggningsfunktionerna i min applikation</td>
		<td>Klart</td>
		<td>4</td>
		<td>1</td>
	</tr>
    <tr>
        <td><a href="Anvandningsfall/DF1-Logga-in.md">DF1</a>, <a href="Anvandningsfall/DF2-Logga-ut.md">DF2</a></td>
		<td>Publicera applikationen på webbhotellet</td>
		<td>Ej påbörjad</td>
		<td>6</td>
		<td></td>
    </tr>
	<tr>
		<td></td>
		<td></td>
		<td>Summa</td>
		<td>30</td>
		<td>24</td>
	</tr>
</table>