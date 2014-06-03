# Testrapport 2014-05-20
Test av systemet enligt version *release iteration 5*. Testmiljön är en Apache server och webbläsare *Firefox*, *Chrome*, *IE 9* 
och *Opera*, testerna görs på en bärbar dator.    
Testerna görs den 20 maj 2014.

<table>
    <tr>
        <th>Testfall</th>
        <th>Webbläsare</th>
        <th>Pass/Fail</th>
        <th>Kommentar</th>
    </tr>
    <tr>
        <td><a href="/../Testfall/AF3-Las-en-lektion-och-gor-tillhorande-test-Testfall.md">AF3-TF1</a></td>
        <td>Firefox</td>
        <td>Pass</td>
        <td>Det borde finnas en länk till quizet direkt nåbar från startsidan. Nu måste man visa lektionen först för att kunna komma åt testet.</td>
    </tr>
    <tr>
        <td><a href="/../Testfall/AF3-Las-en-lektion-och-gor-tillhorande-test-Testfall.md">AF3-TF2</a></td>
        <td>Opera</td>
        <td>Pass</td>
        <td>Jag måste tillverka en snygg 404-sida. Symfonys defaultsida är inte snygg...</td>
    </tr>
    <tr>
        <td><a href="/../Testfall/AF3-Las-en-lektion-och-gor-tillhorande-test-Testfall.md">AF3-TF3</a></td>
        <td>IE9</td>
        <td>Pass</td>
        <td></td>
    </tr>
    <tr>
        <td><a href="/../Testfall/AF3-Las-en-lektion-och-gor-tillhorande-test-Testfall.md">AF3-TF4</a></td>
        <td>Chrome</td>
        <td>Pass</td>
        <td>Mer detaljarbete på designen av rätt och fel presentationerna behövs för att få ett trevligt resultat</td>
    </tr>
    <tr>
        <td><a href="/../Testfall/AF3-Las-en-lektion-och-gor-tillhorande-test-Testfall.md">AF3-TF5</a></td>
        <td>Firefox</td>
        <td>Pass</td>
        <td>Alternativet som användaren svarade bör vara ifyllt under presentatione av resultatet, då kan man se skillnad på vilka frågor som blev besvarade och vilka som inte blev det.</td>
    </tr>
    <tr>
        <td><a href="/../Testfall/AF3-Las-en-lektion-och-gor-tillhorande-test-Testfall.md">AF3-TF6</a></td>
        <td>IE9</td>
        <td>Pass</td>
        <td></td>
    </tr>
    <tr>
        <td><a href="/../Testfall/AF3-Las-en-lektion-och-gor-tillhorande-test-Testfall.md">AF3-TF7</a></td>
        <td>Chrome</td>
        <td>Pass</td>
        <td></td>
    </tr>
    <tr>
        <td><a href="/../Testfall/AF3-Las-en-lektion-och-gor-tillhorande-test-Testfall.md">AF3-TF8</a></td>
        <td>Firefox</td>
        <td>Pass</td>
        <td></td>
    </tr>
</table>

## Förbättningar
Vid renderingen av resultatet och av användarens svar så bör de valda värdena fyllas i. Just nu vet man 
inte om endast ett grönt fält betyder att användaren svarade rätt eller om det betyder att användaren 
inte svarade alls. Det behövs också mer detaljarbete vad gäller utseendet för att presentationen av 
resultatet ska bli snyggt.    
Quizen skulle behöva vara direkt åtkomliga från startsidan, det är de inte nu.

## Känsla av systemet
Formuläret känndes enkelt att använda. Det skulle dock behövas en varning eller bekräftelsedialog 
innan svaren skickas in för att inga misstag skall ske. 404-sodan är bedrövlig just nu, jag behöver 
skapa en egen snyggare.

## Tester som saknas
Hur beter sig quizen om databasen inte är tillgänglig? Hur är det med prestandan, det sker ganska 
många anrop till databasen när ett Quiz skapas och bearbetas.