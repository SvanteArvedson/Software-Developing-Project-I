# Planering och tidsrapport iteration 2

### Analys av iteration 1
I iteration 1 hann jag inte s� l�ngt som jag hade planerat att g�ra av flera 
anledningar. Under den f�rsta dagen av iterationen uppt�ckte jag att mitt 
webbhotell inte st�dde det ramverk som jag hade planerat att anv�nda i 
projektet (Laravel), ramverket var skrivet i en PHP version som inte fanns 
p� webbhotellet. Allts� fick jag hitta ett nytt ramverk som fungerade 
tillsammans med webbhotellet och jag valde Symfony version 1.2.12. Bytet 
innebar att jag fick b�rja om med instuderandet av ramverkets dokumentation, 
vilket f�rst�s gav mig mer arbete. N�sta bakslag kom n�r jag skulle publicera 
min HelloWorld-applikation (test f�r att se att allt fungerar). Publiseringen 
fungerade inte och d� felmeddelandena var avst�ngda fick jag debugga manuellt, 
och det tog l�ng tid. Jag hittade felet som hoppas kunna l�sa det med min 
webbhost p� tisdag efter p�sk.

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
		<td>Skriv anv�ndarfall, ytterligare ca 30% i fullformat</td>
		<td>Klart</td>
		<td>2</td>
		<td>1</td>
	</tr>
	<tr>
		<td></td>
		<td>Titta p� f�rel�sning 5 i PHP-kursen</td>
		<td>Klart</td>
		<td>2</td>
		<td>2</td>
	</tr>
	<tr>
		<td></td>
		<td>Titta p� f�rel�sning 6 i PHP-kursen</td>
		<td>Klart</td>
		<td>2</td>
		<td>2</td>
	</tr>
		<tr>
		<td></td>
		<td>L�s genom <i>strangberoende.md</i> och <i>codereview.md</i> som Emil har skrivit</td>
		<td>Klart</td>
		<td>1</td>
		<td>1</td>
	</tr>
	<tr>
		<td></td>
		<td>Installera Symfony 1.2.12 lokalt, unders�k ramverket, l�s genom de f�rsta delarna av dokumentationen</td>
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
		<td>Publicera "Hello World"-applikationen p� webbhotellet</td>
		<td>P�b�rjad</td>
		<td>1</td>
		<td>7</td>
	</tr>
	<tr>
		<td><a href="Anvandningsfall/DF1-Logga-in.md">DF1</a></td>
		<td>Implementera inloggningfunktionerna i min applikation</td>
		<td>Ej p�b�rjad</td>
		<td>3</td>
		<td></td>
	</tr>
	<tr>
		<td><a href="Anvandningsfall/DF2-Logga-ut.md">DF2</a></td>
		<td>Implementera utloggningsfunktionerna i min applikation</td>
		<td>Ej p�b�rjad</td>
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
		<td>Tid sedan f�reg�ende iteration</td>
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

### M�l iteration 2
M�let med iteration 2 �r att implementera in- och utloggningsdelarna i min 
applikation. Jag kommer i och med det ocks� att p�b�rja arbetet med att designa 
anv�ndargr�nssnittet, exempelvis med val av f�rger. Jag kommer ocks� att 
forts�tta att studera ramverket Symfony 1.2.12 och jag kommer att skriva fler 
av anv�ndarfallen i full�ngd.

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
		<td>Skriv anv�ndarfall, ytterligare ca 30% i fullformat</td>
		<td>Ej p�b�rjad</td>
		<td>1</td>
		<td></td>
	</tr>
	<tr>
		<td></td>
		<td>L�s genom del 3-11 av dokumentationen p� [symfony.com](http://symfony.com/legacy/doc/jobeet/1_2/en/01?orm=Propel)</td>
		<td>P�b�rjad</td>
		<td>8</td>
		<td>2</td>
	</tr>
	<tr>
		<td></td>
		<td>Publicera "Hello World"-applikationen p� webbhotellet</td>
		<td>Klart</td>
		<td>2</td>
		<td>1</td>
	</tr>
	<tr>
		<td></td>
		<td>V�lj f�rgkarta f�r anv�ndargr�nssnittet</td>
		<td>Ej p�b�rjad</td>
		<td>1</td>
		<td></td>
	</tr>
	<tr>
		<td><a href="Anvandningsfall/DF1-Logga-in.md">DF1</a></td>
		<td>Implementera inloggningfunktionerna i min applikation</td>
		<td>Ej p�b�rjad</td>
		<td>4</td>
		<td></td>
	</tr>
	<tr>
		<td><a href="Anvandningsfall/DF2-Logga-ut.md">DF2</a></td>
		<td>Implementera utloggningsfunktionerna i min applikation</td>
		<td>Ej p�b�rjad</td>
		<td>4</td>
		<td></td>
	</tr>
	<tr>
		<td></td>
		<td></td>
		<td>Summa</td>
		<td>20</td>
		<td>3</td>
	</tr>
</table>