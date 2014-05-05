# Planering och tidsrapport iteration 3

### Analys av iteration 2
Iteration 2 inneh�ll mycket l�sande av dokumentationen f�r Symfony f�r att kunna 
implementera in- och utloggningsfunktionerna. Jag fick ocks� l�ra mig en hel del 
om MySQL f�r att kunna skapa en webbanv�ndare med begr�nsade privilegier och f�r 
att kunna flytta databasen till produktionsservern. Efter den h�r iterationen 
k�nns Symfony inte l�ngre speciellt sv�rt, just nu k�nns de som att resten av 
projektet kommer att g� som en vals.    
Kraven som implementerades under den h�r iterationen var 
[DF1](/../Anvandningsfall/DF1-Logga-in.md) och [DF2](/../Anvandningsfall/DF2-Logga-ut.md). 
Jag har �ven skrivit testfall och automatiska enhets- och funktionstester som 
genomf�r att testfallen.    
Tiderna hade jag uppskattat d�ligt, jag hade lagt f�r f� timmar till implementeringen 
av kraven, f�rhoppningsvis kommer jag att g�ra b�ttre tidsuppskattningar i 
planeringen f�r iteratuon 3.

### Tidsrapport iteration 2
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
		<td>1</td>
		<td>1</td>
	</tr>
	<tr>
		<td></td>
		<td>Titta p� f�rel�sning 7 i PHP-kursen</td>
		<td>Klart</td>
		<td>2</td>
		<td>2</td>
	</tr>
	<tr>
		<td></td>
		<td>L�s genom del 3-11 av dokumentationen p� <a href="http://symfony.com/legacy/doc/jobeet/1_2/en/01?orm=Propel">symfony.com</a></td>
		<td>Klart</td>
		<td>8</td>
		<td>6</td>
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
		<td>Klart</td>
		<td>1</td>
		<td>1</td>
	</tr>
    <tr>
		<td></td>
		<td>Skriv layoutfilen f�r inloggningssidan</td>
		<td>Klart</td>
		<td>4</td>
		<td>4</td>
	</tr>
	<tr>
		<td><a href="Anvandningsfall/DF1-Logga-in.md">DF1</a></td>
		<td>Implementera DF1 - Logga in</td>
		<td>Klart</td>
		<td>4</td>
		<td>11</td>
	</tr>
	<tr>
		<td><a href="Anvandningsfall/DF2-Logga-ut.md">DF2</a></td>
		<td>Implementera DF2 - Logga ut</td>
		<td>Klart</td>
		<td>4</td>
		<td>1</td>
	</tr>
	<tr>
		<td><a href="Anvandningsfall/DF1-Logga-in.md">DF1</a>, <a href="Anvandningsfall/DF2-Logga-ut.md">DF2</a></td>
		<td>Skriv automatiska test f�r DF1 och DF2</td>
		<td>Klart</td>
		<td>2</td>
		<td>4</td>
	</tr>
	<tr>
		<td></td>
		<td>Skriv automatiska tester f�r modelklassen</td>
		<td>Klart</td>
		<td>2</td>
		<td>1</td>
	</tr>
	<tr>
		<td></td>
		<td>Publicera appliationen p� webbhotellet</td>
		<td>Klart</td>
		<td>2</td>
		<td>2</td>
	</tr>
	<tr>
		<td></td>
		<td></td>
		<td>Summa</td>
		<td>32</td>
		<td>34</td>
	</tr>
	<tr>
		<td></td>
		<td></td>
		<td>Tid sedan f�reg�ende iteration</td>
		<td></td>
		<td>60</td>
	</tr>
	<tr>
		<td></td>
		<td></td>
		<td>Tid totalt i projektet</td>
		<td></td>
		<td>94</td>
	</tr>
</table>

### M�l iteration 3
Huvudm�let i iteration 3 �r att implementera krav 
[AF1](/../Anvandningsfall/AF1-Registrera-ny-anvandare.md), 
[AF2](/../Anvandningsfall/AF2-Avregistrera-anvandare.md), 
[AF7](/../Anvandningsfall/AF7-Redigera-anvandarprofil.md) och
[AF17](/../Anvandningsfall/AF17-Andra-losenord.md). Jag ska �ven skriva de sista 
anv�ndningsfallen i fullformat och l�sa genom de sista kapitlen i Symfonyboken. Jag ska p�b�rja 
designarbetet med att tillverka en snygg logga f�r applikationen. Det som blir knepigast i 
iteration 3 tror jag blir att ordna med beh�righetsinst�llningar f�r redigering av anv�ndaruppgifter, 
man ska ju endast kunna manipulera sitt eget konto och inte n�gon annans. En annan n�t blir att 
f�rst� Route-ramverket och att koppla en Route till ett Propel-objekt. De andra uppgifterna tror 
jag kommer att g� ganska l�tt.    
Den h�r iterationen ska avslutas med en fest, det h�r �r den sista iterationen p� projektets 
elaboration-fas.

### Planering iteration 3
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
		<td>Skriv anv�ndarfall, de sista 30% i fullformat</td>
		<td>Ej p�b�rjad</td>
		<td>1</td>
		<td></td>
	</tr>
	<tr>
		<td></td>
		<td>L�s del 12-24 i <a href="http://symfony.com/legacy/doc/jobeet/1_2/en/12?orm=Propel">Symfony-boken</a></td>
		<td>Klart</td>
		<td>8</td>
		<td>3</td>
	</tr>
	<tr>
		<td><a href="/../Anvandningsfall/AF1-Registrera-ny-anvandare.md">AF1</a></td>
		<td>Implementera AF1 - Registrera ny anv�ndare</td>
		<td>Klart</td>
		<td>6</td>
		<td>7</td>
	</tr>
	<tr>
		<td><a href="/../Anvandningsfall/AF2-Avregistrera-anvandare.md">AF2</a></td>
		<td>Implementera AF2 - Avregistrera anv�ndare</td>
		<td>Klart</td>
		<td>6</td>
		<td>2</td>
	</tr>
	<tr>
		<td><a href="/../Anvandningsfall/AF7-Redigera-anvandarprofil.md">AF7</a></td>
		<td>Implementera AF7 - Redigera anv�ndarprofil</td>
		<td>Klart</td>
		<td>6</td>
		<td>5</td>
	</tr>
	<tr>
		<td><a href="/../Anvandningsfall/AF17-Andra-losenord.md">AF17</a></td>
		<td>Implementera AF17 - �ndra l�senord</td>
		<td>Klart</td>
		<td>2</td>
		<td>2</td>
	</tr>
	<tr>
		<td></td>
		<td>Skriv automatiska tester f�r AF1</td>
		<td>Klart</td>
		<td>2</td>
		<td>2</td>
	</tr>
	<tr>
		<td></td>
		<td>Skriv automatiska tester f�r AF2</td>
		<td>Klart</td>
		<td>2</td>
		<td>1</td>
	</tr>
	<tr>
		<td></td>
		<td>Skriv automatiska tester f�r AF7</td>
		<td>Klart</td>
		<td>2</td>
		<td>2</td>
	</tr>
	<tr>
		<td></td>
		<td>Skriv automatiska tester f�r AF17</td>
		<td>Klart</td>
		<td>1</td>
		<td>1</td>
	</tr>
	<tr>
		<td></td>
		<td>Skriv CSS f�r formul�ren</td>
		<td>Klart</td>
		<td>7</td>
		<td>7</td>
	</tr>
	<tr>
		<td></td>
		<td></td>
		<td>Summa</td>
		<td>43</td>
		<td>32</td>
	</tr>
</table>