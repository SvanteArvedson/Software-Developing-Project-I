# Planering och tidsrapport iteration 3

### Analys av iteration 2
Iteration 2 innehöll mycket läsande av dokumentationen för Symfony för att kunna 
implementera in- och utloggningsfunktionerna. Jag fick också lära mig en hel del 
om MySQL för att kunna skapa en webbanvändare med begränsade privilegier och för 
att kunna flytta databasen till produktionsservern. Efter den här iterationen 
känns Symfony inte längre speciellt svårt, just nu känns de som att resten av 
projektet kommer att gå som en vals.    
Kraven som implementerades under den här iterationen var 
[DF1](/../Anvandningsfall/DF1-Logga-in.md) och [DF2](/../Anvandningsfall/DF2-Logga-ut.md). 
Jag har även skrivit testfall och automatiska enhets- och funktionstester som 
genomför att testfallen.    
Tiderna hade jag uppskattat dåligt, jag hade lagt för få timmar till implementeringen 
av kraven, förhoppningsvis kommer jag att göra bättre tidsuppskattningar i 
planeringen för iteratuon 3.

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
		<td>Skriv användarfall, ytterligare ca 30% i fullformat</td>
		<td>Klart</td>
		<td>1</td>
		<td>1</td>
	</tr>
	<tr>
		<td></td>
		<td>Titta på föreläsning 7 i PHP-kursen</td>
		<td>Klart</td>
		<td>2</td>
		<td>2</td>
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
		<td>Skriv automatiska test för DF1 och DF2</td>
		<td>Klart</td>
		<td>2</td>
		<td>4</td>
	</tr>
	<tr>
		<td></td>
		<td>Skriv automatiska tester för modelklassen</td>
		<td>Klart</td>
		<td>2</td>
		<td>1</td>
	</tr>
	<tr>
		<td></td>
		<td>Publicera appliationen på webbhotellet</td>
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
		<td>Tid sedan föregående iteration</td>
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

### Mål iteration 3
Huvudmålet i iteration 3 är att implementera krav 
[AF1](/../Anvandningsfall/AF1-Registrera-ny-anvandare.md), 
[AF2](/../Anvandningsfall/AF2-Avregistrera-anvandare.md), 
[AF7](/../Anvandningsfall/AF7-Redigera-anvandarprofil.md) och
[AF17](/../Anvandningsfall/AF17-Andra-losenord.md). Jag ska även skriva de sista 
användningsfallen i fullformat och läsa genom de sista kapitlen i Symfonyboken. Jag ska påbörja 
designarbetet med att tillverka en snygg logga för applikationen. Det som blir knepigast i 
iteration 3 tror jag blir att ordna med behörighetsinställningar för redigering av användaruppgifter, 
man ska ju endast kunna manipulera sitt eget konto och inte någon annans. En annan nöt blir att 
förstå Route-ramverket och att koppla en Route till ett Propel-objekt. De andra uppgifterna tror 
jag kommer att gå ganska lätt.    
Den här iterationen ska avslutas med en fest, det här är den sista iterationen på projektets 
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
		<td>Skriv användarfall, de sista 30% i fullformat</td>
		<td>Ej påbörjad</td>
		<td>1</td>
		<td></td>
	</tr>
	<tr>
		<td></td>
		<td>Läs del 12-24 i <a href="http://symfony.com/legacy/doc/jobeet/1_2/en/12?orm=Propel">Symfony-boken</a></td>
		<td>Klart</td>
		<td>8</td>
		<td>3</td>
	</tr>
	<tr>
		<td><a href="/../Anvandningsfall/AF1-Registrera-ny-anvandare.md">AF1</a></td>
		<td>Implementera AF1 - Registrera ny användare</td>
		<td>Klart</td>
		<td>6</td>
		<td>7</td>
	</tr>
	<tr>
		<td><a href="/../Anvandningsfall/AF2-Avregistrera-anvandare.md">AF2</a></td>
		<td>Implementera AF2 - Avregistrera användare</td>
		<td>Klart</td>
		<td>6</td>
		<td>2</td>
	</tr>
	<tr>
		<td><a href="/../Anvandningsfall/AF7-Redigera-anvandarprofil.md">AF7</a></td>
		<td>Implementera AF7 - Redigera användarprofil</td>
		<td>Klart</td>
		<td>6</td>
		<td>5</td>
	</tr>
	<tr>
		<td><a href="/../Anvandningsfall/AF17-Andra-losenord.md">AF17</a></td>
		<td>Implementera AF17 - Ändra lösenord</td>
		<td>Klart</td>
		<td>2</td>
		<td>2</td>
	</tr>
	<tr>
		<td></td>
		<td>Skriv automatiska tester för AF1</td>
		<td>Klart</td>
		<td>2</td>
		<td>2</td>
	</tr>
	<tr>
		<td></td>
		<td>Skriv automatiska tester för AF2</td>
		<td>Klart</td>
		<td>2</td>
		<td>1</td>
	</tr>
	<tr>
		<td></td>
		<td>Skriv automatiska tester för AF7</td>
		<td>Klart</td>
		<td>2</td>
		<td>2</td>
	</tr>
	<tr>
		<td></td>
		<td>Skriv automatiska tester för AF17</td>
		<td>Klart</td>
		<td>1</td>
		<td>1</td>
	</tr>
	<tr>
		<td></td>
		<td>Skriv CSS för formulären</td>
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