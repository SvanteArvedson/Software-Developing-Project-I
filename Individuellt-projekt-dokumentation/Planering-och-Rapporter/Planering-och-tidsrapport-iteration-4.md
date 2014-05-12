# Planering och tidsrapport iteration 4

### Analys av iteration 3
Under iteration 3 har jag i princip gjort klart funktionaliteten f�r 
User-objekten i frontend-applikationen. Det som � kvar �r en del felhantering 
om exempelvis databasen �r otillg�nglig eller om flera anv�ndare �r inloggade 
som samma user. Jag hade planerat iterationen d�ligt, det var m�nga delmoment 
som jag inte hade t�nkt p� skulle g�ras f�r att implementeringen skule vara 
f�rdig, exempelvis CSS-kod och automatiska tester. Detta ska jag t�nka p� i 
de f�ljande planeringarna. Nu �r elaboration klar, jag har l�st ganska mycket 
om Symfony och k�nner mig hemma i de flesta delarna av ramverket, nu �r det 
kvar att �va f�r att l�ra mig dem ordentligt.

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
		<td>Skriv anv�ndarfall, de sista 30% i fullformat</td>
		<td>Klart</td>
		<td>1</td>
		<td>1</td>
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
		<td>Publicera applikationen p� webbhotellet</td>
		<td>Klart</td>
		<td>1</td>
		<td>3</td>
	</tr>
	<tr>
		<td></td>
		<td>Genomf�r testfall och skriv testrapport</td>
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
		<td>Tid sedan f�reg�ende iteration</td>
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

### M�l iteration 4
I iteration 4 ska jag tillverka databastabeller och funktionalitet f�r 
lektioner och quiz. Jag v�ljer bara att implementera tv� krav den h�r 
iterationen d� jag tror att det kommer att bli lite sm�kr�ngligt, det 
�r en helt ny sak f�r mig och jag har ingen f�rdig plan p� hur 
implementationen ska g� till. Det kommer �ven att bli en del CSS-kodande 
och det tror jag kommer ta en del tid f�r att f� ett snyggt resultat.
Jag �r fortfarande inte inne i det slutgiltiga designarbetet utan det �r 
f�r att f� en okej leverans i slutet av iterationen.

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
		<td>Implementation AF3 - G�r databasschemat, skriv schema.yml och fixtures</td>
		<td>Klart</td>
		<td>1</td>
		<td>4</td>
	</tr>
	<tr>
		<td><a href="/../Anvandningsfall/AF3-Las-en-lektion-och-gor-tillhorande-test.md">AF3</a></td>
		<td>Implementation AF3 - Skriv controller och template</td>
		<td>P�b�rjat</td>
		<td>6</td>
		<td>12</td>
	</tr>
	<tr>
		<td><a href="/../Anvandningsfall/AF3-Las-en-lektion-och-gor-tillhorande-test.md">AF3</a></td>
		<td>Implementation AF3 - Skriv automatiska tester</td>
		<td>P�b�rjat</td>
		<td>2</td>
		<td>2</td>
	</tr>
	<tr>
		<td><a href="/../Anvandningsfall/AF4-Visa-statistik-over-gjorda-tester.md">AF4</a></td>
		<td>Implementation AF4 - Skriv CSS</td>
		<td>Ej p�b�rjat</td>
		<td>2</td>
		<td></td>
	</tr>
	<tr>
		<td><a href="/../Anvandningsfall/AF4-Visa-statistik-over-gjorda-tester.md">AF4</a></td>
		<td>Implementation AF4 - Skriv controller och template</td>
		<td>Ej p�b�rjat</td>
		<td>3</td>
		<td></td>
	</tr>
	<tr>
		<td><a href="/../Anvandningsfall/AF4-Visa-statistik-over-gjorda-tester.md">AF4</a></td>
		<td>Implementation AF4 - Skriv automatiska tester</td>
		<td>Ej p�b�rjat</td>
		<td>1</td>
		<td></td>
	</tr>
	<tr>
		<td></td>
		<td>Publicera applikationen p� webbhotellet</td>
		<td>Ej p�b�rjat</td>
		<td>1</td>
		<td></td>
	</tr>
	<tr>
		<td></td>
		<td>Skriv och genomf�r testfall, skriv testrapport</td>
		<td>Ej p�b�rjat</td>
		<td>3</td>
		<td></td>
	</tr>
	<tr>
		<td></td>
		<td>Laga applikationen efter att databasen �r �ndrad</td>
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