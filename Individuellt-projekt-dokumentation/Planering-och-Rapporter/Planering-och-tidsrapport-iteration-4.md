# Planering och tidsrapport iteration 4

### Analys av iteration 3
Under iteration 3 har jag i princip gjort klart funktionaliteten för 
User-objekten i frontend-applikationen. Det som ä kvar är en del felhantering 
om exempelvis databasen är otillgänglig eller om flera användare är inloggade 
som samma user. Jag hade planerat iterationen dåligt, det var många delmoment 
som jag inte hade tänkt på skulle göras för att implementeringen skule vara 
färdig, exempelvis CSS-kod och automatiska tester. Detta ska jag tänka på i 
de följande planeringarna. Nu är elaboration klar, jag har läst ganska mycket 
om Symfony och känner mig hemma i de flesta delarna av ramverket, nu är det 
kvar att öva för att lära mig dem ordentligt.

### Tidsrapport iteration 3
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
		<td>Klart</td>
		<td>1</td>
		<td>1</td>
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
		<td>Publicera applikationen på webbhotellet</td>
		<td>Klart</td>
		<td>1</td>
		<td>3</td>
	</tr>
	<tr>
		<td></td>
		<td>Genomför testfall och skriv testrapport</td>
		<td>Klart</td>
		<td>1</td>
		<td>1</td>
	</tr>
	<tr>
		<td></td>
		<td></td>
		<td>Summa</td>
		<td>44</td>
		<td>37</td>
	</tr>
	<tr>
		<td></td>
		<td></td>
		<td>Tid sedan föregående iteration</td>
		<td></td>
		<td>94</td>
	</tr>
	<tr>
		<td></td>
		<td></td>
		<td>Tid totalt i projektet</td>
		<td></td>
		<td>131</td>
	</tr>
</table>

### Mål iteration 4
I iteration 4 ska jag tillverka databastabeller och funktionalitet för 
lektioner och quiz. Jag väljer bara att implementera två krav den här 
iterationen då jag tror att det kommer att bli lite småkrångligt, det 
är en helt ny sak för mig och jag har ingen färdig plan på hur 
implementationen ska gå till. Det kommer även att bli en del CSS-kodande 
och det tror jag kommer ta en del tid för att få ett snyggt resultat.
Jag är fortfarande inte inne i det slutgiltiga designarbetet utan det är 
för att få en okej leverans i slutet av iterationen.

### Planering iteration 4
<table>
	<tr>
		<th>Krav</th>
		<th>Uppgift</th>
		<th>Status</th>
		<th>Skattad tid</th>
		<th>Verklig tid</th>
	</tr>
	<tr>
		<td><a href="/../Anvandningsfall/AF3-Las-en-lektion-och-gor-tillhorande-test.md">AF3</a></td>
		<td>Implementation AF3 - Skriv CSS</td>
		<td>Klart</td>
		<td>3</td>
		<td>3</td>
	</tr>
	<tr>
		<td><a href="/../Anvandningsfall/AF3-Las-en-lektion-och-gor-tillhorande-test.md">AF3</a></td>
		<td>Implementation AF3 - Gör databasschemat, skriv schema.yml och fixtures</td>
		<td>Klart</td>
		<td>1</td>
		<td>4</td>
	</tr>
	<tr>
		<td><a href="/../Anvandningsfall/AF3-Las-en-lektion-och-gor-tillhorande-test.md">AF3</a></td>
		<td>Implementation AF3 - Skriv controller och template</td>
		<td>Påbörjat</td>
		<td>6</td>
		<td>12</td>
	</tr>
	<tr>
		<td><a href="/../Anvandningsfall/AF3-Las-en-lektion-och-gor-tillhorande-test.md">AF3</a></td>
		<td>Implementation AF3 - Skriv automatiska tester</td>
		<td>Påbörjat</td>
		<td>2</td>
		<td>2</td>
	</tr>
	<tr>
		<td><a href="/../Anvandningsfall/AF4-Visa-statistik-over-gjorda-tester.md">AF4</a></td>
		<td>Implementation AF4 - Skriv CSS</td>
		<td>Ej påbörjat</td>
		<td>2</td>
		<td></td>
	</tr>
	<tr>
		<td><a href="/../Anvandningsfall/AF4-Visa-statistik-over-gjorda-tester.md">AF4</a></td>
		<td>Implementation AF4 - Skriv controller och template</td>
		<td>Ej påbörjat</td>
		<td>3</td>
		<td></td>
	</tr>
	<tr>
		<td><a href="/../Anvandningsfall/AF4-Visa-statistik-over-gjorda-tester.md">AF4</a></td>
		<td>Implementation AF4 - Skriv automatiska tester</td>
		<td>Ej påbörjat</td>
		<td>1</td>
		<td></td>
	</tr>
	<tr>
		<td></td>
		<td>Publicera applikationen på webbhotellet</td>
		<td>Ej påbörjat</td>
		<td>1</td>
		<td></td>
	</tr>
	<tr>
		<td></td>
		<td>Skriv och genomför testfall, skriv testrapport</td>
		<td>Ej påbörjat</td>
		<td>3</td>
		<td></td>
	</tr>
	<tr>
		<td></td>
		<td>Laga applikationen efter att databasen är ändrad</td>
		<td>Klart</td>
		<td>2</td>
		<td>5</td>
	</tr>
	<tr>
		<td></td>
		<td></td>
		<td>Summa</td>
		<td>24</td>
		<td>26</td>
	</tr>
</table>